<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    //montando o texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //implode('#', $_POST);

    $texto = $titulo . '#'.  $categoria . '#'. $descricao . PHP_EOL;

    //abrindo o arquivo
    $arquivo = fopen('arquivo.txt', 'a');    
    //escrevendo o texto
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);
    //echo $texto;

    header('Location: abrir_chamado.php')
?>