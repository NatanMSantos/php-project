<?php 

session_start();

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
    $_SESSION['mensagem-de-erro'] = 'o nome não pode ser vazio, preencha novamente';
    header("location: index.php");
    return ;
}

else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'o nome não pode ter menos de três caracteres';
    header("location: index.php");
    return ;
}
else if(strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = 'o nome está muito extenso';
    header("location: index.php");
    return ;
}

else if(empty($idade)){
    $_SESSION['mensagem-de-erro'] = 'Insira idade';
    header("location: index.php"); 
    return ;
}

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Infantil'){
            $_SESSION['mensagem-de-sucesso'] = 'o nadador '.$nome. " compete na categoria ".$categorias[$i];
            header("location: index.php"); 
            return ;
        }
    }
}
else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adolescente'){
            $_SESSION['mensagem-de-sucesso'] =  'o nadador '.$nome. " compete na categoria ".$categorias[$i];
            header("location: index.php"); 
            return ;
        }
    }
}
else{
    $_SESSION['mensagem-de-sucesso'] =  'o nadador '.$nome. " compete na categoria ".$categorias[2];
    header("location: index.php"); 
    return ;
}

?>
