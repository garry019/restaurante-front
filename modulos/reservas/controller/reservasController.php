<?php
class reservas
{

    public function __construct()
    {

    }

    public function vista(){
        if(!isset($_GET['vista'])){
            $vista = 'modulos/reservas/vista/inicio.php';
        }else{
            if($_GET['vista'] == 'nueva-reserva'){
                $vista = 'modulos/reservas/vista/nueva-reserva.php';
            }else{
                if($_GET['vista'] == 'consultar-reserva'){
                  $vista = 'modulos/reservas/vista/consultar-reserva.php';
                }else{
                  if($_GET['vista'] == 'cancelar'){
                    $vista = 'modulos/reservas/vista/cancelar_reserva.php';
                  }else{
                    if($_GET['vista'] == 'reserva-cancelada'){
                      $vista = 'modulos/reservas/vista/reserva_cancelada.php';
                    }else{
                      $vista = 'modulos/error/vista/404.php';
                    }
                  }

                }
            }
        }
        return $vista;
    }
}
$reservas = new reservas();
?>
