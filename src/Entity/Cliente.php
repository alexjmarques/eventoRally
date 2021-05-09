<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 */
class Cliente implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $sobrenome;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $apelido;

    /**
     * @ORM\Column(type="date")
     */
    private $dataNascimento;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $rg;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $cpf;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $cnh;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $sexo;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $telefoneResidencial;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $telefoneCelular;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $endereco;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $complemento;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $bairro;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $cep;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $cidade;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $estado;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\DadosProfissionais", cascade={"persist", "remove"})
     */
    private $dadosProfissionais;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\DadosMedicos", cascade={"persist", "remove"})
     */
    private $dadosMedicos;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\DadosVeiculo", cascade={"persist", "remove"})
     */
    private $dadosVeiculo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UsuarioEvento", mappedBy="cliente", orphanRemoval=true)
     */
    private $usuarioEventos;

    public function __construct()
    {
        $this->usuarioEventos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getApelido(): ?string
    {
        return $this->apelido;
    }

    public function setApelido(string $apelido): self
    {
        $this->apelido = $apelido;

        return $this;
    }

    public function getDataNascimento(): ?\DateTimeInterface
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento(\DateTimeInterface $dataNascimento): self
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    public function getRg(): ?string
    {
        return $this->rg;
    }

    public function setRg(string $rg): self
    {
        $this->rg = $rg;

        return $this;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getCnh(): ?string
    {
        return $this->cnh;
    }

    public function setCnh(string $cnh): self
    {
        $this->cnh = $cnh;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getTelefoneResidencial(): ?string
    {
        return $this->telefoneResidencial;
    }

    public function setTelefoneResidencial(string $telefoneResidencial): self
    {
        $this->telefoneResidencial = $telefoneResidencial;

        return $this;
    }

    public function getTelefoneCelular(): ?string
    {
        return $this->telefoneCelular;
    }

    public function setTelefoneCelular(string $telefoneCelular): self
    {
        $this->telefoneCelular = $telefoneCelular;

        return $this;
    }

    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getComplemento(): ?string
    {
        return $this->complemento;
    }

    public function setComplemento(?string $complemento): self
    {
        $this->complemento = $complemento;

        return $this;
    }

    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    public function setBairro(string $bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(string $cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    public function setCidade(string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

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

    public function getDadosVeiculo(): ?DadosVeiculo
    {
        return $this->dadosVeiculo;
    }

    public function setDadosVeiculo(DadosVeiculo $dadosVeiculo): self
    {
        $this->dadosVeiculo = $dadosVeiculo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDadosProfissionais()
    {
        return $this->dadosProfissionais;
    }

    /**
     * @param mixed $dadosProfissionais
     */
    public function setDadosProfissionais($dadosProfissionais): void
    {
        $this->dadosProfissionais = $dadosProfissionais;
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
            $usuarioEvento->setCliente($this);
        }

        return $this;
    }

    public function removeUsuarioEvento(UsuarioEvento $usuarioEvento): self
    {
        if ($this->usuarioEventos->contains($usuarioEvento)) {
            $this->usuarioEventos->removeElement($usuarioEvento);
            // set the owning side to null (unless already changed)
            if ($usuarioEvento->getCliente() === $this) {
                $usuarioEvento->setCliente(null);
            }
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param mixed $sobrenome
     * @return Cliente
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
        return $this;
    }
}
