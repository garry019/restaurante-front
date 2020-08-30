<?php
class contacto
{
    
    public function __construct()
    {
        
    }
    
    public function enviarEmailContacto(){
        $mes = array(
            'January'   =>  'Enero',
            'February'  =>  'Febrero',
            'March'     =>  'Marzo',
            'April'     =>  'Abril',
            'May'       =>  'Mayo',
            'June'      =>  'Junio',
            'July'      =>  'Julio',
            'August'    =>  'Agosto',
            'September' =>  'Septiembre',
            'October'   =>  'Octubre',
            'November'  =>  'Noviembre',
            'December'  =>  'Diciembre'
        );
        $m = date('F');
        $mesActual = $mes[$m];
        
        $para      = 'webmaster@grupo5g.com';
        $titulo    = 'Nuevo Formulario - '.$mesActual.' '.date('Y');
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $cabeceras .= 'From: Retiro de San Juan <website@grupo5g.com>' . "\r\n";
        $mensaje = '<html>
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
                        <title>Nuevo Contacto</title>
                    </head>
                    <body>
                        <table align="center" bgcolor="#ebebeb" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                        			<td>
                            			<table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                            				<tbody>
                            					<tr>
                            						<td align="left" height="20" valign="top"><img alt="" src="http://grupo5g.ip-zone.com/ccm/templates/basic-1/images/top-shadow-basica.png" style="display: block; width: 600px; height: 20px;" /></td>
                            					</tr>
                                                <tr style="background:#958266;">
                                                    <td><h1 style="color:#fff; text-align:center; text-transform:uppercase;">'.$_POST['motivo'].'</h1></td>
                                                </tr>
    				   	                        <tr>
                                                    <td style="height: 150px; background:#fff; padding:15px 15px 15px 15px;">
                                                        <p><b>Nombre:</b> '.$_POST['nombre'].'</p>
                                                        <p><b>email:</b> '.$_POST['email'].'</p>
                                                        <p><b>Teléfono:</b> '.$_POST['telefono'].'</p>
                                                        <p><b>Fecha del evento:</b> '.$_POST['fecha'].'</p>
                                                        <p><b>Invitados:</b> '.$_POST['invitados'].'</p>
                                                        <h3 style="text-align:justify;"><i>'.$_POST['mensaje'].'</i></h3>
                                                    </td>
                            					</tr>
                            				</tbody>
                            			</table>
                        			</td>
                        		</tr>
                                <tr>
                        			<td>
                        			<table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                        				<tbody>
                        					<tr>
                        						<td align="left" height="15" valign="top"><img alt="" src="http://grupo5g.ip-zone.com/ccm/templates/basic-1/images/shadow-basica.png" style="display: block; width: 600px; height: 15px;" /></td>
                        					</tr>
                        				</tbody>
                        			</table>
                        			</td>
                        		</tr>
                            </tbody>
                        </table>
                    </body>
                    </html>
                    ';       
        mail($para, $titulo, $mensaje, $cabeceras);
    }
    
    public function guardarEmailContacto(){
        $sql = 'INSERT INTO clientes(email,nombre,telefono,motivo_cotizacion,mensaje_cotizacion,invitados,fecha_evento,ip)
                VALUES("'.$_POST['email'].'","'.$_POST['nombre'].'","'.$_POST['telefono'].'","'.$_POST['motivo'].'","'.$_POST['mensaje'].'","'.$_POST['invitados'].'","'.$_POST['fecha'].'","'.$_SERVER['REMOTE_ADDR'].'")';
        $call = mysql_query($sql,site::mysqlConex());
    }
}
$contacto = new contacto();
?>