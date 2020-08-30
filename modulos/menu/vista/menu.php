<div class="seo">
	<h1>Restaurante parrilla y bar en Bogotá</h1>
	<p>Restaurante en Bogotá</p>
	<ul>
		<li> <b>Restaurante parrilla</b> </li>
		<li> <i>Restaurante parrilla en Bogotá</i> </li>
		<li> <i>Restaurante familiar en Bogotá</i> </li>
	</ul>
	<p> <strong>parrilla en Bogotá</strong> </p>
	<h2>Restaurante parrilla</h2>
	<ul>
		<li>Restaurante parrilla para niños</li>
		<li>Restaurante parrilla para celebrar cumpleaños</li>
	</ul>
</div>
<div id="menu-principal" class="col-lg-12"></div>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="row cabecera">
        <img style="width: 7% ;" src="<?php echo $site->urlBase().'images/guion.png'; ?>" /> Nuestro Men&uacute; <img style="width: 7% ;" src="<?php echo $site->urlBase().'images/guion.png'; ?>" />
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 15px;">
    <div class="row">
			<?php foreach($menu->cartaCategorias() as $categoria){ ?>
					<?php if($categoria['id'] == 14){ ?>
							<div class="col-lg-6 col-md-6 col-sm-12 itemMenuList" style="margin: 15px 0 15px 0; padding: 60px 15px 60px 15px;">
									<h2 class="text-center" style="font-family: 'Bart1'; font-size: 4em; color: #c90000;">Pregunta por nuestras Hamburguesas<br><br><small style="font-size: 0.5em; font-family:''; display:none;">Selecciona tus ingredientes,<br>o disfruta los recomendados del Chef.</small> </h2>
									<p class="text-center" style="font-size: 1.5em;">Selecciona tus ingredientes,<br>o disfruta los recomendados del Chef</p>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 itemMenuList" style="margin: 15px 0 15px 0; padding: 15px;">
									<a href="<?php echo $categoria['url']; ?>"><img class="img-responsive box-deco" src="<?php echo $site->urlBase().'images/menu/items/'.$categoria['img']; ?>" />
									<div class="itemText"><?php echo $categoria['nombre']; ?></div>
									<div class="borderDotted"></div></a>
							</div>
					<?php } ?>
			<?php } ?>
        <?php foreach($menu->cartaCategorias() as $categoria){ ?>
            <?php if($categoria['id'] != 13 AND $categoria['id'] != 14){ ?>
                <div class="col-lg-3 col-md-3 col-sm-3 itemMenuList">
                    <a href="<?php echo $categoria['url']; ?>"><img class="img-responsive box-deco" src="<?php echo $site->urlBase().'images/menu/items/'.$categoria['img']; ?>" />
                    <div class="itemText"><?php echo $categoria['nombre']; ?></div>
                    <div class="itemImg">
                        <img class="img-responsive" src="<?php echo $site->urlBase().'images/menu/caracters/'.$categoria['caracter']; ?>" />
                    </div>
                    <div class="borderDotted"></div></a>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3">
    <a href="<?php echo $site->urlBase().'postres'; ?>">
        <div class="imgSeccion" style="margin-bottom: 15px;">
            <img class="img-responsive box-deco" src="<?php echo $site->urlBase().'images/secciones/img2.jpg'; ?>" />
            <div class="circuloSeccion">
                <p class="textoCirculoSeccion">Postres<br /><img src="<?php echo $site->urlBase().'images/text-bot.png'; ?>" /></p>
            </div>
        </div>
    </a>
    <h2 class="text-center descBannerPostre">Color&iacute;n colorado, este postre te est&aacute; esperando.</h2>
</div>
<div class="col-lg-9 col-md-9 col-sm-9">
    <?php include 'modulos/slider/vista/menuSlider1.php'; ?>
</div>
<div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 15px;">
    <a href="postres">
    <div class="row">
        <h2 class="postres-titulo-banner hidden-xs">Postres</h2>
        <h2 class="postres-titulo-banner visible-xs" style="font-size: 2em;">Postres</h2>
        <img class="img-responsive" src="<?php echo $site->urlBase().'images/banner-postres.jpg'; ?>" />
        <img class="img-responsive snoopi-in-banner" src="<?php echo $site->urlBase().'images/banner/elefantico.png'; ?>" />
    </div>
    </a>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 menuFooter">
    <div class="row contentSocial">
        <?php include 'template/layout/socialContent.php'; ?>
    </div>
    <div class="row footerSocial">
        <img class="img-responsive" src="<?php echo $site->urlBase().'images/footersocial.png'; ?>" />
    </div>
</div>
<div class="seo">
	<h1>Restaurante parrilla y bar en Bogotá</h1>
	<p>Restaurante en Bogotá</p>
	<ul>
		<li> <b>Restaurante parrilla</b> </li>
		<li> <i>Restaurante parrilla en Bogotá</i> </li>
		<li> <i>Restaurante familiar en Bogotá</i> </li>
	</ul>
	<p> <strong>parrilla en Bogotá</strong> </p>
	<h2>Restaurante parrilla</h2>
	<ul>
		<li>Restaurante parrilla para niños</li>
		<li>Restaurante parrilla para celebrar cumpleaños</li>
	</ul>
</div>
