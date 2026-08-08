<?php

function ordenar_nomes ($nomes){
    $vetor = explode(",", $nomes);

    foreach($vetor as &$nome){
        $nome = trim($nome);
    }

    
}