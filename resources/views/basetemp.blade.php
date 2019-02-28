<?php
use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="../resources/sass/styles.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet" />
    <title>Optic 4000</title>
</head>

<body>
    <div class="grid">
        <div class="logo"></div>
        <div class="opticdiv">
            <a href="{{ URL::route('home')}}" class="optic">Optic 4000</a>
        </div>
        <div class="recherche">
            <input type="text" name="recherche" placeholder="Je recherche une marque.." />
            <img src="../storage/img/search-icon.png" />
        </div>
        <div class="menu1">
            <div>
                <a href="#">
                    <img src="../storage/img/lunette.png"
                        style="height: 25px; width: 25px;display:block;margin: 0 auto;background-color: white;border-radius: 50%;padding: 1px;" />
                    Visagisme</a>
            </div>
            <?php if (Auth::check()) {
    echo "
            <div>
            <a href=\"profil\">
                <img src=\"../storage/img/user.png\"
                    style=\"height: 25px;width: 25px;display: block;margin: 0 auto;background-color: white;border-radius: 50%;padding: 1px;\" />
                Mon compte</a>
            </div>
            <div>
            <a href=\"" . URL::route('panier') . "\">
            <img src=\"../storage/img/shopping.png\"
                style=\"height: 25px;width: 25px;display: block;margin: 0 auto;background-color: white;border-radius: 50%;padding: 1px;\" />
              Panier  </a>
            </div>
            ";
} else {
    echo "
    <div>
    <a href=\"profil\">
        <img src=\"../storage/img/user.png\"
        style=\"height: 25px;width: 25px;display: block;margin: 0 auto;background-color: white;border-radius: 50%;padding: 1px;\" />
        Connexion</a>
    </div>
    ";
}?>
        </div>
    </div>
    <nav class=" menu2 bg-primary">
        <div class="btn-group btn-group-lg " role="group" aria-label="...">
            <a style="height:48px;" href="{{ URL::route('prodvue')}}"><button style="height:48px;" type="button"
                    class="btn btn-primary">
                    Lunettes de vue
                </button></a>
            <a style="height:48px;" href="{{ URL::route('prodsoleil')}}"><button style="height:48px;" type="button"
                    class="btn btn-primary">
                    Lunettes de soleil
                </button></a>
            <a style="height:48px;" href="{{ URL::route('prodlentille')}}"><button style="height:48px;" type="button"
                    class="btn btn-primary">
                    Lentilles de contact
                </button></a>
        </div>

        <a href="{{ URL::route('home')}}"><button type="button" class="bouton btn btn-primary btn-lg">
                Home<img src="../storage/img/home.png"
                    style="height: 22px;width: 25px;padding-left: 2px;padding-bottom: 3px;" /></button></a>
    </nav>

    <body>
        @yield('body')
        <div class="footer">
            <div class="int-footer">
                <div class="icon1 icon-hover">
                    <img src="../storage/img/fb-icon.png" class="fb-icon"
                        style="border-radius: 50%;width: 50px;height: 50px;" />
                    <img src="../storage/img/inst-icon.png" class="inst-icon"
                        style="border-radius: 50%;width: 50px;height: 50px;" />
                </div>
                <div class="recherche2">
                    <input style="height:35px;font-size:13px;" type="text" name="recherche"
                        placeholder="Entrez votre email pour recevoir notre Newsletter" />
                    <p>OK</p>
                </div>
                <div class="icon2 icon-hover">
                    <img src="../storage/img/twit-icon.png" class="twit-icon"
                        style="border-radius: 50%;width: 50px;height: 50px;" />
                    <img src="../storage/img/in-icon.png" class="in-icon"
                        style="border-radius: 50%;width: 50px;height: 50px;" />
                </div>
                <div class="foot-text1 foot-hover">
                    <h3 class="titre1">Lunettes</h3>
                    <p>Lunettes de vue Homme</p>
                    <p>Lunettes de vue Femme</p>
                    <p>Lunettes de vue Enfant</p>
                    <p>Lunette de vue Rayban</p>
                </div>
                <div class="foot-text2 foot-hover">
                    <h3 class="titre2">Solaires</h3>
                    <p>Lunettes de soleil Homme</p>
                    <p>Lunettes de soleil Femme</p>
                    <p>Lunettes de soleil Enfant</p>
                    <p>Lunettes de soleil Ray-Ban</p>
                </div>
                <div class="foot-text3 foot-hover">
                    <h3 class="titre3">Lentilles</h3>
                    <p>Lentilles journalières</p>
                    <p>Lentilles bi-mensuelles</p>
                    <p>Lentilles mensuelles</p>
                    <p>Lentilles de couleurs</p>
                    <p>Produit d'entretien</p>
                </div>
            </div>
        </div>
    </body>

</html>