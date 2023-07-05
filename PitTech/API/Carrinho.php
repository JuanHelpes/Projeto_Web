<?php

class Carrinho{
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function adicionar($id_usr, $id_prod) {
        $sql = "INSERT INTO carrinho (Usuario_idUsuario, produto_idproduto, comprado) VALUES ('$id_usr','$id_prod','0')";
        $stmt = $this->conn->prepare($sql);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function remover($id_usr, $id_prod){
        $sql = "DELETE FROM carrinho WHERE Usuario_idUsuario='$id_usr' and produto_idproduto='$id_prod'";
        $stmt = $this->conn->prepare($sql);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

}

?>