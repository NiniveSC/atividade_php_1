<?php

function formatar_texto($texto){

    $resultado = "Texto em letras maiusculas: " . strtoupper($texto);
    $resultado .= "<br>Texto em letras minusculas: " . strtolower($texto);
    $resultado .= "<br>Texto com a primeira letra de cada palavra maiuscula: " . ucwords($texto);
    $resultado .= "<br>Quantidade de caracteres: " . strlen($texto);

    return $resultado;
}

    $texto = " Desenvolvimento de sistemas";

    echo "Texto original: $texto <br>";
    echo formatar_texto($texto);