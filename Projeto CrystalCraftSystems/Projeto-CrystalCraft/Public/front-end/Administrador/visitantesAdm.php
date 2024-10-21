<?php require __DIR__ . "/cabecalhoAdm.php"; ?>

<style>
    h1 {
        font-family: 'Candara';
    }
</style>

<div class="box">
<h1 class="title has-text-centered"><strong>Cadastrar visitantes<strong></h1>
    <form action="visitantesAdm.php" method="post">
    <div class="field">

    <label class="label">ID do visitante</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o ID" name="idVisitante">
    </div>
</div>

<div class="field">
    <label class="label">Nome</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o nome do visitante" name="nomeVisitante">
    </div>
</div>

<div class="field">
    <label class="label">Descrição</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite a descrição do visitante" name="descriçãoVisitante">
    </div>
</div>

<div class="field">
    <label class="label">Nome da pessoa visitada</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o nome do morador visitado" name="moradorVisitante">
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