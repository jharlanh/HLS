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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><!-- InstanceBegin template="/Templates/base.dwt" codeOutsideHTMLIsLocked="false" -->
<head>


<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="Author" content="Horbach language services">
    <meta name="Subject" content=" Servicios de lingüisticos, servicios de idiomas, Escuela de idiomas">
    <meta name="Description" content="Dirigido y operado por un equipo multilingüe proveniente de Estados Unidos y Gran Bretaña, Horbach Language Services lleva veintisiete años ofreciendo una gama internacional de servicios lingüísticos en la Ciudad de México. Como son Traducciones, clases, interpretación simultanea, en inglés, español, portugués, frances, alemán, italiano.">
    <meta name="keywords" content="Servicios lingüísticos, traducciones, traductores, servicios de interpretacion, escuelas de idiomas,  
                                    Traducciones técnicas, Traducciones legales, Traducciones médica, Traducciones culturales, Traducciones literarias,
                                    Traducciones Financieras, Traducciones Administrativas, Traducciones Cientificas,
                                    Interpretaciones simultaneas, clases individuales, grupos pequeños, TOEFEL, Soporte de audio, soporte de video">
    <link rev="made" href="mailto:horbach.hls@gmail.com">
    <meta name="Language" content="Spanish, English">
    <meta name="Abstract" content="Dirigido y operado por un equipo multilingüe proveniente de Estados Unidos y Gran Bretaña, Horbach Language Services lleva veintisiete años ofreciendo una gama internacional de servicios lingüísticos en la Ciudad de México. Como son Traducciones, clases, interpretación simultanea, en inglés, español, portugués, frances, alemán, italiano.">

    <meta name="Designer" content="Horbach language services">
    <meta name="Publisher" content="Horbach Language Services">
    <meta name="Revisit-After" content="1 Days">
    <meta name="Distribution" content="Global">
    <meta name="Robots" content="All">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>hls - horbach language services</title>
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
    <!-- InstanceEndEditable -->
    <link href="e-stilos-hls.css" rel="stylesheet" type="text/css">
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

</head>
<body><b:if cond='data:blog.url == data:blog.homepageUrl'>
              <div style='display:none;'><data:title/></div>
            <b:else/>
              <div style='display:none;'><a expr:href='data:blog.homepageUrl'><data:title/></a></div>

<table width="770" align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" title=" ">
  <tbody><tr>
    <td><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="770" height="60">
      <param name="movie" value="images/top-logo.swf">
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="swfversion" value="8.0.35.0">
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don�t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="images/top-logo.swf" width="770" height="60">
        <!--<![endif]-->
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="swfversion" value="8.0.35.0">
        <param name="expressinstall" value="Scripts/expressInstall.swf">
        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
        <div>
          <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object></td>
  </tr>
  <tr>
    <td><!-- InstanceBeginEditable name="foto" -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0"  title="Horbach" >
        <tr>
          <td width="48%" class="textofoto" valign="top">Translation Services</td>
          <td width="52%"><img src="images/contacto.jpg" alt="Horbach Nosotros " width="490" height="219"></td>
        </tr>
      </table>
    <!-- InstanceEndEditable --></td>
  </tr>
  <tr>
    <td height="1"></td>
  </tr>
  <tr>
    <td bgcolor="#d2352e">
<table width="100%" border="0" cellpadding="0" cellspacing="3" id="menusup">
  <tbody><tr>
    <td width="97" height="21" align="center"><a href="index.html" title="Nosotros" class="menu2">About us</a></td>
    <td width="172" align="center" class="menu2"><a href="translations.html" title="Traducciones Oficiales" class="menu2"> Translations</a></td>
    <td width="191" align="center"><a href="simultaneous-and-consecutive-interpreting.html" title="Interpretaci&oacute;n simultanea" class="menu2">Simultaneous and <br>Consecutive Interpreting</a></td>
    <td width="87" align="center"><a href="price-and-fees.html" title="Tarifas" class="menu2">Prices</a></td>
    <td width="102" align="center"><a href="clientele.html" title="Clientela" class="menu2">Clientele</a></td>
    <td width="100" align="center"><a href="contact.php" title="contacto" class="menu2">Contact Us</a></td>
    </tr>
