<?php
class Controle
{
	public $volume;
	public $ligado;

	function __construct()
	{
	  $this->volume = 0;
	  $this->ligado = 0;
	}	

	function ligar()
	{
		$this->ligado = 1;
		echo "TV LIGOU<br>";
	}

	function desligar()
	{
		$this->ligado = 0;
		echo "TV DESLIGOU <br>";
	}

	function aumentar_vol()
	{
		$this->volume++;
		echo "Volume Atual: " . $this->volume . "<br>";
	}

	function diminuir_vol()
	{
		$this->volume--;
		echo "Volume Atual: " . $this->volume . "<br>";
	}

	function getVolume()
	{
		return $this->volume;
	}
	function setVolume($volume)
	{
		$this->volume = $volume;
	}
	function getLigado()
	{
	    return $this->ligado;
	}
	function setLigado($ligado)
	{
	   $this->ligado = $ligado;
	}
};
?>