<?
$nombre = $_REQUEST['nombre'];
$company = $_REQUEST['company'];
$telefono = $_REQUEST['telefono'];
$telefono02 = $_REQUEST['telefono02'];
$email = $_REQUEST['email'];
$comentarios = $_REQUEST['comentarios'];
$final_msg = "Nombre: ".$nombre."\n". 
"company: ".$company."\n".
"telefono: ".$telefono."\n".
"Telefono02: ".$telefono02."\n".
"Email: ".$email."\n".
"Comentarios: ".$comentarios."\n";

$codigo = $_REQUEST['codigo'];
if ($codigo == "MZR47W") {


mail("traducciones@horbachlanguage.com", "Contact Form - Horbach Languaje", $final_msg);
mail("translations@horbachlanguage.com", "Contact form - Horbach Language", $final_msg);
mail("jhhorbach@gmail.com", "Contact form - Horbach Language", $final_msg);
mail("mmerino@paxzu.com", "Contact Form - Horbach Languaje", $final_msg);
mail("horbach.hls@gmail.com", "Contact Form - Horbach Languaje", $final_msg);
mail("correospaxzu@gmail.com", "Contact Form - Horbach Languaje", $final_msg);
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/gracias2.html");


}else{
echo "<script language='Javascript'> alert('El código es incorrecto. Intente de nuevo');  history.back(); </script>";
}

?>
