<?php

   session_start();

    //montando o texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //implode('#', $_POST);

    $texto = $_SESSION['id'] . '#' . $titulo . '#'.  $categoria . '#'. $descricao . PHP_EOL;

    //abrindo o arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');    
    //escrevendo o texto
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);
    //echo $texto;

    header('Location: abrir_chamado.php')
?>