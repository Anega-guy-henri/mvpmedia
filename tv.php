<?php
include(__DIR__.'/webpage/database.php');

$server1='mysql:host=localhost;dbname=mvpmedias';
$userName1='root';
$password1='';
$connect=new PDO($server1,$userName1,$password1);
if(!empty($_POST)){
        $query=$connect->prepare('INSERT INTO personne(nom_personne,mot_passe,mail) VALUES(:nom,:mdp,:mail)');
        $query->bindParam(':nom',$_POST['nom']);
        $query->bindParam(':mdp',$_POST['mdp']);
       $query->bindParam(':mail',$_POST['mail']);
       $query->execute();
       echo('ok');
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tv.css">
    <link rel="stylesheet" href="mediatv.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Docment</title>
</head>
<body>
    <!-- <header>
        <div class="logo">
           <p>MVP<span>MEDIAS</span></p>
           <h2>Regardons differemment</h2>
        </div>
        <ul>
           <li class="border-none"><a href="#" id="border" >TV</a></li>
           <li class="color-red"><a href="index.html" id="red" >Infos</a></li>
           <span class="material-symbols-outlined" id="google_translate_element">
            g_translate
            </span>
           <span class="material-symbols-outlined">
            tv
            </span>
        </ul>
        
   </header>
   <hr class="gray">
   <nav>
     <ul>
       <li><a href="index.php">Actualite</a></li>
       <li><a href="webpage/politique.html">Politique</a></li>
       <li><a href="#">Sport</a></li>
       <li><a href="#">Economie</a></li>
       <li><a href="sante.html" class="pv">Sante</a></li>
       <li><a href="#" class="pv">Education</a></li>
       <li><a href="#"class="index.php">Culture</a></li>
       <li><a href="webpage/logout.php"class="webpage/logout.php">Japap</a></li>
    </ul> 
   </nav>
   <hr class="red"> -->
    <div class="contener">
        <div class="left">
            <div class="left-top">
                <video controls poster="img/31 07 20 23 doff -9.png" src="vid/VID-20231225-WA0029.mp4" id="gvideo">
                 
                </video>
                <h1 id="gtitre">Le discours de ce millionnaire va debloquer votre Etat d'esprit</h1>
                <h1 style="display: none;">Mvp<span id="gpresentation">TV</span></h1>
                <div class="stat">
                    <div class="like">
                        <div class="i_like">
                            <span class="material-symbols-outlined">
                                thumb_down
                                </span>
                             <p>2,4K</p>
                        </div>
                        <div class="id_like">
                            <span class="material-symbols-outlined">
                                thumb_up
                                </span>
                            <p>2,4K</p>
                        </div>
                    </div>
                    <div class="partager"></div>
                    <div class="download">
                        <span class="material-symbols-outlined">
                            visibility
                            </span>
                        <p>Vue</p>
                    </div>
                </div>
           </div>
           <video src="VID-20231224-WA0036.mp4" width="100px" style="max-width:400px;height:500px;margin:auto;border-radius:0px;"></video>
        </div>
        <div class="right">
            <div class="direct">
                <video controls poster="img/AutoJosh.jpg" src="img/VID-20230828-WA0259.mp4" id="svideo1"  onclick=swapVideos(0)>
                    
                </video>
                <a href="#">
                    <h1 onclick="swapVideos(0)">Mvp<span id="spresentation1">Doc</span></h1>
                    <p onclick="swapVideos(0)" id="stitre1">Les metier de l'avion, zoom sur l'afrique.</p>
                </a>
            </div>
            <div class="direct">
                <video controls poster="img/1702809211559.jpg" src="vid/009 - Les constantes.mp4" id="svideo2"  onclick=swapVideos(1)>
                    
                </video>
                <a href="#">
                    <h1 onclick="swapVideos(1)">Mvp<span id="spresentation2">Sport</span></h1>
                    <p onclick="swapVideos(1)" id="stitre2">Can 2024, on s'en va la bas comme ca.</p>
                </a>
            </div>
            <div class="direct">
                <video controls poster="img/20230921180845_001 (2).jpg" src="img/VID-20230828-WA0259.mp4" id="svideo3"  onclick=swapVideos(2)>
                    
                </video>
                <a href="#">
                    <h1 onclick="swapVideos(2)">Mvp<span id="spresentation3">Cine</span></h1>
                    <p onclick="swapVideos(2)" id="stitre3">Destinee, un film de jean de dieu kamga.</p>
                </a>
            </div>
            <div class="direct">
                <video controls poster="img/pancakes.png" src="img/VID-20230828-WA0259.mp4" id="svideo4"  onclick=swapVideos(3)>
                    
                </video>
                <a href="#">
                    <h1 onclick="swapVideos(3)">Mvp<span id="spresentation4">Cuisine</span></h1>
                    <p onclick="swapVideos(3)" id="stitre4">Comment faire des pankaces en 5 min.</p>
                </a>
            </div>
            <div class="direct">
                <video controls poster="img/images (35).jpeg" src="img/VID-20230828-WA0259.mp4" id="svideo5"  onclick=swapVideos(4)>
                    
                </video>
                <a href="#">
                    <h1 onclick="swapVideos(4)">Mvp<span id="spresentation5">Info-sport</span></h1>
                    <p onclick="swapVideos(4)" id="stitre5">Toute l'actuelite sportive en direct et en replay.</p>
                </a>
            </div>
            <div class="direct">
                <video controls poster="img/lady-ponce-mariee.jpg" src="img/VID-20230828-WA0259.mp4" id="svideo6"  onclick=swapVideos(5)>
                    
                </video>
                <a href="#">
                    <h1 onclick="swapVideos(5)">Mvp<span id="spresentation6">Hits</span></h1>
                    <p onclick="swapVideos(5)" id="stitre6">Les musiques d'ici et d'ailleurs.</p>
                </a>
            </div>
        </div>
    </div>
    <aside>
    
        <ul class="main"> 
            <h1 style="color: rgb(16, 15, 15); text-align: center; margin:0  0 0 40%  ; background-color: rgba(255, 252, 252, 0.762); border-radius: 10px; padding:4px 10px;">MENU</h1>
            <li > <img src="img/FB_IMG_1697444010467.jpg" alt="" style="width: 50px; height: 50px;border-radius: 50%; "> <span></span></li>
            <li class="active" ><a href="#" >
                <div > <img src="img/user.jpeg" alt="" width="30px"></div>
                <span>User</span>
            </a></li>
            <li><a href="#">
                <div ><img src="img/images__3_-removebg-preview (1) (2).png" alt="" width="30px"></div>
                <span>
                    Rechercher
                </span>
            </a></li>
            <li><a href="#">
                <div > <img src="img/téléchargement (4).png" alt="" width="30px"></div>
                <span>Publier</span>
            </a></li>
            <li><a href="#">
                <div ><img src="twitter.png" alt=""></div>
                <span>Setting</span>
            </a></li>
            <li class="logout"><a href="#">
                <img src="img/images (8).png" alt="" width="30px">
                <span>Se Deconnecter</span>
            </a></li>
        </ul>
     </aside>
     <div class="contener3">
        <div class="actu">
            <div class="point2" style="width: 10px; height: 10px; background-color: red; border-radius: 50%;"></div>
            <h2>L'actualite en video</h2> 
            <hr>
        </div>
        <div class="border-radius">
            <ul>
                <li style="background-color: red; border-radius: 20px;padding: 4px; font-size: 1.2em;"><a href="#" style="color: white;">International</a></li>
                <li style="border-radius: 20px; border: 2px solid red;padding:4px  4px ; font-size: 1.2em;"><a href="#">Afrique</a></li>
                <li style="border-radius: 20px; border: 2px solid red;padding:4px  4px ; font-size: 1.2em;"><a href="#">Economie</a></li>
                <li style="border-radius: 20px; border: 2px solid red;padding:4px 4px ; font-size: 1.2em;">  <a href="#">Infos</a></li>
            </ul>
        </div>
             <video controls poster="img/Screenshot 2023-12-18 051042.png" width="600px">
                <source src="img/VID-20230828-WA0259.mp4" >
            </video> 
            <h4 style="color: red; font-weight: bolder; font-size: 1.2em;">Le journal International</h4>
            <h3>L'edition Du 12.10.2023 20h00(TU)</h3>
            <h5 style="color: red; font-size: 1.3em;">Titre</h5>
            <div class="titre">
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus iste ve</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus iste ve</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus iste ve</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus iste ve</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus iste ve</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus iste ve</li>
            </ul>
        </div>
    </div>
    <!-- <div class="cover" style="width: 98vw; height: 100vh; background-color:#e3dddd5e;position: absolute; top: 0;">
sdddd
    </div> -->
    <!-- <div class="formulaire">
        <h1>Connexion</h1>
        <form action="" method="post" >
            <div class="icon">
            <input type="text" placeholder="Nom d'utilisateur" name="nom">
            <span class="material-symbols-outlined" style="color:white;font-size:40px;">
                person
            </span>
            </div>
            <div class="icon">
            <input type="password" placeholder="MOT DE PASSE" name="mdp">
            <span class="material-symbols-outlined" style="color:white;font-size:40px; border: none;">
              lock_open
             </span>
            </div>
            <div class="icon">
                <input type="text" placeholder="e-mail" name="mail">
                <span class="material-symbols-outlined" style="color:white;font-size:40px; border: none;">
                    mail
                    </span>
                </div>
            <input type="checkbox" name="" id="" style="padding: 20px;">
            <label for="">voulez vous bnnnhgf</label> <br>
 <input type="submit" value="Connexion" class="sub">
 <a>Vous n'avez pas de compte ?</a>
 <a href="">Creer un compte</a>
        </form>
    </div>  -->
    <!-- <div class="formulaire" >
        <h1>Inscription</h1>
        <form action="" enctype="multipart/form-data" method="post" >
            <div class="icon">
            <input type="text" placeholder="Nom d'utilisateur" name="nom">
            <span class="material-symbols-outlined" style="color:white;font-size:40px;">
                person
            </span>
            </div>
            <div class="icon">
            <input type="password" placeholder="Mot de passe" name="mdp">
            <span class="material-symbols-outlined" style="color:white;font-size:40px; border: none;">
              lock_open
             </span>
            </div>
            <div class="icon">
                <input type="password" placeholder="Confiemer Mot de passe" >
                <span class="material-symbols-outlined" style="color:white;font-size:40px; border: none;">
                  lock_open
                 </span>
                </div>
            <div class="icon">
                <input type="text" placeholder="e-mail" name="mail">
                <span class="material-symbols-outlined" style="color:white;font-size:40px; border: none;">
                    mail
                    </span>
                </div>
 <input type="submit" value="Connexion" class="sub">
 <a>Vous avez pas de compte ?</a>
 <a href="">Se connecter</a>
        </form>
    </div> -->
    <script>
var bigVideo = document.getElementById('gvideo');
var smallVideos = [
document.getElementById('svideo1'),
document.getElementById('svideo2'),
document.getElementById('svideo3'),
document.getElementById('svideo4'),
document.getElementById('svideo5'),
document.getElementById('svideo6')
];
var bigtitre = document.getElementById('gtitre');
var smalltitres = [
document.getElementById('stitre1'),
document.getElementById('stitre2'),
document.getElementById('stitre3'),
document.getElementById('stitre4'),
document.getElementById('stitre5'),
document.getElementById('stitre6')
];
var bigpresentation = document.getElementById('gpresentation');
var smallpresentations = [
document.getElementById('spresentation1'),
document.getElementById('spresentation2'),
document.getElementById('spresentation3'),
document.getElementById('spresentation4'),
document.getElementById('spresentation5'),
document.getElementById('spresentation6')
];
function swapVideos(index) {
var clickedVideo = smallVideos[index];
var clickedtitre = smalltitres[index];
 var clickedpresentation = smallpresentations[index];
 var temppresentation=bigpresentation.textContent;
 bigpresentation.textContent=clickedpresentation.textContent;
 clickedpresentation.textContent=temppresentation;
var tempSrc = bigVideo.src;
var tempposter = bigVideo.poster;
bigVideo.src = clickedVideo.src;
clickedVideo.src = tempSrc;
bigVideo.poster = clickedVideo.poster;
clickedVideo.poster = tempposter;
var temptitre = bigtitre.textContent;
bigtitre.textContent = clickedtitre.textContent;
clickedtitre.textContent = temptitre;
}
function googleTranslate(){
    new google.translate.translateElement({pageLanguage: 'fr',includeLanguage: 'en',layout: google.translate.translateElement.InlineLayout.SIMPLE},'google_translate_element');
}
</script>
</body>
</html>