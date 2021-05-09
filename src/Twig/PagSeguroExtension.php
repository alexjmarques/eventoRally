<?php

namespace App\Twig;

use App\Payment\PagSeguro\MetodoPagamento\StatusPagamentoEnum;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Class PagSeguroExtension
 * @package App\Twig
 */
class PagSeguroExtension extends AbstractExtension
{
    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            new TwigFilter('statusPagamentoLabel', [$this, 'getStatusPagamentoLabel']),
        ];
    }

    /**
     * @param int $status
     * @return mixed|null
     */
    public function getStatusPagamentoLabel(int $status = null)
    {
        return StatusPagamentoEnum::getLabel($status);
    }

}
