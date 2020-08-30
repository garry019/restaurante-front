<?php
class usuarios
{
    
    public function __construct()
    {
        
    }
    
    public function vista(){
        if($_GET['vista']){
            if($_GET['vista'] == 'nuevo'){
                $vista = 'modulos/usuarios/vista/nuevo.php';    
            }
            if($_GET['vista'] == 'consultar'){
                $vista = 'modulos/usuarios/vista/consultar.php';    
            }
            if($_GET['vista'] == 'editar'){
                $vista = 'modulos/usuarios/vista/editar.php';    
            }     
        }else{
            $vista = 'modulos/usuarios/vista/usuarios.php';
        }
        return $vista;
    }
    
    public function getUsuarios(){
        $sql = 'SELECT * FROM usuarios ORDER BY usuario_nombre ASC';
        $call = mysql_query($sql,site::mysqlConex());
        while($reg = mysql_fetch_array($call)){
            $result[] = $reg;    
        }
        return $result;
    }
    
    public function getSedes(){
        $sql = 'SELECT * FROM sedes';
        $call = mysql_query($sql,site::mysqlConex());
        while($reg = mysql_fetch_array($call)){
            $result[] = $reg;    
        }
        return $result;    
    }
    
    public function getRoles(){
        $sql = 'SELECT * FROM usuarios_rol';
        $call = mysql_query($sql,site::mysqlConex());
        while($reg = mysql_fetch_array($call)){
            $result[] = $reg;    
        }
        return $result;    
    }
    
    public function guardarUsuario(){
        $sql = 'INSERT INTO usuarios(
                    rol_id,sede_id,
                    usuario_nombre,
                    usuario_apellido,
                    usuario_email,
                    usuario_telefono,
                    usuario_celular,
                    usuario_alias,
                    usuario_password,
                    usuario_creado_por,
                    usuario_fecha_registro
                    )
                VALUES(
                    "'.$_POST['rol'].'",
                    "'.$_POST['sede'].'",
                    "'.$_POST['nombre'].'",
                    "'.$_POST['apellido'].'",
                    "'.$_POST['email'].'",
                    "'.$_POST['telefono'].'",
                    "'.$_POST['celular'].'",
                    "'.$_POST['alias'].'",
                    "'.$_POST['usuario_password'].'",
                    "'.$_SESSION['5g_usuario_id'].'",
                    "'.site::fechaActual().'"
                    )';
        $call = mysql_query($sql,site::mysqlConex()); 
    }
    
    public function getUsuarioInfo(){
        $sql = 'SELECT * FROM usuarios WHERE usuario_id = "'.$_GET['parametro'].'"';
        $call = mysql_query($sql,site::mysqlConex());
        $reg = mysql_fetch_array($call);
        $info = array(
            'id' => $reg[0],
            'rol' => $reg[1],
            'sede' => $reg[2],
            'nombre' => $reg[4],
            'apellido' => $reg[5],
            'email' => $reg[6],
            'telefono' => $reg[7],
            'celular' => $reg[8],
            'alias' => $reg[9],
            'creador' => $reg[11],
            'registro' => $reg[12],
            'actualizador' => $reg[13],
            'actualizado' => $reg[14],
        );
        return $info;   
    }
    
    public function editarUsuario(){
        $sql = 'UPDATE usuarios
                SET usuario_nombre = "'.$_POST['nombre'].'",
                    usuario_apellido = "'.$_POST['apellido'].'",
                    usuario_email = "'.$_POST['email'].'",
                    usuario_telefono = "'.$_POST['telefono'].'",
                    usuario_celular = "'.$_POST['celular'].'",
                    sede_id = "'.$_POST['sede'].'",
                    rol_id = "'.$_POST['rol'].'",
                    usuario_alias = "'.$_POST['alias'].'",
                    usuario_actualizado_por = "'.$_SESSION['5g_usuario_id'].'",
                    usuario_fecha_actualizado = "'.site::fechaActual().'"                     
                ';
        if($_POST['pass']){
            $sql .= ', usuario_password = "'.$_POST['pass'].'"';
        }
        $where = ' WHERE usuario_id = "'.$_GET['parametro'].'"';
        $call = mysql_query($sql.$where,site::mysqlConex());   
    }
    
}
$usuarios = new usuarios();
?>