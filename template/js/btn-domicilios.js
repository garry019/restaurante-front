var cont = 0;

$('.btn-domicilios').on('click',function(e){
  e.preventDefault();
  e.stopImmediatePropagation();
  $('.domicilios-content').fadeIn('500');
});
$('.cerrar-domicilios').on('click',function(){
  $('.domicilios-content').fadeOut('500');
});
$('.btn-reservas').on('click',function(e){
  e.preventDefault();
  window.location.href = '/reservas'
});

$(document).ready(function(){
  //$('.anuncio-navidad').fadeIn('500');
});
$('.anuncio-navidad').on('click',function(e){
  e.preventDefault();
  $('.anuncio-navidad').fadeOut('500');
});
