<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Funçoes em PHP</title>
</head>
<body>
	<h1>Funções</h1>
	<h2>Funções com valores definidos</h2>
	
<?php
include_once "funcoes.php";

$x = 17;
$y = 3;
$res = soma($x, $y);
echo "A soma entre $x e $y é $res";
echo "<br/>";
echo "<h2>Funções com número de parâmetros indefinidos=> verificar código em arquivo funcoes.php</h2>";

$r = somatoria(3,2,5,10,15);

echo $r;


echo "<h2>Passagem por valor ou referência=> verificar código em arquivo funcoes.php</h2>";

$a = 3;
echo "Após atribuição = " . $a . " <br/>";

teste($a);
echo "Após a função = " . $a . " <br/>"
?>

</body>
</html>
