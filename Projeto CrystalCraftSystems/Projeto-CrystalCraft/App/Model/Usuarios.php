<?php

class Usuarios
{

    private string $idUsuario;
    private string $nome;
    private string $senha;
    private string $email;
    private string $cpf;
    private string $dataNascimento;
    private bool $permissaoEspecial;
    private string $codAdm;

    
    public function getIdUsuario():string
    {
        return $this->idUsuario;
    }

    public function setIdUsuario(string $idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

 
    public function getNome():string
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSenha():string
    {
        return $this->senha;
    }

    public function setSenha(string $senha)
    {
        $this->senha = $senha;

        return $this;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    public function getCpf():string
    {
        return $this->cpf;
    }
 
    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }
 
    public function getDataNascimento():string
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento(string $dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    public function getPermissaoEspecial():bool 
    {
        return $this->permissaoEspecial;
    }

    public function setPermissaoEspecial(bool $permissaoEspecial)
    {
        $this->permissaoEspecial = $permissaoEspecial;

        return $this;
    }

    public function getCodAdm():string
    {
        return $this->codAdm;
    }

    public function setCodAdm(string $codAdm)
    {
        $this->codAdm = $codAdm;

        return $this;
    }
}
