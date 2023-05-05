<?php

require_once '../includes/connect.php';

$id = $_POST['id'];
$login = $_POST['login'];
$email = $_POST['email'];


mysqli_query($connect, "UPDATE `users` SET `login` = '$login', `email` = '$email' WHERE `users`.`id` = '$id'");



header('Location: ../profile.php')

    ?>