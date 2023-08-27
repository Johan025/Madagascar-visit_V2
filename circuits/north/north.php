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
    content="Holidays Madagascar, Tour Guid Madagascar, Visit Madagascar, Madagascar birding Tour, Madagascar Circuit Tour, Madagascar Travel Tour, Madagascar Tour Package, Madagascar exclusive Tour, LEMURS, baobab, Adansonia, Chameleon, INDRI INDRI, AYE AYE, MAKI CATTA, SIFAKA">
  <title>Madagascar visit tours/north</title>
  <link rel="stylesheet" href="north.css">
  <link rel="icon" type="image/x-icon" href="/logo/madagascar-visite-ico.png">
  <link rel="icon" type="image/x-icon" href="/logo/madagascar-visite-ico.png">
  <!-- <script src="../../css/bootstrap_file/jquery.min.js"></script>
    <script src="../../css/bootstrap_file/bootstrap.min.js"></script> -->
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

$bd= new PDO('mysql:host=localhost;dbname=md_comment','root','');

$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

if (isset($_POST['send'])){
    
    var_dump($_GET['submit']); 
    $email=$_POST['email'];
    $name=$_POST['name'];
    $coms=$_POST['coms'];
    $date = date("Y-m-d H:i:s");
    

  if (isset($email) && isset($name) && isset($coms)){

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $requete1=$bd ->prepare('INSERT INTO md_comments(comment_author,comment_author_email,comment_content,comment_date) VALUES(:nom, :adresse_email, :coms, :date)');
    $requete1->bindvalue(':nom', $name);
    $requete1->bindvalue(':adresse_email', $email);
   $requete1->bindvalue(':coms', $coms);
   $requete1->bindvalue(':date', $date);
   $requete1 ->execute();

   echo" <script type=\"text/javascript\">alert ('message envoyé')</script>";
  }
}

  else {
    echo "case vide";
   
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
            <a class="nav-link text-dark" href="./../../index.html"><i class="fa-solid fa-house  text-dark"></i> Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <div class="active"></div>
              <i class="fa-solid fa-car text-dark"></i> Our tour
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Circuit NORTH</a></li>
              <li><a class="dropdown-item" href="./../south/south.html">Circuit SOUTH</a></li>
              <li><a class="dropdown-item" href="./../east/east.html">Circuit EAST</a></li>
              <li><a class="dropdown-item" href="./../weast/weast.html">Circuit WEAST</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="#"><i class="fa-solid fa-book text-dark"></i> GUESTBOOK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="../../index.html#about"><strong><i class="fa-solid fa-info"></i></strong> About us</a>
          </li>
          <li class="nav-item">
            <a class="scroll nav-link  text-dark"  style="cursor:pointer" data-target="contact"><i class="fa-sharp fa-regular fa-address-book text-dark"></i>
              Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="couv">
    <div class="w-100" id="couv_"><img src="./pictures/nosyIranja.jpg" class="w-100"></div>

    <h1 class="text-center">Madagascar Visit for the BROOKESIA MINIMA</h1>

    <!-- <div class="couvertureNord-responsive"><img src="../pictures/couvertureNord-responsive.jpg" alt=""></div> -->
  </div>

  <div class="north">
    <h1 class=" title_north  text-start text-md-start">Tour detail

    </h1>
    <div class="border_"></div>
    <p class="desc fs-5 mx-5">NORTH TOUR offers you opportunity to discover in one place all best beauty of
      Madagascar .<br> North Tour contains many others surprise with his different diversification and endemic fauna and
      flora ,that you can find only in Madagascar .It's ideal for the WILDLIFE , like birds it's home of birds,
      lemurs,<br> BAOBAB , chameleon ,the BROOKESIA MINIMA the smallest chameleon in the word less that 1inch , TSINGY
      of ANKARANA , RED TSINGY <br><br>
      NORTH TOUR offers you also opportunity the best beach in Madagascar , the most bay in the world . The Emerald Sea
      with his turquoise water . The 3 bays .
      <br><br>
      NORTH TOUR includ NOSY BE. NOSY BE is one best beach destination .The volcanic island of Nosy Be has all
      ingredients that you'd except with his soft white sand, turquoise water and wonderful seafood .It's ideal starting
      point for cruises to paradisiac archipelagos.

    </p>

    <!-- <div class="suggest">
      <h1>Our suggestion </h1>
      <div class="border_"></div>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <div class="box">
              <img src="./../pictures/tsingyBemaraha.jpg" alt="Image">
              <h4> <i class="fa fa-calendar-days"></i> About 14 days</h4>
              <h2>Classical North Tour</h2>
              <button class="scroll btn" data-target="section1">Choose</button>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4">
            <div class="box">
              <img src="./../pictures/couvertureNord.jpg" alt="Image">
              <h4> <i class="fa fa-calendar-days"></i> About 9 days</h4>
              <h2>Classical North Tour with Nosy-be</h2>
              <button class="scroll btn text-center" data-target="section2">Choose</button>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4">
            <div class="box">
              <img src="./../pictures/nosy-be.jpg" alt="Image">
              <h4> <i class="fa fa-calendar-days"></i></h4>
              <h2>Nosy-Be Town</h2>
              <button class="scroll btn" data-target="section3">Choose</button>
            </div>
          </div>
        </div>
      </div>

    </div> -->

  </div>

  <div class="north_day" id="section1">
    <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> About 14 days</h3>
    <div class="point text-start" id="point"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">Classical North Tour</h1>

    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner" id="inner">
        <div class="carousel-item active">
          <img src="./../../pictures/ss2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../../pictures/tsingyrouge-900x525.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../../pictures/drongo.jpg" class="d-block w-100" alt="...">
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
            <h2><i class="fa-solid fa-location-dot"></i>  Tana-Ankarafantsika</h2>
           
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 3:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarafantsika </h2>
            <p class="p-0 fs-4.8"> like Coquerel's Sifaka, Brown lemur, Milne Edwards Sportive lemurs if
              you're
              lucky. The bird, Ankarafantsika National Park is home of bird , BAOBAB, medicinal plants
              <br>Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 4:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarafantsika - Port Berger - Antsohihy</h2>
            <p class="p-0 fs-4.8">Road to Antsohihy through the local people in the North part of Madagascar
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 5:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Antsohihy - Ambanja</h2>
            <p class="p-0 fs-4.8"> Visit ot 1h for the reserv lead by the local people for the BLACK INDRI in
              wild.
              <br>Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 6:</h4>
            <h2><i class="fa-solid fa-location-dot"></i>  Ambanja - Ankarana</h2>
            <p class="p-0 fs-4.8"> Visit of MILLOT PLANTATION in Ambanja for the plantation of cacao, vanilla,
              Ilang Ilang , before road to Ankarana .Millot plantation show you how to plant cocoa until the packing of
              exportation ,
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 7:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarana</h2>
            <p class="p-0 fs-4.8">Visit of ANKARANA NATIONAL PARK for the TSINGY d'ANKARANA , Tsingy formed by
              llimestones similar in Tsingy of Bemaraha .The lemurs, birds, The sacred bat's cave, Baobab
              <br> Overnight at the hotel
            </p>
          </div>
        </div>
        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 8:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarana - Red Tsingy- Joffre ville</h2>
            <p class="p-0 fs-4.8"> Road to Joffre Ville
              Visit of Red Tsingy formed by laterite formation with his amazing colours red <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 9:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Joffre ville - Mountain Amber National Park</h2>
            <p class="p-0 fs-4.8"> RVisit of Mountain Amber National Park , the oldest park in Madagascar with
              his rainforest climate gives you opportunity to see the waterfall, lemurs, like crowned Sanford, Bamboo
              lemurs, Red lemur; frog; tenrecs; birds; chameleon specially the "BROOKESIA MINIMA" the smallest chameleon
              in the world less that 1inch .
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 10:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Joffre Ville - Diego - Ramena </h2>
            <p class="p-0 fs-4.8"> Road to Ramena , you will pass to "SUGAR LOAF" emblematic of Diégo , the
              Baobab Madagascar Suarenzis endemic on the North , fisherman village.
              Visit of Diego town ,
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 11:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ramena - Emerald Sea - Ramena </h2>
            <p class="p-0 fs-4.8"> Excursion at Emerald sea .
              You will take motors boat to Emerald Sea .
              The boat will navigate across the most beautiful lagoon's cristalline waters, coral reefs teeming with
              hundred of red fish .
              Emerald sea is perfect for swimming with it's shallow water . It's perfect to exploring this underwater
              paradise .
              Tasty fresh and sea food during the excursion.
              <br> Overnight at the hotel .

            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 12:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ramena - 3 baies Baies of Sakalava , Pigeon, Baies of
              Sakalava ideal for surfing </h2>
            <p class="p-0 fs-4.8"> Baies of Sakalava ideal for surfing ,
              Water sports like surfing ,Sakalava bay is ideal .
              <br> Overnight at the hotel

            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 13:</h4>
            <h2><i class="fa-solid fa-location-dot"></i>  Ramena - Diego - Tana</h2>
            <p class="p-0 fs-4.8"> Road to Diego
              <br> Flight to Antananarivo


            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 14</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana </h2>
            <p class="p-0 fs-4.8"> ity tour in Antananarivo
              <br> Transfert to the airport for your international flight
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="north_nosy" id="section2">
    <h3 class="text-center text-md-start"><i class="fa-solid fa-clock"></i> About 9 days</h3>
    <div class="point text-center"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">Classical North Tour with Nosy-be</h1>

    <div id="carouselExampleControl" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner" id="inner">
        <div class="carousel-item active">
          <img src="./../../pictures/Antakarana.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../../pictures/ankarana.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./pictures/nosyIranja.jpg" class="d-block w-100" alt="...">
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
            <h2><i class="fa-solid fa-location-dot"></i> Tana-Ankarafantsika</h2>
            <p class="text-dark"> Lore ipsum dolor sit amet consectetur adipisicing elit. Et neque sapiente deleniti
              alias error commodi sit similique placeat, doloribus earum, aut asperiores necessitque, aperiam?
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 3:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarafantsika </h2>
            <p class="p-0 fs-4.8"> like Coquerel's Sifaka, Brown lemur, Milne Edwards Sportive lemurs if
              you're
              lucky. The bird, Ankarafantsika National Park is home of bird , BAOBAB, medicinal plants
              <br>Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 4:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarafantsika - Port Berger - Antsohihy</h2>
            <p class="p-0 fs-4.8">Road to Antsohihy through the local people in the North part of Madagascar
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 5:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Antsohihy - Ambanja</h2>
            <p class="p-0 fs-4.8"> Visit ot 1h for the reserv lead by the local people for the BLACK INDRI in
              wild.
              <br>Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 6:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ambanja - Ankarana</h2>
            <p class="p-0 fs-4.8"> Visit of MILLOT PLANTATION in Ambanja for the plantation of cacao, vanilla,
              Ilang Ilang , before road to Ankarana .Millot plantation show you how to plant cocoa until the packing of
              exportation ,
              <br> Overnight at the hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 7:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarana</h2>
            <p class="p-0 fs-4.8">Visit of ANKARANA NATIONAL PARK for the TSINGY d'ANKARANA , Tsingy formed by
              llimestones similar in Tsingy of Bemaraha .The lemurs, birds, The sacred bat's cave, Baobab
              <br> Overnight at the hotel
            </p>
          </div>
        </div>
        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 8:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarana - Red Tsingy- Ambanja</h2>
            <p class="p-0 fs-4.8">Road to Ambanja ; before road to Ambanja ;you will drive to Red Tsingy , Red
              Tsingy , eroded red soil formed by laterite formation with his amazing colours red .
              <br> Overnight at the hotel .
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Day 9:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ambanja - ANKIFY- Nosy-Be</h2>
            <p class="p-0 fs-4.8"> Road to Ankify , embarcader , the place that you will take boat speed to
              Nosy
              Be .
              <br> Boat speed to Nosy Be for 2hours .
              <br> Overnight at the hotel
            </p>
          </div>
        </div>


      </div>

    </div>
  </div>

  <div class="nosy-Be" id="section3">
    <!-- <h3 class="text-center text-md-start"><i class="fa-solid fa-clock"></i> About 9 days</h3> -->
    <div class="point text-center" id="point3"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">Nosy-Be Town</h1>

    <div id="carouselExampleControl2" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner" id="inner">
        <div class="carousel-item active">
          <img src="./../../pictures/nosy-be.webp" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-item active">
          <img src="./../pictures/couvertureNord.jpg" class="d-block w-100" alt="...">
        </div>
        
    </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExamplecontrol2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container-fluid" id="cont">
      <div class="row gy-5">
        <div class=" col-10 w-100 col-md-7">
          <div class="bg-md-danger p-3 rounded">
            
            <h2><i class="fa-solid fa-location-dot"></i> Nosy-Be</h2>
            <p class="p-1">
              NOSY BE is one the best beach destination .The volcanic island of Nosy Be has all ingredients that you'd
              except with his soft white sand, turquoise water and wonderful seafood .You're like in Paradise . It's
              ideal starting point for cruises to paradisiac archipelagos.
              Snorkelling, Diving, Fishing, Sailing,windsurf,kitesurf ; visit of Park National of Lokobe , Sunseat in
              Mount Passo are the activities in Nosy Be .
              WHALEWATCHING in July until NOvember is one of activitie also .
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

</div>

<div class="up" id="Button"><i class="fa-solid fa-chevron-up"></i></div>


<footer class="w-100 bg-dark" id="contact">
  <div class="container">
    <div class="row gx-3">
      <div class="col-12 col-md-9 col-lg-3">
        <div class="follow">
          <h1 class="text-light text-center text-md-center text-lg-start">Follow us on </h1>
          <div class="d-flex text-center text-md-start" id="row">
            <a href="https://web.facebook.com/madagascarvisite" target="_blank"><i class="icon fa-brands fa-facebook-f"></i></a>
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
           <a href="#"  class="text-decoration-none"> <li>North Tour</li></a>
           <a href="./../south/south.html"  class="text-decoration-none"> <li>South Tour</li></a>
            <a href="./../east/east.html"  class="text-decoration-none"><li>East Tour</li></a>
              <a href="./../weast/weast.html"  class="text-decoration-none"><li>Weast Tour</li></a>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-3">
        <div class="tour">
          <h1 class="text-light text-center mt-5 mt-lg-0">Follow our page</h1>

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
          <i class="fa-solid fa-location-dot text-light"></i></i></i> email: lovasson@yahoo.fr
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


  <!-- <footer id="footer"> 
   <div class="footer_contact">
     <h1>Contact us</h1>

     <p class="phone"> <img src="../../logo/telephone20x20.png"   width=20 height=20> telephone: +261(0)34 73 440 45</p>
    <a href="lovasson@yahoo.fr"><p class="mail"><img src="../../logo/lettre20x20.png"  width=20 height=20> email: lovasson@yahoo.fr</p></a>
     <p><i class="fa fa-whatsapp" width=20 height=20></i> WhatsApp:  +261(0)34 73 440 45</p>

      <div class="border_"></div>

     <div class="icones">
       <img src="../../logo/twitter.png" width=48 height=48>
      <a href="https://web.facebook.com/madagascarvisite" class="img_fb" target="_blank"><img class="img_fb" src="../../logo/FaceBook.png" width=48 height=48></a>
       <a href="https://www.linkedin.com" target="_blank"><img src="../../logo/LinkedIn.png" width=48 height=48></a>
     </div>
</div>

<div class="footCopright">
<center>
Madagascar Visite 2023 - All right reserved - Politique de confidentialité - Mentions légales - Plan du site 
</center>
</div>
</footer>  -->
  <script src="components/writ.js"></script>
  <script src="./../../index.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="./map.js"></script>
  <script>
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