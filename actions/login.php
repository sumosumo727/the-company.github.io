<?php

include '../classes/User.php';

// Create an object
$user = new User;

$user->login($_POST);

?>