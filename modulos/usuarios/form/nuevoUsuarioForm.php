<?php if($_POST){
    //print_r($_POST);
    $usuarios->guardarUsuario();
    echo $site->redireccionar('usuarios');
}?>
<form id="clienteForm" method="POST">
    <h3 class="form-subtitulo">Informaci&oacute;n personal</h3>
    <div class="input-group form-group">
        <span class="input-group-addon" id="nombre">Nombres</span>
        <input name="nombre" type="text" class="form-control" placeholder="" aria-describedby="nombre" required="required" />
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="apellido">Apellidos</span>
        <input name="apellido" type="text" class="form-control" placeholder="" aria-describedby="apellido" required="required" />
    </div>
    <h3 class="form-subtitulo">Informaci&oacute;n de Cont&aacute;cto</h3>
    <div class="input-group form-group">
        <span class="input-group-addon" id="email">Email</span>
        <input id="clienteEmail" name="email" type="email" class="form-control" placeholder="" aria-describedby="email" required="required" />
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="telefono">Tel&eacute;fono</span>
        <input name="telefono" type="text" class="form-control" placeholder="" aria-describedby="telefono" />
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="celular">Celular</span>
        <input name="celular" type="text" class="form-control" placeholder="" aria-describedby="celular" />
    </div>
    <h3 class="form-subtitulo">Informaci&oacute;n del sistema</h3>
    <div class="input-group form-group">
        <span class="input-group-addon">Sede</span>
        <select class="form-control" id="sede" name="sede" required >
            <option></option>
            <?php foreach($usuarios->getSedes() as $sede){ ?>
                <option value="<?php echo $sede['sede_id'];  ?>"><?php echo $sede['sede_texto']; ?></option>    
            <?php } ?>
        </select>
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon">Rol</span>
        <select class="form-control" id="rol" name="rol" required >
            <option></option>
            <?php foreach($usuarios->getRoles() as $rol){ ?>
                <option value="<?php echo $rol['rol_id'];  ?>"><?php echo $rol['rol_nombre']; ?></option>    
            <?php } ?>
        </select>
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="alias">Alias</span>
        <input name="alias" type="text" class="form-control" placeholder="" aria-describedby="alias" required="required" />
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="pass">Contrase&ntilde;a</span>
        <input name="pass" type="password" class="form-control" aria-describedby="pass" required="required" />
    </div>
    <div class="input-group">
        <button id="botonGuardarCliente" class="btn btn-mod" >Guardar</button>
    </div>
</form>
