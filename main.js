let leftAr = document.getElementById('leftAr');
let rightAr = document.getElementById('rightAr');
let nb = 1;
let scrSlider = ['./img/imageTattoo1.JPG', './img/imageTattoo2.JPG', './img/imageTattoo3.jpg', './img/imageTattoo4.jpg']

rightAr.addEventListener('click', function(){
    if(nb > scrSlider.length-1){
        nb = 0;
    }
    document.getElementById('imgSlider').src = scrSlider[nb];
    nb ++;
})
leftAr.addEventListener('click', function(){
    if(nb < 0){
        nb = 3;
    }
    document.getElementById('imgSlider').src = scrSlider[nb];
    nb --;
})
setInterval(() => {
    if(nb > scrSlider.length-1 || nb < 0){
        nb = 0;
    }
    document.getElementById('imgSlider').src = scrSlider[nb];
    nb ++;
}, 5000);