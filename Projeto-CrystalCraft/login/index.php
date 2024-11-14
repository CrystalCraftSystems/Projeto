<?php
require __DIR__ . "/../header.php";

require __DIR__ . "/../App/Model/residencias.php";
require __DIR__ . "/../App/Model/Funcionarios.php";
require __DIR__ . "/../App/Model/Residencias.php";
require __DIR__ . "/../App/Model/Moradores.php";
require __DIR__ . "/../App/Model/Horarios.php";
require __DIR__ . "/../App/Model/Visitantes.php";

require __DIR__."/../App/Model/residenciasBanco.php";
require __DIR__."/../App/Model/FuncionariosBanco.php";
require __DIR__."/../App/Model/ResidenciasBanco.php";
require __DIR__."/../App/Model/MoradoresBanco.php";
require __DIR__."/../App/Model/HorariosBanco.php";
require __DIR__."/../App/Model/VisitantesBanco.php";

require __DIR__ . "/../Administrador/Controller/cadastrarresidencia.php";
require __DIR__ . "/../Administrador/Controller/cadastrarFuncionario.php";
require __DIR__ . "/../Administrador/Controller/cadastrarResidencia.php";
require __DIR__ . "/../Administrador/Controller/cadastrarMorador.php";
require __DIR__ . "/../Administrador/Controller/cadastrarHorario.php";
require __DIR__ . "/../Administrador/Controller/cadastrarVisitante.php";

require __DIR__ . "/../Administrador/Controller/excluirresidencia.php";
require __DIR__ . "/../Administrador/Controller/exibirresidencia.php";
require __DIR__ . "/../Administrador/Controller/editarresidencia.php";
require __DIR__ . "/../Administrador/Controller/atualizarresidencia.php";

require __DIR__ . "/Controller/validarresidencia.php";
session_start();

if (isset($_GET['acao'])) {

    if ($_GET['acao'] == "login") {
        
       echo (new validarUsuario)->retornar();
   
    }


    if ($_GET['acao'] == "cad-usuario") {
      (new cadastrarUsuario)->retornar();
   
   }
   if ($_GET['acao'] == "editar-usuario") {
      (new EditarUsuario)->retornar();
  }
    
  if ($_GET['acao'] == "consultar-usuario") {
   echo (new ExibirUsuario)->retornar();
}

if ($_GET['acao'] == "atualizar-usuario") {
   echo (new AtualizarUsuario)->retornar();
}
if ($_GET['acao'] == "excluir-usuario") {
   echo (new ExcluirUsuario)->retornar();
}




 if ($_GET['acao'] == "cad-funcionario") {
     echo (new cadastrarFuncionario)->retornar();
     require __DIR__."/funcionariosAdm.php";
  }/*
if ($_GET['acao'] == "editar-funcionario") {
      (new EditarFuncionario)->retornar();
  }*/
    
  if ($_GET['acao'] == "consultar-funcionario") {
   echo (new ExibirFuncionario)->retornar();
}
/*
if ($_GET['acao'] == "atualizar-funcionario") {
   echo (new AtualizarFuncionario)->retornar();
}
if ($_GET['acao'] == "excluir-funcionario") {
   echo (new ExcluirFuncionario)->retornar();
}
*/

  if ($_GET['acao'] == "cad-residencia") {
   echo (new cadastrarResidencia)->retornar();
   require __DIR__."/residenciasAdm.php";
}/*
if ($_GET['acao'] == "editar-residencia") {
   (new EditarResidencia)->retornar();
}*/

if ($_GET['acao'] == "consultar-residencia") {
echo (new ExibirResidencia)->retornar();
}
/*
if ($_GET['acao'] == "atualizar-residencia") {
echo (new AtualizarResidencia)->retornar();
}
if ($_GET['acao'] == "excluir-residencia") {
echo (new ExcluirResidencia)->retornar();
}
*/

if ($_GET['acao'] == "cad-morador") {
   echo (new cadastrarMorador)->retornar();
   require __DIR__."/moradoresAdm.php";
}/*
if ($_GET['acao'] == "editar-morador") {
   (new EditarMorador)->retornar();
}*/
 
if ($_GET['acao'] == "consultar-morador") {
echo (new ExibirMorador)->retornar();
}
/*
if ($_GET['acao'] == "atualizar-morador") {
echo (new AtualizarMorador)->retornar();
}
if ($_GET['acao'] == "excluir-morador") {
echo (new ExcluirMorador)->retornar();
}
*/

if ($_GET['acao'] == "cad-horario") {
   echo (new cadastrarHorario)->retornar();
   require __DIR__."/horariosAdm.php";
}/*
if ($_GET['acao'] == "editar-horario") {
   (new EditarHorario)->retornar();
}*/
 
if ($_GET['acao'] == "consultar-horario") {
echo (new ExibirHorario)->retornar();
}
/*
if ($_GET['acao'] == "atualizar-horario") {
echo (new AtualizarHorario)->retornar();
}
if ($_GET['acao'] == "excluir-horario") {
echo (new ExcluirHorario)->retornar();
}
*/

if ($_GET['acao'] == "cad-visitante") {
   echo (new cadastrarVisitante)->retornar();
   require __DIR__."/visitantesAdm.php";
}/*
if ($_GET['acao'] == "editar-visitante") {
   (new EditarVisitante)->retornar();
}*/
 
if ($_GET['acao'] == "consultar-visitante") {
echo (new ExibirVisitante)->retornar();
}
/*
if ($_GET['acao'] == "atualizar-visitante") {
echo (new AtualizarVisitante)->retornar();
}
if ($_GET['acao'] == "excluir-visitante") {
echo (new ExcluirVisitante)->retornar();
}
*/


}
if(isset($_SESSION['login'])){
if($_SESSION['login']==true && $_SESSION['adm']==true){

  

}

if($_SESSION['login']==true && $_SESSION['adm']==false){
}
}else{
   echo "Não fez login! ";
}  


