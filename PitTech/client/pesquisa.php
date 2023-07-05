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

<body>
  <?php require("cabecalho.php") ?>

  <div class="d-flex flex-wrap m-2">
    <div class="d-flex flex-column container">
      <div class="d-flex flex-column container gap-1 mt-4 shadow">
        <div id="produto">
          <div class="d-flex m-0 gap-1 p-0 bg-light align-items-center gap-2">
            <img style="width: 90px;" src="./assets/exemplo.jpg" alt="produto1">
            <div class="d-flex flex-column gap-0">
              <p class="m-0">Nome</p>
              <p class="m-0">Descricao do produto</p>
              <p class="m-0">Preço: R$300,00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center footer-bg">
    <p class="py-3">2023 <i class="bi bi-c-circle"></i> Desenvolvido pelos alunos do CEFET-Leopoldina | Projeto sem fins
      comerciais</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>