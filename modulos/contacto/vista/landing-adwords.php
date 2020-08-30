<?php require_once 'modulos/contacto/controller/contactoController.php'; ?>
<div class="col-lg-12 top-margin" style="margin-top: 2%;">
    <h1 class="text-center"></h1>
</div>
<?php if(isset($_POST['contactoEmail'])){ ?>
    <?php
    $contacto->enviarEmailContacto();
    $contacto->guardarEmailContacto();
    echo $site->redireccionar('contactoadwordsenviado');
    ?>
<?php }else{ ?>
    <!-- Google Code for Vista de Formulario Adwords Conversion Page -->
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 957677183;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "l9_gCM70wm8Q__zTyAM";
    var google_remarketing_only = false;
    /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/957677183/?label=l9_gCM70wm8Q__zTyAM&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>    
<?php } ?>
<div class="col-lg-5 col-lg-offset-1">
    <h2>Matrimonios en el Retiro de San Juan</h2>
    <?php include 'modulos/banners/vista/landing-matrimonios.php'; ?>
</div>
<form method="POST">
    <div class="col-lg-4 col-lg-offset-1" style="padding: 20px; background: #FBFBF9;">
        <div class="form-group">
            <input id="nombre" name="nombre" class="form-control" type="text" placeholder="Nombre" required="required" />
        </div>
        <div class="form-group">
            <input id="email" name="email" class="form-control" type="email" placeholder="E-mail" required="required"/>
        </div>
        <div class="form-group">
            <input id="telefono" name="telefono" class="form-control" type="text" placeholder="Tel&eacute;fono" required="required"/>
        </div>
        <div class="form-group">
            <select id="motivo" name="motivo" class="form-control" style="color: #99999B;">
                <option value="Adwords Matrimonio">Matrimonio</option>
            </select>
        </div>
        <div class="form-group">
            <input id="fecha" name="fecha" class="form-control" type="texto" placeholder="Fecha del Evento"/>
        </div>
        <div class="form-group">
            <input id="invitados" name="invitados" class="form-control" type="text" placeholder="Número de invitados"/>
        </div>
        <div class="form-group">
            <textarea id="mensaje" name="mensaje" class="form-control" placeholder="&iquest;C&oacute;mo te podemos ayudar?"></textarea>
        </div>
        <div class="form-group text-center" style="color: #333; font-family:'Titulo'; font-size: 1em;">
            <input type="checkbox" required="required" /> Acepto <a href="<?php echo $site->urlBase().'politicas'; ?>" target="_blank">Pol&iacute;ticas de manejo y tratamiento de la informaci&oacute;n</a>
        </div>
        <div class="form-group">
            <input type="submit" name="contactoEmail" class="btn btn-default center-block" value="Enviar" style="font-family: 'Parrafo';"  />
        </div>             
    </div>
</form>
