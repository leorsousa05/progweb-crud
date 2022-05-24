<?php
    // funcoes-produtos.php
    require "conecta.php";

    function lerProdutos($conexao) {
        // $sql = "SELECT produtos.id, produto, preco, quantidade, descricao, fabricantes_id FROM produtos ORDER BY produto";
        $sql = "SELECT produtos.id, produtos.produto AS nome, produtos.preco AS preco, produtos.quantidade AS quantidade, produtos.descricao, fabricantes.nome AS fabricante FROM produtos INNER JOIN fabricantes ON produtos.fabricantes_id = fabricantes.id ORDER BY produto";
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

        $produtos = [];

        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        };

        return $produtos;
    };

    function lerUmProduto($conexao, $id) {
        $sql = "SELECT * FROM produtos WHERE id = $id";

        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

        return  mysqli_fetch_assoc($resultado);
    }
    /* var_dump(lerFabricantes($conexao)); */

    function inserirProduto($conexao, $nome, $preco, $quantidade, $descricao, $fabId) {
        $sql = "INSERT INTO produtos(produto, preco, quantidade, descricao, fabricantes_id) VALUES('$nome', $preco, $quantidade, '$descricao', $fabId)";
        mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    }

    function excluirProduto($conexao, $id) {
        $sql = "DELETE FROM produtos WHERE id = $id";
        mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    }

    function atualizarProduto($conexao, $id, $nome, $preco, $quantidade, $descricao, $fabId) {
        $sql = "UPDATE produtos SET produto = '$nome', preco = '$preco', quantidade = '$quantidade', descricao = '$descricao', fabricantes_id = '$fabId' WHERE id = $id";
        mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    };







