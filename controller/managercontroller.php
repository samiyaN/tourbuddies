<?php

require_once '../model/database.php';

function addmanager($name, $phone, $userid)
{
    $query = "INSERT INTO managers VALUES (NULL, '$userid', '$name', '$phone')";

    $result = insert($query);

    header('location: ./manager.php');

}

function getallmanager($userid)
{
    $query = "SELECT * FROM managers where orgranizer_id = $userid";

    $result = get($query);

    return $result;
}