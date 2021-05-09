<?php

namespace App\Payment\PagSeguro;

use App\Payment\PagSeguro\Dto\DadosPagamentoDto;
use App\Payment\PagSeguro\MetodoPagamento\BoletoBancario;
use App\Payment\PagSeguro\MetodoPagamento\CartaoCredito;
use App\Payment\PagSeguro\MetodoPagamento\MetodoPagamentoContext;
use PagSeguro\Configuration\Configure;
use PagSeguro\Library;
use PagSeguro\Services\Session;

/**
 * Class PagSeguroService
 * @package App\Payment\PagSeguro
 */
class PagSeguroService
{
    /**
     * PagSeguroService constructor.
     * @param string $enviroment
     * @param string $email
     * @param string $token
     */
    public function __construct(
        string $enviroment,
        string $email,
        string $token
    ) {
        $this->enviroment = $enviroment;
        $this->email = $email;
        $this->token = $token;

        Library::initialize();
        Library::cmsVersion()->setName("Pagseguro")->setRelease("1.0.0");
        Library::moduleVersion()->setName("Pagseguro")->setRelease("1.0.0");

        Configure::setEnvironment($this->enviroment);
        Configure::setLog(false, '/tmp/pagseguro.log');
        Configure::setCharset('UTF-8');

        Configure::setAccountCredentials($this->email, $this->token);
    }

    /**
     * Gera o código referente a sessão da transação
     *
     * @return mixed
     */
    public function generateSession()
    {
        $response = Session::create(
            Configure::getAccountCredentials()
        );

        return $response;
    }

    /**
     * @param DadosPagamentoDto $dadosPagamentoDto
     * @return mixed
     */
    public function processPayment(DadosPagamentoDto $dadosPagamentoDto)
    {
        $metodoPagamentoContext = new MetodoPagamentoContext();
        $metodoPagamentoContext->addStrategy(new BoletoBancario($dadosPagamentoDto));
        $metodoPagamentoContext->addStrategy(new CartaoCredito($dadosPagamentoDto));
        $metodoPagamentoSelecionado = $metodoPagamentoContext->handle();

        $processarPagamentoHandle = new ProcessarPagamentoHandle($metodoPagamentoSelecionado);
        return $processarPagamentoHandle->process();
    }

    /**
     * @return mixed
     */
    public function check()
    {

        return \PagSeguro\Services\Transactions\Notification::check(
            \PagSeguro\Configuration\Configure::getAccountCredentials()
        );
    }
}