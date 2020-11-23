window.addEventListener("DOMContentLoaded",function(){
    // var productColorList = document.querySelectorAll('.product-color-item');
    // var color = ["red","blue","yellow","green"];
    // var homeProduct = document.querySelectorAll('.home-product');
    // for(let i = 0 ;i < homeProduct.length ; i++){

    //     for(let i = 0 ;i < productColorList.length;i++){
    //         productColorList[i].style.background = `${color[i]}`;
    //     }
    // }
    const wrapperChooseColor = document.querySelector('.wrapper-choose-color');
    wrapperChooseColor.addEventListener('click',()=>{
        wrapperChooseColor.classList.add('black-color');
    })
    const size = document.querySelectorAll('.size');
    size.forEach((item)=>{

        item.addEventListener('click',()=>{
            if(item.classList[0] == "black-color"){
                item.classList.remove('black-color')
            }else {
                size.forEach(item=>{
                    item.classList.remove('black-color');
                })
                item.classList.add('black-color');

            }

        })

    })
    const productImageSmalll = document.querySelectorAll('.product-image-small');
    const detailMainImage = document.querySelector('.detail-main-image') ;


    productImageSmalll.forEach(item=>{
        item.addEventListener('click',()=>{
            detailMainImage.src = item.src;

            productImageSmalll.forEach(item=>{
                item.style.border ="none";
            })
            item.style.border = "1px solid #9E9E9E";
        })
    })



})
