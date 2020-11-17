window.addEventListener("DOMContentLoaded",()=>{
    var footerTilte = document.querySelectorAll('.footer__support-title');
    var supportList = document.querySelectorAll('.footer__support-list');
    for(let i = 0 ; i < footerTilte.length ;i++){
        footerTilte[i].addEventListener('click',()=>{
            for(let i=0 ; i < supportList.length ; i++ ){
                supportList[i].classList.toggle('show');
            }
            
        })
    }
    
})