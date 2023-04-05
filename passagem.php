<?php

require('compra.php');

Class Passagem {
    private $idPassagem;
    private $codigoAssento;
    private Compra $compra;


    public function getIdPassagem()
    {
        return $this->idPassagem;
    }

    
    public function getCodigoAssento()
    {
        return $this->codigoAssento;
    }

    public function setIdPassagem($idPassagem)
    {
        $this->idPassagem = $idPassagem;
    }

  
    public function setCodigoAssento($codigoAssento)
    {
        $this->codigoAssento = $codigoAssento;
    } 

    public function getCompra()
    {
        return $this->compra;
    }

    public function setCompra($compra)
    {
        $this->compra = $compra;
    }
}

?>
