<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');

$pdoStat = $objetPdo->prepare('INSERT INTO contact VALUES(NULL, :nom, :prenom, :tel, :mel)');

$pdoStat->bindValue(':nom', $_POST['lastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['firstName'], PDO::PARAM_STR);
$pdoStat->bindValue(':tel', $_POST['phone'], PDO::PARAM_STR);
$pdoStat->bindValue(':mel', $_POST['mail'], PDO::PARAM_STR);

$insertIsOk = $pdoStat->execute();

if($insertIsOk){
    $message = "Insertion réussie avec suuccès";
}else{
    $message = "Ooops erreur lors de l'insertion";
}

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
       <h1>Insertion des contacts</h1>

        <p><?php echo $message; ?></p>

    </body>
</html>

