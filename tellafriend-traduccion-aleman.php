<?php


// This following statement must be left intact.
// Copyright (c) Michael Bloch and Taming The Beast.  
// Tell-A-Friend script V 1.3  Updated September 20 2006
// Taming the Beast.net - http://www.tamingthebeast.net
// Free Web Marketing and Ecommerce articles and tools
// By using this code you agree to indemnify Taming the Beast
// from from any liability that might arise from its use. 
// The preceding statement be left intact. 

if(count($_POST)) {
# This section nukes nasty code that a malicious
# party may attempt to inject into the form

foreach(array('friendmail1','friendmail2','friendmail3','email','name') as $key) $_POST[$key] = strip_tags($_POST[$key]);
if(!is_secure($_POST)) { die("Asta la vista Hacker");}

# This section sends an email to you when 
# the form is used

// Your email address (for copies to be sent to you)
$emailto = "traducciones@horbachlanguage.com"; 

// Your email subject text
$esubject = "Horbach Language Services - Traslation German-Spanish"; 

// The email text for copies sent to you
$emailtext = "
$_POST[name] been used Tell a friend. Their emails are $_POST[email]

The people who recommended the site they are:

$_POST[friendmail1]
$_POST[friendmail2]
$_POST[friendmail3]

";

# This sends the email to you

@mail("$emailto", $esubject, $emailtext, "From: $_POST[email]");

# This section sends to the recipients

// Target page after successful submission
// Change thankyou.htm to suit

$thankyoupage = "thanks1.html"; 

// Change the subject text below to suit

$tsubject = "$_POST[name] recommends Horbach Language";

// Change the text below for the email 
// Don't change any "$_POST[value]" items

$ttext = "
Hello,

A friend or colleague, $_POST[name], whose e-mail account is $_POST[email], recommended Horbach Language Services.

All Horbarch Language information can be found on the following link: http://horbach-translation-service.com

";

# This emails the recommendation to the addresses submitted
@mail("$_POST[friendmail1],$_POST[friendmail2],$_POST[friendmail3]", $tsubject, $ttext, "FROM: $_POST[email]");

# After successful processing, the thank you page
header("Location: $thankyoupage");
exit;

}

# Don't change anything below

function is_secure($ar) {
$reg = "/(Content-Type|Bcc|MIME-Version|Content-Transfer-Encoding)/i";
if(!is_array($ar)) { return preg_match($reg,$ar);}
$incoming = array_values_recursive($ar);
foreach($incoming as $k=>$v) if(preg_match($reg,$v)) return false;
return true;
}

function array_values_recursive($array) {
$arrayValues = array();
foreach ($array as $key=>$value) {
if (is_scalar($value) || is_resource($value)) {
$arrayValues[] = $value;
$arrayValues[] = $key;
}
elseif (is_array($value)) {
$arrayValues[] = $key;
$arrayValues = array_merge($arrayValues, array_values_recursive($value));
}
}
return $arrayValues;
}
?>

