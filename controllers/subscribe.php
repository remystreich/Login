<?php
    if (!empty($_POST)) {
        $user = $_POST;    //récupere les input du formulaire
        $user["id"] = uniqid(); //génere un id
        $array_user = json_decode(file_get_contents('../user.json')); //récupérer et décoder sous forme de tableau le json
        array_push($array_user, $user); //stocker les données du formulaire dans le tableau
        $array_user = json_encode($array_user); //réencoder le tableau
        file_put_contents("../user.json", $array_user); //renvoyer le tableau dans le json
        header("Location: ../pages/login.php"); //envoie sur la page de login
        die();
    }
    ?>