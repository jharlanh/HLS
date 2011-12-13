<?
	session_start();
		
	$captcha_texto = "";
		
	for ($i = 1; $i <= 6; $i++) {
	    $captcha_texto .= caracter_aleatorio();
	}
		
	$HTTP_SESSION_VARS["captcha_texto_session"] = $captcha_texto;

	function caracter_aleatorio() {

		mt_srand((double)microtime()*1000000);
		
		$valor_aleatorio = mt_rand(1,3);
		
		switch ($valor_aleatorio) {
	    case 1:
	        $valor_aleatorio = mt_rand(97, 122); 
	        break;
	    case 2:
	        $valor_aleatorio = mt_rand(48, 57);
	        break;
	    case 3:
	        $valor_aleatorio = mt_rand(65, 90);
	        break;
		}
		
		return chr($valor_aleatorio);
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Casa Veerkamp : Amplificador para Guitarra Eléctrica Laney &quot;ECAMO&quot; 120W con bafle 200W</title>
<style type="text/css">
<!--
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<link href="electrico.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center" id="cuerpo">
<table width="1000" border="0" cellspacing="0" cellpadding="0" bgcolor="">
  <tr>
    <td><div id="head">Tel&eacute;fonos Veerkamp 5709 . 3716 | Informes Veerkamp: <a href="mailto:mesones@veerkamp.com" title="mail de mesones">mesones@veerkamp.com</a> | <a href="contactanos-amplificador-laney.php">Contáctanos</a></div>
    
    </td>
  </tr>
  <tr>
    <td bgcolor="#666666">
    
    <div id="titulo">
      <h1>Amplificador para Guitarra Eléctrica Laney &quot;ECAMO&quot; 120W con bafle 200W</h1>
    </div>
        <div id="contactanos"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><form action="process-contacto7.php" method="post" name="form1" onSubmit="MM_validateForm('nombre','','R','empresa','','R','telefono','','RisNum','email','','RisEmail','proyector','','R','comentarios','','R');return document.MM_returnValue">
          <table width="50%" border="0" align="center" cellpadding="5" cellspacing="0" class="lateral">
            <tr>
              <td colspan="2" id="ft-t">Déjenos sus datos y en breve un asesor se comunicara con usted.</td>
            </tr>
            <tr>
              <td width="35%" height="9" id="ft-t">Nombre</td>
              <td width="65%" id="ft"><label for="empresa"></label>
                <input type="text" name="nombre" id="nombre">
                *</td>
            </tr>
            <tr>
              <td width="35%" height="9" id="ft-t">Apellidos</td>
              <td height="32" id="ft"><input type="text" name="apellido" id="apellido" />
*</td>
            </tr>
            <tr>
              <td width="35%" height="18" id="ft-t">Dirección</td>
              <td height="38" id="ft"><input type="text" name="direccion" id="direccion" />
*</td>
            </tr>
            <tr>
              <td height="36" id="ft-t">Teléfono</td>
              <td id="ft"><input type="text" name="telefono" id="telefono">
                *</td>
            </tr>
            <tr>
              <td height="37" id="ft-t">E-mail</td>
              <td id="ft"><input type="text" name="email" id="email">
                *</td>
            </tr>
            <tr>
              <td id="ft-t">Comentarios</td>
              <td id="ft"><label for="comentarios"></label>
                <textarea name="comentarios" id="comentarios" cols="25" rows="5"></textarea></td>
            </tr>
            <tr>
              <td height="33" id="ft-t">Código</td>
              <td id="ft"><input type="text" name="texto_ingresado" id="texto_ingresado">
                *</td>
            </tr>
            <tr>
              <td id="ft-t"><img src="crear_imagen.php?<?php echo SID; ?>" /></td>
              <td id="ft-t">&nbsp;</td>
            </tr>
            <tr>
              <td id="ft-t">&nbsp;</td>
              <td id="ft-t"><input type="submit" name="enviar2" id="enviar2" value="Enviar"></td>
            </tr>
            <tr>
              <td colspan="2" id="ft-t">&nbsp;</td>
            </tr>
          </table>
        </form></td>
      </tr>
    </table></div>
      </td>
  </tr>
  <tr>
    <td><div id="head">Tel&eacute;fonos Veerkamp 5709 . 3716 | Informes Veerkamp: <a href="mailto:mesones@veerkamp.com" title="mail de mesones">mesones@veerkamp.com</a> | <a href="contactanos-amplificador-laney.php">Contáctanos</a></div></td>
  </tr>
  <tr>
    <td id="redes"><div id="twitter">Sigue nuestras ofertas en:<a href="http://twitter.com/veerkamp" target="_blank"><img src="http://www.instrumentosmusicalesventa.info/septiembre/sabian/twitter_logo.jpg" alt="" width="74" height="18" border="0" align="absmiddle" /></a></div><div id="face">Sigue nuestras ofertas en:<a href="http://www.facebook.com/pages/Veerkamp/361675459877" target="_blank"><img src="../guitarras/images/logo-face.jpg" alt="" width="74" height="18" border="0" align="absmiddle" /></a></div></td>
  </tr>
</table>
</div></body>
</html>
