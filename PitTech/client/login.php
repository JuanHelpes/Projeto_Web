<?php
if (isset($_POST['email_login'], $_POST['senha_login'])) {

	$erro = false;

	if ($_POST['email_login'] == '' || $_POST['senha_login'] == '')
		$erro = true;

	if (!$erro) {
		include("../API/Usuario.php");
		include("../API/Conn.php");

		$dbConnection = new DatabaseConnection();
		$conexao = $dbConnection->connectDB();

		$email = $_POST['email_login'];
		$senha = $_POST['senha_login'];
		$usuario = new Usuario($conexao);
		$result = $usuario->login($email, $senha);

		if ($result != False) {
			session_start();
		}
		$_SESSION['id'] = $result['idUsuario'];
		header("Location: index.php");
	} 
} else if (isset($_POST['nome_cadastro'], $_POST['email_cadastro'], $_POST['senha_cadastro'], $_POST['confirmar_cadastro'])) {
	include("../API/usuario.php");
	include("../API/Conn.php");

	$erro = false;

	if ($_POST['nome_cadastro'] == '' ||  $_POST['email_cadastro'] == '' || $_POST['senha_cadastro'] == '' || $_POST['confirmar_cadastro'])
		$erro = true;

	if ($_POST['senha_cadastro'] != $_POST['confirmar_cadastro'])
		$erro = true;

	if (!$erro) {
		$dbConnection = new DatabaseConnection();
		$conexao = $dbConnection->connectDB();

		$email = $_POST['email_cadastro'];
		$senha = $_POST['senha_cadastro'];
		$nome = $_POST['nome_cadastro'];
		$confirmar = $_POST['confirmar_cadastro'];
		$usuario = new Usuario($conexao);

		if ($usuario->registrar($nome, $email, $senha, $confirmar)) {
			$_SESSION['usuario'] = $email; // Salva o email do usuário na sessão
			echo "Cadastrado";
		} else {
			echo "Falha ao cadastrar";
		}
	}
}
?>

<!doctype html>
<html lang="pt-br">

<head>
	<title>Webleb</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<link rel="stylesheet" href="../styles/styleLogin.css">
	<link rel="stylesheet" href="../styles/style.css">
</head>

<body>
	<?php require("cabecalho.php") ?>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Login </span><span>Registrar</span></h6>
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
						<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Login</h4>
											<div class="form-group">
												<form action="" method="POST">
													<input type="email" class="form-style" placeholder="Email" name="email_login">
													<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Password" name="senha_login">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button type="submit" class="btn mt-4">Login</button>
											</form>
											<p class="mb-0 mt-4 text-center"><a href="https://www.web-leb.com/code" class="link">Esqueceu sua senha?</a></p>
										</div>
									</div>
								</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-3 pb-3">Registrar</h4>
											<div class="form-group">
												<form action="" method="POST">
													<input type="text" class="form-style" placeholder="Nome Completo" name='nome_cadastro'>
													<i class="input-icon uil uil-user"></i>
											</div>
											<div class="form-group mt-2">
												<input type="email" class="form-style" placeholder="Email" name='email_cadastro'>
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Senha" name='senha_cadastro'>
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Confirmar Senha" name='confirmar_cadastro'>
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button type="submit" class="btn mt-4">Registrar</a>
												</form>
										</div>
									</div>
								</div>
							</div>
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