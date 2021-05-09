<?php

namespace App\Payment\PagSeguro\MetodoPagamento;

use App\Payment\PagSeguro\Dto\DadosPagamentoDto;
use App\Payment\PagSeguro\Dto\ItemDto;

/**
 * Class AbstractMetodoPagamento
 * @package App\Payment\PagSeguro\MetodoPagamento
 */
Abstract class AbstractMetodoPagamento
{
    /**
     * @var DadosPagamentoDto
     */
    protected $dadosPagamento;

    /**
     * MetodoPagamentoInterface constructor.
     * @param DadosPagamentoDto $dadosPagamentoDto
     */
    public function __construct(DadosPagamentoDto $dadosPagamentoDto)
    {
        $this->dadosPagamento = $dadosPagamentoDto;
    }

    /**
     * @param $objeto
     */
    protected function setDadosComprador($objeto)
    {
        $objeto->setSender()->setName($this->dadosPagamento->getDadosComprador()->getNome() . ' ' . $this->dadosPagamento->getDadosComprador()->getSobrenome());
        $objeto->setSender()->setEmail('email@sandbox.pagseguro.com.br');
        $objeto->setSender()->setIp($this->dadosPagamento->getDadosComprador()->getIp());
    }

    /**
     * @param $objeto
     */
    protected function setDadosContato($objeto)
    {
        $telefone = explode(' ',$this->dadosPagamento->getDadosComprador()->getTelefone());

        if (!$telefone) {
            return;
        }
        $ddd = str_replace(['(',')'], ['', ''], $telefone[0]);
        $telefone = str_replace(['-', '/', '.', '', '-'], '', $telefone[1]);


        $objeto->setSender()->setPhone()->withParameters($ddd, $telefone);

    }

    /**
     * @param $objeto
     */
    protected function setDocumentos($objeto)
    {
        $cpf = str_replace(['-', '/', '.', ''], '', $this->dadosPagamento->getDadosComprador()->getCpf());

        $objeto->setSender()->setDocument()->withParameters('CPF', $cpf);
    }

    /**
     * @param $objeto
     */
    protected function setItems($objeto)
    {
        /**
         * @var $item ItemDto
         */
        foreach ($this->dadosPagamento->getItems() as $item) {
            if (!$item instanceof ItemDto) {
                throw new \DomainException("O item adicionado não implementa a interface ItemDto");
            }

            $objeto->addItems()->withParameters(
                $item->getId(),
                $item->getNome(),
                $item->getQuantidade(),
                $item->getPreco()
            );
        }
    }


    protected function setEndereco($objeto)
    {
        $objeto->setShipping()->setAddress()->withParameters(
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getRua(),
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getNumero(),
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getBairro(),
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getCep(),
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getCidade(),
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getEstado(),
            'BRA',
            $this->dadosPagamento->getDadosComprador()->getEnderecoComprador()->getComplemento()
        );
    }
}