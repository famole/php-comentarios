<?php
if(!(isset($_SESSION['userid']) and strlen($_SESSION['userid']) > 2)){
echo "Para poder acceder, clicar <a href=login.php>Aqu&iacute;</a> ";
exit;
}
?>