</tbody></table>
	</td>
  </tr>
  <tr>
    <td height="28"></td>
  </tr>
  <tr>
    <td>
	<table width="770" border="0" cellpadding="0" cellspacing="0">
        <tbody>
          <tr> 
          <td width="520" height="508" valign="top"> 
		  <table width="520" border="0" cellpadding="0" cellspacing="0">
           <tbody><tr>
             <td>
               <div id="cuerpo"><!-- InstanceBeginEditable name="contenido" -->
<h2>Contact</h2>
               <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><form action=" method="post" name="form1" onSubmit="MM_validateForm('nombre','','R','empresa','','R','telefono','','RisNum','email','','RisEmail','proyector','','R','comentarios','','R');return document.MM_returnValue">
          <table width="50%" border="0" align="center" cellpadding="5" cellspacing="0" class="lateral">
            <tr>
              <td colspan="2" id="ft-t">D�jenos sus datos y en breve un asesor se comunicara con usted.</td>
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
              <td width="35%" height="18" id="ft-t">Direcci�n</td>
              <td height="38" id="ft"><input type="text" name="direccion" id="direccion" />
*</td>
            </tr>
            <tr>
              <td height="36" id="ft-t">Tel�fono</td>
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
              <td height="33" id="ft-t">C�digo</td>
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
        </form>
               <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>               <!-- InstanceEndEditable --></div>		       </td>
           </tr>
           </tbody>
</table>
		  </td>
<td width="25"></td>
<td width="196" valign="top">

          
<table width="196" border="0" cellpadding="0" cellspacing="0" id="contactenos">
<tbody>
<tr>
<th height="29" background="images/superior02.jpg"><span id="bl" title="hls - horbach language services">Contact us</span></th>
</tr>
<tr>
<td height="23" bgcolor="#ffebc0" align="center"><a href="mailto:translations@horbachlanguage.com" title="hls - horbach language services" class="mailto">translations@horbachlanguage.com</a></td>
                    </tr>
                    <tr>
                      <td height="31" bgcolor="#ffebc0" align="center"><span style="font-size:14px" title="hls - horbach language services"><strong>Phone: (323)  963-4023 </strong></span></td>
                    </tr>
                    <tr>
                      <td><img src="images/infe.jpg" alt="Contactenos" width="202" height="25"></td>
                    </tr>
                  </tbody>
                </table><br><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><table width="196" border="0" cellpadding="0" cellspacing="0" id="servicios">
                  <tbody>
                    <tr>
                      <th height="29" background="images/superior02.jpg"><span id="bl" title="hls - horbach language services">Our Services</span></th>
</tr>
<tr>
<td bgcolor="#ffebc0">
<ul class="textlateral">
<li title="hls - horbach language services">Translations</li>
<li title="hls - horbach language services">Interpretation</li>
<li title="hls - horbach language services">Audio and Video Support</li>
<li title="hls - horbach language services">Language Instruction</li>
</ul>
</td>
</tr>
<tr>
<td><img src="images/infe.gif" alt="Servicios Horbach" width="196" height="19"></td>
</tr>
</tbody>
</table>
<br>
<table width="196" border="0" cellpadding="0" cellspacing="0" id="servicios3">
<tbody>
<tr>
<th height="29" background="images/superior02.jpg">
<span id="bl" title="hls - horbach language services">Languages</span></th>
</tr>
<tr>
<td bgcolor="#ffebc0">
  
  <ul class="textlateral">
    <li title="hls - horbach language services">English</li>
    <li title="hls - horbach language services">Spanish</li>
    <li title="hls - horbach language services">French</li>
    <li title="hls - horbach language services">Portuguese</li>
    <li title="hls - horbach language services">German</li>
    <li title="hls - horbach language services">Italian</li>
    <li title="hls - horbach language services">Chinese (Mandarin)</li>
    <li title="hls - horbach language services">Japanese</ili>
    <li title="hls - horbach language services">Dutch</li>
    <li title="hls - horbach language services">Russian</li>
    <li title="hls - horbach language services">Swedish</li>
  </ul></td>
</tr>
                      <tr>
                        <td><img src="images/infe.gif" alt="Idiomas Horbach" width="196" height="19"></td>
                      </tr>
                    </tbody>
                  </table>
<br>
                  <table width="196" border="0" cellpadding="0" cellspacing="0" id="servicios2">
                    <tbody>
                      <tr>
                        <th height="29" background="images/superior02.jpg">
<div id="bl" title="hls - horbach language services">Areas of <br>Specialization</div></th>
                      </tr>
                      <tr>
                        <td bgcolor="#ffebc0">
