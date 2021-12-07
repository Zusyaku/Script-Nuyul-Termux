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
echo$hijau2."Welcome to script :";
sleep(1);
echo$cyan1." ~> ".$kuning2."FREEBITCOIN.WIN\n";
sleep(2);
echo$hijau2."CREATED BY...\n";
sleep(2);
echo$biru2."Faucet".$cyan1."Pay".$hijau2." lovers\n";
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

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://freebitcoin.win/autofaucet/?run");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$f = curl_exec($ch);
	$usr0 = explode('<span class="user-name text-bold-700 ml-1">',$f)[1];
	$usr = explode('</span>',$usr0)[0];
	$bal0 = explode('<span id="g_balance">',$f)[1];
	$bal = explode('</span>',$bal0)[0];

echo$cyan1."Login as : ".$kuning2.$usr."\n";
echo$cyan1."Balance  : ".$kuning2.$bal." ALY\n";
echo$merah2." ≠=================================================≠\n";	
sleep(1);
while(true){
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://freebitcoin.win/autofaucet/?run");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$f = curl_exec($ch);
	$usr0 = explode('<span class="user-name text-bold-700 ml-1">',$f)[1];
	$usr = explode('</span>',$usr0)[0];
	$bal0 = explode('<span id="g_balance">',$f)[1];
	$bal = explode('</span>',$bal0)[0];	
	$p0 = explode("payout:'",$f)[1];
	$p = explode("',",$p0)[0];
	$g0 = explode("gateway:'",$f)[1];
	$g = explode("',",$g0)[0];
	$t0 = explode("ticker:'",$f)[1];
	$t = explode("',",$t0)[0];
	$r0 = explode("reward:'",$f)[1];
	$r = explode("',",$r0)[0];
	$u0 = explode('url: site_url+"',$f)[1];
	$u = explode('",',$u0)[0];
	$tm0 = explode('<span id="timeleft" style="font-size:300%; font-weight: bold; color: #e95e38;">',$f)[1];
	$tm = explode('</span>',$tm0)[0];
	$csrf0 = explode('csrf_token="',$f)[1];
	$csrf = explode('";',$csrf0)[0];

if($bal > "0"){
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://freebitcoin.win/autofaucet/?run");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$f = curl_exec($ch);
	$usr0 = explode('<span class="user-name text-bold-700 ml-1">',$f)[1];
	$usr = explode('</span>',$usr0)[0];
	$bal0 = explode('<span id="g_balance">',$f)[1];
	$bal = explode('</span>',$bal0)[0];	
	$p0 = explode("payout:'",$f)[1];
	$p = explode("',",$p0)[0];
	$g0 = explode("gateway:'",$f)[1];
	$g = explode("',",$g0)[0];
	$t0 = explode("ticker:'",$f)[1];
	$t = explode("',",$t0)[0];
	$r0 = explode("reward:'",$f)[1];
	$r = explode("',",$r0)[0];
	$u0 = explode('url: site_url+"',$f)[1];
	$u = explode('",',$u0)[0];
	$u1 = explode('url: site_url+"',$f)[1];
	$u2 = explode('?asta',$u1)[0];
	$tm0 = explode('<span id="timeleft" style="font-size:300%; font-weight: bold; color: #e95e38;">',$f)[1];
	$tm = explode('</span>',$tm0)[0];
	$csrf0 = explode('csrf_token="',$f)[1];
	$csrf = explode('";',$csrf0)[0];
	$tmr0 = explode('<span id="timeleft" style="font-size:300%; font-weight: bold; color: #e95e38;">',$f)[1];
	$tmr = explode('</span>',$tmr0)[0];

for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$abu2." Please wait ".$merah."[".$kuning2.$x.$merah."] ".$abu2."seconds ☕🚬";
echo "\r \r";
sleep(1);
}

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://freebitcoin.win".$u2."?payout=".$p."&".$csrf);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$f = curl_exec($ch);

sleep(2);

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://freebitcoin.win/autofaucet/?run");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$v = curl_exec($ch);
	$bal0 = explode('<span id="g_balance">',$v)[1];
	$bal = explode('</span>',$bal0)[0];	
	$tmr0 = explode('<span id="timeleft" style="font-size:300%; font-weight: bold; color: #e95e38;">',$v)[1];
	$tmr = explode('</span>',$tmr0)[0];
	$sent0 = explode('<span style="font-size:300%; font-weight: bold; color: #e95e38;">',$v)[1];
	$sent = explode('</span>',$sent0)[0];
	
	
	echo$hijau2."Success sent ".$sent." ".$t." to your ExpressCrypto Account\n";

for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$abu2." Please wait ".$merah."[".$kuning2.$x.$merah."] ".$abu2."seconds ☕🚬";
echo "\r \r";
sleep(1);
}

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://freebitcoin.win".$u);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, "payout=".$p."&gateway=".$g."&ticker=".$t."&reward=".$r."&csrf_fgscom=".$csrf);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
	$z = curl_exec($ch);
	//$msg0 = explode('{"returnOk":true,"error_msg":"',$z)[1];
	//$msg = explode('. ","refresh_now":true}',$msg0)[0];


$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://freebitcoin.win/autofaucet/?run");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$v = curl_exec($ch);
	$bal0 = explode('<span id="g_balance">',$v)[1];
	$bal = explode('</span>',$bal0)[0];	
	$sent0 = explode('<span style="font-size:300%; font-weight: bold; color: #e95e38;">',$v)[1];
	$sent = explode('</span>',$sent0)[0];
	
	
	echo$hijau2."Success sent ".$sent." ".$t." to your ExpressCrypto Account\n";
	
	
}else{
echo$merah2."Not enough ALY, please do more task!\n";
exit;
}
}