<?php

class Produto {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function pesquisa() {
        $sql = "SELECT * FROM produto";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() >= 1) {
            $stmt = $stmt->fetchAll();
            return $stmt;
        } else {
            return false;
        }
    }

    public function pesquisa_id($id) {
        $sql = "SELECT * FROM produto WHERE idProduto='$id'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            $stmt = $stmt->fetch(PDO::FETCH_ASSOC);
            return $stmt;
        } else {
            return false;
        }
    }

    public function pesquisaCarrinho($idUsuario) {
        $sql = "select descricao, valor, imagem1, idProduto from produto inner join carrinho  on (idProduto = produto_idproduto) inner join usuario on (idUsuario = Usuario_idUsuario)  where idUsuario = '$idUsuario'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() >= 1) {
            $stmt = $stmt->fetchAll();
            return $stmt;
        } else {
            return false;
        }
    }

    public function retirarCarrinho($idUsuario, $idProduto) {
        $sql = "delete from carrinho where Usuario_idUsuario = '$idUsuario' and produto_idproduto = '$idProduto' ";
        $stmt = $this->conn->prepare($sql);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}