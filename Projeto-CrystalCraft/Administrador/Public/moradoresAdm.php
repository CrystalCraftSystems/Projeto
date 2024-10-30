<?php require __DIR__ . "/cabecalhoAdm.php"; ?>

<style>
    h1 {
        font-family: 'Candara';
    }
</style>

<div class="box">
<h1 class="title has-text-centered"><strong>Cadastrar morador<strong></h1>
    <form action="moradoresAdm.php" method="post">

    <div class="field">
    <label class="label">ID do morador</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o ID do morador" name="idMorador">
    </div>
</div>

    <div class="field">

    <label class="label">Nome</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o nome do morador" name="nomeMorador">
    </div>
</div>

<div class="field">
    <label class="label">CPF</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o CPF do morador" name="cpfMorador">
    </div>
</div>

<div class="field">
    <label class="label">ID da residência</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o ID da residência do morador" name="IDResidenciaMorador">
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