<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="animated.css" />
    <link rel="stylesheet" href="carousel.css" />
    <script src="canvas.js"defer></script>
    <script src="carousel.js"defer></script>
    <script src="texteanime.js"defer></script>
    <script src="changepicture.js"defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <title>Document</title>
</head>
<body>

<nav>
    <ul>
                        
    <li><a href="/open/monsite/index.php">Accueil</a>
    <a href="/open/monblog/blog.php">Blog</a>
    <a href="/open/moncv/moncv.php">CV</a>
    <a href="/open/formulaire/form.php">Contact</a>
                    </li>
                    </ul>
                </nav>
                       
               <h1>Mes passions</h1> 
    
    

    <div id ="carrousel">
        <div id ="container">
        </div>

        <img src ="images/bouton.png" class ="bouton" id="d" />
        <img src ="images/bouton.png" class ="bouton" id="g" />

        <div class="control">
            <ul>

            <li class="selected"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>

            </ul>
    
        </div>
    </div>


 


      <h3 class="ml3">Magic the gathering</h3>
     

     <p>Magic est un de jeu de cartes stratégique, le  plus populaire au monde.  <br> </br>
         C'est ma passion première. <br> </br>
        Un mélange de monde féérique et infernal, où se joue les plus grandes batailles de planswalker. <br> </br>
        J'ai commancé ma collection en 2013, et mon premier deck est né. <br> </br>
        J'ai gagné plusieurs tournois et j'ai fini premier du classement en 2017 en Modern, mon format de prédilection. <br> </br>
        A l'heure d'aujourd'hui, je continue quand j'ai du temps libre en mode convivialité, <br> </br>
        car cela demande beaucoup d'investissement personnel et financier.
     </p>
     
    

    <div class= magic>
        <img class="img1" src="/open/monblog/images/Magic.jpg" alt=" images" />
      
        <img class="img2"src="/open/monblog/images/magic1.jpg" alt=" images" />
        
        <img class="img2"src="/open/monblog/images/magic2.jpg" alt=" images" />
    </div>



    <h3 class="ml4">Danses de couple latino</h3>

<h2> Bachata, Salsa, kizomba</h2>

<p>La musique a toujours été l'une de mes plus grandes passions. <br> </br>
    Se laisser balancer par le mouvement du son, chanter, bouger. Jamais le dernier sur le dancefloor. <br> </br>
    Apprendre des pas de danse qui ont traversé plusieurs générations. <br> </br>
    Et depuis qu'un ami m'a fait connaitre les danses à 2, j'adore que l'on me montre comment guider une partenaire. <br> </br>
    Cela parait simple, mais cela demande beaucoup de concentration, contrôle, ... et de l'ampathie.  <br> </br>
    J'ai commencé par la bachata, puis salsa, et je découvre la kiz que je mets de côté pour l'instant,  <br> </br>
    car les 3 sont bien différentes (tempo, énergie, passes, style). Mais diversifier me plait et permet de progresser.
    
</p>


<div class= section>
<audio class="music1" controls>
    <source src="bachata.mp3">
    <source src="bachata.ogg">
</audio>

<audio class="music2" controls>
    <source src="salsa.mp3">
    <source src="salsa.mp3">
</audio>

<audio class="music3" controls>
    <source src="kizomba.mp3">
    <source src="kisomba.ogg">
</audio>

    </div>

<p id="p-photo_Franck"><img id="photo_Franck" src="/open/monblog/images/danse1.jpg" alt="Photo de Franck" />
<img src="/open/monblog/images/danse2.jpg" alt=" images" />
<img class="img3" src="/open/monblog/images/danse3.jpg" alt=" images" /></p>

<h3 class="ml5">Vêtements et accessoires</h3>


<h2>La mode du prêt à porter</h2>

<p>La mode fait parti de moi, depuis mon adolescence. <br> </br>
    Je suis passé  par plusieurs styles du plus classic au plus fashion. <br> </br>
    J'en ai fait mon métier en tant que vendeur prêt à porter pour homme, il y a quelques années. <br> </br>
    J'adore conseiller des connaissances désirant changer de style.
</p>


<img class="mode" src="/open/monblog/images/mode.jpg" alt=" images" />
<br></br>

<h3 class="ml6">Retro gaming</h3>

<h2>Les jeux videos</h2>

<P>Née dans les années 80, j'ai été baigné dès la sortie europévenuenne des consoles venu du japon.
La nitendo, super nintedo, mégadrive.Mes aussi les premier née du nom genre Atari ou amsrad à l'époque 
des disquettes. En suite j'ai suivi le mouvement des consoles dernière génération tel que la playstation.</P>


<div class="slider">
<div class="slides">

    <div class="slide"><img src="/slider/images/nes.jpg" alt="" /></div>
    <div class="slide"><img src="/slider/images/supernes.jpg" alt="" /></div>
    <div class="slide"><img src="/slider/images/megadrive.jpg" alt="" /></div>
</div>
</div>

<div class = galeries>

<canvas id="canvas" width="400" height="300"></canvas>

<div class = "ryu">
<img src="/open/monblog/images/ryu.png" alt="">
<form>
<input type="button" id="theButton" value="click moi!" onmousedown="hado.play()"></imput>
</form>
</div>


<div class = "ken">
<img src="/open/monblog/images/ken.png" alt="">
<form>
<input type="button" id="theButton" value="click moi!" onmousedown="hado.play()"></imput>
</form>
</div>



<div id= "music">
<audio class="music" controls>
    <source src="street-fighter.mp3">
    <source src="street-fighter.ogg">
</audio>
</div>

</div>

<h2>Les mangas: Dragonball z</h2>

<div class="galerie">

<div id ="vege">

<img id="vege_img" src="images/vegeta.png">
<p class="b1" ><input type="button" id="theButton" value="click moi!" onclick="pictureChange1()"></p>
</div>



<div id ="sang">

<img id="sang_img" src="images/sangoku.png">
<p class="b2" ><input type="button" id="theButton" value="click moi!" onclick="pictureChange2()"></p>
</div>



<div id ="gohan">

<img id="gohan_img" src="images/gohan.png">
<p class="b3" ><input type="button" id="theButton" value="click moi!" onclick="pictureChange3()"></p>
</div>



<div id ="trunks">

<img id="trunks_img" src="images/trunks.png">
<p class="b4" ><input type="button" id="theButton" value="click moi!" onclick="pictureChange4()"></p>
</div>




<div >               
<p class= "nt"><span>NOTE!</span>Certaines images  utilisés ne m'appartienne pas sont juste un exemple mon site étant en local</p>
</div>  
 
</div>

 
</body>
</html>


