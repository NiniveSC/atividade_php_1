<?php

function calcular_media($notas){
    $maior_nota = max($notas);
    $menor_nota = min($notas);

    $soma = 0;

    foreach($notas as $nota){
        $soma += $nota;
    }

    $media = $soma / count($notas);

    if($media >= 7){
        $resultado = "Esta Aprovado";        
    }elseif($media >= 5){
        $resultado = "Esta em Recuperação";
    }else{
        $resultado = "Esta Reprovado";
    }

    return "Maior nota: $maior_nota <br>
            Menor nota: $menor_nota <br>
            Média: $media <br>
            Resultado: $resultado";
    }

    $notas = array(5, 2, 10, 8);

    echo "Notas: " . implode(",", $notas) . "<br>";
    echo calcular_media($notas);
