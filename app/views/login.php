<?php
require_once BASE_DIR.'/config.php';
echo BASE_DIR;
$titulo = APP_NAME;
$css_pagina = CSS."exemplo.css";
require_once "layouts/header.php";

?>

<div class="form-login-container">

    <section class="form-login">
        <h1>LOGIN</h1>
        <form action="#" method="post">

            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control"">
                </div>

                <div>
                    <label for=" password">Senha</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div>
                <input type="submit" class="btn btn-secondary form-control mt-4 mb-4" value="LOGIN">
            </div>
            <div>
                <a href="#" class="text-light">Ainda não tem conta ?</a>
            </div>
        </form>
    </section>

</div>

<?= include "layouts/footer.php"; ?>