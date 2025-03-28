<div class="col-md-4 my-2 d-flex">
    <div class="card w-100">
        <img src=" ../upload/listing/ <?= $listing["image"] ?>" class="card-img-top" alt="<?= $listing["title"] ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $listing["title"] ?></h5>
            <p class="card-text"><?= $listing["price"] ?> $</p>
            <a href="annonce.php?id=<?= $key ?> " class="btn btn-primary stretched-link w-100 ">En savoir plus </a>
        </div>
    </div>
</div>
<?php
// ?id=<?= $key  ca permet de passer l'id de l'annonce dans l'url et de pouvoir naviguer entre les pages d'annonces
?>