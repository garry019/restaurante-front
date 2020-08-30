<div class="container">
    <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            Usuarios del sistema
            <a href="<?php echo $site->urlBase().'usuarios/nuevo'; ?>"><span class="glyphicon glyphicon-plus pull-right" aria-hidden="true" title="Agregar Usuario"></span></a>
          </div>
          <div id="historialReservascliente" class="table-responsive">
                <table class="table table-striped table-condensed table-hover" >
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Rol</th>
                            <th class="text-center">Sede</th>
                            <th class="text-center">Alias</th>
                            <th class="text-center">Registro</th>
                        </tr>
                    </thead>          
                    <tbody>
                    <?php foreach($usuarios->getUsuarios() as $usuario){ ?>
                        <tr class="success text-center">
                            <td><?php echo $usuario['usuario_id']; ?></td>
                            <td><a href="<?php echo $site->urlBase().'usuarios/consultar/'.$usuario['usuario_id']; ?>"><?php echo $usuario['usuario_nombre'].' '.$usuario['usuario_apellido']; ?></a></td>
                            <td><?php echo $site->rolNombre($usuario['rol_id']); ?></td>
                            <td><?php echo $site->sedeNombre($usuario['sede_id']); ?></td>
                            <td><?php echo $usuario['usuario_alias']; ?></td>
                            <td><?php echo $usuario['usuario_fecha_registro']; ?></td>
                    <? } ?>    
                        <tr>
                            <td colspan="7" style="background: #333; color:#fff;">Registros <?php echo count($usuarios->getUsuarios()); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
</div>