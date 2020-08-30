$(document).ready(function (){

    var $animation_elements = $('.animation-element');
    var $window = $(window);

    //Anuncios del Home
    $('.anuncioHome').fadeIn('slow');
    $('.cerrarAnuncioHome').on('click', function(e){
      e.preventDefault
      $('.anuncioHome').fadeOut('slow');
    })

    //promoción ventana modal
    $('#modalPromo').click();

    $('.all-contents').css({
      minHeight: screen.height - 150
    });
    $('.vista-error').css({
      minHeight: screen.height - 100,
      paddingTop: '10%'
    });

    $('.botonReservaLateral').on('click', function(){
      window.location.href = '/reservas';
    })


    function check_if_in_view() {
      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);

      $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
          $element.addClass('in-view');
        } else {
          $element.removeClass('in-view');
        }
      });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');

    /*Altura de imagenes laterales en las vistas de la carta*/
    function heightElements(){
        var postresContenido = $('.postresContenido');
        var imgLeftColumn = $('.itemsLeftBg');
        var imgRightColumn = $('.itemsRightBg');
        imgLeftColumn.height(postresContenido.height()+50);
        imgRightColumn.height(postresContenido.height()+50);
        $('.itemsLeftBgMenuInfantil').height(postresContenido.height()+50);
        $('.itemsRightBgMenuInfantil').height(postresContenido.height()+50);
        $('.itemsLeftBgEntradas').height(postresContenido.height()+50);
        $('.itemsRightBgEntradas').height(postresContenido.height()+50);
        $('.itemsLeftBgSopas').height(postresContenido.height()+50);
        $('.itemsRightBgSopas').height(postresContenido.height()+50);
        $('.itemsLeftBgEnsaladas').height(postresContenido.height()+50);
        $('.itemsRightBgEnsaladas').height(postresContenido.height()+50);
        $('.itemsLeftBgCarnes').height(postresContenido.height()+50);
        $('.itemsRightBgCarnes').height(postresContenido.height()+50);
        $('.itemsLeftBgPollo').height(postresContenido.height()+50);
        $('.itemsRightBgPollo').height(postresContenido.height()+50);
        $('.itemsLeftBgCerdo').height(postresContenido.height()+50);
        $('.itemsRightBgCerdo').height(postresContenido.height()+50);
        $('.itemsLeftBgPescado').height(postresContenido.height()+50);
        $('.itemsRightBgPescado').height(postresContenido.height()+50);
        $('.itemsLeftBgCervezas').height(postresContenido.height()+50);
        $('.itemsRightBgCervezas').height(postresContenido.height()+50);
        $('.itemsLeftBgBebidasFrias').height(postresContenido.height()+50);
        $('.itemsRightBgBebidasFrias').height(postresContenido.height()+50);
        $('.itemsLeftBgBebidasCalientes').height(postresContenido.height()+50);
        $('.itemsRightBgBebidasCalientes').height(postresContenido.height()+50);
        $('.itemsLeftBgAcomp').height(postresContenido.height()+50);
        $('.itemsRightBgAcomp').height(postresContenido.height()+50);
        $('.itemsLeftBgHamburguesas').height(postresContenido.height()+50);
        $('.itemsRightBgHamburguesas').height(postresContenido.height()+50);
    }
    heightElements();

    function eventosContainer(){
        $('.modEventosCasa').height((screen.height-100)/2);
    }
    eventosContainer();

    //cumpleaños
    function cumpleContainer(){
        $('.eventoCumpleContainer').css('height',screen.height - 140);
        $('.cumpleTranspBg').css('height',$('.eventoCumpleContainer').height());
    }
    cumpleContainer();

    $(window).scroll(function(){
      var posElemento = $(window).scrollTop();

      //Menu principal y Menu de Navegación de la carta
      if(posElemento >= 10){
        $('.newMenu-logo').fadeIn('fast')
        $('.regresarAlMenu').fadeIn('fast')
      }
      if(posElemento < 10){
        $('.newMenu-logo').fadeOut('fast')
        $('.regresarAlMenu').fadeOut('fast')
        $('.QuickMenu').slideUp('fast')
      }

    });

    $('.fa-bars').click(function(e){
      e.preventDefault();
      //$('.newMenu-list').fadeIn('fast')
      $('.newMenu-list').animate({
        left: 0
      },300, 'linear', function(){
        $('.newMenu-list-cerrar').click(function(e){
          e.preventDefault();
          $('.newMenu-list').animate({
            left: '-2000px'
          }, 500, 'swing')
        })
      })
    })

    $('.openQuickMenu').click(function(){
      $('.QuickMenu').slideToggle('fast')
    })

    //seccion de cumpleaños
    $('#videoCelebracion').css({
      height: screen.height
    })
    $('.frasesCelebracion').css({
      marginTop: screen.height/3.2
    })

});

$('#navegacionButton').click(function(){
    var estado = $('#navegacionButton').attr('state');
    if(estado == 'buttonMenuOff'){
        $('#navegacionContent').addClass('animacionRight');
        $('#navegacionContent').removeClass('animacionRightReverse');
        $('#navegacionButton').attr('state','buttonMenuOn');
    }
    if(estado == 'buttonMenuOn'){
        $('#navegacionContent').addClass('animacionRightReverse');
        $('#navegacionContent').removeClass('animacionRight');
        $('#navegacionButton').attr('state','buttonMenuOff');
    }
});

function avisoNavidad(){
  var container = `
                  <div class="avisoNavidad-container text-center">
                    <div class="avisoNavidad-content">
                      <p>Los días <b>24</b> y <b>31</b> de diciembre nuestro servicio será hasta las 5:00 p.m.</p>
                      <p>Los días <b>25</b> de Diciembre, <b>01</b> y <b>08</b> de Enero/2020 no habrá Servicio</p>
                      <i><h4>¡FELICES FIESTAS!</h4></i>
                      <br>
                    </div>
                    <button class="btn btn-danger avisoNavidad-cerrar">Cerrar</button>
                  </div>
                  `;
  $('.avisoNavidad').css({
    display: 'none',
    width: '100%',
    height: '100%',
    background: 'rgba(0,0,0,0.4)',
    position: 'fixed',
    top: 0,
    left: 0,
    zIndex: 9999
  })
  .append(container)
  .fadeIn('slow')

  $('.avisoNavidad-container').css({
    width: '350px',
    padding: '15px',
    background: '#fff',
    margin: '0 auto',
    borderRadius: '5px',
    marginTop: '30px',
    border: '4px solid #dc3545'
  })

  $('.avisoNavidad-cerrar').on('click', function(e){
    e.preventDefault()
    $('.avisoNavidad').fadeOut('fast')
  })

}
//avisoNavidad()
