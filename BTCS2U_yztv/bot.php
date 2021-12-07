<?php

$green = "\e[1;32m";
$blue = "\e[1;34m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
$purple = "\e[1;35m";
$gray = "\e[1;30m";

include('cfg.php');
system('clear');
sleep(2);

function banner(){
$green = "\e[1;32m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
echo "\n";
echo$red." ██".$yellow."╗   ".$red."██".$yellow."╗".$red."███████".$yellow."╗".$red."███████".$yellow."╗".$red."███████".$yellow."╗".$red."████████".$yellow."╗".$red."██".$yellow."╗   ".$red."██".$yellow."╗\n";    
echo$yellow." ╚".$red."██".$yellow."╗ ".$red."██".$yellow."╔╝╚══".$red."███".$yellow."╔╝╚══".$red."███".$yellow."╔╝╚══".$red."███".$yellow."╔╝╚══".$red."██".$yellow."╔══╝".$red."██".$yellow."║   ".$red."██".$yellow."║\n";    
echo$yellow."  ╚".$red."████".$yellow."╔╝   ".$red."███".$yellow."╔╝   ".$red."███".$yellow."╔╝   ".$red."███".$yellow."╔╝    ".$red."██".$yellow."║   ".$red."██".$yellow."║   ".$red."██".$yellow."║\n";    
echo$yellow."   ╚".$white."██".$yellow."╔╝   ".$white."███".$yellow."╔╝   ".$white."███".$yellow."╔╝   ".$white."███".$yellow."╔╝     ".$white."██".$yellow."║   ╚".$white."██".$yellow."╗ ".$white."██".$yellow."╔╝\n";    
echo$white."    ██".$yellow."║   ".$white."███████".$yellow."╗".$white."███████".$yellow."╗".$white."███████".$yellow."╗   ".$white."██".$yellow."║    ╚".$white."████".$yellow."╔╝\n"; 
echo$green."    ╚═╝   ╚══════╝╚══════╝╚══════╝   ╚═╝     ╚═══╝\n";
echo$cyan."   <[ ".$yellow."LETS MAKE OUR ZERO BITCOIN TO ONE BITCOIN!".$cyan." ]>\n";
echo$red."  ██▓▓▓▒▒▒░░| ".$white."DO WITH AT YOUR OWN RISK! ".$red." |░░▒▒▒▓▓▓██ \n";
}

function strip(){
$green = "\e[1;32m";
$blue = "\e[1;34m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
$purple = "\e[1;35m";
$gray = "\e[1;30m";

echo$red."  ≠".$green."==".$blue."==".$white."==".$yellow."==".$cyan."==".$purple."==".$gray."==".$red."==".$green."==".$blue."==".$white."==".$yellow."==".$cyan."==".$purple."==".$gray."==".$red."==".$green."==".$blue."==".$white."==".$yellow."==".$cyan."==".$purple."==".$gray."==".$green."==".$red."≠\n";
}

function sruput(){
$green = "\e[1;32m";
$white = "\33[37;1m";

echo$white."Sruput name  : ".$green."BTCS2U TRON AUTO\n";
echo$white."Sruput ver.  : ".$green."1.0\n";
echo$white."Created by   : ".$green."YzZz Tv\n";
echo$white."Supported by : ".$green."All Member Telegram YzZz Tv\n";
}

function Get($url, $ua){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
curl_close($ch);
return $result; 
sleep(1);
}

function Post($url, $ua, $data){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "./cookie/cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "./cookie/cookie.txt");
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}

banner();
strip();
sruput();
strip();

$url = "https://btcs2u.tk/autofaucetpay.trx/claim.php?coin=TRX";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d = Get($url, $ua);
$one = explode('<title>Claim TRX - ',$d);
$two = explode('    </title>',$one[1]);
$usr = "$two[0]";

echo$cyan."Your Wallet  : ".$yellow.$usr."\n";

strip();

while(true){
$url = "https://btcs2u.tk/autofaucetpay.trx/claim.php?coin=TRX";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d0 = Get($url, $ua);
$one = explode('Balance: <br>',$d0);
$two = explode(' TRX',$one[1]);
$bal = "$two[0]";

if($bal == "6000"){
$url = "https://btcs2u.tk/autofaucetpay.trx/claim.php?coin=TRX";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d2 = Get($url, $ua);
$one = explode("countdown('",$d2);
$two = explode("',",$one[1]);
$tmr = "$two[0]";
$one = explode('Balance: <br>',$d2);
$two = explode(' TRX',$one[1]);
$bal3 = "$two[0]";

for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$gray." Please wait ".$red."[".$yellow.$x.$red."] ".$gray."seconds ☕🚬";
echo "\r \r";
sleep(1);}

$url = "https://btcs2u.tk/autofaucetpay.trx/claim.php?coin=TRX";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d2 = Get($url, $ua);

echo$green."7500 Tronoshi sent to your ".$blue."Faucet".$cyan."Pay".$green." account\n";

}else{
$url = "https://btcs2u.tk/autofaucetpay.trx/claim.php?coin=TRX";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d = Get($url, $ua);
$one = explode("countdown('",$d);
$two = explode("',",$one[1]);
$tmr = "$two[0]";

for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$gray." Please wait ".$red."[".$yellow.$x.$red."] ".$gray."seconds ☕🚬";
echo "\r \r";
sleep(1);}

}}