<?php
    $path = "./";
    $diretorio = dir($path);
    echo "<h1>Indice de arquivos de aula'<strong>".$path."</strong></h1>':<br />";
    while($arquivo = $diretorio -> read()){
        echo "<strong><a href='".$path.$arquivo."'>".$arquivo."</a></strong><br />";
    }
    $diretorio -> close();
?>