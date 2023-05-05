<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Основные файлы со стилями -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <!-- Файлы со стилями для разделов страницы -->
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/info.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/skills.css">
    <link rel="stylesheet" href="./css/hobby.css">
    <link rel="stylesheet" href="./css/contacts.css">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./css/gallery.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/game.css">
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <header class="header">
        <div class="header__container">
            <div class="header__container-logo"><img src="./img/6391256.jpg" alt=""></div>
            <div class="header__block-list">
                <ul class="header__list">
                    <li class="header__list-item" id='main'><a href="./index.php" class="header__list-link">Главная</a>
                    </li>
                    <?php
                    if ($_SESSION['user']) {
                        echo '                    <li class="header__list-item header__list-sub" id="skills"><a href="./skills.php"
                        class="header__list-link">Навыки</a>
                    <ul class="header__submenu">
                        <li class="header__submenu-item"><a href="./gallery.php"
                                class="header__submenu-link">Галлерея</a>
                        </li>
                    </ul>
                </li>
                <li class="header__list-item" id="hobby"><a href="./hobby.php" class="header__list-link">Хобби</a>
                </li>';
                    }
                    ?>
                    <li class="header__list-item" id='contacts'><a href="./contacts.php"
                            class="header__list-link">Контакты</a></li>
                    <?php
                    if ($_SESSION['user']) {
                        echo '
                        <li class="header__list-item" id="register"><a href="./auth.php"
                        class="header__list-link">Мой профиль</a></li>';
                    } else {
                        echo '<li class="header__list-item" id="register"><a href="./auth.php"
                        class="header__list-link">Регистрация/Авторизация</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </header>