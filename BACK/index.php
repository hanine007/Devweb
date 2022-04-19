<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
?>
<html>
<head>
<title>BookCars-Connecté</title>
<link rel="stylesheet" type="text/css" href="../CSS/style1.css">
<link rel="stylesheet" type="text/css" href="../CSS/style2.css">
<link rel="icon"  href="../images/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<meta name="viewport" content="width=device-width"/>
</head>
<body>
        <?php include 'header.php';?>
        
        
        
        <div class="colonne1" style="width: 9%; display:flex; float: left;height:100%;">
        <div class="icon">
            <a href="https://facebook.com" target="_blank"><img id="iconid" src="../images/fb.png"></a>
            <a href="https://twitter.com" target="_blank"><img id="iconid" src="../images/twt.png"></a>
            <a href="https://instagram.com" target="_blank"><img id="iconid" src="../images/insta.png"></a>
            <a href="https://linkedin.com" target="_blank"><img id="iconid" src="../images/in.png"></a>
        </div>
        <style>
            .icon a img {
                display: block;
            }
            
            .icon {
                height: auto;
                margin: 0 auto;
                margin-top: 60px;
            }
            
            #iconid {
                padding: 5px;
            }
        </style>

      </div>
        <div class="social_icon" style="width: 82%;margin:auto">
        <div class="slider">
          <div class="slide active">
            <img class="imgsize" src="../images/1.jpg" alt="">
            <div class="info">
              <h2>La location de voiture en mieux</h2>
              <p>Le libre-service, une révolution dans la location de voiture.</p>
            </div>
          </div>
          <div class="slide">
            <img class="imgsize" src="../images/2.jpg" alt="">
            <div class="info">
              <h2>Sans file d'attente, sans paperasse</h2>
              <p>Réservez et déverrouillez une voiture premium depuis votre smartphone, à tout moment.</p>
            </div>
          </div>
          <div class="slide">
            <img class="imgsize" src="../images/3.jpg" alt="">
            <div class="info">
              <h2>Des voitures qui donnent envie de conduire</h2>
              <p>Une voiture pour chaque occasion.</p>
            </div>
          </div>
          
          <div class="navigation">
            <i class="fas fa-chevron-left prev-btn"></i>
            <i class="fas fa-chevron-right next-btn"></i>
          </div>
          <div class="navigation-visibility">
            <div class="slide-icon active"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            
          </div>
        </div>
      
        

        <br>

       

       
        <!-- Texte -->
       
       <div class=txtcontainer>
            <div class="marge"></div>
            <div class="texte">
                <h2 class="offre">Nos offres du moment</h2>
            </div> 

       </div>

       <br>

      <!-- Les cartes de produits -->  
    <div class="row">
            <div class=containerrow >
            <div class="col1">
                <div class="card card1">
                    <img
                      src="../images/tesla.png"
                    />
                    <div class="card-content">
                      <h2>Tesla Model 3 </h2>
                      <p class="price">10000DA / jour</p>
                      <p>La voiture la plus cool est arrivée et elle est prête à électrifier votre voyage.</p>
                    </div>
              
                                        <button class="popup-btn"><a class="color_a" href="Location.php">Details</a></button>

                  </div>
            </div>
            <div class="col2">
                <div class="card card2">
                    <img
                      src="../images/kona.png"
                    />
                    <div class="card-content">
                      <h2>Hyundai Kona</h2>
                      <p class="price">6500DA / jour</p>
                      <p>Le SUV urbain 100% électrique offrant une autonomie à la hauteur de vos aventures.</p>
                    </div>
              
                                        <button class="popup-btn"><a class="color_a" href="Location.php">Details</a></button>

                  </div>
                
            </div>
            <div class="col3">
                <div class="card card3">
                    <img
                      src="../images/208.png"
                    />
                    <div class="card-content">
                      <h2>Peugeot 208</h2>
                      <p class="price">5000DA / jour</p>
                      <p>Une voiture compacte sans compromis, au meilleur rapport qualité prix.</p>
                    </div>
              
                                        <button class="popup-btn"><a class="color_a" href="Location.php">Details</a></button>

                  </div>
                
            </div>
          </div>
          <style> .popup-btn:hover{
            
            background-color: black;
          } </style>
            
            
           
    </div>

    <!--pubs-->

    <div class="row_pub">
      <div class="col1_pub">
          <div class="pub1">
              <img
                src="../images/dispo.jpg"
              />
              <div class="card-content">
                <h2>Disponible 24h/24 et 7j/7</h2>
                
                <p>Réservez et commencez votre location à tout moment : la nuit, le jour, quand vous voulez, en totale autonomie.<br/>
                <br/> </p>
              </div>
        
              
            </div>
      </div>
      <div class="col2_pub">
          <div class="pub2">
              <img
                src="../images/livraison.jpg"
              />
              <div class="card-content">
                <h2>Option de livraison </h2>
                <p>Gagnez du temps avec notre option de livraison, votre voiture est déposée devant votre porte. Au retour, un de nos voituriers viendra la récupérer.</p>
              </div>
        
          </div>
          
      </div>
      <div class="col3_pub">
          <div class="pub3">
              <img
                src="../images/premium.jpg"
              />
              <div class="card-content">
                <h2>Une voiture premium </h2>
                
                <p>SUV ou compacte, Tesla, Mercedes ou BMW, la voiture que vous conduisez est celle que vous avez réservée ! Chez nous, le modèle est garanti.</p>
              </div>
        
              
            </div>
          
      </div>
      
     
</div>
    
     <!-- Footer -->
    <div class="footer">
        
            <div class="left-foot-container">
                <h1 class="trfooter">" <span class="creative">ENJOY</span> DRIVING "</h1>
                <ul >
                  <li ><a class="colortxt"  id="clrfooter" href="index.php">Accueil</a></li>
                  <li><a class="colortxt" id="clrfooter" href="Location.php">Location</a></li>
                  
                  <li><a class="colortxt" id="clrfooter" href="../HTML/aboutus_user.html">À propos</a></li>
                  <li><a class="colortxt" id="clrfooter" href="../HTML/contactus_user.html">Nous contacter</a></li>
                </ul>
                <h4 class="copy">Copyright © 2021</h4>
                <div class="icon_f">
                    <a href="https://facebook.com" target="_blank"><img id="icon1" src="../images/icon1.png"></a>
                    <a href="https://twitter.com" target="_blank"><img id="icon2" src="../images/icon2.png"></a>
                    <a href="https://instagram.com" target="_blank"><img id="icon3"src="../images/icon3.png"></a>
                    <a href="https://linkedin.com" target="_blank"><img id="icon4"src="../images/icon4.png"></a>
                </div>
            </div>
       
        
    </div>
    </div>
    
   

</div>
<script type="text/javascript" src="../JavaScript/slider.js"></script>

</body>
</html>