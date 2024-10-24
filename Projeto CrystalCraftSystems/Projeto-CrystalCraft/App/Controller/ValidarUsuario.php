<?php

class ValidarUsuario
{
    public function retornar()
    {

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


        $usuarioExiste = (new UsuariosBanco())->verificarSeExiste($_POST['email'], $_POST['senha']);

        if (empty($usuarioExiste)) {
            die("Este usuário não existe!");
        }

        $mensagem = '
    <div class="notification is-success">
        <button class="delete"></button>
            Usuário logado
    </div>';
        echo $mensagem;
        return $usuarioExiste;
    }

   
}