<?php
include_once '../classes/autoload.php';


$produtoDao = new ProdutoDao();
$lista = $produtoDao->select();
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
                <link rel="stylesheet" href="css/style.css">
                <script src="asset/js/js.js"></script>
                <title>Home</title>
            </head>
            <body>
                <ul>
                    <li><a class="active" href="#">Nosos Productos</a></li>
                </ul>
                <?php foreach($lista as $produto): ?>

                      <div class="gallery">
                        <a href="produto.php/?id=<?php echo $produto->getId(); ?>">
                          <img src="../upload/<?php echo $produto->getImagem(); ?>" alt="Mountains" width="600" height="400">
                        </a>
                        <div class="desc"><?php echo $produto->getDescricao(); ?></div>
                      </div>
                <?php endforeach; ?>

</body>
</html>