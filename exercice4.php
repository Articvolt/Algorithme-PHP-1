<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";
$phraseb = mb_strtolower(str_replace(" ", "", $phrase));
if ($phraseb === strrev($phraseb)) {      // (===) compare les deux entitées
    echo $phrase. " est un palindrome";
} else {
    echo $phrase. " n'est pas un palindrome";
}
