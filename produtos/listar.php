<?php
    require "../includes/funcoes-produtos.php";
    $listaDeProdutos = lerProdutos($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Produtos | SELECT - CRUD com PHP e MySQL </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>Produtos | SELECT -
    <a href="../index.php">Home</a> </h1>
</div>

<div class="container">
    
    <h2>Lendo e carregando todos os produtos</h2>
    <p><a href="inserir.php" class="btn btn-primary px-4">Inserir</a></p>  

    <hr>

    <div class="row">
        <?php foreach($listaDeProdutos as $produto) { ?>
        <article class="col-sm-6 col-md-4 col-xl-6">
            <h3><b>Nome:   <?=$produto["nome"] ?>  </b></h3>
            <p><b>Preço:   <?='R$ '.$produto["preco"] ?>  </b></p>
            <p><b>Quantidade:   <?=$produto["quantidade"] ?>  </b></p>
            <p><b>Descrição:   <?=$produto["descricao"] ?> </b> </p>
            <p><b>Fabricante:   <?=$produto["fabricante"] ?></b> </p>
            
            <p>
                <a href="atualizar.php?id=<?=$produto['id']?>">Atualização</a>
                <a href="excluir.php?id=<?=$produto['id']?>">Excluir</a>
            </p>
        </article>
        <?php } ?>
    </div>

</div>


</body>
</html>