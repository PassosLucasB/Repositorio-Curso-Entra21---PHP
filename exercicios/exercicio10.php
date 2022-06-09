<!-- Mostre o tamanho da lista de nomes, o numero de elementos da lista de nomes, mostre separadamente apenas o terceiro elemento desta lista. -->

<?php
    $time = array('Agenor', 'Bruno', 'Carlos', 'Diomedes', 'Efrain');
    $time_tamanho = count($time);
        echo "O número de elementos da lista é: $time_tamanho <br>";
        echo "O tamanho da lista é: $time_tamanho <br>";
        echo "O terceiro elemento da lista é $time[2].";
?>