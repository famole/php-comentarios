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
$post_id=$_GET['post_id'];
$f_name=$_GET['f_name'];
$q=mysql_query("select * from comentarios where post_id=$post_id ");
echo mysql_error();
$row=mysql_fetch_object($q);

echo "<table width='100%' border='0' cellspacing='1' cellpadding='0'>";
echo "<tr bgcolor='#f0f0f0'><td><b>Id</b>:&nbsp;&nbsp;$row->post_id <br><b>Nombre</b>:&nbsp;&nbsp;$row->name <br><b>E-mail</b>:&nbsp;&nbsp;$row->email <br><b>Estado</b>:&nbsp;&nbsp;$row->estado</td>
<td align=right>".date("d-m-Y",strtotime($row->fecha))."</td></tr>
<tr ><td>&nbsp;</td></tr>
<tr ><td>&nbsp;</td></tr>
";
echo "<tr ><td colspan=2>$row->comentarios</td></tr>";
echo "</table>";
echo "&nbsp;";
echo "&nbsp;";
echo "<hr>";

switch($row->estado)
{
case "SR":
$nsck="checked";
$apvck="";

break;

case "OK":
$apvck="checked";
$nsck="";

break;


default:
$apvck="";
$nsck="";
break;

}

echo "&nbsp;";
echo "&nbsp;";
echo "<form method=post action='lista_borrar.php'><input type=hidden name='todo' value='estado-up'><input type=hidden name=f_name value='$f_name'>
<input type=hidden name=post_id value=$post_id>
<input type=radio name=estado value='SR' $nsck>Sin revisar&nbsp;&nbsp;<input type=radio name=estado value='OK' $apvck>Aprovado&nbsp;&nbsp;
<input type=radio name=estado value='del' >Eliminar&nbsp;&nbsp;&nbsp;

<input type=submit class='BOTONcomentarioenviar' value='   Actualizar datos   '> 


</form>
";
?>
</div>
</div>
</body>
</html>
