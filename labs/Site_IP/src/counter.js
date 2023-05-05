export function counterFunc(event) {
    // Счётчик
    let counter;

    // Проверяем клик строго по кнопкам Плюс либо Минус
    if (event.target.dataset.action === 'plus' || event.target.dataset.action === 'minus') {
        // Родитель счётчка
        const countWrapper = event.target.closest('.counter-wrapper');
        // Присвоение дата атрибута счётчика
        counter = countWrapper.querySelector('[data-counter]');
    }

    // Проверка является ли элемент кнопкой "Плюс"
    if (event.target.dataset.action === 'plus') {
        // Инкриментируем значение дата атрибута
        counter.innerText = ++counter.innerText;
    }

    // Проверка является ли элемент кнопкой "Минус"
    if (event.target.dataset.action === 'minus') {
        // Проверка на положительное число
        if (parseInt(counter.innerText) > 1) {
            // Дикриментируем значение дата атрибута
            counter.innerText = --counter.innerText;
        }
    }
}
