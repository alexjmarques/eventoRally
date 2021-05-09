<?php

namespace App\Payment\PagSeguro\Exception;

use DomainException;
use Throwable;

/**
 * Class MetodoPagamentoNaoEncontradoException
 * @package App\Payment\PagSeguro\Exception
 */
class MetodoPagamentoNaoEncontradoException extends DomainException
{
    public function __construct($message = "Metodo de pagamento não encontrado", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}