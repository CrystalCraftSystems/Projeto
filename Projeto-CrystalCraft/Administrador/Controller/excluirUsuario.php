<?php

class ExcluirUsuario{
    public function retornar(){
    $usuarios = (new UsuariosBanco())->excluirUsuario($_GET['idUsuario']);                   
   $mensagem = '
    <div class="notification is-danger">
        <button class="delete"></button>
            ID do usuário está vazio
    </div>';
    }
}