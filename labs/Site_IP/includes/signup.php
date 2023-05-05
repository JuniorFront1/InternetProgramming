<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password__confirm = $_POST['password__confirm'];


$check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");

if (mysqli_num_rows($check_login) > 0) {
    $response = array(
        'status' => false,
        'type' => 1,
        'message' => 'Такой логин уже существует',
        'fields' => array('login'),
    );

    echo json_encode($response);
    die();
}

$error_fields = array();

if ($login === '') {
    $error_fields[] = 'login';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_fields[] = 'email';
}

if ($password === '') {
    $error_fields[] = 'password';
}

if ($password__confirm === '') {
    $error_fields[] = 'password__confirm';
}

if (!empty($error_fields)) {

    $response = array(
        "status" => false,
        "type" => 1,
        "message" => 'Проверьте правильность полей',
        "fields" => $error_fields,
    );

    echo json_encode($response);

    die();
}

if ($password === $password__confirm) {

    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");

    $response = array(
        "status" => true,
        "message" => 'Регистрация прошла успешно!',
    );
    echo json_encode($response);

} else {
    $response = array(
        "status" => true,
        "message" => 'Пароли не совпадают',
    );
    echo json_encode($response);
}
?>