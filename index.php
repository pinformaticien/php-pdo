<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PDO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Ajouter un contact</h1>
        <div class="container">
            <form action="insertion.php" method="post">

                <p>
                    <label for="nom">Nom</label>
                    <input type="text" name="lastName" id="nom">
                </p>

                <p>
                    <label for="prenom">Prenom</label>
                    <input type="text" name="firstName" id="prenom">
                </p>

                <p>
                    <label for="tel">Telephone</label>
                    <input type="text" name="phone" id="tel">
                </p>

                <p>
                    <label for="mel">Email</label>
                    <input type="email" name="mail" id="mel">
                </p>

                <p><input type="submit" value="Enregistrer"></p>

            </form>
        </div>
    </body>
</html>
