<?php

namespace App\Payment\PagSeguro\MetodoPagamento;

use PagSeguro\Domains\Requests\DirectPayment\CreditCard;

/***
 * Class CartaoCredito
 * @package App\Payment\PagSeguro\MetodoPagamento
 */
class CartaoCredito extends AbstractMetodoPagamento implements MetodoPagamentoInterface
{
    /**
     * @return bool
     */
    public function canBuild(): bool
    {
        return MetodoPagamentoEnum::CARTAO_CREDITO === $this->dadosPagamento->getMetodoPagamento();
    }

    /**
     * @return CreditCard
     */
    public function build()
    {
        $objeto = new CreditCard();

        $objeto->setToken($this->dadosPagamento->getCartaoCredito()->getToken());
        $objeto->setSender()->setHash($this->dadosPagamento->getSession());
        $objeto->setMode('DEFAULT');
        $objeto->setCurrency("BRL");
        $objeto->setReference(MetodoPagamentoEnum::CARTAO_CREDITO);

        $objeto->setBilling()->setAddress()->withParameters(
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getRua(),
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getNumero(),
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getBairro(),
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getCep(),
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getCidade(),
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getEstado(),
            'BRA',
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getComplemento()
        );


        $objeto->setInstallment()->withParameters(
            $this->dadosPagamento->getCartaoCredito()->getParcelas(),
            $this->dadosPagamento->getValorTotal(),
            null
        );

        $objeto->setHolder()->setBirthdate($this->dadosPagamento->getCartaoCredito()->getDataNascimento()->format('d/m/Y'));
        $objeto->setHolder()->setName($this->dadosPagamento->getCartaoCredito()->getNomeImpressoCartao());

        $telefone = explode(' ',$this->dadosPagamento->getDadosComprador()->getTelefone());

        $ddd = str_replace(['(',')'], ['', ''], $telefone[0]);
        $telefone = str_replace(['-', '/', '.', '', '-'], '', $telefone[1]);

        $objeto->setHolder()->setPhone()->withParameters(
            $ddd,
            $telefone
        );

        $cpf = str_replace(['-', '/', '.', ''], '', $this->dadosPagamento->getCartaoCredito()->getCpfTitular());
        $objeto->setHolder()->setDocument()->withParameters('CPF', $cpf);
        $objeto->setNotificationUrl($this->dadosPagamento->getUrlRetorno());

        $this->setDadosComprador($objeto);
        $this->setDadosContato($objeto);
        $this->setDocumentos($objeto);
        $this->setItems($objeto);
        $this->setEndereco($objeto);

        return $objeto;
    }
}