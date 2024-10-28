<?php

class Visitantes{

    public string $idVisitante;
    public string $nome;
    public string $descricao;
    public string $nomeMorador;

    public function getIdVisitante():string
    {
        return $this->idVisitante;
    }

    public function setIdVisitante(string $idVisitante)
    {
        $this->idVisitante = $idVisitante;

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
 
    public function getDescricao():string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getNomeMorador():string
    {
        return $this->nomeMorador;
    }

    public function setNomeMorador(string $nomeMorador)
    {
        $this->nomeMorador = $nomeMorador;

        return $this;
    }
}

?>