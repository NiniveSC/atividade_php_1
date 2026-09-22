<?php

function analisar_numeros($numero){
    if($numero % 2 == 0){
        $par_impar = "par";
    } else {
        $par_impar = "ímpar";
    }

    $primo = "Primo";

    if($numero < 2){
        $primo = "Não é primo";
    }else{
        for($i = 2; $i <= sqrt($numero); $i++){
            if($numero % $i == 0){
                $primo = "Não é primo";
                break;
            }
        }
    }

    $soma = 0;

    for($i = 1; $i < $numero; $i++){
        if($numero % $i == 0){
            $soma += $i;
        }
    }

    if($soma == $numero){
        $perfeito = "O número é perfeito";
    } else {
        $perfeito = "O número não é perfeito";
    }

    return "Número: $numero<br>
            O número é $par_impar.<br>
            $primo.<br>
            $perfeito.";
}

    $numero = 59;

    echo analisar_numeros($numero);
