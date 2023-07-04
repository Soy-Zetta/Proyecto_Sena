const img1 = document.querySelector('.container-img1');
const img2 = document.querySelector('.container-img2');
const img3 = document.querySelector('.container-img3');
const img4 = document.querySelector('.container-img4');

const li1 = document.querySelector('.nav__li__subnavbar-li1');
const li2 = document.querySelector('.nav__li__subnavbar-li2');
const li3 = document.querySelector('.nav__li__subnavbar-li3');
const li4 = document.querySelector('.nav__li__subnavbar-li4');

const iconClose1 = document.querySelector('.fa-times1');
const iconClose2 = document.querySelector('.fa-times2');
const iconClose3 = document.querySelector('.fa-times3');
const iconClose4 = document.querySelector('.fa-times4');

li1.addEventListener('click', ()=> {
    img2.classList.toggle('container-img2On');
});

li2.addEventListener('click', ()=> {
    img1.classList.toggle('container-img1On');
});

li3.addEventListener('click', ()=> {
    img3.classList.toggle('container-img3On');
});

li4.addEventListener('click', ()=> {
    img4.classList.toggle('container-img4On');
});

iconClose1.addEventListener(('click'),()=>{
    img3.classList.remove('container-img3On');
    img2.classList.remove('container-img2On');
    img1.classList.remove('container-img1On');
    img4.classList.remove('container-img4On');
});

iconClose2.addEventListener(('click'),()=>{
    img3.classList.remove('container-img3On');
    img2.classList.remove('container-img2On');
    img1.classList.remove('container-img1On');
    img4.classList.remove('container-img4On');
});

iconClose3.addEventListener(('click'),()=>{
    img3.classList.remove('container-img3On');
    img2.classList.remove('container-img2On');
    img1.classList.remove('container-img1On');
    img4.classList.remove('container-img4On');
});

iconClose4.addEventListener(('click'),()=>{
    img3.classList.remove('container-img3On');
    img2.classList.remove('container-img2On');
    img1.classList.remove('container-img1On');
    img4.classList.remove('container-img4On');
});