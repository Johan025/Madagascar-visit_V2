<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta name="description"
    content="Madagascar Visit is a local Tour guid in Madagascar, For your Holidays in Madagascar .It's a pleasure for us to guid you through our beautiful country, Madagascar Visit est un guide touristique local à Madagascar, pour vos vacances à Madagascar, c'est un plaisir pour nous de vous guider à travers notre beau pays.">
  <meta name="keywords"
    content="Holidays Madagascar, Tour Guid Madagascar, Visit Madagascar, Madagascar birding Tour, Madagascar Circuit Tour, Madagascar Travel Tour, Madagascar Tour Package, Madagascar exclusive Tour, LEMURS, baobab, Adansonia, Chameleon, INDRI INDRI, AYE AYE, MAKI CATTA, SIFAKA, Madagascar Tour, Madagascar travel, Madagascar Trip , Madagascar Holidays, Madagascar Guid, Visit Madagascar, Tour of Madagascar ">
  <title>Madagascar visite tours</title>
  
  <link rel="icon" type="image/x-icon" href="../../logo/madagascar-visite-ico.png">
  <link rel="stylesheet" href="east.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Signika:wght@600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

</head>

<body>

<?php

function validerEmail($email) {

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $domain = explode('@', $email)[1];

    if (getmxrr($domain, $mxhosts)) {
        return true; // L'adresse e-mail est valide
    } else {
        return false; // Le domaine de messagerie n'a pas d'enregistrements MX
    }
} else {
    return false; // L'adresse e-mail a une syntaxe incorrecte
}
}

$bd= new PDO('mysql:host=localhost;dbname=md_comment','root','');

$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

