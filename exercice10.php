<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.
</p>

<h2>Résultat</h2>

<?php

$paye = 123;
$verse = 200;
$a_rendre = abs( $verse - $paye );
echo "Montant a payer : ". $paye ."<br>";
echo "Montant versé : ". $verse ."<br>";
echo " Reste à payer : ". $a_rendre ."<br>";
echo "***************************************************<br>";

$billet10 = intdiv( $a_rendre, 10);     // "intdiv ( *, * )" est la division d"un nombre entier -> 48 /10 -> retient 4
$a_rendre = $a_rendre - $billet10 * 10;
$billet5 = intdiv($a_rendre, 5);
$a_rendre = $a_rendre - $billet5 * 5;
$piece2 = intdiv($a_rendre, 2 );
$a_rendre = $a_rendre - $piece2 * 2;
$piece1 = intdiv ( $a_rendre, 1 );
$a_rendre = $a_rendre - $piece2 * 1;

echo $billet10 ." billets de 10 euros - ". $billet5 ." billets de 5 euros - ". $piece2 ." pièce de 2 euros - ". $piece1 ." pièce de 1 euros<br>";