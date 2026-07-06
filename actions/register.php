<?php
    include "../classes/User.php";

    // create an object
    $user = new User;

    // call a method
    $user->store($_POST);

?>