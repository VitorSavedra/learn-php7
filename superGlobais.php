<?php

// "Arrays super-globais" podem ser conhecidas também como "variáveis pré-definadas" ou "variáveis de ambiente".
    
    $nome = $_GET["nome"];
    var_dump($nome);

    /* Toda informação que vir por GET ou POST será do tipo String. 
    Caso precise executar operações, é necessário efetuar a conversão. */

    // Convertendo a variável para inteiro (int). 
    $idade = (int)$_GET["idade"];
    echo "<br>";
    var_dump($idade);

    // Coletando IP de usuário. 
    $ip = $_SERVER["REMOTE_ADDR"];
    echo "<br>";
    var_dump($ip);

    // Coletando nome de arquivo/página (ideal para gerar logs). 
    $script = $_SERVER["SCRIPT_NAME"];
    echo "<br>";
    var_dump($script);