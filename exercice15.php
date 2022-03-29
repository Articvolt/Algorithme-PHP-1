<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
</p>

<p>$p1 = new Personne("DUPONT", "Michel", "1980-02-19")</p>

<p>$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") </p>

<h2>Résultat</h2>

<?php



class Personne {        // determine la classe nommée "personne" et les propriétés de l'objet qui la compose
    private string $nom;
    private string $prenom;
    private DateTime $naissance;
    

    public function __construct($nom, $prenom, $naissance)  //ordre du construct
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = new DateTime ($naissance);
    }


    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getAge(){
        return $this->getNaissance()-> diff( new DateTime())->format("%Y");     // permet de modifier la fonction naissance par la date actuelle (toujours la date la plus récente en premier)
    }

    public function getNaissance(){
        return $this->naissance;
    }

    public function setNom($new_name){  // modifier la valeur d'une propriété
        $this->nom = $new_name;
    }
    

    public function __toString()    // changement d'affichage des instances
    {
        return $this->prenom ." ". $this->nom." a ". $this-> getAge()." ans.<br>";
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");   // instance avec leurs propriétés
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1, $p2;


/* 
new -> fait une nouvelle instance employé
*/