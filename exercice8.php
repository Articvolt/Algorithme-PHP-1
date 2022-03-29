<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
forme :
</p>

<h2>Résultat</h2>

<?php

echo "BOUCLE FOR <br><br> ";   

$nombre = 8;
$multiplication = 1;
for($i = 0 ; $i <= 10 ; $i++){      // boucle commençant de 0 et allant jusqu'à 10
    $multiplication = $nombre*$i;
    echo $nombre . ' fois ' . $i . ' = ' . $multiplication . '<br>';
 
 }

 echo "<br>BOUCLE WHILE <br><br>";

 $j = 0;
 while($j <= 10) {
    $multiplication = $nombre*$j;
    echo $nombre . ' fois ' . $j . ' = ' . $multiplication . '<br>';
    $j++;
 }
 