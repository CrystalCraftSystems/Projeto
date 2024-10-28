<?php

class Moradores{

    public string $cpf;
    public string $nomeMorador;
    public Residencias $idResidencia;
    
 
    public function getCpf():string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getNome():string
    {
        return $this->nomeMorador;
    }

    public function setNome(string $nome)
    {
        $this->nomeMorador = $nome;

        return $this;
    }
}

?>