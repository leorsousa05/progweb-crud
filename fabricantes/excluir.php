<?php
    require '../includes/funcoes-fabricantes.php';
    // Capturar o parâmetro id da URL
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    
    excluirFabricante($conexao, $id);
    
    header("location:listar.php");
?>