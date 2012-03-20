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

<body onLoad="document.f1.id.focus()">
<br /><br /><br />
<div class="TODO">
<!--******************************************* -->
<!--******************************************* -->
<div class="TITULO">ADMINISTRACI&Oacute;N</div>
<!--******************************************* -->
<!--******************************************* -->
<div class="CASILLAS">
<?php
$hd="Solo administrador..";
$body="
<form name='f1' action='login_accion.php' method=post>
<table border='0' cellspacing='0' cellpadding='0' align=center>
<tr id='cat'>
  <td width='145'>&nbsp;</td>
  <td width='168'>&nbsp;</td>
<tr> <td  class='data'>Administrador:&nbsp;
</td> <td ><input type ='text' class='fondocasillausuario' size='42' name='id' ></font></td></tr>
<tr> <td  class='data'>Password:&nbsp;
</td> <td  ><input type ='password' class='fondocasillausuario' size='42' name='pw' ></td></tr>
<tr> <td height='27'  colspan='2' valign='top' >&nbsp;</td> 
  </tr>
<tr>
  <td height='27'  colspan='2' align=center valign='top' ><input type='reset' class='BOTONcomentarioborrar' value='   Borrar   '>&nbsp;&nbsp;<input type='submit' class='BOTONcomentarioenviar' value='   Entrar   '> 
    </td> 
</tr>
<tr>
  <td height='8' ></td>
  <td ></td>
</tr>
</table>
</center></form>";
echo $body; 
?>
</div>
</div>
</body>
</html>
