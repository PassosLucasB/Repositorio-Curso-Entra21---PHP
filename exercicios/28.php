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
             echo "<br> Chave: $key";
             foreach ($x as $subkey ){
                 echo "<br>";
                 var_dump($subkey);
                    echo $subkey['nome'];
                    echo $subkey['idade'];
                    echo $subkey['CEP'];
             }
        }

?>