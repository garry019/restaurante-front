<?php
class login
{
      
    public function __construct()
    {
        
    }
    
    public function vista()
    {	

	if(!isset($_GET['vista'])){
            $vista = 'modulos/login/form/loginForm.php';
        }else{
            if($_GET['vista'] == 'logout'){
                $vista = 'modulos/login/vista/logout.php';    
            }
        }
        return $vista;
    }
    
    public function validar()
    {
        $query = 'SELECT * FROM usuarios WHERE usuario_alias = "'.$_POST['usuario'].'" AND usuario_password = "'.$_POST['password'].'"';
        $conex = site::mysqlConex();
        $call = $conex->query($query);
        $result = $call->num_rows;
        while($reg = mysqli_fetch_array($call)){
            $userInfo[] = $reg;
        };
        if($result == 1){
            $_SESSION['5g_usuario_id'] = $userInfo[0][0];
            $_SESSION['5g_usuario_alias'] = $userInfo[0][9];
            $_SESSION['5g_usuario_email'] = $userInfo[0][6];
            $_SESSION['5g_usuario_rol'] = $userInfo[0][1];
            $_SESSION['5g_usuario_sede'] = $userInfo[0][2];
            echo site::redireccionar('');
        }
        if($result == 0){
            echo $site->redireccionar('login');
        }
    }
    
    public function logout()
    {
        global $site;
        unset($_SESSION['5g_usuario_id']);
        unset($_SESSION['5g_usuario_alias']);
        unset($_SESSION['5g_usuario_email']);
        unset($_SESSION['5g_usuario_rol']);
        unset($_SESSION['5g_usuario_sede']);
        session_destroy();
        echo $site->redireccionar('');
    }
    
    public function validarUsuarioInv(){
        $sql = 'SELECT * FROM inventario_user WHERE usuario = "'.$_POST['usuario'].'" AND password = "'.$_POST['password'].'"';
        $call = mysql_query($sql,site::mysqlConex());
        $result = mysql_num_rows($call);
        while($reg = mysql_fetch_array($call)){
            $userInfo[] = $reg;
        }
        if($result == 1){
            $_SESSION['invUserId'] = $userInfo[0][0];
            $_SESSION['invUserName'] = $userInfo[0][1];
        }
    }
    public function logOutInv()
    {
        unset($_SESSION['invUserId']);
        unset($_SESSION['invUserName']);
        session_destroy();
    }
    
}
$login = new login();
?>