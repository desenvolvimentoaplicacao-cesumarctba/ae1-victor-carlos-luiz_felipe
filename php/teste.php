<?php
  
require_once('controle.php');
	
	$controle1 = new Controle();

	$controle1->ligar();
	$controle1->aumentar_vol();
	$controle1->diminuir_vol();
	$controle1->aumentar_vol();
	$controle1->aumentar_vol();
	$controle1->aumentar_vol();
	$controle1->aumentar_vol();
	$controle1->aumentar_vol();	
	$controle1->desligar();
?>