<?php


// pour lire ou ecrire dans d'autres fichier, on utilise fopen, fwrite et fclose
$file = fopen("test.txt", "w");
fwrite($file, "Bonjour le monde");
fclose($file);

// Essaie de Session
session_start();
$_SESSION["nom"] = "Alice";
echo $_SESSION["nom"] . "<br>"; // Affiche "Alice"
session_destroy();

//possibilite de stocker des donnees dans les cookies
setcookie("nom", "Alice", time() + (86400 * 30), "/"); // 86400 = 1 jour
echo $_COOKIE["nom"]; // Affiche "Alice"
"<br>";

// possibilité de coder et décoder des données en JSON
$array = array("nom" => "Alice", "age" => 25);
$json = json_encode($array);
echo $json; // Affiche '{"nom":"Alice","age":25}'
"<br>";
$array = json_decode($json, true);
echo $array["nom"]; // Affiche "Alice"
"<br>";
