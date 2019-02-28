@extends('basetemp')

@section('body')

<?php

$id = $_GET['id'];
$product = DB::select("SELECT * FROM produit WHERE prod_id = $id");
$currproduct = $product[0];

?>

<div class="containerA">
    <div class="preview">
        <img src="../storage/img/produits/<?=$currproduct->prod_img?>">
        <img src="../storage/img/produits/<?=$currproduct->prod_img?>">
        <img src="../storage/img/produits/<?=$currproduct->prod_img?>">
    </div>
    <div class="grosse-preview"><img src="../storage/img/produits/<?=$currproduct->prod_img?>">
    </div>
    <div class="descriptif">
        <h2><?=$currproduct->prod_marque . " - " . $currproduct->prod_nom?></h2>
        <p><?=$currproduct->prod_desc?></p>
    </div>
    <div class="optionsitem">
        <div class="option1">
            <h2>Prix : <?=$currproduct->prod_prix?> €</h2>
            <p class="p1">Monture et verres inclus</p>
        </div>
        <div class="option2">
            <a href="panier?id=<?=$currproduct->prod_id?>" class=" p2">Ajouter au panier
                <img src="https://www.materialui.co/materialIcons/action/shopping_cart_white_192x192.png">
            </a>
        </div>
    </div>
</div>
@endsection