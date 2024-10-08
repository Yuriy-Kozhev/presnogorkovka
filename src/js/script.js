'use strict'

document.addEventListener('DOMContentLoaded', () => {
    
    // CSS анимации

    new WOW().init();

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
    } 

    droplink.forEach(item => {
        item.addEventListener('click', () => {
            dropdown.classList.remove('btn__dropdown-content_show')
        })
    });

})



