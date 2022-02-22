/*---SLIDER---*/
let leftAr = document.getElementById('leftAr');
let rightAr = document.getElementById('rightAr');
let circle = document.getElementsByClassName('circle');
let nb = 0;
let scrSlider = ['./img/imageTattoo1.JPG', './img/imageTattoo2.JPG', './img/imageTattoo3.jpg', './img/imageTattoo4.jpg', './img/imageTattoo5.jpg', './img/imageTattoo6.jpg', './img/imageTattoo7.jpg']

rightAr.addEventListener('click', function(){
    nb ++;
    if(nb > scrSlider.length-1){
        nb = 0;
    }
    document.getElementById('imgSlider').src = scrSlider[nb];
    for(let i = 0; i <= nb; i++){
        if(i == nb){
            circle[i].classList.add('active');
        }else{
            circle[i].classList.remove('active');
        }
        if(i == 0 && nb == 0){
            circle[scrSlider.length-1].classList.remove('active');
        }

        if(i > scrSlider.length){
            i = 0
        }
    }
})
leftAr.addEventListener('click', function(){
    nb --;
    if(nb < 0){
        nb = scrSlider.length-1;   
    }
    document.getElementById('imgSlider').src = scrSlider[nb];
    for(let i = 0; i <= nb; i++){
        if(i !== nb){
            circle[i].classList.remove('active');
        }else{
            circle[i].classList.add('active');
        }
        if(i == nb && nb < scrSlider.length-1){
            circle[i+1].classList.remove('active');
        }
        if(i == 0 && nb == 0){
            circle[scrSlider.length-1].classList.remove('active');
        }

        if(i > scrSlider.length){
            i = 0
        }
    }
})
setInterval(() => {
    nb ++;
    if(nb > scrSlider.length-1 || nb < 0){
        nb = 0;
    }
    document.getElementById('imgSlider').src = scrSlider[nb];

    for(let i = 0; i <= nb; i++){
        if(i == nb){
            circle[i].classList.add('active');
        }else{
            circle[i].classList.remove('active');
        }
        if(i == 0 && nb == 0){
            circle[scrSlider.length-1].classList.remove('active');
        }

        if(i > scrSlider.length){
            i = 0
        }
    }
}, 5000);

/*---MENU NAV---*/
let menu = document.getElementById('respons');

let icon = document.getElementById('topNav');

icon.addEventListener('click', function(){
    menu.classList.toggle('show')
})
