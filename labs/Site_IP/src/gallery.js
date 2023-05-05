const containerGallery = document.querySelector('.gallery__container');

function makeId() {
    const images = [
        './img/slide-1.jpg',
        './img/slide-2.jpg',
        './img/slide-3.jpg',
        './img/slide-4.jpg',
        './img/slide-5.jpg',
        './img/slide-6.jpg',
    ];
    const src = images[Math.floor(Math.random() * images.length)];
    return src;
}

function showImage(event) {
    event.target.style.zIndex = '10';
    event.target.style.opacity = '1';
    event.target.style.animation = 'none';
    event.target.style.position = 'absolute';
    event.target.style.left = '50%';
    event.target.style.top = '50%';
    event.target.style.transform = 'translate(-50%, -50%)';
    event.target.style.width = '90%';
    event.target.style.height = '70%';

    document.addEventListener('click', detectOutsideClick);

    function detectOutsideClick(eventDocument) {
        const isClickInside = event.target.contains(eventDocument.target);

        if (!isClickInside) {
            event.target.style.opacity = '0';
            event.target.style.animation = 'matrix 1.5s linear infinite';
            event.target.style.position = 'static';
            event.target.style.transform = 'none';
            event.target.style.width = 'auto';
            event.target.style.height = 'auto';
            document.removeEventListener('click', detectOutsideClick);
            event.target.remove();
        }
    }
}

export function generateImage() {
    const w = 5;
    const rect = containerGallery.getBoundingClientRect();

    let delay = 0;
    const width = 200;
    setInterval(() => {
        const timeOut = Math.floor(Math.random() * 5) * 100;
        let y = Math.floor(Math.random() * 5) * 1000;
        const x = Math.floor(Math.random() * w) * width;
        const image = document.createElement('img');
        image.classList.add('gallery__img');
        image.classList.add('gallery__img');
        image.style.transform = `translate(${x}px,-900px)`;
        image.src = makeId();
        image.addEventListener('click', showImage);

        delay += 100;

        image.style.animationDelay = delay + 'ms';

        containerGallery.appendChild(image);

        setTimeout(() => {
            if (y < rect.height) {
                y = 1000;
            }
            image.style.transform = `translate(${x}px,${y}px)`;
        }, timeOut);

        setTimeout(() => {
            if (rect.bottom <= image.getBoundingClientRect().top) {
                containerGallery.removeChild(image);
            }
        }, timeOut + 2000);
    }, 500);
}
