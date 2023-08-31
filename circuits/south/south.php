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
  <link rel="stylesheet" href="south.css">
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
              <li><a class="dropdown-item" href="../north/north.php">NORTH Tour</a></li>
              <li><a class="dropdown-item" href="#">SOUTH Tour</a></li>
              <li><a class="dropdown-item" href="./../east/east.PHP">EAST Tour</a></li>
              <li><a class="dropdown-item" href="./../weast/weast.php"> WEAST Tour</a></li>
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
                <a class="nav-link dropdown-toggle text-dark" href="../../index.php#tour" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="./../../logo/ang.jpg" class="drap" alt=""> English
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="./../../circuits_francais/sud/sud.php"> <img src="./../../pictures/francais.png" class="drap" alt="">  French</a></li>
                </ul>
           </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="couv">
    <div class="w-100" id="couv_"><img src="../../pictures/fenetre.jpg" class="w-100"></div>
    <h1 class="text-center">Madagascar Tour for the Lemur Maki-Catta</h1>

    <!-- <div class="couvertureNord-responsive"><img src="../pictures/couvertureNord-responsive.jpg" alt=""></div> -->
  </div>

  <div class="south">
    <h1 class=" title_south text-start text-md-start">Tour detail

    </h1>
    <div class="borde"></div>
    <p class="desc fs-5   mx-5">SOUTH TOUR IN MADAGASCAR is done along the national road 7, this tour is one of
      the most popular destinations by visitors since it offers the best and variety of scenery across the  mountains,
      the rice field in terrace, valleys, forest, canyon ; different National park ; and different cultures as you will
      pass through different tribes .<br><br>
      SOUTH TOUR gives you opportunity to pass through the rainforest ; Ranomafana national park ; Manakara along the
      evergreen landscape ,with the excursion in the Pangalane’s channel; to have an experience with the train
      Fianarantsoa until Manakara ;to visit the zafimaniry’s village reputed of hability of woodcarving; not forgetting
      the mountain hiking in Andringitra National park , which you can reach BOBY’S PEAK, the 2nd mountain highest in
      Madagascar , and trekking in the tsaranoro’s valley.
      Circuit can be modified according to your choice . <br> <br>

      <!-- We suggest you:
      <br>- CLASSICAL SOUTH TOUR
      <br>- SOUTH TOUR with the train and excursion in the Pangalane’s Channel.
      <br>- ADVENTURES TOUR with trekking in Andringitra National Park for the PEAK OF BOBY and TSARANORO's VALLEY
      The itinerary will be possible of being flexible. -->

    </p>

    <!-- <div class="suggest">
      <h1>Our suggestion </h1>
      <div class="border_"></div>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <div class="box">
              <img src="./../pictures/anja1.jpg" alt="Image">
              <h4> <i class="fa fa-calendar-days"></i> About 12 days</h4>
              <h2>Classical South Tour</h2>
              <button class="scroll btn" data-target="section1">Choose</button>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4">
            <div class="box">
              <img src="./../pictures/train.jpg" alt="Image">
              <h4> <i class="fa fa-calendar-days"></i> About 15 days</h4>
              <h2>Classical South Tour combined With Train</h2>
              <button class="scroll btn text-center" data-target="section2">Choose</button>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4">
            <div class="box">
              <img src="./../pictures/andringitra.jpg" alt="Image">
              <h4> <i class="fa fa-calendar-days"></i> About 15 days</h4>
              <h2>Adventures tours: Andringitra National park</h2>
              <button class="scroll btn" data-target="section3">Choose</button>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>




  <div class="south_day" id="section1">
    <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> About 12 days</h3>
    <div class="point text-start" id="point"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">Classical South Tour</h1>





    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner" id="inner">
        <div class="carousel-item active">
          <img src="./../../pictures/maki.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../../pictures/isalo.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../../pictures/panorama-faille-isalo.jpg" class="d-block w-100" alt="...">
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
            <h2><i class="fa-solid fa-location-dot"></i> Antsirabé - Ambositra -Ranomafana</h2>
            <p class="p-0 fs-4.8"> Visit City tour in Antsirabe with local rickshaw before driving to
              Ranomafana. Stop at Ambositra for the lunch .Ambositra is the capital of woodcarving sculptures
              and
              carving, possibility to visit the artisan market . Continuation to Ranomafana where you will
              across
              Betsileo region, with a scenery of rice fields in terraces , specific for this tribe.
              Stop along the road for having contact with the local people
              Night walk to spot nocturnal lemurs, chameleons & frogs.
              <br> Overnight at the hotel .
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 4:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana National Park</h2>
            <p class="p-0 fs-4.8"> Visit of the Ranomafana National Park for more wildlife of this rainforest
              .12species of lemurs such as golden bamboo lemur, the greater bamboo lemur ,birds, chameleons are
              seeing
              in this park without forgetting orchids, different medicinal plants.
              Overnight at the hotel.
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 5:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana - Fianarantsoa - Ambalavao</h2>
            <p class="p-0 fs-4.8"> Drive Ranomafana to Ambalavao, Possibility to see the market of zebu in
              Ambalavao, if
              you arrive at Wednesday day . Ambalavao is known for the market of zebu , the first biggest market
              of zebu
              in
              Madagascar in each Wednesday
              Ambalavao is known also for the paper Antemoro. and the silk . Visiting of the craftswoman local
              making
              Antemoro
              paper,which is done by hand
              Stop along the road for having contact with the local people
              <br> Overnight at the hotel.
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 6:</h4>
            <h2><i class="fa-solid fa-location-dot"></i>Ambalavao - Isalo</h2>
            <p class="p-0 fs-4.8"> Visit of ANJA reserve before going to Isalo, Anja reserve created by the
              local
              villageous for protecting the fauna,It’s a model for environmental protection .You can see
              specially the
              ring- tailed
              lemurs OR LEMUR CATTA , the point of view that you can see Amabalavao and his area , the medicial
              plants.
              Passing at Ihosy, the capital of the Bara tribe.Crossing through the dry and desertic landscape of
              the
              South, the land
              plateau of Horombe which extend as far as the eye can see.
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 7:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Isalo</h2>
            <p class="p-0 fs-4.8">
              Visit of Isalo National Park. Isalo National Park formed by a sandstone ALANA IO MOT IO massifs of
              ruined
              forms, whole day to explore the National Park, trekking through the Isalo’s canyon, natural
              swimming
              pool,the blue and black swimming pool, a refuge for lemurs such as Brown lemur, ring-tailed lemur;
              birds
              such as Benson’s rock ,Madagascar Wagtail endemic in Isalo
              <br> overnight at the hotel.
            </p>
          </div>
        </div>


        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 8:</h4>
            <h2><i class="fa-solid fa-location-dot"></i>Isalo - Tuléar - Ifaty</h2>
            <p class="p-0 fs-4.8">
              Drive to Ifaty , the last itinerary across the desertic scenery and the South spiny forest before
              entering
              the sunny town of Ifaty .
              Stop along the road for having contact with the local people
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 9, Day10:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ifaty</h2>
            <p class="p-0 fs-4.8">
              Drive to Ifaty , the last itinerary across the desertic scenery and the South spiny forest before
              entering
              the sunny town of Ifaty .
              Stop along the road for having contact with the local people
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 11:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ifaty - Tuléar -Tana</h2>
            <p class="p-0 fs-4.8">
              Drive to Ifaty , the last itinerary across the desertic scenery and the South spiny forest before
              entering
              the sunny town of Ifaty .
              Stop along the road for having contact with the local people
              <br> Overnight at the hotel
            </p>
          </div>
        </div>
        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 12:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0 fs-4.8">
              Pick you at the aiport .City tour in Tana , depends on your schedule for the international flight
              Visiting the lemur’s park , Digue’s market,market of souvenirs before your
              transfert to the airport for your international flight
            </p>
          </div>
        </div>



      </div>
    </div>
  </div>


  <div class="comb" id="section2">
    <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> About 15 days</h3>
    <div class="point text-start" id="point"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">Classical South Tour combined with train </h1>

    <div id="carouselExampleControl" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner" id="inner">
        <div class="carousel-item active">
          <img src="./../../pictures/riziere.jpg" class="d-block w-100" alt="parc national isalo">
        </div>
        <div class="carousel-item">
          <img src="./../../pictures/leafted gecko.jpg" class="d-block w-100" alt="parc national ranomafana">
        </div>
        <div class="carousel-item">
          <img src="./../../pictures/fulvusisalo.jpg" class="d-block w-100" alt="common brown lemur, parc national isalo">
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
            <h2><i class="fa-solid fa-location-dot"></i> Antsirabé - Fianarantsoa</h2>
            <p class="p-0 fs-4.8"> Drive to Fianarantsoa across the Betsileo region with varied mountainous
              landscape and famous rice field in terraces.
              Visit of the Fianarantsoa’s town as the panoramic view , the old town
              <br> Overnight at the hotel
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 4:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Fianarantsoa -Manakara by Train</h2>
            <p class="p-0 fs-4.8"> Morning departure at Fianarantsoa Railway station to join Manakara .The
              evergreen landscape , meeting with the local people makes this tour spectacular
              <br> Overnight at the hotel
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 5:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Manakara</h2>
            <p class="p-0 fs-4.8"> Excursion in the Pangalane’s channel by pirogue’s local with local guid and
              boatmen , fresh sea food will be prepared for you by the guid .you will see fisherman village ,
              tradition
              and the real life of the local people
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 6:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Manakara - Ranomafana</h2>
            <p class="text-dark p-0 fs-4.8"> Drive to Ranomafana through the green scenery of “ ravinala” or
              traveller’s
              tree.
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 7:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana National Park</h2>
            <p class="p-0 fs-4.8">
              Visit the Ranomafana National Park for more wildlife of this rainforest .Birds, frog, chameleons
              ,12species of lemurs are seeing in this park such as the golden bamboo lemur, the greater bamboo
              lemur
              without forgetting orchid ,different medicinal plants.
              <br> Overnight at the hotel.
            </p>
          </div>
        </div>


        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 8:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana - Ambalavao</h2>
            <p class="p-0 fs-4.8">
              rive Ranomafana to Ambalavao.
              Possibility to see the market of zebu in Ambalavao, if you arrive at Wednesday day . Ambalavao is
              known
              for the market of zebu , the first biggest market of zebu in Madagascar in each Wednesday
              Ambalavao is known also for the paper Antemoro. Visiting of the craftswomen local making Antemoro
              paper
              Stop along the road for having contact with the local people
              <br> Overnight at the hotel.
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 9:</h4>
            <h2><i class="fa-solid fa-location-dot"></i>Ambalavao - Isalo</h2>
            <p class="p-0 fs-4.8">
              isit of ANJA reserve before going to Isalo, Anja reserve created by the local villageous for
              protecting
              the fauna,It’s a model for environmental protection .You can see specially the ring- tailed lemurs
              or
              LEMUR CATTA, the point of view that you can see Amabalavao and his area , the medicial plants.
              Passing at
              Ihosy, the capital of the Bara tribe.Crossing through the dry and desertic landscape of the South,
              the
              land plateau of Horombe which extend as far as the eye can see.
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 10:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Isalo</h2>
            <p class="p-0 fs-4.8">
              Visit of Isalo National Park. Isalo National Park formed by a sandstone massifs of ruined forms,
              whole day
              to explore the National Park, trekking through the Isalo’s canyon, natural swimming pool,the blue
              and
              black swimming pool, a refuge for lemurs such as Brown lemur, ring-tailed lemur; birds such as
              Benson’s
              rock ,Madagascar Wagtail endemic in Isalo
              <br> overnight at the hotel .
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 11:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Isalo - Tuléar - Ifaty</h2>
            <p class="p-0 fs-4.8">
              Drive to Tuléar , the last itinerary across the desertic scenery and the South spiny forest before
              entering the sunny town of Ifaty .
              Stop along the road for having contact with the local people
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 12, Day13:</h4>
            <h2><i class="fa-solid fa-location-dot"></i>Ifaty</h2>
            <p class="p-0 fs-4.8">
              Relax on the beach
              Snorkeling, Diving
              Excursion with local’s pirogue’s for seeing the coral reefs .
              Visit of RENIALA RESERVE . Reniala reserve is a spiny forest including the forest of baobab,
              medicinal
              plants; birds such as blue coua , long-tailed ground roller endemic in Reniala reserve, specially
              for THE
              BIRDWATCHING tenrecs, the turtles.
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 14:</h4>
            <h2><i class="fa-solid fa-location-dot"></i>Ifaty - Tana</h2>
            <p class="p-0 fs-4.8">
              Transfert to the airport of Tuléar for join Tana
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 15:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0 fs-4.8">
              Pick you at the aiport .City tour in Tana , depends on your schedule for the international flight
              city tour in Tana , Digue’s market,market of souvenirs before your transfert to the airport for
              your international
              flight
            </p>
          </div>
        </div>







      </div>
    </div>
  </div>

  <div class="adventure" id="section3">
    <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> About 15 days</h3>
    <div class="point text-start" id="point"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">Adventures tours: Andringitra National park</h1>

    <div id="carouselExampleControl2" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner" id="inner">
        <div class="carousel-item active">
          <img src="./../pictures/andringitra.jpg" class="d-block w-100" alt="parc national andringintra ">
        </div>
        <div class="carousel-item">
          <img src="./../../pictures/tsaranoropg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../../pictures/Parc-national-dAndringitrawebp" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControl2"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl2"
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
            <h2><i class="fa-solid fa-location-dot"></i> Antsirabé - Ranomafana</h2>
            <p class="p-0 fs-4.8"> City tour in Antsirabe with local rickshaw before driving to Ranomafana. Stop
              at Ambositra for the lunch .Ambositra is the capital of woodcarving sculptures and carving,
              possibility to visit the artisan market . Continuation to Ranomafana where you will across
              Betsileo region, with a scenery of rice fields in terraces , specific for this tribe.
              Stop along the road for having contact with the local people
              Night walk to spot nocturnal lemurs, chameleons & frogs.
              <br> Overnight at the hotel .
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 4:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana National Park</h2>
            <p class="p-0 fs-4.8"> Visit of the Ranomafana National Park for more wildlife of this rainforest
              .12species of lemurs such as golden bamboo lemur, the greater bamboo lemur ,birds, chameleons are
              seeing in this park without forgetting orchids, different medicinal plants.
              Overnight at the hotel.
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 5:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana -Ambalavao</h2>
            <p class="p-0 fs-4.8"> Drive Ranomafana to Ambalavao, Possibility to see the market of zebu in
              Ambalavao, if you arrive at Wednesday day . Ambalavao is known for the market of zebu , the first
              biggest market of zebu in Madagascar in each Wednesday
              Ambalavao is known also for the paper Antemoro. and the silk . Visiting of the craftswoman local
              making Antemoro paper,which is done by hand
              Stop along the road for having contact with the local people
              Overnight at the hotel.
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 6:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ambalavao - Andringitra- Andriampotsy</h2>
            <p class="p-0 fs-4.8"> Drive to Andringitra, Andringitra located at 47 km from Ambalavao;reached
              only by 4X4 car . Andringitra is the 2nd mountains highest by the BOBY’S PEAK at 2658 m of
              attitude;
              Beginning of the trekking ;on the way,visiting the grotte, the waterfalls sacred riandahy and
              riambavy ; then walking through the forest of”Philippia” for join Andriampotsy campsite for the
              first night
              Camping in Andriampotsy campsite
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 7:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Andriampotsy - Peak boby - Andranolava</h2>
            <p class="p-0 fs-4.8">
              After the breakfast; continuation of the trekking for hiking Peak Boby,crossing the mountain range
              and endemic vegetation, spectacular panoramic view in peak boby, then descend to reach Andranolava
              campsite
              Camping in Andranolava campsite
            </p>
          </div>
        </div>


        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 8:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Andranolava - Diavolana -Camp Catta</h2>
            <p class="p-0 fs-4.8">
              After the breakfast, continue the trekking, to reach the plateaux of Diavolana , Diavolana the
              really magnifique landscape resemblance to the lunear , then walking for join camp catta
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 9:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Camp Catta</h2>
            <p class="p-0 fs-4.8">
              isit of ANJA reserve before going to Isalo, Anja reserve created by the local villageous for
              protecting
              the fauna,It’s a model for environmental protection .You can see specially the ring- tailed lemurs
              or
              LEMUR CATTA, the point of view that you can see Amabalavao and his area , the medicial plants.
              Passing at
              Ihosy, the capital of the Bara tribe.Crossing through the dry and desertic landscape of the South,
              the
              land plateau of Horombe which extend as far as the eye can see.
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 10:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Camp Catta - Isalo</h2>
            <p class="p-0 fs-4.8">
              Drive to Isalo , Passing at Ihosy, the capital of the Bara tribe.Crossing through the dry and
              desertic landscape of the South, the land plateau of Horombe which extend as far as the eye can
              see.
              Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 11:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Isalo</h2>
            <p class="p-0 fs-4.8">
              Visit of Isalo National Park. Isalo National Park formed by a sandstone massifs of ruined forms,
              whole day
              to explore the National Park, trekking through the Isalo’s canyon, natural swimming pool,the blue
              and
              black swimming pool, a refuge for lemurs such as Brown lemur, ring-tailed lemur; birds such as
              Benson’s
              rock ,Madagascar Wagtail endemic in Isalo
              <br> overnight at the hotel .
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 12:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Isalo - Tuléar - Ifaty</h2>
            <p class="p-0 fs-4.8">
              Drive to Tuléar , the last itinerary across the desertic scenery and the South spiny forest before
              entering the sunny town of Ifaty .
              Stop along the road for having contact with the local people
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 13, Day14:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ifaty</h2>
            <p class="p-0 fs-4.8">
              Relax on the beach
              Snorkeling, Diving
              Excursion with local’s pirogue’s for seeing the coral reefs .
              Visit of RENIALA RESERVE . Reniala reserve is a spiny forest including the forest of baobab,
              medicinal
              plants; birds such as blue coua , long-tailed ground roller endemic in Reniala reserve, specially
              for THE
              BIRDWATCHING tenrecs, the turtles.
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 15:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ifaty - Tana</h2>
            <p class="p-0 fs-4.8">
              Transfert to the airport of Tuléar for join Tana
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 16:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0 fs-4.8">
              Pick you at the aiport .City tour in Tana , depends on your schedule for the international flight
              city tour in Tana , Digue’s market,market of souvenirs before your transfert to the airport for
              your international
              flight
            </p>
          </div>
        </div>







      </div>
    </div>

  </div>


  <div class="anakao">
    <div class="point" id="point4"></div>
    <h1 text="text-center text-lg-start">EXTENSION ANAKAO FOR THE BEST BEACH </h1>

    <div class="container">
      <div class="row">
        <div class="col-13 col-md-11">
          <p>Relax on the beach
            Snorkelling, Diving
            Excursion with local’s pirogue’s for seeing the coral reefs
            Excursion in Nosy Ve with the pirogue’s local that you have opportunity to see the long tailed
            tropic bird specially for the BIRDWATCHING
            Whalewatching : From July to mid September, humpbacked whales come around Anakao .
            WHALEWATCHING: From July to mid September, humpbacked whales come around Anakao .</p>
        </div>
      </div>
    </div>
  </div>

  <div class="zafimaniry">
    <div class="point" id="point4"></div>
    <h1 text="text-start w-75">EXTENSION FOR ZAFIMANIRY VILLAGE</h1>

    <div class="container">
      <div class="row">
        <div class="col-11">
          <p>
            ANTOETRA situated 45km from Ambositra .There lives a group of people known as the Zafimaniry, or the
            "the people of the forest."
            ZAFIMANIRY is famous for its woods carvings, most of the families are involved in the manufacture of
            wooden objects from towers "by hand ". Most of all the houses are built with wood. The sculptures
            carved in the doors and windows,furnitures,tools,and every day objects with attractive geometric
            patterns are highly codified,and so wonderful ; that’s why they were included in the world cultural
            heritage of UNESCO.
            Trekking in Ifasina village for discovering Zafimaniry’s village , the magnific landscape of
            ricefield in terraces
            Sincerely yours; </p>
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

               <img src="./../pictures/andringitra.jpg" class="zoomable-image" alt="">
           </div>
           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../pictures/andringitra.jpg" class="zoomable-image" alt="">
           </div>
           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../pictures/andringitra.jpg" class="zoomable-image" alt="">
           </div>

           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../pictures/andringitra.jpg" class="zoomable-image" alt="">
           </div>

           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../pictures/andringitra.jpg" class="zoomable-image" alt="">
           </div>

           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../pictures/andringitra.jpg" class="zoomable-image" alt="">
           </div>

           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../pictures/andringitra.jpg" class="zoomable-image" alt="">
           </div>

           <div class="col-12 col-md-4 col-lg-3">
           <div class="overlay">
               <i class="close fa-solid fa-xmark fa-beat"></i>
               </div>

               <img src="./../pictures/andringitra.jpg" class="zoomable-image" alt="">
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
              <a href="https://web.facebook.com/madagascarvisite" target="_blank"><i class="icon fa-brands fa-facebook-f" id="item_1"></i></a>
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
             <a href="./../north/north.php"  class="text-decoration-none"> <li>North Tour</li></a>
             <a href="#"  class="text-decoration-none"> <li>South Tour</li></a>
              <a href="./../east/east.PHP"  class="text-decoration-none"><li>East Tour</li></a>
                <a href="./../weast/weast.php"  class="text-decoration-none"><li>Weast Tour</li></a>
            </ul>
          </div>
        </div>

        <div class="col-12 col-md-11 col-lg-3">
          <div class="tour">
            <h1 class="text-light text-center mt-5 mt-lg-0">Other Tour</h1>
            <ul class="text-center mx-0">
              <a class="text-decoration-none" href="./../adventures/adventures.php"><li>Adventures tours</li></a>
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
            <h3 class="text-center text-md-center mt-3  text-light">Copyright 2023 Madagascar Visit Compagny | fait par
              JohanEmades</h3>
          </div>
        </div>
      </div>
  </footer>

  <!-- <footer id="footer"> 
  <div class="footer_contact">
    <h1>Contact us</h1>

    <p class="phone"> <img src="../../../logo/telephone20x20.png"   width=20 height=20> telephone: +261(0)34 73 440 45</p>
   <a href="lovasson@yahoo.fr"><p class="mail"><img src="../../../logo/lettre20x20.png"  width=20 height=20> email: lovasson@yahoo.fr</p></a>
    <p><i class="fa fa-whatsapp" width=20 height=20></i> WhatsApp:  +261(0)34 73 440 45</p>

     <div class="border_"></div>

    <div class="icones">
      <img src="../../../logo/twitter.png" width=48 height=48>
     <a href="https://web.facebook.com/madagascarvisite" class="img_fb" target="_blank"><img class="img_fb" src="../../../logo/FaceBook.png" width=48 height=48></a>
      <a href="https://www.linkedin.com" target="_blank"><img src="../../../logo/LinkedIn.png" width=48 height=48></a>
    </div>
</div>

<div class="footCopright">
<center>
Madagascar Visite 2023 - All right reserved - Politique de confidentialité - Mentions légales - Plan du site 
</center>
</div>
</footer> -->
  <script src="components/write.js"></script>
  <script src="../../index.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
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
            const targetPosition = targetSection.offsetTop;
            const scroll = targetPosition - 177;


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