if (isset($_POST['send'])){
    
    var_dump($_GET['submit']); 
    $email=$_POST['email'];
    $name=$_POST['name'];
    $coms=$_POST['coms'];
    $date = date("Y-m-d H:i:s");
    

    if (validerEmail($email)) {
    $requete1=$bd ->prepare('INSERT INTO md_comments(comment_author,comment_author_email,comment_content,comment_date) VALUES(:nom, :adresse_email, :coms, :date)');
    $requete1->bindvalue(':nom', $name);
    $requete1->bindvalue(':adresse_email', $email);
   $requete1->bindvalue(':coms', $coms);
   $requete1->bindvalue(':date', $date);
   $requete1 ->execute();

   echo" <script type=\"text/javascript\">alert ('commentaire envoyé')</script>";
  }
}
  ?> 

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="nav">
    <div class="container-fluid">
      <!-- Logo ou titre -->
      <a class="navbar-brand" href="#"><img class="logo" src="../../logo/madagascar-visite-logo.png"></a>

      <!-- Bouton pour les petits écrans -->
      <button class="navbar-toggler bg-warning text-light" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Contenu de la navbar -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-dark" href="./../../index.php"><i class="fa-solid fa-house  text-dark"></i> Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <div class="active"></div>
              <i class="fa-solid fa-car text-dark"></i> Our tour
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="./../north/north.php">NORTH Tour</a></li>
              <li><a class="dropdown-item" href="./../south/south.php">SOUTH Tour</a></li>
              <li><a class="dropdown-item" href="#">EAST Tour</a></li>
              <li><a class="dropdown-item" href="./../weast/weast.php">WEAST Tour</a></li>
              <li><a class="dropdown-item" href="./../adventures/adventures.php">Adventures Tour</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-sm text-dark" href="../../index.php#book"><i class="fa-solid fa-book text-dark"></i> GUESTBOOK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="../../index.php#about"><strong><i class="fa-solid fa-info"></i></strong> About us</a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="../../index.php#tour" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="./../../logo/ang.jpg" class="drap" alt=""> English
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="./../../circuits_francais/est/est.php"> <img src="./../../pictures/francais.png" class="drap" alt="">  French</a></li>
                </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="couv">
    <div class="w-100" id="couv_"><img src="../pictures/COUVERTURE_EST.jpg" class="w-100"></div>
    <div class="w-100" id="couv_1"><img src="../pictures/EST.jpg" class="w-100"></div>
   
    <h1 class="text-center">Madagascar Holidays to the East Part</h1>

    <!-- <div class="couvertureNord-responsive"><img src="../pictures/couvertureNord-responsive.jpg" alt=""></div> -->
  </div>


  <div class="north">
    <h1 class=" title_north  text-start text-md-start">Tour detail

    </h1>
    <div class="border_"></div>
    <p class="desc fs-5 mx-5">The biggest lemur’s INDRI INDRI in Andasibe park ,with his magical call in the
      morning . Madagascar Excotic reserve which gives you opportunity to see different chameleons, reptiles, Vakona
      reserv that you have possibility to see come close the lemurs without forgetting the night walking that you gives
      you opportunity to see the microcebus or mouse lemurs, the smallest lemurs in the world with 50g of weight , frog
      , chameleon …
      <br><br> We propose you : <br>
        -Classical East Tour
      <br>-East Tour in the channel of Pangalane and Palmarium
      <br>- Sainte-Marie 
      <br><br>


    </p>

 

  </div>

  <div class="east_day" id="section1">
    <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> About 9 days</h3>
    <div class="point text-start" id="point"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">Classical East Tour</h1>

    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner" id="inner">
        <div class="carousel-item active">
          <img src="./../../pictures/s.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../../pictures/sary2.jpg" class="d-block w-100" alt="...">
        </div>
         <div class="carousel-item">
          <img src="./../../pictures/elmet.jpg" class="d-block w-100" alt="...">
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <h1 class="text-center" id="plan1">Travel Plan</h1>
    <div class="  text-center borde1"> </div>

    <div class="container-fluid" id="cont">
      <div class="row gy-5">
        <div class=" col-10 w-100 col-md-7">
          <div class="bg-md-danger p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 1:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0">
              Assistance at the airport, and transfer to the hotel.
              If you have time, going to the point of view that you can see Antananarivo and his area
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 2:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> TANA-ANDASIBE</h2>
            <p class="p-0"> Departure in the morning for Andasibe, going through the green scenery.
              Stop at Madagascar Exotic reserve, which is reputed for its butterflies, frogs,chameleons, reptiles,
              batrachians, and crocodiles.
              Night walk to spotting the nocturnal lemurs known as the smallest of the lemurs in the world.
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 3:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Andasibé </h2>
            <p class="p-0 fs-4.8"> Visit of Andasibe Park . You will have opportunity to observe the
              INDRI-INDRI , the biggest lemur, endemic to the island,Orchids, ferns as well as birds.
              Visit of Vakona reserve which gives you opportunity to see the lemurs jumping in your shoulders
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 4:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Andasibé - Tamatave - Mahambo</h2>
            <p class="p-0 fs-4.8">Departure for Toamasina, through green hills and mountains, composed of
              bambous, traveller’s trees and palms. Stop to visit the coastal town of Tamatave,which is also the biggest
              Port of Madagascar, then continue to Mahambo , following the East luxuriant coast of Madagascar.
              <br> Overnight at the hotel.
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 5:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Mahambo - Sainte-Marie</h2>
            <p class="p-0 fs-4.8">Mahambo , village of embarcader that you will take boat to Sainte Marie
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 6, Day 7, Day 8:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Sainte-Marie</h2>
            <p class="p-0 fs-4.8">Trip to Sainte-Marie
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 9:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0 fs-4.8">Transfert to the airport for your international flight
            </p>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="east_day_pang" id="section2">
    <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> About 7 days</h3>
    <div class="point text-start" id="point"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">East Tour in the channel of Pangalane and Palmarium</h1>

    <div id="carouselExampleControl" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner" id="inner">
        <div class="carousel-item active">
          <img src="./../../pictures/aye.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../../pictures/ravinala.avif" class="d-block w-100" alt="...">
        </div>
       
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <h1 class="text-center" id="plan1">Travel Plan</h1>
    <div class="  text-center borde1"> </div>

    <div class="container-fluid" id="cont">
      <div class="row gy-5">
        <div class=" col-10 w-100 col-md-7">

          <div class="bg-md-danger p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 1:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0">
              Assistance at the airport, and transfer to the hotel.
              If you have time, going to the point of view that you can see Antananarivo and his area
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 2:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> TANA-ANDASIBE</h2>
            <p class="p-0"> Departure in the morning for Andasibe, going through the green scenery.
              Stop at Madagascar Exotic reserve, which is reputed for its butterflies, frogs,chameleons, reptiles,
              batrachians, and crocodiles.
              Night walk to spotting the nocturnal lemurs known as the smallest of the lemurs in the world.
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 3:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Andasibé </h2>
            <p class="p-0 fs-4.8"> Visit of Andasibe Park . You will have opportunity to observe the
              INDRI-INDRI , the biggest lemur, endemic to the island,Orchids, ferns as well as birds.
              Visit of Vakona reserve which gives you opportunity to see the lemurs jumping in your shoulders
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 4:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Andasibé - Manambato - Akanin ' ny nofy</h2>
            <p class="p-0 fs-4.8">Drive Andasibe to Manambato ; then boat speed Manambato to Ankanin'ny nofy
              (Palmarium) ,boarding the lake RASOABE, RASOAMASAY exit to the Pangalane's channel
              Cruise in the Channel of Pangalane gives you opportunity to see the real life of the people living
              alongside
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 5:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Palmarium Reserve</h2>
            <p class="p-0 fs-4.8">Visit of the Palmarium reserv . Only the reserv that you have opportunity to
              come close to the Indri indri and the another species of lemurs in the forest such as crowned lemur,black
              and white ruffed lemur,red fronted brown lemur ; the plantation of vanilla , niaouly .
              Visit of fisherman village in the afternoon
              Night walking specially for the lemurs AYE AYE
              AYE AYE : endangered lemurs
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 6:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankanin' ny nofy(Palmarium) - Manambato</h2>
            <p class="p-0 fs-4.8">Boat speed Akanin’ny nofy to Manambato , then car for coming back to
              Antananarivo
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 7:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0 fs-4.8">City tour in Tana , visit of lemur’s park , digue”s market
              <br> Transfert to the airport for the international flight
            </p>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="sainte-marie" id="section3">
    <!-- <h3 class="text-center text-md-start"><i class="fa-solid fa-clock"></i> About 9 days</h3> -->
    <div class="point text-center" id="point3"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">Sainte-Marie Town</h1>

    <div id="carouselExampleControl2" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner" id="inner">
        <div class="carousel-item active">
          <img src="./../pictures/sainte-marie1.jpg" class="d-block w-100" alt="...">
        </div>
      </div>

    </div>

    <div class="container-fluid" id="cont">
      <div class="row gy-5">
        <div class=" col-10 w-100 col-md-7">
          <div class="bg-md-danger p-3 rounded">
            <h2 id="s"><i class="fa-solid fa-location-dot"></i> Sainte-Marie</h2>
            <p class="p-1">
              Sainte Marie's Island with his cliché of tropical ,like a post card offers you a endless long beaches overhung by coconut palms, fisheman village.
              It's a place of appointement for the whales
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7 mt-6">
          <div class="bg-md-danger bg-light p-3 rounded">

            <h2><i class="fa-solid fa-circle fa-flip all"></i> Les activités possibles à Sainte-Marie: </h2>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7 -mt-5">
          <div class="bg-light p-3 rounded">

            <p class="p-1">
             <br> • Surf et plongée sous marine 
             <br> • Location de motocyclette ou quad pour visiter le nord de lîle où se trouve la piscine naturelle , comme l' aquarium 
             <br> • Sainte Marie est seulement 50 km de long et 7km de large 
             <br> • Observation des baleines à bosses de juillet à septembre
             <br> • Visite des cimétiéres de pirates 
            </p>
          </div>
        </div>

      </div>

    </div>
  </div>

  <div class="galerie">
  <h1 text="text-start w-75">Galerie Photo </h1>
  <div class="border5"></div>

  <div class="container">
       <div class="row">
           <div class="col-12 col-md-4 col-lg-3">
             
               <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../../pictures/PALMARIUM.jpg" class="zoomable-image" alt="East of Madagascar Palmarium">
           </div>
           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../../pictures/micro.jpg" class="zoomable-image" alt="microcebus little mouse east of Madagascar">
           </div>
           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../../pictures/papillon.jpg" class="zoomable-image" alt="comet of Alley East of Madagascar">
           </div>

           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../../pictures/east4_n.jpg" class="zoomable-image" alt="Nepenthes Madagascar East of Madagascar Palmarium">
           </div>

           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../../pictures/east6_o.jpg" class="zoomable-image" alt="Leafted gecko Parc National Andasibé East of Madagascar">
           </div>

           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../../pictures/indri.jpg" class="zoomable-image" alt="Indri Indri East of Madagascar Parc National of Andasibé Mantadia">
           </div>

           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../../pictures/madagascar-flycatcher.webp" class="zoomable-image" alt="Madagascar Fly-catcher Parc National Andasibe Mantadia">
           </div>

           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../../pictures/SAINTE MARIE1n.jpg" class="zoomable-image" alt="WhaleWatching Sainte-Marie East of Madagascar">
           </div>
       </div>
  </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8">
        <div id="map"></div>
      </div>

      <div class="col-12 col-md-10 col-lg-4" id="coms">
        <div class="comments p-4">
          <h1 id="h_comments">Leave us a comments</h1>
          <div class="borde2"></div>

          <form action="" method="POST" onsubmit="return checkWordCount(this, 120);">
            <div class="row gy-5">
              <input type="email" name="email" class="w-100" placeholder="Your email">
              <input type="text" name="name" class="w-100" placeholder="Your name" id="name">
              <textarea type="text" name="coms" class="w-100" placeholder="Your comments" id="coms"></textarea>
              <button type="submit" name="send" class="btn p-2">Send</button>
            </div>
          </form>
        </div>

      </div>

    </div>

  </div>

  <div class="up" id="Button"><i class="fa-solid fa-chevron-up"></i></div>

