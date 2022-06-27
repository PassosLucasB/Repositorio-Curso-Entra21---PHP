<?php

require_once 'cadastro.php';

foreach ($cadastro as $x){
    echo $x['nome']."<br/>";
    echo $x['idade']."<br/>";
    echo $x['cep']."<br/>";
}

/* 
- Faça a impressão de modo isolado (em um arquivo impressao.php).
- Faça a impressao utilizando tabelas do html (com cabeçalho e etc).


*/
?>