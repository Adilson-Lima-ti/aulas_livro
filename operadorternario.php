<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Operador Ternario</title>
</head>
<body>
	<h1>Operador Ternário</h1>
	<p> O operador ternário funciona como um if, testa uma condição (o primeiro operando), se ela for verdadeira, o resultado da operação é o primeiro valor (após o ?, o segundo operando), se ela for falsa, então o resultado é o segundo valor (depois do : , o terceiro operando).</p>
	<p>Nesse caso enviamos os dados pela url <strong>?a=2&b=10&op=s</strong></p>

<blockquote> que ele não pode executar comandos, só pode ter expressões. Nem sempre é recomendável usá-lo já que ele pode dificultar a legibilidade. Mas na maioria das vezes onde você tem apenas uma expressão simples e curta como resultado, quando não aninha um operador ternário com outro e quando não exige ficar colocando vários parênteses para desambiguar o que está fazendo, ele fica mais curto e muito fácil de entender. </blockquote>
<?php
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$tipo = $_GET["op"];
echo "<h2>Os valores passados foram $n1 e $n2 </h2>";
$r = ($tipo=="s")?$n1+$n2:$n1*$n2;
$oper = ($tipo=="s")?"adição":"multiplicação";
echo "<h2>O resultado da $oper é $r .</h2>";
echo "<h2>Código</h2>";
echo '<code>$n1 = $_GET["a"];<code><br/>';
echo '<code>$n2 = $_GET["b"];<code><br/>';
echo '<code>$tipo = $_GET["op"];<code><br/>';
echo '<code><h2>Os valores passados foram $n1 e $n2 </h2><code>';
echo '<code>$r = ($tipo=="s")?$n1+$n2:$n1*$n2;<code><br/>';
echo '<code>$oper = ($tipo=="s")?"adição":"multiplicação";<code><br/>';
echo '<code><h2>O resultado da $oper é $r .</h2><code>';

?>
</body>
