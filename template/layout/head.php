<?php require_once('config/configuration.php'); ?>
<?php
if(is_array($site->loadControllers())){
    foreach($site->loadControllers() as $controller){
        include $controller;
    }
} ?>
<title><?php echo $site->siteTitulo(); ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
<link rel="alternate" hreflang="es" href="http://www.restaurantelajugueteria.com.co" />
<meta name="keywords" content="restaurante en bogota,restaurante tematico" />
<meta name="description" content="<?php echo $site->siteDescripcion(); ?>" />
<meta name="author" content="Grupo 5G" />
<meta property="og:type" content="Website" />
<meta property="og:title" content="<?php echo $site->ogTag()['ogTitle']; ?>" />
<meta property="og:site_name" content="<?php echo $site->ogTag()['ogSiteName']; ?>">
<meta property="og:description" content="<?php echo $site->ogTag()['ogDescription']; ?>" />
<meta property="og:url" content="<?php echo $site->ogTag()['ogUrl']; ?>" />
<meta property="og:image" content="<?php echo $site->ogTag()['ogImage']; ?>" />
<meta property="og:image:alt" content="<?php echo $site->ogTag()['ogImageAlt']; ?>" />

<link rel="shortcut icon" href="<?php echo $site->urlBase(); ?>template/images/favicon.ico" />
<link rel="stylesheet" href="<?php echo $site->urlBase().'template/css/bootstrap.min.css'; ?>" />
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo $site->urlBase(); ?>g5g_reservas/css/g5g_style.css" />
<link rel="stylesheet" href="<?php echo $site->urlBase().'template/css/default.css'; ?>"  />
<link rel="stylesheet" href="<?php echo $site->urlBase().'template/css/seccion-reservas.css'; ?>"  />
<link rel="stylesheet" href="<?php echo $site->urlBase().'template/css/eventos.css'; ?>"  />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42291353-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-42291353-3');
</script>
