<?php

function calcular_imc($peso, $altura){
    return $peso / ($altura * $altura);
}

function validar_email($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function gerar_senhas(){
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $senha = "";

    for($i = 0; $i < 8; $i++){
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $senha; 
}

function contar_vogais($texto){
    return preg_match_all("/[aeiouAEIOU]/", $texto);
}

function inverter_texto($texto){
    return strrev($texto);
}

function calcular_idade($ano_nascimento){
    return date("Y") - $ano_nascimento;
}

function converter_moeda($valor){
    return $valor * 5.50;
}

function formatar_telefone($telefone){
    return "(" . substr($telefone,0,2) . ") " . substr($telefone,2,5) . "-" . substr($telefone,7);
}

function saudacao(){
    $hora = date("H");

    if(date("H") < 12){
        return "Bom dia!";
    } elseif(date("H") < 18){
        return "Boa tarde!";
    } else{
        return "Boa noite!";
    }
}

function validar_senha($senha){
    if(strlen($senha) >= 8){
        return "Senha fraca";
    }
}

?>