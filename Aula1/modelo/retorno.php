<?php

$NOME = $_REQUEST['NOME'];
$ANIMAL = $_REQUEST['ANIMAL'];

if(empty($NOME)){
    $dados = array(
        "tipo" => 'error'
        "mensagem" => 'Existe(m) campo(s) obrigatorio(s) não preenchido(s)'

    )

} else {
    switch($ANIMAL){
        case '1' : 
            $dados = array(
            "tipo" => 'cachorro.jpg',
            "mensagem" => 'Olá '.$NOME.', Sabemos que seu animal favorito é o cachorro!'
        )
        break;
        case '2' : 
            $dados = array(
            "tipo" => 'gato.jpg',
            "mensagem" => 'Olá '.$NOME.', Sabemos que seu animal favorito é o gato!'
        )
        break;
        case '3' : 
            $dados = array(
            "tipo" => 'peixe.jpg',
            "mensagem" => 'Olá '.$NOME.', Sabemos que seu animal favorito é o peixe!'
        )
        break;
    }
}

echo json_encode($dados);