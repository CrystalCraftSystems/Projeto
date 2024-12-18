<?php

require __DIR__ . "/../../App/Model/Usuarios.php";
require __DIR__ . "/../../App/Model/Funcionarios.php";
require __DIR__ . "/../../App/Model/Residencias.php";
require __DIR__ . "/../../App/Model/Moradores.php";
require __DIR__ . "/../../App/Model/Horarios.php";
require __DIR__ . "/../../App/Model/Visitantes.php";

require __DIR__."/../../App/Model/UsuariosBanco.php";
require __DIR__."/../../App/Model/FuncionariosBanco.php";
require __DIR__."/../../App/Model/ResidenciasBanco.php";
require __DIR__."/../../App/Model/MoradoresBanco.php";
require __DIR__."/../../App/Model/HorariosBanco.php";
require __DIR__."/../../App/Model/VisitantesBanco.php";

require __DIR__ . "/../Controller/cadastrarUsuario.php";
require __DIR__ . "/../Controller/cadastrarFuncionario.php";
require __DIR__ . "/../Controller/cadastrarResidencia.php";
require __DIR__ . "/../Controller/cadastrarMorador.php";
require __DIR__ . "/../Controller/cadastrarHorario.php";
require __DIR__ . "/../Controller/cadastrarVisitante.php";

require __DIR__ . "/../Controller/excluirUsuario.php";
require __DIR__ . "/../Controller/exibirUsuario.php";
require __DIR__ . "/../Controller/editarUsuario.php";
require __DIR__ . "/../../Login/Controller/validarUsuario.php";

if (isset($_GET['acao'])) {

    if ($_GET['acao'] == "cad-usuario") {
       echo (new CadastrarUsuario)->retornar();
       require __DIR__."/usuariosAdm.php";
    }
    if ($_GET['acao'] == "consultar") {
      echo (new ExibirUsuario)->retornar();
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
