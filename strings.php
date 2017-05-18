<?php

    $nome = "Vitor";
    $nome2 = 'João';
    $texto = "In lorem ipsum dolor sit amet, consectetur adipiscing elit.";

    echo "O meu nome é $nome" . "<br>"; // Aspas duplas. 
    echo 'A minha variável chama-se $nome' . "<br>"; // Aspas simples. 

    echo strtoupper($texto)  . "<br>"; // Transforma texto em caixa alta. 
    echo strtolower($texto)  . "<br>"; // Transforma texto em caixa baixa. 
    echo ucwords($texto)  . "<br>"; // Transforma primeira letra de cada palavra em caixa alta. 
    echo ucfirst($texto) . "<br>"; // Tranforma primeira letra de primeira palavra em caixa alta. 
    echo str_replace("i", "1", $texto) . "<br>"; // Substitui strings. 
    echo strpos($texto, "lorem") . "<br>"; // Retorna posição de string declarada. 
    echo substr($texto, 0, 20) . "<br>"; // Retorna string de posições declaradas. 
    echo strlen($texto) . "<br>"; // Retorna números de caracteres na string. 

    /* Demais funções de strings:
    http://php.net/manual/pt_BR/ref.strings.php. */