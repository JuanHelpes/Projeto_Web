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
      <div class=" card rounded-0 border-0">
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

  <h2 class="container text-center my-3 my-xl-5">Produtos que estão bombando</h2>

  <div class="container row mx-auto g-4">
    <div class="col-md-6 col-sm-12 col-xl-4">
      <div class="card">
        <img src="./assets/Mobile/produtos/camiseta.png" alt="camiseta">
        <div class="card-body">
          <h5 class="card-title">Produto</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <p href="">R$30,00</p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-12 col-xl-4">
      <div class="card">
        <img class="img-fluid d-md-none d-xl-none" src="./assets/Mobile/produtos/calca.png" alt="calca.png">
        <img class="img-fluid d-none d-md-none d-xl-block" src="./assets/Desktop/produtos/calca.png" alt="calca.png">
        <img class="img-fluid d-none d-md-block d-xl-none" src="./assets/Tablet/produtos/calca.png" alt="calca.png">
        <div class="card-body">
          <h5 class="card-title">Produto</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <p href="">R$30,00</p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 col-xl-4">
      <div class="card">
        <img class="d-md-none d-xl-none" src="./assets/Mobile/produtos/tenis.png" alt="tenis.png">
        <img class="d-none d-md-none d-xl-block" src="./assets/Desktop/produtos/tenis.png" alt="tenis.png">
        <img class="d-none d-md-block d-xl-none" src="./assets/Tablet/produtos/tenis.png" alt="tenis.png">
        <div class="card-body">
          <h5 class="card-title">Produto</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <p href="">R$30,00</p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 col-xl-4">
      <div class="card">
        <img class="d-md-none d-xl-none" src="./assets/Mobile/produtos/jaqueta-jeans.png" alt="jaqueta-jeans.png">
        <img class="d-none d-md-none d-xl-block" src="./assets/Desktop/produtos/jaqueta-jeans.png" alt="jaqueta-jeans.png">
        <img class="d-none d-md-block d-xl-none" src="./assets/Tablet/produtos/jaqueta-jeans.png" alt="jaqueta-jeans.png">
        <div class="card-body">
          <h5 class="card-title">Produto</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <p href="">R$30,00</p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 col-xl-4">
      <div class="card">
        <img class="d-md-none d-xl-none" src="./assets/Mobile/produtos/oculos.png" alt="oculos">
        <img class="d-none d-md-none d-xl-block" src="./assets/Desktop/produtos/oculos.png" alt="oculos.png">
        <img class="d-none d-md-block d-xl-none" src="./assets/Tablet/produtos/oculos.png" alt="oculos.png">
        <div class="card-body">
          <h5 class="card-title">Produto</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <p href="">R$30,00</p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 col-xl-4">
      <div class="card">
        <img class="d-md-none d-xl-none" src="./assets/Mobile/produtos/bolsa.png" alt="bolsa">
        <img class="d-none d-md-none d-xl-block" src="./assets/Desktop/produtos/bolsa.png" alt="bolsa">
        <img class="d-none d-md-block d-xl-none" src="./assets/Tablet/produtos/bolsa.png" alt="bolsa">
        <div class="card-body">
          <h5 class="card-title">Produto</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <p href="">R$30,00</p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>
  </div>

  <div class="divs-novidades"></div>
  <footer class="text-center footer-bg">
    <p class="py-3">2023 <i class="bi bi-c-circle"></i> Desenvolvido pelos alunos do CEFET-Leopoldina | Projeto sem fins
      comerciais</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>