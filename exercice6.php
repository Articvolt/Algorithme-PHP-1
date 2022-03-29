<h1>Exercice 6</h1>

<p>
Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<h2>Résultat</h2>

<?php

$prix = 9.99;
$taux = 0.2;
$quantity = 5;
$prixTTC = $quantity * $prix * (1 + $taux);
echo "Prix unitaire de l'article : $prix euros<br>";
echo "Quantité : $quantity <br>";
echo "Taux de TVA : $taux <br>";
echo "le montant total de la facture à régler est de : ". $prixTTC." .";

