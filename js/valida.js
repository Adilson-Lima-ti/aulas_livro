function valida(){ 
    // Localize o elemento e, então, chame a propriedade style e qual elemento deseja 
    // modificar, como cor da borda, cor de fundo, etc. 
    document.formulario.busca.style.borderColor = "red"; 
    document.formulario.busca.style.backgroundColor = "#red"; 
    if(document.formulario.busca.value == ""){
        alert("Preencha o campo BUSCA corretamente"); 
        document.formulario.busca.style.borderColor = "#FF4500"; 
        document.formulario.busca.style.backgroundColor = "#FFFFE0"; 
        document.formulario.busca.focus(); 
        return false; 
        } if(document.formulario.busca.value.length < 3){   
            alert("Informe pelo menos 3 letras!"); 
            document.formulario.busca.style.borderColor = "#FF4500"; 
            document.formulario.busca.style.backgroundColor = "#FFFFE0"; 
            document.formulario.busca.focus(); 
            return false; 
        }
return true;
}