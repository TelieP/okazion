<?php

function addUser(PDO $pdo,  $username, $email,  $password): bool
{
    $query = $pdo->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)");

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query->bindValue(":username", $username, PDO::PARAM_STR);
    $query->bindValue(":email", $email, PDO::PARAM_STR);
    $query->bindValue(":password", $password, PDO::PARAM_STR);

    return $query->execute();
}


function verifyUser($user): array|bool
{
    $errors = [];
    if (isset($user["username"])) {
        if ($user["username"] === "") {
            $errors["username"] = "Le nom d'utilisateur est obligatoire";
        }
    } else {
        $errors["username"] = "Le Champ username n'a pas été envoyé";
    }
    if (count($errors)) { // count permet de compter le nombre d'élémnents d'un tableau
        return $errors; // si le tableau est vide, on retourne $errors
    } else {
        return true; // si le tableau n'est pas vide, on retourne true
    }
}
