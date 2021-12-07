<?php
error_reporting(0);
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
$red = "\e[1;31m";
echo$white."Sruput name  : ".$green."SHIBA DICE\n";
echo$white."Sruput ver.  : ".$green."1.1 ".$red."BAR-BAR MODE!\n";
echo$white."Created by   : ".$green."YzZz Tv\n";
echo$white."Supported by : ".$green."YzZz Tv Group Telegram\n";
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

$url = "https://free.shiba.limited/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d = Get($url, $ua);
$one = explode('text-truncate">',$d);
$two = explode('</h5>',$one[1]);
$usr = "$two[0]";
$one = explode('<h4 class="mb-0">',$d);
$two = explode(' toke',$one[1]);
$bal0 = "$two[0]";

echo$cyan."Username     : ".$yellow.$usr."\n";
echo$cyan."Balance      : ".$yellow.$yellow.$bal0." SHIB\n";
strip();

$url = "https://free.shiba.limited/dice";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$r = Get($url, $ua);

while(true){
$link = "https://free.shiba.limited/dice/roll";
$data = "betAmount=".$b."&multiplier=97&rollType=rollHi";
$roll = Post($link, $ua, $data);
$one = explode('"message":"',$roll);
$two = explode('","',$one[1]);
$msg = "$two[0]";
$one = explode('"type":"',$roll);
$two = explode('","',$one[1]);
$res = "$two[0]";
$one = explode('"roll":"',$roll);
$two = explode('.',$one[1]);
$no1 = "$two[0]";
$one = explode('.',$roll);
$two = explode('","',$one[2]);
$no2 = "$two[0]";

echo$yellow.$msg.$red." |                            \n";
sleep(1);
/*$url = "https://free.shiba.limited/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d3 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$d3);
$two = explode(' toke',$one[1]);
$bal3 = "$two[0]";

echo$white."Balance : ".$yellow.$bal3." SHIB\n";*/

if($res == "loose"){

$b2 = $b*50;
$link = "https://free.shiba.limited/dice/roll";
$data = "betAmount=".$b2."&multiplier=97&rollType=rollHi";
$roll = Post($link, $ua, $data);
$one = explode('"message":"',$roll);
$two = explode('","',$one[1]);
$msg = "$two[0]";
$one = explode('"type":"',$roll);
$two = explode('","',$one[1]);
$res = "$two[0]";
$one = explode('"roll":"',$roll);
$two = explode('.',$one[1]);
$no1 = "$two[0]";
$one = explode('.',$roll);
$two = explode('","',$one[2]);
$no2 = "$two[0]";

echo$yellow.$msg.$red." |                            \n";
sleep(10);
/*$url = "https://free.shiba.limited/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d3 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$d3);
$two = explode(' toke',$one[1]);
$bal3 = "$two[0]";

echo$white."Balance : ".$yellow.$bal3." SHIB\n";*/

}else if($res == "won"){

$link = "https://free.shiba.limited/dice/roll";
$data = "betAmount=".$b."&multiplier=97&rollType=rollHi";
$roll = Post($link, $ua, $data);
$one = explode('"message":"',$roll);
$two = explode('","',$one[1]);
$msg = "$two[0]";
$one = explode('"type":"',$roll);
$two = explode('","',$one[1]);
$res = "$two[0]";
$one = explode('"roll":"',$roll);
$two = explode('.',$one[1]);
$no1 = "$two[0]";
$one = explode('.',$roll);
$two = explode('","',$one[2]);
$no2 = "$two[0]";

echo$yellow.$msg.$red." |                            \n";
sleep(1);
$url = "https://free.shiba.limited/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d3 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$d3);
$two = explode(' toke',$one[1]);
$bal3 = "$two[0]";

/*echo$white."Balance : ".$yellow.$bal3." SHIB\n";*/

}}