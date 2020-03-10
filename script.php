<?php 

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
//var_dump($nome);
//var_dump($idade);

if(empty($nome)){
    echo 'o nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3){
    echo 'o nome deve conter mais de três caracteres';
    return;
}
if(strlen($nome) > 40){
    echo 'o nome é muito extenso';
    return;
}

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

?>
