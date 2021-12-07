<?php
date_default_timezone_set("UTC");

$green = "\e[1;32m";
$blockglow = "\033[102m";
$blue = "\e[1;34m";
$blockblue = "\033[104m";
$red = "\e[1;31m";
$blockred = "\033[101m";
$blockpink = "\033[105m";
$white = "\33[37;1m";
$blockwhite = "\033[107m";
$yellow = "\e[1;33m";
$blockyellow = "\033[103m";
$cyan = "\e[1;36m";
$blockcyan = "\033[106m";
$purple = "\e[1;35m";
$gray = "\e[1;30m";
$blockgray = "\033[100m";
$end = "\033[0m";
$orange = "\033[38;5;202m";

include('cfg.php');
system('clear');
sleep(1);
//error_reporting(0);


function banner0(){
$gray = "\e[1;30m";
echo "\n";
echo$gray."  ██"; usleep(10000); echo$gray."╗   "; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."╗"; usleep(10000); echo$gray."███████"; usleep(10000); echo$gray."╗"; usleep(10000); echo$gray."███████"; usleep(10000); echo$gray."╗"; usleep(10000); echo$gray."███████"; usleep(10000); echo$gray."╗"; usleep(10000); echo$gray."████████"; usleep(10000); echo$gray."╗"; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."╗   "; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."╗\n";    
echo$gray."  ╚"; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."╗ "; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."╔╝╚══"; usleep(10000); echo$gray."███"; usleep(10000); echo$gray."╔╝╚══"; usleep(10000); echo$gray."███"; usleep(10000); echo$gray."╔╝╚══"; usleep(10000); echo$gray."███"; usleep(10000); echo$gray."╔╝╚══"; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."╔══╝"; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."║   "; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."║\n";    
echo$gray."   ╚"; usleep(10000); echo$gray."████"; usleep(10000); echo$gray."╔╝   "; usleep(10000); echo$gray."███"; usleep(10000); echo$gray."╔╝   "; usleep(10000); echo$gray."███"; usleep(10000); echo$gray."╔╝   "; usleep(10000); echo$gray."███"; usleep(10000); echo$gray."╔╝    "; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."║   "; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."║   "; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."║\n";    
echo$gray."    ╚"; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."╔╝   "; usleep(10000); echo$gray."███"; usleep(10000); echo$gray."╔╝   "; usleep(10000); echo$gray."███"; usleep(10000); echo$gray."╔╝   "; usleep(10000); echo$gray."███"; usleep(10000); echo$gray."╔╝     "; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."║   ╚"; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."╗ "; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."╔╝\n";    
echo$gray."     ██"; usleep(10000); echo$gray."║   "; usleep(10000); echo$gray."███████"; usleep(10000); echo$gray."╗"; usleep(10000); echo$gray."███████"; usleep(10000); echo$gray."╗"; usleep(10000); echo$gray."███████"; usleep(10000); echo$gray."╗   "; usleep(10000); echo$gray."██"; usleep(10000); echo$gray."║    ╚"; usleep(10000); echo$gray."████"; usleep(10000); echo$gray."╔╝\n"; 
echo$gray."     ╚═╝   ╚══════╝╚══════╝╚══════╝   ╚═╝     ╚═══╝\n";
//sleep(1);
system('clear');
}

