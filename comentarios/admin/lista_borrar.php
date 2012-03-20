<?php
include "session.php";
require "../config.php";

require "check.php";

@$todo=$_POST['todo'];
if($todo=="estado-up"){
$f_name=$_POST['f_name'];
$post_id=$_POST['post_id'];
$estado=$_POST['estado'];
if($estado=="del"){
$q=mysql_query("delete from comentarios where post_id=$post_id");
if(mysql_affected_rows() <> 1){
header ("Location: $f_name?msg=No se puede borrar el comentario."); 
}else{header ("Location: $f_name?msg=Comentario borrado."); }

}else{
$q=mysql_query("update  comentarios set estado='$estado' where post_id=$post_id ");
echo mysql_error();
if(mysql_affected_rows() <> 1){
header ("Location: $f_name?msg=No se puede actualizar el comentario."); 
}else{header ("Location: $f_name?msg=Comentario actualizado."); }


}
}
else{
header ("Location: $f_name?msg=Problema de fecha."); 
}

?>
</body>
</html>
