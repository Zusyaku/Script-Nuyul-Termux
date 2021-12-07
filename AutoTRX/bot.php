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

system('clear');
sleep(1);
echo$kuning1."Welcome to script :";
sleep(1);
echo$cyan1." ~> ".$ungu2."AUTOFAUCET\n";
sleep(2);
echo$biru2."WELLCOME GRATIS OKE...\n";
sleep(2);
echo$putih1."Faucet".$biru1."Pay".$merah." ANJAY\n";
sleep(2);
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

sleep(2);
echo$biru2."        PLEASE SUBSCRIBE CHANNEL GRATIS OKE\n";
sleep(5);
system('clear');

echo$hijau2."Inject data from file ".$merah2."[".$kuning2."cfg.php!".$merah2."]";

include('cfg.php');

sleep(3);
system('clear');

echo$kuning."Applying configuration. ";
sleep(1);
system('clear');
echo$hijau2."Applying configuration. . ";
sleep(1);
system('clear');
echo$putih1."Applying configuration. . . ";
sleep(1);

system('clear');
echo$biru."√ Allhamdulilah config berhasil".$putih1." cfg.php!";
sleep(3);
system('clear');
echo$ungu2."SIAP-SIAP PANEN CUY";
sleep(3);
system('clear');

//banner
echo $banner2 = "
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
while(true){
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, $urlclaim);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$get = curl_exec($ch);
	$tmr0 = explode('<p>Time until next payout: ',$get)[1];
	$tmr = explode(' seconds.<',$tmr0)[0];
	$usr0 = explode('<code>http://faucet77.tk/?r=',$get)[1];
	$usr = explode('&amp;rc=TRX</code>',$usr0)[0];

for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$biru2." Please wait ".$merah2."[".$kuning2.$x.$merah."] ".$merah2."seconds ☕🚬";
echo "\r \r";
sleep(1);}


$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, $urlclaim);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$post = curl_exec($ch);
	$tmr0 = explode('<p>Time until next payout: ',$get)[1];
	$tmr = explode(' seconds.<',$tmr0)[0];
	$usr0 = explode('<code>http://faucet77.tk/?r=',$get)[1];
	$usr = explode('&amp;rc=TRX</code>',$usr0)[0];
	$msg0 = explode('<div class="alert alert-success">',$post)[1];
	$msg = explode('<a target',$msg0)[0];
	
echo$biru.$msg.$usr."\n";
}