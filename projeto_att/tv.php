<?php

class Televisao
{

    // --- Atributos  ---
    public $ligada;
    public $volume;

    // --- Construtor ---
    public function __construct()
    {
        $this->set_ligada(0);
        $this->set_volume(0);
    }

    // --- Altera o valor do Atributo $Ligada(1) ---
    public function ligar_tv()
    {
        $this->set_ligada(1);
    }

    // --- Altera o valor do Atributo $Ligada(0) ---
    public function desligar_tv()
    {
        $this->set_ligada(0);
    }

    // --- Altera o valor do Atributo $Volume(+) ---
    public function aumentar_vol()
    {
        if($this->get_ligada())
        {
            $this->volume++;
        }
    }   

    // --- Altera o valor do Atributo $Volume(-) ---
    public function diminuir_vol()
    {
        if($this->get_ligada())
        {
            if($this->get_volume() > 0)
            {
                $this->volume--;
            }
        }
    }

    // --- Exibe o Estado Atual da Televisão ---
    public function mostrar_status()
    {
        if($this->get_ligada())
        {
            echo "A Televisão está Ligada <br>";
            echo "O Volume está em " . $this->get_volume() . "<br>";
        }
        else
        {
            echo "A Televisão está Desligada <br>";
            echo "O Volume estava em " . $this->get_volume() . "<br>";
        }    
    }

    // --- Getters/Setters ---
    public function get_ligada()
    {
        return $this->ligada;
    }
    public function set_ligada($ligada)
    {
        $this->ligada = $ligada;
    } 
    public function get_volume()
    {
        return $this->volume;
    } 
    public function set_volume($volume)
    {
        $this->volume = $volume;
    }   

}

?>
