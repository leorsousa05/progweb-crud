<?php
    // funcoes-produtos.php
    require "conecta.php";

    function lerProdutos($conexao) {
        $sql = "SELECT id, produto, preco, quantidade, descricao, fabricantes_id FROM produtos ORDER BY produto";
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

        $produtos = [];

        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        };

        return $produtos;
    };
    /* var_dump(lerFabricantes($conexao)); */

    /* function inserirProduto($conexao, $nome) {

        mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    } */

    function lerUmFabricante($conexao, $id) {
        // Montagem do comando SQL com o parâmetro id
        $sql = "SELECT id, nome FROM fabricantes WHERE id = $id";
        
        // Execução do comando e armazenamento do resultado
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    
        return mysqli_fetch_assoc($resultado);
    }

    function atualizarFabricante($conexao, $nome, $id) {
        $sql = "UPDATE fabricantes SET nome = '$nome' WHERE id = $id";
        mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    };

    function excluirFabricante($conexao, $id) {
        $sql = "DELETE FROM fabricantes WHERE id = $id";
        mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    };






