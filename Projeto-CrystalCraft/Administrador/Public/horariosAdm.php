<?php require __DIR__ . "/cabecalhoAdm.php"; ?>

<style>
    h1 {
        font-family: 'Candara';
    }
</style>

<div class="box">
<h1 class="title has-text-centered"><strong>Registrar horários de entrada e saída<strong></h1>
    <form action="horariosAdm.php" method="post">
       

        <div class="field">
            <label class="label">ID do registro</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite o ID " name="idRegistro">
            </div>
        </div>

        <div class="field">
            <label class="label">ID do visitante</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite o ID do visitante" name="idVisitanteHorario">
            </div>
        </div>

        <div class="field">
            <label class="label">Placa do veículo</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite a placa do veículo" name="placaHorario">
            </div>
        </div>

        <div class="field">
            <label class="label">Data do registro</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite a data do registro" name="dataHorario">
            </div>
        </div>

        <div class="field">
            <label class="label">Horário de entrada</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite o horário da entrada" name="entradaHorario">
            </div>
        </div>

        <div class="field">
            <label class="label">Horário saída</label>
            <div class="control">
                <input class="input" type="text" placeholder="Digite o horário da saída" name="saidaHorario">
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