@extends('basetemp')

@section('body')

<?php $checktype = $product[0];
if ($checktype->prod_type == 'vue') {
    echo "<h1>Nos lunettes de vue</h1>";
} else if ($checktype->prod_type == 'soleil') {
    echo "<h1>Nos lunettes de soleil</h1>";
} else if ($checktype->prod_type == 'lentille') {
    echo "<h1>Nos lentilles de contact</h1>";
}
?>
<div class="container">
    <?php
foreach ($product as $produit) {
    echo " <div class=\"card\" style=\"width:300px;\">
            <p class=\"infos\">+ d'infos</p>
            <a href=\"product?id=" . $produit->prod_id . "\"><img class=\"card-img-top\" src=\"../storage/img/produits/" . $produit->prod_img . "\"
                    alt=\"image-card\" /></a>
            <div class=\"card-body\">
                <p class=\"card-text haut\">
                    " . $produit->prod_marque . " - " . $produit->prod_nom . "
                </p>
                <p class=\"card-text\">Prix à partir de</p>
                <p class=\"prix\">" . $produit->prod_prix . ".00 €</p>
                <p style=\"display:none;\">" . $produit->prod_id . "</p>
            </div>
        </div>
        ";}
?>
</div>
@endsection