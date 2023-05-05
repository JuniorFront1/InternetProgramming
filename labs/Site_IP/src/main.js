import { generateImage } from './gallery.js';
import { counterFunc } from './counter.js';
if (document.querySelector('.gallery__container')) {
    generateImage();
}

// Авторизация -----------------------------------------------------------

$('.login__btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name = "login"]').val();
    let password = $('input[name = "password"]').val();

    $.ajax({
        url: 'includes/signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password,
        },
        success: function (data) {
            console.log(data);

            if (data.status) {
                document.location.href = 'profile.php';
            } else {
                if (data.type === 1) {
                    data.fields.forEach((item) => {
                        $(`input[name = "${item}"]`).addClass('error');
                    });
                }

                $('.error-msg').removeClass('none').text(data.message);
            }
        },
    });
});

// Регистрация -----------------------------------------------------------

$('.register-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name = "login"]').val();
    let email = $('input[name = "email"]').val();
    let password = $('input[name = "password"]').val();
    let password__confirm = $('input[name = "password__confirm"]').val();

    $.ajax({
        url: 'includes/signup.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            email: email,
            password: password,
            password__confirm: password__confirm,
        },
        success: function (data) {
            console.log(data);

            if (data.status) {
                document.location.href = 'auth.php';
            } else {
                if (data.type === 1) {
                    data.fields.forEach((item) => {
                        $(`input[name = "${item}"]`).addClass('error');
                    });
                }

                $('.error-msg').removeClass('none').text(data.message);
            }
        },
    });
});

// Код для обработки событий по нажатию на "+" "-"

window.addEventListener('click', (event) => {
    counterFunc(event);
});
