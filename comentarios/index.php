<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="estilocomentarios.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
$publicado="Publicado";
require "/comentarios/comentarios/config.php";
?>
<div class="TODO">
<!--******************************************* -->
<!--******************************************* -->
<div class="COMENTARIOS">
<?php
$q=mysql_query("select name, comentarios,fecha from comentarios where publicado='$publicado' and estado='OK' order by fecha ");

echo "<table width='580' border='0' cellspacing='0' cellpadding='5'>";
while($nt=mysql_fetch_array($q)){ $comentarios=nl2br($nt['comentarios']);
echo "<tr bgcolor='#f0f0f0'><td><strong>$nt[name]</strong></td><td align=right>".date("d-m-Y",strtotime($nt['fecha']))."</td></tr>";
echo "<tr ><td colspan=2>$comentarios</td></tr>";
echo "<tr ><td colspan=2>&nbsp;</td></tr>";
}
echo "</table>";
?>
</div>
<!--******************************************* -->
<!--******************************************* -->
<div class="RESULTADO">
<?php
@$todo=$_POST['todo'];
if(isset($todo) and $todo=="post_comment"){

$name=$_POST['name'];
$name=mysql_real_escape_string($name);
$email=$_POST['email'];
$email=mysql_real_escape_string($email);
$comentarios=$_POST['comentarios'];
$comentarios=mysql_real_escape_string($comentarios);

$estado = "OK";
$msg="";

if( strlen($name) <3 or strlen($name) > 25){
$msg=$msg."Su nombre debe tener m&aacute;s de 3 letras y menos de 25. <BR>";
$estado= "NOTOK";}					

if( strlen($comentarios) <3 ){
$msg=$msg."Su comentario debe tener m&aacute;s de 3 letras por lo menos.<BR>";
$estado= "NOTOK";}	
//****************************
if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$email)){
$msg=$msg."Su email, no es correcto.<BR>";
$estado= "NOTOK";}			
//****************************


if($estado<>"OK"){ 
echo "$msg";
}else{
$fecha=date("Y-m-d"); 
$estado='SR'; // Cambiar por OK si desea que todos los mensajes se aprueben autom�ticamente una vez publicados.
$query=mysql_query("insert into comentarios(publicado,fecha,name,email,comentarios,estado) values('$publicado','$fecha','$name','$email','$comentarios','$estado')");
echo mysql_error();
echo "Gracias por su comentario. Falta solo autorizarlo por el administrador<br>";
}
}

?>
</div>
<!--******************************************* -->
<!--******************************************* -->
<div class="TITULO">COMENTARIOS
</div>
<!--******************************************* -->
<!--******************************************* -->
<div class="CASILLAS">
<?php
echo "<form method=post action=''><input type=hidden name=todo value=post_comment><span class='EstiloROJO'>* </span>
Nombre:&nbsp;&nbsp;<br /><input name=name type=text class='fondocasillausuario' size='42'>
<br />
<span class='EstiloROJO'>* </span>E-mail 
(No saldr&aacute; publicado):&nbsp;&nbsp;<br /><input name=email type=text class='fondocasillausuario' size='42'>
<br />
<span class='EstiloROJO'>* </span>Comentarios:&nbsp;&nbsp;<br />
<textarea name=comentarios cols=40 rows=3 class='fondocasillausuario'></textarea><br /><br />
<input type='reset' class='BOTONcomentarioborrar' value='    Borrar    '>
&nbsp;&nbsp;<input type=submit class='BOTONcomentarioenviar' value='   Publicar   '>
</form>";
?>
</div>
<!--******************************************* -->
<!--******************************************* -->
</div>
</body>
</html>