<ul class="textlateral">
<li title="hls - horbach language services">Administrative</li>
<li title="hls - horb
ach language services">Scientific</li>
<li title="hls - horbach language services">Accounting</li>
<li title="hls - horbach language services">Cultural</li>
<li title="hls - horbach language services">Pharmaceutical</li>
<li title="hls - horbach language services">Legal</li>
<li title="hls - horbach language services">Literary</li>
<li title="hls - horbach language services">Medical</li>
<li title="hls - horbach language services">Human Resources</li>
<li title="hls - horbach language services">Technological</li>
<li title="hls - horbach language services">Sales/Marketing</li>
<li title="hls - horbach language services">Websites</li>
                          </ul></td>
                        </tr>
                      <tr>
                        <td><img src="images/infe.gif" alt="Areas especializaci&oacute;n" width="196" height="19"></td>
                      </tr>
                    </tbody>
                  </table>
                  <br></td>
              </tr>
              <tr>
                <td></td>
              </tr>
              <tr>
                <td>
                  <table width="196" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td colspan="3"><img src="images/superior02.jpg" width="202" height="28" title="hls - horbach language services"></td>
                      </tr>
                      <tr>
                        <td width="20" height="42" bgcolor="#ffebc0"></td>
                        <td width="156" bgcolor="#ffebc0"><!-- InstanceBeginEditable name="menu lateral" --><p class="textlateral"><a href="#" onClick="MM_openBrWindow('recommend6.htm','','width=475,height=445')" title="hls - horbach language services"><span title="hls - horbach language services">Recommend to a friend</span></a><br>
                            <a href="#" onClick="MM_openBrWindow('contact6.html','','width=475,height=455')" title="hls - horbach language services">Request more information</a></p><!-- InstanceEndEditable --></td>
                        <td width="20" bgcolor="#ffebc0"></td>
                      </tr>
                      <tr>
                        <td colspan="3"><img src="images/infe.gif" alt="Recomienda" width="204" height="19"></td>
                      </tr>
                    </tbody>
                  </table>
                  
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><table width="196" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td colspan="3"><img src="images/superior02.jpg" width="202" height="28" title="hls - horbach language services"></td>
                    </tr>
                    <tr>
                      <td width="20" height="42" bgcolor="#ffebc0"></td>
                      <td width="156" bgcolor="#ffebc0"><p>5419 Hollywood Blvd<br>
                        Suite C. 514<br>
                        Los Angeles, Ca 90027</p></td>
                      <td width="20" bgcolor="#ffebc0"></td>
                    </tr>
                    <tr>
                      <td colspan="3"><img src="images/infe.gif" alt="Recomienda" width="204" height="19"></td>
                    </tr>
                  </tbody>
                </table></td>
              </tr>
                </table>
          </td>
          <td width="29"></td>
        </tr>
      </tbody></table></td>
  </tr>
  <tr>
    <td height="28"><table width="100%" border="0" cellpadding="0" cellspacing="3">
      <tbody>
        <tr>
          <td width="60" height="21" align="center"><a href="index.html" class="menuinfe" >About Us</a></td>
          <td width="186" align="center"><a href="translations.html" class="menuinfe" >Certified Translations</a></td>
          <td width="232" align="center"><a href="simultaneous-and-consecutive-interpreting.html" class="menuinfe" >Simultaneous and Consecutive Interpreting</a></td>
          <td width="102" align="center"><a href="price-and-fees.html" class="menuinfe">Prices</a></td>
          <td width="82" align="center"><a href="clientele.html" class="menuinfe">Clientele</a></td>
          <td width="87" align="center"><a href="contact.php" class="menuinfe">Contact Us</a></td>
          </tr>
      </tbody>
    </table></td>
  </tr>
  <tr>
    <td height="28"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="posicionado">Horbach Language 2011 | <span id="result_box" lang="en"><span title="">ALL RIGHTS RESERVED</span></span> || <span class="mailto"><a href="http://www.paxzoom.com/google-adwords.html" target="_blank" class="menuinfe">Adwords management by<img src="images/paxzoom3.gif" alt="Paxzoom - Posicionamiento en buscadores" width="31" height="21" border="0">Paxzoom</a></span></td>
        </tr>
    </table></td>
  </tr>
  </tbody>
</table>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
</body>
<!-- InstanceEnd --></html>