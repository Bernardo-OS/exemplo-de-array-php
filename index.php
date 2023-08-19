<?php
    include('dados/albuns.php');

    echo("<h1>Albuns</h1>");

    /* Mostrar cada um dos albuns numa lista */
    foreach($albuns as $id => $album){
        $capa = $album['capa'];

        echo("<p>");
            echo("<a href='detalhe.php?id=$id'>");
                echo($album['titulo']);
                echo("<br><img src=$capa>");
            echo("</a>");    
        echo("<p>");
    }
?>