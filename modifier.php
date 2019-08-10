<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');

$pdoStat = $objetPdo->prepare('UPDATE contact SET nom=:nom, prenom=:prenom, tel=:tel, mel=:mel WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numContact'], PDO::PARAM_INT);
$pdoStat->bindValue(':nom', $_POST['lastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['firstName'], PDO::PARAM_STR);
$pdoStat->bindValue(':tel', $_POST['phone'], PDO::PARAM_STR);
$pdoStat->bindValue(':mel', $_POST['mail'], PDO::PARAM_STR);

$executeIsOk = $pdoStat->execute();

if ($executeIsOk){
    $message = "Mofication réussie";
}else{
    $message = "Erreur lors de la modification";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification : Résultat</title>
</head>
<body>
    <h1>Résultat de la modification</h1>
    <p><?= $message; ?></p>
</body>
</html>
