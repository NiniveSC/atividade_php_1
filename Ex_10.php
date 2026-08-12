<?php

function calcular_media($notas){
    $maior_nota = max($notas);
    $menor_nota = min($notas);

    $soma = 0;

    foreach($notas as $nota){
        $soma += $nota;
    }

    if($media >= 7){
        $resultado = "Esta Aprovado";        
    }elseif($media >= 5){
        $resultado = "Esta em Recuperação";
    }else{
        $resultado = "Esta Reprovado";
    }

    return ""
    }
