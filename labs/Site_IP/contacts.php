<?php
$title = 'Контакты';
include_once 'header.php';
?>

<section class="contacts">

    <div class="contacts__container">
        <div class="contacts__image"><img src="./img/back-contacts.jpg" alt=""></div>
        <div class="my-contacts">
            <div class="my-contacts__title">Мои контакты</div>
            <div class="my-contacts-blocks">
                <div class="my-contacts__blocks-item">
                    <div class="my-contacts__icon"><img src="./img/contacts-email.png" alt=""></div>
                    <div class="my-contacts__text"><a href="sibiryakov_7@mail.ru"
                            class="my-contacts__link">sibiryakov_7@mail.ru</a></div>
                </div>
                <div class="my-contacts__blocks-item">
                    <div class="my-contacts__icon"><img src="./img/contacts-vk.png" alt=""></div>
                    <div class="my-contacts__text"><a href="https://vk.com/n_panchin"
                            class="my-contacts__link">https://vk.com/n_panchin</a>
                    </div>
                </div>
                <div class="my-contacts__blocks-item">
                    <div class="my-contacts__icon"><img src="./img/contacts-instagram.png" alt=""></div>
                    <div class="my-contacts__text"><a href="https://www.instagram.com/_nikitapanchin_/"
                            class="my-contacts__link">https://www.instagram.com/_nikitapanchin_/</a></div>
                </div>
                <div class="my-contacts__blocks-item">
                    <div class="my-contacts__icon"><img src="./img/contacts-phone.png" alt=""></div>
                    <div class="my-contacts__text"><a href="89278323144" class="my-contacts__link">8(927)832-31-44</a>
                    </div>
                </div>
                <div class="my-contacts__blocks-item">
                    <div class="my-contacts__icon"><img src="./img/contacts-location.png" alt=""></div>
                    <div class="my-contacts__text"><a href="#" class="my-contacts__link">г. Ульяновск ул.Луначарского
                            23В</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once 'footer.php';
?>