<?php

class db {

    private $host = "localhost"; //variáveis q vao receber as configs do banco de dados tipo string
    private $user = "root";
    private $password = "";
    private $port = "3307";
    private $dbname ="db_pweb1_2024_2_blog";

    public function __construct(){
        $this->conn();
    }

    public function conn(){

        try{ //try catch tenta e se der algum erro trata o erro
            $conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->user, //se nao botar o this fica indefinido, this representa classe
                $this->password,
                [
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND =>" SET NAMES utf8"//espaço depois de set pra nao dar pau
                ]
            );

            return $conn;

        } catch(PDOException $e){
            echo "Erro: ". $e->getMessage();
        }
    }

    public function insert($data): void{
        $conn = $this->conn()
        $sql = "INSERT INTO categoria (nome) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$data['nome']]);
    }

    public function all(){
        $conn = $this->conn()
        $sql = "SELECT * FROM categoria";
        $st = $conn->prepare($sql);
        $st->execute();
        return $st->fetchAll(PDO::FETCH_CLASS);
    }
}