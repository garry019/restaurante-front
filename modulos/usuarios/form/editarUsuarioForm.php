<?php if($_POST){
    print_r($_POST);
    $usuarios->editarUsuario();
    echo $site->redireccionar('usuarios/consultar/'.$_GET['parametro']);
} ?>
<?php $usuario = $usuarios->getUsuarioInfo(); ?>
<form id="usuarioForm" method="POST">
    <h3 class="form-subtitulo">Informaci&oacute;n personal</h3>
    <div class="input-group form-group">
        <span class="input-group-addon" id="nombre">Nombres</span>
        <input value="<?php echo $usuario['nombre']; ?>" id="usuarioNombre" name="nombre" type="text" class="form-control" placeholder="" aria-describedby="nombre" required="required" onchange="validarFormulario('botonEditarUsuario')" />
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="apellido">Apellidos</span>
        <input value="<?php echo $usuario['apellido']; ?>" id="usuarioApellido" name="apellido" type="text" class="form-control" placeholder="" aria-describedby="apellido" required="required" onchange="validarFormulario('botonEditarUsuario')" />
    </div>
    <h3 class="form-subtitulo">Informaci&oacute;n de Cont&aacute;cto</h3>
    <div class="input-group form-group">
        <span class="input-group-addon" id="email">Email</span>
        <input value="<?php echo $usuario['email']; ?>" id="usuarioEmail" name="email" type="email" class="form-control" placeholder="" aria-describedby="email" required="required" onchange="validarFormulario('botonEditarUsuario')" />
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="telefono">Tel&eacute;fono</span>
        <input value="<?php echo $usuario['telefono']; ?>" id="usuarioTelefono" name="telefono" type="text" class="form-control" placeholder="" aria-describedby="telefono" onchange="validarFormulario('botonEditarUsuario')" />
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="celular">Celular</span>
        <input value="<?php echo $usuario['celular']; ?>" id="usuarioCelular" name="celular" type="text" class="form-control" placeholder="" aria-describedby="celular" onchange="validarFormulario('botonEditarUsuario')" />
    </div>
    <h3 class="form-subtitulo">Informaci&oacute;n del sistema</h3>
    <?php if($_SESSION['5g_usuario_rol'] == 1){ ?>
        <div class="input-group form-group">
            <span class="input-group-addon">Sede</span>
            <select class="form-control" id="usuarioSede" name="sede" onchange="validarFormulario('botonEditarUsuario')" required >
                <option value="<?php echo $usuario['sede']; ?>"><?php if($usuario['sede'] == 0){echo 'Todas';}else{ echo $site->sedeNombre($usuario['sede']);} ?></option>
                <?php foreach($usuarios->getSedes() as $sede){ ?>
                    <option value="<?php echo $sede['sede_id'];  ?>"><?php echo $sede['sede_texto']; ?></option>    
                <?php } ?>
            </select>
        </div>
        <div class="input-group form-group">
            <span class="input-group-addon">Rol</span>
            <select class="form-control" id="usuarioRol" name="rol" onchange="validarFormulario('botonEditarUsuario')" required >
                <option value="<?php echo $usuario['rol']; ?>"><?php echo $site->rolNombre($usuario['rol']); ?></option>
                <?php foreach($usuarios->getRoles() as $rol){ ?>
                    <option value="<?php echo $rol['rol_id'];  ?>"><?php echo $rol['rol_nombre']; ?></option>    
                <?php } ?>
            </select>
        </div>
        <div class="input-group form-group">
            <span class="input-group-addon" id="alias">Alias</span>
            <input value="<?php echo $usuario['alias']; ?>" id="usuarioAlias" name="alias" type="text" class="form-control" placeholder="" aria-describedby="alias" required="required" onchange="validarFormulario('botonEditarUsuario')" />
        </div>
        <div class="input-group form-group">
            <span class="input-group-addon" id="pass">Contrase&ntilde;a</span>
            <input id="usuarioPass" name="pass" type="password" class="form-control" aria-describedby="pass" placeholder="Ingresa una contrase&ntilde;a para cambiarla" onchange="validarFormulario('botonEditarUsuario')" />
        </div>
        <div class="input-group form-group">
            <button id="botonEditarUsuario" class="btn btn-mod" disabled="disabled">Guardar</button>
            <a href="<?php echo $site->urlBase().'usuarios/consultar/'.$_GET['parametro']; ?>" class="btn btn-mod-block" style="padding-top: 13px;">Cancelar</a>
        </div>
    <?php } ?>
</form>