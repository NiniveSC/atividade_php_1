<?php

function analisar_texto($texto)
    {
    $caracteres = str_word_count($texto);
    $palavras = strlen($texto);
    $vogais = 0;
    $consoantes = 0;

    for ($i=0; $i<strlen($texto); $i++) {
        $letra = strtolower($texto[$i]);

        if ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u") {
            $vogais++;
        } 
        else if (ctype_alpha($letra)) {
            $consoantes++;
        }

    }
    }

    echo "A quantidade de palavras é: " . $palavras . "<br>";
    echo "A quantidade de caracteres é: " . $caracteres . "<br>";
    echo "A quantidade de vogais é: " . $vogais . "<br>";
    echo "A quantidade de consoantes é: " . $consoantes . "<br>";

    $texto = "Exercício PHP";

    echo "O texto é: " . $texto . "<br>";

    analisar_texto($texto);