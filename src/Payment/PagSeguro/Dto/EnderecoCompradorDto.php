<?php

namespace App\Payment\PagSeguro\Dto;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class EnderecoCompradorDto
 * @package App\Payment\PagSeguro\Dto
 */
class EnderecoCompradorDto
{
    /**
     * @var string
     * @Assert\NotBlank
     */
    private $rua;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $numero;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $bairro;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $cep;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $cidade;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $estado;

    /**
     * @var string
     */
    private $pais;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $complemento;

    /**
     * @return string
     * @Assert\NotBlank
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * @param string $rua
     * @return EnderecoCompradorDto
     */
    public function setRua(string $rua): EnderecoCompradorDto
    {
        $this->rua = $rua;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     * @return EnderecoCompradorDto
     */
    public function setNumero(string $numero): EnderecoCompradorDto
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param string $bairro
     * @return EnderecoCompradorDto
     */
    public function setBairro(string $bairro): EnderecoCompradorDto
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param string $cep
     * @return EnderecoCompradorDto
     */
    public function setCep(string $cep): EnderecoCompradorDto
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param string $cidade
     * @return EnderecoCompradorDto
     */
    public function setCidade(string $cidade): EnderecoCompradorDto
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param string $estado
     * @return EnderecoCompradorDto
     */
    public function setEstado(string $estado): EnderecoCompradorDto
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param string $pais
     * @return EnderecoCompradorDto
     */
    public function setPais(string $pais): EnderecoCompradorDto
    {
        $this->pais = $pais;
        return $this;
    }

    /**
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param string $complemento
     * @return EnderecoCompradorDto
     */
    public function setComplemento(string $complemento): EnderecoCompradorDto
    {
        $this->complemento = $complemento;
        return $this;
    }
}