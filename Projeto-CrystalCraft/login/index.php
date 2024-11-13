<?php
require __DIR__ . "/../header.php";

require __DIR__ . "/../App/Model/Usuarios.php";
require __DIR__ . "/../App/Model/Funcionarios.php";
require __DIR__ . "/../App/Model/Residencias.php";
require __DIR__ . "/../App/Model/Moradores.php";
require __DIR__ . "/../App/Model/Horarios.php";
require __DIR__ . "/../App/Model/Visitantes.php";

require __DIR__."/../App/Model/UsuariosBanco.php";
require __DIR__."/../App/Model/FuncionariosBanco.php";
require __DIR__."/../App/Model/ResidenciasBanco.php";
require __DIR__."/../App/Model/MoradoresBanco.php";
require __DIR__."/../App/Model/HorariosBanco.php";
require __DIR__."/../App/Model/VisitantesBanco.php";

require __DIR__ . "/../Administrador/Controller/cadastrarUsuario.php";
require __DIR__ . "/../Administrador/Controller/cadastrarFuncionario.php";
require __DIR__ . "/../Administrador/Controller/cadastrarResidencia.php";
require __DIR__ . "/../Administrador/Controller/cadastrarMorador.php";
require __DIR__ . "/../Administrador/Controller/cadastrarHorario.php";
require __DIR__ . "/../Administrador/Controller/cadastrarVisitante.php";

require __DIR__ . "/../Administrador/Controller/excluirUsuario.php";
require __DIR__ . "/../Administrador/Controller/exibirUsuario.php";
require __DIR__ . "/../Administrador/Controller/editarUsuario.php";
require __DIR__ . "/../Administrador/Controller/atualizarUsuario.php";

require __DIR__ . "/Controller/validarUsuario.php";
session_start();

if (isset($_GET['acao'])) {

    if ($_GET['acao'] == "login") {
        
       echo (new validarUsuario)->retornar();
   
    }
    if ($_GET['acao'] == "cad-usuario") {
      (new CadastrarUsuario)->retornar();
   
   }
   if ($_GET['acao'] == "editar") {
      (new EditarUsuario)->retornar();
  }
    
  if ($_GET['acao'] == "consultar") {
   echo (new ExibirUsuario)->retornar();
}

if ($_GET['acao'] == "atualizar") {
   echo (new AtualizarUsuario)->retornar();
}
if ($_GET['acao'] == "excluir") {
   echo (new ExcluirUsuario)->retornar();
}


 if ($_GET['acao'] == "cad-funcionario") {
     echo (new cadastrarFuncionario)->retornar();
     require __DIR__."/funcionariosAdm.php";
  }
  if ($_GET['acao'] == "cad-residencia") {
   echo (new cadastrarResidencia)->retornar();
   require __DIR__."/residenciasAdm.php";
}
if ($_GET['acao'] == "cad-morador") {
   echo (new cadastrarMorador)->retornar();
   require __DIR__."/moradoresAdm.php";
}
if ($_GET['acao'] == "cad-horario") {
   echo (new cadastrarHorario)->retornar();
   require __DIR__."/horariosAdm.php";
}
if ($_GET['acao'] == "cad-visitante") {
   echo (new cadastrarVisitante)->retornar();
   require __DIR__."/visitantesAdm.php";
}



}
if(isset($_SESSION['login'])){
if($_SESSION['login']==true && $_SESSION['adm']==true){

  

}

if($_SESSION['login']==true && $_SESSION['adm']==false){
}
}else{
   echo "Não fez login! ";
}  


