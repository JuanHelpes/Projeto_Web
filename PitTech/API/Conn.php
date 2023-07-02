<?php

class DatabaseConnection {
    private string $db = "mysql";
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "";
    private string $dbname = "web";

    private ?PDO $connect = null;

    public function connectDB(): ?PDO {
        try {
            $this->connect = new PDO($this->db . ':host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass);
            return $this->connect;
        } catch (PDOException $err) {
            die('Erro: ' . $err->getMessage());
        }
    }
}

?>