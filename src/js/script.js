// CSS анимации

new WOW().init();

// Галерея

const photo = document.querySelectorAll('.photo__item');

photo.forEach(item => {
    if (item.naturalWidth > item.naturalHeight) {
        item.classList.add('photo__item_wide');
    }
})