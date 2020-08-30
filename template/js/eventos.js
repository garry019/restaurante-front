$(document).ready(function(){
  $( "#eventoFecha" ).datepicker({
    minDate: 0,
    //maxDate: new Date(ano, mes - diaInicial, diaFinal),
    maxDate: null,
    dateFormat: 'yy-mm-dd',
    dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
    dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
    dayNamesShort: [ "Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab" ],
    monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
    monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
    changeMonth: true
  });
})

$('#eventoForm').submit(function(e){
  e.preventDefault()
  var formInfo = e.target.elements;

  let form_data = new FormData();
  form_data.append('motivo', formInfo.motivo.value);
  form_data.append('nombre', formInfo.nombre.value);
  form_data.append('telefono', formInfo.telefono.value);
  form_data.append('email', formInfo.email.value);
  form_data.append('sede', formInfo.restaurante.value);
  form_data.append('comensales', formInfo.comensales.value);
  form_data.append('eventoFecha', formInfo.eventoFecha.value);
  form_data.append('hora', formInfo.hora.value);
  form_data.append('comentario', formInfo.comentario.value);

  $.ajax({
    url: 'https://reservas.grupo5g.com/server/solicitar_evento.php',
    dataType: "json",
    cache: false,
    processData: false,
    contentType: false,
    data: form_data,
    type: 'POST',
    success: function(php_response){
      if(php_response.data.msg == "OK"){
        window.location.href = '/evento-solicitado';
      }else{
        console.log(php_response.data.msg);
      }
    },
    error: function(){
      console.log('error en la comunicación con el servidor');
    }
  })

})
