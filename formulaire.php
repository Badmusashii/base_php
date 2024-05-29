<!-- formulaire.html -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire de Contact</title>
</head>

<body>
    <form action="submit_form.php" method="POST">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>