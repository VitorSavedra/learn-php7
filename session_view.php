<?php

    session_start();

    echo $_SESSION['nome'];
    session_unset(); // Limpa a variável de sessão.