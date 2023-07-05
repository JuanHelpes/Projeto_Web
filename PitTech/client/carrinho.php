<?php
include("../API/Produto.php");
include("../API/usuario.php");
include("../API/Conn.php");

if (!isset($_SESSION)) {
    session_start();
}

$dbConnection = new DatabaseConnection();
$conexao = $dbConnection->connectDB();

$produtos = new Produto($conexao);
$usuario = new Usuario($conexao);

$produtos = $produtos->pesquisaCarrinho($_SESSION['id']);

$dadosEndereco = $usuario->enderecoUsuario($_SESSION['id']);

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="bg-light-subtle">
    <?php require("cabecalho.php") ?>

    <div class="d-flex flex-wrap m-2">
        <div class="d-flex flex-column container">
            <div class="d-flex flex-column container gap-1 mt-4 shadow g-col-6">
                <div class="d-flex align-items-center gap-2">
                    <a style="color: #ff8e00;" class="bi bi-geo-alt-fill fs-2" href="#"></a>
                    <h4 class="m-0">SELECIONE O ENDEREÇO</h4>
                </div>
                <div class="d-flex flex-column m-0 gap-1 p-0 bg-light">
                    <p class="m-0"><?php if (!empty($dadosEndereco['logradouro'])) echo $dadosEndereco['logradouro'];
                                    else echo "Logradouro: Não cadastrado" ?>, <?php if (!empty($dadosEndereco['bairro'])) echo $dadosEndereco['bairro'];
                                                                                else echo "Bairro: Não cadastrado" ?></p>
                    <p class="m-0">Número: <?php if (!empty($dadosEndereco['numero'])) echo $dadosEndereco['numero'];
                                            else echo "Numero: Não cadastrado" ?>, <?php if (!empty($dadosEndereco['complemento'])) echo $dadosEndereco['complemento'];
                                                                                    else echo "Complemento: Não cadastrado"  ?></p>
                    <p class="m-0">CEP <?php if (!empty($dadosEndereco['cep'])) echo $dadosEndereco['cep'];
                                        else echo "CEP: Não cadastrado" ?> - <?php if (!empty($dadosEndereco['cidade'])) echo $dadosEndereco['cidade'];
                                                                                else echo "Cidade: Não cadastrado" ?>, <?php if (!empty($dadosEndereco['uf'])) echo $dadosEndereco['uf'];
                                                                                                                        else echo "UF: Não cadastrado" ?></p>
                </div>
                <div class="d-flex justify-content-end">
                    <a style="color: #ff8e00; font-weight: 500;" class="m-1 text-decoration-none" href="usuario.php">EDITAR</a>
                </div>
            </div>

            <div class="d-flex flex-column container gap-1 mt-4 shadow">
                <div class="d-flex align-items-center gap-2">
                    <a style="color: #ff8e00;" class="bi bi-handbag-fill fs-4" href="#"></a>
                    <h4 class="m-0">PRODUTOS</h4>
                </div>
                <?php $total = 0;
                foreach ($produtos as &$produto) {
                    $total += $produto['valor']; ?>
                    <div id="produto">
                        <div class="d-flex m-0 gap-1 p-0 bg-light align-items-center gap-2">
                            <img style="width: 90px;" src="<?php echo $produto['imagem1']; ?>" alt="produto1">
                            <div class="d-flex flex-column gap-0">
                                <p class="m-0"><strong><?php echo $produto['descricao']; ?></strong></p>
                                <p class="m-0">Preço: R$ <?php echo number_format($produto['valor'], 2, ',', '.'); ?></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a style="color: #ff0000; font-weight: 500; border: 1px, #ff0000 solid;" class="bi bi-trash-fill fs-6 text-decoration-none m-1 border p-1 border-2 border-danger" onclick="abrirModal(<?php echo $produto['idProduto']  ?>)">REMOVER</a>
                        </div>
                    </div>
                <?php } ?>

                <!-- Modal -->
                <div id="modal" class="modal">
                    <div class="modal-content">
                        <p>Tem certeza que deseja continuar?</p>
                        <p><?php echo $produto['idProduto']; ?></p>
                        <div class="modal-buttons">
                            <button onclick="fecharModal()">Não</button>
                            <button onclick="fazerAlgo()">Sim</button>
                        </div>
                    </div>
                </div>

                <!--            
                <div id="produto">
                    <div class="d-flex m-0 gap-1 p-0 bg-light align-items-center gap-2">
                        <img style="width: 90px;" src="./assets/exemplo.jpg" alt="produto1">
                        <div class="d-flex flex-column gap-0">
                            <p class="m-0">Nome</p>
                            <p class="m-0">Descricao do produto</p>
                            <p class="m-0">Preço: R$300,00</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a style="color: #ff0000; font-weight: 500; border: 1px, #ff0000 solid;" class="bi bi-trash-fill fs-6 text-decoration-none m-1 border p-1 border-2 border-danger" href="#">REMOVER</a>
                    </div>
                </div> -->
            </div>
        </div>
        <div style="width: 15%; height: 20%;" class="d-flex flex-column border shadow bg-light m-4 p-4">
            <a style="color: #ff8e00; font-weight: 500;" class="bi bi-rocket-fill fs-6 text-decoration-none m-1 p-1" href="#"> RESUMO</a>
            <P>Valor dos Produtos: R$<?php echo number_format($total, 2, ',', '.') ?></P>
            <div style="background-color: #E5FFF1;" class="d-flex flex-column align-items-center">
                <p>Valor à vista no <strong>Pix</strong></p>
                <p style="color: #1F9050;"><strong>R$ <?php echo number_format($total = $total - ($total * 0.1), 2, ',', '.'); ?></strong></p>
            </div>
            <div class="d-flex flex-column">
                <a style="color: #ff8e00; font-weight: 500;" class="text-decoration-none m-1 border p-1 border-2" href="#">IR PARA O PAGAMENTO</a>
                <a style="color: #ff8e00; font-weight: 500;" class="text-decoration-none m-1 border p-1 border-2 border" href="#">CONTINUAR COMPRANDO</a>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <p class="py-3">2023 <i class="bi bi-c-circle"></i> Desenvolvido pelos alunos do CEFET-Leopoldina | Projeto sem
            fins
            comerciais</p>
    </footer>
    <script>
        // Função para abrir o modal
        function abrirModal(idProduto) {
            // console.log(idProduto);

            var modal = document.getElementById("modal");
            modal.style.display = "block";
        }

        // Função para fechar o modal
        function fecharModal() {
            var modal = document.getElementById("modal");
            modal.style.display = "none";
        }

        // Função para executar alguma ação ao clicar em "Sim"
        function fazerAlgo(idProduto) {
            // Coloque aqui o código que deseja executar
            console.log("Ação executada!");

            // Feche o modal após ação ser executada
            fecharModal();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>