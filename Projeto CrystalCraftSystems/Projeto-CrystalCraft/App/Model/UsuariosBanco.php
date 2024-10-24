<?php
require __DIR__."/Usuarios.php";

class UsuariosBanco{
    private $pdo;

    public function __construct()
    {
        require __DIR__."/../Data/conectarbanco.php";
        $this->pdo = $pdo;
    }

    public function cadastrarUsuario($emailUsuario,$senhaUsuario){
        $sql = "INSERT INTO usuario(email,senha) values (:e,:s)";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("e",$emailUsuario);
        $comando->bindValue("s",$senhaUsuario);
        

        return $comando->execute();
    }

    public function verificarSeExiste($emailUsuario,$senhaUsuario){
        $sql = "SELECT * FROM usuario WHERE email=:e and senha = :s ";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("e",$emailUsuario);
        $comando->bindValue("s",$senhaUsuario);
        $comando->execute();

        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarUsuario(){
        $sql = "SELECT * FROM usuario";
        $comando = $this->pdo->prepare($sql);
        
        $comando->execute();
        $todosUsuarios = $comando->fetchAll(PDO::FETCH_ASSOC);
        
      //  return $this->hidratar($todosUsuarios) ;
    }



}