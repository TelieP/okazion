<?php
include_once 'header.php';
?>

<div class="row" align-items-center>
    <div class="col-md-6">
        <h1>Le meilleur endroit pour acheter et vendre</h1>
        <p>Un site de vente en ligne pour les particuliers et les professionnels. Achetez et vendez des articles neufs et d'occasion
            sur Okazion, le site de petites annonces gratuites.</p>


    </div>
</div>
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="images/image04.jpg" alt="image04" width="800" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">le bon coin pour les affaires</font>
                </font>
            </h1>
            <p class="lead">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Un site de vente en ligne pour les particuliers et les professionnels. Achetez et vendez des articles neufs et d'occasion sur Okazion.
                        Ici par de frais cachés, tout est gratuit. Paiement sécurisé.Vous ne servez plus d'un objet, vendez le sur Okazion.Et faites du bien à votre porte monnaie et à la planète.
                    </font>
                </font>
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Primaire</font>
                    </font>
                </button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> Défaut
                        </font>
                    </font>
                </button>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <h2> Les dernieres annonces</h2>
        <?php
        require_once 'listing_part.php';
        ?>

    </div>
</div>
<?php
include_once 'footer.php';
?>