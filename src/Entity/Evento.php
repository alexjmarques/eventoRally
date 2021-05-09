<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventoRepository")
 */
class Evento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="date")
     */
    private $data;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagem;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localPartida;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localChegada;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $pais;

    /**
     * @ORM\Column(type="text")
     */
    private $descricaoLonga;

    /**
     * @ORM\Column(type="text")
     */
    private $descricaoCurta;

    /**
     * @ORM\Column(type="float")
     */
    private $valor;


    /**
     * @ORM\Column(type="string", length=2)
     */
    private $vagas;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UsuarioEvento", mappedBy="evento", orphanRemoval=true)
     */
    private $usuarioEventos;

    public function __construct()
    {
        $this->clientes = new ArrayCollection();
        $this->usuarioEventos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getVagas(): ?string
    {
        return $this->vagas;
    }

    public function setVagas(string $vagas): self
    {
        $this->vagas = $vagas;

        return $this;
    }

    public function getImagem(): ?string
    {
        return $this->imagem;
    }

    public function setImagem(string $imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getLocalPartida(): ?string
    {
        return $this->localPartida;
    }

    public function setLocalPartida(string $localPartida): self
    {
        $this->localPartida = $localPartida;

        return $this;
    }

    public function getLocalChegada(): ?string
    {
        return $this->localChegada;
    }

    public function setLocalChegada(string $localChegada): self
    {
        $this->localChegada = $localChegada;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getDescricaoLonga(): ?string
    {
        return $this->descricaoLonga;
    }

    public function setDescricaoLonga(string $descricaoLonga): self
    {
        $this->descricaoLonga = $descricaoLonga;

        return $this;
    }

    public function getDescricaoCurta(): ?string
    {
        return $this->descricaoCurta;
    }

    public function setDescricaoCurta(string $descricaoCurta): self
    {
        $this->descricaoCurta = $descricaoCurta;

        return $this;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * @return Collection|UsuarioEvento[]
     */
    public function getUsuarioEventos(): Collection
    {
        return $this->usuarioEventos;
    }

    public function addUsuarioEvento(UsuarioEvento $usuarioEvento): self
    {
        if (!$this->usuarioEventos->contains($usuarioEvento)) {
            $this->usuarioEventos[] = $usuarioEvento;
            $usuarioEvento->setEvento($this);
        }

        return $this;
    }

    public function removeUsuarioEvento(UsuarioEvento $usuarioEvento): self
    {
        if ($this->usuarioEventos->contains($usuarioEvento)) {
            $this->usuarioEventos->removeElement($usuarioEvento);
            // set the owning side to null (unless already changed)
            if ($usuarioEvento->getEvento() === $this) {
                $usuarioEvento->setEvento(null);
            }
        }

        return $this;
    }
}
