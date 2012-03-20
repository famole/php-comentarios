<?php
include "session.php";
session_unset();
session_destroy();
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
<div class="SALIR">
<?php
echo "<p class='data'>Ha salido de su sesi&oacute;n. <br><br> <a href=login.php>Volver a entrar</a>";
?>
</div>
</div>
</body>
</html>
