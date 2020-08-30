<?php

class menu

{

    public function __construct()
    {

    }

    public function test(){
        echo 'Test OK';
    }

    public function getCategoriaID(){
        $categoriaUrl = $_GET['seccion'];
        $sql = 'SELECT * FROM categoria_carta WHERE url = "'.$categoriaUrl.'"';
        $call = mysql_query($sql,site::mysqlConex());
        $result = mysql_fetch_array($call);
        return $result[0];
    }

    public function getItems($c){
        $sql = 'SELECT * FROM carta WHERE estado = 1 AND categoria = "'.$c.'" ORDER BY registro DESC ';
        $call = mysql_query($sql,site::mysqlConex());
        while($reg = mysql_fetch_array($call)){
            $result[] = $reg;
        }
        return $result;
    }

    public function cartaCategorias(){
        $sql = 'SELECT * FROM categoria_carta';
        $call = mysql_query($sql,site::mysqlConex());
        while($reg = mysql_fetch_array($call)){
            $result[] = $reg;
        }
        return $result;
    }

    public function getPostres(){
        $sql = 'SELECT * FROM carta WHERE categoria = 13';
        $call = mysql_query($sql,site::mysqlConex());
        while($reg = mysql_fetch_array($call)){
            $result[] = $reg;
        }
        return $result;
    }

    public function getInfantil(){
        $sql = 'SELECT * FROM carta WHERE categoria = 1';
        $call = mysql_query($sql,site::mysqlConex());
        while($reg = mysql_fetch_array($call)){
            $result[] = $reg;
        }
        return $result;
    }

    public function getEntradas(){
        $sql = 'SELECT * FROM carta WHERE categoria = 2';
        $call = mysql_query($sql,site::mysqlConex());
        while($reg = mysql_fetch_array($call)){
            $result[] = $reg;
        }
        return $result;
    }

    public function getSopas(){
        $sql = 'SELECT * FROM carta WHERE categoria = 3';
        $call = mysql_query($sql,site::mysqlConex());
        while($reg = mysql_fetch_array($call)){
            $result[] = $reg;
        }
        return $result;
    }

    public function verifyNewItems($d){
        $item = new DateTime($d);
        $hoy = new DateTime();
        $dif = $item->diff($hoy);
        $dias = $dif->format('%d');
        $meses = $dif->format('%m');
        $anos = $dif->format('%Y');
        if($dias < 30 AND $meses < 1 AND $anos < 1){
            return true;
        }
    }



    public function menuTitulo(){

        $seccion = $_GET['seccion'];
        $titulo = array(
            'postres' => '',
            'menu-infantil' => '',
            'entradas'  =>  '',
            'sopas' =>  'Siéntete como en casa, tomando las sopas de la abuelita de Piolín.',
            'ensaladas' =>  'Nuestras ensaladas son sacadas del mejor huerto, para ofrecer calidad y frescura.',
            'carnes'    =>  'Todas Nuestras carnes son cuidadosamente maduradas por Gusteau y su equipo.',
            'pollo'     =>  'Ginger como  líder selecciona y saca lo mejor de los pollitos.',
            'cerdo'     =>  'Cuando un antojo nos persigue la idea es una porción de cerdo generosa, tierna y jugosa.',
            'pescado'   =>  'Con el patrocinio de Buscando a Nemo ofrecemos ricos y frescos pescados.',
            'cervezas'  =>  'Tipo irlandes - hecha por nuestros propios muñecos.<br/>330 ML 9.500 Jarra 1L 23.800',
            'bebidas-frias' =>  'Refresca tu día',
            'bebidas-calientes' =>  'Para darte un poquito de calor',
            'para-acompanar' =>  'Para que te sientas acompa&ntilde;ado',
            'hamburguesas' =>  'Recomendados del Chef<br><small>También puedes armar tu propia hamburguesa</small>'
        );
        return $titulo[$seccion];
    }

