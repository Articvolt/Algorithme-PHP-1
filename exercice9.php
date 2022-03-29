<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<h2>Résultat</h2>

<?php
$age = 40;
$sexe = "M";

if($sexe == "F"){ // ("==" correspond à égal)
    if($age>35){
        $resultat ="La personne est non imposable";
    } elseif ($age<18){
        $resultat = "La personne est non imposable";
    } else {
        $resultat = "La personne est imposable";
    }
} elseif($sexe=="M"){
    if($age>20){
        $resultat ="La personne est imposable";
    } else {
        $resultat ="La personne est non imposable";
    }
}

echo "Age : ". $age."<br>";
echo "Sexe : ". $sexe."<br>";
echo $resultat. "<br><br>";

/*
Système de boucle dans une boucle.
On commence par trier en fonction du sexe, puis de l'âge
*/

// Nouvelle version

echo "VERSION 2 <br><br>";

if (( $sexe == "M" && $age >= 20) || ($sexe = "F" && $age >= 18 && $age <= 35 )) {
    echo "La personne est imposable";
} else {
    echo "La personne est non imposable";
}

/*
"&&" correspond à "et"
"||" correspond à "ou"
