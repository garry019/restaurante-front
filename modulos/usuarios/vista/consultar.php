<?php $usuario = $usuarios->getUsuarioInfo(); ?>
<div class="container">
    <div class="row text-center">
        <h1 style="color: #fff;">Informaci&oacute;n del Usuario</h1>
    </div>
    <div class="row" style="background: #fff; border-radius: 5px 5px 0 0;">
        <div class="col-lg-12">
            <h1><?php echo $usuario['nombre'].' '.$usuario['apellido']; ?></h1>
        </div>
    </div>
    <div class="row" style="background: #fff;">
        <div class="col-lg-6">
            <ul class="list-group">
                <li class="list-group-item"><strong>Rol </strong><?php echo $site->rolNombre($usuario['rol']); ?></li>
                <li class="list-group-item"><strong>Sede </strong><?php if($usuario['sede'] == 0){ echo 'Todas';}else{?><a href="<?php echo $site->urlBase().'sedes/detalle/'.$usuario['sede']; ?>"><?php echo $site->sedeNombre($usuario['sede']); ?></a> <?php } ?></li>
                <li class="list-group-item"><strong>E-mail </strong><?php echo $usuario['email']; ?></li>
                <li class="list-group-item"><strong>Tel&eacute;fono </strong><?php echo $usuario['telefono']; ?></li>
                <li class="list-group-item"><strong>Celular </strong><?php echo $usuario['celular']; ?></li>
                <li class="list-group-item"><strong>Alias </strong><?php echo $usuario['alias']; ?></li>
                <li class="list-group-item"><strong>Creado por </strong><a href="<?php echo $site->urlBase().'usuarios/consultar/'.$usuario['creador']; ?>"><?php echo $site->usuarioNombre($usuario['creador']); ?></a></li>
                <li class="list-group-item"><strong>Fecha de registro </strong><?php echo $usuario['registro']; ?></li>
                <?php if($usuario['actualizador'] > 0){ ?>
                    <li class="list-group-item"><strong>Actualizado por </strong><a href="<?php echo $site->urlBase().'usuarios/consultar/'.$usuario['actualizador']; ?>"><?php echo $site->usuarioNombre($usuario['actualizador']); ?></a></li>
                    <li class="list-group-item"><strong>Fecha de actualizaci&oacute;n </strong><?php echo $usuario['actualizado']; ?></li>    
                <?php } ?>
            </ul>    
        </div>
    </div>
    <div class="row" style="background: #fff; border-radius: 0 0 5px 5px;">
        <div class="col-lg-12">
            <?php if($_SESSION['5g_usuario_rol'] == 1 || $_SESSION['5g_usuario_rol'] == 2){ ?>
                <a href="<?php echo $site->urlBase().'usuarios/editar/'.$_GET['parametro']; ?>"><button class="btn btn-mod-block">Editar Usuario</button></a>    
            <?php } ?>
            <a href="<?php echo $site->urlBase().'usuarios'; ?>"><button class="btn btn-mod">Salir</button></a>
        </div>
    </div>
</div>