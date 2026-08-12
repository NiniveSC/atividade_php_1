<?php

function converter_temperatura($valor, $origem, $destino){
    if ($origem == "C" && $destino == "F"){
        $resultado = ($valor * 9/5) + 32;
    }

    else if ($origem == "C" && $destino == "K"){
        $resultado = $valor + 273.15;
    }

    elseif ($origem == "F" && $destino == "K"){
        $resultado = (($valor - 32) * 5/9);
    }

    elseif ($origem == "F" && $destino == "C"){
        $resultado = ($valor -32) * 5/9;
    }

    elseif ($origem == "K" && $destino == "F"){
        $resultado = (($valor - 273.15) * 9/5) + 32; 
    }

    elseif ($origem == "K" && $destino == "C"){
        $resultado = $valor - 273.15;
    }

    elseif ($origem == $destino){
    $resultado = $valor;
    }

    else{
        return "Escala inválida.";
    }

    return $resultado;
}

    $destino = "F";
    $origem = "C";
    $valor = 30;

    $resultado = converter_temperatura($valor, $origem, $destino);

    echo "O valor é: $valor °$origem <br>";
    echo "A conversão é para: °$destino <br>";
    echo "O resultado é: $resultado °$destino <br>";