function banner(){
$green = "\e[1;32m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
$orange = "\033[38;5;202m";
echo "\n";
echo$red."  ██".$yellow."╗   ".$red."██".$yellow."╗".$red."███████".$yellow."╗".$red."███████".$yellow."╗".$red."███████".$yellow."╗".$red."████████".$yellow."╗".$red."██".$yellow."╗   ".$red."██".$yellow."╗\n";    
echo$yellow."  ╚".$red."██".$yellow."╗ ".$red."██".$yellow."╔╝╚══".$red."███".$yellow."╔╝╚══".$red."███".$yellow."╔╝╚══".$red."███".$yellow."╔╝╚══".$red."██".$yellow."╔══╝".$red."██".$yellow."║   ".$red."██".$yellow."║\n";    
echo$yellow."   ╚".$red."████".$yellow."╔╝   ".$red."███".$yellow."╔╝   ".$red."███".$yellow."╔╝   ".$red."███".$yellow."╔╝    ".$red."██".$yellow."║   ".$red."██".$yellow."║   ".$red."██".$yellow."║\n";    
echo$yellow."    ╚".$white."██".$yellow."╔╝   ".$white."███".$yellow."╔╝   ".$white."███".$yellow."╔╝   ".$white."███".$yellow."╔╝     ".$white."██".$yellow."║   ╚".$white."██".$yellow."╗ ".$white."██".$yellow."╔╝\n";    
echo$white."     ██".$yellow."║   ".$white."███████".$yellow."╗".$white."███████".$yellow."╗".$white."███████".$yellow."╗   ".$white."██".$yellow."║    ╚".$white."████".$yellow."╔╝\n"; 
echo$green."     ╚═╝   ╚══════╝╚══════╝╚══════╝   ╚═╝     ╚═══╝\n";
sleep(1);
echo$cyan."    <[ ".$yellow."LETS MAKE OUR ZERO BITCOIN TO ONE BITCOIN!".$cyan." ]>\n";
echo$red."█████▓▓▓▒▒▒░░| ".$white."DO WITH AT YOUR OWN RISK! ".$red." |░░▒▒▒▓▓▓█████ \n";
}

function strip2(){
$green = "\e[1;32m";
$blue = "\e[1;34m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
$purple = "\e[1;35m";
$gray = "\e[1;30m";
$blockglow = "\033[102m";
$end = "\033[0m";
$bluem = "\033[38;5;57m";
$orange = "\033[38;5;202m";
$strip2 = str_repeat($orange."═",56);
$strip3 = str_repeat($gray."◼",56);

echo$strip3."\n";
}

function sruput(){
include('cfg.php');

$green = "\e[1;32m";
$blockglow = "\033[102m";
$blue = "\e[1;34m";
$blockblue = "\033[104m";
$red = "\e[1;31m";
$blockred = "\033[101m";
$blockpink = "\033[105m";
$white = "\33[37;1m";
$blockwhite = "\033[107m";
$yellow = "\e[1;33m";
$blockyellow = "\033[103m";
$cyan = "\e[1;36m";
$blockcyan = "\033[106m";
$purple = "\e[1;35m";
$gray = "\e[1;30m";
$blockgray = "\033[100m";
$end = "\033[0m";
$orange = "\033[38;5;202m";

echo$yellow."Sruput name  : ".$blockred.$white."🔳 AUTOFAUCET NO ENERGY VIE FAMILY ".$white."v2.0".$end."\n";
echo$yellow."Created by   : ".$red."▓".$white."▓ ".$green."YzZz Tv".$end."\n";
echo$yellow."Supported by : ".$blockyellow."🐱".$end.$orange." KOCHENG OREN SCRIPTER TEAM\n";
echo$yellow."Donate TRX   : 🏧 ".$red."TGroqY79ZTeCeG6YydXMK9Piqf1C58iv7h\n";
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

function Post($link, $ua, $data){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "");
curl_setopt($ch, CURLOPT_COOKIEFILE, "");
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}

function timer(){
$gray = "\e[1;30m";
$yellow = "\e[1;33m";
$red = "\e[1;31m";
for($x=60;$x>0;$x--){echo "\r \r";
echo$gray." Please wait ".$red."[".$yellow.$x.$red."] ".$gray."seconds ☕🚬";
echo "\r \r";
sleep(1);}
echo"\r                                                          \r";
}

//Copyright©2021-YzZzTvOfficial Youtube Channel

banner0();
banner();
strip2();
sruput();
strip2();

$url = "https://dogehero.xyz/dashboard"; //claim tiap 1 menit
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$d2 = Get($url, $ua);
$one = explode('<title>',$d2);
$two = explode(' | ',$one[1]);
$open = "$two[0]";
$one = explode($open." | ",$d2);
$two = explode(' - ',$one[1]);
$t2 = "$two[0]";
$one = explode('<h4 class="mb-0">',$d2);
$two = explode(' toke',$one[1]);
$b2 = "$two[0]";

