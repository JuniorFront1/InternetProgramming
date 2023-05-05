<?php
$title = 'Хобби';
include_once 'header.php';
?>

<section class='hobby'>
    <div class="hobby__container">
        <div class="blocks">
            <div class="blocks__item row">
                <div class="blocks__item-img"><img src="./img/hobby-1.jpg" alt=""></div>
                <div class="blocks__item-info">
                    <div class="blocks__item-title">Программирование</div>
                    <div class="blocks__item-text">
                        Изучать программирование я начал с студенческих будней в колледже (КЭИ). Благодаря своему
                        другу Дамиру, я смог более правильно и уверенно начать свой путь в изучении базовых основ для
                        программистов. Сложность пути заключалась в выборе сферы программирования. Но благодаря желанию
                        и дисциплине сейчас я изучаю всё более новые и
                        сложные фишки определённого ЯП, которые в будущем помогут мне получить хорошую специальность и
                        дальнейшее развитие
                    </div>
                </div>
                <div class="skills">
                    <div class="skill">
                        <div class="skill__name">HTML</div>
                        <div class="skill__bar">
                            <div class="skill__per" per='90%' style='max-width: 90%'></div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill__name">CSS</div>
                        <div class="skill__bar">
                            <div class="skill__per" per='70%' style='max-width: 70%'></div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill__name">TS</div>
                        <div class="skill__bar">
                            <div class="skill__per" per='60%' style='max-width: 60%'></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blocks__item">
                <div class="blocks__item-img"><img src="./img/hobby-2.jpg" alt=""></div>
                <div class="blocks__item-info">
                    <div class="blocks__item-title">Тренировки</div>
                    <div class="blocks__item-text">
                        Свой путь в тренировки я начала ещё в детстве. Начинал, как и многие, с посещения разных секций,
                        кружков. Перепробовал не мало для себя, где-то быстро бросал, где-то получал определённые
                        достиженияю. Но моё внимание привлёк тренажёрный зал из-за своей доступности, разных путях
                        тренировках и прочее. Благодаря данному знакомству, я ввёл для себя обыденность проводить
                        тренировки, поддерживать и улучшать своё здоровье.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include_once 'footer.php';
?>