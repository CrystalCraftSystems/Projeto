<?php
require __DIR__."/../../App/Model/UsuariosBanco.php";

class CadastrarUsuario{
    public function retornar(){
      $usuario = (new UsuariosBanco())->cadastrarUsuario($_POST['idUsuario'],$_POST['nomeUsuario'],$_POST['senha'], $_POST['emailUsuario'], $_POST['cpfUsuario'], $_POST['dataNascimentoUsuario'],$_POST['permissao']);
      if($usuario){
        return "Usuario cadastrado!";
      };
      return "Usuario não cadastrado!";
    }
}