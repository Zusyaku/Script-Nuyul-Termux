<?php 

$biru="\033[1;34m";
$kuning="\033[1;33m";
$merah="\033[1;31m";
$putih="\033[1;37m";
$hijau="\033[1;32m";
$cyan="\033[1;36m";
$ungu="\033[1;35m";
$dark="\033[1;30m";
$abu = "\033[0;90m";
$abu1 = "\033[1;90m";
$merah1 = "\033[1;91m";
$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
$abu = "\033[0;90m";
$abu1 = "\033[1;90m"; //Terang
$abu2 = "\033[2;90m"; //Gelap
$abu3 = "\033[3;90m"; //Miring
$abu4 = "\033[4;90m"; //Garis bawah
$merah = "\033[0;91m";
$merah1 = "\033[1;91m"; //Terang
$merah2 = "\033[2;91m"; //Gelap
$merah3 = "\033[3;91m"; //Miring
$merah4 = "\033[4;91m"; //Garis bawah
$hijau = "\033[0;92m";
$hijau1 = "\033[1;92m"; //Terang
$hijau2 = "\033[2;92m"; //Gelap
$hijau3 = "\033[3;92m"; //Miring
$hijau4 = "\033[4;92m"; //Garis bawah
$kuning = "\033[0;93m";
$kuning1 = "\033[1;93m"; //Terang
$kuning2 = "\033[2;93m"; //Gelap
$kuning3 = "\033[3;93m"; //Miring
$kuning4 = "\033[4;93m"; //Garis bawah
$biru = "\033[0;94m";
$biru1 = "\033[1;94m"; //Terang
$biru2 = "\033[2;94m"; //Gelap
$biru3 = "\033[3;94m"; //Miring
$biru4 = "\033[4;94m"; //Garis bawah
$ungu = "\033[0;95m";
$ungu1 = "\033[1;95m"; //Terang
$ungu2 = "\033[2;95m"; //Gelap
$ungu3 = "\033[3;95m"; //Miring
$ungu4 = "\033[4;95m"; //Garis bawah
$birumuda = "\033[0;96m";
$birumuda1 = "\033[1;96m"; //Terang
$birumuda2 = "\033[2;96m"; //Gelap
$birumuda3 = "\033[3;96m"; //Miring
$birumuda4 = "\033[4;96m"; //Garis bawah
$putih = "\033[0;97m";
$putih1 = "\033[1;97m"; //Terang
$putih2 = "\033[2;97m"; //Gelap
$putih3 = "\033[3;97m"; //Miring
$putih4 = "\033[4;97m"; //Garis bawah
error_reporting(0);
include('config.php');
system('clear');

//sleep(3);
system('clear');



system ("clear");

echo "\033[0;97m□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■\n";
echo $banner2=         "\033[0;90m          █████╗ ██████╗ ██████╗ ██╗   ██╗██╗     
         \033[0;94m██╔══██╗██╔══██╗██╔══██╗██║   ██║██║     
         \033[0;32m███████║██████╔╝██║  ██║██║   ██║██║     
         \033[2;97m██╔══██║██╔══██╗██║  ██║██║   ██║██║     
         \033[0;97m██║  ██║██████╔╝██████╔╝╚██████╔╝███████╗
         ╚═╝  ╚═╝╚═════╝ ╚═════╝  ╚═════╝ ╚══════╝\n";
echo "\033[0;97m□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■\n";
echo $cyan."◽CREATOR : ".$green2 ."\033[0;94mTELGRAM  \033[1;31m@aburaduan\n";
echo $cyan."◽SUPPORT : \033[0;97m@aburaduan\n";
echo $cyan."◽SCREPT  :\033[1;33m [ mdshib ]\n";
echo "\033[0;97m□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■\n";
//system("xdg-open https://t.me/arabecscript");

//sleep(3);

//system("xdg-open https://youtube.com/user/nmrhama");

//sleep(3); 

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://madshiba.fun/dashboard");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d = curl_exec($ch);
	$tit0 = explode('<title>Dashboard | ',$d)[1];
	$tit = explode('  - </title>',$tit0)[0];
	
	
    $bal0 = explode('class="fas fa-coins"></i> ',$d)[1];
	$bal = explode('</p>',$bal0)[0];
	$csrf0 = explode('<input type="hidden" name="csrf_token_name" value="',$d)[1];
	$csrf = explode('">',$csrf0)[0];

echo$cyan1."\033[1;33m◽Yuar Balance : \033[0;97m$bal ".$green2."SHIB\n";
echo $green."□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■\n";













//DASHORD
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

while(true){
	
$url = "https://madshiba.fun/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$cfg = Get($url, $ua);
$one = explode('<h5 class="mb-0">',$cfg);
$two = explode(' toke',$one[1]);
$b = "$two[0]";
sleep(3);
$url = "https://madshiba.fun/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$cfg = Get($url, $ua);
$one = explode('name="token" value="', $cfg);
$two = explode('">', $one[1]);
$t = "$two[0]";
$one = explode('let timer = ', $cfg);
$two = explode(',', $one[1]);
$tmr = "$two[0]";
for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$cyan."    please wait ".$green."[".$merah.$x.$cyan."] ";
echo "\r \r";
sleep(1);}
$link = "https://madshiba.fun/auto/verify";
$data = "token=$t";
$cfg = Post($link, $ua, $data);
$url = "https://madshiba.fun/auto";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$cfg = Get($url, $ua);
$one = explode('name="token" value="', $cfg);
$two = explode('">', $one[1]);
$t = "$two[0]";
$one = explode('let timer = ', $cfg);
$two = explode(',', $one[1]);
$tmr = "$two[0]";


sleep(3);

$url = "https://madshiba.fun/dashboard";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie];
$cfg2 = Get($url, $ua);
$bal = explode('class="fas fa-coins"></i> ',$cfg2)[1];
	$bal1 = explode('</p>',$bal)[0];



echo $yellow2."◽New Update Balances ".$cyan."=  ".$green2."$bal1".$yellow2." SHIB\n";




}
