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
}