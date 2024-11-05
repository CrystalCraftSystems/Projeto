<?php

class FuncionariosBanco
{
    private $pdo;
    
    public function __construct()
    {
        require __DIR__ . "/../Data/conectarbanco.php";
        $this->pdo = $pdo; 
        
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
    }