$url = "https://cryptoaffiliates.store/dashboard"; //claim tiap 2 menit
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$d1 = Get($url, $ua);
$one = explode('<title>',$d1);
$two = explode(' | ',$one[1]);
$open = "$two[0]";
$one = explode($open." | ",$d1);
$two = explode('  - </title>',$one[1]);
$t1 = "$two[0]";
$one = explode('id="tokenBalance" value="',$d1);
$two = explode('"',$one[1]);
$b1 = "$two[0]";

$url = "https://www.1xbitcoins.com/dashboard"; //claim tiap 3 menit
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$d3 = Get($url, $ua);
$one = explode('<title>',$d3);
$two = explode(' | ',$one[1]);
$open = "$two[0]";
$one = explode($open." | ",$d3);
$two = explode(' - ',$one[1]);
$t3 = "$two[0]";
$o = "
";
$on = '<div class="balance">'.$o.'<p>';
$one = explode($on,$d3);
$two = explode(' toke',$one[1]);
$b3 = "$two[0]";

$url = "https://btcbunch.com/dashboard"; //claim tiap 5 menit
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck4];
$d4 = Get($url, $ua);
$one = explode('<title>',$d4);
$two = explode(' | ',$one[1]);
$open = "$two[0]";
$one = explode($open." | ",$d4);
$two = explode(' - ',$one[1]);
$t4 = "$two[0]";
$one = explode('<h5 class="">',$d4);
$two = explode(' toke',$one[1]);
$b4 = "$two[0]";

$url = "https://free.shiba.limited/dashboard"; //claim tiap 15 menit
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck5];
$d5 = Get($url, $ua);
$one = explode('<title>',$d5);
$two = explode(' | ',$one[1]);
$open = "$two[0]";
$one = explode($open." | ",$d5);
$two = explode(' - ',$one[1]);
$t5 = "$two[0]";
$one = explode('<h4 class="mb-0">',$d5);
$two = explode(' toke',$one[1]);
$b5 = "$two[0]";

echo$blockgray.$white."Balance ".$orange."~> ".$end.$yellow." ".$b2.$blockgray."{$blockgray}\t : {$end} ".$yellow.$t2.$end."\n";
echo$blockgray.$white."Balance ".$orange."~> ".$end.$cyan." ".$b1.$blockgray."{$blockgray}\t\t : {$end} ".$cyan.$t1.$end."\n";
echo$blockgray.$white."Balance ".$orange."~> ".$end.$orange." ".$b3.$blockgray."{$blockgray}\t\t : {$end} ".$orange.$t3.$end."\n";
echo$blockgray.$white."Balance ".$orange."~> ".$end.$purple." ".$b4.$blockgray."{$blockgray}\t : {$end} ".$purple.$t4.$end."\n";
echo$blockgray.$white."Balance ".$orange."~> ".$end.$blue." ".$b5.$blockgray."{$blockgray}\t : {$end} ".$blue.$t5.$end."\n";

strip2(); //sleep(3000);

echo$green."Autofaucet NO ENERGY NO BACOT started!\n";
strip2();

//SKENARIO => {dogehero - [dogehero&cryptoaffiliates] - [dogehero&1xbitcoins] - [dogehero&cryptoaffiliates] - [dogehero&btcbunch] - [dogehero&cryptoaffiliates&1xbitcoins] - dogehero - [dogehero&cryptoaffiliates] - [dogehero&1xbitcoins] - [dogehero&cryptoaffiliates&btcbunch] - dogehero - [dogehero&cryptoaffiliates&1xbitcoins] - dogehero - [dogehero&cryptoaffiliates] - freeshibalimited


