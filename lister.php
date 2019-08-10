<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');


$pdoStat = $objetPdo->prepare('SELECT * FROM contact');

$executeIsOk = $pdoStat->execute();

$contacts = $pdoStat->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>PDO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<h1>Liste des contacts</h1>

<ul>
    <?php foreach ($contacts as $contact): ?>
        <li>
            <?= $contact['prenom']?> - <?= $contact['nom']?> - <?= $contact['tel']?> - <?= $contact['mel']?> <a
                href="supprimer.php?numContact=<?= $contact['id'] ?>">Supprimer</a> <a
                href="form_modification.php?numContact=<?= $contact['id'] ?>">Modifier</a>
        </li>
    <?php endforeach;?>
</ul>

</body>
</html>