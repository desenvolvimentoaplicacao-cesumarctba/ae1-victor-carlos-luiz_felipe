<?php

    class Controle
    {

        // --- Construtor ---
        public function __construct($tv)
        {
            $this->tv = $tv;
        }

        public function btn_ligar()
        {
            $this->tv->ligar_tv();
        }

        public function btn_desligar()
        {
            $this->tv->desligar_tv();
        }

        public function btn_aum()
        {
            $this->tv->aumentar_vol();
        }

        public function btn_dim()
        {
            $this->tv->diminuir_vol();
        }
        
    }

?>