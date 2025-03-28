<?php
require_once '../header.php';
require_once '../libs/pdo.php';
require_once '../libs/user.php';

// if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {
//     $res = addUser($pdo, $_POST["username"], $_POST["email"], $_POST["password"]);
//     var_dump($res);
// }
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {  //@todo ajouter la verif  sur tous les champs du formulaire 
    $verif = verifyUser($_POST);
    if ($verif === true) {
        $resAdd = addUser($pdo, $_POST["username"], $_POST["email"], $_POST["password"]);
        // @todo rediriger vers la page de connexion
    } else {
        $errors = $verif;
    }

    // var_dump($res);
}



?>
<div class="form-signin w-75 m-auto">
    <h1>Inscription</h1>
    <form method="post" action="">
        <div class="mb-3">
            <label for="username" class="form-label">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="username" name="username">
            <?php if (isset($verif["username"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors["username"] ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email </label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="add_user">S'inscrire</button>
    </form>
</div>
<?php
require_once '../footer.php';
?>