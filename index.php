<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" size="16x16" type="image/png" href="./img/logo-tattoo-projet.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tattoo 69</title>
    <meta name="description" content="Voici le nouveau salon de Tatouage à Lyon Venez cliquer !">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <aside class="bgTattooH">
            <figure class="logoH">
                <img class="imgLogoH" src="./img/logo-tattoo-projet.png" alt="Logo">
                <h1 class="titleH">TATTOO69</h1>
            </figure>

            <p class="sloganH">"Les beaux souvenirs ne meurent jamais"</p>
        </aside>
    </header>
    <main>
        <section id="sliderNav" class="slider">
            <div id="leftAr" class="arrows ar-left"><</div>
            <article id="slider" class="imgSliderTattoo"><img width="100%" id="imgSlider" src="./img/imageTattoo1.JPG" alt=""></article>
            <div id="rightAr" class="arrows ar-right">></div>
        </section>
        <section id="equipeNav" class="presentation">
            <article class="textPre">
                <h2 class="titlePre">Présentation du salon</h2>
                <p class="resumePre">Créateur de tatouage depuis 1985, notre métier est notre passion. une notre manière d'exprimer son art.</p>
                <aside class="tattooGuys">
                    <div class="roundBox size tatoueur">
                        <img class="size" src="./img/pexels-photo-2269872.jpeg" alt="image de tatoueur">
                    </div>
                    <div class="roundBox size designer">
                        <img class="size" src="./img/woman-g61e31a92e_1920.jpg" alt="image de tatoueur">
                    </div>
                    <div class="roundBox size manager">
                        <img class="size" src="./img/people-gf69d118b2_640.jpg" alt="image de tatoueur">
                    </div>
                </aside>
            </article>
        </section>
        <section id="contactHorNav" class="formHoraire">
            <form class="formulaire box" action="#" method="POST" enctype="form-data">
                <h3 class="titleF">CONTACT</h3>
                <label for="lastname">Nom :*</label>
                <input class="inputF" type="text" name="lastname" id="lastname" required>
                <label for="firstname">Prénom :*</label>
                <input type="text" class="inputF" name="firstname" id="firstname" required>
                <label for="mail">Email :*</label>
                <input type="email" class="inputF" name="mail" id="mail" required>
                <label for="tattoo">Zone de tatouage :</label>
                <input type="text" class="inputF" name="tattoo" id="tattoo">
                <label for="sizeOfTattoo">Taille de votre tattoo : En cm<input type="number" class="inputF" name="sizeOfTattoo" id="sizeOfTattoo"> </label>
                <label for="imgTattoo">Joindre une image :</label>
                <input type="file" name="imgTattoo" id="imgTattoo">
                <input type="submit" name="submit" value="Envoyer">
            </form>
            <article class="horaire box">
                <p class="horaireT">Du lundi au vendredi</p>
                <time>9h00-12h00</time>
                <time>14h00-19h00</time>
                <p class="horaireT">Samedi</p>
                <time>8h00-20h00</time>
            </article>
        </section>
    </main>
    <footer>
    <section class="haut">
        <article class="logo">
            <img src="./img/Group2.png" alt="Logo">
            <img class="nom" src="./img/tatoo69.png" alt="TATTOO69">
        </article> 
        <article class="reseaux">
            <p>Reseaux Sociaux</p>
            <aside class="log">
                <a href="https://www.instagram.com/?hl=fr" target="_blank" rel="noopener noreferrer"><img src="./img/insta.png" alt="insta"></a>
                <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><img src="./img/facebook.png" alt="facebook"></a>
                <a href="https://twitter.com/?lang=fr" target="_blank" rel="noopener noreferrer"><img src="./img/tweeter.png" alt="tweeter"></a>
            </aside>
        </article>
    </section>    
    <section class="contact">
        <article class="footer1">
            <p> 32,avenue marechal foch-69600 Lyon 6e <br>
                sortie métro Foch <br>
                04-78-25-63-57 <br>
                <a href="mailto:tatoo69@tatoo.fr">tatoo69@tatoo.fr</a>
            </p>
        </article>
        <article class="footer2">
            <p>DU LUNDI AU VENDREDI <br>
                9H-12H ET 14H-19H  <br>
                SAMEDI <br>
                8H-20H</p>
        </article> 
    </section>  
</footer>
    <script src="./main.js"></script>
</body>
</html>