<!-- E005B.php -->
<?php
echo "<br> request_metodo é: ";
echo $_SERVER['REQUEST_METHOD'];
// echo "<br> post_nome é: ";
// echo $_POST['nome'];
// echo "<br>";
// var_dump ($_GET);

if (isset($_POST['cidade'])){
    echo "Existe uma variavel chamada POST";
    echo "<br>"; 
    var_dump($_GET['enviar']);
}
echo "<br>";
?>

<body>
    <form action="" method="">
        <input type="text" name="nome">
        <input type="text" name="cidade"> 
        <input type="submit" name="enviar">
    </form>
</body>

<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     echo "<br> entrou aqui <br>";
 }

// phpinfo();
?>

</html>