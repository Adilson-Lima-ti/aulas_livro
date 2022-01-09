<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulários</title>

</head>
<body>
<h1>Formulários</h1>
<h2>Formulário livro: Desenvolvimento de Software II</h2>
<form action="trataformprodutos.php" method="POST">
    <input type="hidden" name="codproduto" value="28">
    Produto:Notebook<br>
    <input type="hidden" name="nomeproduto" value="Notebook">
    Descrição: Intel Core i5 6 GB 1 TB Led 14 Touchscreen Windows 8.<br>
    Quantidade: <input type="number" name="quantidadeproduto" min='0' max='5' value="0"><br>
    Preço: R$ 2.999,00 <br>
    <input type="submit" name="enviaproduto" value="Enviar">
</form>
<h2>Formulário Curso em Vídeo: PHP para iniciantes- Contagem</h2>
<form method="GET" action="trataformprodutos.php">
    <label for='l_ini'>início:</label>
    <input type='number' name='comeco' id='l_ini' min='0' max='100' value='0'/><br/>

    <label for='l_final'>Final : </label>
    <input type='number' name='final' id='l_final' min='0' max='100' value='0'/><br/>

    <label for='l_cont'>Incremento:</label>
    <input type='number' name='cont' id='l_cont' min='0' max='100' value='0'/><br/>

    <input type="submit" value="Enviar"/>
</form>
<h2>Formulário Curso em Vídeo: PHP para iniciantes- Caixa de Texto criadas dinamicamente</h2>
<form method="GET" action="trataformprodutos.php">
    <?php
    $c = 1;
    while($c<=5){
        echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
        $c++;
    }
    ?>
    <input type="submit" value="Enviar"/>
</form>
    
</body>
</html>
