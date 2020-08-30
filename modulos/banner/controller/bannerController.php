<?php
class banner

{

    public function __construct()
    {
        $path = 'modulos/banner/';
    }

    public function vista(){
        if(!isset($_GET['seccion'])){
            $vista = 'modulos/banner/vista/home.php';
        }else{
            if($_GET['seccion'] == 'menu'){
                $vista = 'modulos/banner/vista/menu.php';
            }
            if($_GET['seccion'] == 'postres'){
                $vista = 'modulos/banner/vista/postres.php';
            }
            if($_GET['seccion'] == 'menu-infantil'){
                $vista = 'modulos/banner/vista/menu-infantil.php';
            }
            if($_GET['seccion'] == 'entradas'){
                $vista = 'modulos/banner/vista/entradas.php';
            }
            if($_GET['seccion'] == 'sopas'){
                $vista = 'modulos/banner/vista/sopas.php';
            }
            if($_GET['seccion'] == 'ensaladas'){
                $vista = 'modulos/banner/vista/ensaladas.php';
            }
            if($_GET['seccion'] == 'carnes'){
                $vista = 'modulos/banner/vista/carnes.php';
            }
            if($_GET['seccion'] == 'pollo'){
                $vista = 'modulos/banner/vista/pollo.php';
            }
            if($_GET['seccion'] == 'cerdo'){
                $vista = 'modulos/banner/vista/cerdo.php';
            }
            if($_GET['seccion'] == 'pescado'){
                $vista = 'modulos/banner/vista/pescado.php';
            }
            if($_GET['seccion'] == 'cervezas'){
                $vista = 'modulos/banner/vista/cervezas.php';
            }
            if($_GET['seccion'] == 'bebidas-frias'){
                $vista = 'modulos/banner/vista/bebidas-frias.php';
            }
            if($_GET['seccion'] == 'bebidas-calientes'){
                $vista = 'modulos/banner/vista/bebidas-calientes.php';
            }
            if($_GET['seccion'] == 'hamburguesas'){
                $vista = 'modulos/banner/vista/hamburguesas.php';
            }
            if($_GET['seccion'] == 'historia'){
                $vista = 'modulos/banner/vista/historia.php';
            }
            if($_GET['seccion'] == 'eventos'){
                $vista = 'modulos/banner/vista/eventos.php';
            }
            if($_GET['seccion'] == 'contacto'){
                $vista = 'modulos/banner/vista/contacto.php';
            }
            if($_GET['seccion'] == 'para-acompanar'){
                $vista = 'modulos/banner/vista/acomp.php';
            }
            if($_GET['seccion'] == 'reservas'){
                $vista = 'modulos/banner/vista/no-banner.php';
            }
        }
        return $vista;
    }
}

$banner = new banner();

?>
