
<?php
  
    // --- Inclusão de Arquivos
    require_once('controle.php');
    require_once('tv.php');	

    // --- Instânciamento de Objetos --- 
    $tv1 = new Televisao();
    $c1 = new Controle($tv1);

    // --- Operações ---
    /*
        $c1->btn_ligar();
        $c1->btn_dim();
        $tv1->mostrar_status();
        echo "<pre>";
        print_r($tv1);
        echo "</pre>";
        $c1->btn_aum();  
        $c1->btn_aum(); 
        $c1->btn_aum(); 
        $c1->btn_aum(); 
        $c1->btn_aum(); 
        $c1->btn_dim();
        $tv1->mostrar_status();
        echo "<pre>";
        print_r($tv1);
        echo "</pre>";
    */
?>