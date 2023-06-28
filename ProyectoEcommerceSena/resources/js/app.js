const navBtn = document.querySelector('.header__menu-mobile-btn');
const navBtnClose = document.querySelector('.header__menu-mobile-btnClose');

const navBar = document.querySelector('.nav');

navBtn.addEventListener('click',()=>{
    navBar.classList.toggle('navOn');
})
navBtnClose.addEventListener('click',()=>{
    navBar.classList.remove('navOn');
})


const btnWspp = document.querySelector('.main__container-wspp');
const spanWspp = document.querySelector('.main__container-wspp-btn__spanOn');
const divChatWspp = document.querySelector('.main__container-wspp__chatDiv');
const divChatWsppClose = document.querySelector('.main__container-wspp__chatDiv-Close');

btnWspp.addEventListener('click',()=>{
    divChatWspp.classList.add('main__container-wspp__chatDivOn');
});
divChatWsppClose.addEventListener('click',()=>{
    divChatWspp.classList.remove('main__container-wspp__chatDivOn');
});


window.addEventListener('load',()=>{
    setTimeout(()=>{
        spanWspp.classList.remove('main__container-wspp-btn__spanOn');
        spanWspp.classList.add('main__container-wspp-btn__spanOff');
    },5000)
});


const navli2 = document.querySelector('.nav__li2');
const navul2 = document.querySelector('.nav__li-act__ul2');
const itemLiArrow1 = document.querySelector('.fa-angle-down2');

navli2.addEventListener('mouseover',()=>{
    navul2.classList.add('nav__li-act__ul2On');
    itemLiArrow1.classList.add("fa-angle-down-rot1");
    navli2.addEventListener('mouseout',()=>{
        navul2.classList.remove('nav__li-act__ul2On');
        itemLiArrow1.classList.remove("fa-angle-down-rot1");
    });
});


const navli4 = document.querySelector('.nav__li4');
const navul4 = document.querySelector('.nav__li-act__ul4');
const itemLiArrow2 = document.querySelector('.fa-angle-down4');


navli4.addEventListener('mouseover',()=>{
    navul4.classList.add('nav__li-act__ul4On');
    itemLiArrow2.classList.add("fa-angle-down-rot2");
    navli4.addEventListener('mouseleave',()=>{
        navul4.classList.remove('nav__li-act__ul4On');
        itemLiArrow2.classList.remove("fa-angle-down-rot2");
    });
});

const btnLog = document.getElementById('btn-log');
const MenuLogAdminlte= document.querySelector('.menu-log');


btnLog.addEventListener('click',()=> {
    MenuLogAdminlte.classList.toggle("menu-logOn");
    setTimeout(()=> {
        MenuLogAdminlte.classList.remove("menu-logOn");
    },5000);
});





