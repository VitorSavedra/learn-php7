<?php

    // Sem tipagem.
    $nome = "Savedra";
    echo $nome . '<br />';
    var_dump($nome);

    // Variáveis permitidas.
    $nome = "Vitor";
    $sobrenome = "Savedra";
    $anoNascimento = 1995;
    $nomeCompleto = "Vitor Savedra";
    $_var = 1;
    $var1 = 1;

    /* Variáveis não permitidas.
    $1var = 1;
    $-var = 1;
    $@var = 1; */

    // Limpando variáveis. 
    echo $nomeCompleto;
    echo "<br />";
    unset($nomeCompleto);
    echo $nomeCompleto;

    // Exibindo variável se definida.
    if(isset($nomeCompleto)){
        echo $nomeCompleto;
    }

    // Concatenando variáveis.
    $nomeCompleto = $nome . " " . $sobrenome;
    echo "<br />";
    echo $nomeCompleto;

    // Variável com array.
    $frutas = array("Abacaxi", "Laranja", "Manga");
    echo $frutas[2];

    // Variáveis com objetos.
    $data = new DateTime();
    echo "<br />";
    var_dump($data);

    $arquivo = fopen("index.php", "r");
    var_dump($arquivo);

    // Variável nula.
    $nulo = NULL;

    // Variável vazia.
    $vazio = "";