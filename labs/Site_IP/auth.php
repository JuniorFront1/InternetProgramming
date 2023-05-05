<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

$title = 'Авторизация';
include_once 'header.php';
?>

<section class="register">
    <div class="register__container">
        <div class="register__title">Авторизация</div>
        <div class="register__inner">
            <form class="form">
                <div class="login form__item">
                    <div class="login__name login__item">Логин</div>
                    <input type="text" name="login" class="login__input form__input" placeholder="Ваш логин...">
                </div>
                <div class="password form__item">
                    <div class="password__name login__item">Пароль</div>
                    <input type="password" name="password" class="password__input form__input"
                        placeholder="Ваш пароль...">
                </div>
                <button class='form__button login__btn' type='submit'>Войти в аккаунт</button>
                <div class='register__descript'>У вас нет аккаунта? - <a href="./register.php"
                        class="register__link">Зарегистрируйтесь</a></div>
            </form>
            <p class="error-msg none">Lorem ipsum dolor sit, amet</p>;
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>