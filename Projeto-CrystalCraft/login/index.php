<?php
require __DIR__ . "/Controller/validarUsuario.php";
require __DIR__."/../App/Model/UsuariosBanco.php";
require __DIR__ . "/../header.php";


if (isset($_GET['acao'])) {

    if ($_GET['acao'] == "login") {
        $resultado = (new validarUsuario)->retornar();
       
       if (!empty($resultado)){
        require __DIR__."/../UsuarioComum/Public/inicio.php";

       };
       
    }
    if((new UsuariosBanco())->verificarSeAdmin($_POST['idUsuario']== true)){
        require __DIR__."/../Administrador/Public/usuariosAdm.php";
    }require __DIR__."/../UsuarioComum/Public/inicio.php";
}