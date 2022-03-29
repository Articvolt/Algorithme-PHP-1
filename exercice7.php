<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
</p>

<h2>Résultat</h2>

<?php

$age=9;

if(gettype($age) == "double" || gettype($age) == "integer" ) {
    if($age >= 12) {
        $resultat = " dans la catégorie 'Cadet' .";
    } elseif($age >= 10) {
        $resultat = " dans la catégorie 'Pupille' .";
    } elseif($age >=8) {
        $resultat = " dans la catégorie 'Minime' .";
    } elseif($age >= 6) {
        $resultat = " dans la catégorie 'Poussin' .";
    } else {
        $resultat = " dans aucune catégorie .";
    }
    echo "L'enfant qui a $age ans est $resultat<br>";
} else {
    echo " Mettez un âge s'il-vous-plaît .<br>";
}