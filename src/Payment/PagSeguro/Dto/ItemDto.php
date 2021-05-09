<?php

namespace App\Payment\PagSeguro\Dto;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ItemDto
 * @package App\Payment\PagSeguro\Dto
 */
class ItemDto
{
    /**
     * @var int
     * @Assert\NotBlank
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $nome;

    /**
     * @var int
     * @Assert\NotBlank
     */
    private $quantidade;

    /**
     * @var float
     * @Assert\NotBlank
     */
    private $preco;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ItemDto
     */
    public function setId(int $id): ItemDto
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return ItemDto
     */
    public function setNome(string $nome): ItemDto
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param int $quantidade
     * @return ItemDto
     */
    public function setQuantidade(int $quantidade): ItemDto
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param float $preco
     * @return ItemDto
     */
    public function setPreco(float $preco): ItemDto
    {
        $this->preco = $preco;
        return $this;
    }
}