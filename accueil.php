<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale="1">
    <title>KELASI</title>
    <link rel="stylesheet" type="text/css" href="header.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" poppins>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,500;1,600&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
</head>
<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="logo_accueil.png" alt="Votre logo" class="img-fluid"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer-content">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
  

</head>
<body>
<!-- partial:index.partial.html -->
<figure class="icon-cards mt-3">
  <div class="icon-cards__content">
    <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1"><img src="image1.jpg" alt="Eleve" width="480" height="480"></span></div>
    <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1"><img src="image2.png" alt="Eleve" width="480" height="480"></span></div>
    <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1"><img src="image3.png" alt="Eleve" width="480" height="480"></span></div>
    
  </div>
</figure>

<div class="checkbox">
  <input class="d-none" id="toggle-animation" type="checkbox" checked />
  <label class="checkbox__checkbox" for="toggle-animation"></label>
  <label class="checkbox__label" for="toggle-animation">Toggle animation</label>
</div>
        <!-- partial -->
          <script  src="./script.js"></script>
        </div>

        <p id="intro"> Our service </p>
        <section class="carree">    
 <button class="carre" id="presence-btn" class="custom-button"><img src="presence.png" alt="Eleve" width="24" height="24" id="icon"></i><p id="note">PRESENCE</p></button>
 <div id="presence-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div id="presence-content"></div>
    </div>
  </div>
 <button  class="carre" id="application-btn" class="custom-button"><img src="application.png" alt="Eleve" width="24" height="24" id="icon"></i><p id="note">APPLICATION</p></button>
 <div id="application-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div id="application-content"></div>
    </div>
  </div>
  <button class="carre"  id="pourcentage-btn" class="custom-button"><img src="pourcentage.png" alt="Eleve" width="24" height="24" id="icon"></i><p id="note">POURCENTAGE</p></button>
  <div id="pourcentage-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div id="pourcentage-content"></div>
    </div>
  </div>
</section>

        <section  class="carree">
<button class="carre" id="note-btn"> <img src="note.png" alt="Eleve" width="24" height="24" id="icon"></i><p id="note">NOTE</p></button>
<div id="note-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div id="note-content"></div>
    </div>
  </div>
<button class="carre" id="btn-communique"><img src="communiquer.png" alt="Eleve" width="24" height="24" id="icon"></i><p id="note">COMMUNICATION</p></button>
<div id="modal-communique" class="modal">
    <div class="modal-content">
    <span class="close">&times;</span>
      <h2>Communique</h2>
      <p>Contenu du communiquer...</p>
      <button id="close-btn">Fermer</button>
    </div>
  </div>
<button class="carre"  id="cours-btn" onclick="togglePopup()"><img src="cours.png" alt="Eleve" width="24" height="24" id="icon"></i><p id="note">COURS</p></button>
<div id="cours-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div id="cours-content"></div>
    </div>
  </div>
</section>
        <script src="script.js"></script>

        <p id="intro"> About us </p>
 
            <p class="Ecrit">Bienvenue sur  Kelasi<br><br> Kelasi est un site éducatif qui a pour but d'aider les parents de suivre pas à pas l'évolution pédagogique de leurs enfants en ligne sans devoir se déplacer grace à nos différentes fonctionnalités.
              Avec la fonctionnalité "Présence" vous pouvez suivre le nombre de fois que votre enfant a été présent en classe du début des cours jusqu'à la fin et il permet aussi de savoir l'heure à laquelle l'enfant est arrivé à l'école 
              Avec la fonctionnalité "Application" vous pouvez vérifier l'évolution de votre enfant, voir les progrès qu'il a fait chaque trimestre et ses mentions 
              Avec la fonctionnalité "Pourcentage" vous aurez accès à un clic au pourcentage obtenu par votre enfants dans les périodes et semestres encours ou passé
              Avec la fonctionnalité "COURS" vous aurez accès à l'horaire du jours des cours de votre enfants 
              Avec la fonctionnalité "NOTE" vous aurez accès aux points obtenus de vos enfants dans les différentes matières 
              Avec la fonctionnalité "COMMUNIQUER" vous aurez accès aux communiqués officiels de l'école pour éviter toute mauvaise information fournie aux parents</p>
    
    <!-- Ajouter les scripts Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<footer>
<div class="footer-content">
  <div class="img"><img src="logo_accueil.png" alt="Votre logo" class="img" ></div>
    <ul class="socials">
        <li><a href="https://www.facebook.com/fabrice_malanga@yahoo.fr"><i class="bi bi-facebook"></i></a></li>
        <li><a href="https://api.whatsapp.com/send?phone=243991760427"><i class="bi bi-whatsapp"></i></a></li>
        <li><a href="mailto:malangafabrice@gmail.com"><i class="bi bi-google"></i></a></li>
        <li><a href="tel:+243991760427"><i class="bi bi-telephone"></i></a></li>
    </ul>
</div>
<div class="footer-bottom">
  <p>Copyright &copy; 2023 All Rights Reserved. Create by <span>Beerus Sama</span></p>
</div>
</footer>
    </body>
</html>
