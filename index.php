<?php 

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 23;
//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Infantil'){
            echo 'o nadador '.$nome. " compete na categoria ".$categorias[$i];
        }
    }
}
else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adolescente'){
            echo 'o nadador '.$nome. " compete na categoria ".$categorias[$i];
        }
    }
}
else{
    echo 'o nadador '.$nome. " compete na categoria ".$categorias[2];
}