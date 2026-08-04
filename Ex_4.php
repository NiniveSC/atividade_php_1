<?php

function gerar_senha($quantidade) 
    {
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'
    $senha = '';

    for($i=0; $i< $quantidade; $i++) {
        $posicao = rand(0, strlen($caracteres) - 1);
        $senha .= $caracteres[$posicao];
    }
    return $senha;
    }

    $quantidade = 10;

    echo "A quantidade de caracteres é: $quantidade <br>";
    echo "A senha gerada é:" . gerar_senha($quantidade);