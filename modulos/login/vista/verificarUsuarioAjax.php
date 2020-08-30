<?php
$con = mysql_connect('localhost','root','')or die ('No se puede conectar a la base de datos, consulte al administrador del sitio');
mysql_select_db('crmretiro');
?>
<?php
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$sql = 'SELECT * FROM usuarios WHERE alias = "'.$usuario.'" AND password = "'.$pass.'"';
$call = mysql_query($sql,$con);
$reg = mysql_num_rows($call);

if($reg == 1){
    echo 1;
}else{
    echo 0;    
}
?>