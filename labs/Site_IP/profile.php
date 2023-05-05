<?php
session_start();

require_once 'includes/connect.php';

if (!$_SESSION['user']) {
    header('Location: auth.php');
}

$user_id = $_SESSION['user']['id'];
$user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$user_id'");
$user = mysqli_fetch_assoc($user);

$title = 'Профиль';
include_once 'header.php';
?>

<section class="account">
    <div class="account__container">
        <div class="account__blocks">
            <div class="account__blocks-item">
                <img class="account__blocks-img" src="img/profile.png" alt="">
            </div>
            <div class="account__blocks-item account__blocks-login">
                <a href="#">
                    <b>Логин:</b>
                    <?= $user['login'] ?>
                </a>
            </div>
            <div class="account__blocks-item account__blocks-email">
                <b>Почта:</b> <a href="#">
                    <?= $user['email'] ?>
                </a>
            </div>
            <div class="account__blocks-item">
                <a href="update.php" class='account__logout'>Изменить</a>
            </div>
            <div class="account__blocks-item">
                <a href="includes/logout.php" class='account__logout'>Выход</a>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>