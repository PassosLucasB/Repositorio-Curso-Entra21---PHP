<?php

?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="/tools/style.css">
</head>
<body>

<?php

session_start();

if (!isset($_SESSION["required"])){
    $_SESSION['required'] = true;
    require_once('form.php');
    $_SESSION['cadastro'] = $cadastro;
}

$nome = $idade = $cep = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = test_input($_POST["nome"]);
    $idade = test_input($_POST["idade"]);
    $cep = test_input($_POST["cep"]);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);}
    if(isset($_POST['idade']) && !empty($_POST['idade'])){
        $idade = addslashes($_POST['idade']);}
    if(isset($_POST['cep']) && !empty($_POST['cep'])){    
        $cep = addslashes($_POST['cep']);
    }
    
    echo "Você está adicionando o Nome: ".$nome."."."</br>"."Que possui a idade de: ".$idade." anos."."</br>"."Com o cep: ".$cep.".";
    

$body = "Nome: ".$nome. "\r\n".
        "Idade: ".$idade. "\r\n".
        "Cep: ".$cep. "\r\n";


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
