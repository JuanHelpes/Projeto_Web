<?php

include("../API/Produto.php");
include("../API/Conn.php");

if (count($_POST)> 0) {
$dbConnection = new DatabaseConnection();
$conexao = $dbConnection->connectDB();

$produtos = new Produto($conexao);

$palavra = $_POST['palavra'];
$produtos = $produtos->pesquisa_palavra($palavra);

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="main-background">
    <nav class="cor-fundo navbar navbar-expand-md footer-bg">
        <div class=" container-fluid">
            <a style="margin-right: 40px; margin-left: 40px;" class="navbar-brand" href="#">
                <h1 class="m-0"><img class="d-block" src="../assets/logodog3.png" style="width: 120px;" alt="PitTech">
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="d-flex collapse navbar-collapse" role="search">
                    <input class="form-control me-2 rounded-0" type="search" placeholder="Digite o produto"
                        aria-label="Search">
                    <button class="btn btn-outline-dark rounded-0" type="submit">Buscar</button>
                </form>
                <a style="margin-left: 35px; margin-right: 35px; color: black;" class="bi bi-person-circle fs-1"
                    href="#">
                    <div class="texto-menor div-login-cadastro">Faça LOGIN ou<p>crie seu CADASTRO</p>
                    </div>
                </a>
                <a style="margin-left: 15px; margin-right: 35px ;color: black;" class="bi bi-cart3 fs-2" href="#"></a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Example Code -->
    <h2 class="container text-center my-3 my-xl-5">Resultados:</h2>
    <div class="container row mx-auto g-4">
        <?php if($produtos != false) foreach($produtos as &$produto) { ?> 
        <div class="col-md-6 col-sm-12 col-xl-4">
            <div class="d-flex flex-column card align-items-center w-75 p-4 gap-1 shadow">
                <img style="max-width: 250px; max-height: 250px;" src="<?php echo $produto['imagem1']; ?>" alt="">
                <span class="title"><strong><?php echo $produto['descricao']; ?></strong></span>
                <span class="valor price">R$ <?php echo $produto['valor']; ?></span>
                <button class="button w-75" onclick="window.location.href='produto.php?id=<?php echo $produto['idProduto']; ?>'">Ver mais</button>
                <button class="button bi bi-cart3 fs-6 w-75">Adicionar no carrinho</button>
            </div>
        </div>
        <?php } ?>
    </div>

    <footer class="text-center footer-bg">
        <p class="py-3">2023 <i class="bi bi-c-circle"></i> Desenvolvido pelos alunos do CEFET-Leopoldina | Projeto sem
            fins
            comerciais</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>