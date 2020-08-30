<div class="col-sm-12 all-contents cancelarReserva text-center">
  <h1>Cancelación de Reservas<br><br> <span id="NumReserva"></span><br>
  <small>Para nosotros es muy importante conocer el motivo de su cancelación.</small>
  </h1>
  <br>
  <form id="cancelarReservaForm">
    <input id="transCode" type="hidden" name="transCode" value="<?php echo $_GET['parametro']; ?>">
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" value="1">
        Necesito cambiar los datos de la reserva
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" value="2" required>
        Ya no asistiré al restaurante
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" value="6" required>
          Tengo otro número de reserva asignado
        </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" value="3" required>
        Reservé en otro restaurante
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" value="4" required>
        Motivos personales
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" value="5" id="motivoOtro" required>
        Otro
      </label>
    </div>
    <div class="textarea text-center">
      <textarea id="otroMotivo" name="otroMotivo" class="form-control" disabled="true" rows="1" style="margin: 0 auto;"></textarea><br>
    </div>
    <button type="submit" name="button" class="btn btn-warning">Cancelar la Reserva</button>
    <br>
    <br>
  </form>
</div>
