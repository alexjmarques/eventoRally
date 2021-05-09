<?php

namespace App\Payment\PagSeguro;

use App\Payment\PagSeguro\MetodoPagamento\MetodoPagamentoInterface;
use PagSeguro\Configuration\Configure;
use PagSeguro\Domains\Requests\DirectPayment\Boleto;
use PagSeguro\Domains\Requests\DirectPayment\CreditCard;

/**
 * Class ProcessarPagamentoHandle
 * @package App\Payment\PagSeguro
 */
class ProcessarPagamentoHandle
{
    /**
     * @var Boleto | CreditCard
     */
    private $metodoPagamento;

    /**
     * ProcessarPagamentoHandle constructor.
     * @param MetodoPagamentoInterface $metodoPagamento
     */
    public function __construct($metodoPagamento)
    {
        $this->metodoPagamento = $metodoPagamento;
    }

    /**
     * @return mixed
     */
    public function process()
    {
        return $this->metodoPagamento->register(
            Configure::getAccountCredentials()
        );
    }
}