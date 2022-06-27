<?php

session_start();

if (!isset($_SESSION["cadastro"])){
    $_SESSION["cadastro"] = true;
    require_once('form.php');
    $_SESSION["cadastro"] = $cadastro;
}

?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="/tools/style.css">
</head>
<body>

<?php


$nome = $idade = $cep = $x = $pessoa = $id = "";
   
if(isset($_POST['adiciona_cadastro'])){
        $nome=$_POST['nome'];
        $idade=$_POST['idade'];
        $cep=$_POST['cep'];
        $adiciona_dados= array
                ("nome" => $nome,
                "idade" => $idade,
                "cep" => $cep);
                array_push($_SESSION["cadastro"], $adiciona_cadastro);
        foreach($_SESSION["cadastro"] as $pessoa){
                echo "Nome: ".$pessoa['nome']. "<br> Idade: ".$pessoa['idade']."<br/> CEP: ".$pessoa['cep']."<br><br>";}};
        foreach($_SESSION["cadastro"] as $id =>$x){
            echo "Nome:".$x['nome']." <a href=config.php?Delete=".$id."&Nome=".$x['nome'].">Excluir </a>";};

/*
- Utilize arquivo separado (modularizado) para tratar as alterações.
- Inclua um botão excluir um item da sua array.
- Utilize um arquivo separado (modularizado) para tratar as exclusões.



Imprima o numero total de pessoas em seu cadastro no rodapé da pagina.

Imprima a média de idade do seu cadastro no rodapé da página.



*/
?>
</body>
</html>
