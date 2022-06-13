/* index.php */
<?php
session_start();
require '28b.php';
?>

<html>




<body>

<p>Formulário de Cadastro de Pessoas</p>
</br>
    <form method="post">
        <span>Nome</span>
        <input type="text" name="nome">
        <br>
        <span>Idade</span>
        <input type="text" idade="idade">
        <br>
        <span>CEP</span>
        <input type="text" CEP="cep">
        <br>
        <input type="submit" name="adicionar_dados" value="Adicionar Dados">
    </form>

<?php
    if(isset($_POST['restaura'])){
        $_SESSION['dados'] = $dados;
    };
    if(isset($_POST['adiciona_dados'])){
        array_push($_SESSION['dados'],array("nome" => $_POST['nome'],"idade" => $_POST['idade'],"cep" => $_POST['cep'] ));
    };
    foreach($_SESSION['dados'] as $id =>$x){
        echo "Nome:".$x['nome']."<a href=excluir.php?Delete=".$id."&Nome=".$x['nome'].">Excluir </a>" .$b;}

?>

<form method="post">
    <input type="submit" name="restaura" value= "restaura>
</form>

</body>

</html>