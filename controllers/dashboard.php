<?php
    session_start();
    $origin = $_FILES['file']['tmp_name'];
    $destination = $_FILES['file']['name'];
    $newName = uniqid().$destination;
    move_uploaded_file($origin,'../assets/upload/'. $newName); 


    
    $array_img = json_decode(file_get_contents('../img.json'));
    $new_array = ['userId'=> $_SESSION['userId'], 'name'=>$newName];
    array_push($array_img, $new_array);
    $array_img = json_encode($array_img);
    file_put_contents("../img.json", $array_img);
    header("Location: ../pages/dashboard.php");
    die();
?>