<?php
  require_once('contact.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Ti'moun| Association Loi 1901</title>
    <meta name="description" content="Ti'moun | Association pour le soutien à la parentalité et le bien être des enfants à La Ciotat" />
    <meta name="keywords" content="Parentalité positive, Montessori, café parent la ciotat, soutien à la parentalité, bien être des enfants" />
    <meta name="viewport" content="width=device-width initial-scale=1 user-scalable=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="Shortcut icon" href="favicon.ico" type="image/x-icon" />
    
    <!-- Open Graph Meta Tags -->
	<meta property="og:title" content="Ti'moun| Association Loi 1901" />
	<meta property="og:site_name" content="Timoun">
	<meta property="og:url" content="http://timoun.net/" />
	<meta property="og:description" content="Ti'moun | Association pour le soutien à la parentalité et le bien être des enfants à La Ciotat" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://timoun.net/assets/og-img.png" />
	
	<!-- Piwik -->
	<script type="text/javascript">
	  var _paq = _paq || [];
	  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
	    var u="//analytics.mpaw.xyz/piwik/";
	    _paq.push(['setTrackerUrl', u+'piwik.php']);
	    _paq.push(['setSiteId', '2']);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
<!-- End Piwik Code -->


  </head>
  <body >
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper purple lighten-1">
        <a href="#" data-activates="mobile-menu" class="button-collapse right"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#section1">A propos</a></li>
          <li><a href="#section2">Activités</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="side-nav" id="mobile-menu">
          <li><a href="#section1">A propos</a></li>
          <li><a href="#section2">Activités</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        </div>
      </nav>
    </div>
    <header>
    <div class="logo">
      <img class="responsive-img" src="assets/logo-timoun-white.png" alt="Logo Timoun" width="200px">
     </div>
      <div class="content">
        <div class="row">
          <div class="col s12 center-align">

          </div>
          <div class="col s12">
            <h1 class="center-align white-text"></h1>
          </div>
          <div class="col s12 ">
            <p class="center-align white-text">L’association a pour objet le soutien à la parentalité et le bien être des enfants.</p>
            <div class="separator col s4 offset-s4 divider"></div>
          </div>

          <div class="col s12   center-align">
            <a href="https://www.facebook.com/association.timoun/" target=_blank ><img src="assets/logo-fb.png" alt="Suivez-nous sur Facebook" width="40px"></a>
          </div>
        </div>
      </div>
      <div class="overlay">
      </div>
    </header>
    <div id="section1" class="scrollspy">
      <div class="row">
        <div class="col s12 m8 offset-m2 ">
          <h2 class="center-align grey-text">Nos activités</h2>
        </div>
        <div class="separator col s2 offset-s5 divider"></div>
        <div id="cards" class="col s12 l10 offset-l1">
 			 <div class="col s12 m4 ">
          	<div class="card">
            	<div id="target" class="card-image waves-effect waves-block waves-light">
              	<iframe class="activator" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2909.619817844697!2d5.602291315040499!3d43.17550389120682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9af757648d3bb%3A0x83c8af67b5ceece0!2sMaison+des+Associations!5e0!3m2!1sfr!2sfr!4v1500563825533" width="400" height="325" frameborder="0" style="border:0" allowfullscreen></iframe>
            	 </div>
          	  <div class="card-content">
             	 <span class="card-title activator">Où nous trouver<i class="material-icons right">more_vert</i></span>
           	 </div>
            	<div class="card-reveal">
              <span class="card-title">Où nous trouver<i class="material-icons right">close</i></span>
              <h3>Adresse</h3>
              <p>Maison des Associations<br>Pl. Evariste Gras<br>13600 La Ciotat</p>
              <h3>Contact</h3>
              <p >Aline au 06.84.08.08.96 <br> Christelle au 07.82.82.48.26.</p>
                <p >timounasso[@]gmail.com</p>
           	 </div>
          </div>
        </div>
          <div class="col s12 m4 ">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="assets/cafe-parents.png">
              </div>
              <div class="card-content">
                <span class="card-title activator">Café parents<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title">Café parents <i class="material-icons right">close</i></span>
                <p><span class="bold">Où ?</span> à la Maison des associations, place Évariste Gras, La Ciotat<br>
  <span class="bold">Quand ?</span> Un vendredi soir par mois de 18h30 à 20h00<br>
  <span class="bold">Pour qui ? </span>Pour les parents et toutes les personnes concernées par les questions de l’enfance et de l’adolescence<br>
  <span class="bold">Pourquoi ? </span>Pour se rencontrer, échanger, partager son expérience et ses questionnements autour d’un thé ou d’un café en toute convivialité.
  Une salle est disponible pour les enfants à côté de la salle où nous nous réunissions. Nous pouvons mettre en place un système de garde d’enfants dans cette salle, pour les personnes qui en font la demande. Pour les habitués : pensez à amener votre tasse ! (c’est plus pratique : moins de vaisselle !)<br>
  <span class="bold"><br><br>Dates des cafés parents de l’année 2017/2018 :</span><br> 13 octobre, 17 novembre, 15 décembre, 19 janvier, 16 février, 23 mars, 13 avril, 18 mai, 15 juin
                </p>
              </div>
            </div>
          </div>

        <div class="col s12 m4 ">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="assets/ateliers.png">
            </div>
            <div class="card-content">
              <span class="card-title activator">Suivez-nous !<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title">Suivez-nous !<i class="material-icons right">close</i></span>
              <p class="center-align">Retrouvez l'actualité de l'association Ti'moun sur la page Facebook<br><br><br>
              <a href="https://www.facebook.com/association.timoun/" target=_blank ><img src="assets/logo-fb.png" alt="Suivez-nous sur Facebook" width="40px"></a></p>
            </div>
          </div>
      </div>
      </div>
		</div>
    </div>

    <section id="section2" class="purple lighten-1 scrollspy">
	 <section class="row">
      	<div class="col s12 m8 offset-m2 white-text">
        <h2 class="center-align">A propos</h2>
        </div>
        <div class="separator col s2 offset-s5 divider"></div>
        <div class="col s12 m8 offset-m2 white-text">
        <p>L’association a pour objet le soutien à la parentalité et le bien être des enfants. Pour cela elle propose des activités ouvertes aux familles dans un esprit participatif, bienveillant et respectueux, par exemple la mise en place d’ateliers culturels et artistiques, l’organisation de moments de rencontre et d’échanges (café-parents, réunions), le développement de projets pédagogiques, ainsi que toutes les activités permettant la réalisation de son objet. </p>
      </div>
      </section>
    </section>

    <section id="contact" class="container scrollspy">
          <div class="col s12">
            <h2 class="dark-green center-align">Contactez-nous !</h2>
            <div class="col s12"></div>
          </div>
        <div class="row">
          <form class="col s12" action="#!" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="John Doe" id="nom" name="nom" type="text" class="validate">
                <label for="name">Votre nom</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input placeholder="john.doe@mail.com" id="email" name="email" type="email" class="validate">
                <label for="email">Votre adresse mail</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">subject</i>
                <input placeholder="Objet de votre message" id="objet" name="objet" type="text" class="validate">
                <label for="subject">Sujet</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <textarea placeholder="Tapez votre message" id="message" name="message" type="text" class="materialize-textarea"></textarea>
                <label for="message">Votre message</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 center-align">
                <button class="btn waves-effect waves-light light-blue lighten-1" type="submit" name="submit">Envoyer
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
            <div id="feedback" class="col s12 center-align ">
              <?= $feedback ?>
            </div>
          </form>

        </div>
      </section>
       <footer class="page-footer purple lighten-1 ">
          <div class="container  ">
            <div class="row ">
              <div class="center-align col m4 s12">
                <h5 class="white-text">Contacts</h5>
                <p class="grey-text text-lighten-4">Aline au 06.84.08.08.96 <br> Christelle au 07.82.82.48.26.</p>
                <p class="grey-text text-lighten-4">timounasso[@]gmail.com</p>

              </div>
              <div class="center-align col m4  s12">
               <h5 class="white-text">Réseaux sociaux </h5>
                <ul class="center-align">
                  <li><a href="https://www.facebook.com/association.timoun/" target=_blank ><img src="assets/logo-fb.png" alt="Suivez-nous sur Facebook" width="40px"></a>
                </li>

                </ul>
              </div>
              <div class="center-align col m4 s12">
                <h5 class="white-text">Adresse</h5>
                <p class="grey-text text-lighten-4">Maison des Associations<br>Pl. Evariste Gras<br>13600 La Ciotat</p>
               </div>
            </div>
          </div>
          <div class="footer-copyright grey-text ">
            <div class="container purple-text text-lighten-4 ">
           CC BY-NC-SA 4.0 - 2017 / <a class="purple-text text-lighten-4" href="http://www.cooldev.xyz">La Team Cooldev</a>
            <a class="modal-trigger right grey-text text-lighten-2" href="#modal1" >Mentions légales</a>
            <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content">
                  <h3>SIRET</h3>
                  <p>Association Loi 1901 <br>SIRET 50980765700010</p>
                  <h3>Responsable de la publication :</h3> <p>Aline Le Disez</p>
                  <h3>Hébergement :</h3>
                  <p>GANDI SAS, Société par Actions Simplifiée au capital de 300.000€ ayant son siège social au 63-65 boulevard Massena à Paris (75013) FRANCE, immatriculée sous le numéro 423 093 459 RCS PARIS N° TVA FR81423093459 Téléphone : +33.(0) 1 70.37.76.61 .</p>
                  <h3>Gestion des données personnelles :</h3>
                  <p>Votre vie privée est très importante pour nous. Pour connaître le trafic sur ce site internet, Nous utilisons Piwik. Piwik est une solution d’analytics qui respecte votre vie privée conformément aux recommandations de la CNIL et ne demande aucune déclaration préalable.</p>
                 </div>
                <div class="modal-footer ">
                  <a href="#!" class="modal-action modal-close btn-floating "><i class="material-icons ">highlight_off</i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    </script>
  </body>
</html>
