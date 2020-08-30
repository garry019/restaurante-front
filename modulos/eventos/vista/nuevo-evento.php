<div class="col-sm-12 all-contents nuevo-evento text-center">

  <!-- Titulo -->
  <div class="row">
    <div class="col-sm-12">
      <h1>Solicitud para realizar un evento</h1>
    </div>
  </div>

  <!-- Form -->
  <div class="row">
    <div class="col-sm-12 col-lg-4 col-lg-offset-4">
      <form id="eventoForm" class="form-horizontal">
        <div class="form-group">
          <label for="motivo" class="col-sm-3 control-label">Motivo</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="motivo" placeholder="Motivo del evento" required>
          </div>
        </div>
        <div class="form-group">
          <label for="nombre" class="col-sm-3 control-label">Contacto</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
          </div>
        </div>
        <div class="form-group">
          <label for="telefono" class="col-sm-3 control-label">Teléfono</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="telefono" placeholder="Teléfono" required>
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="email" placeholder="Email" required>
          </div>
        </div>
        <div class="form-group">
          <label for="restaurante" class="col-sm-3 control-label">Restaurante</label>
          <div class="col-sm-9">
            <select id="restaurante" class="form-control" required="required">
              <option></option>
              <option value="3">La Juguetería Cedritos - 382 Personas</option>
              <option value="1">La Juguetería Macarena - 250 Personas</option>
              <option value="8">La Juguetería Kennedy - 400 Personas</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="comensales" class="col-sm-3 control-label">Comensales</label>
          <div class="col-sm-4">
            <input id="comensales" name="comensales" type="number" class="form-control" placeholder="" aria-describedby="fecha" required>
          </div>
        </div>
        <div class="form-group">
          <label for="eventoFecha" class="col-sm-3 control-label">Fecha</label>
          <div class="col-sm-4">
            <input id="eventoFecha" name="eventoFecha" type="text" class="form-control" placeholder="" aria-describedby="fecha" required>
          </div>
        </div>
        <div class="form-group">
          <label for="hora" class="col-sm-3 control-label">Hora</label>
          <div class="col-sm-4">
            <select id="hora" class="form-control" required="required">
              <option></option>
              <option value="12:00:00">12:00 pm</option>
              <option value="12:30:00">12:30 pm</option>
              <option value="13:00:00">01:00 pm</option>
              <option value="13:30:00">01:30 pm</option>
              <option value="14:00:00">02:00 pm</option>
              <option value="14:30:00">02:30 pm</option>
              <option value="15:00:00">03:00 pm</option>
              <option value="15:30:00">03:30 pm</option>
              <option value="16:00:00">04:00 pm</option>
              <option value="16:30:00">04:30 pm</option>
              <option value="17:00:00">05:00 pm</option>
              <option value="17:30:00">05:30 pm</option>
              <option value="18:00:00">06:00 pm</option>
              <option value="18:30:00">06:30 pm</option>
              <option value="19:00:00">07:00 pm</option>
              <option value="19:30:00">07:30 pm</option>
              <option value="20:00:00">08:00 pm</option>
              <option value="20:30:00">08:30 pm</option>
              <option value="21:00:00">09:00 pm</option>
              <option value="21:30:00">09:30 pm</option>
              <option value="22:00:00">10:00 pm</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="comentario" class="col-sm-3 control-label">Comentarios</label>
          <div class="col-sm-9">
            <textarea id="comentario" class="form-control" rows="3"></textarea>
          </div>
        </div>
        <div class="form-group selectPols">
          <div class="col-sm-12">
            <div class="checkbox">
              <label>
                <input type="checkbox" required> Acepto políticas de tratamiento de datos *
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Solicitar</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
