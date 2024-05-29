<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <?php
    echo "Bonjour le monde ! <br>";

    // Les declarations de vazrialbles se font avec le signe $
    $nom = "John";
    $age = 5;
    $answer = "";

    //Les conditions sont tres similaires a celles de javascript
    if ($age > 18) {
        $answer = "tu est majeur";
    } else {
        $answer = "tu est mineur";
    }

    // La concaténation se fait avec des points
    echo "Bonjour " . $nom . " tu as " . $age . " ans !" . " Et " . $answer . "<br>";

    // Les boucles sont tres similaires a celles de javascript
    for ($i = 0; $i < 5; $i++) {
        echo $i . " tour de boucle <br>";
    }

    // Les fonctions sont tres similaires a celles de javascript
    function saluer($nom)
    {
        return "Bonjour " . $nom . "<br>";
    }

    echo saluer("John");

    // Les tableaux sont tres similaires a ceux de javascript
    $fruit = array("pomme", "banane", "poire");
    echo $fruit[0] . "<br>";

    // Les tableaux associatifs sont un equivalent d'objet en javascript
    $personne = array("nom" => "Alice", "age" => 25);
    echo $personne["nom"] . "<br>";


    //Quelques methodes de manipulation de chaines de caracteres
    $texte = "Bonjour le monde";
    echo strlen($texte) . "<br>";
    echo str_replace("monde", "univers", $texte);
    str_replace("monde", "univers", $texte) . "<br>" ?>

    <?php
    //Les Objets en PHP
    class Personne
    {
        public $nom;
        public $age;

        function __construct($nom, $age)
        {
            $this->nom = $nom;
            $this->age = $age;
        }

        function saluer()
        {
            return "Bonjour " . $this->nom . "<br>";
        }
    }

    $jim = new Personne("Jim", 25);
    // echo $jim->saluer();
    ?>

    <?php include 'formulaire.php'; ?>

    <p>Essaie pour faire saluer jim => <?php echo $jim->saluer() ?></p>
    <?php include 'footer.php'; ?>
    <?php include 'filereader.php'; ?>
</body>

</html>