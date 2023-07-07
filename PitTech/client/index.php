<?php

include("../API/Produto.php");
include("../API/Conn.php");

$dbConnection = new DatabaseConnection();
$conexao = $dbConnection->connectDB();

$produtos = new Produto($conexao);

$produtos = $produtos->pesquisa_palavra('');

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

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner main-background">
      <div class="carousel-item active">
        <img class="img-fluid d-md-none d-xl-none" src="../assets/banner1.png" alt="Modelo feminina vestindo blusa rosa">
        <img class="img-fluid d-none d-md-block d-xl-none" src="../assets/banner2.png" alt="Modelo feminina vestindo blusa rosa">
        <img class="img-fluid d-none d-md-none d-xl-block" src="../assets/banner1.png" alt="Modelo feminina vestindo blusa rosa">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid d-md-none d-xl-none" src="../assets/banner1.png" alt="Modelo feminina vestindo blusa rosa">
        <img class="img-fluid d-none d-md-block d-xl-none" src="../assets/banner2.png" alt="Modelo feminina vestindo blusa rosa">
        <img class="img-fluid d-none d-md-none d-xl-block" src="../assets/banner2.png" alt="Modelo feminina vestindo blusa rosa">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid d-md-none d-xl-none" src="../assets/banner1.png" alt="Modelo feminina vestindo blusa rosa">
        <img class="img-fluid d-none d-md-block d-xl-none" src="../assets/banner2.png" alt="Modelo feminina vestindo blusa rosa">
        <img class="img-fluid d-none d-md-none d-xl-block" src="../assets/banner3.png" alt="Modelo feminina vestindo blusa rosa">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <h2 class="text-center my-3 my-xl-5">Categorias</h2>
  <div class="container row mx-auto g-4">
    <div class="col-6 col-md-4 col-xxl-2">
      <a href="produtos.php?categoria=1" style="text-decoration: none;"">
      <div class="card rounded-0 border-0">
        <img src="../assets/hardware.jpeg" alt="Camiseta masculina">
        <div class="card-body bg-black">
          <p class="text-center text-light">HARDWARE</p>
        </div>
    </div>
    </a>
  </div>
  <div class="col-6 col-md-4 col-xxl-2">
    <a href="produtos.php?categoria=2" style="text-decoration: none;">
      <div class="card rounded-0 border-0">
        <img src="../assets/periferico.png" alt="Casaco masculino">
        <div class="card-body bg-black">
          <p class="text-center text-light">PERIFÉRICOS</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-6 col-md-4 col-xxl-2">
    <a href="produtos.php?categoria=3" style="text-decoration: none;">
      <div class="card rounded-0 border-0">
        <img src="../assets/computadores.png" alt="oculos">
        <div class="card-body bg-black">
          <p class="text-center text-light">COMPUTADORES</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-6 col-md-4 col-xxl-2">
    <a href="produtos.php?categoria=4" style="text-decoration: none;">
      <div class="card rounded-0 border-0">
        <img src="../assets/games.png" alt="calças masculinas">
        <div class="card-body bg-black">
          <p class="text-center text-light">GAMES</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-6 col-md-4 col-xxl-2">
    <a href="produtos.php?categoria=5" style="text-decoration: none;">
      <div class="card rounded-0 border-0">
        <img src="../assets/notebook.png" alt="oculos">
        <div class="card-body bg-black">
          <p class="text-center text-light">NOTEBOOKS</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-6 col-md-4 col-xxl-2">
    <a href="produtos.php?categoria=6" style="text-decoration: none;">
      <div class="card rounded-0 border-0">
        <img src="../assets/cadeira.png" alt="oculos">
        <div class="card-body bg-black">
          <p class="text-center text-light">ACESSORIOS</p>
        </div>
      </div>
    </a>
    </div>
  </div>

  <h2 class="container text-center my-3 my-xl-5">Nossos produtos</h2>
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
    
  <div class="divs-novidades"></div>
  <footer class="text-center footer-bg">
    <p class="py-3">2023 <i class="bi bi-c-circle"></i> Desenvolvido pelos alunos do CEFET-Leopoldina | Projeto sem fins
      comerciais</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>