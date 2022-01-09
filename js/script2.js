function valida() {

    if( ! document.getElementById('nome').value ) {
    
      alert('Preencha o campo "Nome"');
      return false;
    
    } else {
    
      return true;
      
    }
    
    }



function mostraCheio(imagem){ imagem.src="images/car_cheio.jpg";
} 

function mostraVazio(imagem){imagem.src="images/car_vazio.jpg";
}

function maiuscula(texto){
    texto.value = texto.value.toUpperCase();
}

function HabilitarCampo(opcao){
    if(opcao){
        document.formulario.nome.disabled = false;
       
        document.formulario.nome.value = " Digite aqui ";
        
        
    } 
    else{ 
        document.formulario.nome.value = " fechado ";
        document.formulario.nome.disabled = true;
    }
}


    