<?php

    // Operadores de atribuição. 
    $nome = "Vitor"; 
    echo $nome . " Savedra<br>";

    $nome .= " Savedra<br>"; 
    echo $nome;

    $valorTotal = 0; 
    $valorTotal += 100; 
    $valorTotal += 25;  
    echo $valorTotal . "<br>";

    $valorTotal -= 10;
    echo $valorTotal . "<br>";

    $valorTotal *= 2;
    echo $valorTotal . "<br>";


    // Operadores aritméticos. 
    $a = 10;
    $b = 2;

    echo $a + $b . "<br>";
    echo $a - $b . "<br>";
    echo $a * $b . "<br>";
    echo $a / $b . "<br>";
    echo $a % $b . "<br>"; // Módulo. 
    echo $a ** $b . "<br>"; // Potência.


    // Operadores de comparação. 
    var_dump($a > $b);
    echo "<br>";
    var_dump($a < $b);
    echo "<br>";
    var_dump($a == $b); // Comparação de valor, não de tipo. 
    echo "<br>";
    var_dump($a === $b); // Comparação de valor e tipo (igualdade de identidade). 
    echo "<br>";
    var_dump($a != $b);
    echo "<br>";
    var_dump($a !== $b);
    echo "<br>";


    // Operador Spaceship (incluído no PHP7). 
    var_dump($a <=> $b);
    echo "<br>";

            /* O operador spaceship é utilizado, por exemplo, quando precisamos realizar validações
            de variáveis dinâmicas, onde não sabemos certamente o tipo de dados que será imputado. */
            
            // Comparando inteiros:
            echo 1 <=> 1; // 0
            echo "<br>";
            echo 3 <=> 4; // -1
            echo "<br>";
            echo 4 <=> 3; // 1
            echo "<br>";

            // Compando strings:
            echo "x" <=> "x"; // 0
            echo "<br>";
            echo "x" <=> "y"; // -1
            echo "<br>";
            echo "y" <=> "x"; // 1
            echo "<br>";


    // Operador de coalescência nula (incluído no PHP7). 
    $x = NULL;
    $y = NULL;
    $z = 10;

    echo $x ?? $y ?? $z;

            /* Retornará o primeiro operando se este existir e não for NULL; caso contrário retornará 
            o segundo operando. */


    // Operadores incrementais e decrementais. 
    $a++;
    echo "<br>" . $a;
    ++$a;
    echo "<br>" . $a;
    $a--;
    echo "<br>" . $a;
    --$a;
    echo "<br>" . $a;


    // Precedência de operadores (ordem de execução). 
    echo "<br>" . $resultado = 10 + 3 / 2;
    echo "<br>" . $resultado = (10 + 3) / 2;
    
    $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
    echo "<br>";
    var_dump($resultado);