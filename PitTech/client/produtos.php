<?php

include("../API/Produto.php");
include("../API/Conn.php");

$dbConnection = new DatabaseConnection();
$conexao = $dbConnection->connectDB();

$produtos = new Produto($conexao);

$categoria = intval($_GET['categoria']);
$produtos = $produtos->pesquisa($categoria);

switch($categoria){
    case 1:
        $categoria = "Hardware";
        break;
    case 2:
        $categoria = "Perifericos";
        break;
    case 3:
        $categoria = "Computadores";
        break;
    case 4:
        $categoria = "Games";
        break;
    case 5:
        $categoria = "Notebooks";
        break;
    case 6:
        $categoria = "Acessorios";
        break;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/logodog2.png" type="image/x-icon">
    <title>Meteora</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="main-background">
    <?php require("cabecalho.php") ?>

    <!-- Example Code -->
    <h2 class="container text-center my-3 my-xl-5">Categoria: <?php echo $categoria; ?></h2>

    <div class="container row mx-auto g-4">
        <?php if ($produtos != false) foreach ($produtos as &$produto) { ?>
            <div class="col-md-6 col-sm-12 col-xl-4">
                <div class="d-flex flex-column card align-items-center w-75 p-4 gap-1 shadow">
                    <img style="width: 250px; height: 250px;" src="<?php echo $produto['imagem1']; ?>" alt="">
                    <span style="overflow-y: scroll; height: 70px;" class="title"><strong><?php echo $produto['descricao']; ?></strong></span>
                    <span class="valor price">R$ <?php echo number_format($produto['valor'], 2, ',', '.'); ?></span>
                    <button class="button w-75" onclick="window.location.href='produto.php?id=<?php echo $produto['idProduto']; ?>'">Ver mais</button>
                </div>
            </div>
        <?php } ?>
    </div>

    <footer class="text-center footer-bg">
        <p class="py-3">2023 <i class="bi bi-c-circle"></i> Desenvolvido pelos alunos do CEFET-Leopoldina | Projeto sem fins comerciais</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>