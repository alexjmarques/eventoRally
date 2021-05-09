<?php

namespace App\Payment\PagSeguro\MetodoPagamento;

/**
 * Class StatusPagamentoEnum
 * @package App\Payment\PagSeguro\MetodoPagamento
 */
class StatusPagamentoEnum
{
    const AGUARDANDO_PAGAMENTO = 1;
    const EM_ANALISE = 2;
    const PAGA = 3;
    const DISPONIVEL = 4;
    const EM_DISPUTA = 5;
    const DEVOLVIDA = 6;
    const CANCELADA = 6;

    /**
     * @param int $status
     * @return mixed|null
     */
    public static function getStatus(int $status)
    {
        $array = [
            self::AGUARDANDO_PAGAMENTO,
            self::EM_ANALISE,
            self::PAGA,
            self::DISPONIVEL,
            self::EM_DISPUTA,
            self::DEVOLVIDA,
            self::CANCELADA
        ];

        return in_array($status, $array) ? $array[$status] : null;
    }

    /**
     * @param int $status
     * @return mixed|null
     */
    public static function getLabel(int $status = null)
    {
        $array = [
            StatusPagamentoEnum::AGUARDANDO_PAGAMENTO => 'Aguardando Pagamento',
            StatusPagamentoEnum::CANCELADA => 'Cancelado',
            StatusPagamentoEnum::DEVOLVIDA => 'Pagamento devolvido',
            StatusPagamentoEnum::EM_DISPUTA => 'Em disputa',
            StatusPagamentoEnum::PAGA => 'Pago',
            StatusPagamentoEnum::EM_ANALISE => 'Em análise',
            StatusPagamentoEnum::DISPONIVEL => 'Disponivel',
        ];

        return array_key_exists($status, $array) ? $array[$status] : 'Status não definido (' . $status . ')';
    }
}
