<?php require __DIR__ . "/../header.php"; ?>
<style>
    h1 {
        font-family: 'Candara';
    }
</style>

<img src="logoCrystalCraft.jpeg" width="140px" class="p-5">
<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-half">
                <div class="box">

                    <h1 class="title has-text-centered"><strong>Faça o seu login:</strong></h1>

                    <div class="is-flex is-justify-content-space-evenly">
                        <img src="logoSistemaSFundo.png" width="200px">
                    </div>


                    <form action="index.php?acao=login" method="post">
                        <div class="field">

                            <input class="input" type="text" placeholder="🔑Digite o seu id" name="idUsuario" />

                        </div>
                        <div class="field">

                            <input class="input" type="email" placeholder="✉️ Digite o seu email" name="emailUsuario" />

                        </div>
                        <div class="field">

                            <input class="input" type="password" placeholder="🔒 Digite a sua senha" name="senha" />

                        </div>
                        <div class="field">
                            <div class="control">
                                <input type="submit" class="button is-black is-fullwidth" value="Entrar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require __DIR__."/../../footer.php"; ?>