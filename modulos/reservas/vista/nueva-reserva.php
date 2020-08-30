<div class="col-sm-12 all-contents nueva-reserva text-center">
  <h1>Reservas Online <br> <small>Los campos con asterisco (*) son obligatorios</small> </h1>
  <div class="row">
    <form id="nuevaReserva" class="form-horizontal" action="" method="POST">

      <div class="col-sm-6 formMod">
        <div class="formMod-content">
          <h2>Información Personal</h2>
          <div class="form-group">
            <label for="reservaId" class="col-sm-3 control-label">Cédula/Nit</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="reservaCedula" name="reservaCedula" placeholder="Ejemplo: 10200300">
            </div>
          </div>
          <div class="form-group">
            <label for="reservaNombre" class="col-sm-3 control-label">Nombre Completo *</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="reservaNombre" placeholder="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="reservaEmail" class="col-sm-3 control-label">Email *</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="reservaEmail" placeholder="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="reservaTelefono" class="col-sm-3 control-label">Teléfono *</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="reservaTelefono" placeholder="Fijo o móvil" required>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 formMod">
        <div class="formMod-content">
          <h2>Agenda</h2>
          <div class="form-group">
            <label for="reservaSede" class="col-sm-3 control-label">Ubicación *</label>
            <div class="col-sm-6">
              <select id="reservaSede" name="reservaSede" class="form-control" onchange="validarFecha()" required>
                <option value=""></option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="reservaFecha" class="col-sm-3 control-label">Fecha *</label>
            <div class="col-sm-4">
              <input id="reservaFecha" name="reservaFecha" type="text" class="form-control" placeholder="" aria-describedby="fecha" onchange="validarFecha()" required>
            </div>
          </div>
          <div id="horasReserva" class="form-group hidden"></div>
          <div id="horaDisplayBlock" class="form-group">
            <label for="horaDisplay" class="col-sm-3 control-label">Hora</label>
            <div class="col-sm-6">
              <select id="horaDisplay" name="horaDisplay" class="form-control" disabled>
                <option value="">Primero seleccione ubicación y fecha.</option>
              </select>
            </div>
          </div>
          <input type="hidden" id="horaReservaSede" name="horaReservaSede" value="" />
          <input type="hidden" id="origenCliente" name="origenCliente" value="4" />
          <div id="horasReserva" class="form-group col-lg-6 hidden"></div>
          <div class="form-group">
            <label for="reservaPersonas" class="col-sm-3 control-label">No. Personas *</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="reservaPersonas" name="reservaPersonas" placeholder="" min="1" max="18" required>
            </div>
          </div>
          <div class="ajaxLoading hidden">
            Cagando...
          </div>
        </div>
      </div>

      <div class="col-sm-12 formMod">
        <div class="formMod-content">
          <h2>Celebra un Evento Especial <br> <small> <i>(Opcional)</i> </small> </h2>
          <div class="form-group">
            <label for="reservaEventos" class="col-sm-4 control-label">Decoración</label>
            <div class="col-sm-5">
              <select id="reservaEventos" name="reservaEventos" class="form-control" required>
                <option value="0">Ninguna Seleccionada</option>
                <option value="1">Cumpleaños para Hombre/Niño $35.000</option>
                <option value="2">Cumpleaños para Mujer/Niña $35.000</option>
                <option value="3">Aniversario(Pareja) $35.000</option>
                <option value="4">Grado $35.000</option>
              </select>
              <div id="eventosIncludes" class="eventosIncludes text-center" style="margin-bottom: 15px;"></div>
              <div class="destorte">
                <p style="font-size: 1.3em;">Tenga en cuenta antes de solicitar el servicio</p>
                Te informamos que la Juguetería tiene en su menú una variedad de postres para acompañar una linda experiencia gastronómica y nuestros deliciosos platos, sin embargo también puedes llevar  la torta o ponqué de tu preferencia, para que nuestros chicos puedan porcionarla y servirla en nuestros platos y cubiertos de acuerdo con todos los asistentes.<br>El servicio anterior tiene un costo de <b>$3.000</b> pesos más impuestos por persona.<br>Este servicio tendrá un valor límite de <b>$45.000</b> pesos más impuestos si el número de porciones es superior a 20.<br><br>
                <i>"La propina es voluntaria"</i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 formMod">
        <div class="formMod-content">
          <div class="form-group">
            <div class="col-sm-12">
              <div class="erroresReserva"></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12 ventaCruzada">
              <div class="row">
                <div class="col-sm-12">
                  <h2>También puedes reservar en</h2>
                </div>
                <div class="sede col-sm-4">
                  Restaurante Don Corleone <br>
                  <a href="http://www.restaurantedoncorleone.com/" target="_blank">
                    <img src="http://www.restaurantedoncorleone.com/images/logo-don-corleone.png" alt="Restaurante Don Corleone">
                  </a>
                </div>
                <div class="sede col-sm-4">
                  Restaurante Chibchombia <br>
                  <a href="http://www.restaurantechibchombia.com/" target="_blank">
                    <img src="http://www.restaurantechibchombia.com/images/logo.png" alt="Restaurante Chimbchombia">
                  </a>
                </div>
                <div class="sede col-sm-4">
                  Cervecería Irlandesa <br>
                  <a href="http://www.cerveceriairlandesa.com/" target="_blank">
                    <img src="http://www.cerveceriairlandesa.com/images/logo.png" alt="Cervecería Irlandesa">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <div id="msjBotonReservas" class="hidden" style="font-family: 'Titulos'; color: #c90000; font-size: 2em;">Reservando...</div>
              <button id="botonReservarAhora" type="submit" class="btn btn-danger">Reservar</button>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <div class="checkbox">
                <label>
                  <input type="checkbox" required> <small>Acepto políticas de tratamiento de datos *</small>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
