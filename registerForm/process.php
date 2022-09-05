<?php

$firstName = ($_POST["firstName"]);
$lastName = ($_POST["lastName"]);
$email = ($_POST["email"]);
$username = ($_POST["username"]);
$password = ($_POST["password"]);
$rePassword = ($_POST["rePassword"]);

echo "Mr. $firstName, You have been registered";

function cleanData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}