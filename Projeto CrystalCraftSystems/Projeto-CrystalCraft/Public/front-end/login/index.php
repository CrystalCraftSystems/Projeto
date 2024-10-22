<?php

require __DIR__ . "/validarUsuario.php";
require __DIR__ . "/../header.php";

if (!isset($_POST['email']) || !isset($_POST['senha'])) {
    header("Location:./login.php");
}


if ($_POST['email'] == "") {
    $mensagem = '
        <div class="notification is-danger">
            <button class="delete"></button>
                Email vazio
        </div>';
    die($mensagem);
}
if ($_POST['senha'] == "") {
    $mensagem = '
        <div class="notification is-danger">
            <button class="delete"></button>
                Senha vazia
        </div>';
    die($mensagem);
}

$usuarioExiste = (new ValidarUsuario())->verificarSeExiste($_POST['email'], $_POST['senha']);

if (empty($usuarioExiste)) {
    die("Este usuário não existe!");
}

$mensagem = '
    <div class="notification is-success">
        <button class="delete"></button>
            Usuário logado
    </div>';
echo $mensagem;