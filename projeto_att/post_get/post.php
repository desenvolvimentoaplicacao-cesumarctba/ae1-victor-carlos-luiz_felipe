<?php

    

    //--- $_GET ---
    //$nome = $_GET["nome"];
    //$idade = $_GET["idade"];

    //--- $_POST ---
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    $array = array($nome,$idade);
    echo "<pre>";
    var_dump($array);
    echo "</pre>";

?>