<?php

include"base.php";
include"script.php";
include"impressao.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cep = $_POST['cep'];

//aquinomearquivo($nome, $idade, $cep);

header(string: 'localtion: index.php');

?>

/*


- Criar um arquivo de parametrizacao (config.php).
- Crie um cadastro de Pessoas com 5 pessoas utilizando Array.
- Cada pessoa deve ter os seguintes valores cadastrados: Nome, idade, Cep.
- A Chave primeria da Array será o numero 1,2,3,4,5.


*/