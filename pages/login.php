<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>login</h1>
    </header>
    <main>
        <form action="../controllers/login.php" method="post">
            <label for="name">Nom d'utilisateur</label>
            <input type="text" name="name" id="name">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <button>Envoyer</button>
        </form>
    </main>
 

</body>

</html>