    public function showCharacters($c){
        $seccion = $_GET['seccion'];
        switch($seccion){
            case 'postres':
                $character = array(
                    '4' => 'avion-2018.png'
                );
                $htmlView = '<div class="col-lg-4 itemView hidden-md hidden-sm">';
                $htmlView .= '<img class="img-responsive center-block itemCaracter" src="images/menu/postres/';
                $htmlView .= $character[$c];
                $htmlView .= '">';
                $htmlView .= '</div>';
                if($c == 4){
                    echo $htmlView;
                }
            break;
            case 'entradas':
                $character = array(
                    '1' => 'tom-y-jerry.jpg',
                    '5' => 'slinky.jpg',
                    '6' => 'tin-tin.jpg',
                    '10' => 'carousel.jpg',
                    '14' => 'carousel.jpg',
                    '15' => 'trensito-clasico.jpg'
                );
                $htmlView = '<div class="col-lg-4 itemView hidden-md hidden-sm">';
                $htmlView .= '<img class="img-responsive center-block itemCaracter" src="images/menu/caracters/';
                $htmlView .= $character[$c];
                $htmlView .= '">';
                $htmlView .= '</div>';
                if($c == 1 or $c == 5 or $c == 6 or $c == 15 or $c == 10){
                    echo $htmlView;
                }
            break;
            case 'sopas':
                $character = array(
                    '1' => 'mirringa-mirronga.jpg',
                    '2' => 'rodillo.jpg',
                    '3' => 'hansel-y-gretel.jpg',
                    '4' => 'tren.jpg'
                );
                $htmlView = '<div class="col-lg-4 itemView hidden-md hidden-sm">';
                $htmlView .= '<img class="img-responsive center-block itemCaracter" src="images/menu/caracters/';
                $htmlView .= $character[$c];
                $htmlView .= '">';
                $htmlView .= '</div>';
                if($c == 1 or $c == 2 or $c == 3 or $c == 4){
                    echo $htmlView;
                }
            break;
            case 'ensaladas':
                $character = array(
                    '1' => 'conejito-2018.jpg',
                    '6' => 'correcaminos.jpg'
                );
                $htmlView = '<div class="col-lg-4 itemView hidden-md hidden-sm">';
                $htmlView .= '<img class="img-responsive center-block itemCaracter" src="images/menu/caracters/';
                $htmlView .= $character[$c];
                $htmlView .= '">';
                $htmlView .= '</div>';
                if($c == 1 or $c == 6){
                    echo $htmlView;
                }
            break;
            case 'carnes':
                $character = array(
                    '1' => 'bobo-2018.jpg',
                    '6' => 'robot.png',
                    '11' => 'pecos-bill.jpg'
                );
                $htmlView = '<div class="col-lg-4 itemView hidden-md hidden-sm">';
                $htmlView .= '<img class="img-responsive center-block itemCaracter" src="images/menu/caracters/';
                $htmlView .= $character[$c];
                $htmlView .= '">';
                $htmlView .= '</div>';
                if($c == 1 or $c == 6 or $c == 11){
                    echo $htmlView;
                }
            break;
            case 'pollo':
                $character = array(
                    '1' => 'gallo-2018.png',
                    '2' => 'popeye.jpg',
                    '3' => 'cazuela-2018.png',
                    '4' => 'carro-clasico.jpg'
                );
                $htmlView = '<div class="col-lg-4 itemView hidden-md hidden-sm">';
                $htmlView .= '<img class="img-responsive center-block itemCaracter" src="images/menu/caracters/';
                $htmlView .= $character[$c];
                $htmlView .= '">';
                $htmlView .= '</div>';
                if($c == 1 or $c == 2 or $c == 3 or $c == 4){
                    echo $htmlView;
                }
            break;

            case 'cerdo':
                $character = array(
                    '1' => 'acrobata-2018.png',
                    '2' => 'raggedy-ann.jpg',
                    '3' => 'porky.jpg'
                );
                $htmlView = '<div class="col-lg-4 itemView hidden-md hidden-sm">';
                $htmlView .= '<img class="img-responsive center-block itemCaracter" src="images/menu/caracters/';
                $htmlView .= $character[$c];
                $htmlView .= '">';
                $htmlView .= '</div>';
                if($c == 1 or $c == 3){
                    echo $htmlView;
                }
            break;
            case 'pescado':
                $character = array(
                    '1' => 'buceador-2018.png',
                    '2' => 'capitan-tintin.jpg',
                    '3' => 'morgan.jpg',
                    '4' => 'garfio.jpg'
                );
                $htmlView = '<div class="col-lg-4 itemView hidden-md hidden-sm">';
                $htmlView .= '<img class="img-responsive center-block itemCaracter" src="images/menu/caracters/';
                $htmlView .= $character[$c];
                $htmlView .= '">';
                $htmlView .= '</div>';
                if($c == 1 or $c == 2 or $c == 3 or $c == 4){
                    echo $htmlView;
                }
            break;
            case 'cervezas':
                $character = array(
                    '1' => 'superman-2018.png',
                    '2' => 'coyote-2018.png',
                    '3' => 'batman.jpg',
                    '4' => 'pantera-rosa-2018.png'
                );
                $htmlView = '<div class="col-lg-4 itemView hidden-md hidden-sm">';
                $htmlView .= '<img class="img-responsive center-block itemCaracter" src="images/menu/caracters/';
                $htmlView .= $character[$c];
                $htmlView .= '">';
                $htmlView .= '</div>';
                if($c == 1 or $c == 2 or $c == 3 or $c == 4){
                    echo $htmlView;
                }
            break;
            case 'bebidas-frias':

                $character = array(
                    '1' => 'robot-aire.jpg',
                    '5' => 'felix-el-gato.jpg',
                    '6' => 'xufa.jpg'
                );

                $htmlView = '<div class="col-lg-4 itemView hidden-md hidden-sm">';
                $htmlView .= '<img class="img-responsive center-block itemCaracter" src="images/menu/caracters/';
                $htmlView .= $character[$c];
                $htmlView .= '">';
                $htmlView .= '</div>';
                if($c == 1 or $c == 5 or $c == 6){
                    echo $htmlView;
                }
            break;
            case 'bebidas-calientes':
                $character = array(
                    '1' => 'robotina.jpg',
                    '5' => 'pirinola.jpg',
                    '6' => 'mickey.jpg'
                );
                $htmlView = '<div class="col-lg-4 itemView hidden-md hidden-sm">';
                $htmlView .= '<img class="img-responsive center-block itemCaracter" src="images/menu/caracters/';
                $htmlView .= $character[$c];
                $htmlView .= '">';
                $htmlView .= '</div>';
                if($c == 1 or $c == 5 or $c == 6){
                    echo $htmlView;
                }
            break;

            case 'para-acompanar':
                $character = array(
                    '1' => 'jorge-el-curioso.jpg',
                    '5' => 'ratones-2018.png',
                    '6' => 'trio-osos-2018.png',
                    '7' => 'slinky.jpg'
                );
                $htmlView = '<div class="col-lg-4 itemView hidden-md hidden-sm">';
                $htmlView .= '<img class="img-responsive center-block itemCaracter" src="images/menu/caracters/';
                $htmlView .= $character[$c];
                $htmlView .= '">';
                $htmlView .= '</div>';
                if($c == 1 or $c == 5 or $c == 6 or $c == 7){
                    echo $htmlView;
                }
            break;

            case 'hamburguesas':
                $character = array(
                    '1' => 'pumba.png',
                    '2' => 'maui.png',
                    '3' => 'melman.png',
                    '4' => 'dante.png'
                );
                $htmlView = '<div class="col-lg-4 itemView hidden-md hidden-sm">';
                $htmlView .= '<img class="img-responsive center-block itemCaracter" src="images/menu/caracters/';
                $htmlView .= $character[$c];
                $htmlView .= '">';
                $htmlView .= '</div>';
                if($c == 1 or $c == 2 or $c == 3 or $c == 4){
                    echo $htmlView;
                }
            break;
        }
    }

