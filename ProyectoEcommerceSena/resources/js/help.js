const liAll = document.querySelectorAll('.nav__li__subnavbar-li');
const iconRotar = document.querySelectorAll('.fa-plus');
const info = document.querySelector('.container-info');
const closeSubmenu = document.querySelector('.closeSubMenu');

liAll.forEach( (li, i) => {
    liAll[i].addEventListener('click',()=> {
        iconRotar[i].classList.toggle('active');
        iconRotar[i].classList.toggle('activeSubMenu');
        info.classList.add('container-infoOn');
        closeSubmenu.addEventListener('click', ()=> {
            info.classList.remove('container-infoOn');
            iconRotar[i].classList.remove('active');
            iconRotar[i].classList.remove('activeSubMenu');
        });
    });
})

