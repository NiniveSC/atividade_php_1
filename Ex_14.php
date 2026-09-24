<?php

function estatisticas_numericas($numeros){
    $soma = array_sum($numeros);
    $media = $soma / count($numeros);
    $maior = max($numeros);
    $menor = min($numeros);

    sort($numeros);

    $quantidade = count($numeros);

    if($quantidade % 2 == 0){
        $meio1 = $numeros[$quantidade / 2 - 1];
        $meio2 = $numeros[$quantidade / 2];
        $mediana = ($meio1 + $meio2) / 2;
    } else {
        $mediana = $numeros[floor($quantidade / 2)];
    }

    $pares = 0;
    $impares = 0;

    foreach($numeros as $numero){
        if($numero % 2 == 0){
            $pares++;
        } else {
            $impares++;
        }
    }

    $resultado = "Soma: $soma";
    $resultado .= "<br>Média: $media";
    $resultado .= "<br>Maior valor: $maior";
    $resultado .= "<br>Menor valor: $menor";
    $resultado .= "<br>Mediana: $mediana";
    $resultado .= "<br>Números pares: $pares";
    $resultado .= "<br>Números impares: $impares";

    return $resultado;
}

$numeros [10,3,16,8,3];

echo "Números dados: " . implode(", ",$numeros) . "<br><br>";
echo estatisticas_numericas($numeros);