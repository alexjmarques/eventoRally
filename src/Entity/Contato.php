<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContatoRepository")
 */
class Contato
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $grauParentesco;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $telefone;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\DadosMedicos", inversedBy="contatos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $dadosMedicos;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getGrauParentesco(): ?string
    {
        return $this->grauParentesco;
    }

    public function setGrauParentesco(string $grauParentesco): self
    {
        $this->grauParentesco = $grauParentesco;

        return $this;
    }

    public function getTelefone(): ?string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getDadosMedicos(): ?DadosMedicos
    {
        return $this->dadosMedicos;
    }

    public function setDadosMedicos(?DadosMedicos $dadosMedicos): self
    {
        $this->dadosMedicos = $dadosMedicos;

        return $this;
    }
}
