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



