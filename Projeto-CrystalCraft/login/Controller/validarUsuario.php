<?php

class validarUsuario
{
    public function retornar()
    {
        if ($_POST['idUsuario'] == "") {
            $mensagem = '
        <div class="notification is-danger">
            <button class="delete"></button>
                ID do usuário está vazio
        </div>';
            die($mensagem);
        }

        if ($_POST['emailUsuario'] == "") {
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


        $usuarioExiste = (new UsuariosBanco())->verificarSeExiste($_POST['idUsuario'], $_POST['emailUsuario'], $_POST['senha']);

        if (empty($usuarioExiste)) {
            die("Este usuário não existe!");
        }

        $mensagem = '
    <div class="notification is-success">
        <button class="delete"></button>
            Usuário logado
    </div>';
        echo $mensagem;


        $user = (new UsuariosBanco())->verificarSeAdmin($_POST['idUsuario']);
        if ($user) {
           require __DIR__."/../../Administrador/Public/usuariosAdm.php";
        } else {
            require __DIR__."/../../UsuarioComum/Public/inicio.php";
        }

    }
}