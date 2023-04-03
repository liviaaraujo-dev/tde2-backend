<?php

require('reserva.php');
require('voo.php');

$passageiro1 = new Passageiro();
$passageiro1->setIdPassageiro(uniqid());
$passageiro1->setCpf("283-282-092.20");
$passageiro1->setNome("Ana Lívia");
$passageiro1->setDataNascimento("22/04/2000");
$passageiro1->setEmail("livia@gmail.com");
$passageiro1->setTelefone("(88)994567776");
// var_dump($passageiro1);


$aviao = new Aviao;
$aviao->setIdAviao(uniqid());
$aviao->setModelo("xr 30");
$aviao->setCapacidade(20);
$aviao->setFabricante('fabricante');
// var_dump($aviao);


$compra = new Compra();
$compra->setIdCliente(uniqid());
$compra->setHorario("19:20");
$compra->setPassageiro($passageiro1);
// var_dump($compra);



$reserva1= new Reserva();
$reserva1->setIdReserva(uniqid());
$reserva1->setCodigoAssento(1);
$reserva1->setCompra($compra);
// var_dump($reserva1);





$voo1 = new Voo;
$voo1->setIdVoo(uniqid());
$voo1->setCodigo('0001');
$voo1->setHorarioPartida('18:30');
$voo1->setHorarioChegada('22:00');
$voo1->setAviao($aviao);
$voo1->setReserva($reserva1);
$voo1->setDisponiveis($aviao->getCapacidade());
$voo1->decrementDispoviveis();
var_dump($voo1);


?>
