<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p>

<p>Exemple : tableau ➔ Mickaël -> FRA , Virgile -> ESP , Marie-Claire -> ENG
</p>

<p>Variante : trier d’abord le tableau par ordre alphabétique du prénom</p>

<h2>Résultat</h2>

<?php

$formateurs = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-claire" => "ENG"
];

// var_dump($formateurs);

foreach ($formateurs as $nom => $langue) {      // (tableau as key => valeur)
    if ($langue == "FRA" ) {                    // si la valeur est "FRA" changer en "Salut <key>"
        echo "Salut $nom<br>";
    } elseif ($langue == "ESP" ) {
        echo "Hola $nom<br>";
    } elseif ($langue == "ENG" ) {
        echo "Hello $nom<br>";
    }
}

echo "<br>";
echo "<h3>VARIANTE</h3> <br>"; 

ksort($formateurs);

foreach ($formateurs as $nom => $langue) {      
    if ($langue == "FRA" ) {                    
        echo "Salut $nom<br>";
    } elseif ($langue == "ESP" ) {
        echo "Hola $nom<br>";
    } elseif ($langue == "ENG" ) {
        echo "Hello $nom<br>";
    }
}