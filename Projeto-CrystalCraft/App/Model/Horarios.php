<?php

class Horarios{
    
    public Visitantes $idVisitante;
    public string $idEntS;
    public string $data;
    public string $horaEntrada;
    public string $horaSaida;
    public string $placaVeiculo;



    public function getIdEntS():string
    {
        return $this->idEntS;
    }

    public function setIdEntS(string $idEntS)
    {
        $this->idEntS = $idEntS;

        return $this;
    }
 
    public function getData():string
    {
        return $this->data;
    }

 
    public function setData(string $data)
    {
        $this->data = $data;

        return $this;
    }

    public function getHoraEntrada():string
    {
        return $this->horaEntrada;
    }
 
    public function setHoraEntrada(string $horaEntrada)
    {
        $this->horaEntrada = $horaEntrada;

        return $this;
    }

    public function getHoraSaida():string
    {
        return $this->horaSaida;
    }

    public function setHoraSaida(string $horaSaida)
    {
        $this->horaSaida = $horaSaida;

        return $this;
    }

    public function getPlacaVeiculo():string
    {
        return $this->placaVeiculo;
    }

    public function setPlacaVeiculo(string $placaVeiculo)
    {
        $this->placaVeiculo = $placaVeiculo;

        return $this;
    }
}

?>