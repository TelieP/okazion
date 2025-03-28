<?php
require_once '../header.php';
require_once '../libs/listing.php';

if (isset($_GET["id"])) {  // le isset permer de verifier si la variable existe  dans l'url c'est a dire dans le tableau $_GET
    $id = (int)$_GET["id"]; // le (int) permet de convertir la variable en entier et de le stocker dans la variable $id
    $listing = getListingById($id);
}

?>

<div class="container col-xxl-12 px-1 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="../assets/images/<?= $listing["image"] ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $listing["title"] ?></h1>
            <h2><?= $listing["price"] ?> $ </h2>
            <p class="lead"><?= $listing["description"] ?></p>
        </div>
    </div>
</div>



<?php
require_once '../footer.php';
?>