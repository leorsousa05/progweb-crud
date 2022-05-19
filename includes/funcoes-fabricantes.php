<?php
    // funcoes-fabricantes.php
    require "conecta.php";

    function lerFabricantes($conexao) {
        // Montar a string do comando SQL
        $sql = "SELECT * FROM fabricantes";
        // 2) Executar o comando
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    
        $fabricantes = [];
    
        // 4)
        while($fabricante = mysqli_fetch_assoc($resultado)) {
            array_push($fabricantes, $fabricante);
        };
    
        // 5)
        return $fabricantes;
        
    };
    /* var_dump(lerFabricantes($conexao)); */

    function inserirFabricante($conexao, $nome) {
        $sql = "INSERT INTO fabricantes(nome) VALUES('$nome')";
        mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    }

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