    public function leftBg(){
        if($_GET['seccion'] == 'postres'){
            echo 'itemsLeftBg';
        }
        if($_GET['seccion'] == 'menu-infantil'){
            echo 'itemsLeftBgMenuInfantil';
        }
        if($_GET['seccion'] == 'entradas'){
            echo 'itemsLeftBgEntradas';
        }
        if($_GET['seccion'] == 'sopas'){
            echo 'itemsLeftBgSopas';
        }
        if($_GET['seccion'] == 'ensaladas'){
            echo 'itemsLeftBgEnsaladas';
        }
        if($_GET['seccion'] == 'carnes'){
            echo 'itemsLeftBgCarnes';
        }
        if($_GET['seccion'] == 'pollo'){
            echo 'itemsLeftBgPollo';
        }
        if($_GET['seccion'] == 'cerdo'){
            echo 'itemsLeftBgCerdo';
        }
        if($_GET['seccion'] == 'pescado'){
            echo 'itemsLeftBgPescado';
        }
        if($_GET['seccion'] == 'cervezas'){
            echo 'itemsLeftBgCervezas';
        }
        if($_GET['seccion'] == 'bebidas-frias'){
            echo 'itemsLeftBgBebidasFrias';
        }
        if($_GET['seccion'] == 'bebidas-calientes'){
            echo 'itemsLeftBgBebidasCalientes';
        }
        if($_GET['seccion'] == 'para-acompanar'){
            echo 'itemsLeftBgAcomp';
        }
        if($_GET['seccion'] == 'hamburguesas'){
            echo 'itemsLeftBgHamburguesas';
        }
    }

    public function rightBg(){
        if($_GET['seccion'] == 'postres'){
            echo 'itemsRightBg';
        }
        if($_GET['seccion'] == 'menu-infantil'){
            echo 'itemsRightBgMenuInfantil';
        }
        if($_GET['seccion'] == 'entradas'){
            echo 'itemsRightBgEntradas';
        }
        if($_GET['seccion'] == 'sopas'){
            echo 'itemsRightBgSopas';
        }
        if($_GET['seccion'] == 'ensaladas'){
            echo 'itemsRightBgEnsaladas';
        }
        if($_GET['seccion'] == 'carnes'){
            echo 'itemsRightBgCarnes';
        }
        if($_GET['seccion'] == 'pollo'){
            echo 'itemsRightBgPollo';
        }
        if($_GET['seccion'] == 'cerdo'){
            echo 'itemsRightBgCerdo';
        }
        if($_GET['seccion'] == 'pescado'){
            echo 'itemsRightBgPescado';
        }
        if($_GET['seccion'] == 'cervezas'){
            echo 'itemsRightBgCervezas';
        }
        if($_GET['seccion'] == 'bebidas-frias'){
            echo 'itemsRightBgBebidasFrias';
        }
        if($_GET['seccion'] == 'bebidas-calientes'){
            echo 'itemsRightBgBebidasCalientes';
        }
        if($_GET['seccion'] == 'para-acompanar'){
            echo 'itemsRightBgAcomp';
        }
        if($_GET['seccion'] == 'hamburguesas'){
            echo 'itemsRightBgHamburguesas';
        }
    }

}

$menu = new menu();

?>
