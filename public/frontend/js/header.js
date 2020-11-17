document.addEventListener("DOMContentLoaded", function () {
    const app = document.querySelector('.app');
    const headerNavbarTop = document.querySelector('.header__topbar');
    const headerMain = document.querySelector('.header__main');
    const headerCategory = document.querySelectorAll('.header__main-item > .header__main-category');
    const searchInput = document.querySelector('.search--input');
    const navTablet = document.querySelector('.nav-tablet');
    const buttonBar = document.querySelector('.header-bar-icon');
    const body = document.querySelector('body');
    const overLay = document.querySelector('.modal');
    const closeNavMobile = document.querySelector('.close');
    const buttonBarMobile = document.querySelector('.header-bar-mobile-icon');
    const buttonSearchMobile = document.querySelector('.header-search-mobile-icon');
    const inputSearchMobile = document.querySelector('.header__search-mobile');
    var tt = 1;

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 0) {
            headerNavbarTop.classList.add('hide');
            headerMain.style.background = 'white';
            searchInput.style.background = 'transparent';
            searchInput.style.borderColor = '#a7a7a7';
            headerMain.classList.add('header__main-height--small');
            for (let i = 0; i < headerCategory.length; i++) {
                headerCategory[i].classList.add('header__category--go-up');
            }
            tt = 2;
        } else {
            headerMain.classList.remove('header__main-height--small');
            for (let i = 0; i < headerCategory.length; i++) {
                headerCategory[i].classList.remove('header__category--go-up');
                searchInput.style.borderColor = 'transparent';
            }
            headerNavbarTop.classList.remove('hide');
            // navTablet.style.top = 'var(--header-height)';
            tt = 1;
        }
    })

    buttonBar.addEventListener('click', () => {

        navTablet.classList.toggle('move-left');
        overLay.classList.toggle('show');

    })
    closeNavMobile.addEventListener('click', () => {
        navTablet.classList.remove('move-left');
        overLay.classList.remove('show');
    })
    overLay.addEventListener('click', () => {
        const listCategoryRightPc = document.querySelector('.list-category-right-pc');
        const siteCardMobile = document.querySelector('.site-card-mobile ');
        navTablet.classList.remove('move-left');
        overLay.classList.remove('show');
        listCategoryRightPc.classList.add('hide-on-mobile-tablet');
        siteCardMobile.classList.add('hide');
    })
    // buttonBarMobile.addEventListener('click',()=>{
    //     navTablet.classList.toggle('move-left');
    //     overLay.classList.toggle('show');
    // })
    buttonSearchMobile.addEventListener('click', () => {
        inputSearchMobile.classList.toggle('hide');

    })

})