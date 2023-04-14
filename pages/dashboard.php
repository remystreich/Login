<?php
session_start();
$array_img = json_decode(file_get_contents('../img.json'));
$compare_img = array_filter($array_img, function($img){
    return $img->userId == $_SESSION['userId'];
});

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <header>
        <img src="..upload/"  alt="">
        <h1>
            Dashboard
        </h1>
    </header>
    <main>
        <?php
        echo("Bonjour ". $_SESSION["userName"] )
        ?>
        <form action="../controllers/dashboard.php" method="post" enctype="multipart/form-data">
            <label for="">file</label>
            <input type="file" name="file" id="file">
            <button type="submit">Envoyer</button>
        </form>
        <?php
        foreach ($compare_img as $img) {
          echo "<img src='../assets/upload/".$img->name."' alt=''>";
        }
        ?>
        
    </main>
</body>

</html>