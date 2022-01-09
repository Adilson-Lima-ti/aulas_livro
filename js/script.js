

function entrada(){
    nome = prompt("Digite a nota:");
    return nome;

}


var media = parseInt(entrada());

document.write(media);
function mostraSituacao(){
    if (media >= 7){
        alert("Aprovado");
    } else {
        alert("Reprovado");
    }
}




function perguntaEndereco(){ do{
endereco = prompt("Insira o seu endereço:");
confirma = confirm("Seu endereço é: " + endereco); } while(!confirma); alert("A página será alterada..."); document.write("Seu endereço é "+endereco+".");
}



function mostraCheio(imagem){ imagem.src="/images/car_cheio.jpg";
} 

function mostraVazio(imagem){imagem.src="/images/car_vazio.jpg";
}
