<?php
require __DIR__ . "/../../../App/Model/UsuariosBanco.php";
require __DIR__ . "/../../../App/Controller/ValidarUsuario.php";
require __DIR__ . "/../header.php";



if (isset($_GET['acao'])) {

    if ($_GET['acao'] == "login") {
        $resultado = (new ValidarUsuario)->retornar();
       
       if (!empty($resultado)){
        require __DIR__."/inicio.php";
       };
       
    }
}