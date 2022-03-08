<?php

$NOME = $_REQUEST['NOME'];
$DATA = $_REQUEST['DATA'];
$BEBIDA = $_REQUEST['BEBIDA'];

    $DATA = date(d/m/Y);

    $idade = 2022 - date(Y) ;

if(empty($NOME)){
    $dados = array(
        "tipo" => 'error',
        "mensagem" => 'Existe(m) campo(s) obrigatorio(s) não preenchido(s)'

    );
} 
else {
    $DATA
    if($idade < 18){
        case $idade < 18 : 
            $dados = array(
            "tipo" => 'menor.png',
            "mensagem" => 'Olá '.$NOME.', você tem '.$idade.' Sabemos que sua bebida favorito é'.$BEBIDA.
            );
        }else{ 
            $dados = array(
                "tipo" => 'menor.png',
                "mensagem" => 'Olá '.$NOME.', você tem '.$idade.' Sabemos que sua bebida favorito é'.$BEBIDA.
            );
        break;
    }
}

echo json_encode($dados);