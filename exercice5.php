<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>Résultat</h2>

<?php

echo "Montant en francs : ". $franc = mt_rand(0,1000) / 100 .".";   //génère une valeur aléatoire entre 0 et 1000 avec 2 décimales
$euro = $franc / 6.55957;
echo $franc ." francs = ". round($euro, 2) ." euros.";
