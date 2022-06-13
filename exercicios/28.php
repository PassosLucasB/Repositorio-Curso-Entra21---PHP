<!DOCTYPE html>
<body>

<p>Formulário de Cadastro de Pessoas</p>
</br>
    <form method="post">
        <span>Nome</span>
        <input type="text" name="nome" idade="idade" CEP="cep">
        <br>
        <span>Idade</span>
        <input type="text" name="nome" idade="idade" CEP="cep">
        <br>
        <span>CEP</span>
        <input type="text" name="nome" idade="idade" CEP="cep">
        <br>
        <input type="submit" name="Enviar" value="Enviar">
    </form>







</body>







<?php

    $dados = array(
        "1" => array(
            "nome" => "Almir",
            "idade" => "18",
            "CEP" => "00000-001",
            ),
        "2" => array(
            "nome" => "Bino",
            "idade" => "18",
            "CEP" => "00000-002",
            ),
        "3" => array(
            "nome" => "Claudio",
            "idade" => "18",
            "CEP" => "00000-003",
            ),  
        );
        foreach ($dados as $x){
                    echo $x['nome']."<br>";
                    echo $x['idade']."<br>";
                    echo $x['CEP']."<br>";
             }

?>
</html>