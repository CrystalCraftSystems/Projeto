<?php require __DIR__ . "/cabecalhoAdm.php"; ?>

<style>
    h1 {
        font-family: 'Candara';
    }
</style>


<div class="box">
<h1 class="title has-text-centered"><strong>Cadastrar funcionário<strong></h1>
    <form action="funcionariosAdm.php" method="post">
        <div class="field">

        <div class="field">
            <label class="label">ID do funcionário</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite o ID do funcionário" name="idFuncionario">
            </div>
        </div>

            <label class="label">Nome</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite o nome do funcionário" name="nomeFuncionario">
            </div>
        </div>

        <div class="field">
            <label class="label">CPF</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite o CPF do funcionário" name="cpfFuncionario">
            </div>
        </div>

        <div class="field">
            <label class="label">Data de nascimento</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite a data de nascimento YYYY-MM-DD" name="dataNascimentoFuncionario">
            </div>
        </div>

        <div class="field">
            <label class="label">Função</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite a função do funcionário" name="funcaoFuncionario">
            </div>
        </div>



            <br>
       

        <div class="field">
            <div class="control">
                <input type="submit" class="button is-black is-fullwidth" value="Confirmar">
            </div>
        </div>
</div>

    </form>

    <?php require __DIR__."/../../footer.php"; ?>