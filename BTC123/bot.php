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

sleep(1);
echo$putih2."Loading Script ".$kuning2."[".$cyan1."0%".$kuning2."]";
sleep(1);
system('clear');
echo$putih2."Loading Script ".$kuning2."[".$cyan1."7%".$kuning2."]".$hijau."█";
sleep(1);
system('clear');
echo$putih2."Loading Script ".$kuning2."[".$cyan1."33%".$kuning2."]".$hijau1."███████";
sleep(1);
system('clear');
echo$putih2."Loading Script ".$kuning2."[".$cyan1."66%".$kuning2."]".$hijau2."█████████████";
sleep(2);
system('clear');
echo$putih2."Loading Script ".$kuning2."[".$cyan1."99%".$kuning2."]".$hijau2."███████████████████";
sleep(2);
system('clear');
echo$putih2."Loading Script ".$kuning2."[".$cyan1."100%".$kuning2."]".$hijau2."████████████████████";
sleep(1);
system('clear');
sleep(1);
echo $banner = "
┌─────────────────────────────────────────────────────────────────────────────────────┐
│                                                                                     │
│             ██████╗ ██████╗  █████╗ ████████╗██╗███████╗ ██████╗ ██╗  ██╗           │
│            ██╔════╝ ██╔══██╗██╔══██╗╚══██╔══╝██║██╔════╝██╔═══██╗██║ ██╔╝           │
│            ██║  ███╗██████╔╝███████║   ██║   ██║███████╗██║   ██║█████╔╝            │
│            ██║   ██║██╔══██╗██╔══██║   ██║   ██║╚════██║██║   ██║██╔═██╗            │
│            ╚██████╔╝██║  ██║██║  ██║   ██║   ██║███████║╚██████╔╝██║  ██╗           │
│             ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝╚══════╝ ╚═════╝ ╚═╝  ╚═╝           │
│                                                                  YOUTUBE CRYPTO     │
└─────────────────────────────────────────────────────────────────────────────────────┘\n";
//menerima data
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://btcbunch.com/dashboard");
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
	$usr0 = explode('<h5 class="font-size-15 text-truncate">',$d)[1];
	$usr = explode('</h5>',$usr0)[0];
	$bal0 = explode('<h4 class="mb-0">',$d)[1];
	$bal = explode(' toke',$bal0)[0];
	$e0 = explode('<h4 class="mb-0">',$d)[2];
	$e = explode('</h4>',$e0)[0];
	$csrf0 = explode('<input type="hidden" name="csrf_token_name" value="',$d)[1];
	$csrf = explode('">',$csrf0)[0];
system('clear');
$kuning2."[".$putih2.$tit." BOT AUTOFAUCET + WITHDRAW".$kuning2."]\n";
system('clear');
echo $banner = "
┌─────────────────────────────────────────────────────────────────────────────────────┐
│                                                                                     │
│             ██████╗ ██████╗  █████╗ ████████╗██╗███████╗ ██████╗ ██╗  ██╗           │
│            ██╔════╝ ██╔══██╗██╔══██╗╚══██╔══╝██║██╔════╝██╔═══██╗██║ ██╔╝           │
│            ██║  ███╗██████╔╝███████║   ██║   ██║███████╗██║   ██║█████╔╝            │
│            ██║   ██║██╔══██╗██╔══██║   ██║   ██║╚════██║██║   ██║██╔═██╗            │
│            ╚██████╔╝██║  ██║██║  ██║   ██║   ██║███████║╚██████╔╝██║  ██╗           │
│             ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝╚══════╝ ╚═════╝ ╚═╝  ╚═╝           │
│                                                                  YOUTUBE CRYPTO     │
└─────────────────────────────────────────────────────────────────────────────────────┘\n";
echo$putih2." ≠=================================================≠\n";
echo$merah2."Login account : ".$biru2.$usr."\n";
echo$kuning2."Your Balance  : ".$ungu2.$bal." Tokens\n";
echo$hijau2."Your Energy   : ".$cyan.$e." Energy\n";
echo$putih2." ≠=================================================≠\n";
sleep(2);
while(true){

if($bal > "100"){
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://btcbunch.com/dashboard");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d = curl_exec($ch);
	$usr0 = explode('<h5 class="font-size-15 text-truncate">',$d)[1];
	$usr = explode('</h5>',$usr0)[0];
	$bal0 = explode('<h4 class="mb-0">',$d)[1];
	$bal = explode(' toke',$bal0)[0];
	$e0 = explode('<h4 class="mb-0">',$d)[2];
	$e = explode('</h4>',$e0)[0];
	$csrf0 = explode('<input type="hidden" name="csrf_token_name" value="',$d)[1];
	$csrf = explode('">',$csrf0)[0];
	$mb0 = explode('min="0.000001" max="',$d)[1];
	$mb = explode('" step', $mb0)[0];

echo$kuning2."Start auto withdraw...\n";
sleep(2);
echo$kuning2."withdraw ".$mb." Tokens...\n";
sleep(1);

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://btcbunch.com/dashboard/withdraw");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, "csrf_token_name=".$csrf."&method=".$coin."&amount=".$mb."&wallet=".$fp."%40gmail.com");
curl_setopt($ch, CURLOPT_COOKIEJAR, "./session/cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "./session/cookie.txt");
$wd = curl_exec($ch);	

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://btcbunch.com/dashboard");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d2 = curl_exec($ch);
	$bal0 = explode('<h5 class="mb-0">',$d2)[1];
	$bal = explode(' toke',$bal0)[0];
	
	
echo$hijau2."All payment sent to your ".$biru2."Faucet".$cyan1."Pay".$hijau2." account!\n";

echo$putih2."Now balance : ".$kuning2.$bal." tokens\n";
sleep(1);

}else{

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://btcbunch.com/auto");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$a = curl_exec($ch);
	$t0 = explode('<input type="hidden" name="token" value="',$a)[1];
	$t = explode('">',$t0)[0];
	$tmr0 = explode('let timer = ',$a)[1];
	$tmr = explode(',',$tmr0)[0];
	

for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$putih2." Santuy cuy ".$merah."[".$kuning2.$x.$merah."] ".$putih2."seconds🍼";
echo "\r \r";
sleep(1);}


//mengirim data
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://btcbunch.com/auto/verify");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, "token=".$t);
curl_setopt($ch, CURLOPT_COOKIEJAR, "./session/cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "./session/cookie.txt");
$v = curl_exec($ch);	

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://btcbunch.com/auto");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$a2 = curl_exec($ch);
	
echo$hijau2."Good job!, ".$kuning2."5 Tokens has been added to your balance!\n";
sleep(3);

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://btcbunch.com/dashboard");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d2 = curl_exec($ch);
	$bal02 = explode('<h4 class="mb-0">',$d2)[1];
	$bal2 = explode(' toke',$bal02)[0];
	
echo$biru."Balance kamu ".$hijau."<<<=====×××××=====>>> ".$putih2."[".$ungu2.$bal2." Tokens".$putih2."]\n";
sleep(2);

}}

