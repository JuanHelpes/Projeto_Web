<?php
if (!isset($_SESSION)) {
  session_start();
}

$icone = "bi bi-person-circle";
$loginText = "Faça LOGIN ou";
$loginText2 = "crie seu CADASTRO";
$link = "login.php";


if (isset($_SESSION['id'])) {
  $icone = "bi bi-person-fill-check";
  $loginText = "";
  $loginText2 = "DESLOGAR";
  $link = "..\API\deslogar.php";
}

?>

<nav class="cor-fundo navbar navbar-expand-md footer-bg">
  <div class=" container-fluid">
    <a style="margin-right: 40px; margin-left: 40px;" class="navbar-brand" href="index.php">
      <h1 class="m-0"><img class="d-block" src="../assets/logodog3.png" style="width: 120px;" alt="PitTech"></h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <form class="d-flex collapse navbar-collapse" role="search" action="produtos_pesquisa.php" method="POST">
        <input class="form-control me-2 rounded-0" type="search" placeholder="Digite o produto" aria-label="Search" name="palavra">
        <button class="btn btn-outline-dark rounded-0" type="submit">Buscar</button>
      </form>
      <a style="margin-left: 35px; margin-right: 35px; color: black;" class=" <?php echo $icone ?> fs-1" href="<?php echo $link ?>">
        <div class="texto-menor div-login-cadastro"><?php echo $loginText ?><p><?php echo $loginText2 ?></p>
        </div>
      </a>
      <a style="margin-left: 15px; margin-right: 35px ;color: black;" class="bi bi-cart3 fs-2" href="#"></a>
      </ul>
    </div>
  </div>
</nav>