<?php
include("../API/usuario.php");
include("../API/Conn.php");

if (!isset($_SESSION)) {
    session_start();
}

$dbConnection = new DatabaseConnection();
$conexao = $dbConnection->connectDB();

$usuario = new Usuario($conexao);

$dadosUsuario = $usuario->dadosUsuario($_SESSION['id']);

$dadosEndereco = $usuario->enderecoUsuario($_SESSION['id']);

if (count($_POST) > 0) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $complemento = $_POST['complemento'];
    $uf = $_POST['uf'];

    if ($usuario->atualizaDados($_SESSION['id'], $nome, $email, $cep, $logradouro, $numero, $bairro, $cidade, $complemento, $uf)) {
        $dadosUsuario = $usuario->dadosUsuario($_SESSION['id']);
        $dadosEndereco = $usuario->enderecoUsuario($_SESSION['id']);
        echo 'alterado com sucesso';
    } else echo "Error";
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

    <?php require("cabecalho.php") ?>

    <h3 class="d-flex m-4 align-items-center"><a style="color: #ff8e00;" class="bi bi-person-fill" href=""></a> MEUS
        DADOS</h3>
    <div class="d-flex m-2">
        <div class="d-flex flex-column container">
            <form method="POST">
                <div class="d-flex flex-column container  mt-4 shadow g-col-6">
                    <div class="d-flex align-items-center ">
                        <a style="color: #ff8e00;" class="bi bi-file-earmark-text-fill fs-2" href="#"></a>
                        <h4 class="m-0">DADOS BÁSICOS</h4>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="nome" required autocomplete="off" value=<?php echo $dadosUsuario['nome'] ?>>
                        <label for="name">Nome completo*</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="email" required autocomplete="off" value=<?php echo $dadosUsuario['email'] ?>>
                        <label for="name">Email</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="senha" autocomplete="off" required>
                        <label for="name">Senha</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="confirmarSenha" required autocomplete="off">
                        <label for="name">Confirmar senha</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" style="color: #ff8e00; font-weight: 500; border-radius: 15px; width: 270px;" class="compra m-1 border p-1 border-dark border p-1">
                            SALVAR TODAS AS INFORMAÇÕES </button>
                    </div>
                </div>
        </div>
        <div class="d-flex flex-column container">

            <div class="d-flex flex-column container  mt-4 shadow g-col-6">
                <div class="d-flex align-items-center ">
                    <a style="color: #ff8e00;" class="bi bi-geo-alt-fill fs-2" href="#"></a>
                    <h4 class="m-0">ENDEREÇO</h4>
                </div>
                <div class="inputGroup">
                    <input type="text" name="cep" required="" autocomplete="off" value=<?php if (!empty($dadosEndereco['cep'])) echo $dadosEndereco['cep'] ?>>
                    <label for="name">CEP*</label>
                </div>
                <div class="inputGroup">
                    <input type="text" name="logradouro" required="" autocomplete="off" value=<?php if (!empty($dadosEndereco['logradouro'])) echo $dadosEndereco['logradouro'] ?>>
                    <label for="name">Logradouro*</label>
                </div>
                <div class="inputGroup">
                    <input type="text" name="numero" required="" autocomplete="off" value=<?php if (!empty($dadosEndereco['numero'])) echo $dadosEndereco['numero'] ?>>
                    <label for="name">Numero*</label>
                </div>
                <div class="inputGroup">
                    <input type="text" name="bairro" required="" autocomplete="off" value=<?php if (!empty($dadosEndereco['bairro'])) echo $dadosEndereco['bairro'] ?>>
                    <label for="name">Bairro*</label>
                </div>
                <div class="inputGroup">
                    <input type="text" name="cidade" required="" autocomplete="off" value=<?php if (!empty($dadosEndereco['cidade'])) echo $dadosEndereco['cidade'] ?>>
                    <label for="name">Cidade*</label>
                </div>
                <div class="inputGroup">
                    <input type="text" name="complemento" required="" autocomplete="off" value=<?php if (!empty($dadosEndereco['complemento'])) echo $dadosEndereco['complemento'] ?>>
                    <label for="name">Complemento</label>
                </div>
                <div class="inputGroup">
                    <input type="text" name="uf" required="" autocomplete="off" value=<?php if (!empty($dadosEndereco['uf'])) echo $dadosEndereco['uf'] ?>>
                    <label for="name">UF*</label>
                </div>
            </div>
            </form>
        </div>
    </div>
    <footer class="text-center footer-bg">
        <p class="py-3">2023 <i class="bi bi-c-circle"></i> Desenvolvido pelos alunos do CEFET-Leopoldina | Projeto sem
            fins
            comerciais</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>