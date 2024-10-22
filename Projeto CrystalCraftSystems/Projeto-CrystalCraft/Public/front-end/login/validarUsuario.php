<?php

class ValidarUsuario{
    private $pdo;
    public function __construct()
    {
        require __DIR__ . "/../../../Data/conectarbanco.php";
        $this->pdo = $banco;
    }

    public function verificarSeExiste($email,$senha){
        $sql = "SELECT * FROM usuario WHERE email=:e and senha = :s" ;
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("e",$email);
        $comando->bindValue("s",$senha);
        $comando->execute();

        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }
}