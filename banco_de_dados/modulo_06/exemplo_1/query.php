<?php

require_once 'config.php';

$db = $_SESSION['db'];

//if(isset($db)) echo "Variável foi setada";
//else echo "Não foi configurada ainda!";

$query="SELECT * FROM CIDADES";

foreach ($db->query($query) as $cidades){
    print "<b> Cidade: </b>" . $cidades['CIDADE_NOME'] . "\n <br>";
};