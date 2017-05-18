<?php

    // Vetor
    $frutas = array("Laranja", "Abacaxi", "Melancia");
    print_r($frutas);
    echo "<br>";


    // Bidimensional
    $carros[0][0] = "GM";
    $carros[0][1] = "Cobalt";
    $carros[0][2] = "Onix";
    $carros[0][3] = "Camaro";
    $carros[1][0] = "Ford";
    $carros[1][1] = "Fiesta";
    $carros[1][2] = "Fusion";
    $carros[1][3] = "Ecosport";
    echo $carros[0][3];
    echo "<br>";
    echo end($carros[1]);
    echo "<br>";

    $pessoas = array();
    array_push($pessoas, array(
        'nome' => 'João',
        'idade' => 20
    ));
    print_r($pessoas);
    print_r($pessoas[0]);
    print_r($pessoas[0]['nome']);


    // JSON
    echo "<br><br>";
    echo json_encode($pessoas);

    $json = '[{"nome":"Jo\u00e3o","idade":20}]';
    $data = json_decode($json, true);
    var_dump($data);
    echo "<br><br>";


    // Constantes e arrays constantes
    define("SERVIDOR", "127.0.0.1");
    echo SERVIDOR;

    define("BANCO_DE_DADOS", [
        '127.0.0.1',
        'root',
        'password',
        'test'
    ], true); // O último parâmetro definido como 'true', determina que a constante NÃO é case sensitive.
    echo "<br>";
    print_r(BANCO_DE_DADOS);

        // Exemplos de constantes pré-definidas:
        echo "<br>" . PHP_VERSION;
        echo "<br>" . DIRECTORY_SEPARATOR;

        /* Para mais mais contantes pré-definidas, acesse:
        https://secure.php.net/manual/pt_BR/reserved.constants.php */