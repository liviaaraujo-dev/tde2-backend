<?php

require('aviao.php');

class Voo{
    private $idVoo;
    private $codigo;
    private $horarioPartida;
    private $horarioChegada;
    private $passagensDisponiveis;
    private Aviao $aviao;
    private Passagem $reserva;

    
    public function getIdVoo(){
        return $this->idVoo;
    }

    public function setIdVoo($idVoo){
        $this->idVoo = $idVoo;

    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getHorarioPartida(){
        return $this->horarioPartida;
    }

    public function setHorarioPartida($horarioPartida){
        $this->horarioPartida = $horarioPartida;
    }

    public function getHorarioChegada(){
        return $this->horarioChegada;
    }

    public function setHorarioChegada($horarioChegada){
        $this->horarioChegada = $horarioChegada;
    }

    public function getAviao()
    {
        return $this->aviao;
    }


    public function setAviao($aviao)
    {
        $this->aviao = $aviao;
    }

    public function getPassagem()
    {
        return $this->passagem;
    }

    public function setPassagem($passagem)
    {
        $this->passagem = $passagem;
    }

    public function setPassagensDisponiveis()
    {
        $this->passagensDisponiveis = $this->aviao->getCapacidade();
    }

    public function getPassagensDisponiveis()
    {
        return $this->passagensDisponiveis;
    }

    public function  decrementPassagensDisponiveis()
    {
        $this->passagensDisponiveis = $this->passagensDisponiveis - 1;
    }
}
