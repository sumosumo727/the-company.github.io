<?php

include '../classes/User.php';

$user = new User;

$user->update($_POST, $_FILES);
# $_FILES holds and array of items uploaded to the current HTTP POST method

?>