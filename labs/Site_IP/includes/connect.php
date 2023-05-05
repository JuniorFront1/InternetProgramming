<?php

$connect = mysqli_connect('localhost', 'root', '', 'test'); // переменная для подключения к БД

if (!$connect) {
    die('Error connect to DataBase'); // вывод сообщения и остановка кода
}