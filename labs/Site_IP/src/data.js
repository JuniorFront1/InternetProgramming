// Выбранные картинки для работы с ними
const scalesImgOne = document.querySelector('.scales__img-first');
const scalesImgTwo = document.querySelector('.scales__img-second');

// Функция поиска картинки, по которой нажали из 1 колонки
let currentImgOne;
let imgOne;

export function chooseImg1(event) {
    currentImgOne = event.target;
    imgOne = currentImgOne.getAttribute('src');
    scalesImgOne.src = imgOne;
}

// Функция поиска картинки, по которой нажали из 2 колонки
let currentImgTwo;
let imgTwo;

export function chooseImg2(event) {
    currentImgTwo = event.target;
    imgTwo = currentImgTwo.getAttribute('src');
    scalesImgTwo.src = imgTwo;
}

// Контейнер для 1 колонки -----------------------------------------
const currentContainerOne = document.querySelector('[data-id="01"]');

// Картинки из 1 колонки
const imgsOne = currentContainerOne.querySelectorAll('.canvas__kinds-img');

// Перебор картинок и поиск той, на которую произошёл клик
imgsOne.forEach((img) => {
    img.addEventListener('click', chooseImg1);
});

// Контейнер для 2 колонки
const currentContainerTwo = document.querySelector('[data-id="02"]');

// Картинки из 2 колонки
const imgsTwo = currentContainerTwo.querySelectorAll('.canvas__kinds-img');

// Перебор картинок и поиск той, на которую произошёл клик
imgsTwo.forEach((img) => {
    img.addEventListener('click', chooseImg2);
});

const resultBtn = document.querySelector('.btn-result');
resultBtn.addEventListener('click', () => {
    // Переменная для 1 инпута "Плотность"
    const densityOne = currentContainerOne.querySelector('.canvas__data-input').value;

    // Переменная для 2 инпута "Плотность"
    const densityTwo = currentContainerTwo.querySelector('.canvas__data-input').value;

    // Переменная для 1 "Объёма"
    const sizeOne = currentContainerOne.querySelector('[data-counter]').innerText;

    // Переменная для 2 "Объёма"
    const sizeTwo = currentContainerTwo.querySelector('[data-counter]').innerText;

    // Переменная для массы 1 материала
    const mas1 = densityOne * sizeOne;
    console.log(mas1);
    // Переменная для массы 2 материала
    const mas2 = densityTwo * sizeTwo;
    console.log(mas2);
    // Переменная для разницы массы материалов
    const difference = Math.abs(mas1 - mas2);
    console.log(difference);
    if (mas1 > mas2 && difference < 40) {
        document.querySelector('.scales__item').style.transform = 'rotate(-10deg)';
        document.querySelector('.scales__img-first').style.top = '85px';
        document.querySelector('.scales__img-second').style.top = '3px';
    }
    if (mas1 > mas2 && difference > 40) {
        document.querySelector('.scales__item').style.transform = 'rotate(-20deg)';
        document.querySelector('.scales__img-first').style.top = '125px';
        document.querySelector('.scales__img-second').style.top = '-39px';
    }
    if (mas1 < mas2 && difference < 30) {
        document.querySelector('.scales__item').style.transform = 'rotate(10deg)';
        document.querySelector('.scales__img-first').style.top = '3px';
        document.querySelector('.scales__img-second').style.top = '85px';
    }
    if (mas1 < mas2 && difference > 30) {
        document.querySelector('.scales__item').style.transform = 'rotate(20deg)';
        document.querySelector('.scales__img-first').style.top = '-39px';
        document.querySelector('.scales__img-second').style.top = '125px';
    }
});
