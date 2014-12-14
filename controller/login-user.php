<?php
    require_once(__DIR__ . "/../model/config.php");


    $username = filter_input(INPUT_POST, "username", FILTER_SANTIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANTIZE_STRING);

    $query = $_SESSION["connection"]->("SELECT salt,password FROM users WHERE username = '$username'");

    