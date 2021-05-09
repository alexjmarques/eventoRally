<?php

namespace App\Payment\PagSeguro\Dto;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class DadosPagamentoDto
 * @package App\Payment\PagSeguro\Dto
 */
class DadosPagamentoDto
{
    /**
     * @var int
     * @Assert\NotBlank
     */
    private $metodoPagamento;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $session;

    /**
     * @var Collection
     * @Assert\NotBlank
     */
    private $items;

    /**
     * @var DadosCompradorDto
     * @Assert\NotBlank
     */
    private $dadosComprador;

    /**
     * @var DadosCartaoCreditoDto
     */
    private $cartaoCredito;

    /**
     * @var float
     */
    private $valorTotal;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private $urlRetorno;

    /**
     * DadosPagamentoDto constructor.
     */
    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getMetodoPagamento()
    {
        return $this->metodoPagamento;
    }

    /**
     * @param int $metodoPagamento
     * @return DadosPagamentoDto
     */
    public function setMetodoPagamento(int $metodoPagamento): DadosPagamentoDto
    {
        $this->metodoPagamento = $metodoPagamento;
        return $this;
    }

    /**
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * @param string $session
     * @return DadosPagamentoDto
     */
    public function setSession(string $session): DadosPagamentoDto
    {
        $this->session = $session;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return DadosPagamentoDto
     */
    public function setCurrency(string $currency): DadosPagamentoDto
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return DadosPagamentoDto
     */
    public function setReference(string $reference): DadosPagamentoDto
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    /**
     * @param Collection $items
     * @return DadosPagamentoDto
     */
    public function setItems(Collection $items): DadosPagamentoDto
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @param ItemDto $itemsDto
     */
    public function addItem(ItemDto $itemsDto)
    {
        if (!$this->items->contains($itemsDto)) {
            $this->items->add($itemsDto);
        }
    }

    /**
     * @return DadosCompradorDto
     */
    public function getDadosComprador()
    {
        return $this->dadosComprador;
    }

    /**
     * @param DadosCompradorDto $dadosComprador
     * @return DadosPagamentoDto
     */
    public function setDadosComprador(DadosCompradorDto $dadosComprador): DadosPagamentoDto
    {
        $this->dadosComprador = $dadosComprador;
        return $this;
    }

    /**
     * @return DadosCartaoCreditoDto
     */
    public function getCartaoCredito()
    {
        return $this->cartaoCredito;
    }

    /**
     * @param DadosCartaoCreditoDto $cartaoCredito
     * @return DadosPagamentoDto
     */
    public function setCartaoCredito(DadosCartaoCreditoDto $cartaoCredito): DadosPagamentoDto
    {
        $this->cartaoCredito = $cartaoCredito;
        return $this;
    }

    /**
     * @return float
     */
    public function getValorTotal(): float
    {
        $valor = 0;

        /**
         * @var ItemDto $item
         */
        foreach ($this->items as $item) {
            $valor += $item->getPreco();
        }

        return $valor;
    }

    /**
     * @param float $valorTotal
     * @return DadosPagamentoDto
     */
    public function setValorTotal(float $valorTotal): DadosPagamentoDto
    {
        $this->valorTotal = $valorTotal;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlRetorno()
    {
        return $this->urlRetorno;
    }

    /**
     * @param string $urlRetorno
     * @return DadosPagamentoDto
     */
    public function setUrlRetorno(string $urlRetorno): DadosPagamentoDto
    {
        $this->urlRetorno = $urlRetorno;
        return $this;
    }
}