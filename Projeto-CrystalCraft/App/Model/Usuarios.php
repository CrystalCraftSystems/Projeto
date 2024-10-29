<?php

class Usuarios
{

    public string $idUsuario;
    public string $nomeUsuario;
    public string $senha;
    public string $emailUsuario;
    public string $cpfUsuario;
    public string $dataNascimentoUsuario;
    public bool $permissaoEspecial;
    

    
    public function getIdUsuario(): string
    {
        return $this->idUsuario;
    }

    public function setIdUsuario(string $idUsuario): string
    {
        $this->idUsuario = $idUsuario;

       
    }

 
    public function getNomeUsuario():string
    {
        return $this->nomeUsuario;
    }

    public function setNomeUsuario(string $nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;

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

    public function getEmailUsuario():string
    {
        return $this->emailUsuario;
    }

    public function setEmailUsuario(string $emailUsuario)
    {
        $this->emailUsuario = $emailUsuario;

        return $this;
    }

    public function getCpfUsuario():string
    {
        return $this->cpfUsuario;
    }
 
    public function setCpfUsuario(string $cpfUsuario)
    {
        $this->cpfUsuario = $cpfUsuario;

        return $this;
    }
 
    public function getDataNascimentoUsuario():string
    {
        return $this->dataNascimentoUsuario;
    }

    public function setDataNascimentoUsuario(string $dataNascimentoUsuario)
    {
        $this->dataNascimentoUsuario = $dataNascimentoUsuario;

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

 
}
