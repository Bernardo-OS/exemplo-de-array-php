<?php
    include('dados/albuns.php');

    $id = $_GET['id'];
    $album = $albuns[$id];

    $titulo = $album['titulo'];
    $capa = $album['capa'];


    echo("<h1>$titulo</h1>");
    echo("<img src='$capa'>");


    /* Mostrar cada um dos albuns numa lista */
    foreach($album['musicas'] as $musica){
        $mp3 = $musica['mp3'];
        $titulo = $musica['titulo'];

        echo("<p>");
            echo($titulo."<br>");
            echo("<audio controls><source src='$mp3'  type='audio/mpeg'></audio>");    
        echo("<p>");
        echo("<hr>");
    }
?>