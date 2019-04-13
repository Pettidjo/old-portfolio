<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Portfolio de Jonathan Herbault Développeur - Intégrateur Web">
  <title>Jonathan.H Développeur | Designer</title>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,700" rel="stylesheet">
  <link href="css/style.min.css" media="screen, projection" rel="stylesheet" type="text/css" />
</head>
<body>

  <!-- SECTION 1 -->
  <section class="section-1">
    <div class="inner-box">
      <div class="logo animated"><?php include 'img/logo.svg' ?></div>
      <div class="title-box">
        <h1 class="main-title animated">Jonathan Herbault</h1>
        <p class="sub-title animated">Développeur - Intégrateur - Designer</p>
      </div>
      <div class="social-list">
        <a class="animated" target="_blank" href="https://www.facebook.com/Jherbault/"><?php include 'img/icon-facebook.svg' ?></a>
        <a class="animated" target="_blank" href="https://twitter.com/JHerbault"><?php include 'img/icon-twitter.svg' ?></a>
        <a class="animated" target="_blank" href="https://www.linkedin.com/in/jonathanherbault/"><?php include 'img/icon-linkedin.svg' ?></a>
      </div>
    </div>
    <div class="clouds">
      <img class="cloud move-1" src="img/cloud-1.png" alt="image nuage">
      <img class="cloud move-2" src="img/cloud-2.png" alt="image nuage">
    </div>
    <div class="rectangle"><?php include 'img/rectangle.svg' ?></div>
  </section>

  <!-- SECTION 2 -->
  <section class="section-2">
    <h2>A propos de moi</h2>
    <div class="text-container">
      <div class="text-block-left">
        <div class="text-block text-me">
          <h3>Jonathan Herbault</h3>
          <p>Développeur/Intégrateur web front-end, j'ai commencé ce long périple en autodidacte. Je suis maintenant passionné par ce monde et cette philosophie et je cherche chaque jours à m'expérimenter de plus en plus.</p>
          <p>Designer, ne voulant plus laisser la création artistique de site web de côté, j'ai également suivie une formation de Designer Web pour acquérir de bonne connaissances en Ergonomie et Webdesign .</p>
        </div>
        <div class="text-block text-parcours">
          <h3>Mon parcours</h3>
          <div class="exp">
            <p class="date">2017</p>
            <p class="exp-title">Stage Kazeko</p>
            <p class="exp-desc">Intégration et développement d'un site vitrine, création d'une fonctionnalitée Javascript, réalisation de page satelitte, création graphique et intégration d'une landing page, réalisation d'une animation.</p>
          </div>
          <div class="exp">
          <p class="date">2017</p>
          <p class="exp-title">Formation Designer Web / CEFIM</p>
          </div>
          <div class="exp">
            <p class="date">2016 (3mois)</p>
            <p class="exp-title">Développeur Wordpress / Conseil Départemental</p>
            <p class="exp-desc">Refonte graphique d'un blog, amélioration d'un site déjà existant.</p>
          </div>
          <div class="exp">
            <p class="date">2012</p>
            <p class="exp-title">BTS Informatique et réseaux pour l'industrie et les services techniques</p>
          </div>
        </div>
      </div>
      <div class="text-block-right">
        <div class="text-block text-comp">
          <h3>Mes Compétences</h3>
          <ul class="myskill-list">
            <li class="myskill">HTML5/CSS3</li>
            <li class="myskill">Jquery/Javascript</li>
            <li class="myskill">CMS Wordpress</li>
            <li class="myskill">Sass</li>
            <li class="myskill">Photoshop/Illustrator</li>
            <li class="myskill">After Effect</li>
          </ul>
        </div>
        <div class="text-block text-hobbies">
          <h3>Et sinon</h3>
          <p>Passionné, curieux, furieux, café, musique, jeux vidéo, escalade et insulter mon ordinateur parce qu'il interprête mal se que je code .... ou je code mal se qu'il doit interpreter (ca arrive.. un peu).</p>
        </div>
        <a class='btn' href="mailto:jonathanherbault@gmail.com?subject=contact%20portfolio%20">
          <svg>
            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
          </svg>Contactez-moi
        </a>
      </div>
    </div>
  </section>

  <!-- SECTION 3 -->
  <section class="section-3">
    <div class="inner-box">
      <blockquote>"Le succés est un mauvais professeur. il pousse les gens intelligents à croire qu'ils sont infaillibles"</blockquote>
      <p>Bill Gates</p>
    </div>
  </section>

  <!-- SECTION 4 -->
  <section class="section-4">
    <h2>Portfolio</h2>
    <div class="gallery">
      <div class="g-row g-row-1">
        <figure id="welcomr" class="hover-effect">
          <img src="img/portfolio-1-2x.jpg" alt="miniature présentation Welcomr">
          <figcaption>
            <h3>Welcomr</h3>
            <p>Site Vitrine</p>
          </figcaption>
        </figure>

        <figure id="collegiens" class="hover-effect">
          <img src="img/portfolio-2-2x.jpg" alt="miniature présentation 100% Collégiens">
          <figcaption>
            <h3>100% Collégiens</h3>
            <p>CMS Wordpress</p>
          </figcaption>
        </figure>
      </div>
      <div class="g-row g-row-2">
        <figure id="figure1" class="hover-effect">
          <img src="img/portfolio-3-2x.jpg" alt="SpeedPainting-1">
          <figcaption>
            <h3>Illustration</h3>
            <p>SpeedPainting</p>
          </figcaption>
        </figure>
        <figure id="figure2" class="hover-effect">
          <img src="img/portfolio-4-2x.jpg" alt="SpeedPainting-2">
          <figcaption>
            <h3>Illustration</h3>
            <p>SpeedPainting</p>
          </figcaption>
        </figure>
        <figure id="figure3" class="hover-effect">
          <img src="img/visage2.2.jpg" alt="Photomontage visage">
          <figcaption>
            <h3>Photoshop</h3>
            <p>Double exposition</p>
          </figcaption>
        </figure>
      </div>
      <div class="lightbox">
        <img src="img/speedpainting2.jpg" alt="SpeedPainting-2">
        <img src="img/speedpainting.jpg" alt="SpeedPainting-1">
        <img src="img/visage2.2.jpg" alt="Photomontage visage">
      </div>
      <div class="project1">
        <div class="container">
          <div class="innerbox-left">
            <h4 class="project-title">Projet Welcomr</h4>
            <p class="subtitle-project">Présentation</p>
            <div class="text">
              <p>Ce projet à été réalisé au seins de la startup Kazeko à Tours. Le but était de développer un site web pour présenter le produit Welcomr et de le mettre en avant grâce à un site vitrine.</p>
            </div>
            <p class="subtitle-project">Réalisation</p>
            <div class="text">
              <p>Intégration HTML / CSS</p>
              <p>Jquery</p>
              <p>Design réalisé par une agence tiers</p>
            </div>
            <a class="btn" href="http://www.welcomr.fr" target="_blank">voir le projet</a>
          </div>
          <div class="innerbox-right">
            <img src="img/portfolio-1.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="project2">
        <div class="container">
          <div class="innerbox-left">
            <h4 class="project-title">100% Collegiens</h4>
            <p class="subtitle-project">Présentation</p>
            <div class="text">
              <p>Au seins du Conseil Départemental j'ai pu réaliser la migration et la refonte graphique du blog 100% collégiens</p>
            </div>
            <p class="subtitle-project">Réalisation</p>
            <div class="text">
              <p>Intégration</p>
              <p>CMS Wordpress</p>
              <p>Création graphique</p>
            </div>
            <a class="btn" href="http://www.collegiens41.fr" target="_blank">voir le projet</a>
          </div>
          <div class="innerbox-right">
            <img src="img/portfolio-2.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>Copyright Jonathan Herbault - 2017</p>
    <div class="social">
      <p>Suivez-moi :</p>
      <div class="social-list">
        <a target="_blank" href="https://www.facebook.com/Jherbault/"><?php include 'img/icon-facebook.svg' ?></a>
        <a target="_blank" href="https://twitter.com/JHerbault"><?php include 'img/icon-twitter.svg' ?></a>
        <a target="_blank" href="https://www.linkedin.com/in/jonathanherbault/"><?php include 'img/icon-linkedin.svg' ?></a>
      </div>
    </div>
  </footer>
  <script src="js/script.min.js"></script>
</body>
</html>