<footer class="w-100 bg-dark">
        <div class="container">
            <div class="row gx-3">
                <div class="col-12 col-md-9 col-lg-3">
                    <div class="follow">
                        <h1 class="text-light text-center text-md-center text-lg-start">Follow us on </h1>
                        <div class="d-flex text-center text-md-start" id="row">
                            <a href="https://web.facebook.com/madagascarvisite" target="_blank" id="item_1"><i class="icon fa-brands fa-facebook-f -ms-5"></i></a>
                            <a href="https://www.linkedin.com" target="_blank"><i class="icon fa-brands fa-linkedin-in"></i></a>
                            <i class="icon fa-brands fa-twitter"></i>
                            <i class="icon fa-brands fa-whatsapp"></i>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-7 mt-md-5 mt-lg-0 col-lg-3">
                    <div class="links text-center text-md-center">
                        <h1 class="text-light">Quick Links</h1>
                        <ul class="text-center">
                            <li>Home</li>
                            <li>Our tour</li>
                            <li>Guestbook</li>
                            <li>About us</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-3 mt-md-5 mt-lg-0">
                    <div class="tour">
                        <h1 class="text-light text-center text-md-start">Our tours</h1>
                        <ul class="text-center">
                            <a class="text-decoration-none" href="./../north/north.php"><li>North Tour</li></a>
                            <a  class="text-decoration-none" href="./../south/south.php"><li>South Tour</li></a>
                            <a class="text-decoration-none" href="#"><li>East Tour</li></a>
                            <a class="text-decoration-none" href="./../weast/weast.php"><li>Weast Tour</li></a>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-11 col-lg-3">
                    <div class="tour">
                        <h1 class="text-light text-center mt-5 mt-lg-0">Other page</h1>
                        <ul class="text-center mx-0">
                            <a class="text-decoration-none" href="./../adventures/adventures.php"><li>Adventures tours</li></a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-5" id="row2">
                    <div class="border"></div>
                    <div class="col-12 col-lg-3 col-md-12"><h1 class="text-start text-md-center text-lg-start text-light">Contact us: </h1></div>
                    <div class="col-9 -ml-2 col-md-6 col-lg-3 text-center" id="ii1">
                        <div class="phone text-light">
                            <i class="fa-solid fa-phone text-light"></i> +261(0)34 73 440 45
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3">
                        <div class="phone text-light">
                            <i class="fa-regular fa-envelope text-light"></i></i>  email: lovasson@yahoo.fr
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-9">
                        <div class="phone text-light" id="location">
                        <i class="icon fa-brands fa-whatsapp text-light"></i> +261(0)347344045
                        </div>
                        
                    </div>
            </div>
        </div>
        
        <div class="copryght">
                 <div class="container">
                    <div class="row">
                        <div class="col-12"><h3 class="text-center text-md-center mt-3  text-light">Copyright 2023 Madagascar Visit Compagny  |  fait par JohanEmades</h3></div>
                 </div>
        </div>
    </footer>

 
  <script src="components/writ.js"></script>
  <script src="./../../index.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/leaflet-curve@0.8.1/leaflet.curve.js"></script>
  <script src="./map.js"></script>
  
  <script>

