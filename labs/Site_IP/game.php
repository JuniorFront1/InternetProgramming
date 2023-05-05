<?php
$title = 'Игра';
include_once 'header.php';
?>

<section class="game">
    <div class="canvas__container">
        <!-- 2 колонки игры -->
        <div class="canvas__blocks">
            <!-- Колонка с информацией для выбора -->
            <div class="canvas__blocks-item" data-id="01">
                <!-- Варианты выбора -->
                <div class="canvas__kinds">
                    <div class="canvas__kinds-item">
                        <span class="canvas__kinds-text">Дерево</span>
                        <img class="canvas__kinds-img" src="img/derevo.jpg" alt="" data-img="derevo">
                    </div>
                    <div class="canvas__kinds-item">
                        <span class="canvas__kinds-text">Металл</span>
                        <img class="canvas__kinds-img" src="img/metall.jpg" alt="" data-img="metall">
                    </div>
                    <div class="canvas__kinds-item">
                        <span class="canvas__kinds-text">Вода</span>
                        <img class="canvas__kinds-img" src="img/voda.jpg" alt="" data-img="voda">
                    </div>
                </div>

                <!-- Данные для подсчёта -->
                <div class="canvas__data" data-info="01">
                    <!-- Ввод плотности -->
                    <div class="canvas__data-item">
                        <label class="canvas__data-label" for="canvas__input">Плотность</label>
                        <input class="canvas__data-input" id="canvas__input" type="text" placeholder="0">
                    </div>
                    <!-- Счётчик объёма -->
                    <div class="canvas__data-item">
                        <div class="canvas__data-text">Объём</div>
                        <div class="counter-wrapper">
                            <div class="counter-wrapper__control" data-action="minus">-</div>
                            <div class="counter-wrapper__current" data-counter>1</div>
                            <div class="counter-wrapper__control" data-action="plus">+</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="canvas__blocks-item" data-id="02">
                <div class="canvas__kinds">
                    <div class="canvas__kinds-item">
                        <span class="canvas__kinds-text">Дерево</span>
                        <img class="canvas__kinds-img" src="img/derevo.jpg" alt="" data-img="derevo">
                    </div>
                    <div class="canvas__kinds-item">
                        <span class="canvas__kinds-text">Металл</span>
                        <img class="canvas__kinds-img" src="img/metall.jpg" alt="" data-img="metall">
                    </div>
                    <div class="canvas__kinds-item">
                        <span class="canvas__kinds-text">Вода</span>
                        <img class="canvas__kinds-img" src="img/voda.jpg" alt="" data-img="voda">
                    </div>
                </div>
                <!-- Данные для подсчёта -->
                <div class="canvas__data" data-info="02">
                    <!-- Ввод плотности -->
                    <div class="canvas__data-item">
                        <label class="canvas__data-label" for="canvas__input">Плотность</label>
                        <input class="canvas__data-input" id="canvas__input" type="text" placeholder="0">
                    </div>
                    <!-- Счётчик объёма -->
                    <div class="canvas__data-item">
                        <div class="canvas__data-text">Объём</div>
                        <div class="counter-wrapper">
                            <div class="counter-wrapper__control minus" data-action="minus">-</div>
                            <div class="counter-wrapper__current" data-counter>1</div>
                            <div class="counter-wrapper__control plus" data-action="plus">+</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn-result" data-result>Выполнить вычисление</button>
        <div class="scales-container">
            <div class="scales__item"></div>
            <img class="scales__item-img scales__img-first" src="img/derevo.jpg" alt="">
            <img class="scales__item-img scales__img-second" src="img/voda.jpg" alt="">
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>