<?php

namespace App\Payment\PagSeguro\MetodoPagamento;

use App\Payment\PagSeguro\Exception\MetodoPagamentoNaoEncontradoException;

/**
 * Class MetodoPagamentoContext
 * @package App\Payment\PagSeguro\MetodoPagamento
 */
class MetodoPagamentoContext
{
    /**
     * @var array
     */
    private $strategies;

    /**
     * ProcessarPagamentoContext constructor.
     */
    public function __construct()
    {
        $this->strategies = [];
    }

    /**
     * @param MetodoPagamentoInterface $strategy
     */
    public function addStrategy(MetodoPagamentoInterface $strategy)
    {
        $this->strategies[] = $strategy;
    }

    /**
     * @return mixed
     */
    public function handle()
    {
        /**
         * @var MetodoPagamentoInterface $strategy
         */
        foreach ($this->strategies as $strategy) {
            if ($strategy->canBuild()) {
                return $strategy->build();
            }
        }

        throw new MetodoPagamentoNaoEncontradoException();
    }
}