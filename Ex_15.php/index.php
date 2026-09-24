<?php

include "funcoes.php";

$peso = 70;
$altura = 1.75;

echo "Peso: $peso <br>";
echo "Altura: $altura <br>";
echo "IMC: " . calcular_imc($peso, $altura);
echo "<br><br>";

$email = "teste@teste.com";

echo "E-mail: $email <br>";
echo "Validação: " . validar_email($email);
echo "<br><br>";

echo "Senha gerada: " . gerar_senhas($email);
echo "<br><br>";

$texto = "Desenvolvimento";

echo "Texto original: $texto <br>";
echo "Quantidade de vogais: " . contar_vogais($texto);
echo "<br><br>";

$texto = "Recuperacao lista de php";

echo "Texto original: $texto <br>";
echo "Texto invertido: " . inverter_texto($texto);
echo "<br><br>";

$anoNascimento = 2009;

echo "Ano de nascimento: $anoNascimento <br>";
echo "Idade: " . calcular_idade($anoNascimento);
echo "<br><br>";

$valor = 50;

echo "Valor em dólar: $valor <br>";
echo "Valor em reais: R$ " . converter_moeda($valor);
echo "<br><br>";

$telefone = "47900000000";

echo "Telefone: $telefone <br>";
echo "Telefone formatado: " . formatar_telefone($telefone);
echo "<br><br>";

date_default_timezone_set("America/Sao_Paulo");
echo saudacao();
echo "<br><br>";

$senha = "123Tjk@!";

echo "Senha: $senha <br>";
echo "Resultado: " . validar_senha($senha);

?>