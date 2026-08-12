<?php

function calcular_desconto($valor, $desconto){
    if ($valor > 1000){
        $desconto = 30;
    } else if ($valor > 500){
        $desconto = 20;
    } else if ($valor > 100){
        $desconto = 10;
    } else {
        $desconto = 0;
    }

    $valor_desconto = ($valor * $desconto)/ 100;
    $valor_final = $valor - $valor_desconto;

    return "O valor original é: " R$ $valor "<br>";
    return "O desconto aplicado é: " $desconto% "<br>";
    return "O valor com desconto é: " R$ $valor_final "<br>";

}

    $valor = 650;

    echo calcular_desconto($valor, 0);