<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="Madagascar Visit is a local Tour guid in Madagascar, For your Holidays in Madagascar .It's a pleasure for us to guid you through our beautiful country, Madagascar Visit est un guide touristique local à Madagascar, pour vos vacances à Madagascar, c'est un plaisir pour nous de vous guider à travers notre beau pays.">
  <meta name="keywords"
    content="Holidays Madagascar, Tour Guid Madagascar, Visit Madagascar, Madagascar birding Tour, Madagascar Circuit Tour, Madagascar Travel Tour, Madagascar Tour Package, Madagascar exclusive Tour, LEMURS, baobab, Adansonia, Chameleon, INDRI INDRI, AYE AYE, MAKI CATTA, SIFAKA">
  <title>Madagascar visit tours/weast</title>
  <link rel="icon" type="image/x-icon" href="../../logo/madagascar-visite-ico.png">
  <link rel="stylesheet" href="weast.css">
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
  <link href="https://fonts.googleapis.com/css2?family=Signika:wght@600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
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
              <li><a class="dropdown-item" href="./../east/east.PHP">EAST Tour</a></li>
              <li><a class="dropdown-item" href="#">WEAST Tour</a></li>
              <li><a class="dropdown-item" href="./../adventures/adventures.php">Adventures Tour</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="../../index.php#book"><i class="fa-solid fa-book text-dark"></i> GUESTBOOK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="../../index.php#about"><strong><i class="fa-solid fa-info"></i></strong> About us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#tour" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <img src="./../../logo/ang.jpg" class="drap" alt=""> English
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="./../../circuits_francais/ouest/ouest.php"> <img src="./../../pictures/francais.png" class="drap"
                    alt=""> French</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="couv">
    <div class="w-100" id="couv_"><img src="../../pictures/alley.jpg" class="w-100"></div>
    <h1 class="text-center">to the Exotic Weast of Madagascar</h1>

    <!-- <div class="couvertureNord-responsive"><img src="../pictures/couvertureNord-responsive.jpg" alt=""></div> -->
  </div>

  <div class="weast mt-5">
    <h1 class=" title_weast text-start text-md-start">Tour detail

    </h1>
    <div class="borde"></div>
    <p class="desc fs-5   mx-5">WEST TOUR is for the people who loves adventures , natures ,and specially the birds. A
      paradise of the birds. You might discover the originality and beauty of the scenery among the Tsiribihina river
      with local’s pirogue,or boat motor”s . The gorge of Bemaraha , and also the Tsingy of Bemaraha known as ‘the
      forest of the stones” , an insolate site formed with calcareous pics .The famous and unique Baobab Alley .The
      famous sunset in the baobab alley without forgetting the Fossa in freddom in Kirindy reserve . The ambiance during
      the camping with fire , meeting with a local people always smiling , a life so far from the technology gives you
      an unforgettable memory <br> <br>

      <!-- We suggest you:
        <br>- CLASSICAL SOUTH TOUR
        <br>- SOUTH TOUR with the train and excursion in the Pangalane’s Channel.
        <br>- ADVENTURES TOUR with trekking in Andringitra National Park for the PEAK OF BOBY and TSARANORO's VALLEY
        The itinerary will be possible of being flexible. -->

    </p>

   


    <div class="weast_day" id="section1">
      <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> About 9 days</h3>
      <div class="point text-start" id="point"></div>
      <h1 class="text-center text-lg-start  m-5" id="classic_h1">Rivertrip in Tsiribihina River Cruise</h1>





      <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner" id="inner">
          <div class="carousel-item active">
            <img src="./../../pictures/alley.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./../pictures/fleuve1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./../pictures/miandrivazo_2.jpg" class="d-block w-100" alt="...">
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
              <h2><i class="fa-solid fa-location-dot"></i> Tana- Antsirabé</h2>
              <p class="p-0"> Drive to Antsirabe across the highland sceneries, traditional red clay house of
                highland, to reach the town of Antsirabe which means a place of much salt
                Antsirabe , a town of water for its thermal source ,spring water .Antsirabe is also a capital of
                rickshaws
                <br> Overnight at the hotel.
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 3:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Antsirabé - Miandrivazo</h2>
              <p class="p-0 fs-4.8">Drive to Miandrivazo , beautiful landscape of mountain on the way. Lunch at the
                Malagasy local restaurant
                <br> Overnight at the hotel
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 4:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Starting of cruise along the TSIRIBIHINA RIVER </h2>
              <p class="p-0 fs-4.8"> Start the rivertrip after the breakfast along the Tsiribihina River with the local
                pirogue or boat motors. Full day on the canoeing. Tsiribihina River is one of the best places to enjoy
                the nature, birdlife.Meeting with the local people always smiling.
                Lunch in the riverbank prepared by the localguid .
                The landscape of the forest still primary forest, the white sand along the Tsiribihina river, the
                tranquility on the tsiribihina river with the campfire, songs, dinner with candle under the beauty sky
                with stars and moon make this rivertrip exciting and special
                Dinner prepared by the local guid
                <br> Camping for the night
              </p>
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 5:</h4>
              <h2><i class="fa-solid fa-location-dot"></i>Gorge of Tsiribihina , with the cascade and natural swimming
                pool</h2>
              <p class="p-0 fs-4.8"> Continuation of the cruise after breakfast, passing through the gorge of the
                Tsiribihina where you will have possibility to see the lemurs, Sifaka lemur or /and the Lemur Fulvus,
                chameleons,birds , crocodile.
                Lunch in the riverbank prepared by the local guid
                Walking to the cascade ,and the natural swimming pool ,swimming in the cascade and the swimming pool .
                Beautiful sunseat.
                Dinner with candle under the beauty sky with stars and/or moon prepared by the local guid.
                Camping for the night
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 6:</h4>
              <h2><i class="fa-solid fa-location-dot"></i>End of the river – ANTSIRARAKY- BELO sur TSIRIBIHINA </h2>
              <p class="p-0 fs-4.8"> After Breakfast, continuation of the cruise, going through a cliff home to bats,
                birds such as owl bird .After lunch, continuation with zebu’s car for 1 hours until Antsiraraky
                <br> Overnight at the hotel.
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 7:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> BELO sur TSIRIBIHINA - MORONDAVA </h2>
              <p class="p-0 fs-4.8">
                Visit of the city of Belo sur Tsiribihina,
                Stop for the baobab in love, sacred baobab, Sakalava's tomb.
                Sunseat in the avenue of baobab for an unforgettable amazing picture
                <br> Overnight at the hotel.
              </p>
            </div>
          </div>


          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 8:</h4>
              <h2><i class="fa-solid fa-location-dot"></i>Morondava - Tana</h2>
              <p class="p-0 fs-4.8">
                Pick you at the aiport .City tour in Tana, It’s depends on your schedule for the international flight
                City tour in Tana .Visiting the lemur’s park , Digue’s market,market of souvenirs before your
                Transfert to the airport for your international flight
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 9:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
              <p class="p-0 fs-4.8">
                Pick you at the aiport .City tour in Tana, It’s depends on your schedule for the international flight
                City tour in Tana .Visiting the lemur’s park , Digue’s market,market of souvenirs before your
                Transfert to the airport for your international flight
              </p>
            </div>
          </div>




        </div>
      </div>
    </div>

    <div class="with-tsingy" id="section2">
      <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> About 12 days</h3>
      <div class="point text-start" id="point"></div>
      <h1 class="text-center text-lg-start  m-5" id="classic_h1">Rivertrip in Tsiribihina and tsingy BEMARAHA </h1>

      <div id="carouselExampleControl" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner" id="inner">
          <div class="carousel-item active">
            <img src="./../../logo/tsingy.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./../../pictures/alley.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./../pictures/fleuve1.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControl"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl"
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
              <h2><i class="fa-solid fa-location-dot"></i> Tana- Antsirabé</h2>
              <p class="p-0"> Drive to Antsirabe across the highland sceneries, traditional red clay house of
                highland, to reach the town of Antsirabe which means a place of much salt
                Antsirabe , a town of water for its thermal source ,spring water .Antsirabe is also a capital of
                rickshaws
                <br> Overnight at the hotel.
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 3:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Antsirabé - Miandrivazo</h2>
              <p class="p-0 fs-4.8">Drive to Miandrivazo , beautiful landscape of mountain on the way. Lunch at the Malagasy local restaurant.
              <br>  Overnight at the hotel 
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 4:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Starting of cruise along the TSIRIBIHINA RIVER  </h2>
              <p class="p-0 fs-4.8"> Start the rivertrip along the Tsiribihina River with the local pirogue or boat motors. Full day on the canoeing. Tsiribihina River is one of the best places to enjoy the nature, birdlife.Meeting with the local people always smiling. Possibility to see crocodile if you are lucky.
                Lunch in the riverbank prepared by the localguid.
                The landscape of the forest still primary forest, the white sand along the Tsiribihina river, the tranquility on the tsiribihina river with the campfire, songs, dinner with candle under the beauty sky with stars and moon make this rivertrip exciting and special 
                Dinner prepared by the local guid 
               <br> Camping for the night 
              </p>
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 5:</h4>
              <h2><i class="fa-solid fa-location-dot"></i>Gorge of Tsiribihina , with the cascade and natural swimming pool </h2>
              <p class="p-0 fs-4.8"> Continuation of the cruise after breakfast, passing through the gorge of the Tsiribihina where you will have possibility to see the lemurs ,Sifaka lemur or /and the Lemur Fulvus,  chameleons,birds .
                Lunch in the riverbank prepared by the local guid 
                Walking to the cascade ,and the natural swimming pool ,Beautiful sunseat.
                 Dinner with candle under the beauty sky with stars and/or  moon prepared by the local guid. 
               <br> Camping for the night 
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 6:</h4>
              <h2><i class="fa-solid fa-location-dot"></i>  End of the river – ANTSIRARAKY- BELO sur TSIRIBIHINA  </h2>
              <p class="p-0 fs-4.8">After Breakfast, continuation of the cruise, going through a cliff home to bats, birds such as owl bird  .After lunch, continuation with zebu’s car for 1 hours until Antsiraraky, then continuation to Belo sur Tsiribihina 
              <br>  Overnight at the hotel. 
               
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 7:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Belo sur Tsiribihina - Bekopaka </h2>
              <p class="p-0 fs-4.8">
                Departure to Bekopaka by 4x 4  car, lunch at Belo/Tsiribihina, Crossing by ferry the 2 rivers (Tsiribihina and Manambolo), Passing through the dry landscape with a sandy and bumpy road
               <br> Overnight at the hotel 
              </p>
            </div>
          </div>


          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 8:</h4>
              <h2><i class="fa-solid fa-location-dot"></i>Visit of the Tsingy de Bemaraha National Park</h2>
              <p class="p-0 fs-4.8">
                Departure by 4X4 car for joining the  entrance park  of the  BigTsingy, exploring the big tsingy during 3hours until 8hours, it’s depend on your physical condition A strong feeling,through the bridge hanging of Andamozavaky circuits 
