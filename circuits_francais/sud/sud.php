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
  <link rel="stylesheet" href="sud.css">
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
            <a class="nav-link text-dark" href="./../../index_francais.php"><i class="fa-solid fa-house  text-dark"></i>
              Accueil</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <div class="active"></div>
              <i class="fa-solid fa-car text-dark"></i> Nos tours
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../../circuits_francais/nord/nord.php">Circuit Nord</a></li>
              <li><a class="dropdown-item" href="#">Circuit Sud</a></li>
              <li><a class="dropdown-item" href="./../../circuits_francais/est/est.php">Circuit Est</a></li>
              <li><a class="dropdown-item" href="./../../circuits_francais/ouest/ouest.php">Circuit Ouest</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="../../index_francais.php#book"><i class="fa-solid fa-book text-dark"></i> Livre
              d' or</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="../../index_francais.php#about"><strong><i
                  class="fa-solid fa-info"></i></strong> A propos</a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="../../index_francais.php#tour" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="./../../pictures/francais.png" class="drap" alt=""> Francais
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="./../../circuits/south/south.php"> <img src="./../../logo/ang.jpg" class="drap" alt="">  Anglais</a></li>
                </ul>
              </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="couv">
    <div class="w-100" id="couv_"><img src="../../pictures/fenetre.jpg" class="w-100"></div>
    <h1 class="text-center">Madagascar Tour pour le Lémurien maki-catta</h1>

    <!-- <div class="couvertureNord-responsive"><img src="../pictures/couvertureNord-responsive.jpg" alt=""></div> -->
  </div>

  <div class="south">
    <h1 class=" title_south text-start text-md-start">Details du circuit

    </h1>
    <div class="borde"></div>
    <p class="desc fs-5   mx-5">LE CIRCUIT SUD de MADAGASCAR le long du RN7 vous offre le meilleur et variété de
      paysages à travers les montagnes, les riziéres en terasse, les canyons et massifs d' Isalo , le montagne
      granitique du PIC BOBY . Les variétés de climat en passant par le climat tropical humide de Ranomafana , la
      verdure de l' arbre de voyageur à Manakara par le climat aride et végétation du Sud à L'Isalo .
      Lés lémuriens, les chaméleons, lés oiseaux idéals par les ornithologues rendent le CIRCUIT SUD excéptionnel <br>
      <br>
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
    <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> A peu prés 12 jours</h3>
    <div class="point text-start" id="point"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">Circuit Sud Classique</h1>





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

    <h1 class="text-center" id="plan1">Plan du voyage</h1>
    <div class="  text-center borde1"> </div>

    <div class="container-fluid" id="cont">
      <div class="row gy-5">
        <div class=" col-10 w-100 col-md-7">
          <div class="bg-md-danger p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 1:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0">
              Acceuil à l' aéroport , Transfert à l' hôtel .
              Mise au point pour le détail du voyage
              Si le temps vous le permet , Vous pourriez admirer au palais de la reine Antananarivo et ses environs pour
              un point de
              vue magnifique , La plus haute altitude à Antananarivo
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 2:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana- Antsirabé</h2>
            <p class="p-0">Route pour Antsirabe, à travers le paysages des hauts plateaux, la maison argile
              traditionelle de couleur rouge pour joindre Antsirabe qui signifie là où il y a beaucoup de sel ,
              Antsirabe la ville d'eau avec ses sources thermales et aussi la capitale des pousses pousses
              <br> Nuit à l' hôtel

            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 3:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Antsirabé - Ambositra -Ranomafana</h2>
            <p class="p-0 fs-4.8"> Tour de ville à Antsirabe avant de partit pour Ranomafana , visite de l'hotel des
              Thermes; visite de l'atelier de fabrication locale de transformation des cornes de zébu
              Stop à Ambositra , Ambositra ville reputée pour la marquetterie et sculpture, visite de boutique d'artisan
              de marquetterie
              Route pour Ranomafana à travers la région Betsileo , avec le paysage des riziéres en térasses , spécialité
              du tribus Betsileo
              Contact avec les populations locales en cours de route
              Visite nocturne pour les lémuriens, grenouilles; chaméléons
              <br>Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 4:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana National Parc</h2>
            <p class="p-0 fs-4.8"> Visit du Ranomafana national parc , de climat tropical humide, apprécié par les
              naturalistes.Avec ses 12éspèces de lémuriens , les chaméléons, les plantes médicinales, les orchidées, les
              oiseaux idéal pour les ornithologues
              <br> Nuit à l' hôtel
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 5:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana - Fianarantsoa - Ambalavao</h2>
            <p class="p-0 fs-4.8">Route pour Ambalavao , grand marché de zébu tous les mercredis à Ambalavao , le plus
              grand des marché de zébu à Madagascar.
              Ambalavao est connu aussi pour le papier Antemoro et la soie .Visite de l' atelier artisanale de
              fabrication de papier Antemoro et de la soie
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 6:</h4>
            <h2><i class="fa-solid fa-location-dot"></i>Ambalavao - Isalo</h2>
            <p class="p-0 fs-4.8"> Visite du réserve villageoise ANJA avant de partir pour Isalo , Anja réserve crée par
              des villageois pour la protéction du faune et flore dont Anja réserve est un modéle pour la protection de
              l' environnement
              Vous aurez l' opportunité de voir spécialement le LEMUR CATTA , chaméleons, plantes médicinales , le point
              de vue où vous pourrez aperçevoir Ambalavao et ses environs.
              On continue la route en passant par Ihosy, le capital de tribus Bara à travers le climat désertique du
              Sud, le plateau de Ihorombe à perte de vue
              <br> Nuit à l' hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 7:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Isalo</h2>
            <p class="p-0 fs-4.8">
              Visite du parc nationale d' Isalo , le massifs d' Isalo .Toute la journée pour visiter l' Isalo à travers
              le canyon de l' Isalo , le piscine naturelle , la piscine bleu et noir , les lémuriens, les oiseaux
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>


        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 8:</h4>
            <h2><i class="fa-solid fa-location-dot"></i>Isalo - Tuléar - Ifaty</h2>
            <p class="p-0 fs-4.8">
              Route pour Ifaty à travers le paysage désertique du Sud, avant d'entrée au pays du soleil à Tuléar où
              Ifaty
              Rencontre avec la populatiol locale
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 9, Jour 10:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ifaty</h2>
            <p class="p-0 fs-4.8">
              Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 11:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ifaty - Tuléar -Tana en Avion</h2>
            <p class="p-0 fs-4.8">
              Nuit à l' hôtel
            </p>
          </div>
        </div>
        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 12:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0 fs-4.8">
              Transfert à l' aéroport
              Tour de ville dépend de votre horaire de vol international .Visite à lemur's parc, marché de Digue pour
              les souvenirs
              <br> Transfert à l' aéroport pour votre vol international
            </p>
          </div>
        </div>



      </div>
    </div>
  </div>


  <div class="comb" id="section2">
    <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> A peu prés 15 jours</h3>
    <div class="point text-start" id="point"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">Circuit Sud Classique en Combinaison avec le Train et le
      canal de Pangalane</h1>

    <div id="carouselExampleControl" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner" id="inner">
        <div class="carousel-item active">
          <img src="./../pictures/train.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../pictures/fond.JPG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../pictures/antsirabe_gare.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../pictures/parc6.jpg" class="d-block w-100" alt="...">
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

    <h1 class="text-center" id="plan1">Plan du Voyage</h1>
    <div class="  text-center borde1"> </div>

    <div class="container-fluid" id="cont">
      <div class="row gy-5">
        <div class=" col-10 w-100 col-md-7">
          <div class="bg-md-danger p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 1:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0">
              Acceuil à l' aéroport , Transfert à l' hôtel .
              Mise au point pour le détail du voyage
              Si le temps vous le permet , Vous pourriez admirer au palais de la reine Antananarivo et ses environs pour
              un point de vue magnifique , La plus haute altitude à Antananarivo
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 2:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana- Antsirabé</h2>
            <p class="p-0"> Route pour Antsirabe, à travers le paysages des hauts plateaux, la maison argile
              traditionelle de couleur rouge pour joindre Antsirabe qui signifie là où il y a beaucoup de sel ,
              Antsirabe la ville d'eau avec ses sources thermales et aussi la capitale des pousses pousses
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 3:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Antsirabé - Ambositra- Fianarantsoa</h2>
            <p class="p-0 fs-4.8">Route pour Fianarantsoa à travers le Betsileo région avec des variétés de montagnes,
              les fameux riziéres en térasses
              <br> Nuit à l' hôtel
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 4:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Fianarantsoa -Manakara by Train</h2>
            <p class="p-0 fs-4.8"> Départ le matin à Fianarantsoa pour prendre le train pour joindre Manakara.
              Les paysages verdoyants , rencontre direct avec les populations locaux, rend ce circuit spectaculaire
              <br> Nuit à l' hotel
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 5:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Manakara</h2>
            <p class="p-0 fs-4.8"> Excursion sur le canal de Pangalane avec la pirogue locale , des fruits de mers,
              langoustes frais préparés par les guides comme déjeuner
              Visite du village des pêcheurs
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 6:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Manakara - Ranomafana</h2>
            <p class="text-dark p-0 fs-4.8">Route pour Ranomafana à travers les fôréts de Ravinala ou arbre de voyageurs
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 7:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana National Parc</h2>
            <p class="p-0 fs-4.8">
              Visit du Ranomafana national parc , de climat tropical humide, apprécié par les naturalistes.Avec ses
              12éspèces de lémuriens , les chaméléons, les plantes médicinales, les orchidées, les oiseaux idéal pour
              les ornithologues
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>


        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 8:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana - Ambalavao</h2>
            <p class="p-0 fs-4.8">
              Route pour Ambalavao , grand marché de zébu tous les mercredis à Ambalavao , le plus grand des marché de
              zébu à Madagascar.
              Ambalavao est connu aussi pour le papier Antemoro et la soie .Visite de l' atelier artisanale de
              fabrication de papier Antemoro et de la soie
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 9:</h4>
            <h2><i class="fa-solid fa-location-dot"></i>Ambalavao - Isalo</h2>
            <p class="p-0 fs-4.8">
              Visite du réserve villageoise ANJA avant de partir pour Isalo , Anja réserve crée par des villageois pour
              la
              protéction du faune et flore dont Anja réserve est un modéle pour la protection de l' environnement
              Vous aurez l' opportunité de voir spécialement le LEMUR CATTA , chaméleons, plantes médicinales , le point
              de vue où
              vous pourrez aperçevoir Ambalavao et ses environs.
              On continue la route en passant par Ihosy, le capital de tribus Bara à travers le climat désertique du
              Sud, le plateau
              de Ihorombe à perte de vue
              <br> Nuit à l' hotel

            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 10:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Isalo</h2>
            <p class="p-0 fs-4.8">
              Visite du parc nationale d' Isalo , le massifs d' Isalo .Toute la journée pour visiter l' Isalo à travers
              le canyon de
              l' Isalo , le piscine naturelle , la piscine bleu et noir , les lémuriens, les oiseaux
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 11:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Isalo - Tuléar - Ifaty</h2>
            <p class="p-0 fs-4.8">
              Visite du parc nationale d' Isalo , le massifs d' Isalo .Toute la journée pour visiter l' Isalo à travers
              le canyon de l' Isalo , le piscine naturelle , la piscine bleu et noir , les lémuriens, les oiseaux
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 12, Jour 13:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ifaty</h2>
            <p class="p-0 fs-4.8">
              Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 14:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ifaty - Tana en Avion</h2>
            <p class="p-0 fs-4.8">
              Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 15:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0 fs-4.8">
              Transfert à l' aéroport
              <br> Tour de ville dépend de votre horaire de vol international .Visite à lemur's parc, marché de Digue
              pour les souvenirs
              <br> Transfert à l' aéropor pour votre vol international
            </p>
          </div>
        </div>







      </div>
    </div>
  </div>

  <div class="adventure" id="section3">
    <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> A peu prés 15 jours</h3>
    <div class="point text-start" id="point"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">Circuits Aventures: Parc National Andringitra et Village
      de Tsaranoro</h1>

    <div id="carouselExampleControl2" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner" id="inner">
        <div class="carousel-item active">
          <img src="./../pictures/andringitra.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../pictures/antsirabe_gare.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../pictures/fond.JPG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./../pictures/parc6.jpg" class="d-block w-100" alt="...">
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

    <h1 class="text-center" id="plan1">Plan du Voyage</h1>
    <div class="  text-center borde1"> </div>

    <div class="container-fluid" id="cont">
      <div class="row gy-5">
        <div class=" col-10 w-100 col-md-7">
          <div class="bg-md-danger p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 1:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0">
              Acceuil à l' aéroport , Transfert à l' hôtel .
              Mise au point pour le détail du voyage
              Si le temps vous le permet , Vous pourriez admirer au palais de la reine Antananarivo et ses environs pour
              un point de vue magnifique , La plus haute altitude à Antananarivo
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 2:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana- Antsirabé</h2>
            <p class="p-0"> Route pour Antsirabe, à travers le paysages des hauts plateaux, la maison argile
              traditionelle de couleur rouge pour joindre Antsirabe qui signifie là où il y a beaucoup de sel ,
              Antsirabe la ville d'eau avec ses sources thermales et aussi la capitale des pousses pousses
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 3:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Antsirabé - Ranomafana</h2>
            <p class="p-0 fs-4.8">Tour de ville à Antsirabe avant de partit pour Ranomafana , visite de l'hotel des
              Thermes; visite de l'atelier de fabrication locale de transformation des cornes de zébu
              Stop à Ambositra , Ambositra ville reputée pour la marquetterie et sculpture, visite de boutique d'artisan
              de marquetterie
              Route pour Ranomafana à travers la région Betsileo , avec le paysage des riziéres en térasses , spécialité
              du tribus Betsileo
              Contact avec les populations locales en cours de route
              Visite nocturne pour les lémuriens, grenouilles; chaméléons
              <br> Nuit à l' hôtel
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 4:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana National Park</h2>
            <p class="p-0 fs-4.8"> Visit du Ranomafana national parc , de climat tropical humide, apprécié par les
              naturalistes.Avec ses 12éspèces de lémuriens , les chaméléons, les plantes médicinales, les orchidées, les
              oiseaux idéal pour les ornithologues
              <br> Nuit à l' hôtel
            </p>
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 5:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ranomafana -Ambalavao</h2>
            <p class="p-0 fs-4.8"> Route pour Ambalavao , grand marché de zébu tous les mercredis à Ambalavao , le plus
              grand des marché de zébu à Madagascar.
              Ambalavao est connu aussi pour le papier Antemoro et la soie .Visite de l' atelier artisanale de
              fabrication de papier Antemoro et de la soie
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 6:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ambalavao - Andringitra- Andriampotsy</h2>
            <p class="p-0 fs-4.8"> Route pour Andringitra seulement accessible avec la voiture 4X4 à 47km d' Ambalavao ,
              Andringitra , le 2éme montagne plus haut à Madagascar avec ses 2685m d' altitiude
              Début du trekking, visite de la grotte, les 2chutes sacrés Riandahy et Riambavy , continuation de la
              marche à travers la fôret de "Phillipia" pour joindre le campement d' Amdriampotsy, pour la premiére nuit
              <br> Nuit sous tente au campement d' Andriampotsy
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 7:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Andriampotsy - Peak boby - Andranolava</h2>
            <p class="p-0 fs-4.8">
              Après le petit déjeuner, on continue le trekking pour l' accession au PIC BOBY , à travers les montagnes
              et les
              végétations endémiques .
              Spectaculaire vue au PIC BOBY , puis on descend pour joindre le campement d" Andranolava
              <br> Nuit sous tente au campement d' Andranolava
            </p>
          </div>
        </div>


        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 8:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Andranolava - Diavolana -Camp Catta</h2>
            <p class="p-0 fs-4.8">
              Après le petit déjeuner ; on continue le trekking , en passant par le spectaculaire plateaux Diavolana, un
              magnifique paysage des roches resemblant à la lune , puis continuation de la marche pour joindre camp
              catta
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 9:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Camp Catta</h2>
            <p class="p-0 fs-4.8">
              CAMP CATTA se situe au pied de la vallée de Tsaranoro ,
              Le trekking au Valleé de Tsaranoro pour atteindre le PIC CAMELEON , avec ses escalades et ses sentiers de
              randonnées spectaculairement pittoresque. Les plantes succulents endémiques, et les lémuriens MAKI CATTA
              vous donnent une autre sensation de voyage .
              <br> Nuit à l' hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 10:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Camp Catta - Isalo</h2>
            <p class="p-0 fs-4.8">
              Route pour Isalo ; en passant par Ihosy le capital de Bara tribus à travers le sud et désertique paysage
              du Sud, le plateau d'Ihorombe qui s'étend à perte vue
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 11:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Isalo</h2>
            <p class="p-0 fs-4.8">
              Visite du parc nationale d' Isalo , le massifs d' Isalo .Toute la journée pour visiter l' Isalo à travers
              le canyon de l' Isalo , le piscine naturelle , la piscine bleu et noir , les lémuriens, les oiseaux
              Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 12:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Isalo - Tuléar - Ifaty</h2>
            <p class="p-0 fs-4.8">
              Route pour Ifaty à travers le paysage désertique du Sud, avant d'entrée au pays du soleil à Tuléar où
              Ifaty
              Rencontre avec la populatiol locale
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 13, Jour 14:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ifaty</h2>
            <p class="p-0 fs-4.8">
              Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 15:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ifaty - Tana en Avion</h2>
            <p class="p-0 fs-4.8">
              Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 16:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana</h2>
            <p class="p-0 fs-4.8">
              Tour de ville dépend de votre horaire de vol international .Visite à lemur's parc, marché de Digue pour
              les souvenirs
              <br>Transfert à l' aéroport pour votre vol international
            </p>
          </div>
        </div>







      </div>
    </div>

  </div>


  <div class="anakao">
    <div class="point" id="point4"></div>
    <h1 text="text-center text-lg-start">EXTENSION : Le meilleur Plage à Anakao </h1>

    <div class="container">
      <div class="row">
        <div class="col-13 col-md-11">
          <p> Relax sur la plage <br>
            plongée sous marine <br>
            Excursion avec la pirogue locale pour voir les corails <br>
            Excursion avec la pirogue locale à Nosy Ve pour l'oiseaux "Paille en Queue" idéal pour LES ORNITHOLOGUES
            <br>
            Safari baleine de Juillet à Septembre </p>
        </div>
      </div>
    </div>
  </div>

  <div class="zafimaniry">
    <div class="point" id="point4"></div>
    <h1 text="text-start w-75">EXTENSION: Le Village Zafimaniry à Antoetra</h1>

    <div class="container">
      <div class="row">
        <div class="col-11">
          <p>
            ANTOETRA se situe à 45km d' Ambositra, Le village où habitent les Zafimaniry,
            Les ZAFIMANIRY reputés pour l' habilité de la sculpture et marquetterie en bois avec la main, presque toute
            les familles y vivent come revenus.
            Presque toutes les maisons sont construits avec du bois, les portes, fenêtres, les tables, les ustensils,
            les objets du quotidien sont sculptés avec des écritures géométriques , la raison pour laquelle reconnu par
            l' Unesco .
            TREKKING à Ifasina pour la découverte du village Zafimaniry, les magnifiques paysages des rizières en
            térasses
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
          <h1 id="h_comments">laisser un commentaire</h1>
          <div class="borde2"></div>

          <form action="" method="POST" onsubmit="return checkWordCount(this, 120);">
            <div class="row gy-5">
              <input type="email" name="email" class="w-100" placeholder="Votre email">
              <input type="text" name="name" class="w-100" placeholder="Votre name" id="name">
              <textarea type="text" name="coms" class="w-100" placeholder="Your comments" id="coms"></textarea>
              <button type="submit" name="send" class="btn p-2">Envoyer</button>
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
            <h1 class="text-light text-center text-md-center text-lg-start">Nous suivre sur </h1>
            <div class="d-flex text-center text-md-start" id="row">
              <a href="https://web.facebook.com/madagascarvisite" target="_blank" id="item_1"><i
                  class="icon fa-brands fa-facebook-f"></i></a>
              <a href="https://www.linkedin.com" target="_blank"><i class="icon fa-brands fa-linkedin-in"></i></a>
              <i class="icon fa-brands fa-twitter"></i>
              <i class="icon fa-brands fa-whatsapp"></i>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-7 mt-md-5 mt-lg-0 col-lg-3">
          <div class="links text-center text-md-center">
            <h1 class="text-light">Liens</h1>
            <ul class="text-center">
              <li class="up" style="cursor:pointer"> Accueil</li>
              <li>Nos Tours</li>
              <li>Livre d' or</li>
              <li>A propos</li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-3 mt-md-5 mt-lg-0">
          <div class="tour">
            <h1 class="text-light text-center text-md-start">Circuits</h1>
            <ul class="text-center">
              <a href="./../../circuits_francais/nord/nord.php" class="text-decoration-none">
                <li>Nord</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>Sud</li>
              </a>
              <a href="./../../circuits_francais/est/est.php" class="text-decoration-none">
                <li>Est</li>
              </a>
              <a href="./../../circuits_francais/ouest/ouest.php" class="text-decoration-none">
                <li>Ouest</li>
              </a>
            </ul>
          </div>
        </div>

        <div class="col-12 col-md-11 col-lg-3">
          <div class="tour">
            <h1 class="text-light text-center mt-5 mt-lg-0">Autre tour</h1>
            <ul class="text-center mx-0">
                            <a class="text-decoration-none" href="./../aventures/adventures.php"><li>Aventures tours</li></a>
                        </ul>
          </div>
        </div>
      </div>

      <div class="row mt-5" id="row2">
        <div class="border"></div>
        <div class="col-12 col-lg-3 col-md-12">
          <h1 class="text-start  text-light">Nous contacter: </h1>
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