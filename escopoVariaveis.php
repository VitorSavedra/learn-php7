<?php

    // Escopo global. 
    $nome = "Vitor";

        function teste(){
            // Escopo local. 
            $nome = "Savedra";
            echo $nome;
        }

        function teste2(){
            // Usando variável de escopo global. 
            global $nome;
            echo $nome;
        }

        teste();
        teste2();