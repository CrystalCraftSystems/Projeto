<?php
require __DIR__ . "/Controller/validarUsuario.php";
require __DIR__ . "/../App/Model/UsuariosBanco.php";
require __DIR__ . "/../header.php";


if (isset($_GET['acao'])) {

    if ($_GET['acao'] == "login") {
        (new validarUsuario)->retornar();
    }
}