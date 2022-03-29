<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales.
</p>

<h2>Résultat</h2>

<?php

$eleve = [ 10 , 12 , 8 , 19 , 3 , 16 , 11 , 13 , 9 ]  ;

echo "Les notes obtenues par l'élève sont : ". implode(", ",$eleve) ." .<br>";

function calculer_moyenne($eleve) {     // nom de la fonction
    $nb_notes = count($eleve);      // détermination des variables | count compte le nombres de valeurs du tableau
    $somme_notes = array_sum($eleve);   // somme des notes
    $moyenne = round($somme_notes / $nb_notes, 2);  // calcul arrondi à deux décimales de la moyenne
    return $moyenne;    // retourne à la fonction et interrompt aussi son éxecution
}

echo "Sa moyenne générale est donc de : ".calculer_moyenne($eleve).".<br> ";