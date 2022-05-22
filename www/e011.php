<!-- e011.php -->

<?php
$nome = "Adriano";
$caipirinha = array('Limao', 'Açucar', 'Vodka', 'Agua', 'Engov');
echo $caipirinha[1];
echo "<br>";
$tipo1 = gettype($caipirinha);
$tipo2 = gettype($nome);
echo "<br>";
echo "Tipo1:";
print_r($tipo1);
echo "<br> Tipo2:";
print_r($tipo2);
echo "<br>";
echo "var_dump 1 e 2:<br>";
var_dump($tipo1);
echo "<br>";
var_dump($tipo2);

?>