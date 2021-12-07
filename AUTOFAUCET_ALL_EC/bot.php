<?php
//SCRIPT UNIVERSAL EXPRESSCRYPTO
//ALL AUTOFAUCET WEBSITE

//SCRIPT INI SILAHKAN DIROMBAK
//SESUAI KEINGINAN

//SEMUA ORANG PASTI BISA
//BIKIN SRUPUTAN SENDIRI

//TERMASUK ELU

//JANGAN MAU DIKERJAIN
//DENGAN SRUPUTAN ORANG
//YANG PAKAI PASSWORD
//SHORTLINK GAK NGOTAK

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

echo$hijau2."Welcome to script :";
sleep(1);
echo$cyan1." ~> ".$kuning2."MONEY ❤".$biru2." Auto".$cyan1."Faucet ".$putih2."\n";
sleep(2);
echo$hijau2."CREATED BY...\n";
sleep(2);
echo $banner = "
$merah2 ██╗   ██╗███████╗███████╗███████╗████████╗██╗   ██╗    
$merah2 ╚██╗ ██╔╝╚══███╔╝╚══███╔╝╚══███╔╝╚══██╔══╝██║   ██║    
 $merah ╚████╔╝   ███╔╝   ███╔╝   ███╔╝    ██║   ██║   ██║    
  $putih2 ╚██╔╝   ███╔╝   ███╔╝   ███╔╝     ██║   ╚██╗ ██╔╝    
  $putih2  ██║   ███████╗███████╗███████╗   ██║    ╚████╔╝ 
   $putih1 ╚═╝   ╚══════╝╚══════╝╚══════╝   ╚═╝     ╚═══╝\n";

sleep(2);
echo$kuning2."        PLEASE DO NOT SKIP THE TUTORIAL VIDEO!\n";
sleep(5);
system('clear');

echo$hijau2."Inject data from file ".$merah2."[".$kuning2."cfg.php!".$merah2."]";

include('cfg.php');

sleep(3);
system('clear');

echo$hijau2."Applying configuration. ";
sleep(1);
system('clear');
echo$hijau2."Applying configuration. . ";
sleep(1);
system('clear');
echo$hijau2."Applying configuration. . . ";
sleep(1);

system('clear');
echo$hijau2."√ SUCCESS inject file".$kuning2." cfg.php!";
sleep(3);
system('clear');
echo$hijau2."STARTING SCRIPT NOW";
sleep(3);
system('clear');

//banner
echo $banner2 = "
$merah2 ██╗   ██╗███████╗███████╗███████╗████████╗██╗   ██╗    
$merah2 ╚██╗ ██╔╝╚══███╔╝╚══███╔╝╚══███╔╝╚══██╔══╝██║   ██║    
 $merah ╚████╔╝   ███╔╝   ███╔╝   ███╔╝    ██║   ██║   ██║    
  $putih2 ╚██╔╝   ███╔╝   ███╔╝   ███╔╝     ██║   ╚██╗ ██╔╝    
  $putih2  ██║   ███████╗███████╗███████╗   ██║    ╚████╔╝ 
   $putih1 ╚═╝   ╚══════╝╚══════╝╚══════╝   ╚═╝     ╚═══╝
$cyan1   <[ LETS MAKE OUR ZERO BITCOIN TO ONE BITCOIN! ]>
$merah2 ≠=================================================≠\n";

//dashboard untuk melihat info user
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://auto-crypto.ml/home");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$dash = curl_exec($ch);
$user1 = explode("siteUserFullName: '", $dash)[1];
$user2 = explode("',", $user1)[0];
echo$cyan1."EC USER ID : ".$hijau2.$user2."\n";
echo$kuning2." ≠=================================================≠\n";
sleep(3);
echo$kuning2."Autofaucet started!\n";
sleep(3);

//standby di dashboard-home selama waktu yang ditentukan web target
//mengulangi kegiatan secara terus menerus dengan fungsi while(true){)
while(true){

//dashboard
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://auto-crypto.ml/home");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$dash = curl_exec($ch);


for($x=60;$x>0;$x--){echo "\r \r";
echo$abu2." Please wait ".$merah."[".$kuning2.$x.$merah."] ".$abu2."seconds ☕🚬";
echo "\r \r";
sleep(1);}

//auto

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://auto-crypto.ml/home?BTC=0&BCH=0&BCN=1&ADA=0&DASH=0&DGB=1&DOGE=1&ETH=0&ETC=0&LSK=0&LTC=0&XMR=0&NEO=0&PPC=0&POT=0&RDD=0&XRP=0&STRAT=0&XTZ=0&TRX=1&WAVES=0&ZEC=0&EXS=0&EXG=0&PIVX=0&VTC=0&RVN=0&BTT=1");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$auto = curl_exec($ch);
//bagian explode bisa dihapus semua klo lu bingung
//cukup ganti dengan misalnya
// echo $hijau2."Success sent to your expresscrypto account\n";
	$a1 = explode('<span class="label label-success">', $auto)[1];
	$a2 = explode('</span></h5></p><p><h5>', $a1)[0];
	$b1 = explode('<span class="label label-success">', $auto)[2];
	$b2 = explode('</span></h5></p><p><h5>', $b1)[0];
	$c1 = explode('<span class="label label-success">', $auto)[3];
	$c2 = explode('</span></h5></p><p><h5>', $c1)[0];
	$d1 = explode('<span class="label label-success">', $auto)[4];
	$d2 = explode('</span></h5></p><p><h5>', $d1)[0];
	$e1 = explode('<span class="label label-success">', $auto)[5];
	$e2 = explode('</span></h5></p>', $e1)[0];
	
	echo $merah2.$a2."\n";
	echo $putih2.$b2."\n";
	echo $merah2.$c2."\n";
	echo $putih2.$d2."\n";
	echo $merah2.$e2."\n";
	sleep(2);
	}