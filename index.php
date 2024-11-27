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
        <form action="" method="POST" >
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom"><br>
            <label for="nom">Nom</label>
            <input type="text" name="nom"><br>
            <label for="email">Adresse e-mail</label>
            <input type="email" name="email"><br>
            <label for="password">Mot de passe</label>
            <input type="text" name="password">
            <button type="submit" >Envoyer</button>
        </form>
    </main>
    <footer></footer>
</body>
</html>


<?php
if (!isset($_POST['prenom'])) {
    echo (htmlspecialchars($_POST['prenom'])).'<br>';
}else {
    if (empty($_POST['prenom'])) {
        echo "Veuillez entrer un Prénom";
        return;
    }
}

if (!isset($_POST['nom'])) {
    echo (htmlspecialchars($_POST['nom'])).'<br>';
}else {
    if (empty($_POST['nom'])) {
        echo "Veuillez entrer un Nom";
        return;
    }
}

if (!isset($_POST['email'])) {
    echo (htmlspecialchars($_POST['email'])).'<br>';
}else {
    if (empty($_POST['email'])) {
        echo "Veuillez entrer un e-mail";
        return;
    }
}

if (!isset($_POST['password'])) {
    echo (htmlspecialchars($_POST['password'])).'<br>';
}else {
    if (empty($_POST['password'])) {
        echo "Veuillez entrer un mot de passe";
        return;
    }
}
?>
