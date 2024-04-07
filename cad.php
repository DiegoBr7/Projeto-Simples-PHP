<?php

$nome = $_GET["nome"] ?? "" ;
$sobrenome = $_GET["sobrenome"] ?? "" ;
$endereco = $_GET["end"] ?? "" ;
$cpf = $_GET["cpf"] ?? "" ;
$email = $_GET["email"] ?? "" ;

echo("Ola <strong> $nome $sobrenome </strong> tudo bem? Seja Bem Vindo(a)!");
echo("<br> <br>");
echo("<h3> Esses sao seu Dados ? </h3> <br> ");
echo("<br> <br>");
echo( " Endereco : <strong>$endereco </strong> <br> " );
echo("<br> <br>");
echo( " CPF: <strong>$cpf</strong> <br> " );
echo("<br> <br>");
echo( "E-mail: <strong>$email</strong><br>" );



?>