<?php
class contenido
{
    public function __construct()
    {

    }

    public function vista()
    {
        if(isset($_GET['seccion'])){
            $modulo = $_GET['seccion'];
            $seccion = array(
                'menu' => 'modulos/menu/vista/menu.php',
                'menu-infantil' => 'modulos/menu/vista/itemsView.php',
                'entradas' => 'modulos/menu/vista/itemsView.php',
                'sopas' => 'modulos/menu/vista/itemsView.php',
                'ensaladas' => 'modulos/menu/vista/itemsView.php',
                'carnes' => 'modulos/menu/vista/itemsView.php',
                'pollo' => 'modulos/menu/vista/itemsView.php',
                'cerdo' => 'modulos/menu/vista/itemsView.php',
                'pescado' => 'modulos/menu/vista/itemsView.php',
                'cervezas' => 'modulos/menu/vista/itemsView.php',
                'postres' => 'modulos/menu/vista/itemsView.php',
                'bebidas-frias' => 'modulos/menu/vista/itemsView.php',
                'bebidas-calientes' => 'modulos/menu/vista/itemsView.php',
                'para-acompanar' => 'modulos/menu/vista/itemsView.php',
                'hamburguesas' => 'modulos/menu/vista/itemsView.php',
                'historia' => 'modulos/historia/vista/historia.php',
                'eventos' => 'modulos/eventos/vista/eventos.php',
                'solicitud-nuevo-evento' => 'modulos/eventos/vista/nuevo-evento.php',
                'evento-solicitado' => 'modulos/eventos/vista/evento-solicitado.php',
                'contacto' => 'modulos/contacto/vista/contacto.php',
                'terminos-y-condiciones-concurso-deja-volar-tu-imaginacion' => 'modulos/eventos/vista/concurso.php',
                'reservas' => 'modulos/reservas/vista/default.php',
                'restaurante-para-celebracion' => 'modulos/eventos/vista/celebracion.php',
                'registro-liga' => 'modulos/liga/vista/registro.php',
                'completar-liga' => 'modulos/liga/vista/completar.php',
                'liga-superheroes' => 'modulos/liga/vista/registro.php',
                'registro-finalizado' => 'modulos/liga/vista/registro-finalizado.php',
                'preguntas-frecuentes' => 'modulos/preguntas/vista/preguntas.php'
            );
            $vista = $seccion[$modulo];
            if(!empty($vista)){
                return $vista;
            }else{
                return 'modulos/error/vista/404.php';
            }

        }else{
            $vista = 'modulos/inicio/vista/inicio.php';
            return $vista;
        }
    }
}
$contenido = new contenido();
?>
