<?php
//Copyright©2021-YzZzTvOfficial Youtube Channel

//DONT RESHARE OR EDIT THIS SCRIPT WITH PASSWORD!!!!!

//SCRIPT GRATIS, JANGAN RESHARE DITAMBAH PASSWORD, AMANAT YzZzTv!
//ALLAH MELIHAT APA YANG KAMU KERJAKAN!
$color_off = "\x1b[0";
$green = "\e[1;32m";
$blue = "\e[1;34m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
$purple = "\e[1;35m";
$gray = "\e[1;30m";
error_reporting(0);
include('cfg.php');
system('clear');
sleep(2);
//Copyright©2021-YzZzTvOfficial Youtube Channel
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
//Copyright©2021-YzZzTvOfficial Youtube Channel
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
//Copyright©2021-YzZzTvOfficial Youtube Channel
function sruput(){
$green = "\e[1;32m";
$white = "\33[37;1m";
$red = "\e[1;31m";
$yellow = "\e[1;33m";
echo$white."Sruput name  : ".$green."BOT SIGNAL FOR EZDOUBLER\n";
echo$white."Sruput ver.  : ".$green."1.0\n";
echo$white."Created by   : ".$green."YzZz Tv\n";
echo$white."Supported by : ".$green."All Member Telegram YzZz Tv\n";
echo$white."Donate TRX   : ".$green."TGroqY79ZTeCeG6YydXMK9Piqf1C58iv7h\n";
}

//Copyright©2021-YzZzTvOfficial Youtube Channel
function timer(){
$red = "\e[1;31m";
$yellow = "\e[1;33m";
$gray = "\e[1;30m";
for($x=10;$x>0;$x--){echo "\r \r";
echo$gray." Waiting for signal📶 in ".$red."[".$yellow.$x.$red."] ".$gray."seconds ☕🚬";
echo "\r \r";
sleep(1);}
}
function timeconfirm(){
$red = "\e[1;31m";
$yellow = "\e[1;33m";
$gray = "\e[1;30m";
for($x=4;$x>0;$x--){echo "\r \r";
echo$gray." Waiting for confirmation ".$red."[".$yellow.$x.$red."] ".$gray."seconds ☕🚬";
echo "\r \r";
sleep(1);}
}
//Copyright©2021-YzZzTvOfficial Youtube Channel
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
//Copyright©2021-YzZzTvOfficial Youtube Channel
function Post($link, $ua, $data){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $link);
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
//Copyright©2021-YzZzTvOfficial Youtube Channel
banner();
strip();
sruput();
strip();
echo$cyan."  ██▓▓▓▒▒▒░░| ".$white."LET'S PROFIT TOGEHTER BRO!".$cyan." |░░▒▒▒▓▓▓██ \n";
strip();

while(true){

$url = "https://ezdoubler.io/ajax_livefeed.php";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$lf = Get($url, $ua);
$one = explode('<nobr><span class="text-success">+$0.',$lf);
$two = explode('</span></nobr>',$one[1]);
$cc = "$two[0]";

timer();

$url = "https://ezdoubler.io/home.php";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$d = Get($url, $ua);
$one = explode('<span id="currentprice">',$d);
$two = explode('</span></h1>',$one[1]);
$pr1 = "$two[0]";
$ez = trim(str_replace(",","",$pr1));

//echo$white."EZ Price:".$yellow.$ez.$red."|";

$url = "https://ftx.us/api/markets";
$ua = ["Host: ftx.us",
"referer: https://ftx.us/markets",
"user-agent: ".$useragent,
"cookie: _gcl_au=1.1.862917312.1633267133;_ga=GA1.2.1745670996.1633267137;_gid=GA1.2.666200933.1633267137;_fbp=fb.1.1633267137702.797645700;_gat=1"];
$df = Get($url, $ua);
$one = explode('name":"BTC/USD","enabled":true,"postOnly":false,"priceIncrement":1.0,"sizeIncrement":0.0001,"minProvideSize":0.0001,"last":',$df);
$two = explode(',"bid":',$one[1]);
$bid = "$two[0]";
$one = explode($bid.',"bid":',$df);
$two = explode(',"ask":',$one[1]);
$ask = "$two[0]";
$one = explode($ask.',"price":',$df);
$two = explode(',"type":',$one[1]);
$ftx = "$two[0]";

//echo$white."FTX Price:".$yellow.$ask."               \n";

if($ez > $ask){
echo$red."\r ████▓▓▓▓▓▓▒▒▒░░| GO SELL!                   \r";
sleep(10);

}else{
echo$green."\r ████▓▓▓▓▓▓▒▒▒░░| GO BUY!                  \r";
sleep(10);
//}
}}