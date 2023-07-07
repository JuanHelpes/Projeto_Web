<?php
$id = intval($_GET['id']);

include("../API/Produto.php");
include("../API/Conn.php");

if (!isset($_SESSION)) {
  session_start();
}

$dbConnection = new DatabaseConnection();
$conexao = $dbConnection->connectDB();

$produto = new Produto($conexao);

$produto = $produto->pesquisa_id($id);


if(isset($_POST['idCarrinho'])){
  if (isset($_SESSION['id'])) {
    include("../API/Carrinho.php");
    $carrinho = new Carrinho($conexao);
    if($carrinho->adicionar(isset($_SESSION['id']), $produto['idProduto'])){
      echo "<script>alert('Produto adicionado ao carrinho!');</script>";
    }
    else echo "Erro";
  }else {
    header("Location: index.php");
  }
  
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

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <?php require("cabecalho.php") ?>

  <div class="d-flex justify-content-center m-3">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade w-25 m-3" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php if (!empty($produto['imagem1'])) { ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <?php } ?>
        <?php if (!empty($produto['imagem2'])) { ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <?php } ?>
        <?php if (!empty($produto['imagem3'])) { ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <?php } ?>
      </ol>
      <div class="carousel-inner">
        <?php if (!empty($produto['imagem1'])) { ?>
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo $produto['imagem1']; ?>" alt="First slide">
          </div>
        <?php } ?>
        <?php if (!empty($produto['imagem2'])) { ?>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $produto['imagem2']; ?>" alt="Second slide">
          </div>
        <?php } ?>
        <?php if (!empty($produto['imagem3'])) { ?>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $produto['imagem3']; ?>" alt="Third slide">
          </div>
        <?php } ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="d-flex flex-column m-4 p-4 w-25 align-items-center">
      <h1 style="color: #ff8e00; font-weight: 400; font-size: 22px;" class="text-decoration-none m-1 p-1" href="#"><?php echo $produto['descricao'] ?></h1>
      <h5 style="color: #ff8e00; font-weight: 400; font-size: 22px;" class="text-decoration-none m-1 p-1"><?php echo $produto['estoque']; ?></h5>
      <div style="background-color: #E5FFF1;" class="d-flex flex-column align-items-center p-2 mt-5 w-75 shadow">
        <p class="bi bi-cash fs-6"> Valor à vista no <strong>Pix</strong></p>
        <p style="color: #1F9050; font-size: 18px;"><strong>R$ <?php echo number_format($produto['valor'], 2, ',', '.'); ?></strong></p>
      </div>
      <div class="d-flex flex-column w-auto align-items-center mt-auto">
        <form method="POST">
          <input style="display: none;" type="text" name="idCarrinho">
          <button style="color: #ff8e00; font-weight: 500; border-radius: 15px;" class="compra bi bi-cart3 fs-6 text-decoration-none m-1 border p-1 border-dark border" type="submit">ADICIONAR NO CARRINHO</button>
        </form>
      </div>
    </div>
  </div>
  <div class="d-flex flex-column align-items-center">

    <div id="myDiv" class="d-flex flex-column w-100 align-items-center shadow" style="overflow-y:hidden; margin-botton: 40px;">
      <div id="toggleButton" class="d-flex align-items-center justify-content-end">
        <h1 style="color: #ff8e00; font-weight: 400;" class="text-decoration-none m-1 p-1">Descrição do Produto</h1>
        <a style="color: #ff8e00; font-weight: 500; border-radius: 15px;" class="bi bi-caret-down-fill fs-3 w-10 align-items-end text-decoration-none"></a>
      </div>
      <p><?php if (!empty($produto['sobre'])) echo $produto['sobre'] ?></p>
    </div>
  </div>

  <footer class="text-center footer-bg">
    <p class="py-3">2023 <i class="bi bi-c-circle"></i> Desenvolvido pelos alunos do CEFET-Leopoldina | Projeto sem fins
      comerciais</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

  <script>
    const toggleButton = document.getElementById("toggleButton");
    const myDiv = document.getElementById("myDiv");

    toggleButton.addEventListener("click", function() {
      if (myDiv.style.height === "65px") {
        myDiv.style.height = "350px";
      } else {
        myDiv.style.height = "65px";
      }
    });
  </script>

</body>