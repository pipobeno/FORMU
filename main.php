<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <form action="" method="POST">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom"><br>
            <label for="nom">Nom</label>
            <input type="text" id="nom"><br>
            <label for="email">Adresse e-mail</label>
            <input type="email" id="email"><br>
            <label for="password">Mot de passe</label>
            <input type="text" id="password">
            <button type="submit" >Envoyer</button>
        </form>
    </main>
    <footer></footer>
</body>
</html>


<?php
if (isset($_POST['prenom'])) {
    echo (htmlspecialchars($_POST['prenom']));
}

if (isset($_POST['nom'])) {
    echo (htmlspecialchars($_POST['nom']));
}

if (isset($_POST['email'])) {
    echo (htmlspecialchars($_POST['email']));
}

if (isset($_POST['password'])) {
    echo (htmlspecialchars($_POST['password']));
}
?>
