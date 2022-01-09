<?php
function soma($a, $b){
	$s = $a + $b;
	return $s;
}



function somatoria(){
	$p = func_get_args();//essa função coloca todos os argumentos nesse array
	$t = func_num_args();// número de argumentos para uso no for
	$s = 0;
	for ($i=0; $i<$t; $i++){
		$s += $p[$i]; 
	}
	return $s;
}


function teste(&$x){ // passado a referência (& na frente da variável) da variável na função
    $x = $x + 2;
    echo $x;
}


?>