The Tsingy gives you opportunity to see  different species of lemurs such as Decken's Sifaka, Red Fronted Brown Lemur, Grey Mouse Lemur, home of bird such as  Coquerel's Coua, Sickle Billed Vanga, White Headed Vanga and many kinds of reptiles. 
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 9:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Bekopaka - Morondava</h2>
              <p class="p-0 fs-4.8">
                Drive to coming back to Morondava with a sansdy and bumpy road, lunch at Belo sur Tsiribihina.Cross again the 2 ferrys; Stop on the road for the sacred baobab, baobab in love,Sakalava’s tomb.Stop at the famous and unique Alley of Baobab .Sunseat at the Alley of Baobab  for an amazing unforgettable picture. 
              <br>  Overnight at the hotel 
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 10:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Morondava</h2>
              <p class="p-0 fs-4.8">
                Relax on the beach after the bad road , Visit of the fisherman village through the mangrove with the local’s pirogue 
               <br> Overnight at the hotel 
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 11:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Morondava - Tana by Flight</h2>
              <p class="p-0 fs-4.8">
                Transfert to the airport 
              <br>  Overnight at the hotel 
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 12:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Tana </h2>
              <p class="p-0 fs-4.8">
                City tour in Tana , visit of lemur's park , king palace in Ambohimanga 
              <br>  Transfert to the airport for your international flight 
                
              </p>
            </div>
          </div>





        </div>
      </div>
    </div>

    <div class="tsingy" id="section2">
      <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> About 8 days</h3>
      <div class="point text-start" id="point"></div>
      <h1 class="text-center text-lg-start  m-5" id="classic_h1"> Tsingy Tour</h1>

      <div id="carouselExampleControl" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner" id="inner">
          <div class="carousel-item active">
            <img src="./../../logo/tsingy.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./../../pictures/alley.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./../pictures/fleuve1.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControl"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl"
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
              <h2><i class="fa-solid fa-location-dot"></i> Tana- Antsirabé</h2>
              <p class="p-0"> Drive to Antsirabe across the highland sceneries, traditional red clay house of
                highland, to reach the town of Antsirabe which means a place of much salt
                Antsirabe , a town of water for its thermal source ,spring water .Antsirabe is also a capital of
                rickshaws
                <br> Overnight at the hotel.
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 3:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Antsirabé - Morondava</h2>
              <p class="p-0 fs-4.8">Drive to Morondava , beautiful landscape of mountain on the way. Lunch at Miandrivazo .Sunseat in Baobab Alley for amazing and unforgettable picture 
              <br>  Overnight at the hotel 
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 4:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Morondava - Bekopaka</h2>
              <p class="p-0 fs-4.8">Departure to Bekopaka by 4x 4  car, lunch at Belo/Tsiribihina, Crossing by ferry the 2 rivers (Tsiribihina and Manambolo), Passing through the dry landscape with a sandy and bumpy road
              <br>  Overnight at the hotel 
              </p>
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 5:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Visit of the Tsingy de Bemaraha (Limestones) </h2>
              <p class="p-0 fs-4.8"> Departure by 4X4 car for joining the  park entrance of the  BigTsingy, exploring the big tsingy during 3hours until 8hours, it’s depend on your physical condition A strong feeling through the bridge hanging of Andamozavaky circuits 
                The Tsingy gives you opportunity to see  different species of lemurs such as Decken's Sifaka, Red Fronted Brown Lemur, Grey Mouse Lemur, home of bird such as  Coquerel's Coua, Sickle Billed Vanga, White Headed Vanga and many kinds of reptiles.
               <br> Overnight at the hotel 
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 6:</h4>
              <h2><i class="fa-solid fa-location-dot"></i>  Bekopaka - Morondava </h2>
              <p class="p-0 fs-4.8">Drive to Morondava ,  Crossing the ferry of Belo sur Tsiribihina, drive to Morondava, Stop on the road for the sacred baobab, baobab in love,Sakalava’s tomb.Stop at the famous and unique Alley of Baobab .Sunseat at the Alley of Baobab  for an amazing unforgettable picture. 
              <br>  Overnight at the hotel 
               
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 7:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Morondava </h2>
              <p class="p-0 fs-4.8">
                Relax on the beach after the bad road , Visit of the fisherman village through the mangrove with the local’s pirogue 
              <br>  Overnight at the hotel 
              </p>
            </div>
          </div>


          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 8:</h4>
              <h2><i class="fa-solid fa-location-dot"></i>Morondava - Tana by flight</h2>
              <p class="p-0 fs-4.8">
                Transfert to the airport
               <br> Overnight at the hotel  
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 9:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
              <p class="p-0 fs-4.8">
                Pick you at the aiport .City tour in Tana, It’s depends on your schedule for the international flight 
            <br> Visiting the lemur’s park , Digue’s market,market of souvenirs  
            <br> Transfert to the airport for your international flight 
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="baobab" id="section2">
      <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> About 8 days</h3>
      <div class="point text-start" id="point"></div>
      <h1 class="text-center text-lg-start  m-5" id="classic_h1"> Baobab Tour and Kirindy</h1>

      <div id="carouselExampleControl" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner" id="inner">
          <div class="carousel-item active">
            <img src="./../../logo/tsingy.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./../../pictures/alley.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./../pictures/fleuve1.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControl"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl"
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
              <h2><i class="fa-solid fa-location-dot"></i> Tana- Antsirabé</h2>
              <p class="p-0"> Drive to Antsirabe across the highland sceneries, traditional red clay house of
                highland, to reach the town of Antsirabe which means a place of much salt
                Antsirabe , a town of water for its thermal source ,spring water .Antsirabe is also a capital of
                rickshaws
                <br> Overnight at the hotel.
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 3:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Antsirabé - Morondava</h2>
              <p class="p-0 fs-4.8">Drive to Morondava , beautiful landscape of mountain on the way. Lunch at Miandrivazo .Sunseat in Baobab Alley for amazing and unforgettable picture 
              <br>  Overnight at the hotel 
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 4:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Morondava</h2>
              <p class="p-0 fs-4.8"> Visit of fisherman village , excursion along the mongrove and can be continued to the sea , mozambic channel. 
               <br> Overnight to the Hotel.
              </p>
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 5:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Morondava -Kirindy</h2>
              <p class="p-0 fs-4.8"> Drive to kirindy reserv.                                                                                                                                          Visit of Kirindy reserv for the birds,lemurs,fossa.                                                                                                                                                                         
                It's the home of birds , lemurs , reptile.
                Night walking gives you opportunity to observe the Giant jumping Rat endemic in Madagascar , lemurs as well as Madame Berthes the smallest lemurs on the world .
               <br> Overnight to the hotel
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 6:</h4>
              <h2><i class="fa-solid fa-location-dot"></i>  kirindy - Morondava</h2>
              <p class="p-0 fs-4.8">Drive to Morondava 
                The baobab in love basically with baobab Trees which love grow intertwined with each others.
                Admire the beautiful spectacular sunset of Baobab
              <br>  Overnight to the hotel 
               
              </p>
            </div>
          </div>

          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 7:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Morondava - Tana by Flight </h2>
              <p class="p-0 fs-4.8">
                Overnight to the hotel
              </p>
            </div>
          </div>


          <div class=" col-10 w-100 col-md-7">
            <div class="p-3 rounded">
              <h4><i class="fa-regular fa-calendar-days"></i> Day 8:</h4>
              <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
              <p class="p-0 fs-4.8">
                City tour in Tana .Visit of lemur's park , the king palace 
                Transfert to the airport for international flight 
                 <br>   Sincerely yours.
              </p>
            </div>
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

    <footer class="w-100 bg-dark" id="contact">
      <div class="container">
        <div class="row gx-3">
          <div class="col-12 col-md-9 col-lg-3">
            <div class="follow">
              <h1 class="text-light text-center text-md-center text-lg-start">Follow us on </h1>
              <div class="d-flex text-center text-md-start" id="row">
                <i class="icon fa-brands fa-facebook-f"></i>
                <i class="icon fa-brands fa-linkedin-in"></i>
                <i class="icon fa-brands fa-twitter"></i>
                <i class="icon fa-brands fa-whatsapp"></i>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-7 mt-md-5 mt-lg-0 col-lg-3">
            <div class="links text-center text-md-center">
              <h1 class="text-light">Quick Links</h1>
              <ul class="text-center">
                <li class="up" style="cursor:pointer"> Home</li>
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
                <a href="../north/north.php" class="text-decoration-none">
                  <li>North Tour</li>
                </a>
                <a href="./../south/south.php" class="text-decoration-none">
                  <li>South Tour</li>
                </a>
                <a href="./../east/east.PHP" class="text-decoration-none">
                  <li>East Tour</li>
                </a>
                <a href="#" class="text-decoration-none">
                  <li>Weast Tour</li>
                </a>
              </ul>
            </div>
          </div>

          <div class="col-12 col-md-11 col-lg-3">
            <div class="tour">
              <h1 class="text-light text-center mt-5 mt-lg-0">Other Page</h1>
              <ul class="text-center mx-0">
                <a class="text-decoration-none" href="../adventures/adventures.php"><li>Adventures tours</li></a>
            </ul>

            </div>
          </div>
        </div>

        <div class="row mt-5" id="row2">
          <div class="border"></div>
          <div class="col-12 col-lg-3 col-md-12">
            <h1 class="text-start  text-light">Contact us: </h1>
          </div>
          <div class="col-8 col-md-6 col-lg-3 text-center">
            <div class="phone text-light">
              <i class="fa-solid fa-phone text-light"></i> +261(0)34 73 440 45
            </div>
          </div>
          <div class="col-12 col-md-5 col-lg-3">
            <div class="phone text-light">
              <i class="fa-regular fa-envelope text-light"></i></i> email: lovasson@yahoo.fr
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
            <div class="col-12">
              <h3 class="text-center text-md-center mt-3  text-light">Copyright 2023 Madagascar Visit Compagny | fait
                par
                Johan</h3>
            </div>
          </div>
        </div>
    </footer>

    <script src="components/write.js"></script>
    <script src="./../../index.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="./map.js"></script>

    <script>
       function checkWordCount(form, maxWords) {
      var textarea = form.querySelector('#coms');
            var words = textarea.value.split(/\s+/); // Diviser le texte en mots en utilisant l'espace comme délimiteur
            var wordCount = words.length;

            if (wordCount > maxWords) {
               alert('Enter 120 words maximum');
               event.preventDefault(); 
            
        }
      }

      window.onscroll = function () { scrollFunction() };
      const up_ = document.querySelector('.up');

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          up_.style.display = "block";


        }
        else {
          up.style.display = "none";
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
              const targetPosition = targetSection.offsetTop;
              const scroll = targetPosition + 397;


              window.scrollTo({
                top: scroll,
                behavior: 'smooth'
              });
            }
          });
        });
      });

      const up = document.getElementById('Button');
      up.addEventListener('click', function () {
        window.scrollTo({
          top: 0, // Remonte en haut de la page
          behavior: 'smooth'
        });
      });
    </script>
</body>

</html>