<?php
//Datos para la configuracion del sitio web

class site
{
    public $imagesUrl,$urlBase,$redirect;

    public function __construct()
    {
    }

    public function loadControllers(){
        $controllers = array(
            'modulos/banner/controller/bannerController.php',
            'modulos/menu/controller/menuController.php',
            'modulos/contacto/controller/contactoController.php',
            'modulos/reservas/controller/reservasController.php'
        );
        return $controllers;
    }

    //Checking Unit Ttest Works
    public function selectOption($option){
        $result = 'Sin seleccionar';
        switch ($option) {
	        case '1':
                $result = 'Opcion 1';
            break;
            case '2':
                $result = 'Opcion 2';
            break;
            case '3':
                $result = 'Opcion 3';
            break;
		
	        default:
	            $result = 'Sin seleccionar';
		    break;
	    }
        return $result;
    }

    public function mysqlConex(){
        $host = 'localhost';
        $user = 'grupo5g_juguete';
        $pass = 'Dweb@2010';
        $bd = 'grupo5g_jugueterias';
        $this->con = mysql_connect($host,$user,$pass)or die('No se puede conectar a la base de datos, consulte al administrador del sitio');
        mysql_select_db($bd);
        mysql_query("SET NAMES 'utf8'");
        return $this->con;
    }

    public function urlBase()
    {
        $this->urlBase = 'http://'.$_SERVER['HTTP_HOST'].'/';
        return $this->urlBase;
    }

    public function imageUrl()
    {
        //Directorio de imagenes
        $this->imagesUrl = $this->urlBase.'images/';
        return $this->imagesUrl;
    }

    public function redireccionar($url)
    {
        $this->redirect =   "<script>
                                window.location.href = '".$this->urlBase.$url."';
                            </script>";
        return $this->redirect;
    }

    public function limpiar($cadena){
        $no_permitidas= array ("á","é","í","ó","ú","Á","É","I","O","U","N","Ñ"," ");
        $permitidas=    array ("a","e","i","o","u","A","E","I","O","U","n","N","-");
        $result = str_replace($no_permitidas,$permitidas,$cadena);
        return $result;
    }

    public function siteTitulo(){
        $title = 'Restaurante Tematico La Jugueteria';
        if(!isset($_GET['seccion'])){
          $title = 'Restaurante Tematico La Jugueteria';
        }else{
          switch ($_GET['seccion']) {
            case 'menu':
              $title = 'Restaurante Parrilla y Bar en Bogotá';
              break;
            case 'postres':
              $title = 'Postres en Bogotá';
              break;
            case 'menu-infantil':
              $title = 'Restaurante para niños Bogotá';
              break;
            case 'entradas':
              $title = 'Restaurante Parrilla en Bogota';
              break;
            case 'sopas':
              $title = 'Sopas en Bogotá';
              break;
            case 'ensaladas':
              $title = 'Ensaladas en Bogotá';
              break;
            case 'carnes':
              $title = 'Carne de res a la parrilla en Bogotá';
              break;
            case 'pollo':
              $title = 'Pollo a la parrilla en Bogotá';
              break;
            case 'cerdo':
              $title = 'Cerdo a la parrilla en Bogotá';
              break;
            case 'cerdo':
              $title = 'Pescado a la parrilla en Bogotá';
              break;
            case 'cervezas':
              $title = 'Cervezas artesanales en Bogotá';
              break;
            case 'bebidas-frias':
              $title = 'Bebidas frías en Bogotá';
              break;
            case 'bebidas-calientes':
              $title = 'Bebidas calientes en Bogotá';
              break;
            case 'historia':
              $title = 'Restaurante familiar en Bogotá';
              break;
            case 'eventos':
              $title = 'Restaurante para eventos en Bogotá';
              break;
            case 'preguntas-frecuentes':
              $title = 'Restaurante para eventos en Bogotá - Preguntas Frecuentes';
              break;
            default:
              $title = 'Restaurante Temático La Juguetería';
              break;
          }

        }
        return $title;
    }

    public function siteDescripcion(){
        $desc = 'Restaurante Tem&aacute;tico en Bogot&aacute;. Nuestra comida preparada a la parrilla con los mejores ingredientes que exaltan los sabores originales de la buena cocina.';
        return $desc;
    }

