 <?php 
include(__DIR__.'/webpage/inscription.php');
include(__DIR__.'/webpage/affichage.php');
include(__DIR__.'/webpage/database.php');
$nompage='actualite';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="entete">
    
    <header>
        <div class="logo">
           <p>MVP<span>MEDIAS</span></p>
           <h2>Regardons differemment</h2>
        </div>
        <!-- <hr>  -->
        <ul>
           <li class="border-none"><a href="tv.php" id="border" >TV</a></li>
           <li class="color-red"><a href="#" id="red" >Infos</a></li>
           <li><a href="#" id="lang" >Francaise</a></li>
            <li><a href="#" id="afrique" >Afrique</a></li> 
           <!-- <li><a href="#">
             <img src="img/twitter.png" alt="" width="20px"> 
           </a></li> -->
        </ul>
        
    </header>
    <hr class="gray">
    <nav>
       <ul>
          <li><a href="#">Actualite</a></li>
          <li><a href="webpage/politique.html">Politique</a></li>
          <li><a href="#">Sport</a></li>
          <li><a href="#">Economie</a></li> 
          <li><a href="sante.html">Sante</a></li> 
          <li><a href="#" >Education</a></li>
          <li><a href="#">Culture</a></li>
          <li><a href="webpage/logout.php">Japap</a></li>
       </ul> 
    </nav>
    <hr style="background-color: rgba(255, 0, 0, 0.493); border: 0.2px solid rgba(255, 0, 0, 0.46); height: 1px;">
    <hr class="red"> 
    <article>
        <div class="contener1">
           <div class="flex-item1">
               <img src=<?="img/".$rowQSI1['img_post']?> alt="">
               <p><?=$rowQSI1['resumes']?></p>
            </div>
            <div class="flex-item2">
                <div class="grid-item1">
                <img src=<?="img/".$rowN2_1_1['img_post']?> alt="<?=$rowN2_1_1['description_img']?>">
                   <p><?=$rowN2_1_1['resumes']?></p>
                </div>
                <div class="grid-item">
                <img src=<?="img/".$rowN2_2_1['img_post']?> alt="<?=$rowN2_2_1['description_img']?>">
                   <p><?=$rowN2_2_1['resumes']?></p>
                </div>
                <div class="grid-item1"  >
                   <img src=<?="img/".$rowN2_3_1['img_post']?> alt="<?=$rowN2_3_1['description_img']?>">
                   <p><?=$rowN2_3_1['resumes']?></p>
                </div>
                <div class="grid-item">
                <img src=<?="img/".$rowN2_4_1['img_post']?> alt="<?=$rowN2_4_1['description_img']?>">
                   <p><?=$rowN2_4_1['resumes']?></p>
                </div>
                <div class="grid-item1" >
                <img src=<?="img/".$rowN2_5_1['img_post']?> alt="<?=$rowN2_5_1['description_img']?>">
                   <p><?=$rowN2_5_1['resumes']?></p>
                </div>
                <div class="grid-item" >
                <img src=<?="img/".$rowN2_6_1['img_post']?> alt="<?=$rowN2_6_1['description_img']?>">
                   <p><?=$rowN2_6_1['resumes']?></p>
                </div>
            </div>
             <div class="flex-item3">
                <div class="item-1">
                    <div class="input-1">
                    <P>En Direct</P>
                    <div class="point-rouge1"></div>
                </div>
                <div class="item-2">
                    <div class="direct">
                        <img src="img/<?=$rowPAI1['img_post']?>" alt="<?=$rowPAI1['description_img']?>">
                        <p class="description"><?=$rowPAI1['resumes']?></p>
                    </div>
                    <div class="direct">
                        <img src="img/<?=$rowPAI2['img_post']?>" alt="<?=$rowPAI2['description_img']?>">
                        <p class="description"><?=$rowPAI2['resumes']?></p>
                    </div>
                    <div class="direct">
                        <img src="img/<?=$rowPAI3['img_post']?>" alt="<?=$rowPAI3['description_img']?>">
                        <p class="description"><?=$rowPAI3['resumes']?></p>
                    </div>
                    <div class="direct">
                        <img src="img/<?=$rowPAI4['img_post']?>" alt="<?=$rowPAI4['description_img']?>">
                        <p class="description"><?=$rowPAI4['resumes']?></p>
                    </div>
                    <div class="direct">
                        <img src="img/<?=$rowPAI5['img_post']?>" alt="<?=$rowPAI5['description_img']?>">
                        <p class="description"><?=$rowPAI5['resumes']?></p>
                    </div>
                    <div class="direct">
                        <img src="img/<?=$rowPAI6['img_post']?>" alt="<?=$rowPAI6['description_img']?>">
                        <p class="description"><?=$rowPAI6['resumes']?></p>
                    </div>
                </div>
                <div class="item-3">
                    <a href=""> Plus D'actualite</a>
                </div>
            </div>
            
        </div> 
        </div>
        <div class="contener2">
        <header>
           <h1><?=$rowPC1['title']?></h1>
        </header>
        <main>
            <div class="left">
                <img src="img/<?=$rowPC1['img_post']?>" alt="<?=$rowPC1['description_img']?>">
                <a href=""> Actualite</a>
                <h3><?=$rowPC1['resumes']?></h3>
            </div>
            <div class="right">
                <div class="slider">
                    <img src="img/<?=$rowPC2['img_post']?>" alt="">
                    <div class="description">
                        <a href="">Actualite</a>
                        <p> <?=$rowPC2['resumes']?></p>
                    </div>
                </div>
                <div class="slider">
                    <img src="img/<?=$rowPC3['img_post']?>" alt="">
                    <div class="description">
                        <a href="">Actualite</a>
                        <p> <?=$rowPC3['resumes']?></p>
                    </div>
                </div>
                <div class="slider">
                    <img src="img/<?=$rowPC4['img_post']?>" alt="">
                    <div class="description">
                        <a href="">Actualite</a>
                        <p> <?=$rowPC4['resumes']?></p>
                    </div>
                </div>
            </div>
        </main>
         </div>
           <div class="div kkk" style="margin-top: 20px;">
           <div class="contener1">
           <div class="flex-item1">
               <img src=<?="img/".$rowQSI2['img_post']?> alt="<?=$rowQSI2['description_img']?>">
               <p><?=$rowQSI2['resumes']?></p>
            </div>
            <div class="flex-item2">
                <div class="grid-item1">
                <img src=<?="img/".$rowN2_1_2['img_post']?> alt="<?=$rowN2_1_2['description_img']?>">
                   <p><?=$rowN2_1_2['resumes']?></p>
                </div>
                <div class="grid-item">
                <img src=<?="img/".$rowN2_2_2['img_post']?> alt="<?=$rowN2_2_2['description_img']?>">
                   <p><?=$rowN2_2_2['resumes']?></p>
                </div>
                <div class="grid-item1"  >
                   <img src=<?="img/".$rowN2_3_2['img_post']?> alt="<?=$rowN2_3_2['description_img']?>">
                   <p><?=$rowN2_3_2['resumes']?></p>
                </div>
                <div class="grid-item">
                <img src=<?="img/".$rowN2_4_2['img_post']?> alt="<?=$rowN2_4_2['description_img']?>">
                   <p><?=$rowN2_4_2['resumes']?></p>
                </div>
                <div class="grid-item1" >
                <img src=<?="img/".$rowN2_5_2['img_post']?> alt="<?=$rowN2_5_2['description_img']?>">
                   <p><?=$rowN2_5_2['resumes']?></p>
                </div>
                <div class="grid-item" >
                <img src=<?="img/".$rowN2_6_2['img_post']?> alt="<?=$rowN2_6_2['description_img']?>">
                   <p><?=$rowN2_6_2['resumes']?></p>
                </div>
            </div>
             <div class="flex-item3">
                <div class="item-1">
                    <div class="input-1">
                    <P>En Direct</P>
                    <div class="point-rouge1"></div>
                </div>
                <div class="item-2">
                    <div class="direct">
                        <img src="img/<?=$rowDAI1['img_post']?>" alt="<?=$rowDAI1['description_img']?>">
                        <p class="description"><?=$rowDAI1['resumes']?></p>
                    </div>
                    <div class="direct">
                        <img src="img/<?=$rowDAI2['img_post']?>" alt="<?=$rowDAI2['description_img']?>">
                        <p class="description"><?=$rowDAI2['resumes']?></p>
                    </div>
                    <div class="direct">
                        <img src="img/<?=$rowDAI3['img_post']?>" alt="<?=$rowDAI3['description_img']?>">
                        <p class="description"><?=$rowDAI3['resumes']?></p>
                    </div>
                    <div class="direct">
                        <img src="img/<?=$rowDAI4['img_post']?>" alt="<?=$rowDAI4['description_img']?>">
                        <p class="description"><?=$rowPAI4['resumes']?></p>
                    </div>
                    <div class="direct">
                        <img src="img/<?=$rowDAI5['img_post']?>" alt="<?=$rowDAI5['description_img']?>">
                        <p class="description"><?=$rowDAI5['resumes']?></p>
                    </div>
                    <div class="direct">
                        <img src="img/<?=$rowDAI6['img_post']?>" alt="<?=$rowDAI6['description_img']?>">
                        <p class="description"><?=$rowDAI6['resumes']?></p>
                    </div>
                </div>
                <div class="item-3">
                    <a href=""> Plus D'actualite</a>
                </div>
            </div>
            
        </div> 
        </div>
        <div class="contener2">
        <header>
           <h1><?=$rowDC1['title']?></h1>
        </header>
        <main>
            <div class="left">
                <img src="img/<?=$rowDC1['img_post']?>" alt="<?=$rowDC1['description_img']?>">
                <a href=""> Actualite</a>
                <h3><?=$rowDC1['resumes']?></h3>
            </div>
            <div class="right">
                <div class="slider">
                    <img src="img/<?=$rowDC2['img_post']?>" alt="">
                    <div class="description">
                        <a href="">Actualite</a>
                        <p> <?=$rowDC2['resumes']?></p>
                    </div>
                </div>
                <div class="slider">
                    <img src="img/<?=$rowDC3['img_post']?>" alt="">
                    <div class="description">
                        <a href="">Actualite</a>
                        <p> <?=$rowDC3['resumes']?></p>
                    </div>
                </div>
                <div class="slider">
                    <img src="img/<?=$rowDC4['img_post']?>" alt="">
                    <div class="description">
                        <a href="">Actualite</a>
                        <p> <?=$rowDC4['resumes']?></p>
                    </div>
                </div>
            </div>
        </main>
         </div>
