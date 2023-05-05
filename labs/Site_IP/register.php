<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

$title = 'Регистрация';
include_once 'header.php';
?>

<section class="register">
    <div class="register__container">
        <div class="register__title">Регистрация</div>
        <div class="register__inner">
            <form action="includes/signup.php" method="post" class="form">
                <div class="login form__item">
                    <div class="login__name login__item">Логин</div>
                    <input type="text" name="login" class="login__input form__input" placeholder="Ваш логин...">
                </div>
                <div class="email form__item">
                    <div class="email__name login__item">Почта</div>
                    <input type='email' name='email' class='email__input form__input' placeholder='Ваша почта...'>
                </div>
                <div class='password form__item'>
                    <div class='password__name login__item'>Пароль</div>
                    <input type='password' name='password' class='password__input form__input'
                        placeholder='Ваш пароль...'>
                </div>
                <div class='password form__item'>
                    <div class='password__name login__item'>Подтверждение пароля</div>
                    <input type='password' name='password__confirm' class='password__input form__input'
                        placeholder='Повторите ваш пароль...'>
                </div>
                <button class='form__button register-btn' type='submit'>Зарегистрироваться</button>
                <div class='register__descript'>У вас уже есть аккаунт? - <a href=" ./auth.php" class='register__link'>
                        Авторизируйтесь</a></div>
            </form>
            <p class="error-msg none">Lorem ipsum dolor sit, amet</p>;
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>