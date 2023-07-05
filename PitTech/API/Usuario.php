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


    $sql_code = "SELECT nome, email FROM usuario WHERE idUsuario = '$idUsuario' LIMIT 1";
    $stmt = $this->conn->prepare($sql_code);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    return $usuario;
    }

    public function enderecoUsuario($idUsuario){


        $sql_code = "SELECT * FROM endereco WHERE idUsuario = '$idUsuario' LIMIT 1";
        $stmt = $this->conn->prepare($sql_code);
        $stmt->execute();
    
        $endereco = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $endereco;
    }

    public function atualizaDados($idUsuario, $nome, $email, $cep, $logradouro, $numero, $bairro, $cidade, $complemento, $uf){


        $sql_code = "UPDATE usuario SET nome= '$nome' ,email= '$email'  WHERE idUsuario = '$idUsuario'";
        $stmt = $this->conn->prepare($sql_code);
        $stmt->execute();
        $req1 = false;
        if ($stmt->execute()) {
            $req1 = true;
        }


        
        $sql_code = "select * from endereco WHERE idUsuario = '$idUsuario'";
        $stmt = $this->conn->prepare($sql_code);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $sql_code = "UPDATE endereco SET logradouro='$logradouro', numero='$numero',bairro='$bairro',cidade ='$cidade',cep='$cep',uf='$uf',complemento='$complemento' WHERE idUsuario='$idUsuario'";
            $stmt = $this->conn->prepare($sql_code);
            $stmt->execute();
            $req2 = false;
            if ($stmt->execute()) {
                $req2 = true;
            }
        }else{
            $sql_code = "INSERT INTO endereco (logradouro, numero, bairro, cidade, cep, uf, complemento, idUsuario) 
            VALUES ('$logradouro','$numero','$bairro','$cidade','$cep','$uf','$complemento','$idUsuario')";
            $stmt = $this->conn->prepare($sql_code);
            $req2 = false;
            if ($stmt->execute()) {
                $req2 = true;
            }
        }

        if($req1 and $req2) {
            return true;
        }else
            return false;
    
    }
}
