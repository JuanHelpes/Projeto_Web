<?php

class Usuario {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function login($email, $senha) {
        $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $stmt = $stmt->fetch(PDO::FETCH_ASSOC);
            return $stmt;
        } else {
            return false;
        }
    }

    public function registrar($nome, $email, $senha, $confirmarSenha)
    {
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome','$email','$senha')";
        $stmt = $this->conn->prepare($sql);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function dadosUsuario($idUsuario){


    $sql_code = "SELECT * FROM usuario WHERE idUsuario = '$idUsuario' LIMIT 1";
    $sql_exec = $this->conn->prepare($sql_code) or die($this->conn->query);

    $usuario = $sql_exec->fetch_assoc();

    return $usuario;
    
    }
}