while(true){
//start auto all web -> dogehero/cryptoaffiliates/1xbitcoins/btcbunch/shiba
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$a1 = Get($url, $ua);
$one = explode('name="token" value="', $a1);
$two = explode('">', $one[1]);
$tk1 = "$two[0]";
$one = explode('let timer = ', $a1);
$two = explode(',', $one[1]);
$tmr1 = "$two[0]";
$url = "https://www.1xbitcoins.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$a3 = Get($url, $ua);
$one = explode('name="token" value="', $a3);
$two = explode('">', $one[1]);
$tk3 = "$two[0]";
$one = explode('let timer = ', $a3);
$two = explode(',', $one[1]);
$tmr3 = "$two[0]";
$url = "https://btcbunch.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck4];
$a4 = Get($url, $ua);
$one = explode('name="token" value="', $a4);
$two = explode('">', $one[1]);
$tk4 = "$two[0]";
$one = explode('let timer = ', $a4);
$two = explode(',', $one[1]);
$tmr4 = "$two[0]";
$url = "https://free.shiba.limited/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck5];
$a5 = Get($url, $ua);
$one = explode('name="token" value="', $a5);
$two = explode('">', $one[1]);
$tk5 = "$two[0]";
$one = explode('let timer = ', $a5);
$two = explode(',', $one[1]);
$tmr5 = "$two[0]";
timer();
//verif dogehero - skenario menit 1
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$dogehero0 = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero1 = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero2 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$dogehero2);
$two = explode(' toke',$one[1]);
$b2a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
timer();
//verif dogehero&cryptoaffiliates - skenario menit 2
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$dogehero0 = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero1 = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero2 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$dogehero2);
$two = explode(' toke',$one[1]);
$b2a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
//cryptoaffiliates
$link = "https://cryptoaffiliates.store/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$data = "token=$tk1";
$cfg = Post($link, $ua, $data);
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$cfg = Get($url, $ua);
$url = "https://cryptoaffiliates.store/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$d1 = Get($url, $ua);
$one = explode('id="tokenBalance" value="',$d1);
$two = explode('"',$one[1]);
$b1 = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$cyan." ".$b1." ".$t1.$end."\n";
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$a1 = Get($url, $ua);
$one = explode('name="token" value="', $a1);
$two = explode('">', $one[1]);
$tk1 = "$two[0]";
$one = explode('let timer = ', $a1);
$two = explode(',', $one[1]);
$tmr1 = "$two[0]";
timer();

