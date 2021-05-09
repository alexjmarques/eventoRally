<?php

namespace App\Payment\PagSeguro\MetodoPagamento;

use PagSeguro\Domains\Requests\DirectPayment\Boleto;

/***
 * Class BoletoBancario
 * @package App\Payment\PagSeguro\MetodoPagamento
 */
class BoletoBancario extends AbstractMetodoPagamento implements MetodoPagamentoInterface
{
    /**
     * @return bool
     */
    public function canBuild(): bool
    {
        return MetodoPagamentoEnum::BOLETO === $this->dadosPagamento->getMetodoPagamento();
    }
    /**
     * @return Boleto
     */
    public function build()
    {
        $objeto = new Boleto();

        $objeto->setCurrency("BRL");
        $objeto->setMode('DEFAULT');
        $objeto->setReference(MetodoPagamentoEnum::BOLETO);;
        $objeto->setSender()->setHash($this->dadosPagamento->getSession());

        $this->setDadosComprador($objeto);
        $this->setDadosContato($objeto);
        $this->setDocumentos($objeto);
        $this->setItems($objeto);
        $this->setEndereco($objeto);

        return $objeto;
    }
}