//Este archivo se carga solo en la sección de la LIGA
$( "#clienteCumple" ).datepicker({
  maxDate: null,
  dateFormat: 'yy-mm-dd',
  dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
  dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
  dayNamesShort: [ "Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab" ],
  monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
  monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
  changeMonth: true
});

ocultarBotonesEmergencia(); //Se ocultan los botones para no confundir al cliente
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
$('.btn-enviar-liga').on('mousedown touchstart', function(){
  $('.btn-enviar-liga').css({
    transform: 'scale(0.7)'
  })
})
$('.btn-enviar-liga').on('mouseup touchend', function(){
  $('.btn-enviar-liga').css({
    transform: 'scale(1)'
  })
  $('.btn-liga').click();
})

$('#formLigaRegistro').submit(function(e){
  e.preventDefault();

  let form_data = new FormData();
  form_data.append('clienteNombre', $('#clienteNombre').val());
  form_data.append('clienteCedula', $('#clienteCedula').val());
  form_data.append('clienteCelular', $('#clienteCelular').val());
  form_data.append('clienteEmail', $('#clienteEmail').val());
  form_data.append('clienteCumple', $('#clienteCumple').val());
  form_data.append('clienteDireccion', $('#clienteDireccion').val());
  form_data.append('clienteBarrio', $('#clienteBarrio').val());
  form_data.append('completar', false);

  $.ajax({
    url: 'https://reservas.grupo5g.com/server/guardar_registro_liga.php',
    dataType: "json",
    cache: false,
    processData: false,
    contentType: false,
    data: form_data,
    type: 'POST',
    success: function(php_response){
      if(php_response.msg == "OK"){
        window.location.href = '/registro-finalizado';
        //console.log('registro finalizado');
      }else{
        $('.registro-liga-error').html(php_response.msg);
        //console.log(php_response.msg);
      }
    },
    error: function(){
      console.log('Error en la comunicación');
    }
  })
});

//Completar DATOS
iniciarCompletarDatos();
function iniciarCompletarDatos(){
  var codigo = $('#clienteCode').val();
  if(codigo == undefined){
    //Nada
  }else{
    var clienteID = $('#clienteID').val();
    let form_data = new FormData();
    form_data.append('clienteID', clienteID);
    form_data.append('codigo', codigo);
    $.ajax({
      url: 'https://reservas.grupo5g.com/server/consultar_cliente_liga.php',
      dataType: "json",
      cache: false,
      processData: false,
      contentType: false,
      data: form_data,
      type: 'POST',
      success: function(php_response){
        if(php_response.msg == "OK"){
          $('#clienteNombre').val(php_response.cliente.nombre)
          $('#clienteCedula').val(php_response.cliente.cedula)
          $('#clienteCelular')
          .val(php_response.cliente.celular)
          .prop('disabled',true)
          $('#clienteEmail').val(php_response.cliente.email)
          $('#clienteCumple').val(php_response.cliente.cumple)
          $('#clienteDireccion').val(php_response.cliente.direccion)
          $('#clienteBarrio').val(php_response.cliente.barrio)

        }else{
          window.location.href = '/';
        }
      },
      error: function(){
        console.log('Error en la comunicación');
      }
    })
  }
}

$('#formLigaCompletar').submit(function(e){
  e.preventDefault();

  var clienteID = $('#clienteID').val();
  var codigo = $('#clienteCode').val();

  if(clienteID == undefined || codigo == undefined){
    window.location.href = '/';
  }else{
    let form_data = new FormData();
    form_data.append('clienteID', $('#clienteID').val());
    form_data.append('clienteNombre', $('#clienteNombre').val());
    form_data.append('clienteCedula', $('#clienteCedula').val());
    form_data.append('clienteCelular', $('#clienteCelular').val());
    form_data.append('clienteEmail', $('#clienteEmail').val());
    form_data.append('clienteCumple', $('#clienteCumple').val());
    form_data.append('clienteDireccion', $('#clienteDireccion').val());
    form_data.append('clienteBarrio', $('#clienteBarrio').val());
    form_data.append('completar', true);

    $.ajax({
      url: 'https://reservas.grupo5g.com/server/guardar_registro_liga.php',
      dataType: "json",
      cache: false,
      processData: false,
      contentType: false,
      data: form_data,
      type: 'POST',
      success: function(php_response){
        if(php_response.msg == "OK"){
          window.location.href = '/registro-finalizado';
        }else{
          $('.registro-liga-error').html(php_response.msg);
        }
      },
      error: function(){
        console.log('Error en la comunicación');
      }
    })
  }
});
