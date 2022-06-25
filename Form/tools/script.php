<?php

if(isset($_POST['name']) && !empty($_POST['name'])){

$nome = addslashes($_POST['name']);
$idade = addslashes($_POST['idade']);
$cep = addslashes($_POST['cep']);

$body = "Nome: ".$nome. "\r\n".
        "Idade: ".$idade. "\r\n".
        "Cep: ".$cep. "\r\n";




}
/*
- Utilize arquivo separado (modularizado) para tratar as alterações.
- Inclua um botão excluir um item da sua array.
- Utilize um arquivo separado (modularizado) para tratar as exclusões.



Imprima o numero total de pessoas em seu cadastro no rodapé da pagina.

Imprima a média de idade do seu cadastro no rodapé da página.



*/
?>