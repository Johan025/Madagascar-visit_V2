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
  <title>Madagascar visite tours/Adventures tour and Boucle</title>

  <link rel="icon" type="image/x-icon" href="../../logo/madagascar-visite-ico.png">
  <link rel="stylesheet" href="adventures.css">
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
            <a class="nav-link text-dark" href="./../../index.php"><i class="fa-solid fa-house  text-dark"></i>
              Home</a>
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
              <li><a class="dropdown-item" href="./../weast/weast.php">WEAST Tour</a></li>
              <li><a class="dropdown-item" href="./../adventures/adventures.php">Adventures Tour</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-sm text-dark" href="../../index.php#book"><i class="fa-solid fa-book text-dark"></i>
              GUESTBOOK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="../../index.php#about"><strong><i
                  class="fa-solid fa-info"></i></strong> About us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#tour" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <img src="./../../logo/ang.jpg" class="drap" alt=""> English
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="./../../circuits_francais/aventures/adventures.php"> <img src="./../../pictures/francais.png" class="drap"
                    alt=""> French</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="couv">
    <div class="w-100" id="couv_"><img src="../pictures/COUVERTURE_EST.jpg" class="w-100"></div>
    <div class="w-100" id="couv_1"><img src="../pictures/EST.jpg" class="w-100"></div>

    <h1 class="text-center">LOOPING TOURS &ADVENTURES TOURS</h1>

    <!-- <div class="couvertureNord-responsive"><img src="../pictures/couvertureNord-responsive.jpg" alt=""></div> -->
  </div>


  <div class="adv">
    <h1 class=" title_adv  text-start text-md-start">Tour detail

    </h1>
    <div class="border_"></div>
    <p class="desc fs-5 mx-5">From Morondava towards Tuléar following the seaside in South Weast to Madagascar is
      specially for the people who loves nature and adventure <br>
      The nice view of the sea on your right side during the driving will be fascinate you <br>
      Your trip will be amazing with the differents species of the baobab among the road and the best beaches in Salary
      and Andavadoaka

    </p>



  </div>

  <div class="adventures_" id="section1">


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
              Assistance at the airport
              Transfert to the hotel, If you have more time, you can go to the point of view of Antananarivo
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 2:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana - Antsirabé</h2>
            <p class="p-0"> Drive to Antsirabe across the highland sceneries, traditional red clay house of highland, to
              reach the town of Antsirabe which means a place of much salt
              Antsirabe , a town of water for its thermal source ,spring water .Antsirabe is also a capital of rickshaws
              <br> Overnight at the hotel.
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 3:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Antsirabé - Morondava</h2>
            <p class="p-0 fs-4.8">Drive to Morondava , beautiful landscape of mountain on the way. Lunch at Miandrivazo
              .Sunseat in Baobab Alley for amazing and unforgettable picture
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 4:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Morondava - Belo sur Mer</h2>
            <p class="p-0 fs-4.8">Road to Belo sur Mer through the bumpy and sandy road along the differents species of
              Baobab Fony
              Crossing Kabatomena river
              Before Belo sur Mer; you will pass through the Saline for the manufactory of salt
              <br> Overnight to the hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 5:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Bel sur Mer - Manja</h2>
            <p class="p-0 fs-4.8">Drive through the bumpy and sandy road to Manja
              Belo sur Mer, colorful village of Vezo reputed for its shipbuilding
              <br> Overnight to the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 6:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Manja - Morombe - Andavadaoka</h2>
            <p class="p-0 fs-4.8">Drive through the bumpy and sandy road to Andavadoaka . Crossing through the ferry
              Bevoay
              <br> Overnight to the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 7:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Andavadaoka</h2>
            <p class="p-0 fs-4.8">With blue color of the sea, Andavadoaka is the most richest marine ecosystem on the
              South West of Madagascar
              Whalewatching in july until September, dolphins
              Kitesurf, snorkelling , excursion to the "Bay of Assasins" are the activities
              <br> Overnight to the hotel
            </p>
            </p>
          </div>
        </div>


        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 8:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Andavadaoka - Salary</h2>
            <p class="p-0 fs-4.8">Drive through the bumpy and sandy road to Salary, the sea colors like emerauld along
              the seaside gives you a magnific view
              Crossing the sandy road of Befandefa
              <br> Overnight to the hotel
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 9:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Salary</h2>
            <p class="p-0 fs-4.8">Relax on the magnific beach of Salary
              Salary is one of the best beach in Madagascar with his colors like emerauld , the white sand
              Snorkelling; diving are award
              <br> Overnight to the hotel
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 10:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Salary</h2>

          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 11:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Salary - Ifaty</h2>
            <p class="p-0 fs-4.8">Drive through the sandy road to join Ifaty
              Meeting with the local people on the road
              <br> Ovenight to the hotel
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 12:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ifaty</h2>
            <p class="p-0 fs-4.8">Relax after the bumpy and sandy road
              Visit of RENIALA RESERV : spiny forest with the baobas, edicinal plants, tenrecs, turtlles, Birds, Reniala
              reserv specially for the birdwatching
              <br> Overnight to the hôtel
            </p>
            </p>
          </div>
        </div>


        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 13:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ifaty - Tuléar -Isalo</h2>
            <p class="p-0 fs-4.8">Drive to Isalo , through across the desertic scenery of the South Stop along the road
              for having contact with the local people
              <br> Overnight at the hotel
            </p>
            </p>
          </div>
        </div>


        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 14:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Isalo</h2>
            <p class="p-0 fs-4.8">Visit of Isalo National Park. Isalo National Park formed by a massifs and canyons,
              whole day to explore the National Park, trekking through the Isalo’s canyon, natural swimming pool,the
              blue and black swimming pool, a refuge for lemurs such as Brown lemur, ring-tailed lemur; birds such as
              Benson’s rock ,Madagascar Wagtail endemic in Isalo
              <br> overnight at the hotel .
            </p>
            </p>
          </div>
        </div>


        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 15:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Isalo - Ambalavao</h2>
            <p class="p-0 fs-4.8">Road to Ambalavao after the breakfast
              Passing at Ihosy, the capital of the Bara tribe.Crossing through the dry and desertic landscape of the
              South, the land plateau of Horombe which extend as far as the eye can see.
              Visit of ANJA reserve before arriving to Ambalavao , Anja reserve created by the local villageous for
              protecting the fauna,It’s a model for environmental protection .You can see specially the ring- tailed
              lemurs OR LEMUR CATTA , the pointof view that you can see Amabalavao and his area , the medicial plants.
              <br> Overnight at the hotel
            </p>
            </p>
          </div>
        </div>


        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 16:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ambalavao - Ranomafana</h2>
            <p class="p-0 fs-4.8">Drive to Ranomafana , Possibility to see the market of zebu in Ambalavao, if you
              arrive at Wednesday day . Ambalavao is known for the market of zebu , the first biggest market of zebu in
              Madagascar in each Wednesday Ambalavao is known also for the paper Antemoro. and the silk . Visiting of
              the craftswoman local making Antemoro paper,which is done by hand
              Stop along the road for having contact with the local people
              Night walking for spotting the lemurs, frogs and chameleon
              Overnight at the hotel.
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 17:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana National Park</h2>
            <p class="p-0 fs-4.8">Visit of the Ranomafana National Park for more wildlife of this rainforest .12species
              of lemurs such as golden bamboo lemur, the greater bamboo lemur ,birds, chameleons are seeing in this park
              without forgetting orchids, different medicinal plants.
              <br> Overnight at the hotel.
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 18:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana - Fianarantsoa -Ambositra - Antsirabé</h2>
            <p class="p-0 fs-4.8"> Stop at Ambositra for the lunch .Ambositra is the capital of woodcarving sculptures
              and carving, possibility to visit the artisan market . Then, you will across Betsileo region, with a
              scenery of rice fields in terraces , specific for this tribe.
              Stop along the road for having contact with the local people
              <br> Overnight at the hotel .
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 19:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Antsirabé - Tana</h2>
            <p class="p-0 fs-4.8">City tour in Antsirabe with local rickshaw , visit of manufactory local of
              transformation of the horn to jewel, games , visit of manufactory local of bicycle in miniature
              Drive to TANA across the highland sceneries, traditional red clay house of highland, Overnight at the
              hotel.
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 20:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0 fs-4.8">City tour in TANA
              Transfert to the airport for your international flight

            </p>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>



  <!-- <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8">
        <div id="map"></div>
      </div>

      <div class="col-12 col-md-10 col-lg-4" id="coms">
        <div class="comments p-4">
          <h1 id="h_comments">Leave us a comments</h1>
          <div class="borde2"></div>

          <form action="" method="POST">
            <div class="row gy-5">
              <input type="email" name="email" class="w-100" placeholder="Your email">
              <input type="text" name="name" class="w-100" placeholder="Your name" id="name">
              <input type="text" name="coms" class="w-100" placeholder="Your comments" id="coms">
              <button type="submit" name="send" class="btn p-2">Send</button>
            </div>
          </form>
        </div>

      </div>

    </div>

  </div> -->
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
              <a href="https://web.facebook.com/madagascarvisite" target="_blank" id="item_1"><i
                  class="icon fa-brands fa-facebook-f -ms-5"></i></a>
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
              <a class="text-decoration-none" href="./../north/north.php">
                <li>North Tour</li>
              </a>
              <a class="text-decoration-none" href="./../south/south.php">
                <li>South Tour</li>
              </a>
              <a class="text-decoration-none" href="./../east/east.PHP">
                <li>East Tour</li>
              </a>
              <a class="text-decoration-none" href="./../weast/weast.php">
                <li>Weast Tour</li>
              </a>
            </ul>
          </div>
        </div>

        <div class="col-12 col-md-11 col-lg-3">
          <div class="tour">
            <h1 class="text-light text-center mt-5 mt-lg-0">Other page</h1>
                        <ul class="text-center mx-0">
                            <a class="text-decoration-none" href="#"><li>Adventures tours</li></a>
                        </ul>

          </div>
        </div>
      </div>

      <div class="row mt-5" id="row2">
        <div class="border"></div>
        <div class="col-12 col-lg-3 col-md-12">
          <h1 class="text-start  text-light">Contact us: </h1>
        </div>
        <div class="col-9 -ml-2 col-md-6 col-lg-3 text-center" id="ii1">
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
            <i class="fa-solid fa-location-dot text-light"></i></i></i> LOT III A 40 D TER
          </div>

        </div>
      </div>
    </div>

    <div class="copryght">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="text-center text-md-center mt-3  text-light">Copyright 2023 Madagascar Visit Compagny | fait par
              Johan</h3>
          </div>
        </div>
      </div>
  </footer>


  <script src="components/writ.js"></script>
  <script src="./../../index.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/leaflet-curve@0.8.1/leaflet.curve.js"></script>
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
    document.addEventListener('DOMContentLoaded', function () {
      const scrollButtons = document.querySelectorAll('.scroll');

      scrollButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
          event.preventDefault();

          const targetSectionId = this.getAttribute('data-target');
          const targetSection = document.getElementById(targetSectionId);

          if (targetSection) {
            const targetPosition = targetSection.offsetTop;
            const scroll = targetPosition - 67;

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