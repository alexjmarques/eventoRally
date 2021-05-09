<?php

namespace App\Payment\PagSeguro\Dto;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class DadosCompradorDto
 * @package App\Payment\PagSeguro\Dto
 */
class DadosCompradorDto
{
    /**
     * @var string
     * @Assert\NotBlank
     */
    private $nome;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $sobrenome;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $email;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $ip;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $ddd;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $telefone;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $cpf;

    /**
     * @var EnderecoCompradorDto
     */
    private $enderecoComprador;

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return DadosCompradorDto
     */
    public function setNome(string $nome): DadosCompradorDto
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return DadosCompradorDto
     */
    public function setEmail(string $email): DadosCompradorDto
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return DadosCompradorDto
     */
    public function setIp(string $ip): DadosCompradorDto
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getDdd()
    {
        return $this->ddd;
    }

    /**
     * @param string $ddd
     * @return DadosCompradorDto
     */
    public function setDdd(string $ddd): DadosCompradorDto
    {
        $this->ddd = $ddd;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param string $telefone
     * @return DadosCompradorDto
     */
    public function setTelefone(string $telefone): DadosCompradorDto
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     * @return DadosCompradorDto
     */
    public function setCpf(string $cpf): DadosCompradorDto
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return EnderecoCompradorDto
     */
    public function getEnderecoComprador()
    {
        return $this->enderecoComprador;
    }

    /**
     * @param EnderecoCompradorDto $enderecoComprador
     * @return DadosCompradorDto
     */
    public function setEnderecoComprador(EnderecoCompradorDto $enderecoComprador): DadosCompradorDto
    {
        $this->enderecoComprador = $enderecoComprador;
        return $this;
    }

    /**
     * @return string
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param string $sobrenome
     * @return DadosCompradorDto
     */
    public function setSobrenome(string $sobrenome): DadosCompradorDto
    {
        $this->sobrenome = $sobrenome;
        return $this;
    }
}