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

$merah2 ██╗   ██╗███████╗███████╗███████╗████████╗██╗   ██╗    
$merah2 ╚██╗ ██╔╝╚══███╔╝╚══███╔╝╚══███╔╝╚══██╔══╝██║   ██║    
 $merah ╚████╔╝   ███╔╝   ███╔╝   ███╔╝    ██║   ██║   ██║    
  $putih2 ╚██╔╝   ███╔╝   ███╔╝   ███╔╝     ██║   ╚██╗ ██╔╝    
  $putih2  ██║   ███████╗███████╗███████╗   ██║    ╚████╔╝ 
   $putih1 ╚═╝   ╚══════╝╚══════╝╚══════╝   ╚═╝     ╚═══╝\n\n";
sleep(2);
echo$kuning2."        PLEASE DO NOT SKIP THE TUTORIAL VIDEO!\n";
sleep(5);
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
sleep(2);
echo$kuning2."If this script work for you,\n";
echo$kuning2."please ".$merah2."[".$putih2."SUBSCRIBE".$merah2."]".$cyan1." YzZz Tv 😇\n";
sleep(3);
system('termux-open-url https://www.youtube.com/c/YzZzTv');
sleep(10);
echo "\n";
echo$ungu2."💓 Thanks for SUBSCRIBE! 😘\n";
sleep(2);
echo "\n";
echo$hijau2."This script is FREE!, FREE to use, FREE to edit\n\n";
sleep(2);
echo$kuning2."Using a script to claiming faucet is very high risk!\n";
echo$kuning2."Please use with carefully! ".$merah2."DO WITH AT YOUR OWN RISK!\n\n";
sleep(2);
echo$kuning2."Using this script are mean you are agree to\n";
echo$kuning2."all above the risk!\n";
sleep(2);
echo$putih2."Type (capital) C then press ENTER if you want to\n";
echo$putih2."canceling the script\n";
echo$cyan1."or Press ENTER to running this script\n";
$agree = readline($putih2."Your answer => ".$kuning2);
sleep(2);
if($agree == "C"){
echo$merah2."Have a nice day!, the script stopped.\n";
sleep(2);
exit;
}else{
system('clear');
echo $banner2;
sleep(1);
//dashboard
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://freelitecoin.vip/home");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d = curl_exec($ch);
	$usr0 = explode('<h4 class="alert-heading">',$d)[1];
	$usr = explode('</h4>',$usr0)[0];
	$tit0 = explode('<title>Home   | ',$d)[1];
	$tit = explode('</title>',$tit0)[0];
	$bal0 = explode('<span id="g_balance">',$d)[1];
	$bal = explode('</span>',$bal0)[0];
	
echo$putih2."Connect to ".$merah2."[".$putih2.$tit.$merah2."]\n";
echo$cyan1.$usr."\n";
echo$cyan1."Your Balance : ".$kuning2.$bal." coins\n";
echo$merah2." ≠=================================================≠\n";
echo$putih2."If your balance 0, script will autostop after\n";
echo$putih2."you setting Autofaucet!\n\n";
sleep(1);
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://freelitecoin.vip/autofaucet");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$a = curl_exec($ch);
	$s1 = explode('1" class="list-group-item list-group-item-action"> ',$a)[1];
	$s11 = explode(':',$s1)[0];
	$s111 = explode('cost ',$a)[1];
	$s1111 = explode(' Coin',$s111)[0];
	$s2 = explode('2" class="list-group-item list-group-item-action"> ',$a)[1];
	$s22 = explode(':',$s2)[0];
	$s222 = explode('cost ',$a)[2];
	$s2222 = explode(' Coin',$s222)[0];
	$s3 = explode('3" class="list-group-item list-group-item-action"> ',$a)[1];
	$s33 = explode(':',$s3)[0];
	$s333 = explode('cost ',$a)[3];
	$s3333 = explode(' Coin',$s333)[0];
	

echo$putih2."Please setting your autofaucet available below :\n\n";
sleep(1);

echo$kuning2."1. ".$cyan1.$s11." : cost ".$s1111." coin\n";
echo$kuning2."2. ".$cyan1.$s22.": cost ".$s2222." coins\n";
echo$kuning2."3. ".$cyan1.$s33.": cost ".$s3333." coins\n\n";

$ss = readline($putih2." Type Your answer with number 1, 2, or 3 ? => ".$kuning2);
sleep(2);
echo"\n";
echo$merah2." ≠=================================================≠\n";
echo$putih1."Trying to start Autofaucet...!\n";
sleep(2);
while(true){
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://freelitecoin.vip/home");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d = curl_exec($ch);
	$usr0 = explode('<h4 class="alert-heading">',$d)[1];
	$usr = explode('</h4>',$usr0)[0];
	$tit0 = explode('<title>Home   | ',$d)[1];
	$tit = explode('</title>',$tit0)[0];
	$bal0 = explode('<span id="g_balance">',$d)[1];
	$bal = explode('</span>',$bal0)[0];

if($bal == "0"){
echo$merah2."Your balance not enough to run Autofaucet!\n";
echo$putih2."Please do more task to earn more coins...\n\n\n";
exit;
}else{
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://freelitecoin.vip/home");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d2 = curl_exec($ch);
	$bal02 = explode('<span id="g_balance">',$d2)[1];
	$bal2 = explode('</span>',$bal02)[0];
	
echo$putih2."Update balance : ".$bal2." coins\n";
sleep(2);

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://freelitecoin.vip/autofaucet/start/ltc/".$ss);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$a2 = curl_exec($ch);
	
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://freelitecoin.vip/autofaucet/?run");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$a3 = curl_exec($ch);
	$fgs0 = explode('var csrf_token="',$a3)[1];
	$fgs = explode('"',$fgs0)[0];
	$pay0 = explode("payout:'",$a3)[1];
	$pay = explode("'",$pay0)[0];
	$tic0 = explode("ticker:'",$a3)[1];
	$tic = explode("'",$tic0)[0];
	$rwd0 = explode("reward:'",$a3)[1];
	$rwd = explode("'",$rwd0)[0];
	
for($x=60;$x>0;$x--){echo "\r \r";
echo$abu2." Please wait ".$merah."[".$kuning2.$x.$merah."] ".$abu2."seconds ☕🚬";
echo "\r \r";
sleep(1);}

//mengirim data
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://freelitecoin.vip/autofaucet/payout/ltc/".$ss);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, "payout=".$pay."&ticker=".$tic."&reward=".$rwd."&csrf_fgscom=".$fgs);
curl_setopt($ch, CURLOPT_COOKIEJAR, "./session/cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "./session/cookie.txt");
$post = curl_exec($ch);	
$paid0 = explode('Payout sent: ',$post)[1];
$paid = explode(' ltc',$paid0)[0];

echo$hijau2.$paid."litoshi sent to your ".$biru2."Faucet".$cyan1."Pay".$hijau2." account\n";
sleep(2);
}}}