<?php

class Produto {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function pesquisa() {
        $sql = "SELECT * FROM produto WHERE email = '$email' AND senha = '$senha'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            return $stmt;
        } else {
            return false;
        }
    }
}