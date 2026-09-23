<?php
function analisar_produtos ($produtos, $pesquisa){

    $maior_preco = max($produtos);
    $menor_preco = min($produtos);
    $media_preco = array_sum($produtos) / count($produtos);

    $produto_mais_caro = array_search($maior_preco, $produtos);
    $produto_mais_barato = array_search($menor_preco, $produtos);

    $resultado = "<br>Produto mais caro: R$ " . $maior_preco;
    $resultado .= "<br>Produto mais barato: R$ " . $menor_preco;
    $resultado .= "<br>Média de preço dos produtos: R$ " . $media_preco;

    if(array_key_exists($pesquisa, $produtos))
        $resultado .= "<br>Produto informado: R$ " . $produtos[$pesquisa];
    else{
        $resultado .= "<br>Produto informado não encontrado";
    }
    return $resultado;
}

    $produtos = [
        "Pão" => 15.00,
        "Queijo" => 7.50,
        "Presunto" => 13.90,
        "Margarina" => 10.90,
    ];

    $pesquisa = "Pão";

    echo "Produtos disponíveis: <br>";
    foreach ($produtos as $nome => $preco) {
        echo "$nome: R$ $preco <br>";
    }

    echo "<br>Produtos informados pelo usuário: $pesquisa <br>";
    echo analisar_produtos ($produtos, $pesquisa);