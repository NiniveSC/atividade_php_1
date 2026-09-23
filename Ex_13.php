<?php

function criptografar_mensagem($texto){

    $resultado = "";

    for($i=0; $i<strlen($texto); $i++){
        $resultado .= chr(ord($texto[$i])+3);
    }

    return $resultado;
}

function descriptografar_mensagem($texto){

    $resultado = "";

    for($i=0; $i<strlen($texto); $i++){
        $resultado .= chr(ord($texto[$i])-3);
    }

    return $resultado;
}

$mensagem = "SERASA das atividades"

echo "Mensagem Original: ".$mensagem."<br>";

$mensagem_criptrografada = criptografar_mensagem($mensagem);
echo "Mensagem criptografada: ".$mensagem_criptrografada."<br>";

$mensagem_descriptografada = descriptografar_mensagem($mensagem_criptrografada);
echo "Mensagem descriptografada: ".$mensagem_descriptografada."<br>";