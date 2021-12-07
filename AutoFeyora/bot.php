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
sleep(2);
echo$hijau2."Loading ".$merah2."3 ";
sleep(1);
system('clear');
echo$hijau2."Loading ".$kuning2."2 ";
sleep(1);
system('clear');
echo$hijau2."Loading ".$cyan1."1 ";
sleep(1);
system('clear');
sleep(1);
echo$hijau2."Welcome to script :";
sleep(1);
echo$cyan1." ~> ".$ungu2."FEYORRA".$biru2." Auto".$cyan1."Faucet ".$putih2."+ AutoWD\n";
sleep(2);
echo$hijau2."CREATED BY...\n";
sleep(2);
echo $banner = "
$hijau2 ██╗   ██╗███████╗███████╗███████╗████████╗██╗   ██╗    
$hijau1 ╚██╗ ██╔╝╚══███╔╝╚══███╔╝╚══███╔╝╚══██╔══╝██║   ██║    
 $hijau ╚████╔╝   ███╔╝   ███╔╝   ███╔╝    ██║   ██║   ██║    
  $merah ╚██╔╝   ███╔╝   ███╔╝   ███╔╝     ██║   ╚██╗ ██╔╝    
  $merah2  ██║   ███████╗███████╗███████╗   ██║    ╚████╔╝ 
   $abu ╚═╝   ╚══════╝╚══════╝╚══════╝   ╚═╝     ╚═══╝\n";

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
$hijau2 ██╗   ██╗███████╗███████╗███████╗████████╗██╗   ██╗    
$hijau1 ╚██╗ ██╔╝╚══███╔╝╚══███╔╝╚══███╔╝╚══██╔══╝██║   ██║    
 $hijau ╚████╔╝   ███╔╝   ███╔╝   ███╔╝    ██║   ██║   ██║    
  $merah ╚██╔╝   ███╔╝   ███╔╝   ███╔╝     ██║   ╚██╗ ██╔╝    
  $merah2  ██║   ███████╗███████╗███████╗   ██║    ╚████╔╝ 
   $abu ╚═╝   ╚══════╝╚══════╝╚══════╝   ╚═╝     ╚═══╝
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

echo$cyan1."Login as     : ".$hijau2.$fp."\n";
echo$cyan1."Your Balance : ".$hijau2.$b." coins\n";
echo$cyan1."Your Energy  : ".$hijau2.$e."\n";
echo$kuning2." ≠=================================================≠\n";
sleep(3);
//menu AutoFaucet
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

if($e < "100"){
echo$merah2."You don't have enough energy for Auto Faucet\n";
echo$merah2."complete Shortlinks for earn energy!\n\n";
sleep(1);
//AutoWD
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
	
echo$putih2."Please type the code for withdraw available below:\n";
echo$kuning2."FEYORRA = ".$cyan1."5\n";
echo$kuning2."TRON    = ".$cyan1."6\n";
$mt = readline($putih2."Your answer -> ".$ungu2);
sleep(1);

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
curl_setopt($ch, CURLOPT_POSTFIELDS, "method=".$mt."&amount=".$mb."&wallet=".$fp."%40gmail.com&csrf_token_name=".$csrf);
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
echo$putih2."If you have many referrals, please restart this script to check your balance and withdraw again\n\n";
exit;
}else{
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
	//token auto
	$t0 = explode('<input type="hidden" name="token" value="',$a)[1];
	$t = explode('">',$t0)[0];
	$tmr0 = explode('let timer = ',$a)[1];
	$tmr = explode(',',$tmr0)[0];

for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$abu2." Please wait ".$merah."[".$kuning2.$x.$merah."] ".$abu2."seconds ☕🚬";
echo "\r \r";
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
curl_setopt($ch, CURLOPT_POSTFIELDS, "token=".$t);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$v = curl_exec($ch);

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
	$av = curl_exec($ch);
	
echo$hijau2."Good job! 100000 coins has been added to your balance\n";
}}