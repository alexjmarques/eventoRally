<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarioEventoRepository")
 */
class UsuarioEvento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dataPagamento;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $statusPagamento;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $codePagamento;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $objetoPagamento;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Evento", inversedBy="usuarioEventos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $evento;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cliente", inversedBy="usuarioEventos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cliente;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataPagamento(): ?\DateTimeInterface
    {
        return $this->dataPagamento;
    }

    public function setDataPagamento(\DateTimeInterface $dataPagamento): self
    {
        $this->dataPagamento = $dataPagamento;

        return $this;
    }

    public function getEvento(): ?Evento
    {
        return $this->evento;
    }

    public function setEvento(?Evento $evento): self
    {
        $this->evento = $evento;

        return $this;
    }

    public function getCliente(): ?Cliente
    {
        return $this->cliente;
    }

    public function setCliente(?Cliente $cliente): self
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusPagamento()
    {
        return $this->statusPagamento;
    }

    /**
     * @param mixed $statusPagamento
     * @return UsuarioEvento
     */
    public function setStatusPagamento($statusPagamento)
    {
        $this->statusPagamento = $statusPagamento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodePagamento()
    {
        return $this->codePagamento;
    }

    /**
     * @param mixed $codePagamento
     * @return UsuarioEvento
     */
    public function setCodePagamento($codePagamento)
    {
        $this->codePagamento = $codePagamento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObjetoPagamento()
    {
        return $this->objetoPagamento;
    }

    /**
     * @param mixed $objetoPagamento
     * @return UsuarioEvento
     */
    public function setObjetoPagamento($objetoPagamento)
    {
        $this->objetoPagamento = $objetoPagamento;
        return $this;
    }
}
