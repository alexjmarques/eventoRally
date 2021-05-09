<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DadosMedicosRepository")
 */
class DadosMedicos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $tipoSanguineo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $possuiAlergia;

    /**
     * @ORM\Column(type="boolean")
     */
    private $possuiDoenca;

    /**
     * @ORM\Column(type="boolean")
     */
    private $tomaMedicamento;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $nomePlanoSaude;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $telefonePlanoSaude;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contato", mappedBy="dadosMedicos", orphanRemoval=true)
     */
    private $contatos;

    public function __construct()
    {
        $this->contatos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoSanguineo(): ?string
    {
        return $this->tipoSanguineo;
    }

    public function setTipoSanguineo(string $tipoSanguineo): self
    {
        $this->tipoSanguineo = $tipoSanguineo;

        return $this;
    }

    public function getPossuiAlergia(): ?bool
    {
        return $this->possuiAlergia;
    }

    public function setPossuiAlergia(bool $possuiAlergia): self
    {
        $this->possuiAlergia = $possuiAlergia;

        return $this;
    }

    public function getPossuiDoenca(): ?bool
    {
        return $this->possuiDoenca;
    }

    public function setPossuiDoenca(bool $possuiDoenca): self
    {
        $this->possuiDoenca = $possuiDoenca;

        return $this;
    }

    public function getTomaMedicamento(): ?bool
    {
        return $this->tomaMedicamento;
    }

    public function setTomaMedicamento(bool $tomaMedicamento): self
    {
        $this->tomaMedicamento = $tomaMedicamento;

        return $this;
    }

    public function getNomePlanoSaude(): ?string
    {
        return $this->nomePlanoSaude;
    }

    public function setNomePlanoSaude(string $nomePlanoSaude): self
    {
        $this->nomePlanoSaude = $nomePlanoSaude;

        return $this;
    }

    public function getTelefonePlanoSaude(): ?string
    {
        return $this->telefonePlanoSaude;
    }

    public function setTelefonePlanoSaude(?string $telefonePlanoSaude): self
    {
        $this->telefonePlanoSaude = $telefonePlanoSaude;

        return $this;
    }

    /**
     * @return Collection|Contato[]
     */
    public function getContatos(): Collection
    {
        return $this->contatos;
    }

    public function addContato(Contato $contato): self
    {
        if (!$this->contatos->contains($contato)) {
            $this->contatos[] = $contato;
            $contato->setDadosMedicos($this);
        }

        return $this;
    }

    public function removeContato(Contato $contato): self
    {
        if ($this->contatos->contains($contato)) {
            $this->contatos->removeElement($contato);
            // set the owning side to null (unless already changed)
            if ($contato->getDadosMedicos() === $this) {
                $contato->setDadosMedicos(null);
            }
        }

        return $this;
    }
}
