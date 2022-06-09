<!-- Crie uma estrutura de repetição que percorre a string 'Projeto Entra21': -->

<?php
    $str = "Projeto Entra21";   
    $array = str_split($str);
  
    foreach($array as $val){
        echo $val, "<br />";
    }
?>