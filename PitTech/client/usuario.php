<?php
include("../API/usuario.php");
include("../API/Conn.php");



if (isset($_POST['email_login'], $_POST['senha_login'])) {

    $erro = false;

    if ($_POST['email_login'] == '' || $_POST['senha_login'] == '')
        $erro = true;

    if (!$erro) {
        include("../API/usuario.php");
        include("../API/Conn.php");

        $dbConnection = new DatabaseConnection();
        $conexao = $dbConnection->connectDB();

        $email = $_POST['email_login'];
        $senha = $_POST['senha_login'];
        $usuario = new Usuario($conexao);

        if ($usuario->login($email, $senha)) {
            $_SESSION['usuario'] = $email;
            header("Location: index.html");
        } else {
        }
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
    <title>PitTech</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="bg-light-subtle">
    <nav style="background-color: #ff8e00;" class="cor-fundo navbar navbar-expand-md">
        <div class=" container-fluid">
            <a style="margin-right: 40px; margin-left: 40px;" class="navbar-brand" href="#">
                <h1 class="m-0"><img class="d-block" src="../assets/logodog3.png" style="width: 120px;" alt="PitTech">
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="d-flex collapse navbar-collapse" role="search">
                    <input class="form-control me-2 rounded-0" type="search" placeholder="Digite o produto" aria-label="Search">
                    <button class="btn btn-outline-light rounded-0" type="submit">Buscar</button>
                </form>
                <a style="margin: 25px; color: black;" class="bi bi-person-circle fs-1" href="#">
                    <p class="texto-menor">Faça Login ou crie seu Cadastro</p>
                </a>
                <a style="margin: 25px; color: black;" class="bi bi-cart3 fs-2" href="#"></a>
                </ul>
            </div>
        </div>
    </nav>

    <h3 class="d-flex m-4 align-items-center"><a style="color: #ff8e00;" class="bi bi-person-fill" href=""></a> MEUS
        DADOS</h3>
    <div class="d-flex m-2">
        <div class="d-flex flex-column container">
            <form action="" method="POST">
                <div class="d-flex flex-column container  mt-4 shadow g-col-6">
                    <div class="d-flex align-items-center ">
                        <a style="color: #ff8e00;" class="bi bi-file-earmark-text-fill fs-2" href="#"></a>
                        <h4 class="m-0">DADOS BÁSICOS</h4>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="nome" required="" autocomplete="off">
                        <label for="name">Nome completo*</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="email" required="" autocomplete="off">
                        <label for="name">Email</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="senha" required="" autocomplete="off">
                        <label for="name">Senha</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="confirmarSenha" required="" autocomplete="off">
                        <label for="name">Confirmar senha</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a type="submit" style="color: #ff8e00; font-weight: 500; border-radius: 15px; width: 70px;" class="compra text-decoration-none m-1 border p-1 border-dark border p-1" href="#">
                            SALVAR </a>
                    </div>
                </div>
            </form>
        </div>
        <div class="d-flex flex-column container">
            <form action="" method="POST">
                <div class="d-flex flex-column container  mt-4 shadow g-col-6">
                    <div class="d-flex align-items-center ">
                        <a style="color: #ff8e00;" class="bi bi-geo-alt-fill fs-2" href="#"></a>
                        <h4 class="m-0">ENDEREÇO</h4>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="cep" required="" autocomplete="off">
                        <label for="name">CEP*</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="logradouro" required="" autocomplete="off">
                        <label for="name">Logradouro*</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="numero" required="" autocomplete="off">
                        <label for="name">Numero*</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="bairro" required="" autocomplete="off">
                        <label for="name">Bairro*</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="cidade" required="" autocomplete="off">
                        <label for="name">Cidade*</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="complemento" required="" autocomplete="off">
                        <label for="name">Complemento</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="uf" required="" autocomplete="off">
                        <label for="name">UF*</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a type="submit" style="color: #ff8e00; font-weight: 500; border-radius: 15px; width: 70px;" class="compra fs-6 text-decoration-none m-1 border p-1 border-dark border p-1" href="#">
                            SALVAR </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="text-center">
        <p class="py-3">2023 <i class="bi bi-c-circle"></i> Desenvolvido pelos alunos do CEFET-Leopoldina | Projeto sem
            fins
            comerciais</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>