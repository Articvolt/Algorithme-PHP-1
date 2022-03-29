<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
</p>

<h2>Résultat</h2>

<?php

// DATE DU JOUR

/*
$date = date("d-m-Y");  //( date du jour en format d(ay) m(onth) Y(ear))
echo $date. "<br>";
*/

//DATE DE NAISSANCE
$date_exercice = new DateTime("21-05-2018");
$date_naissance = new DateTime("17-01-1985");
$age = date_diff($date_naissance,$date_exercice);
echo "Age de la personne : ".$age -> format('%y ans %m mois %d jours');


/*
date_diff : fonction permettant de comparer deux variables date entre elles | date_diff( $date1 , $date2 )
date_create : créer un nouvel aubjet en DateTime
format : formate l'intervalle par les valeurs décrites dans les parenthèses
% : valeur littérale
new Datetime : création d'un objet (POO)
*/