<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');

$pdoStat = $objetPdo->prepare('SELECT * FROM contact WHERE id = :num');

$pdoStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

$contact = $pdoStat->fetch();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Modification</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Modifier un contact</h1>
<div class="w3-container">
    <form action="modifier.php" method="post">

        <input type="hidden" name="numContact" value="<?= $contact['id']; ?>">

        <p>
            <label for="nom">Nom</label>
            <input c type="text" name="lastName" id="nom" value="<?= $contact['nom']; ?>">
        </p>

        <p>
            <label for="prenom">Prenom</label>
            <input c type="text" name="firstName" id="prenom" value="<?= $contact['prenom']; ?>">
        </p>

        <p>
            <label for="tel">Telephone</label>
            <input c type="text" name="phone" id="tel" value="<?= $contact['tel']; ?>">
        </p>

        <p>
            <label for="mel">Email</label>
            <input type="email" name="mail" id="mel" value="<?= $contact['mel']; ?>">
        </p>

        <p><input type="submit" value="Enregistrer les modifications"></p>

    </form>
</div>

</body>
</html>