const images = document.querySelectorAll('.zoomable-image');
    const overlay = document.querySelector('.overlay');
    const close = document.querySelector('.close');

// Ajoutez un gestionnaire d'événements clic à chaque image
images.forEach(image => {
    let isZoomed = false; // Variable pour suivre l'état de l'image

    image.addEventListener('click', () => {
        // Vérifiez si l'image est agrandie ou non
        
        if (!isZoomed) {
            // Si elle n'est pas agrandie, agrandissez-la
            image.classList.add('zoomed-image');
            overlay.classList.add('ok');
            close.classList.add('ok2');
        } else {
            // Si elle est déjà agrandie, réduisez-la
            image.classList.remove('zoomed-image');
            overlay.classList.remove('ok');
            close.classList.remove('ok2');
        }

        // Inversez l'état de l'image
        isZoomed = !isZoomed;
    });
});

      function checkWordCount(form, maxWords) {
      var textarea = form.querySelector('#coms');
            var words = textarea.value.split(/\s+/); // Diviser le texte en mots en utilisant l'espace comme délimiteur
            var wordCount = words.length;

            if (wordCount > maxWords) {
               alert('Enter 120 words maximum');
               event.preventDefault(); 
            
        }
      }

    document.addEventListener('DOMContentLoaded', function () {
  const scrollButtons = document.querySelectorAll('.scroll');

  scrollButtons.forEach(function (button) {
    button.addEventListener('click', function (event) {
      event.preventDefault();
      
      const targetSectionId = this.getAttribute('data-target');
      const targetSection = document.getElementById(targetSectionId);
      
      if (targetSection) {
        const targetPosition =targetSection.offsetTop;
        const scroll=targetPosition-67;
        
        window.scrollTo({
          top: scroll,
          behavior: 'smooth'
        });
      }
    });
  });
});

const up=document.getElementById('Button');
up.addEventListener('click', function () {
    window.scrollTo({
      top: 0, // Remonte en haut de la page
      behavior: 'smooth'
    });
  });

  </script>
 
</body>

</html>