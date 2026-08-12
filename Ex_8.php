<?php

function ordenar_nomes ($nomes){
    $vetor = explode(",", $nomes);

    foreach($vetor as &$nome){
        $nome = trim($nome);
    }
    sort($nome);

    return implode(",",$vetor);
}

    $nomes = "Nínive, André, Maria, Icaro"

    echo "Os nomes desordenados:  " . $nomes . "<br>";
    echo "Os nomes ordenados são: " . ordenar_nomes($nomes) . "<br>";