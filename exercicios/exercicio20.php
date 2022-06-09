<!-- Crie um programa que realiza a contagem de 0 a 20, exibindo apenas os numeros pares. -->

<?php
for ($x = 1; $x <= 20; $x++) {
    if ($x % 2 == 0) {
        echo "$x <br>";
    }
}
?>