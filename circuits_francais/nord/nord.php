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
  <link rel="stylesheet" href="nord.css">
  <link rel="icon" type="image/x-icon" href="./../../logo/madagascar-visite-ico.png">

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
              <i class="fa-solid fa-car text-dark"></i> Circuits
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Circuit Nord</a></li>
              <li><a class="dropdown-item" href="./../sud/sud.php">Circuit Sud</a></li>
              <li><a class="dropdown-item" href="./../est/est.php">Circuit Est</a></li>
              <li><a class="dropdown-item" href="./../ouest/ouest.php">Circuit Ouest</a></li>
              <li><a class="dropdown-item" href="./../aventures/adventures.php">Circuit Aventures</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="./../../index_francais.php#book"><i class="fa-solid fa-book text-dark"></i> Livre d 'or</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="../../index_francais.php#about"><strong><i
                  class="fa-solid fa-info"></i></strong> A propos</a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#tour" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="./../../pictures/francais.png" class="drap" alt=""> Francais
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="./../../circuits/north/north.php"> <img src="./../../logo/ang.jpg" class="drap" alt="">  Anglais</a></li>
                </ul>
              </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="couv">
    <div class="w-100" id="couv_"><img src="./pictures/nosyIranja.jpg" class="w-100"></div>

    <h1 class="text-center">Madagascar Visite pour le BROOKESIA MINIMA</h1>

    <!-- <div class="couvertureNord-responsive"><img src="../pictures/couvertureNord-responsive.jpg" alt=""></div> -->
  </div>

  <div class="north">
    <h1 class=" title_north  text-start text-md-start">Details du circuit

    </h1>
    <div class="border_"></div>
    <p class="desc fs-5 mx-5">Le Circuit NORD renferme des surprises de découvrir en une place tous les beautés de
      Madagascar avec la plus belle plage au monde.
      Avec ses diversifications , endémiques faunes et flores, qui existent seulement à Madagascar, comme les plantes
      médicinales , les baobabs, les oiseaux, les lémuriens, le chaméléon dont le BROOKESIA MINIMA le plus petit
      chaméleon au monde qui mesure moin d'une pouce . le TSINGY à Ankarana . le TSINGY ROUGE , <br>
      LE CIRCUIT NORD vous offre aussi la belle plage le Mer d' Eméraude un lagon aux eaux cristallines, des massifs de
      coraux aux poissons multicolores, , les 3 baies ( baies de Sakalava, baie de pigeon, baie dunes) .
      <br><br>
      LE CIRCUIT NORD vous fais découvrir aussi les meilleurs plages de Madagascar à NOSY BE , avec ses bancs de sables
      blancs,eau turquoise, C'est juste à côté du paradis . LE SAFARI de BALEINE au mois de juillet jusqu' à novembre .
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
    <h3 class="text-center text-lg-start"><i class="fa-solid fa-clock"></i> A peu prés 14 jours</h3>
    <div class="point text-start" id="point"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">Classique Circuit Nord</h1>

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
              un point de
              vue magnifique , La plus haute altitude à Antananarivo
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 2:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana-Ankarafantsika</h2>
            <p>Route pour Ankarafantsika à travers les vastes étendues de savanes, du plateaux du Tampoketsa, avec le
              paysage subdésertiques: les marchands des mangues, jujubes, tamarins en fonction des saisons .
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 3:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarafantsika </h2>
            <p class="p-0 fs-4.8"> Visite du PARC NATIONAL d' ANKARAFANTSIKA pour les plantes médicinales, le baobab,
              les lémuriens comme le Coquerelle Sifaka, les oiseaux, Le parc National Ankarafantsika est idéal pour
              l'observation des oiseaux
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 4:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarafantsika - Port Berger - Antsohihy</h2>
            <p class="p-0 fs-4.8">Route pour Antsohihy . Sur la route , vous rencontreriez les populations locales du
              Nord
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 5:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Antsohihy - Ambanja</h2>
            <p class="p-0 fs-4.8"> Route pour Ambanja
              Ambanja , une ville entourée de plantation de cacao , d'Ilang Ilang et de Vanille
              Visite du réserve villageoise pour le Black INDRI INDRI
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 6:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ambanja - Ankarana</h2>
            <p class="p-0 fs-4.8">Route pour Ankarana
              Visite de la plantation MILLOT , plantation de vanille, d' Ilang Ilang, de cacao où ils vont vous
              démontrer les étapes à suivre pour planter le cacao jusqu' à son exportation .
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 7:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarana</h2>
            <p class="p-0 fs-4.8">Visite du parc National de l' ANKARANA pour le TSINGY d' ANKARANA . Tsingy d' Ankarana
              est le même formation que ceux du Tsingy de Bemaraha. A la découverte des Tsingys , une vastes étendues de
              roches calcaires sculptés par l' érosion, les grottes et rivières souterraines , les caves des chauves
              souris , les faunes et flores les euphorbias, les pachypodium, les baobabs ; les lémuriens , les oiseaux,
              tenrecs, mangoustes Galidia Elegans à queue annelés
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>
        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 8:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarana - Red Tsingy- Joffre ville</h2>
            <p class="p-0 fs-4.8">Route pour Joffre Ville .
              A la découverte du Tsingy rouge avant d' arriver à Joffre ville , de formation latérite avec ses fabuleux
              couleurs rouges
              TSINGY ROUGE née de la rencontre de l'eau de pluie et d'une roche compactée il y a plusieurs millions d'
              années .Tsingy rouge est le résultat de l' érosion de ce massif de grés .
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 9:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Joffre ville - Mountain Amber National Park</h2>
            <p class="p-0 fs-4.8"> Le visite du parc Nationale de Montagne d' Ambre le plus vieux parcs à Madagascar
              crée en 1958 a pour but de préserver le trésor biologique faunes et flores.
              Avec ses climats tropicales humides; le parc vous offre l'opportunité de voir des cascades, des lémuriens
              comme le makis bruns de Sanford, Chirogale, spécalement le chaméléon " BROOKESIA MINIMA" le plus petit
              chaméléon au monde qui mesure au moin d'une pouce.
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 10:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Joffre Ville - Diego - Ramena </h2>
            <p class="p-0 fs-4.8">Route pour Ramena
              Visite de la ville de Diégo avant d' arriver à Ramena , en passant par l'île du "PAIN du SUCRE" emblème de
              Diégo , le baobab Madagascar Suarenzis endémique à Madagascar
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 11:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ramena - Emerald Sea - Ramena </h2>
            <p class="p-0 fs-4.8">Excursion toute la journée au Mer d' Eméraude
              Départ avec le bateaux pour le fameux MER D' EMERAUDE , un lagon aux eaux cristallines , des massifs
              coraux , banc de sables blancs .
              Les délicieux et frais fruits de mer vous attend à midi pendant l' excursion
              Baignade, plongée avec masque et cuba
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 12:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ramena - 3 baies Baies of Sakalava , Pigeon, Baies of
              Sakalava ideal for surfing </h2>
            <p class="p-0 fs-4.8"> Visite des 3baies; le Baie de Sakalava, pigeon; de dûnes
              Baie de Sakalava pour les funs de sports , le surfs .
              <br> Baies de dûnes et Pigeon sont bordés des plages désertes
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 13:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ramena - Diego - Tana</h2>
            <p class="p-0 fs-4.8">Route pour Ramena
              Avion pour Antananarivo
              <br> Nuit à l'hôtel

            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 14</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Tana </h2>
            <p class="p-0 fs-4.8"> Tour de ville à Antananarivo
              <br> Transfert à l' aéroport pour votre vol international
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="north_nosy" id="section2">
    <h3 class="text-center text-md-start"><i class="fa-solid fa-clock"></i> A peu prés 9 jours</h3>
    <div class="point text-center"></div>
    <h1 class="text-center text-lg-start  m-5" id="classic_h1">Circuit Nord avec Nosy-Be</h1>

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
            <h2><i class="fa-solid fa-location-dot"></i> Tana-Ankarafantsika</h2>
            <p class="text-dark"> Route pour Ankarafantsika à travers les vastes étendues de savanes, du plateaux du
              Tampoketsa, avec le paysage subdésertiques: les marchands des mangues, jujubes, tamarins en fonction des
              saisons .
              <br> Nuit à l' hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 3:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarafantsika </h2>
            <p class="p-0 fs-4.8"> Visite du PARC NATIONAL d' ANKARAFANTSIKA pour les plantes médicinales, le baobab,
              les lémuriens comme le Coquerelle Sifaka, les oiseaux, Le parc Nationaql Ankarafantsika est idéal pour
              l'observation des oiseaux
              <br> Nuit à l'hotel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 4:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarafantsika - Port Berger - Antsohihy</h2>
            <p class="p-0 fs-4.8">Route pour Antsohihy . Sur la route , vous rencontreriez les populations locales du
              Nord
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 5:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Antsohihy - Ambanja</h2>
            <p class="p-0 fs-4.8"> Route pour Ambanja
              Ambanja , une ville entourée de plantation de cacao , d'Ilang Ilang et de Vanille
              Visite du réserve villageoise pour le Black INDRI INDRI
              <br> Nuit à l'hôtel

            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 6:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ambanja - Ankarana</h2>
            <p class="p-0 fs-4.8">Route pour Ankarana
              Visite de la plantation MILLOT , plantation de vanille, d' Ilang Ilang, de cacao où ils vont vous
              démontrer les étapes à suivre pour planter le cacao jusqu' à son exportation .
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 7:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarana</h2>
            <p class="p-0 fs-4.8">Visite du parc National de l' ANKARANA pour le TSINGY d' ANKARANA . Tsingy d' Ankarana
              est le même formation que ceux du Tsingy de Bemaraha. A la découverte des Tsingys , une vastes étendues de
              roches calcaires sculptés par l' érosion, les grottes et rivières souterraines , les caves des chauves
              souris , les faunes et flores les euphorbias, les pachypodium, les baobabs ; les lémuriens , kes oiseaux,
              tenrecs, mangoustes Galidia Elegans à queue annelés
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>
        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 8:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ankarana - Red Tsingy- Ambanja</h2>
            <p class="p-0 fs-4.8">Route pour Ambanja .
              A la découverte du Tsingy rouge avant de partir pour Ambanja , de formation latérite avec ses fabuleux
              couleurs rouges
              TSINGY ROUGE née de la rencontre de l'eau de pluie et d'une roche compactée il y a plusieurs millions d'
              années .Tsingy rouge est le résultat de l' érosion de ce massif de grés .
              <br> Nuit à l'hôtel
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="p-3 rounded">
            <h4><i class="fa-regular fa-calendar-days"></i> Jour 9:</h4>
            <h2><i class="fa-solid fa-location-dot"></i> Ambanja - ANKIFY- Nosy-Be</h2>
            <p class="p-0 fs-4.8"> Route pour Ankify, l' embarcadère où vous prendriez la vedette pour Nosy Be
              Travérsée de la mer de 2h pour rejoindre Nosy Be
              <br> Nuit à l'hôtel
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

        <div class="carousel-item">
          <img src="./../pictures/couvertureNord.jpg" class="d-block w-100" alt="...">
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExamplecontrol2"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl2"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container-fluid" id="cont">
      <div class="row gy-5">
        <div class=" col-10 w-100 col-md-7">
          <div class="bg-md-danger p-3 rounded">

            <h2 id="n"><i class="fa-solid fa-location-dot"></i> Nosy-Be</h2>
            <p class="p-1">
              NOSY BE ,une splendide île à Madagascar est un des joyaux du littoral malgache  pour les plages avec ses sables fins blancs, ses eaux turquoises avec ses déliceux fruits de mer . Comme si vous étes au paradis sur terre . 
              Les lémuriens , les tortues marines, les baleines  en mois de juillet jusqu' à Novembre vous émerveillent à Nosy Be               
            </p>
          </div>
        </div>
        <div class=" col-10 w-100 col-md-7 mt-6">
          <div class="bg-md-danger bg-light p-3 rounded">

            <h2><i class="fa-solid fa-circle fa-flip all"></i> Les activités possibles à Nosy Be: </h2>
          </div>
        </div>
        <div class=" col-10 w-100 col-md-7">
          <div class="bg-md-danger p-3 rounded">

            <h2><i class="fa-solid fa-location-dot"></i> Nosy Komba</h2>
            <p class="p-1">
              est une île volcanique , la visite de Nosy Komba vous offre l'opportunité de voir les lémuriens MAKAKO ;
              Avec ses plages de sables fins , possibilité de se baigner .
            </p>
          </div>
        </div>
        <div class=" col-10 w-100 col-md-7">
          <div class="bg-md-danger p-3 rounded">

            <h2><i class="fa-solid fa-location-dot"></i> Nosy Sakatia</h2>
            <p class="p-1">
              Pour la plongée et le baignade
            </p>
          </div>
        </div>
        <div class=" col-10 w-100 col-md-7">
          <div class="bg-md-danger p-3 rounded">

            <h2><i class="fa-solid fa-location-dot"></i> Nosy Iranja</h2>
            <p class="p-1">
              Le meilleur plage , Répuée pour ses 2 îles Nosy Iranja Be et Nosy Iranja Kely reliées par une banc de
              sable accessible à
              pied en marée basse
              Belle plage avec ses sables fins, aux eaux turquoises et cristallines , baignade
            </p>
          </div>
        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="bg-md-danger p-3 rounded">

            <h2><i class="fa-solid fa-location-dot"></i> Nosy Tanikely</h2>
            <p class="p-1">
              Nosy Tanikely est un parc marin, situé au Sude de Nosy Be, protégée par des corails naturels .C' est aussi
              un véritable aquarium avec ses exceptionnels tortues marines, myriades de poissons multicolores,
              Superbe plongée , baignade
            </p>
          </div>

        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="bg-md-danger p-3 rounded">

            <h2><i class="fa-solid fa-location-dot"></i> Andilana Plage</h2>
            <p class="p-1">
              Plus belle plage avec le long ruban de sable blanc
            </p>
          </div>

        </div>

        <div class=" col-10 w-100 col-md-7">
          <div class="bg-md-danger p-3 rounded">

            <h2><i class="fa-solid fa-location-dot"></i> Safari des baleines</h2>
            <p class="p-1">
              de juillet en novembre
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
          <h1 id="h_comments">Laisser un commentaire</h1>
          <div class="borde2"></div>

          <form action="" method="POST" onsubmit="return checkWordCount(this, 120);">
            <div class="row gy-5">
              <input type="email" name="email" class="w-100" placeholder="email">
              <input type="text" name="name" class="w-100" placeholder="nom" id="name">
              <textarea type="text" name="coms" class="w-100" placeholder="commentaires" id="coms"></textarea>
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
                        <h1 class="text-light text-center text-md-center text-lg-start">Nous suivre sur</h1>
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
                        <h1 class="text-light">Liens</h1>
                        <ul class="text-center">
                        <a class="f text-decoration-none z-50"  style="cursor:pointer; z-index:50" href="#"><li>Accueil</li></a>
                        <a class="f text-decoration-none" href="#"><li>Circuits</li></a>
                        <a class="f text-decoration-none" href="#book"><li>Livre d'or</li></a>
                        <a class="f text-decoration-none" href="#about"> <li>A propos</li></a>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-3 mt-md-5 mt-lg-0">
                    <div class="tour">
                        <h1 class="text-light text-center text-md-start">Circuits</h1>
                        <ul class="text-center">
                            <a class="text-decoration-none" href="#"><li>Nord</li></a>
                            <a  class="text-decoration-none" href="./../sud/sud.php"><li>Sud</li></a>
                            <a class="text-decoration-none" href="./../est/est.php"><li>Est</li></a>
                            <a class="text-decoration-none" href="./../ouest/ouest.php"><li>Ouest</li></a>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-11 col-lg-3">
                    <div class="tour">
                        <h1 class="text-light text-center mt-5 mt-lg-0">Autre circuit</h1>
                        <ul class="text-center mx-0">
                            <a class="text-decoration-none" href="./../aventures/adventures.php"><li>Aventures Tours</li></a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-5" id="row2">
                    <div class="border"></div>
                    <div class="col-12 col-lg-3 col-md-12"><h1 class="text-start  text-light">Nous contacter: </h1></div>
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
                        <div class="col-12"><h3 class="text-center text-md-center mt-3  text-light">Copyright 2023 Madagascar Visit Company  |  fait par JohanEmades</h3></div>
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