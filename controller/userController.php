<?php

session_start();

require_once '../model/database.php';

function login($username, $password)
{

    $newPassword = $password;
    $query = "SELECT * FROM users WHERE username = '$username' and password = '$newPassword'";
    $result = get($query);
    $valid = count($result);
    if ($valid == 1) {
        $role = $result[0]['role'];

        $_SESSION["user"] = $result[0]['id'];
        $_SESSION["first_name"] = $result[0]['first_name'];
        $_SESSION["last_name"] = $result[0]['last_name'];
        $_SESSION["username"] = $result[0]['username'];
        $_SESSION["email"] = $result[0]['email'];
        $_SESSION["nid"] = $result[0]['nid'];
        $_SESSION["phone"] = $result[0]['phone'];
        $_SESSION["gender"] = $result[0]['gender'];
        $_SESSION["role"] = $result[0]['role'];

        if ($role == 'eventplanner') {
            header('location: ./eventPlannerProfile.php');
        } else {
            header('location: ./travellerprofile.php');

        }
    } else {
        header('location: ./LogIn.php');
    }
}

function register($firstname, $lastname, $username, $password, $email, $nid, $phone, $gender, $role)
{
    $query = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `nid`, `phone`, `gender`, `role`) VALUES (NULL,'" . $firstname . "', '" . $lastname . "', '" . $username . "', '" . $password . "', '" . $email . "', '" . $nid . "', '" . $phone . "', '" . $gender . "', '" . $role . "')";

    $result = insert($query);

    if ($result) {

        header('location: ./LogIn.php');
    }

}