<?
$nombre = $_REQUEST['nombre'];
$company = $_REQUEST['company'];
$telefono = $_REQUEST['telefono'];
$telefono02 = $_REQUEST['telefono02'];
$email = $_REQUEST['email'];
$comentarios = $_REQUEST['comentarios'];
$final_msg = 
"Nombre: ".$nombre."\n". 
"company: ".$company."\n".
"telefono: ".$telefono."\n".
"Telefono02: ".$telefono02."\n".
"Email: ".$email."\n".
"Comentarios: ".$comentarios."\n";



mail("traducciones@horbachlanguage.com", "Forma de Servicios Express - Horbach Language", $final_msg);
mail("translations@horbachlanguage.com", "Forma de Servicios Express- Horbach Language", $final_msg);
mail("jhhorbach@gmail.com", "Forma de Servicios Express - Horbach Language", $final_msg);
mail("mmerino@paxzu.com", "Forma de Servicios Express - Horbach Language", $final_msg);
mail("horbach.hls@gmail.com", "Forma de Servicios Express - Horbach Language", $final_msg);
mail("correospaxzu@gmail.com", "Forma de Servicios Express - Horbach Language", $final_msg);
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/gracias1-1.html");



?>