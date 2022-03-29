<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<p>Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p>

<h2>Résultat</h2>

<?php

$marques = ["Peugeot" , "Renault", "BMW" , "Mercedes" ];
$nb_marques = count($marques);

echo "Il y a ".$nb_marques." marques de voitures dans le tableau. <br>";
foreach ($marques as $marque) {
    echo "<li>". $marque. "<br>";
}