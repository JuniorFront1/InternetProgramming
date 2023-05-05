<?php
session_start();
require_once 'includes/connect.php';

$title = 'Изменение профиля';
include_once 'header.php';

$user_id = $_SESSION['user']['id'];
$user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$user_id'");
$user = mysqli_fetch_assoc($user);

?>

<section class="account">
    <div class="account__container">
        <form class="account__blocks" action="includes/update.php" method="post">
            <input class="account__blocks-id" type="hidden" name="id" value="<?= $user['id'] ?>">
            <div class="account__blocks-login">
                <b>Логин</b>
                <input class="account__blocks-input" type="text" name="login" value="<?= $user['login'] ?>">
            </div>
            <div class="account__blocks-email">
                <b>Почта</b>
                <input class="account__blocks-input" type="text" name="email" value="<?= $user['email'] ?>">
            </div>
            <button type="submit" class="account__blocks-btn account__blocks-upd">Изменить</button>
            <a href="profile.php" class='account__blocks-btn'>Вернуться</a>
        </form>
        <p class="error-msg none">Lorem ipsum dolor sit, amet</p>;
    </div>
</section>

<?php
include_once 'footer.php';
?>