<div class="col-xs-12 regresarAlMenu">
  <div class="row">
    <div class="col-xs-12">
      <span class="openQuickMenu"><img style="width: 3% ;" src="<?php echo $site->urlBase().'images/guion.png'; ?>" /> VER MENÚ <img style="width: 3% ;" src="<?php echo $site->urlBase().'images/guion.png'; ?>" /></span>
    </div>
    <div class="col-xs-12 QuickMenu">
      <div class="row">
        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 itemQuickMenu">
          <a href="/menu-infantil">Infantil</a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 itemQuickMenu">
          <a href="/entradas">Entradas</a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 itemQuickMenu">
          <a href="/sopas">Sopas</a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 itemQuickMenu">
          <a href="/ensaladas">Ensaladas</a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 itemQuickMenu">
          <a href="/carnes">Carnes</a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 itemQuickMenu">
          <a href="/pollo">Pollo</a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 itemQuickMenu">
          <a href="/cerdo">Cerdo</a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 itemQuickMenu">
          <a href="/pescado">Pescado</a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 itemQuickMenu">
          <a href="/hamburguesas">Hamburguesas</a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 itemQuickMenu">
          <a href="/cervezas">Cervezas</a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 itemQuickMenu">
          <a href="/bebidas-frias">Bebidas Frías</a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 itemQuickMenu">
          <a href="/para-acompanar">Acompañamientos</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="row cabecera">
        <img style="width: 7% ;" src="<?php echo $site->urlBase().'images/guion.png'; ?>" /> Nuestro Men&uacute; <img style="width: 7% ;" src="<?php echo $site->urlBase().'images/guion.png'; ?>" />
    </div>
    <div class="row borderPostresDotted"></div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 visible-lg visible-md visible-sm <?php $menu->leftBg(); ?> "></div>
        <div class="col-lg-8 col-md-8 col-sm-8 postresContenido">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 tituloCategoria">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2><?php echo $menu->menuTitulo(); ?></h2>
                    </div>
                </div>
                <?php foreach($menu->getItems($menu->getCategoriaID()) as $item){ ?>
                <?php $c++; ?>
                <div id="<?php echo $item['id']; ?>" class="col-lg-4 col-md-6 col-sm-6 itemView">
                    <?php if($item['img'] != null){ ?>
                    <img class="itemCaracter" src="<?php echo $site->urlBase().'images/menu/caracters/'.$item['img']; ?>" /><br />
                    <?php } ?>
                    <?php if($menu->verifyNewItems($item['registro'])== true){ ?>
                    <img class="imgNewItem" src="<?php echo $site->urlBase().'images/menu/new-item.png'; ?>" />
                    <?php } ?>
                    <h2><?php echo $item['nombre']; ?></h2>
                    <p><?php echo $item['descripcion']; ?></p>
                    <p class="precio"><?php echo $item['precio']; ?></p>
                </div>
                <?php $menu->showCharacters($c); ?>
                <?php } ?>
            </div>
            <?php if(isset($_GET['seccion'])){ ?>
              <?php if($_GET['seccion'] == 'cervezas'){ ?>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 text-center tituloCategoria">
                    <h2>El primer trago de cerveza, te alegra y aclara la cabeza, así que recárgate de energía con nuestra fantástica bebida</h2>
                    <h4>Estos productos no aplican para domicilios</h2>
                  </div>
                </div>
              <?php } ?>
              <?php if($_GET['seccion'] == 'hamburguesas'){ ?>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 text-center tituloCategoria">
                    <h2>Todas nuestras hamburguesas vienen con Lechuga, Tomate y Cebolla</h2>
                  </div>
                </div>
              <?php } ?>
            <?php } ?>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 visible-lg visible-md visible-sm <?php $menu->rightBg(); ?>"></div>
    </div>
    <!-- <div class="row text-center backButton"><a href="javascript:history.go(-1)">Regresar al men&uacute;</a></div> -->
    <div class="row borderPostresDotted"></div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 <?php $site->footerClass(); ?>">
    <div class="row contentSocial">
        <?php include 'template/layout/socialContent.php'; ?>
    </div>
    <div class="row footerSocial">
        <img class="img-responsive" src="<?php echo $site->urlBase().'images/footersocial.png'; ?>" />
    </div>
</div>
