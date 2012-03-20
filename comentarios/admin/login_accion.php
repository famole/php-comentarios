<?php
include "session.php";
require "../config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="../estilocomentarios.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="TODO">
<!--******************************************* -->
<!--******************************************* -->
<?php
$id=$_POST['id'];
$id=mysql_real_escape_string($id);
$pw=$_POST['pw'];
$pw=mysql_real_escape_string($pw);

if($rec=mysql_fetch_array(mysql_query("SELECT * FROM administracion WHERE userid='$id' AND password = '$pw'"))){
	if(($rec['userid']==$id)&&($rec['password']==$pw)){
	 include "newsession.php";
            echo "<p class=data> <center>Acceso correcto<br><br><a href='logout.php'>Salir</a><br><br>
<a href=add.php>Haga clic aqu&iacute; si tu navegador no est&aacute; redirigiendo autom&aacute;ticamente o no quieren esperar.</a><br>
</center>";
     print "<script>";
       print " self.location='listado.php';";
          print "</script>";

				} 
		}	
	else {

		session_unset();
echo "<br>";
echo "<br>";
echo "<center>
<font face='Verdana' size='2' color=red>ERROR de acceso. Inserte correctamente sus datos <br><br>
<input type='button' class='BOTONcomentarioborrar' onClick='history.go(-1)' value='   Volver   '>
</center>";
		
	}
?>
</div>
</body>
</html>
