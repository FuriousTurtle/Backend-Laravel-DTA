@extends('basetemp')
@section('body')
<content>
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="secslide d-block w-100" src="../storage/img/optic2.jpg" alt="Second slide" />
            </div>
            <div class="carousel-item">
                <img class="secslide d-block w-100" src="../storage/img/optic3.jpg" alt="Third slide" />
            </div>
        </div>
    </div>
</content>
<h1>Nos belles lunettes</h1>
<div class="container">
    <?php
foreach ($produits as $produit) {
    echo " <div class=\"card\" style=\"width:300px;\">
            <p class=\"infos\">+ d'infos</p>
            <a href=\"product?id=" . $produit->prod_id . "\"><img class=\"card-img-top\" src=\"../storage/img/produits/" . $produit->prod_img . "\"
                    alt=\"image-card\" /></a>
            <div class=\"card-body\">
                <p class=\"card-text haut\">
                    " . $produit->prod_marque . " - " . $produit->prod_nom . "
                </p>
                <p class=\"card-text\">Monture + verres à partir de</p>
                <p class=\"prix\">" . $produit->prod_prix . ".00 €</p>
                <p style=\"display:none;\">" . $produit->prod_id . "</p>
            </div>
        </div>
        ";}
?>
</div>
@endsection