<div class="col-xs-12 all-contents content-liga text-center">
  <div class="row">
    <div class="col-xs-12 banner-liga">
      <span>LIGA DE SUPER HEROES</span>
      <img src="<?php echo $site->urlBase().'images/liga-heroes.png'; ?>" alt="">
      <h1>PARA ESTAR EN NUESTRO RADAR...</h1>
    </div>
  </div>
  <div class="row" style="padding:0 5px 5px 5px; background: #fff;">
    <div class="col-xs-12 formulario-liga">
      <h2>ESTOS DATOS <br>DEBES COMPLETAR. <br> <small>(Todos)</small> </h2>
      <form id="registroLigaSuperheroes" class="form-horizontal">
        <div class="form-group">
          <label for="clienteNombre" class="col-xs-4 control-label text-center">NOMBRE</label>
          <div class="col-xs-8">
            <input type="text" class="form-control" id="clienteNombre" placeholder="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="clienteCedula" class="col-xs-4 control-label text-center">CÉDULA</label>
          <div class="col-xs-8 col-md-6">
            <input type="text" class="form-control" id="clienteCedula" placeholder="" required>
            <div class="notas-liga">
              *PARA DISFRUTAR LOS BENEFICIOS DE LA LIGA
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="clienteCelular" class="col-xs-4 control-label text-center">CELULAR</label>
          <div class="col-xs-8 col-md-4">
            <input type="text" class="form-control" id="clienteCelular" placeholder="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="clienteEmail" class="col-xs-4 control-label text-center">CORREO</label>
          <div class="col-xs-8 col-md-6">
            <input type="email" class="form-control" id="clienteEmail" placeholder="" required>
            <div class="notas-liga">
              *PARA COMUNICARTE TUS SUPER PODERES
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="clienteCumple" class="col-xs-4 control-label text-center">CUMPLEAÑOS</label>
          <div class="col-xs-8 col-md-4">
            <input type="text" class="form-control" id="clienteCumple" placeholder="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="clienteDireccion" class="col-xs-4 control-label text-center">DIRECCION</label>
          <div class="col-xs-8">
            <input type="text" class="form-control" id="clienteDireccion" placeholder="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="clienteBarrio" class="col-xs-4 control-label text-center">BARRIO</label>
          <div class="col-xs-8">
            <input type="text" class="form-control" id="clienteBarrio" placeholder="" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <a href="http://www.grupo5g.com/politicas/data.pdf" style="color: #fff; font-family: 'Bart1'; font-size:1.2em; text-shadow: 1px 1px 1px #000;" target="_blank">
              <div class="" style="background: #5071b1; padding: 0; border-radius: 5px;">
                Al realizar el envío de este registro estarás aceptando las políticas de tratamiento de datos personales
              </div>
            </a>
            <br><br>
            <div class="registro-liga-error" style="background: #e02e27; padding: 0; border-radius: 5px; color: #fff; font-family: 'Bart1'; font-size:1.2em; text-shadow: 1px 1px 1px #000;"></div>
            <img width="150px" src="<?php echo $site->urlBase().'images/btn-enviar-liga.png'; ?>" alt="" class="btn-enviar-liga">
            <button type="submit" name="button" class="btn btn-primary btn-liga hidden">ENVIAR</button> <br>
          </div>
        </div>
      </form>
      <div class="nota-liga">
        <p>*PARA RECIBIR TUS SUPER PODERES<br><span>DEBES ESTAR INSCRITO EN LA LIGA</span></p>
      </div>
    </div>
  </div>
</div>
