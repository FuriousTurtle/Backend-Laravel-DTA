@extends('basetemp')

@section('body')

@guest
<p>Vous devez être connecté pour pouvoir voir votre panier !</p>
@endguest

@auth

<h1>Votre panier</h1>
<?php
if (!$product) {
    echo '<p style="text-align:center;font-size:30px;" >Votre panier est vide !</p>';
} else {
    $totalprix = 0;
    foreach ($product as $produit) {
        $prodentry = DB::select("SELECT * FROM produit WHERE " . $produit->item_id . " = prod_id");
        foreach ($prodentry as $prod) {
            $totalprix += $prod->prod_prix;
            echo "<div class=\"shoppingline\">
        <div class=\"lineitem\"> <img style=\"width:110px;height:70px;\" src=\"../storage/img/produits/" . $prod->prod_img . "\"></div>
        <p style=\"display:none;\">" . $prod->prod_id . "</p>
        <p class=\"lineitem\"> " . $prod->prod_marque . " - " . $prod->prod_nom . "</p>
        <p class=\"lineitem\"> " . $prod->prod_prix . " € TTC</p>
        <div class=\"lineitem\" style=\"position:relative\" ><a style=\"text-decoration:none;position:absolute;right:40px;\" href=\"itemdel?id=" . $prod->prod_id . "\"> X </a></div>
        </div>";
        }
    }
    echo "<p style='text-align:center;font-weight:bold;font-size:20px;'>Prix total TTC : " . $totalprix . " €</p>";
}
?>

@endauth

@endsection