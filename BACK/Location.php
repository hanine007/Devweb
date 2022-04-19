
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <title>Location De Voiture</title>
    <link rel="stylesheet" href="../CSS/location.css" />
    <link rel="stylesheet" href="../CSS/style1.css" />
    <link rel="stylesheet" href="../CSS/style2.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/main.css" />
    <link rel="icon"  href="../images/favicon.png">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
  </head>
  <body>
  <?php include 'header.php'; ?>
  <style type="text/css">
        Header{
          margin-top:20px;
          margin-bottom:20px;
        }

  </style>
  <div class="contenu">
      <!--produit1-->
      <div class="produit">
        <div class="card card1">
          <img src="../images/208.png" />
          <div class="card-content">
            <h2>Peugeot 208</h2>
            <p class="price">5000DA/ jour</p>
            <h3>Une voiture type familiale</h3>

          </div>

          <button class="popup-btn">Details</button>
        </div>
        <div class="popup-view">
          <div class="popup-carte">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="produit-img">
              <img src="../images/208.png" alt="" />
            </div>
            <div class="info">
              <h2>Peugeot 208</h2>
              <p>
                La 208 est une voiture de segment B produite par le constructeur automobile français Peugeot et commercialisée à partir du 6 octobre 2019. Elle est la seconde génération de Peugeot 208, et succède à la première génération produite
                de 2012 à 2019. Elle est élue voiture européenne de l'année 2020.
              </p>
              <span class="price">5000DA / jour</span>







              <form action="config.php" >
  
  <input type="date" id="reservations" name="voiture " > < <input type="date" id ="reservations" name="voiture ">
  <textarea name="message" id="message" cols="50" rows="5" placeholder="Message"></textarea> 
  <button class="btn">Envoyer</button>
</form>




              <a href="#" class="add-cart-btn">Choisir</a>
            </div>
          </div>
        </div>
      </div>
      <!-- produit2-->

      <div class="produit">
        <div class="card card1">
          <img src="../images/kona.png" />
          <div class="card-content">
            <h2>Hyundai Kona</h2>
            <p class="price">6500DA / jour</p>
               <h3>Une voiture à l'attention des jeunes</h3>

          </div>

          <button class="popup-btn">Details</button>
        </div>
        <div class="popup-view">
          <div class="popup-carte">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="produit-img">
            <img src="../images/kona.png" />
            </div>
            <div class="info">
              <h2>Hyundai Kona</h2>
              <p>
                La Kona est un crossover urbain produit par le constructeur automobile corréen Hyundai Motor à partir d'octobre 20171. Elle remplace le Hyundai ix20 et veut enrichir la gamme Hyundai sur le segment des SUV compact alors en forte
                            croissance.
              </p>
              <span class="price">7500DA / jour</span>



              <form action="config.php" >
  
  <input type="date" id="reservations" name="voiture " > < <input type="date" id ="reservations" name="voiture ">
  <textarea name="message" id="message" cols="50" rows="5" placeholder="Message"></textarea> 
  <button class="btn">Envoyer</button>
</form>
              <a href="#" class="add-cart-btn">Choisir</a>
            </div>
          </div>
        </div>
      </div>
      <!-- produit3-->

      <div class="produit">
        <div class="card card1">
          <img src="../images/tesla.png" />
          <div class="card-content">
            <h2>Tesla Model 3</h2>
            <p class="price">10000DA/ jour</p>
            <h3>Une voiture conçu pour la sécurité</h3>

          </div>

          <button class="popup-btn">Details</button>
        </div>
        <div class="popup-view">
          <div class="popup-carte">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="produit-img">
            <img src="../images/tesla.png" />
            </div>
            <div class="info">
              <h2>Tesla Model 3</h2>
              <p>
                La sécurité a été l'aspect le plus important lors de la conception de la Model 3. Sa structure en métal allie acier et aluminium, pour une résistance maximale dans toutes les zones. Soumise à un test de résistance du toit, la Model
                3 a supporté quatre fois son propre poids.
              </p>
              <span class="price">20000DA / jour</span>
              <form action="config.php" >
  
  <input type="date" id="reservations" name="voiture " > < <input type="date" id ="reservations" name="voiture ">
  <textarea name="message" id="message" cols="50" rows="5" placeholder="Message"></textarea> 
  <button class="btn">Envoyer</button>
