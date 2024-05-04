'use strict'

document.addEventListener('DOMContentLoaded', () => {
    
    // CSS анимации

    new WOW().init();

    // Галерея

    const photo = document.querySelectorAll('.photo__item');

    photo.forEach(item => {
        if (item.naturalWidth > item.naturalHeight) {
            item.classList.add('photo__item_wide');
        }
    })

    // Выпадающий список

    const dropdown = document.querySelector('.btn__dropdown-content'),
        dropbtn = document.querySelector('.btn__dropdown'),
        droplink = document.querySelectorAll('.btn__dropdown-content');

    if (dropbtn) {
        dropbtn.addEventListener('mouseenter', () => {
            dropdown.classList.add('btn__dropdown-content_show')
        });

        dropbtn.addEventListener('mouseleave', () => {
            dropdown.classList.remove('btn__dropdown-content_show')
        });
    } // Проверка на то, что dropbtn – не null, иначе в консоли выходит ошибка: Uncaught TypeError: Cannot read properties of null (reading 'addEventListener')

    droplink.forEach(item => {
        item.addEventListener('click', () => {
            dropdown.classList.remove('btn__dropdown-content_show')
        })
    });
})



