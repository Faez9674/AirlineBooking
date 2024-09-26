<?php

include "dbconn.php";

if(isset($_POST['submit'])){

    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($user_name != "" && $email != "" && $password != "" ){
        $sql = "INSERT INTO user (`user_name`, `email`, `password`) VALUES ('$user_name', '$email', $password)";
        if (mysqli_query($conn, $sql)) {
            header("location: index.html");
        } else {
             echo "Something went wrong. Please try again later.";
        }
    }else{
        echo "User name, email, and password cannot be empty!";
    }
}


?>