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
})