    public function footerClass(){
        if(!isset($_GET['seccion'])){
            $class = 'sociales';
        }else{
            $url = $_GET['seccion'];
            $seccion = array(
                'menu-infantil' => 'menuInfantilFooter',
                'entradas' => 'entradasFooter',
                'sopas' => 'sopasFooter',
                'ensaladas' => 'ensaladasFooter',
                'carnes' => 'carnesFooter',
                'pollo' => 'polloFooter',
                'pescado' => 'pescadoFooter',
                'cerdo' => 'cerdoFooter',
                'cervezas' => 'cervezasFooter',
                'bebidas-frias' => 'bfriasFooter',
                'bebidas-calientes' => 'bcalientesFooter',
                'historia' => 'historiaFooter',
                'eventos' => 'eventosFooter',
                'contacto' => 'contactoFooter',
                'postres' => 'postresFooter',
                'para-acompanar' => 'acompFooter',
                'hamburguesas' => 'ensaladasFooter'
            );
            $class = $seccion[$url];
        }
        echo $class;
    }

    public function ogTag(){
        $url = $_GET['seccion'];
        switch($url){
            case '':
                $ogTitle = 'Restaurante Tem&aacute;tico La Jugueter&iacute;a';
                $ogSiteName = 'Restaurante Tem&aacute;tico La Jugueter&iacute;a';
                $ogDescription = 'Nuestra comida preparada a la parrilla con los mejores ingredientes que exaltan los sabores originales de la buena cocina.';
                $ogUrl = 'http://'.$_SERVER['HTTP_HOST'].'/'.$url;
                $ogImage = 'images/banner/og-home-banner.jpg';
                $ogImageAlt = '';
            break;
            case 'menu':
                $ogTitle = 'Disfruta de nuestro delicioso Men&uacute;';
                $ogSiteName = 'Restaurante Tem&aacute;tico La Jugueter&iacute;a';
                $ogDescription = 'Nuestra comida preparada a la parrilla con los mejores ingredientes que exaltan los sabores originales de la buena cocina.';
                $ogUrl = 'http://'.$_SERVER['HTTP_HOST'].'/'.$url;
                $ogImage = 'images/banner/menu-banner.jpg';
                $ogImageAlt = 'Men&uacute; de la Jugueter&iacute;a';
            break;
            case 'historia':
                $ogTitle = 'Restaurante Tem&aacute;tico La Jugueter&iacute;a - Nuestra Historia';
                $ogSiteName = 'Restaurante Tem&aacute;tico La Jugueter&iacute;a';
                $ogDescription = 'Nuestra comida preparada a la parrilla con los mejores ingredientes que exaltan los sabores originales de la buena cocina.';
                $ogUrl = 'http://'.$_SERVER['HTTP_HOST'].'/'.$url;
                $ogImage = 'images/banner/historia-banner.jpg';
                $ogImageAlt = 'Historia de la Jugueter&iacute;a';
            break;
            case 'eventos':
                $ogTitle = 'Restaurante Tem&aacute;tico La Jugueter&iacute;a - Eventos';
                $ogSiteName = 'Restaurante Tem&aacute;tico La Jugueter&iacute;a';
                $ogDescription = 'Restaurante temático con gastronomía a la parrilla. Tiene la combinación perfecta, un espacio que reúne música en vivo y buena comida, para pasar un tiempo en familia o con amigos.';
                $ogUrl = 'http://'.$_SERVER['HTTP_HOST'].'/'.$url;
                $ogImage = 'images/slider/eventos/cumples.png';
                $ogImageAlt = 'Historia de la Jugueter&iacute;a';
            break;
        }
        $ogs = array(
            'ogTitle'       =>  $ogTitle,
            'ogSiteName'    =>  $ogSiteName,
            'ogDescription' =>  $ogDescription,
            'ogUrl'         =>  $ogUrl,
            'ogImage'       =>  $ogImage,
            'ogImageAlt'    =>  $ogImageAlt
        );
        return $ogs;
    }

}
$site = new site();
?>
