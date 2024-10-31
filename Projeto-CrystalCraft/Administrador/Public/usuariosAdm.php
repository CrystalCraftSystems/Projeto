<?php require __DIR__ . "/cabecalhoAdm.php"; ?>

<style>
    h1 {
        font-family: 'Candara';
    }
</style>

<div class="box">

    <h1 class="title has-text-centered"><strong>Cadastrar usuário<strong></h1>
    <form action="./index.php?acao=cadastrar" method="POST" >
    <div class="field">
            <label class="label">ID do Usuário</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite o ID do usuário" name="idUsuario">
            </div>
        </div>
        <div class="field">
            <label class="label">Nome</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite o nome do usuário" name="nomeUsuario">
            </div>
        </div>
        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite o email do usuário" name="emailUsuario">
            </div>
        </div>
        <div class="field">
            <label class="label">Senha</label>
            <div class="control">
                <input class="input" type="password" placeholder="Digite a senha do usuário" name="senha">
            </div>
        </div>

        <div class="field">
            <label class="label">CPF</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite o CPF do usuário" name="cpfUsuario">
            </div>
        </div>
        <div class="field">
            <label class="label">Data de Nascimento do Usuário</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite a data de nascimento " name="dataNascimentoUsuario">
            </div>
        </div>

        <div class="field">
            <label class="label">Possui permissão especial?</label>
            
                <div class="control is-flex is-justify-content-space-around">
                   
                <label class="radio">
                        <input type="radio" name="permissao" />
                        Sim
                    </label>
                    <label class="radio">
                        <input type="radio" name="permissao" />
                        Não
                    </label>
                </div>
                
            </div>
            <br>
       

        <div class="field">
            <div class="control">
                <input type="submit" class="button is-black is-fullwidth" value="Confirmar">
            </div>
        </div>
    </form>
</div>

<?php require __DIR__."/../../footer.php"; ?>