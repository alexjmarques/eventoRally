<?php

namespace App\Payment\PagSeguro\MetodoPagamento;

use App\Payment\PagSeguro\Dto\DadosPagamentoDto;

/**
 * Interface MetodoPagamentoInterface
 */
interface MetodoPagamentoInterface
{
    /**
     * MetodoPagamentoInterface constructor.
     * @param DadosPagamentoDto $dadosPagamentoDto
     */
    public function __construct(DadosPagamentoDto $dadosPagamentoDto);

    /**
     * @return bool
     */
    public function canBuild(): bool;

    /**
     * @return mixed
     */
    public function build();
}