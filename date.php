<?php

    // Date e time. 
    echo date("d/m/Y H:i:s") . "<br>";
    echo time() . "<br>";
    echo strtotime("2000-10-01") . "<br>";
    echo date("l, d/m/Y H:i:s", 970351200) . "<br>";
    echo strtotime("now") . "<br>";
    echo strtotime("+1 day") . "<br>";
    echo strtotime("+1 month") . "<br>";

    // Configuração regional. 
    setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
    echo strftime("%A %B")  . "<br>";

    // Classe DateTime. 
    $dt = new DateTime();
    echo $dt->format("d/m/Y H:i:s") . "<br>";
    
    $periodo = new DateInterval("P15D"); // Define período de 15 dias. 
    $dt->add($periodo); // Soma o perído. 
    echo $dt->format("d/m/Y H:i:s");

    /* Mais informações em:
    http://php.net/manual/pt_BR/function.date.php */
