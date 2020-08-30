<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es-es">
<head>
	<?php include 'template/layout/head.php'; ?>
</head>
<body>
	<img class="btn-reservas" src="<?php echo $site->urlBase().'images/button-reserva.png'; ?>" alt="Reservas">
	<img class="btn-domicilios" src="<?php echo $site->urlBase().'images/button-domicilios.png'; ?>" alt="Domicilios">
	<div class="domicilios-content ">
		<ul>
			<li><a href="https://www.rappi.com.co/restaurantes/la-jugueteria" target="_blank"><img src="<?php echo $site->urlBase().'images/domicilios/logo-rappi.jpg'; ?>" alt="Domicilios en Rappi"></a></li>
			<li><a href="https://domicilios.com/bogota/restaurantes/la-jugueteria-cedritos" target="_blank"><img src="<?php echo $site->urlBase().'images/domicilios/logo-domicilios.jpg'; ?>" alt="Domicilios en Domicilios.com"></a></li>
			<li><a href="https://www.ubereats.com/en-CO/bogota/food-delivery/la-jugueteria-cedritos/S8BldKSvTgmHD5ByOkfYKA/" target="_blank"><img src="<?php echo $site->urlBase().'images/domicilios/logo-ubereats.jpg'; ?>" alt="Domicilios en Uber Eats"></a></li>
		</ul>
		<button class="btn btn-primary cerrar-domicilios" type="submit"> Cerrar </button>
	</div>
	<div id="wrapper" class="container-fluid">

		<div class="col-xs-12 newMenu">
		  <div class="row">
		    <div class="col-xs-2 col-sm-1 text-left newMenu-nav">
		      <a href="#">
						<i class="fas fa-bars"></i>
					</a>
		    </div>
		    <div class="col-xs-8 col-sm-10 text-center newMenu-logo">
		      <a href="/"><span class="l1">La Juguetería</span></a>
		    </div>
		    <div class="col-xs-2 col-sm-1 text-right newMenu-ubicacion pull-right">
		      <a href="/contacto"><i class="fas fa-map-marker-alt"></i></a>
		    </div>
		  </div>
		</div>
		<div class="newMenu-list">
		  <div class="newMenu-list-item newMenu-list-cerrar">Cerrar</div>
		  <a href="/"><div class="newMenu-list-item i1"> Home </div></a>
		  <a href="/menu"><div class="newMenu-list-item i2"> Menú </div></a>
		  <a href="/historia"><div class="newMenu-list-item i3"> Historia </div></a>
		  <a href="/eventos"><div class="newMenu-list-item i4"> Eventos </div></a>
		  <a href="/contacto"><div class="newMenu-list-item i5"> Contacto </div></a>
		</div>
		<header class="row">
			<?php include 'modulos/banner/vista/default.php'; ?>
		</header>
		<section class="row">
			<?php include 'modulos/contenido/vista/contenido.php'; ?>
		</section>
		<footer class="row">
			<?php include 'template/layout/footer.php'; ?>
		</footer>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
	<script src="<?php echo $site->urlBase();?>template/js/bootstrap.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="<?php echo $site->urlBase();?>template/js/javascript.js"></script>
	<?php
		if(isset($_GET['seccion'])){
			if($_GET['seccion'] == 'reservas'){ ?>
				<script src="<?php echo $site->urlBase();?>template/js/reservas-online.js"></script>
			<?php }
		}
	?>
	<?php
		if(isset($_GET['seccion'])){
			if($_GET['seccion'] == 'solicitud-nuevo-evento'){ ?>
				<script src="<?php echo $site->urlBase();?>template/js/eventos.js"></script>
			<?php }
		}
	?>
	<?php
		if(isset($_GET['seccion'])){
			if($_GET['seccion'] == 'completar-liga' OR $_GET['seccion'] == 'registro-liga' OR $_GET['seccion'] == 'liga-superheroes' ){ ?>
				<script src="<?php echo $site->urlBase();?>template/js/liga.js"></script>
			<?php }
		}
	?>
	<script src="<?php echo $site->urlBase();?>template/js/galeria5g.js"></script>
	<script src="<?php echo $site->urlBase();?>template/js/btn-domicilios.js"></script>
	<script src="https://reservas.grupo5g.com/clientWebForms/servicio_reservas.js"></script>
</body>
</html>
