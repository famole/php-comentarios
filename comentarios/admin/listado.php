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
<div class="MENU">
<?php
require "check.php";
require "menu.php";
?>
</div>
<div class="MENUCOMENTARIOS">
<?php
@$msg=$_GET['msg'];
if(isset($msg) and strlen($msg) >1 ){
echo "<span style='color: #FF0000;'>$msg</span>";
}

$q=mysql_query("select * from comentarios order by fecha ");

echo "<table width='100%' border='0' cellspacing='1' cellpadding='10'>";
while($nt=mysql_fetch_array($q)){
echo "<tr bgcolor='#F0F0F0'><td><b>id</b>:&nbsp;&nbsp;$nt[post_id] <br><b>Nombre</b>:&nbsp;&nbsp;$nt[name]<br> <b>E-mail</b>:&nbsp;&nbsp;$nt[email] <br><b>Estado</b>:&nbsp;&nbsp;$nt[estado] <br><a href='lista_detalles.php?post_id=$nt[post_id]&f_name=listado.php'>Ver detalles</a></td><td align=right>".date("d-m-Y",strtotime($nt['fecha']))."</td></tr>";
echo "<tr ><td colspan=2>$nt[comentarios]</td></tr>";

}
echo "</table>";
echo "&nbsp;";
echo "&nbsp;";
echo "<hr>";
?>
</div>
</div>
</body>
</html>