</div>  
        <div class="contener3">
        <div class="actu">
            <div class="point2" style="width: 10px; height: 10px; background-color: red; border-radius: 50%;"></div>
            <h2>MVP TV</h2> 
            <hr>
        </div>
             <video controls poster="img/Screenshot 2023-12-18 051042.png" width="600px">
                <source src="VID-20231224-WA0036.mp4" >
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
        <div class="contener3">
        <div class="actu">
            <div class="point2" style="width: 10px; height: 10px; background-color: red; border-radius: 50%;"></div>
            <h2>L'actualite en presse ecrite</h2> 
            <hr>
        </div>
             <video controls poster="img/Screenshot 2023-12-18 051042.png" width="600px">
                <source src="VID-20231224-WA0036.mp4" >
            </video> 
            <h4 style="color: red; font-weight: bolder; font-size: 1.2em;">La Revue De la presse</h4>
            <h3>L'edition Du 12.10.2023 20h00(TU)</h3>
            <h5 style="color: red; font-size: 1.3em;">Titre</h5>
        </div> 
        </article>
        <div class="cover"></div>
    <hr style="height: 3px; background-color: rgba(0, 0, 0, 0.916);"  style="margin-top: 150px !important;">  
    
        <div class="pied-de-page" style="text-align: center;">
          <a target="-blank" href="twitter.png">
            <img src="img/twitter.png" alt="logo twitter">
          </a>
          <a>
            <img src="img/instagram.png" alt="logo instagram">
          </a>
          <a href="#" style="font-size: 1.3em;">Contactez_nous</a>
          <a href="#" style="font-size: 1.3em;">MVP_MEDIAS@gmail.com</a>
        </div> 
        
       <!-- <script src="script.js">

        </script>
         <script>
var suivant=document.querySelector('.p-next');
suivant.addEventListener('click',changeSlider);
function changeSlider(){
  var tableau= document.querySelectorAll('.item-contain');
  tableau[0].style.transform='translateX(-25%)';
  tableau[1].style.transform='translateX(-25%)';
  tableau[2].style.transform='translateX(-25%)';
  tableau[3].style.transform='translateX(-25%)';
  tableau[4].style.transform='translateX(-25%)';
}
// function covere(){
//     alert('kj');
//     document.querySelector('.cover').style.display='block';
//     document.body.style.height='100vh';
//     document.body.style.overflow='hidden';
// }
// setTimeout(covere,'7000');
        </script> -->
</body>
</html>