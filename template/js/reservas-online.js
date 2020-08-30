//Este archivo se carga solo en la sección de reservas

$(document).ready(function(){

  //Inicio de la seccion
  ocultarBotonesEmergencia(); //Se ocultan los botones para no confundir al cliente
  getSedes(); //Se obtinen las sedes desde el servidor
  $( "#reservaFecha" ).datepicker({
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

  //Boton para mostrar los horarios de los restaurantes
  $('#btn-horariosRestaurantes').on('click', function(e){
    e.preventDefault();
    $('.reservaHorariosClientes').fadeToggle('fast');
  })
  $('.cerrar-reservaHorariosClientes').on('click', function(e){
    e.preventDefault();
    $('.reservaHorariosClientes').fadeToggle('fast');
  })

  //Implemetar imagenes para pantala de carga de ajax
  $(document).on({
      ajaxStart: function() {
        $('.ajaxLoading').removeClass('hidden')
        $('#botonReservarAhora').prop( "disabled", true )
        .html('Reservando...')

        //console.log('Cargando Info');
      },
       ajaxStop: function() {
         $('.ajaxLoading').addClass('hidden')
         $('#botonReservarAhora').prop( "disabled", false )
         .html('Reservar')
         //console.log('Carga Terminada');
       }
  });

  //Consultar Reserva
  var verifiedURL = 'reservas/consultar-reserva';
  var completeURL = '/reservas/consultar-reserva';
  if(window.location.pathname.indexOf(verifiedURL) > -1){
    getReserva();
  }

  //Cancelación de reservas
  var cancelarURL = 'reservas/cancelar';
  if(window.location.pathname.indexOf(cancelarURL) > -1){
      var code = $('#transCode').val();
      if(code){
        verificarCodigo();
      }else{
        window.location.href = 'error';
      }
  }

});

function verificarCodigo(){
  let form_data = new FormData();
  form_data.append('codigo', $('#transCode').val());
  var r = null;
  $.ajax({
    url: 'https://reservas.grupo5g.com/server/validarCodigo.php',
    dataType: "json",
    cache: false,
    processData: false,
    contentType: false,
    data: form_data,
    type: 'POST',
    success: function(php_response){
      if(php_response.msg == "OK"){

        if(php_response.estado != 1){
          window.location.href = '/reservas/reserva-cancelada'
        }else{
          $('.cancelarReserva').css({
            display: 'block'
          })
          $('#NumReserva').html('Reserva No. '+php_response.reserva[0]['reserva_id']);
        }

      }else{
        window.location.href = '/reservas/error'
        //console.log(php_response.msg);
      }
    },
    error: function(){
      //alert("Error en la comunicación con el servidor");
      console.log('Error en la comunicación');
    }
  })
}

$('input[name="optionsRadios"]').on('click', function(){
  //e.preventDefault()
  if(this.value == 5){
    $('#otroMotivo')[0].disabled = false
    $('#otroMotivo').css({
      background: '#ffffff'
    })
    .fadeIn('slow')
  }else{
    $('#otroMotivo')[0].disabled = true
    $('#otroMotivo')[0].value = ''
    $('#otroMotivo').css({
      background: '#c90000'
    })
    .fadeOut('slow')
  }
})

$('#cancelarReservaForm').on('submit', function(e){
  e.preventDefault()
  var formInfo = e.target.elements;

  let form_data = new FormData();
  form_data.append('codigo', formInfo.transCode.value);
  form_data.append('motivo', formInfo.optionsRadios.value);
  form_data.append('texto', formInfo.otroMotivo.value);

  $.ajax({
    url: 'https://reservas.grupo5g.com/server/cancelar_reserva_online.php',
    dataType: "json",
    cache: false,
    processData: false,
    contentType: false,
    data: form_data,
    type: 'POST',
    success: function(php_response){
      if(php_response.msg == "OK"){
        //console.log(php_response.msg);
        window.location.href = '/reservas/reserva-cancelada'
      }else{
        console.log(php_response.msg);
      }
    },
    error: function(){
      //alert("Error en la comunicación con el servidor");
      console.log('Error en la comunicación');
    }
  })

})

function ocultarBotonesEmergencia(){
  var btn1 = $('.btn-reservas');
  var btn2 = $('.btn-domicilios');
  btn1.css({
    display: 'none'
  })
  btn2.css({
    display: 'none'
  })
}

function getSedes(){
  var texto = 'Desde Reservas';
  let form_data = new FormData();
  form_data.append('texto', texto);
  $.ajax({
    url: 'https://reservas.grupo5g.com/server/get_sedes_service.php',
    dataType: "json",
    cache: false,
    processData: false,
    contentType: false,
    data: form_data,
    type: 'POST',
    success: function(php_response){
      if(php_response.msg == "OK"){
        $.each(php_response.sedes, function(index,value){
          if(value.sede_id == 1 || value.sede_id == 3 || value.sede_id == 8){
            $('#reservaSede').append(`
              <option value="`+value.sede_id+`">`+value.sede_texto+`</option>
            `);
            //console.log(value.sede_texto);
          }
        })
        //console.log(php_response.sedes);
      }else{
        console.log(php_response.msg);
      }
    },
    error: function(){
      //alert("Error en la comunicación con el servidor");
      console.log('Error en la comunicación');
    }
  })
}

function validarFecha(){
  var fecha = $('#reservaFecha');
  var f = new Date(fecha.val());
  var sede = $('#reservaSede').val();
  var dia = f.getDay();
  var fs = fecha.val();

  let form_data = new FormData();
  form_data.append('sede', sede);
  form_data.append('dia', dia);
  form_data.append('fs', fs);

  $.ajax({
    url: 'https://reservas.grupo5g.com/modulos/reservas/ajax/getHorarioWeb.php',
    dataType: "json",
    cache: false,
    processData: false,
    contentType: false,
    data: form_data,
    type: 'POST',
    success: function(php_response){
      if(php_response.msg == "OK"){
        if(fecha.val() != ''){
          $('#horasReserva').removeClass('hidden');
          $('#horaDisplayBlock').remove();
          $('#horasReserva').load('../g5g_reservas/horario_reserva.php', {sede:sede,dia:dia,fs:fs,horario:php_response.horario});
        }else{
          $('#horasReserva').addClass('hidden');
        }
        //console.log(php_response.horario);
      }else{
        //console.log(php_response.msg);
      }
    },
    error: function(){
      //alert("Error en la comunicación con el servidor");
      console.log('Error en la comunicación');
    }
  })
}

$('#nuevaReserva').submit(function(e){
  e.preventDefault();

  $('.erroresReserva').hide();
  $('#botonReservarAhora').hide();
  $('#msjBotonReservas').removeClass('hidden');

  var cedula = $("#reservaCedula");
  var nombre = $("#reservaNombre");
  var email = $("#reservaEmail");
  var telefono = $("#reservaTelefono");
  var sede = $("#reservaSede");
  var fecha = $("#reservaFecha");
  var hora = $("#horaReserva");
  var comensales = $("#reservaPersonas");
  var celebracion = $("#reservaEventos");
  var origen = $("#origenCliente");

  let form_data = new FormData();
  form_data.append('cedula', cedula.val());
  form_data.append('nombre', nombre.val());
  form_data.append('email', email.val());
  form_data.append('telefono', telefono.val());
  form_data.append('sede', sede.val());
  form_data.append('fecha', fecha.val());
  form_data.append('hora', hora.val());
  form_data.append('comensales', comensales.val());
  form_data.append('celebracion', celebracion.val());
  form_data.append('origen', origen.val());

  $.ajax({
    url: 'https://reservas.grupo5g.com/modulos/reservas/ajax/validarReservaOnline.php',
    dataType: "json",
    cache: false,
    processData: false,
    contentType: false,
    data: form_data,
    type: 'POST',
    success: function(php_response){
      if(php_response.msg == "OK"){

        //Si existe algún bloqueo o un motivo que no permita reservar, ejecutamos la estrategia para venta cruzada
        if(php_response.rsp == 0){
          var msj = '<i class="fas fa-exclamation-triangle"></i> <br> Restaurante lleno en la fecha o la hora seleccionada';
          $('.erroresReserva').css({
            display: 'block'
          })
          $('.erroresReserva').html(msj)
          $('#botonReservarAhora').show();
          $('#msjBotonReservas').addClass('hidden');
          $('.ventaCruzada').fadeIn('fast');
          //console.log(msj);
        }

        if(php_response.rsp == 1){
          var msj = '<i class="fas fa-exclamation-triangle"></i> <br> Solo puede reservar con una hora de anticipación';
          $('.erroresReserva').css({
            display: 'block'
          })
          $('.erroresReserva').html(msj)
          $('#botonReservarAhora').show();
          $('#msjBotonReservas').addClass('hidden');
          //console.log(msj);
        }
        if(php_response.rsp == 2){
          $('#botonReservarAhora').addClass('disabled')
          window.location.href = 'consultar-reserva/'+php_response.reservaId;
          //console.log('Reserva Confirmada '+php_response.reservaId);
        }
        if(php_response.rsp == 3){
          var msj = '<i class="fas fa-exclamation-triangle"></i> <br> La fecha de la reserva ha expirado';
          $('.erroresReserva').css({
            display: 'block'
          })
          $('.erroresReserva').html(msj)
          $('#botonReservarAhora').show();
          $('#msjBotonReservas').addClass('hidden');
          console.log(msj);
        }

      }else{
        console.log(php_response.msg);
      }
    },
    error: function(){
      console.log('error en la comunicación con el servidor');
    }
  })
});

function getReserva(){

  var numReserva = $('#numReserva').html();
  let form_data = new FormData();
  form_data.append('numReserva', numReserva);
  $.ajax({
    url: 'https://reservas.grupo5g.com/server/get_reserva_service.php',
    dataType: "json",
    cache: false,
    processData: false,
    contentType: false,
    data: form_data,
    type: 'POST',
    success: function(php_response){
      if(php_response.msg == "OK"){
        $('.confirmacionNombre').html(php_response.cliente.cliente_nombre)
        $('.confirmacionSede').html(php_response.sede.sede_texto)
        $('.confirmacionFecha').html(php_response.reserva.reserva_fecha_agenda+' '+php_response.reserva.reserva_hora_agenda)
        //console.log(php_response.cliente);
      }else{
        //console.log(php_response.msg);
      }
    },
    error: function(){
      //alert("Error en la comunicación con el servidor");
      console.log('Error en la comunicación');
    }
  })
}

$('#reservaEventos').on('change', function(e){
  e.preventDefault();

  var msg = null;

  switch (this.value) {
    case '1':
      msg = `
            <h3 style="font-family: Subtitulos; background: #c90000; color: #fff; padding: 5px; border-radius: 5px;">Incluye</h3>
            <p><span style="color: #c90000; letter-spacing: 1px; font-family: Bart1; font-size: 1.5em;">TEMÁTICA ALEATORIA</span><br>Payaso, Superhéroe o Disco</p>
            <p>Gorros, Bombas, Serpentinas, Un globo mediano, postre personal y un pocillo Mug para la homenajeada.</p>
            <p>Por cortesía se pone la velita y se canta el cumpleaños.</p>
            `;
      break;
    case '2':
      msg = `
            <h3 style="font-family: Subtitulos; background: #c90000; color: #fff; padding: 5px; border-radius: 5px;">Incluye</h3>
            <p><span style="color: #c90000; letter-spacing: 1px; font-family: Bart1; font-size: 1.5em;">TEMÁTICA ALEATORIA</span><br>Princesa, Unicornio o Venecia</p>
            <p>Gorros, Bombas, Serpentinas, Un globo mediano, postre personal y un pocillo Mug para la homenajeada.</p>
            <p>Por cortesía se pone la velita y se canta el cumpleaños.</p>
            `;
      break;
    case '3':
      msg = `
            <h3 style="font-family: Subtitulos; background: #c90000; color: #fff; padding: 5px; border-radius: 5px;">Incluye</h3>
            <p><span style="color: #c90000; letter-spacing: 1px; font-family: Bart1; font-size: 1.5em;">TEMÁTICA </span><br>Aniversario</p>
            <p>Bombas, serpentinas, un globo mediano, un postre personal, un portaretrato, un peluche pequeño y un pocillo Mug.</p>
            `;
      break;
    case '4':
    msg = `
          <h3 style="font-family: Subtitulos; background: #c90000; color: #fff; padding: 5px; border-radius: 5px;">Incluye</h3>
          <p><span style="color: #c90000; letter-spacing: 1px; font-family: Bart1; font-size: 1.5em;">TEMÁTICA </span><br>Grado</p>
          <p>Bombas, un globo mediano, un postre personal, un cubo rubick, un birrete y un pocillo Mug.</p>
          `;
      break;
    default:
      msg = '';
  }

  $('#eventosIncludes').html(msg);
})
