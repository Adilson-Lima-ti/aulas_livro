<!DOCTYPE html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" contet="width=device-width, initial-scale-1.0">
    <link rel="stylesheet" href="/css/teste.css" type="text/css">
    <script src="js/script2.js"></script>
    <title>Minha página</title>
</head>
<body>
    <form>
        Letra maiúscula: <br/>
        <textarea name="letra" onkeyUp="maiuscula(this);"></textarea><br/>
    </form>
    <br/>
        <form name="formulario">
            <input type="radio" name="habilita" value="sim" onClick="HabilitarCampo(1);">Habilita<br/>
            <input type="radio" name="habilita" value="nao" onClick="HabilitarCampo(0);" checked> Desabilitar<br/> 
            Campo:<input type="text" name="nome" disabled>
        </form>


</body>  






</html>
