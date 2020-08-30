<?php require_once 'modulos/contacto/controller/contactoController.php'; ?>
<?php if(isset($_POST['contactoEmail'])){ ?>
    <?php
    $contacto->enviarEmailContacto();
    $contacto->guardarEmailContacto();
    echo $site->redireccionar('contactoenviado');
    ?>
<?php } ?>
<div class="col-lg-12 text-center">
    <p>Para brindarle un mejor servicio, permitanos conocer los detalles de su evento.</p>
</div>
<div class="col-lg-12">
    <form method="POST">
        <div class="col-lg-6">
            <h2 class="text-center">Informaci&oacute;n de contacto</h2>
            <div class="form-group">
                <input id="nombre" name="nombre" class="form-control" type="text" placeholder="Nombre" required="required" />
            </div>
            <div class="form-group">
                <input id="email" name="email" class="form-control" type="email" placeholder="E-mail" required="required"/>
            </div>
            <div class="form-group">
                <input id="telefono" name="telefono" class="form-control" type="text" placeholder="Tel&eacute;fono" required="required"/>
            </div>
        </div>
        <div class="col-lg-6">
            <h2 class="text-center">Informaci&oacute;n del evento</h2>
            <div class="form-group">
                <select id="motivo" name="motivo" class="form-control" required="required" style="color: #99999B;">
                    <option value="null">Motivo</option>
                    <option value="Matrimonio">Matrimonio</option>
                    <option value="Evento Empresarial">Evento Empresarial</option>
                    <option value="Evento Social">Evento Social</option>
                </select>
            </div>
            <div class="form-group">
                <input id="fecha" name="fecha" class="form-control" type="texto" placeholder="Fecha del Evento" required="required"/>
            </div>
            <div class="form-group">
                <input id="invitados" name="invitados" class="form-control" type="text" placeholder="N&uacute;mero de invitados" required="required"/>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <textarea id="mensaje" name="mensaje" class="form-control" placeholder="&iquest;C&oacute;mo te podemos ayudar?"></textarea>
            </div>
            <div class="form-group text-center" style="color: #333; font-family:'Titulo'; font-size: 1.2em;">
                <input type="checkbox" required="required" /> Acepto <a href="<?php echo $site->urlBase().'politicas'; ?>" target="_blank">Pol&iacute;ticas de manejo y tratamiento de la informaci&oacute;n</a>
            </div>
            <div class="form-group">
                <input type="submit" name="contactoEmail" class="btn btn-default center-block" value="Enviar" style="font-family: 'Parrafo';"  />
            </div>      
        </div>
    </form>
</div>