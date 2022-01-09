<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login Session</title>
</head>
<body>
<?php

session_start();//Inicialização da sessão

if (isset($_POST["nome"]) and isset($_POST["senha"]))



{
	//Se existe os dados
	$nome = $_POST["nome"];
	$senha = $_POST["senha"];
	$_SESSION["usuario"] = $nome;
	echo "Seja bem vindo a nossa página" . $_SESSION["usuario"] .".<br/>";
	echo "<input type='submit' name='logout' value='Logout' onclik='session_destroy()'/>";

} else {
echo "Favor fazer o login para acessar a página!";
echo "<a href='sessionlogin.php'>Entrar</a><br/>";
}
?>
</body>
</html>
