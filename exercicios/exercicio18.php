<!-- Crie uma lista com 8 elementos de uma lista de compras de supermercado, por meio de um laço de repetição for, liste individualmente cada um dos itens dessa lista. -->

<?php
$lista = array('Pão','Leite','Arroz','Carne','Ovos','Massa','Frango','Café');  
    foreach($lista as $itens){
        echo $itens, "<br />";
    }
?>