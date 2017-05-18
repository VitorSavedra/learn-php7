<?php

    $idadeAtual = 22;
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeIdoso = 65;
    $diaDaSemana = date("w");
    $condicao = true;
    $total = 100;
    $desconto = 0.9;
    $meses = array("Janeiro", "Fevereiro", "Março",
                   "Abril", "Maio", "Junho",
                   "Julho", "Agosto", "Setembro",
                   "Outubro", "Novembro", "Dezembro");

    // If, else, else if
    if ($idadeCrianca > $idadeIdoso) {
        echo "Criança.";
    } else if ($idadeIdoso < $idadeAtual){
        echo "Idoso.";
    } else if ($idadeAtual > $idadeIdoso){
        echo "Você tem " . $idadeAtual . " anos.";
    } else {
        echo "Ora, ora...";
    }

        // Operador ternário. 
        echo ($idadeAtual < $idadeMaior) ? "Você é menor de idade":"Você é maior de idade";
        echo "<br>";


    // Switch Case
    switch ($diaDaSemana) {
        case 0:
        echo "Domingo";
        break;

        case 1:
        echo "Segunda-feira";
        break;

        case 2:
        echo "Terça-feira";
        break;

        case 3:
        echo "Quarta-feira";
        break;

        case 4:
        echo "Quinta-feira";
        break;

        case 5:
        echo "Sexta-feira";
        break;

        case 6:
        echo "Sábado";
        break;

        default:
        echo "Data inválida!";
    }

    echo "<br>";

    // For
    for ($i = 0; $i < 100; $i++) {
        echo $i . "<br>";
    }

    for ($i = 0; $i < 100; $i+=5) {
        echo $i . "<br>";
    }

    for ($i = 0; $i < 100; $i+=5) {

        if ($i > 20 && $i < 60) continue;
        if ($i === 90) break;
        echo $i . "<br>";
    }

    echo "<select>";
    for ($i=date("Y"); $i > date("Y")-100 ; $i--) { 
        echo  '<option value="' . $i . '">' . $i . '</option>';
    }
    echo "</select>";
    echo "<br>";


    // Foreach
    foreach ($meses as $index => $mes) {
        echo "Índice: " . $index . "<br>";
        echo "O mês é: " . $mes . "<br><br>";
    }

    echo   '<form>
                <input type="text" name="nome">
                <input type="date" name="nascimento">
                <input type="submit" value="Enviar">
            </form>';

    if (isset($_GET)) {
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: " . $key . "<br>";
        echo "Valor do campo: " . $value . "<br>";
        echo "<hr>";
    }
    }


    // While
    while ($condicao) {
        $numero = rand(1, 10);

        if ($numero === 3) {
            echo "Três ";
            $condicao = false;
        }

        echo $numero . " ";
    }

    do {
        $total *= $desconto;
    } while ($total > 100);
    echo $total;