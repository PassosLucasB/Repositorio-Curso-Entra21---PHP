//pessoas
<?php

$b='<br>';
$dados = array(
    "1" => array(
        "nome" => "Almir",
        "idade" => "18",
        "cep" => "00000-001",
        ),
    "2" => array(
        "nome" => "Bino",
        "idade" => "18",
        "cep" => "00000-002",
        ),
    "3" => array(
        "nome" => "Claudio",
        "idade" => "18",
        "cep" => "00000-003",
        ),
    "4" => array(
        "nome" => "Daniel",
        "idade" => "18",
        "cep" => "00000-004",
        ),
    "5" => array(
        "nome" => "Edilson",
        "idade" => "18",
        "cep" => "00000-005",
        ),    
    );
    if (!$_SESSION['dados']){
        $_SESSION['dados']=$dados;
    }

?>