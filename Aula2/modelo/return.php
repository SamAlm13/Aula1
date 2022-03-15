<?php

$NOME = $_REQUEST['NOME'];
$DATA = $_REQUEST['DATA'];
$BEBIDA = $_REQUEST['BEBIDA'];

$d1 = new DateTime('now');
$d2 = new DateTime($DATA);

$intervalo = $d1->diff( $d2 );

if(empty($NOME)){
    $dados = array(
        "tipo" => 'error',
        "mensagem" => 'Existe(m) campo(s) obrigatorio(s) não preenchido(s)'

    );
} 
else {
    if($intervalo->y < 18){ 
        $dados = array(
            "tipo" => 'menor.jpg',
            "mensagem" => 'Olá '.$NOME.', você tem ' . $intervalo->y .' anos e é menor de idade, Sabemos que sua bebida favorito é '. $BEBIDA 
        );
    } else{ 
        $dados = array(
            "tipo" => 'maior.jpeg',
            "mensagem" => 'Olá '.$NOME.', você tem '. $intervalo->y .' anos e é maior idade, Sabemos que sua bebida favorito é '. $BEBIDA
        );
    
    }
}

echo json_encode($dados);