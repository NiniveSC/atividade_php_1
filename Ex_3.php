<?php

    function mascara_CPF($cpf)
    {
        $cpf_mascarado = str_repeat("*", strlen($cpf) - 4) . substr($cpf, -4);
        return $cpf_mascarado;
    }

    $cpf = "09812387645";
    $resultado = mascara_cpf($cpf);

    echo "O CPF é: $cpf <br>";
    echo "O CPF mascarado: $resultado <br>";