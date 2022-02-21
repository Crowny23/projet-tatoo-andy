let leftAr = document.getElementById('leftAr');
let rightAr = document.getElementById('rightAr');
let nb = 0;
let scrSlider = ['./img/imageTattoo1.JPG', './img/imageTattoo2.JPG', './img/imageTattoo3.jpg', './img/imageTattoo4.jpg']

rightAr.addEventListener('click', function(){
    nb ++;
    if(nb > scrSlider.length-1){
        nb = 0;
    }
    document.getElementById('imgSlider').src = scrSlider[nb];

})
leftAr.addEventListener('click', function(){
    nb --;
    if(nb < 0){
        nb = 3;
    }
    document.getElementById('imgSlider').src = scrSlider[nb];

})
setInterval(() => {
    nb ++;
    if(nb > scrSlider.length-1 || nb < 0){
        nb = 0;
    }
    document.getElementById('imgSlider').src = scrSlider[nb];

}, 5000);