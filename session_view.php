<?php

    session_start();

    echo $_SESSION['nome'];
    session_regenerate_id(); // Recria ID de variável de sessão. 
    echo session_id(); // Mostra ID da variável de sessão. 
    //session_unset(); // Limpa a variável de sessão.
    echo session_save_path();
    echo "<br><br>";

    switch(session_status()) {
        case PHP_SESSION_DISABLED:
        echo "Sessão desabilitada.";
        break;

        case PHP_SESSION_NONE:
        echo "Sessão habilitada mas não iniciada.";
        break;

        case PHP_SESSION_ACTIVE:
        echo "Sessão habilitada e existente.";
        break;
    }

    /* Mais informações sobre sessões em:
    http://php.net/manual/pt_BR/book.session.php */