</form>
              <a href="#" class="add-cart-btn">Choisir</a>
            </div>
          </div>
        </div>
      </div>
      <!-- produit4-->

      <div class="produit">
        <div class="card card1">
          <img src="../images/polo.png" />
          <div class="card-content">
            <h2>Polo</h2>
            <p class="price">7000DA / jour</p>
            <h3> Elle a marqué toute une génération </h3>

          </div>

          <button class="popup-btn">Details</button>
        </div>
        <div class="popup-view">
          <div class="popup-carte">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="produit-img">
            <img src="../images/polo.png" />
            </div>
            <div class="info">
              <h2>Polo</h2>
              <p>
                Volkswagen Polo est une automobile, de la gamme des polyvalentes, de la marque allemande Volkswagen. Depuis sa commercialisation en 1975, six générations de polo se sont succédés.
              </p>
              <span class="price">9000DA / jour</span>
              <form action="config.php" >
  
  <input type="date" id="reservations" name="voiture " > < <input type="date" id ="reservations" name="voiture ">
  <textarea name="message" id="message" cols="50" rows="5" placeholder="Message"></textarea> 
  <button class="btn">Envoyer</button>
</form>
              <a href="#" class="add-cart-btn">Choisir</a>
            </div>
          </div>
        </div>
      </div>
      <!-- produit5-->

      <div class="produit">
        <div class="card card1">
          <img src="../images/gla 2020.png" />
          <div class="card-content">
            <h2>Mercedes-Benz Classe GLA</h2>
            <p class="price">10000DA/ jour</p>
            <h3>Une voiture de classe mondiale</h3>

          </div>

          <button class="popup-btn">Details</button>
        </div>
        <div class="popup-view">
          <div class="popup-carte">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="produit-img">
            <img src="../images/gla 2020.png" />
            </div>
            <div class="info">
                <h2>Mercedes-Benz </h2><br>
                <h2>Classe GLA</h2>
                <p>Le Mercedes-Benz Classe GLA est une gamme d'automobile crossover compact du constructeur allemand Mercedes-Benz. Dérivée de la Classe A Type 176, elle est lancée en avril 2014 (Type 156) puis en 2020 (Type 247).</p>

              <span class="price">12000DA / jour</span>
              <form action="config.php" >
  
  <input type="date" id="reservations" name="voiture " > < <input type="date" id ="reservations" name="voiture ">
  <textarea name="message" id="message" cols="50" rows="5" placeholder="Message"></textarea> 
  <button class="btn">Envoyer</button>
</form>
              <a href="#" class="add-cart-btn">Choisir</a>
            </div>
          </div>
        </div>
      </div>
      <!-- produit6-->

      <div class="produit">
        <div class="card card1">
          <img src="../images/x1.png" />
          <div class="card-content">
            <h2>BMW X1</h2>
            <p class="price">11000DA / jour</p>
            <h3>Une voiture de classe premium </h3>

          </div>

          <button class="popup-btn">Details</button>
        </div>
        <div class="popup-view">
          <div class="popup-carte">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="produit-img">
            <img src="../images/x1.png" />
            </div>
            <div class="info">
                <h2>BMW X1</h2>
                <p>La BMW X1 est une automobile de type crossover d'entrée de gamme produite par la marque allemande BMW depuis octobre 2009. Deux générations de ce modèle sont produites actuellement.</p>

              <span class="price">9000DA / jour</span>
              <form action="config.php" >
  
  <input type="date" id="reservations" name="voiture " > < <input type="date" id ="reservations" name="voiture ">
  <textarea name="message" id="message" cols="50" rows="5" placeholder="Message"></textarea> 
  <button class="btn">Envoyer</button>
