//imprime_array.php

<?php

require_once '28.php';

foreach ($dados as $x){
    echo $x['nome']."<br/>";
    echo $x['idade']."<br/>";
    echo $x['cep']."<br/>";
}
