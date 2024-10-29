<?php
require __DIR__ . "/Usuarios.php";

class UsuariosBanco
{
    private $pdo;

    public function __construct()
    {
        require __DIR__ . "/../Data/conectarbanco.php";
        $this->pdo = $pdo;
    }

    // public function cadastrarUsuario($emailUsuario,$senhaUsuario){
    //  $sql = "INSERT INTO usuario(email,senha) values (:e,:s)";

    //  $comando = $this->pdo->prepare($sql);
    //  $comando->bindValue("e",$emailUsuario);
    //  $comando->bindValue("s",$senhaUsuario);


    // return $comando->execute();
    //  }

    public function verificarSeExiste($idUsuario,$emailUsuario, $senha)
    {
        $sql = "SELECT * FROM usuario WHERE idUsuario= :i and email=:e and senha = :s ";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $idUsuario);
        $comando->bindValue("e", $emailUsuario);
        $comando->bindValue("s", $senha);
       
        $comando->execute();

        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }

    public function verificarSeAdmin($idUsuario): string
    {
        $sql = "SELECT * FROM usuario WHERE IDUSUARIO=:i";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $idUsuario);

        $comando->execute();
        
        $usuario =  $this->hidratarSomenteUm($comando->fetch(PDO::FETCH_ASSOC));

        if ($usuario->getPermissaoEspecial() == true){
            return true;
        }else{
        return false;
        }
    }

    public function hidratar($array)
    {
        $todos = [];

        foreach ($array as $valor) {
            $usuario = new Usuarios();
            $usuario->setIdUsuario($valor['IDUSUARIO']);
            $usuario->setNomeUsuario($valor['NOME']);
            $usuario->setSenha($valor['SENHA']);
            $usuario->setEmailUsuario($valor['EMAIL']);
            $usuario->setCpfUsuario($valor['CPF']);
            $usuario->setDataNascimentoUsuario($valor['DATANASCIMENTO']);
            $usuario->setPermissaoEspecial($valor['PERMISSAOESPECIAL']);

            $todos[] = $usuario;
        }
        return $todos;
    }

    public function hidratarSomenteUm($array)
    {
        $usuario = new Usuarios();
        $usuario->setIdUsuario($array['IDUSUARIO']);
        $usuario->setNomeUsuario($array['NOME']);
        $usuario->setSenha($array['SENHA']);
        $usuario->setEmailUsuario($array['EMAIL']);
        $usuario->setCpfUsuario($array['CPF']);
        $usuario->setDataNascimentoUsuario($array['DATANASCIMENTO']);
        $usuario->setPermissaoEspecial($array['PERMISSAOESPECIAL']);

        return $usuario;
    }
}

// public function listarUsuario(){
// $sql = "SELECT * FROM usuario";
//  $comando = $this->pdo->prepare($sql);

//  $comando->execute();
// $todosUsuarios = $comando->fetchAll(PDO::FETCH_ASSOC);

//  return $this->hidratar($todosUsuarios) ;
// }





