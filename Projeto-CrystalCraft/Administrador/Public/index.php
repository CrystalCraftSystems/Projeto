<?php
require __DIR__ . "/../../App/Model/Usuarios.php";
require __DIR__ . "/../../App/Model/Funcionarios.php";
require __DIR__."/../../App/Model/UsuariosBanco.php";
require __DIR__ . "/../Controller/cadastrarUsuario.php";
require __DIR__ . "/../Controller/cadastrarFuncionario.php";

if (isset($_GET['acao'])) {

    if ($_GET['acao'] == "cadastrar") {
       echo (new cadastrarUsuario)->retornar();
       require __DIR__."/usuariosAdm.php";
    }
    if ($_GET['acao'] == "cad-fun") {
        echo (new cadastrarFuncionario)->retornar();
        require __DIR__."/funcionariosAdm.php";
     }
}
