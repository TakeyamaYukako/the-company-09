<?php

    include "../classes/user.php";

    //Collect the form date
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $usename = $_POST['username'];
    $password = $_POST['password'];

    //Creat an object
    $user = new User;

    //Call the method
    $user->createUser($first_name, $last_name, $usename, $password);
?>