<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');

$pdoStat = $objetPdo->prepare('DELETE FROM contact WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

if ($executeIsOk){
    $message = "Suppression réussie";
}else{
    $message = "Echec de suppression";
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
<h1>Suppression d'un contact</h1>

<p><?php echo $message; ?></p>

</body>
</html>
