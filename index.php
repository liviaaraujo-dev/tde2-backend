<?php

require('passagem.php');
require('voo.php');

$passageiro = new Passageiro();
$passageiro->setIdPassageiro(uniqid());
$passageiro->setCpf("283-282-092.20");
$passageiro->setNome("Ana Lívia");
$passageiro->setDataNascimento("22/04/2000");
$passageiro->setEmail("livia@gmail.com");
$passageiro->setTelefone("(88)994567776");
var_dump($passageiro);


$aviao = new Aviao;
$aviao->setIdAviao(uniqid());
$aviao->setModelo("Airbus A320");
$aviao->setCapacidade(200);
$aviao->setFabricante('Airbus');
var_dump($aviao);


$compra = new Compra();
$compra->setIdCliente(uniqid());
$compra->setHorario("19:20");
$compra->setPassageiro($passageiro);
var_dump($compra);



$passagem= new Passagem();
$passagem->setIdPassagem(uniqid());
$passagem->setCodigoAssento(1);
$passagem->setCompra($compra);
var_dump($passagem);





$voo = new Voo;
$voo->setIdVoo(uniqid());
$voo->setCodigo('0001');
$voo->setHorarioPartida('18:30');
$voo->setHorarioChegada('22:00');
$voo->setAviao($aviao);
$voo->setPassagem($passagem);
$voo->setPassagensDisponiveis($aviao->getCapacidade());
$voo->decrementPassagensDisponiveis();
var_dump($voo);


?>
