<?php

class Horarios{
    
    public Visitantes $idVisitante;
    public string $idRegistro;
    public string $data;
    public string $horaEntrada;
    public string $horaSaida;
    public string $placaVeiculo;



    public function getIdRegistro():string
    {
        return $this->idRegistro;
    }

    public function setIdRegistro(string $idRegistro)
    {
        $this->idRegistro = $idRegistro;
    }
 
    public function getData():string
    {
        return $this->data;
    }

 
    public function setData(string $data)
    {
        $this->data = $data;
    }

    public function getHoraEntrada():string
    {
        return $this->horaEntrada;
    }
 
    public function setHoraEntrada(string $horaEntrada)
    {
        $this->horaEntrada = $horaEntrada;
    }

    public function getHoraSaida():string
    {
        return $this->horaSaida;
    }

    public function setHoraSaida(string $horaSaida)
    {
        $this->horaSaida = $horaSaida;
    }

    public function getPlacaVeiculo():string
    {
        return $this->placaVeiculo;
    }

    public function setPlacaVeiculo(string $placaVeiculo)
    {
        $this->placaVeiculo = $placaVeiculo;
    }
}

?>