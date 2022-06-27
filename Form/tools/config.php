
<?php
session_start();

require_once "cadastro.php";

if ($_POST['Delete']) {
    echo "Apagando " . $_POST['Delete'] . " -> ". $_POST['Nome'] . $b . $b;
    array_splice($_SESSION['cadastro'], $_POST['Delete'], 1);
    echo "a chave : " . $_POST['Delete'] . " Nome: " . $_POST['Nome'] . " foi excluida" . $b;
    echo $b . "Retornando em 3 segundos ...";
    header("refresh: 3;index.php");
}


/*


- Criar um arquivo de parametrizacao (config.php).
- Crie um cadastro de Pessoas com 5 pessoas utilizando Array.
- Cada pessoa deve ter os seguintes valores cadastrados: Nome, idade, Cep.
- A Chave primeria da Array será o numero 1,2,3,4,5.


*/





?>

