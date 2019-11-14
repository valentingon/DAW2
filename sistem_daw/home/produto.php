<?php
include_once '../classes/autoload.php';

$produto = new Produto();
    $produto->setId($_GET['id']);

    $produtoDao = new ProdutoDao();
    $produtoData = $produtoDao->selectById($produto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="../css/style.css">
                <script src="asset/js/js.js"></script>
                <title>Home</title>
            </head>
            <body>
                <ul>
                    <li><a class="active" href="#">Nosos Productos</a></li>
                </ul>
                      <div class="gallery">
                        
                          <img src="../../upload/<?php echo $produtoData->getImagem(); ?>" width="600" height="400">
                        
                        <div class="desc">
                            descricion: <?php echo $produtoData->getDescricao(); ?>
                            <br>
                            preco: <?php echo $produtoData->getPreco(); ?>
                        </div>
                      </div>
                

</body>
</html>