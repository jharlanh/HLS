<?
$empresa = $_REQUEST['empresa'];
$telefono = $_REQUEST['telefono'];
$contacto = $_REQUEST['contacto'];
$email = $_REQUEST['email'];
$comentarios = $_REQUEST['comentarios'];
$final_msg = 
"Empresa: ".$empresa."\n". 
"Telefono: ".$telefono."\n".
"Nombre Contacto: ".$contacto."\n".
"Email: ".$email."\n".
"Descripcion proyecto: ".$comentarios."\n";

$codigo = $_REQUEST['codigo'];
if ($codigo == "MZR47W") {



mail("traducciones@horbachlanguage.com", "Forma de Servicios  Express - Horbach Language Traducciones Francés-Español", $final_msg);
mail("translations@horbachlanguage.com", "Forma Servicios Express - Horbach Language Traducciones Francés-Español", $final_msg);
mail("jhhorbach@gmail.com", "Forma de Servicios Express - Horbach Language Traducciones Francés-Español", $final_msg);
mail("mmerino@paxzu.com", "Forma de Servicios Express - Horbach Language Traducciones Francés-Español", $final_msg);
mail("horbach.hls@gmail.com", "Forma de Servicios Express - Horbach Language Traducciones Francés-Español", $final_msg);
mail("correospaxzu@gmail.com", "Forma de Servicios Express - Horbach Language Traducciones Francés-Español", $final_msg);
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/gracias.html");


}else{
echo "<script language='Javascript'> alert('El código es incorrecto. Intente de nuevo');  history.back(); </script>";
}

?>
