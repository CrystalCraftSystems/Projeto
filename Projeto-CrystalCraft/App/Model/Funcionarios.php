<?php
class Funcionarios{

    public string $idFuncionario;
    public string $nome;
    public string $cpf;
    public string $dataNascimento;
    public string $funcao;


    public function getIdFuncionario():string
    {
        return $this->idFuncionario;
    }

    public function setIdFuncionario(string $idFuncionario)
    {
        $this->idFuncionario = $idFuncionario;

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

    public function getFuncao()
    {
        return $this->funcao;
    }

    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;

        return $this;
    }
}
?>