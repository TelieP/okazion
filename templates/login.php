<?php
require_once '../header.php';
?>

<div class="form-signin w-100 m-auto">
    <form method="post" action="login.php">
        <h1 class="h3 mb-3 fw-normal">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Se connecter</font>
            </font>
        </h1>

        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="nom@exemple.com">
            <label for="floatingInput">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Adresse email</font>
                </font>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Mot de passe">
            <label for="floatingPassword">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Mot de passe</font>
                </font>
            </label>
        </div>


        <button class="btn btn-primary w-100 py-2" type="submit">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Se connecter</font>
            </font>
        </button>
        <p class="mt-5 mb-3 text-body-secondary">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">© 2025</font>
            </font>
        </p>
    </form>



</div>






<?php
require_once '../footer.php';
?>