</form>

              <a href="#" class="add-cart-btn">Choisir</a>
            </div>
          </div>
        </div>
      </div>

            <!-- produit7-->

            <div class="produit">
                <div class="card card1">
                  <img src="../images/2008.png" />
                  <div class="card-content">
                    <h2>Peugeot 2008</h2>
                    <p class="price">9000DA / jour</p>
                    <h3> Un crossover Peugeot robuste   </h3>
        
                  </div>
        
                  <button class="popup-btn">Details</button>
                </div>
                <div class="popup-view">
                  <div class="popup-carte">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="produit-img">
                    <img src="../images/2008.png" />
                    </div>
                    <div class="info">
                        <h2>Peugeot 2008 </h2><br>
                        <p>Elle est proposée avec les moteurs de la Peugeot 208 depuis son lancement commercial, le 26 avril 2013, et remplace au catalogue la Peugeot 207 SW.</p>
        
                      <span class="price">10000DA / jour</span>
                      <form action="config.php" >
  
  <input type="date" id="reservations" name="voiture " > < <input type="date" id ="reservations" name="voiture ">
  <textarea name="message" id="message" cols="50" rows="5" placeholder="Message"></textarea> 
  <button class="btn">Envoyer</button>
</form>
                      <a href="#" class="add-cart-btn">Choisir</a>
                    </div>
                  </div>
                </div>
              </div>

                    <!-- produit8-->

      <div class="produit">
        <div class="card card1">
          <img src="../images/class a.png" />
          <div class="card-content">
            <h2>Mercedes-Benz Classe A</h2>
            <p class="price">10000DA / jour</p>
            <h3>Une voiture type polyvalente </h3>

          </div>

          <button class="popup-btn">Details</button>
        </div>
        <div class="popup-view">
          <div class="popup-carte">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="produit-img">
            <img src="../images/class a.png" />
            </div>
            <div class="info">
                <h2>Mercedes-Benz </h2><br>
                <p>Des systèmes de sécurité ultra-modernes transforment votre Mercedes Classe A en un compagnon de route vigilant. En cas d'urgence, ils peuvent réagir automatiquement et sont d'une grande aide pour le conducteur. Voilà une voiture
                  qui n'est jamais trop prudente.</p>
              <span class="price">10000DA / jour</span>
              <form action="config.php" >
  
  <input type="date" id="reservations" name="voiture " > < <input type="date" id ="reservations" name="voiture ">
  <textarea name="message" id="message" cols="50" rows="5" placeholder="Message"></textarea> 
  <button class="btn">Envoyer</button>
</form>
              <a href="#" class="add-cart-btn">Choisir</a>
            </div>
          </div>
        </div>
      </div>

            <!-- produit9-->

            <div class="produit">
                <div class="card card1">
                  <img style="height:243px" src="../images/clio.png" />
                  <div class="card-content">
                    <h2> Renault CLIO 4</h2>
                    <p class="price">3000DA / jour</p>
                    <h3>Une berline compacte aux lignes sensuelles</h3>
        
                  </div>
        
                  <button class="popup-btn">Details</button>
                </div>
                <div class="popup-view">
                  <div class="popup-carte">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="produit-img">
                    <img src="../images/clio.png" />
                    </div>
                    <div class="info">
                        <h2>Renault CLIO 4 </h2><br>
                        <p>Irrésistible, CLIO vous séduit par le charme de son intérieur. Matériaux soignés, sièges aux finitions raffinées, Sans oublier sa tablette tactile embarquée Media Nav de 7 pouces. À bord confort et modernité ne font qu’un.</p>
        
                      <span class="price">3000DA / jour</span>
                      <form action="config.php" >
  
  <input type="date" id="reservations" name="voiture " > < <input type="date" id ="reservations" name="voiture ">
  <textarea name="message" id="message" cols="50" rows="5" placeholder="Message"></textarea> 
  <button class="btn">Envoyer</button>
</form>
                      <a href="#" class="add-cart-btn">Choisir</a>
                    </div>
                  </div>
                </div>
              </div>

              <style> .popup-btn:hover{
                cursor: pointer;
                background-color: black;
              } </style>
    </div>

    
    
    <script src="https://unpkg.com/flickity@2.0.11/dist/flickity.pkgd.min.js"></script>
  



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
  
<script type="text/javascript" src="../JavaScript/card_detail.js"></script>
</body>

</html>