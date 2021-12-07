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
//dashboard
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://feyorra.top/dashboard");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d = curl_exec($ch);
	//csrf token
	$csrf0 = explode('<input type="hidden" name="csrf_token_name" value="',$d)[1];
	$csrf = explode('">',$csrf0)[0];
	//balance
	$b0 = explode('<p class="acc-amount"><i class="fas fa-coins"></i> ',$d)[1];
	$b = explode('</p>',$b0)[0];
	//energy
	$e0 = explode('<p class="text-warning"><i class="fas fa-bolt"></i> ',$d)[1];
	$e = explode('</p>',$e0)[0];
	$mb0 = explode('"withdraw_amount" min="1" max="',$d)[1];
	$mb = explode('" value="',$mb0)[0];
	$tit0 = explode('Dashboard | ',$d)[1];
	$tit = explode('</title>',$tit0)[0];

echo$kuning2."Connect to ".$putih2.$tit."\n";
echo$cyan1."Login as     : ".$hijau2.$fp."\n";
echo$cyan1."Your Balance : ".$hijau2.$b." coins\n";
echo$cyan1."Your Energy  : ".$hijau2.$e." Energy\n";
echo$kuning2." ≠=================================================≠\n";
sleep(3);

while(true){
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://feyorra.top/dashboard");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d = curl_exec($ch);
	//csrf token
	$csrf0 = explode('<input type="hidden" name="csrf_token_name" value="',$d)[1];
	$csrf = explode('">',$csrf0)[0];
	//balance
	$b0 = explode('<p class="acc-amount"><i class="fas fa-coins"></i> ',$d)[1];
	$b = explode('</p>',$b0)[0];
	//energy
	$e0 = explode('<p class="text-warning"><i class="fas fa-bolt"></i> ',$d)[1];
	$e = explode('</p>',$e0)[0];
	$mb0 = explode('"withdraw_amount" min="1" max="',$d)[1];
	$mb = explode('" value="',$mb0)[0];
	$tit0 = explode('<title>',$d)[1];
	$tit = explode('</title>',$tit0)[0];
	
if($e > "100"){

echo$putih2."Starting Autofaucet...\n";
	
for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$abu2."Please wait ".$merah."[".$kuning2.$x.$merah."] ".$abu2."seconds ";
sleep(1);}

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://feyorra.top/auto/verify");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, "token=".$tkn);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$w = curl_exec($ch);

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://feyorra.top/auto");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$a = curl_exec($ch);
	
echo$hijau2."Good job!, 100000 coins has been added to your balance\n";
sleep(2);
}else{
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://feyorra.top/dashboard");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d2 = curl_exec($ch);
	$b02 = explode('<p class="acc-amount"><i class="fas fa-coins"></i> ',$d2)[1];
	$b2 = explode('</p>',$b02)[0];
	//energy
	$e02 = explode('<p class="text-warning"><i class="fas fa-bolt"></i> ',$d2)[1];
	$e2 = explode('</p>',$e02)[0];
	
echo$putih2."Remaining Energy : ".$kuning2.$e2.$merah2." ••• ".$putih2."Now Balance : ".$kuning2.$b2."\n";
sleep(2);
echo$merah."Your energy not enough to start Autofaucet\n";
echo$kuning2."Please do shortlink task to earn more energy!\n";
sleep(2);
echo$putih2."Checking your balance...\n";
sleep(3);


if($b2 > "0"){

echo$putih2."Start Autowithdraw...\n";
sleep(2);
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://feyorra.top/dashboard");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d = curl_exec($ch);
	//csrf token
	$csrf0 = explode('<input type="hidden" name="csrf_token_name" value="',$d)[1];
	$csrf = explode('">',$csrf0)[0];
	//balance
	$b0 = explode('<p class="acc-amount"><i class="fas fa-coins"></i> ',$d)[1];
	$b = explode('</p>',$b0)[0];
	//energy
	$e0 = explode('<p class="text-warning"><i class="fas fa-bolt"></i> ',$d)[1];
	$e = explode('</p>',$e0)[0];
	//max balance
	$mb0 = explode('"withdraw_amount" min="1" max="',$d)[1];
	$mb = explode('" value="',$mb0)[0];

echo$cyan1."WD MAX Balance : ".$kuning2.$b.$merah2." ••• ".$cyan1."Start Withdraw...\n";
sleep(1);

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://feyorra.top/dashboard/withdraw");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, "method=".$coin."&amount=".$mb."&wallet=".$fp."%40gmail.com&csrf_token_name=".$csrf);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$w = curl_exec($ch);
	
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://feyorra.top/dashboard");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d = curl_exec($ch);
	//csrf token
	$csrf0 = explode('<input type="hidden" name="csrf_token_name" value="',$d)[1];
	$csrf = explode('">',$csrf0)[0];
	//balance
	$b0 = explode('<p class="acc-amount"><i class="fas fa-coins"></i> ',$d)[1];
	$b = explode('</p>',$b0)[0];
	//energy
	$e0 = explode('<p class="text-warning"><i class="fas fa-bolt"></i> ',$d)[1];
	$e = explode('</p>',$e0)[0];
	
echo$hijau2."Congratulations, all coins sent to your ".$biru2."Faucet".$cyan1."Pay".$hijau2." account\n";
sleep(2);

}else{

echo$merah."Both your balance and energy is 0, the script stopped!\n";
echo$kuning2."Please get up from your bed\n";
echo$kuning2."and work hard again to earn more like a pro!\n";
sleep(2);
exit;

}}}