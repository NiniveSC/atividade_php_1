<?php

    function inverterTexto($texto)
    {
        return strrev($texto);
    }

    $texto = "Tecnico em Desenvolvimento de Sistemas";

    echo "Texto original: $texto <br>";
    echo "Texto invertido: " . inverterTexto($texto) . "<br>";
    echo "Quantidade de caracteres: " . strlen($texto);

