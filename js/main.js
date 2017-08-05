$(function(){

// Egalisation hauteurs de cartes
  function setHeight() {
    var hCard = $('.card:last .card-image').outerHeight();
    var hImg = $('.card:last .card-image img').outerHeight();
    var wImg = $('.card:last .card-image img').outerWidth();

    $('#target').css("height", hCard);
    $('#target iframe').attr({
      height: hImg,
      width: wImg
    });
  }

  setHeight();

// Initialisation sideNav
  $(".button-collapse").sideNav({
    menuWidth: 200,
    closeOnClick: true
  });

// Initialisation scrollspy
  $('.scrollspy').scrollSpy({scrollOffset: 30});


// Initialisation modal
  $('.modal').modal({
    opacity: 0.2,
    inDuration: 300
  });

  $('#modal-trigger').on('click', function(){
    $('#modal').modal('close');
  })

// Traitement du formulaire en ajax

  // D'abord on sélectionne les éléments HTML pour pouvoir travailler
  // avec ensuite
  const form = document.querySelector('form')
  const submit = document.querySelector('#submit')
  const nom = document.querySelector('#name')
  const email = document.querySelector('#email')
  const objet = document.querySelector('#subject')
  const message = document.querySelector('#message')

  // On créé une fonction handleForm qui va gérer le formulaire
  // quand celui-ci sera submit par le visiteur
  // Elle reçoit l'événement (e) pour pouvoir stopper
  // l'envoi classique du formulaire
  const handleForm = (e) => {
    // On stoppe l'action classique de l'événement submit
    e.preventDefault();

    // On créé un objet FormData qui est fait pour contenir les données
    // du formulaire afin de les envoyer via AJAX au serveur
    const data = new FormData()
    data.append('submit', submit.value)
    data.append('nom', nom.value)
    data.append('email', email.value)
    data.append('objet', objet.value)
    data.append('message', message.value)

    // On créé une requête AJAX
    const ajaxRequest = new XMLHttpRequest()
    // Elle va appeler en POST l'adresse "contact.php"
    ajaxRequest.open('POST', 'contact.php')
    // On lui explique quoi faire lorsqu'elle aura appeler le fichier PHP
    // et que la réponse sera revenue et chargée (d'où le onload)
    ajaxRequest.onload = () => {
      // On récupère le résultat affiché par la page contact.php
      // Il faut donc que contact.php fasse un echo du $feedback !
      // Sinon la requete AJAX ne ramènera rien ..
      const resultat = ajaxRequest.responseText;

      // Si le résultat ramené est différent de rien du tout
      if(resultat.trim() !== ''){
        // On fait un toast qui contiendra le résultat.
        // A priori le resultat pourra prendre plusieurs valeurs :
        // - "Super " . $nom . "! On revient vers vous rapido ;)"
        // - "Ooops ! Il doit manquer quelque chose... "
        // Si le $feedback est vide, on ne rentrera pas dans ce if
        Materialize.toast(resultat, 5000)
      }
    }

    // Maintenant qu'on a configuré la requête AJAX, elle est prête
    // donc on l'envoi vers le serveur
    ajaxRequest.send(data)

    form.reset()
  }

  // On oublie pas de dire au formulaire que quand il sera
  // submit, c'est la fonction handleForm qui va être appelée !
  form.addEventListener('submit', handleForm)

})
