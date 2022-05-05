<?php

    session_start();

    /* echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    //remover indices do array de sessão
    //unset()

    unset($_SESSION['x']);

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';


    //destruir a variável da sessão
    //session_destroy()

    session_destroy();
    //forçar um redirecionamento

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>'; */

    session_destroy();
    header('Location: index.php');
?>