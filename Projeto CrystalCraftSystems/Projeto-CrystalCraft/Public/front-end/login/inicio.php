<?php require __DIR__ . "/../cabecalho.php"; ?>
<style>
    h1{
        font-size: 27px;
    }
    p{
        font-size: 18px;
        text-align: justify;
    }
   
    
    </style>
    <br>
<h1 class="has-text-centered"><strong> Sistema de gerenciamento do condomínio Sunflower</strong></h1><br>

<p class="p-2">  Seja bem-vindo ao nosso sistema, somos um condomínio que preza pela segurança e bom funcionamento do ambiente. Com isso, caso seja um dos administradores do nosso sistema, digite abaixo o seu código, pois assim, poderá usufruir de todas as funcionalidades que possui. Entretanto, caso não seja um administrador, é só navegar pelas páginas que estão listadas acima. </p>
<br>
<br>
<br>

<div class="box">

    <form action="usuariosAdm.php" method="post">
       
    <div class="is-flex is-justify-content-space-evenly">
        <label class="label"><strong>Código do administrador:</strong></label>
    
        <div class="control">
            <input class="input " type="text"  placeholder="Digite o código" name="codAdm">
        </div>
        <div>
        <input type="submit" class="button is-black " value="Confirmar" >
        </div>
        </div>
    </form>

</div>