<?php
    session_start();      //démarre session
    if (!empty($_POST)) {  //si form n'est pas vide
        $array_user = json_decode(file_get_contents('../user.json'));  //décoder le json 
        $compare_array = array_filter($array_user, function($user){ //récupérer l'élement du json qui correspond au formulaire
            return $user->name == $_POST['name'] && $user->password == $_POST['password'];
        });
        $compare_array = array_values($compare_array);  //transformer en tableau 
        if (!empty($compare_array)){  //vérifier si compare array n'est pas vide, il se remplit si il y a une correspondance avce le form
            $_SESSION["userId"] = $compare_array[0] -> id; //donner un id et un name a la session
            $_SESSION["userName"] = $compare_array[0] -> name;
            header("Location: ../pages/dashboard.php"); //envoie sur le dashboard
        die();
        }
    }
    ?>



<?
/*
<?php
//On verifie si la variable $_POST n'est pas vide
if(!empty($_POST)){
    //On récupère le contenu du fichier JSON
    $array_user = json_decode(file_get_contents("../user.json"));
    //On filtre notre tableau d'utilisateurs par l'email du formulaire
    $user_filter = array_filter($array_user, function($user){
        return $user->email == $_POST['email'];
    });
    // On réordonne le tableau
    $user_filter = array_values($user_filter);

    if(!empty($user_filter)){
        if(password_verify($_POST['password'], $user_filter[0]->password)){
            echo "logged in";
        }
    }
}
?>
*/

