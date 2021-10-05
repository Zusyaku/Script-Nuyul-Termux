<?php
//Copyright©2021 - YzZz Tv Official YouTube Channel
//Do not sell my script!!!
//Do not put in password or shortlink to my script!!!
//Report to YouTube if you do that!!!
$green = "\e[1;32m";
$blue = "\e[1;34m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
$purple = "\e[1;35m";
$gray = "\e[1;30m";
//Copyright©2021 - YzZz Tv Official YouTube Channel
//Do not sell my script!!!
//Do not put in password or shortlink to my script!!!
//Report to YouTube if you do that!!!
error_reporting(0);
include('cfg.php');
system('clear');
sleep(2);
//Copyright©2021 - YzZz Tv Official YouTube Channel
//Do not sell my script!!!
//Do not put in password or shortlink to my script!!!
//Report to YouTube if you do that!!!
date_default_timezone_set('America/Anguilla');
//Copyright©2021 - YzZz Tv Official YouTube Channel
//Do not sell my script!!!
//Do not put in password or shortlink to my script!!!
//Report to YouTube if you do that!!!
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
$yellow = "\e[1;33m";

echo$white."Sruput name  : ".$green."MINE LTC ".$yellow."     Server Time : ".$white.date('h:i:s')."\n";
echo$white."Sruput ver.  : ".$green."1.0\n";
echo$white."Created by   : ".$green."YzZz Tv\n";
echo$white."Supported by : ".$green."All Member YzZz Tv\n";
echo$white."Donate TRX   : ".$green."TGroqY79ZTeCeG6YydXMK9Piqf1C58iv7h\n";
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
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}

banner();
strip();
sruput();
strip();


$url = "https://mineltc.cf/user/home";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d = Get($url, $ua);
$one = explode("MINER: <b class='text-",$d);
$two = explode('">',$one[1]);
$status = "$two[0]";

$expire = date('H:i:s');

if($expire == '00:00:00'){
echo$red."Your session has expired, please do shortlink before run this bot!\n";
exit;
}else{
$url = "https://mineltc.cf/user/home";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d = Get($url, $ua);
$one = explode('<h3>USER:',$d);
$two = explode('<br>',$one[1]);
$usr = "$two[0]";
$one = explode("MINER: <b class='text-",$d);
$two = explode('">',$one[1]);
$status = "$two[0]";

echo$yellow."Account      : ".$cyan.$usr."\n";

strip();

while(true){

$url = "https://mineltc.cf/user/home";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d = Get($url, $ua);

$url = "https://mineltc.cf/user/pay";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$av = Get($url, $ua);
$one = explode('<small>Available for payout <h2 class="text-center"><span> ',$av);
$two = explode('   </span>',$one[1]);
$ava = "$two[0]";

if($ava > $withdraw){


$url = "https://mineltc.cf/user/pay";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$av = Get($url, $ua);
$one = explode('<small>Available for payout <h2 class="text-center"><span> ',$av);
$two = explode('   </span>',$one[1]);
$ava = "$two[0]";

$link = "https://mineltc.cf/user/pay";
$data = "amount=$withdraw&fpay=";
$fp = Post($link, $ua, $data);

echo$yellow.$withdraw." LTC sent to your ".$blue."Faucet".$cyan."Pay".$yellow." account!\n";
sleep(1);

$url = "https://mineltc.cf/user/pay";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$av = Get($url, $ua);
$one = explode('<small>Available for payout <h2 class="text-center"><span> ',$av);
$two = explode('   </span>',$one[1]);
$ava = "$two[0]";

echo$white."Updating main balance : ".$ava." LTC\n";
sleep(1);

}else{
echo$white."\r Mining in progres...                                  \r";
sleep(2);
for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$gray." Mining in progress ".$red."[".$yellow.$x.$red."] ".$gray."seconds ☕🚬";
echo "\r \r";
sleep(1);} 			
}

$url = "https://mineltc.cf/inc/data.php";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$coll = Get($url, $ua);


if($coll == "Failed"){
echo$white."\r Mining in progres...                                  \r";
sleep(2);
for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$gray." Mining in progress ".$red."[".$yellow.$x.$red."] ".$gray."seconds ☕🚬";
echo "\r \r";
sleep(1);} 
			
}else{

$url = "https://mineltc.cf/user/mining";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$m = Get($url, $ua);

$url = "https://mineltc.cf/user/home";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d = Get($url, $ua);

$url = "https://mineltc.cf/inc/data.php";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$coll = Get($url, $ua);

echo$green."Success collect ".$coll." LTC to your main balance!\n";
sleep(2);

$url = "https://mineltc.cf/user/pay";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$av = Get($url, $ua);
$one = explode('<small>Available for payout <h2 class="text-center"><span> ',$av);
$two = explode('   </span>',$one[1]);
$ava = "$two[0]";

echo$white."Updating main balance : ".$ava." LTC\n";	
}}}
//Copyright©2021 - YzZz Tv Official YouTube Channel
//Do not sell my script!!!
//Do not put in password or shortlink to my script!!!
//Report to YouTube if you do that!!!		                        