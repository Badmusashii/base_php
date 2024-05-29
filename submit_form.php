<?php
//Variables de connexion à la base de données
$host = 'localhost';
$port = 5438;
$dbname = 'databasephp';
$user = 'root';
$password = 'postgres';

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = htmlspecialchars(strip_tags(trim($_POST['name']))); // Sécurisation des données
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);

    if ($email === false) {
        echo "Adresse email invalide.";
    } else {
        // Préparation de la requête d'insertion
        $stmt = $pdo->prepare("INSERT INTO utilisateurs (name, email) VALUES (?, ?)");
        $stmt->execute([$name, $email]);

        echo "Merci, " . $name . ". Nous avons bien reçu vos informations.";
        // Redirection ou autre logique peut être ajoutée ici
        header("Refresh: 2; url=index.php");
    }
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