//verif dogehero&1xbitcoins - skenario menit 3
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$cfg = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$cfg = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$cfg2 = Get($url, $ua);
$one2 = explode('<h4 class="mb-0">',$cfg2);
$two2 = explode(' toke',$one2[1]);
$b2a3 = "$two2[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a3." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
//1xbitcoins
$link = "https://www.1xbitcoins.com/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$data = "token=$tk3";
$cfg3 = Post($link, $ua, $data);
$url = "https://www.1xbitcoins.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$cfg3 = Get($url, $ua);
$url = "https://www.1xbitcoins.com/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$d3 = Get($url, $ua);
$o = "
";
$on = '<div class="balance">'.$o.'<p>';
$one = explode($on,$d3);
$two = explode(' toke',$one[1]);
$b3a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$orange." ".$b3a." ".$t3.$end."\n";
$url = "https://www.1xbitcoins.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$a3 = Get($url, $ua);
$one = explode('name="token" value="', $a3);
$two = explode('">', $one[1]);
$tk3 = "$two[0]";
$one = explode('let timer = ', $a3);
$two = explode(',', $one[1]);
$tmr3 = "$two[0]";
timer();
//verif dogehero&cryptoaffiliates - skenario menit 4
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$dogehero0 = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero1 = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero2 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$dogehero2);
$two = explode(' toke',$one[1]);
$b2a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
//cryptoaffiliates
$link = "https://cryptoaffiliates.store/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$data = "token=$tk1";
$cfg = Post($link, $ua, $data);
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$cfg = Get($url, $ua);
$url = "https://cryptoaffiliates.store/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$d1 = Get($url, $ua);
$one = explode('id="tokenBalance" value="',$d1);
$two = explode('"',$one[1]);
$b1 = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$cyan." ".$b1." ".$t1.$end."\n";
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$a1 = Get($url, $ua);
$one = explode('name="token" value="', $a1);
$two = explode('">', $one[1]);
$tk1 = "$two[0]";
$one = explode('let timer = ', $a1);
$two = explode(',', $one[1]);
$tmr1 = "$two[0]";
timer();
//verif dogehero&btcbunch - skenario menit 5
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$cfg = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$cfg = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$cfg2 = Get($url, $ua);
$one2 = explode('<h4 class="mb-0">',$cfg2);
$two2 = explode(' toke',$one2[1]);
$b2a5= "$two2[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a5." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
//btcbunch
$link = "https://btcbunch.com/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck4];
$data = "token=$tk4";
$cfg4 = Post($link, $ua, $data);
$url = "https://btcbunch.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck4];
$cfg4 = Get($url, $ua);
$url = "https://btcbunch.com/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck4];
$d4 = Get($url, $ua);
$one = explode('<h5 class="">',$d4);
$two = explode(' toke',$one[1]);
$b4a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$purple." ".$b4a." ".$t4.$end."\n";
$url = "https://btcbunch.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck4];
$a4 = Get($url, $ua);
$one = explode('name="token" value="', $a4);
$two = explode('">', $one[1]);
$tk4 = "$two[0]";
$one = explode('let timer = ', $a4);
$two = explode(',', $one[1]);
$tmr4 = "$two[0]";
timer();
//verif dogehero&cryptoaffiliates&1xbitcoins - skenario menit 6
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$dogehero0 = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero1 = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero2 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$dogehero2);
$two = explode(' toke',$one[1]);
$b2a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
//cryptoaffiliates
$link = "https://cryptoaffiliates.store/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$data = "token=$tk1";
$cfg = Post($link, $ua, $data);
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$cfg = Get($url, $ua);
$url = "https://cryptoaffiliates.store/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$d1 = Get($url, $ua);
$one = explode('id="tokenBalance" value="',$d1);
$two = explode('"',$one[1]);
$b1 = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$cyan." ".$b1." ".$t1.$end."\n";
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$a1 = Get($url, $ua);
$one = explode('name="token" value="', $a1);
$two = explode('">', $one[1]);
$tk1 = "$two[0]";
$one = explode('let timer = ', $a1);
$two = explode(',', $one[1]);
$tmr1 = "$two[0]";
//1xbitcoins
$link = "https://www.1xbitcoins.com/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$data = "token=$tk3";
$cfg3 = Post($link, $ua, $data);
$url = "https://www.1xbitcoins.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$cfg3 = Get($url, $ua);
$url = "https://www.1xbitcoins.com/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$d3 = Get($url, $ua);
$o = "
";
$on = '<div class="balance">'.$o.'<p>';
$one = explode($on,$d3);
$two = explode(' toke',$one[1]);
$b3a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$orange." ".$b3a." ".$t3.$end."\n";
$url = "https://www.1xbitcoins.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$a3 = Get($url, $ua);
$one = explode('name="token" value="', $a3);
$two = explode('">', $one[1]);
$tk3 = "$two[0]";
$one = explode('let timer = ', $a3);
$two = explode(',', $one[1]);
$tmr3 = "$two[0]";
timer();
//verif dogehero - skenario menit 7
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$dogehero0 = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero1 = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero2 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$dogehero2);
$two = explode(' toke',$one[1]);
$b2a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
timer();
//verif dogehero&cryptoaffiliates - skenario menit 8
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$dogehero0 = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero1 = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero2 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$dogehero2);
$two = explode(' toke',$one[1]);
$b2a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
//cryptoaffiliates
$link = "https://cryptoaffiliates.store/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$data = "token=$tk1";
$cfg = Post($link, $ua, $data);
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$cfg = Get($url, $ua);
$url = "https://cryptoaffiliates.store/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$d1 = Get($url, $ua);
$one = explode('id="tokenBalance" value="',$d1);
$two = explode('"',$one[1]);
$b1 = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$cyan." ".$b1." ".$t1.$end."\n";
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$a1 = Get($url, $ua);
$one = explode('name="token" value="', $a1);
$two = explode('">', $one[1]);
$tk1 = "$two[0]";
$one = explode('let timer = ', $a1);
$two = explode(',', $one[1]);
$tmr1 = "$two[0]";
timer();
//verif dogehero&1xbitcoins - skenario menit 9
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$cfg = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$cfg = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$cfg2 = Get($url, $ua);
$one2 = explode('<h4 class="mb-0">',$cfg2);
$two2 = explode(' toke',$one2[1]);
$b2a3 = "$two2[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a3." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
//1xbitcoins
$link = "https://www.1xbitcoins.com/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$data = "token=$tk3";
$cfg3 = Post($link, $ua, $data);
$url = "https://www.1xbitcoins.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$cfg3 = Get($url, $ua);
$url = "https://www.1xbitcoins.com/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$d3 = Get($url, $ua);
$o = "
";
$on = '<div class="balance">'.$o.'<p>';
$one = explode($on,$d3);
$two = explode(' toke',$one[1]);
$b3a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$orange." ".$b3a." ".$t3.$end."\n";
$url = "https://www.1xbitcoins.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$a3 = Get($url, $ua);
$one = explode('name="token" value="', $a3);
$two = explode('">', $one[1]);
$tk3 = "$two[0]";
$one = explode('let timer = ', $a3);
$two = explode(',', $one[1]);
$tmr3 = "$two[0]";
timer();
//verif dogehero&cryptoaffiliates&btcbunch - skenario menit 10
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$dogehero0 = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero1 = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero2 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$dogehero2);
$two = explode(' toke',$one[1]);
$b2a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
//cryptoaffiliates
$link = "https://cryptoaffiliates.store/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$data = "token=$tk1";
$cfg = Post($link, $ua, $data);
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$cfg = Get($url, $ua);
$url = "https://cryptoaffiliates.store/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$d1 = Get($url, $ua);
$one = explode('id="tokenBalance" value="',$d1);
$two = explode('"',$one[1]);
$b1 = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$cyan." ".$b1." ".$t1.$end."\n";
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$a1 = Get($url, $ua);
$one = explode('name="token" value="', $a1);
$two = explode('">', $one[1]);
$tk1 = "$two[0]";
$one = explode('let timer = ', $a1);
$two = explode(',', $one[1]);
$tmr1 = "$two[0]";
//btcbunch
$link = "https://btcbunch.com/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck4];
$data = "token=$tk4";
$cfg4 = Post($link, $ua, $data);
$url = "https://btcbunch.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck4];
$cfg4 = Get($url, $ua);
$url = "https://btcbunch.com/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck4];
$d4 = Get($url, $ua);
$one = explode('<h5 class="">',$d4);
$two = explode(' toke',$one[1]);
$b4a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$purple." ".$b4a." ".$t4.$end."\n";
$url = "https://btcbunch.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck4];
$a4 = Get($url, $ua);
$one = explode('name="token" value="', $a4);
$two = explode('">', $one[1]);
$tk4 = "$two[0]";
$one = explode('let timer = ', $a4);
$two = explode(',', $one[1]);
$tmr4 = "$two[0]";
timer();
//verif dogehero - skenario menit 11
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$dogehero0 = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero1 = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero2 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$dogehero2);
$two = explode(' toke',$one[1]);
$b2a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
timer();
//verif dogehero&cryptoaffiliates&1xbitcoins - skenario menit 12
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$dogehero0 = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero1 = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero2 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$dogehero2);
$two = explode(' toke',$one[1]);
$b2a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
//cryptoaffiliates
$link = "https://cryptoaffiliates.store/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$data = "token=$tk1";
$cfg = Post($link, $ua, $data);
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$cfg = Get($url, $ua);
$url = "https://cryptoaffiliates.store/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$d1 = Get($url, $ua);
$one = explode('id="tokenBalance" value="',$d1);
$two = explode('"',$one[1]);
$b1 = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$cyan." ".$b1." ".$t1.$end."\n";
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$a1 = Get($url, $ua);
$one = explode('name="token" value="', $a1);
$two = explode('">', $one[1]);
$tk1 = "$two[0]";
$one = explode('let timer = ', $a1);
$two = explode(',', $one[1]);
$tmr1 = "$two[0]";
//1xbitcoins
$link = "https://www.1xbitcoins.com/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$data = "token=$tk3";
$cfg3 = Post($link, $ua, $data);
$url = "https://www.1xbitcoins.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$cfg3 = Get($url, $ua);
$url = "https://www.1xbitcoins.com/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$d3 = Get($url, $ua);
$o = "
";
$on = '<div class="balance">'.$o.'<p>';
$one = explode($on,$d3);
$two = explode(' toke',$one[1]);
$b3a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$orange." ".$b3a." ".$t3.$end."\n";
$url = "https://www.1xbitcoins.com/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck3];
$a3 = Get($url, $ua);
$one = explode('name="token" value="', $a3);
$two = explode('">', $one[1]);
$tk3 = "$two[0]";
$one = explode('let timer = ', $a3);
$two = explode(',', $one[1]);
$tmr3 = "$two[0]";
timer();
//verif dogehero - skenario menit 13
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$dogehero0 = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero1 = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero2 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$dogehero2);
$two = explode(' toke',$one[1]);
$b2a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
timer();
//verif dogehero&cryptoaffiliates - skenario menit 14
$link = "https://dogehero.xyz/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$data = "token=$tk2";
$dogehero0 = Post($link, $ua, $data);
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero1 = Get($url, $ua);
$url = "https://dogehero.xyz/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$dogehero2 = Get($url, $ua);
$one = explode('<h4 class="mb-0">',$dogehero2);
$two = explode(' toke',$one[1]);
$b2a = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$yellow." ".$b2a." ".$t2.$end."\n";
$url = "https://dogehero.xyz/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck2];
$a2 = Get($url, $ua);
$one = explode('name="token" value="', $a2);
$two = explode('">', $one[1]);
$tk2 = "$two[0]";
$one = explode('let timer = ', $a2);
$two = explode(',', $one[1]);
$tmr2 = "$two[0]";
//cryptoaffiliates
$link = "https://cryptoaffiliates.store/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$data = "token=$tk1";
$cfg = Post($link, $ua, $data);
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$cfg = Get($url, $ua);
$url = "https://cryptoaffiliates.store/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$d1 = Get($url, $ua);
$one = explode('id="tokenBalance" value="',$d1);
$two = explode('"',$one[1]);
$b1 = "$two[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$cyan." ".$b1." ".$t1.$end."\n";
$url = "https://cryptoaffiliates.store/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck1];
$a1 = Get($url, $ua);
$one = explode('name="token" value="', $a1);
$two = explode('">', $one[1]);
$tk1 = "$two[0]";
$one = explode('let timer = ', $a1);
$two = explode(',', $one[1]);
$tmr1 = "$two[0]";
timer();
//verif freeshibalimited - skenario menit 15
$link = "https://free.shiba.limited/auto/verify";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck5];
$data = "token=$tk5";
$cfg = Post($link, $ua, $data);
$url = "https://free.shiba.limited/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck5];
$cfg = Get($url, $ua);
$url = "https://free.shiba.limited/dashboard";
$cfg2 = Get($url, $ua);
$one2 = explode('<h4 class="mb-0">',$cfg2);
$two2 = explode(' tokens</h4>',$one2[1]);
$b5a = "$two2[0]";
echo$blockgray.$white."Update ".$orange."~> ".$end.$blue." ".$b5a." ".$t5.$end."\n";
$url = "https://free.shiba.limited/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$ck5];
$cfg = Get($url, $ua);
}


