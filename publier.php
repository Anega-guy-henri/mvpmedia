<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_FILES["publier"])){
    var_dump($_FILES["publier"]);
    if($_POST['type']!='actualite'){
        echo"<script>alert('type d'information mal renseigne');</script>";
    }
    $targetDirectory="img/";
    $targetFile=$targetDirectory.basename($_FILES["publier"]["name"]);
    $fileType=pathinfo($targetFile,PATHINFO_EXTENSION);
    if ($fileType !='jpg' && $fileType !='jif' && $fileType !='webp' && $fileType !='png' && $fileType !='jpeg'){
        echo'seul les fichiers jpg, PNG et jpeg sont autorises ';
    }else{
        $image_info=getimagesize($_FILES['publier']['tmp_name']);
        $width=$image_info[0];
       echo $width;
       $height=$image_info[1];
       if(($width/$height)<1.16 || ($width/$height)>2 ){
         echo"Les dimensions de l'image ne sont pas bonne";
       }else{
        if(move_uploaded_file($_FILES["publier"]["tmp_name"],$targetFile)){
            echo'ok';
            if (!empty($_POST)) {
                $pdo=new PDO('mysql:host=localhost;dbname=mvpmedias','root','');
                $req=$pdo->prepare('INSERT INTO posts(title,corps,resumes,type_post,img_post,description_img,poster )VALUES(:title,:body,:resumes,:type_post,:img_post,:description_img,:poster)');
                $req->bindParam(':img_post',$_FILES['publier']['name']);
                $req->bindParam(':title',$_POST['title']);
                $req->bindParam(':body',$_POST['body']);
                $req->bindParam(':resumes',$_POST['resume']);
                $req->bindParam(':type_post',$_POST['type']);
                $req->bindParam(':description_img',$_POST['script1']);
                $req->bindParam(':poster',$_POST['poster']);
                $req->execute();
                echo'nouvelle insertion';
                 }
        }else{
            echo'paok';
        }

    }
    
       }
       
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/publier.css">
</head>
<body>
    <header>
        <div class="logo">
           <p>MVP<span>MEDIAS</span></p>
           <h2>Regardons differemment</h2>
        </div>
        <ul>
           <li class="border-none"><a href="tv.html" id="border" >TV</a></li>
           <li class="color-red"><a href="#" id="red" >Infos</a></li>
           <li><a href="#" id="lang" >Francaise</a></li>
           <!-- <li><a href="#" id="afrique" >Afrique</a></li> -->
           <li><a href="#">
            <img src="img/twitter.png" alt="" width="20px">
           </a></li>
        </ul>
        
    </header>
    <hr class="gray">
    <nav>
       <ul>
          <li><a href="index.html">Actualite</a></li>
          <li><a href="webpage/politique.html">Politique</a></li>
          <li><a href="#">Sport</a></li>
          <li><a href="#">Economie</a></li>
          <li><a href="#" class="pv">Sante</a></li>
          <li><a href="#" class="pv">Education</a></li>
          <li><a href="#"class="pv">Culture</a></li>
          <li><a href="#"class="pv">Japap</a></li>
        </ul> 
    </nav>
    <hr style="background-color: rgba(255, 0, 0, 0.493); border: 0.2px solid rgba(255, 0, 0, 0.46); height: 1px;">
    <hr class="red">
    <article>
        
    </article>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="left">
          <label for="">decrivez l'image</label>
          <input type="text" name="script1">
          <input type="file" class="claire" name="publier" id="publier" onchange="preveiwImage(event)">
          <img id="imgp" alt="" src="ll.jpg" name="img1" style="max-height:300px;max-width:400px">
        </div>
        <textarea name="body"  placeholder="Contenu de l'article"  style="min-height:400px;min-width:500px;font-size:1.7em;" ></textarea>
        <div class="right">
          <textarea name="resume" placeholder="resume du post" name="resume"></textarea>
          <input type="text" placeholder="inserer le titre du post" name="title" >
          <input type="text" placeholder="le type du post" name="type" class="type">
          <input type="text" placeholder="ou va etre affiche le post" name="poster" class="poster">
        </div>
        <input type="submit" value="ok" class="send">
    </form>
    <div class="list" >
    <h1>liste des posters</h1>
    <p>Information niveau1 no 1</p>
    <p>premiere slide no 1</p>
    <p>premiere slide no 2</p>
    <p>premiere slide no 3</p>
    <p>premiere slide no 4</p>
    <p>premiere slide no 5</p>
    <p>premiere slide no 5</p>
    <p>carre 1 image 1</p>
    <p>carre 1 image 2</p>
    <p>carre 1 image 3</p>
    <p>carre 1 image 4</p>
    <p>premiere autre info no 1</p>
    <p>premiere autre info no 2</p>
    <p>premiere autre info no 3</p>
    <p>premiere autre info no 4</p>
    <p>premiere autre info no 5</p>
    <p>premiere autre info no 6</p>
    <hr>
    <p>Information niveau1 no 2</p>
    <p>deuxieme slide no 1</p>
    <p>deuxieme slide no 2</p>
    <p>deuxieme slide no 3</p>
    <p>deuxieme slide no 4</p>
    <p>deuxieme slide no 5</p>
    <p>deuxieme slide no 5</p>
    <p>carre 2 image 1</p>
    <p>carre 2 image 2</p>
    <p>carre 2 image 3</p>
    <p>carre 2 image 4</p>
    </div>
    <script>
        var bouton=document.querySelector('.send');
        bouton.addEventlistener('click',checkClick);
        function checkClick(){
            var poster=document.querySelector('.poster');
            var typeDuPost=document.querySelector('.type');
            while((poster.textContent!='infor')){
                alert('kkkk');
            }
        }
        function preveiwImage(event){
            var file= event.target.files[0];
            var imageType=/image.*/;
            if(file.type.match(imageType)){
                var reader=new FileReader();
                reader.onload=function(e){
                    var img=document.getElementById("imgp");
                    img.src=e.target.result;
                    img.style.display="block";
                }
                reader.readAsDataURL(file);
            }else{
                alert('Impossible de d\'importer un tel fichier');
            }
        }
        function preveiwImage2(event){
            var file= event.target.files[0];
            var imageType=/image.*/;
            if(file.type.match(imageType)){
                var reader=new FileReader();
                reader.onload=function(e){
                    var img=document.getElementById("img");
                    img.src=e.target.result;
                    img.style.display="block";
                }
                reader.readAsDataURL(file);
            }else{
                alert('Impossible de d\'importer un tel fichier');
            }
        }
        
    </script>
</body>
</html>