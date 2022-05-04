<?php

    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    //USUARIOS DO SISTEMA
    $usuarios_app = [
        ['email' => 'adm@teste.com.br', 'senha' => '123456'],
        ['email' => 'contatom@teste.com.br', 'senha' => '456789'],
    ];

    foreach($usuarios_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado';
    } else {
        header('Location: index.php?login=erro');
    }

    /* print_r($_GET);

    echo'<br>';

    echo $_GET['email'];
    echo'<br>';
    echo $_GET['senha']; */

    /* print_r($_POST);

    echo'<br>';

    echo $_POST['email'];
    echo'<br>';
    echo $_POST['senha']; */


?>