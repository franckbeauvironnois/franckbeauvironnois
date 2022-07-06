
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
    <script   
	src="https://code.jquery.com/jquery-3.6.0.js"
	integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
	crossorigin="anonymous"></script>
    <style type="text/css">
<?php include 'stylesheet.php'; ?>



</style>
    
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
     <br></br>
     
    <audio controls>
    <source src="John.mp3">
    <source src="hype_home.ogg">
    </audio>

      <h3>Mon adresse email : beauvironnoisfranck@outlook.fr</h3>          


<fieldset>

    <legend class="coor">Vos coordonnées </legend>

    <label for="nom"> Nom </label>
    <input type="text" name="nom" id="nom" />

    <label for="prenom"> Prénom </label>
    <input type="text" name="prenom" id="prenom" />

    <script>

$(document).ready(function(){
  $('#nom').keydown(function(){
     $(this).css('background-color','#69C');
}); 
$('#prenom').keyup(function(){
     $(this).css('background-color','#C72');

}); 

}); 

</script>
    
</fieldset>


    <form class="tel"method="post" action="traitement.php">
   
    <label for="tel">Téléphone </label>
    <input type="number" name="tel" id="tel" placeholder="Ex : 0254855200" size="10" maxlength="10" />


        <label for="email"> Email</label>
        <input type="email" name="email"id="email" placeholder="Ex : franck34@outook" size="30" maxlength="10" />

</form>

<script>

$(document).ready(function(){
  $('#tel').keydown(function(){
     $(this).css('background-color','#69C');
}); 
$('#email').keyup(function(){
     $(this).css('background-color','#C72');

}); 

}); 

</script>

<form class="pays" method="post" action="traitement.php">

    
        <label for="pays">Dans quel pays habitez-vous ?</label><br><br/>
        <select name="pays" id="pays">
            <option value="france">France</option>
            <option value="espagne">Espagne</option>
            <option value="italie">Italie</option>
            <option value="royaume-uni">Royaume-Uni</option>
            <option value="canada">Canada</option>
            <option value="etats-unis">États-Unis</option>
            <option value="chine">Chine</option>
            <option value="japon">Japon</option>
        </select>
</form>

<form class="ameliorer">

    <label>Comment pensez-vous,  que je pourrais améliorer mon site ?</label><br><br/>

    
    <textarea class="text" name="ameliorer" id="ameliorer" rows="10" cols="50"> </textarea>
              
    </form>



<p >
    Votre avis m'interesse, comment trouvez vous mon site ? <br />
    <input type="checkbox" name="trés bien" id="trés bien" /> <label for="trés bien">trés bien</label><br />
    <input type="checkbox" name="bien" id="bien" /> <label for="bien">bien</label><br />
    <input type="checkbox" name="moyen" id="moyen" /> <label for="moyen">moyen</label><br />
    <input type="checkbox" name="mauvais" id="mauvais" /> <label for="mauvais">mauvais</label>
</p>

<form action="submit_contact.php" method="GET" enctype="multipart/form-data">

<button type="submit"><span>Envoyer</span></button>

</form>



</body>


</html>
