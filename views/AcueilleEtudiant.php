<?php

$newuser = new utilisateurController();
if(!isset($_SESSION['nom'])){
  header("location: login");
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MonParcour </title>
  <link
  href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">


  <link href="views/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="views/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  

  <link href="views/assets/css/style.css" rel="stylesheet">
<link href="views/assets/css/test.css" rel="stylesheet">

  <!-- Google Fonts -->
  
</head>

<body>

<header id="header" class="header fixed-top mb-5">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="Acueille" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>
          <spam style="color: #e44aec;">Mon</spam>Parcour
        </span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="AcueilleEtudiant">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A propos </a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#offres">offer</a></li>
          <li><a class="nav-link scrollto" href="#équipe">Equipre</a></li>
          <li><a class="nav-link scrollto" href="formReserver">Réserve</a></li>
          <li><a class="nav-link scrollto " href="Questionnaire">Test d'orientation</a></li>

         
          <li>
          <div class="dropdown show">
                <a class="btn border-0 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Bonjour :<?php  echo $_SESSION['nom'];  ?> 
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="logout"> Se déconnecter</a>
                </div>
          </div>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center mt-5">

    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1>Ensemble, pour réussir votre orientation</h1>
          <h2>Coaching en orientation scolaire et professionnelle
            pour les jeunes à la recherche d’une orientation au Maroc</h2>
          <div>
            <div class="text-center text-lg-start">
              <a href="formReserver"
                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Réserver</span>
                <i class="bi bi-arrow-right"></i>
              </a>
              <a href="test"
                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Test Gratuit</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img">
          <img src="views/assets/img/studant.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <div class="content">

              <h2>Qui Sommes-Nous </h2>
              <p>
                MonParcour, cabinet spécialisé dans l’orientation scolaire et professionnelle au Maroc qui accompagne
                les jeunes sur plusieurs plans :
              <ul>
                <li>Pendant le BAC pour les choix des écoles POST BAC à l’étranger et l’accompagnement dans
                  l’inscription.</li>
                <li>Après l’obtention du diplôme pour l’insertion professionnelle</li>
                <li>Durant le parcours professionnelle pour le coaching de carrière et les besoins de réorientation</li>
                Fort de 12 ans d’expérience en conseil et recrutement, avec plus de 15000 candidats évalués lors des
                entretiens d’embauche, l’équipe MonParcour est composée :
                <li> Des experts carrière et métier</li>
                <li> Des chargés de recherche et développement</li>
                <li> Des conseillers chargés de diagnostic</li>
                <li> Des consultants en orientation scolaire</li>
              </ul>



            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center">
            <img src="views/assets/img/about.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="services" class="values">

      <div class="container">

        <header class="section-header">

          <p>Nos Services</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <img src="views/assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Bilan d'orientation scolaire</h3>
              <p>MonParcour vous propose une prise en charge personnalisée de votre demande avec un bilan détaillé
                et un projet d’orientation scolaire complet et adapté à l’avenir souhaité.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <img src="views/assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Le choix de la bonne formation</h3>
              <p>MonParcour prend le grand soin de vous aider en 3 séances à trouver la filière la plus adaptée
                à votre projet d’orientation scolaire</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <img src="views/assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Le choix de votre métier .</h3>
              <p>MonParcour met à votre disposition des outils très pointus pour vous aider à découvrir les pistes
                métiers les plus adaptées,.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->




    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <!-- Feature Icons -->
      <div class="row feature-icons">
        <h3>Découvrez les étapes d'orientation scolaire</h3>

        <div class="row">

          <div class="col-xl-4 text-center">
            <img src="views/assets/img/features-3.png" class="img-fluid p-4" alt="">
          </div>

          <div class="col-xl-8 d-flex content">
            <div class="row align-self-center gy-4">

              <div class="col-md-6 icon-box">
                <div>
                  <h4 class="text-center py-2" style="color:#DD10C9;">Formule Integrale</h4>
                  <h4>Etape 1 - Découverte </h4>
                  <p>1 séance d’exploration et de découverte du profil de votre jeune avec l’expert carrière et métier.
                    1 séance avec le spécialiste orientation scolaires pour étude et analyse des résultats scolaires.
                    1 séance pour le test psychométrique et le test d’orientation.</p>
                </div>
              </div>

              <div class="col-md-6 icon-box">

                <div>
                  <h4 class="text-center py-2" style="color:#DD10C9;">Formule Decouverte</h4>
                  <h4>Etape 1 - Découverte </h4>
                  <p>En plus des 3 séances exploration avec les experts orientations métier et scolaires, 1 séance
                    supplémentaire est assurée avec le spécialiste orientation scolaire pour le choix des écoles
                    adaptées aux formations choisies.</p>
                </div>
              </div>

              <div class="col-md-6 icon-box">

                <div>
                  <h4>Etape 2 - Recherche personnalisée </h4>
                  <p>Une étude approfondie des différentes données rassemblées pendant le process et une concertation
                    entre le duo des experts métier et orientation pour élaboration du rapport final.</p>

                </div>
              </div>

              <div class="col-md-6 icon-box">

                <div>
                  <h4>Etape 2 - Recherches personnalisées</h4>
                  <p>Dans cette formule, au-delà de l’étude des données rassemblées, le spécialiste orientation scolaire
                    accompagnera votre jeune pour l’aider à faire le bon choix des écoles adaptées pour déposer sa
                    candidature.</p>
                </div>
              </div>

              <div class="col-md-6 icon-box">

                <div>
                  <h4>Etape 3 - final et Rapport</h4>
                  <p>1 séance avec l’expert carrière et métier pour un entretien d’échange et d’explication du bilan
                    complet élaboré par les spécialistes Orientus vous proposera les pistes des métiers et les domaines
                    de formations les plus adaptés au profil de votre jeune.</p>
                </div>
              </div>

              <div class="col-md-6 icon-box">

                <div>
                  <h4>Etape 3 - Entretien final et Rapport</h4>
                  <p>1 séance finale avec l’expert carrière et métier pour un entretien d’échange et d’explication du
                    bilan complet élaboré par les spécialistes Orientus vous proposera : les pistes des métiers + les
                    domaines de formations + la liste des écoles les plus adaptées au choix de votre jeune.</p>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div><!-- End Feature Icons -->

    </section><!-- End Features Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="offres" class="pricing">

      <div class="container">

        <header class="section-header">
          <p>Nos offres</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 pricing_card">
            <div class="box">
              <h1 style="color: #012970; font-weight:600;"> Formule Integrale </h1>
              <div class="price">3500 DH</div>
              <ul>
                <li>2 entretien avec le spécialiste orientation scolaire</li>
                <li>1 test psychométrique</li>
                <li>1 test d’orientation</li>
                <li>Bilan complet avec proposition des choix des métiers et des filières adaptés à votre profil.</li>
                <li style=" font-weight: bold;">1 entretien supplémentaire avec le spécialiste orientation scolaire</li>
                <li style=" font-weight: bold;">Liste des écoles adaptées à la formation choisie</li>
              </ul>
              <a href="formReserver" class="btn-buy">Réserver maintenant</a>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 pricing_card">
            <div class="box">
              <h1 style="color: #012970; font-weight:600;">Formule Decouverte </h1>
              <div class="price">2900 DH</div>
              <ul>
                <li>2 entretien avec le spécialiste orientation scolaire</li>
                <li>1 test psychométrique</li>
                <li>1 test d’orientation</li>
                <li>Bilan complet avec proposition des choix des métiers et des filières adaptés à votre profil.</li>
                <li class="na">1 entretien supplémentaire avec le spécialiste orientation scolaire</li>
                <li class="na">Liste des écoles adaptées à la formation choisie</li>
              </ul>
              <a href="formReserver" class="btn-buy">Réserver maintenant</a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Pricing Section -->







   
    <section id="équipe" class="team">
      <div class="container">
        <header class="section-header">
          <p>Notre équipe</p>
        </header>
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="views/assets/img/team/team-1.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Mehdi Harit</h4>
                <span>Chief Executive Officer</span>
                <p>Manageur Opérationnel dans le secteur tertiaire - 2004
                  Co-fondateur du Groupe Rekrut Academy - 2009
                  Fondateur MonParcour - 2021</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="views/assets/img/team/team-2.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Nadia Zitouni</h4>
                <p>Rejoint le groupe Rekrut Academy – 2020
                  Expert carrière et métiers MonParcour - 2021</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="views/assets/img/team/team-3.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <p>Manageur Hertz en Irlande – 2002
                  Manageur Multinationale - Maroc– 2008
                  Manageur Hertz Emirat Arabe Unis - 2014
                  Rejoint le Groupe Rekrut Academy Maroc – 2018
                  Expert carrière et métiers MonParcour - 2021</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="views/assets/img/team/team-4.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Houda Mouhandiz</h4>
                <span>Accountant</span>
                <p>Manageur Opérationnel dans le secteur tertiaire - 2002
                  Co-fondatrice du Groupe Rekrut Academy- 2009
                  Intervention dans les universités du Maroc - 2019
                  Fondatrice MonParcour - 2021</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container">

        <header class="section-header">

          <p>Contactez-nous</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Adresse</h3>
                  <p> maka Rue,<br>LAAYOUNE</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Appelez-nous</h3>
                  <p>+212 652 243 342<br>+212 578 254 445 </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Envoyez-nous un email</h3>
                  <p>monparcour@gmail.com<br>contact@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Heures d'ouverture</h3>
                  <p>Lundi - vendredi<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 ">
            <form action="" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Votre e-mail" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Sujet" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Votre message"
                    required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Votre message a été envoyé. Merci!</div>

                  <button type="submit">Envoyer Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="views/assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>