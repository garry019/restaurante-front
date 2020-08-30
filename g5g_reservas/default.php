<!-- Button trigger modal -->
<!-- <a class="g5g_btn_deafult" href="#" data-toggle="modal" data-target="#myModal"><p>R</p><p>E</p><p>S</p><p>E</p><p>R</p><p>V</p><p>A</p><p>S</p></a> -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <button type="button" class="close cerrarReserva" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true" style="z-index: 100;">&times;</span></button>
        <div class="modal-content">
            <div class="modal-body">
                <img class="techoReserva" src="../../images/techo-reserva.png" />
                <div class="row">
                    <h4 class="modal-title" id="myModalLabel">Reserva</h4>
                </div>
                <div class="row">
                    <div id="reservaOnlineContent" class="col-lg-12">
                        <form id="reservaForm" method="POST">
                            <div class="input-group form-group input-group">
                                <span class="input-group-addon" id="nombre">Nombre</span>
                                <input id="nombreReserva" name="nombreReserva" type="text" class="form-control" placeholder="" aria-describedby="nombre" required="required" />
                            </div>
                            <div class="input-group form-group input-group">
                                <span class="input-group-addon" id="email">Email</span>
                                <input id="emailReserva" name="emailReserva" type="text" class="form-control" placeholder="" aria-describedby="email" />
                            </div>
                            <div class="input-group form-group input-group">
                                <span class="input-group-addon" id="telefono">Tel&eacute;fono</span>
                                <input id="telefonoReserva" name="telefonoReserva" type="text" class="form-control" placeholder="" aria-describedby="telefono" required="required"/>
                            </div>
                            <div class="input-group form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 selectDesign">
                                <span class="input-group-addon">Deseo ir a</span>
                                <select class="form-control" id="sede" name="sede" required >
                                    <option value="1">Macarena</option>
                                    <option value="3">Cedritos</option>
                                    <option value="8">Kennedy</option>
                                </select>
                            </div>
                            <div class="input-group form-group col-lg-10 col-md-10 col-sm-10 col-xs-10 input-group">
                                <span class="input-group-addon" id="fecha">Fecha</span>
                                <input onchange="showHorarioSede()" id="reservaCalendario" name="reservaCalendario" type="text" class="form-control" placeholder="" aria-describedby="fecha" required="required" />
                            </div>
                            <div id="horaReservaContainer" class="input-group form-group col-lg-6 hidden"></div>
                            <input type="hidden" id="horaReservaSede" name="horaReservaSede" value="" />
                            <div class="input-group form-group col-lg-10 col-md-10 col-sm-10 col-xs-10 input-group">
                                <span class="input-group-addon" id="comensales">Personas</span>
                                <select id="comensalesReserva" name="comensalesReserva" class="form-control" aria-describedby="comensales" required="required">
                                    <option></option>
                                    <?php for($i=1;$i<=18;$i++){ ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="input-group form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 selectDesign">
                                <span class="input-group-addon" style="line-height: 0.5;">Decoraci&oacute;n<br /><small style="color: #000;">4 Personas</small></span>
                                <select class="form-control" id="celebracion" name="celebracion">
                                    <option value="0"></option>
                                    <option value="1">Cumplea&ntilde;os para Hombre $34.000</option>
                                    <option value="2">Cumplea&ntilde;os para Mujer $34.000</option>
                                    <option value="3">Aniversario $34.000</option>
                                </select>
                            </div>
                            <div class="destorte">
                              Te informamos que la Juguetería tiene en su menú una variedad de postres para acompañar una linda experiencia gastronómica y nuestros deliciosos platos, sin embargo también puedes llevar  la torta o ponqué de tu preferencia, para que nuestros chicos puedan porcionarla y servirla en nuestros platos y cubiertos de acuerdo con todos los asistentes. El servicio anterior tiene un costo de 3000 pesos más impuestos por persona. Este servicio tendrá un valor límite de $45.000 pesos más impuestos si el número de porciones es superior a 20.<br>
                              La propina es voluntaria
                            </div>
                            <input type="hidden" id="fechaActual" name="fechaActual" value="<?php echo date('Y-m-d'); ?>" />
                            <div class="input-group form-group col-lg-10 col-md-10 col-sm-10 col-xs-10 input-group-sm center-block">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input id="politica" type="checkbox" aria-label="...">
                                        <span class="politicas"><a href="http://www.grupo5g.com/politicas/data.pdf" target="_blank">T&eacute;rminos y condiciones</a></span>
                                    </span>
                                </div>
                            </div>
                            <input id="origenReserva" name="origenReserva" value="4" type="hidden" />
                        </form>
                        <button data-loading-text="Reservando..." autocomplete="off" id="botonGuardarReservaJug" class="btn btn-default center-block btn-reserva" >RESERVAR</button>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div id="mensajesOnlineForm" class="row text-center" style="color: red; margin-bottom: 5px; font-size: 10px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="piolin" src="../../images/menu/caracters/piolin.png" />
        <img class="estrellaleft" src="../../images/estrella-left.png" />
    </div>
</div>
<script>
    calendarioReservas();
    $('#botonGuardarReservaJug').on('click',function(e){
      e.preventDefault();
      e.stopImmediatePropagation();
      reservaOnline();
    });

    //Mensaje para el destorte después de seleccionar un evento
    $('#celebracion').on('change', function(e){
      e.preventDefault();
      var evento = $('#celebracion').val();
      if(evento == 0){
        $('.destorte').fadeOut('fast');
      }else{
        $('.destorte').fadeIn('slow');
      }
    })
</script>
