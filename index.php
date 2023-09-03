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
    <title>Madagascar Visit, Madagascar Holidays, Madagascar Tours Guid, Madagascar Travel</title>
    <link rel="stylesheet" href="./styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
    <link rel="icon" type="image/x-icon" href="./logo/madagascar-visite-ico.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

</head>

<body>


<?php
$bd= new PDO('mysql:host=185.98.131.93;dbname=madag906129','madag906129','3vdophg5mf');

     $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

     $requete=$bd -> prepare("SELECT * FROM md_comments");
 
     $requete->execute();

     $comments= $requete-> fetchAll();


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

if (isset($_POST['send'])){
    
    var_dump($_GET['submit']); 
    $email=$_POST['email'];
    $name=$_POST['name'];
    $coms=$_POST['coms'];
    $date = date("Y-m-d H:i:s");
    

    if ((validerEmail($email)) && !(preg_match('/_/', $name))) {
    $requete1=$bd ->prepare('INSERT INTO md_comments(comment_author,comment_author_email,comment_content,comment_date) VALUES(:nom, :adresse_email, :coms, :date)');
    $requete1->bindvalue(':nom', $name);
    $requete1->bindvalue(':adresse_email', $email);
   $requete1->bindvalue(':coms', $coms);
   $requete1->bindvalue(':date', $date);
   $requete1 ->execute();

   echo" <script type=\"text/javascript\">alert ('Comments sent')</script>";
  }
}


   ?> 



    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="nav">
        <div class="container-fluid">
          <!-- Logo ou titre -->
          <a class="navbar-brand" href="#"><img class="logo" src="logo/madagascar-visite-logo.png"></a>
    
          <!-- Bouton pour les petits écrans -->
          <button class="navbar-toggler bg-warning text-light" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <!-- Contenu de la navbar -->
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-dark" href="#"><i class="fa-solid fa-house  text-dark"></i> Home</a>
              </li>
    
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#tour" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="active"></div>
                  <i class="fa-solid fa-car text-dark"></i> Our tour
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="./circuits/north/north.php">NORTH Tour</a></li>
                  <li><a class="dropdown-item" href="./circuits/south/south.php">SOUTH Tour</a></li>
                  <li><a class="dropdown-item" href="./circuits/east/east.php">EAST Tour</a></li>
                  <li><a class="dropdown-item" href="./circuits/weast/weast.php">WEAST Tour</a></li>
                  <li><a class="dropdown-item" href="./circuits/adventures/adventures.php">Aventures Tour</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-dark" href="#book"><i class="fa-solid fa-book text-dark"></i> GUESTBOOK</a>
              </li>

              <li class="nav-item">
                <a class="nav-link  text-dark" href="#about"><strong><i class="fa-solid fa-info"></i></strong> About us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#tour" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="active"></div>
                  <img src="./logo/ang.jpg" class="drap" alt=""> English
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="./index_francais.php"> <img src="./pictures/francais.png" class="drap" alt=""> French</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="inner">
            <div class="carousel-item active">
                <img src="pictures/maki-1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h1 class="w-100 text-start">Madagascar Trip with the famous lemur Catta</h1>
                   <a class="text-decoration-none" href="./circuits/south/south.php"> <button class="btn">Book Now <i class="fa-solid fa-arrow-right"></i></button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./pictures/alley.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h1 class="w-100 text-start">Madagascar Holidays for the Alley of Baobab to the Weast </h1>
                    <a class="text-decoration-none" href="./circuits/weast/weast.php">  <button class="btn">Book Now <i class="fa-solid fa-arrow-right"></i></button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./pictures/cameleoon.png" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                    <h1 class="w-100 text-start">Madagascar Tour with the Cameleon to the east</h1>
                    <a class="text-decoration-none" href="./circuits/east/east.php">  <button class="btn">Book Now <i class="fa-solid fa-arrow-right"></i></button></a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <i class="icon fa-solid fa-circle-chevron-left" id="prev"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <i class="icon fa-solid fa-circle-chevron-right" id="next"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="carousel_responsive" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="inner1">
            <div class="carousel-item active">
                <img src="pictures/maki-1_respons.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                <h1 class="w-100 text-start">Madagascar Trip with the famous lemur Catta</h1>
                   <a class="text-decoration-none" href="./circuits/south/south.php"> <button class="btn">Book Now <i class="fa-solid fa-arrow-right"></i></button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./pictures/alley.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                <h1 class="w-100 text-start">Madagascar Holidays for the Alley of Baobab</h1>
                    <a class="text-decoration-none" href="./circuits/weast/weast.php">  <button class="btn">Book Now <i class="fa-solid fa-arrow-right"></i></button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./pictures/cameleoon-respons.png" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                <h1 class="w-100 text-start">Madagascar Tour with the Cameleon to the east</h1>
                    <a class="text-decoration-none" href="./circuits/east/east.php">  <button class="btn">Book Now <i class="fa-solid fa-arrow-right"></i></button></a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel_responsive" data-bs-slide="prev">
            <i class="icon fa-solid fa-circle-chevron-left" id="prev"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel_responsive" data-bs-slide="next">
            <i class="icon fa-solid fa-circle-chevron-right" id="next"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="about" id="about">
        <div class="container">
            <div class="row gy-5 g-md-5">
                <div class="col-12 col-lg-7" id="col1">
                    <h1 class="">About us</h1>
                    <div class="border"></div>
                    <p> MADAGASCAR VISIT COMPANY is a local tour guid in Madagascar, lead by Johanna EMADISSON
                        for your travel, tour and holidays in Madagascar, It's a real pleasure for us to guid you
                        through our country, to make your visit and your stay confortable and unforgettable.
                       <br> Madagascar, hotpot of biodiversity, so, if you like fauna and flora, baobabs, Lemurs, chameleon,
                        birds, beautiful scenery, beach, people. <br> Madagascar Visit Company offers you a tourisme
                        exclusive, a birding tour, adventure tour in Tsingy de Bemaraha, along the coast
                        Because we are an ambassador of our country .
                       <br> Our goal, with my teamworks, the driverguids, guids, boatmens, porters, are to share with you,
                        the love of our country and to give you satisfaction during your holidays, that's you will have
                        an unforgettable good memories of Madagascar
                        And it's a privilege for us to run a sustainable and responsable tourism to leave this unique
                        and irreaplacable wildlife to the future generation
                    </p>
                </div>
                <div class="col-12 col-md-8 col-lg-5" id="col2">
                    <img src="./logo/about_518x389.jpg" alt="">
                </div>
            </div>
        </div>

    </div>


    <div class="us" id="choice">

        <div class="container">

            <h1>Why to choose Madagascar Visit Company</h1>
            <div class="border1"></div>
            <div class="row gy-5 gx-md-5">
                <div class="col-12 col-md-6 col-lg-4" id="col1">
                <img src="./pictures/indri.jpg" id="i1" alt="">

                </div>
                <div class="col-12 col-md-6 col-lg-4" id="col2">
                <img src="./pictures/tsingy.jpg" alt="">
                </div>
                <div class="col-10 col-md-7 col-lg-4" id="col3">
                    <h2><b>Every time we provide the best service</b></h2>

                    <span>

                        <div class="item"></div>
                        <h3><b>Local tour guide</b></h3>
                        <p>We are an local tour guide</p>
                    </span>
                    <span>

                        <div class="item"></div>
                        <h3><b>Experimented Team member</b></h3>
                        <p>We have an experimented Team member</p>
                    </span>


                </div>
            </div>
        </div>
    </div>

    <div class="circuit" id="tour">
        <div class="container">
            <h1 class="tour_t">Book our tour</h1>
            <div class="border2"></div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="box p-2">
                        <img src="./circuits/north/pictures/nosyIranja.jpg" alt="Image">
                        <h4> Madagascar Visit</h4>
                        <h2> <i class="fa-solid fa-location-dot"></i> Discover the North of Madagascar</h2>
                        <a href="./circuits/north/north.php" target="_self"><button class="btn">Book Now <i class="fa-solid fa-arrow-right"></i></button></a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="box p-2">
                        <img src="./circuits/pictures/fond.JPG" alt="Image">
                        <h4> Madagascar Tour</h4>
                        <h2> <i class="fa-solid fa-location-dot"></i> Explore the South of Madagascar</h2>
                        <a href="./circuits/south/south.php" target="_self"><button class="btn">Book Now <i class="fa-solid fa-arrow-right"></i></button></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="box p-2">
                        <img src="./circuits/pictures/Indri-indri.jpg" alt="Image">
                        <h4> Madgascar Travel</h4>
                        <h2> <i class="fa-solid fa-location-dot"></i> Trip to the East of Madagascar</h2>
                        <a href="./circuits/east/east.php" target="_self"><button class="btn">Book Now <i
                                class="fa-solid fa-arrow-right"></i></button></a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="box p-2">
                        <img src="./logo/adansonia-1140x420.jpg" alt="Image">
                        <h4> Madagascar Trip</h4>
                        <h2> <i class="fa-solid fa-location-dot"></i> Trip to the Weast of Madagascar</h2>
                        <a href="./circuits/weast/weast.php" target="_self"> <button class="btn">Book Now <i
                                class="fa-solid fa-arrow-right"></i></button></a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="box p-2">
                        <img src="./pictures/Baobabs-andavadaoka.jpg" alt="Image">
                        <h4> Madagascar Tour</h4>
                        <h2> <i class="fa-solid fa-location-dot"></i> Adventures tour and looping tour</h2>
                        <a class="f text-decoration-none z-50" href="./circuits/adventures/adventures.php" target="_self"> <button class="btn">Book Now <i
                                class="fa-solid fa-arrow-right"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="guestbook bg-primary" id="book">

        <h1 class="tour_t">What Saying about us</h1>
        <div class="border3"></div>

        <section id="testimonial_area" class="section_padding">
            <div class="container  overflow-hidden">
                <div class="row overflow-hidden">
                    <div class="col-md-12 overflow-hidden">
                        <div class="testmonial_slider_area text-center owl-carousel overflow-hidden">

                        <?php
                            foreach($comments as $value): ?>
                            <div class="box-area">
                           
                                <div class="img-area">
                                        <img src="https://www.transparentpng.com/thumb/user/black-male-icon-clipart-png-Uc8rbw.png" alt="black male icon clipart png @transparentpng.com">
                                </div>
                                <img src="./logo/quote_droit.png" alt="" id="quote">
                                <h5> <?= $value["comment_author"]?> <a href="mailto:<?= $value["comment_author_email"]?>"><i class="fa-solid fa-envelope"></i></a></h5>
                                <span><?= $value["comment_date"]?></span>
                                <p class="content">
                                <?= $value["comment_content"]?>
                                </p>
                        
                            </div>
                            <?php endforeach; ?> 

                         
                        </div>
                    </div>
                </div>
            </div>
        </section><div class="up" id="Button"><i class="fa-solid fa-chevron-up"></i></div>
    </div>

    <div class="comments">

          <h1 id="h_comments">Leave us a comments</h1>
          <div class="borde2"></div>

    <form action="" method="POST" onsubmit="return checkWordCount(this, 120);">
            <div class="row gy-5">
              <input type="email" name="email" class="w-100" placeholder="your email">
              <input type="text" name="name" class="w-100" placeholder="your name" id="name">
              <textarea type="text" name="coms" class="w-100" placeholder="your comments" id="coms"></textarea>
              <button type="submit" name="send" class="btn p-2">Send</button>
            </div>
        </form>
    </div>



    


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
                        <a class="f text-decoration-none z-50"  style="cursor:pointer; z-index:50" href="#"><li>Home</li></a>
                        <a class="f text-decoration-none" href="#"><li>Our tour</li></a>
                        <a class="f text-decoration-none" href="#book"><li>Guestbook</li></a>
                        <a class="f text-decoration-none" href="#about"> <li>About us</li></a>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-3 mt-md-5 mt-lg-0">
                    <div class="tour">
                        <h1 class="text-light text-center text-md-start">Our tours</h1>
                        <ul class="text-center">
                            <a class="text-decoration-none" href="./circuits/north/north.php"><li>North Tour</li></a>
                            <a  class="text-decoration-none" href="./circuits/south/south.php"><li>South Tour</li></a>
                            <a class="text-decoration-none" href="./circuits/east/east.php"><li>East Tour</li></a>
                            <a class="text-decoration-none" href="./circuits/weast/weast.php"><li>Weast Tour</li></a>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-3">
                    <div class="tour">
                        <h1 class="text-light text-center mt-5 mt-lg-0" id="a">Other tour</h1>
                        <ul class="text-center mx-0">
                            <a class="text-decoration-none" href="./circuits/adventures/adventures.php"><li>Adventures tours</li></a>
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
                        <div class="col-12"><h3 class="text-center text-md-center mt-3  text-light">Copyright 2023 Madagascar Visit Company  |  fait par JohanEmades</h3></div>
                 </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

    <script>
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


        up();
    </script>
    <script>
         function checkWordCount(form, maxWords) {
      var textarea = form.querySelector('#coms');
            var words = textarea.value.split(/\s+/); // Diviser le texte en mots en utilisant l'espace comme délimiteur
            var wordCount = words.length;

            if (wordCount > maxWords) {
               alert('type a maximum of 120 words');
               event.preventDefault(); 
            
        }
      }

        $(".testmonial_slider_area").owlCarousel({
            autoplay: true,
            slideSpeed: 1000,
            items: 3,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
            margin: 30,
            dots: true,
            responsive: {
                320: {
                    items: 1
                },
                575: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }

        });



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