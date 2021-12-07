<?php
//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
include('cfg.php');
system('clear');

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

echo$hijau2."Autofaucet started!\n\n";
sleep(2);

while(true){

$url = "https://free.shiba.limited/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$c_shiba];
$cfg = Get($url, $ua);

$url = "https://free.shiba.limited/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$c_shiba];
$cfg = Get($url, $ua);
$one = explode('name="token" value="', $cfg);
$two = explode('">', $one[1]);
$t = "$two[0]";
$one = explode('let timer = ', $cfg);
$two = explode(',', $one[1]);
$tmr = "$two[0]";

for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$abu2." Auto shiba ".$merah."[".$kuning2.$x.$merah."] ".$abu2."seconds ☕🚬";
echo "\r \r";
sleep(1);}

$link = "https://free.shiba.limited/auto/verify";
$data = "token=$t";
$cfg = Post($link, $ua, $data);

$url = "https://free.shiba.limited/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$c_shiba];
$cfg = Get($url, $ua);
$one = explode('name="token" value="', $cfg);
$two = explode('">', $one[1]);
$t = "$two[0]";
$one = explode('let timer = ', $cfg);
$two = explode(',', $one[1]);
$tmr = "$two[0]";

sleep(1);

$url = "https://free.shiba.limited/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$c_shiba];
$cfg2 = Get($url, $ua);
$one2 = explode('<h4 class="mb-0">',$cfg2);
$two2 = explode('</h4>',$one2[1]);
$b2 = "$two2[0]";

echo $kuning2."√ Finish Claim in ".$putih2.":: Update Balance : {$hijau2}$b2\n";
sleep(1);
}