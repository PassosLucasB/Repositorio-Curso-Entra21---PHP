<?php

$nome = $idade = $cep = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = test_input($_POST["nome"]);
    $idade = test_input($_POST["idade"]);
    $cep = test_input($_POST["cep"]);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}




/*


- Criar um arquivo de parametrizacao (config.php).
- Crie um cadastro de Pessoas com 5 pessoas utilizando Array.
- Cada pessoa deve ter os seguintes valores cadastrados: Nome, idade, Cep.
- A Chave primeria da Array será o numero 1,2,3,4,5.


*/





?>

