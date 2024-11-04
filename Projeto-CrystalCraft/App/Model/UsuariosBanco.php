<?php

class UsuariosBanco
{
    private $pdo;
    
    public function __construct()
    {
        require __DIR__ . "/../Data/conectarbanco.php";
        $this->pdo = $pdo; 
        
    }

     public function cadastrarUsuario($idUsuario,$nomeUsuario, $senha,$emailUsuario, $cpfUsuario, $dataNascimentoUsuario, $permissaoEspecial){
      $sql = "INSERT INTO usuarios(idusuario, nomeusuario,senha, emailusuario, cpfusuario, datanascimentousuario, permissaoespecial) values (:i,:n,:s,:e,:c,:d,:p)";

      $originalDate = $dataNascimentoUsuario;
      $dataNascimentoUsuario = date("Y-m-d", strtotime($originalDate));
      
      $comando = $this->pdo->prepare($sql);
      $comando->bindValue("i",$idUsuario);
      $comando->bindValue("n",$nomeUsuario);
      $comando->bindValue("s",$senha);
      $comando->bindValue("e",$emailUsuario);
      $comando->bindValue("c",$cpfUsuario);
      $comando->bindValue("d",$dataNascimentoUsuario);
      $comando->bindValue("p",$permissaoEspecial,PDO::PARAM_BOOL );


     return $comando->execute();
      }
      public function cadastrarFuncionario($idFuncionario,$nomeFuncionario, $cpfFuncionario, $dataNascimentoFuncionario, $funcaoFuncionario){
        $sql = "INSERT INTO funcionarios(idfuncionario, nomefuncionario, cpffuncionario, datanascimentofuncionario, funcaofuncionario) values (:i,:n,:c,:d,:f)";
  
        $originalDate = $dataNascimentoFuncionario;
        $dataNascimentoFuncionario = date("Y-m-d", strtotime($originalDate));
        
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$idFuncionario);
        $comando->bindValue("n",$nomeFuncionario);
        $comando->bindValue("c",$cpfFuncionario);
        $comando->bindValue("d",$dataNascimentoFuncionario);
        $comando->bindValue("f",$funcaoFuncionario );
  
  
       return $comando->execute();
        }
    public function verificarSeExiste($idUsuario,$emailUsuario, $senha)
    {
        $sql = "SELECT * FROM usuarios WHERE IDUSUARIO= :i and EMAILUSUARIO=:e and SENHA = :s ";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $idUsuario);
        $comando->bindValue("e", $emailUsuario);
        $comando->bindValue("s", $senha);
       
        $comando->execute();

        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }

    public function verificarSeAdmin($idUsuario)
    {
        $sql = "SELECT * FROM usuarios WHERE idusuario= :i";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $idUsuario);
        $comando->execute();
        
        $resultado =  $comando->fetch(PDO::FETCH_ASSOC);

        $usuario = $this->hidratarSomenteUm($resultado);

        if($usuario-> getPermissaoEspecial()==true){
            return true;
        }
        return false;
    }

    public function hidratar($array)
    {
        $todos = [];

        foreach ($array as $valor) {
            $usuario = new Usuarios();
            $usuario->setIdUsuario($valor['IDUSUARIO']);
            $usuario->setNomeUsuario($valor['NOMEUSUARIO']);
            $usuario->setSenha($valor['SENHA']);
            $usuario->setEmailUsuario($valor['EMAILUSUARIO']);
            $usuario->setCpfUsuario($valor['CPFUSUARIO']);
            $usuario->setDataNascimentoUsuario($valor['DATANASCIMENTOUSUARIO']);
            $usuario->setPermissaoEspecial($valor['PERMISSAOESPECIAL']);

            $todos[] = $usuario;
        }
        return $todos;
    }

    public function hidratarSomenteUm($array)
    {

        $usuario = new Usuarios();
        $usuario->setIdUsuario($array['IDUSUARIO']);
        $usuario->setNomeUsuario($array['NOMEUSUARIO']);
        $usuario->setSenha($array['SENHA']);
        $usuario->setEmailUsuario($array['EMAILUSUARIO']);
        $usuario->setCpfUsuario($array['CPFUSUARIO']);
        $usuario->setDataNascimentoUsuario($array['DATANASCIMENTOUSUARIO']);
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





