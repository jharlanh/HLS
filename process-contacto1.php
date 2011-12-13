<?
$nombre = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];
$direccion = $_REQUEST['direccion'];
$telefono = $_REQUEST['telefono'];
$email = $_REQUEST['email'];
$comentarios = $_REQUEST['comentarios'];
$final_msg = "Nombre: ".$nombre."\n". 
"Apellidos: ".$apellidos."\n".
"Direccion: ".$direccion."\n".
"Telefono: ".$telefono."\n".
"Email: ".$email."\n".
"Comentarios: ".$comentarios."\n";

$codigo = $_REQUEST['codigo'];
if ($codigo == "MZR47W") {


mail("traducciones@horbachlanguage.com", "Forma de contacto Clientela - Horbach Language", $final_msg);
mail("translations@horbachlanguage.com", "Forma de contacto Clientela- Horbach Language", $final_msg);
mail("jhhorbach@gmail.com", "Forma de contacto Clientela - Horbach Language", $final_msg);
mail("mmerino@paxzu.com", "Forma de contacto Clientela - Horbach Language", $final_msg);
mail("horbach.hls@gmail.com", "Forma de contacto Clientela - Horbach Language", $final_msg);
mail("correospaxzu@gmail.com", "Forma de contacto Clientela - Horbach Language", $final_msg);
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/gracias.html");


}else{
echo "<script language='Javascript'> alert('El código es incorrecto. Intente de nuevo');  history.back(); </script>";
}

?>
