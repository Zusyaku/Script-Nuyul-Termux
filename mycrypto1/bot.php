<?php
@error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$n = "\n";$n2 = "\n\n";$t = "\t";
$r= "\r                                                              \r";
/* START COLOR */
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
include("cfg.php");

function fetch_value($str,$find_start) {
        $start = @strpos($str,$find_start);
        if ($start === false) {
                return "";
        }
        $length = strlen($find_start);
        $end = strpos(substr($str,$start +$length));
        return trim(substr($str,$start +$length));
}


function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);
system("clear");

$res = url("https://controlc.com/54aceb1c");
//echo $res."\n";
$link1 = explode('Link Password: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('Pass: ',$res);
$pw = explode(' ',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
$read = file_get_contents("key.txt");
system('clear');
echo $baner = "
\033[1;31mWELLCOME TO MY SCRIPT
\033[1;32m███╗   ███╗ █████╗ ██╗██████╗ ██╗███████╗     ██████╗██╗  ██╗
████╗ ████║██╔══██╗██║██╔══██╗██║██╔════╝    ██╔════╝██║  ██║
██╔████╔██║███████║██║██████╔╝██║█████╗      ██║     ███████║
██║╚██╔╝██║██╔══██║██║██╔══██╗██║██╔══╝      ██║     ██╔══██║
██║ ╚═╝ ██║██║  ██║██║██████╔╝██║███████╗    ╚██████╗██║  ██║
╚═╝     ╚═╝╚═╝  ╚═╝╚═╝╚═════╝ ╚═╝╚══════╝     ╚═════╝╚═╝  ╚═╝
                                                   \033[1;31m OFFICIAL\n";
//echo $green2." •SILAHKAN AMBIL PASSWORD DI DALAM VIDEO YT KAKEK.\n";
//echo $red2." •(The password is in the video)\n";
//echo $red2."◼".$green2." Link Password :" .$red2.$link[0]."\n";

if ($pass == 'no'){
      echo $M2." ◼ Script Sudah Di Off Kan\n";
      exit;                                                       }else{
if($read == $pass){
      echo $HJ2." ▶ Proses Upload Password \n";
      sleep(5);
}
elseif($read != $pass){
      //echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");
echo $red2."◼".$green2." Link Password : " .$red2.$link[0]."\n";
echo $red2."◼".$green2." MASUKAN PASSWORD DI SINI : ".$red2;
$p = trim(fgets(STDIN));

if($pass == $p){
        fwrite($save, $p);
        echo $red2."\n◼".$green2." LOGIN SUCCESS\n";
        fclose($save);
        sleep(2);
        echo $red2."◼".$green2." JANGAN LUPA BERSYUKUR HARI INI\n";
        sleep(3);
        echo $red2."◼".$green2." PASSWORD AKAN DI RESET SETIAP JAM 12 SIANG\n";
        sleep(3);
        }else{
        echo $M2."◼ LOGIN GAGAL, MASUKIN PASSWORD YG BENER DONG. SILAHKAN COBA LAGI\n";
        exit;
        }
        }
}
sleep(3);

system("clear");
echo "\n";
function an($str){$arr = str_split($str); 
foreach ($arr as $az){echo $az; usleep(3000);}}
function bn($sc){
$res="\033[7m";$hitam="\033[0;30m";$abu2="\033[1;30m";$putih="\033[0;37m";$putih2="\033[1;37m";$red="\033[0;31m";$red2="\033[1;31m";$green="\033[0;32m";$green2="\033[1;32m";$yellow="\033[0;33m";$yellow2="\033[1;33m";$blue="\033[0;34m";$blue2="\033[1;34m";$purple="\033[0;35m";$purple2="\033[1;35m";
$lblue="\033[0;36m";$lblue2="\033[1;36m";
date_default_timezone_set("Asia/Jakarta");
echo an("{$green2}┌────────────────────────────────────────────────────────────────────┐
│		{$lblue2}SCRIPT	FOR	  {$putih2}:	{$lblue}{$sc}				{$green2}│
└────────────────────────────────────────────────────────────────────┘
{$green2}┌────────────────────────────────────────────────────────────────────┐
│{$green2} Date {$putih2}➤ {$lblue2}".date('d:m:Y')."{$green2}       Time {$putih2}➤ {$lblue2}".date('H:i:s')."{$green2}     Status Script {$putih2}➤ {$lblue2}Online {$green2}│
└────────────────────────────────────────────────────────────────────┘
{$green2}┌────────────────────────────────────────────────────────────────────┐
│	{$lblue2}CREATOR SCRIPT            {$putih2}: 	{$lblue2}MOH HOMAIDI TOHIR		{$green2}│
│	{$lblue2}YOUTUBE CHANNEL I         {$putih2}: 	{$lblue2}MAIBIE CHANNEL		   {$green2}  │
│	{$lblue2}YOUTUBE CHANNEL II        {$putih2}: 	{$lblue2}MAIBIE GAMERS		   {$green2}  │
│	{$lblue2}SUPPORT	    	          {$putih2}: 	{$lblue2}ALL-TEAM-FUNCTION			{$green2}│
│	{$lblue2}THANKS TO                 {$putih2}: 	{$lblue2}ALLAH SWT {$red2}& {$lblue2}ALL-MY-TEAM	   {$green2}  │
└────────────────────────────────────────────────────────────────────┘\n\n");}
system('clear');bn(" MYCRYTPOFAUCET-EU ");
sleep(2);
function vision($data){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, "https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);$visit= array(
"User-Agent: Mozilla/5.0 (Linux; Android 11; M2004J19C Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/90.0.4430.210 Mobile Safari/537.36",
"content-type: application/json",);curl_setopt($ch, CURLOPT_HTTPHEADER, $visit);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_POSTFIELDS, $data);return curl_exec($ch);}

function curl($url, $ua, $data = null){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 1,
            CURLOPT_HTTPHEADER => $ua
        ));
        if($data){
            curl_setopt_array($curl, array(
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_POST => 1
            ));
       }
        $result = curl_exec($curl);
        curl_close($curl);
	return $result;
}


function head($user, $cookie){
$ua = [
    'User-Agent: '.$user,
    'Cookie: '.$cookie
];
return $ua;
}


function solvemedia($url,$uas){
$uas = array();
$uas[]="Host: api-secure.solvemedia.com";
$uas[]="user-agent: ".$user;
$uas[]="accept: */*";
$uas[]="Referer: https://mycryptofaucet.eu/roll.html";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $uas);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
$r = curl_exec($ch);
return $r;
}


//DASHBOARD
$url = "https://mycryptofaucet.eu/";
$dashboard = curl($url, head($user, $cookie));
	$nama = explode('</a>',explode('<a href="/membership.html" class="text-success">',$dashboard)[1])[0];
	echo $green2."Welcome Back ".$putih2."~> ".$yellow2.$nama;
	echo $red2." = ";
	$ftoken = explode('<div class="text-success">',explode('<div class="col-9 no-space">',$dashboard)[1])[0];
	$coin = explode('</b></div></div>',explode('<div class="text-success"><b>',$dashboard)[1])[0];
	echo $green2.$ftoken.$putih2."~> ".$yellow2.$coin."\n\n";
echo $lblue2."[".$green2."1".$lblue2."] ".$green2."AUTO BYPASS SOLVE GVISION\n";
echo $lblue2."[".$red2."2".$lblue2."] ".$red2."INPUT MANUAL\n";
echo $green2."Enter The Number You Want ".$putih2."~> ".$yellow2;
$menu=trim(fgets(STDIN));
echo "\n";
if($menu==1){
while(true){
//BYPASS GVISION
$url = "https://mycryptofaucet.eu/roll.html";
$faucet = curl($url, head($user, $cookie));
	$token = explode("'",explode("var token = '",$faucet)[1])[0];
$url = $url_solvemedia;
$papi = solvemedia($url,$uas);
	$cap = explode('challenge":"', $papi)[1];
	$ca = explode('"', $cap)[0];
$url = "https://api-secure.solvemedia.com/papi/media?c=".$ca.";w=300;h=150;fg=000000;bg=f8f8f8";
$mediac = solvemedia($url,$uas);
	$file=fopen("img.jpg","w");
	fwrite($file,$mediac);
	fclose($file);
	$gmbar = file_get_contents("img.jpg");
	$gam = base64_encode($gmbar);
	$convert = vision("{\"requests\":[{\"image\":{\"content\":\"" .$gam. "\"},\"features\":[{\"type\":\"TEXT_DETECTION\"}]}]}");
	$rp= explode("\"text\": \"Enter the following:\\n", $convert);
	$usd = explode("\\n\"", $rp[1]);
	$otw = $usd[0];
	$ci = preg_replace("/[^a-zA-Z]/", "", $otw);
$url = "https://mycryptofaucet.eu/system/ajax.php";
$data = "a=getBonusRoll&token=".$token."&captcha=0&challenge=".$ca."&response=".$ci;
$claim = curl($url, head($user, $cookie), $data);
	$claim = json_decode($claim);
	$roll = $claim->number;
	$reward = $claim->reward;
if ($reward !== 0){
	echo $lblue2."[".$green2."✓".$lblue2."] ".$green2."Your Roll".$putih2.", ".$yellow2.$roll;
	sleep(1);
	echo $red2." = ";
	sleep(1);
	echo $green2."Reward".$putih2.", ".$yellow2.$reward."\n";
$url = "https://mycryptofaucet.eu/";
$update = curl($url, head($user, $cookie));
	$ftoken = explode('<div class="text-success">',explode('<div class="col-9 no-space">',$update)[1])[0];
        $coin = explode('</b></div></div>',explode('<div class="text-success"><b>',$update)[1])[0];
        echo $lblue2."[".$yellow2."+".$lblue2."] ".$green2.$ftoken.$putih2."~> ".$yellow2.$coin."\n";
for ($i=90;$i>0;$i--){
for ($x=60;$x>0;$x--){
echo "\033[0;32m[\033[1;36m$i\033[0;32m:\033[1;36m$x\033[0;32m] \033[1;35mNext Claim...!!!\r";
sleep(1);
}
}
echo "\r                                                              \r";
}else{
  echo "\r                                                              \r";
  echo $red2."Failed Bypass ".$green2."Try To Bypass Again";
  sleep(3);
  echo "\r                                                              \r";
}
}
}elseif($menu==2){
while(true){
//INPUT MANUAL
$url = "https://mycryptofaucet.eu/roll.html";
$faucet = curl($url, head($user, $cookie));
        $token = explode("'",explode("var token = '",$faucet)[1])[0];
$url = $url_solvemedia;
$papi = solvemedia($url,$uas);
        $cap = explode('challenge":"', $papi)[1];
        $ca = explode('"', $cap)[0];
$url = "https://api-secure.solvemedia.com/papi/media?c=".$ca.";w=300;h=150;fg=000000;bg=f8f8f8";
$mediac = solvemedia($url,$uas);
	file_put_contents("capcha.png",$mediac);
	system('termux-open capcha.png');
	$ci = readline($green2.'Input Captcha  '.$putih2.': '.$yellow2);
$url = "https://mycryptofaucet.eu/system/ajax.php";
$data = "a=getBonusRoll&token=".$token."&captcha=0&challenge=".$ca."&response=".$ci;
$claim = curl($url, head($user, $cookie), $data);
        $claim = json_decode($claim);
        $roll = $claim->number;
        $reward = $claim->reward;
if ($reward !== 0){
        echo $lblue2."[".$green2."✓".$lblue2."] ".$green2."Your Roll".$putih2.", ".$yellow2.$roll;
        sleep(1);
        echo $red2." = ";
        sleep(1);
        echo $green2."Reward".$putih2.", ".$yellow2.$reward."\n";
$url = "https://mycryptofaucet.eu/";
$update = curl($url, head($user, $cookie));
        $ftoken = explode('<div class="text-success">',explode('<div class="col-9 no-space">',$update)[1])[0];
        $coin = explode('</b></div></div>',explode('<div class="text-success"><b>',$update)[1])[0];
        echo $lblue2."[".$yellow2."+".$lblue2."] ".$green2.$ftoken.$putih2."~> ".$yellow2.$coin."\n";
for ($i=90;$i>0;$i--){
for ($x=60;$x>0;$x--){
echo "\033[0;32m[\033[1;36m$i\033[0;32m:\033[1;36m$x\033[0;32m] \033[1;35mNext Claim...!!!\r";
sleep(1);
}
}
echo "\r                                                              \r";
}else{
  echo "\r                                                              \r";
  echo $red2."Failed Bypass ".$green2."Try To Bypass Again";
  sleep(3);
  echo "\r                                                              \r";
}
}
}
