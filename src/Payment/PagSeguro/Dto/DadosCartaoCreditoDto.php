<?php

namespace App\Payment\PagSeguro\Dto;

use DateTime;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class DadosCartaoCreditoDto
 * @package App\Payment\PagSeguro\Dto
 */
class DadosCartaoCreditoDto
{
    /**
     * @var string
     * @Assert\NotBlank
     */
    private $numero;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $codigoSeguranca;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $mesVencimento;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $anoVencimento;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $nomeImpressoCartao;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $cpfTitular;

    /**
     * @var DateTime
     * @Assert\NotBlank
     */
    private $dataNascimento;

    /**
     * @var int
     * @Assert\NotBlank
     */
    private $parcelas;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $token;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $bandeira;

    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     * @return DadosCartaoCreditoDto
     */
    public function setNumero(string $numero): DadosCartaoCreditoDto
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodigoSeguranca()
    {
        return $this->codigoSeguranca;
    }

    /**
     * @param string $codigoSeguranca
     * @return DadosCartaoCreditoDto
     */
    public function setCodigoSeguranca(string $codigoSeguranca): DadosCartaoCreditoDto
    {
        $this->codigoSeguranca = $codigoSeguranca;
        return $this;
    }

    /**
     * @return string
     */
    public function getMesVencimento()
    {
        return $this->mesVencimento;
    }

    /**
     * @param string $mesVencimento
     * @return DadosCartaoCreditoDto
     */
    public function setMesVencimento(string $mesVencimento): DadosCartaoCreditoDto
    {
        $this->mesVencimento = $mesVencimento;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnoVencimento()
    {
        return $this->anoVencimento;
    }

    /**
     * @param string $anoVencimento
     * @return DadosCartaoCreditoDto
     */
    public function setAnoVencimento(string $anoVencimento): DadosCartaoCreditoDto
    {
        $this->anoVencimento = $anoVencimento;
        return $this;
    }

    /**
     * @return string
     */
    public function getNomeImpressoCartao()
    {
        return $this->nomeImpressoCartao;
    }

    /**
     * @param string $nomeImpressoCartao
     * @return DadosCartaoCreditoDto
     */
    public function setNomeImpressoCartao(string $nomeImpressoCartao): DadosCartaoCreditoDto
    {
        $this->nomeImpressoCartao = $nomeImpressoCartao;
        return $this;
    }

    /**
     * @return string
     */
    public function getCpfTitular()
    {
        return $this->cpfTitular;
    }

    /**
     * @param string $cpfTitular
     * @return DadosCartaoCreditoDto
     */
    public function setCpfTitular(string $cpfTitular): DadosCartaoCreditoDto
    {
        $this->cpfTitular = $cpfTitular;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * @param string $dataNascimento
     * @return DadosCartaoCreditoDto
     */
    public function setDataNascimento(DateTime $dataNascimento): DadosCartaoCreditoDto
    {
        $this->dataNascimento = $dataNascimento;
        return $this;
    }

    /**
     * @return int
     */
    public function getParcelas()
    {
        return $this->parcelas;
    }

    /**
     * @param int $parcelas
     * @return DadosCartaoCreditoDto
     */
    public function setParcelas(int $parcelas): DadosCartaoCreditoDto
    {
        $this->parcelas = $parcelas;
        return $this;
    }

    /**
     * @return string
     */
    public function getBandeira()
    {
        return $this->bandeira;
    }

    /**
     * @param string $bandeira
     * @return DadosCartaoCreditoDto
     */
    public function setBandeira(string $bandeira): DadosCartaoCreditoDto
    {
        $this->bandeira = $bandeira;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return DadosCartaoCreditoDto
     */
    public function setToken(string $token): DadosCartaoCreditoDto
    {
        $this->token = $token;
        return $this;
    }
}