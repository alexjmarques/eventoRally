<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DadosProfissionaisRepository")
 */
class DadosProfissionais
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $empresa;

    /**
     * @ORM\Column(type="string", length=90, nullable=true)
     */
    private $ramoDeAtividade;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $funcao;

    /**
     * @ORM\Column(type="string", length=180, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $telefone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpresa(): ?string
    {
        return $this->empresa;
    }

    public function setEmpresa(string $empresa): self
    {
        $this->empresa = $empresa;

        return $this;
    }

    public function getRamoDeAtividade(): ?string
    {
        return $this->ramoDeAtividade;
    }

    public function setRamoDeAtividade(string $ramoDeAtividade): self
    {
        $this->ramoDeAtividade = $ramoDeAtividade;

        return $this;
    }

    public function getFuncao(): ?string
    {
        return $this->funcao;
    }

    public function setFuncao(string $funcao): self
    {
        $this->funcao = $funcao;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefone(): ?string
    {
        return $this->telefone;
    }

    public function setTelefone(?string $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }
}
