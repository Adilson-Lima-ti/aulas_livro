<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulários</title>

</head>
<body>
<?php
echo "<h1>Formulários</h1>";
echo "<h2>Formulário livro: Desenvolvimento de Software II</h2>";
echo 'Foram selecionados '.$_POST["quantidadeproduto"].' intens de '.$_POST["nomeproduto"];

echo "<h2>Formulário Curso em Vídeo: PHP para iniciantes</h2>";
$ini = isset($_GET["comeco"])?$_GET["comeco"]:0;
$fin = isset($_GET["final"])?$_GET["final"]:10;
$incre = isset($_GET["cont"])?$_GET["cont"]:1;

if ($ini<$fin){
    while($ini<=$fin){
        echo "$ini .";
        $ini += $incre;
    }
}else {
    while($ini>=$fin){
        echo "$ini .";
        $ini -= $incre;
    }
}


echo "<h2>Formulário Curso em Vídeo: PHP para iniciantes- Caixa de Texto criadas dinamicamente</h2>";
$i = 1; // 1º while pega os dados da url
while($i<=5){
    $v= "num".$i;
    $url = "v".$i;
    $$v = isset($_GET[$url])?$_GET[$url]:0;// variável de variável o conteúdo da 1ª é o nome da 2ª
    $i++;
}
echo "$num1 $num2 $num3 $num4 $num5"."<br/>";//assim fica inline


$i=1; //este bloco mostra os dados pego pela url
while($i<=5){
    $v = "num".$i;
    echo "<h3>Valor $i: ".$$v ."</h3>";
    $i++;
}

echo "<h2>Testando variável de variável</h2>";
$var1 = "var2";
$$var1 = "o nome deve ser $ var2";// variável de variável o conteúdo da 1ª é o nome da 2ª
echo '$var2 =>' . " $var2"; 

?>
  
</body>
</html>
