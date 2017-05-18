<?php

// O require obriga que o arquivo exista e que esteja funcionando corretamente. 
require "functions.php"; 

// Determina que chame o arquivo apenas uma vez.
require_once "functions.php"; 

    $resultado = somar(10, 20);
    echo $resultado;