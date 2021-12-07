<?php
error_reporting(0);
//warna
function col($str,$color){
$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";}
//etc
function c(){system('clear');}$n = "\n";$n2 = "\n\n";$t = "\t";$r="\r                                                              \r";
//curl
function Run($url, $ua, $data = null) {
    while (True){
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => 1,));
        if ($data) {
            curl_setopt_array($ch, array(
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => $data,));
        }
        curl_setopt_array($ch, array(
            CURLOPT_HTTPHEADER => $ua,
            CURLOPT_SSL_VERIFYPEER => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_COOKIEJAR => 'cookie.txt',
            CURLOPT_COOKIEFILE => 'cookie.txt',));
        $run = curl_exec($ch);
        curl_close($ch);
        if ($run) {
            return $run;
        } 
    }
}
//timer
function tmr($time,$r,$y){ 
	for($x=$time;$x>-0;$x--){
echo$r;
echo str_repeat(" ",17).col("$y:","p").col($x,"p").col(" Seconds","m").col(" For","k").col(" The ","h").col("Next ","b").col("Claim","u");
sleep(1);
}
echo$r;}


$coins = array(
"DOGE","NEO","ADA","DGB","EXS","EXG","BCN","LSK","PPC","XRP","TRX","WAVES","ETC","RDD","XTZ","BCH","DASH","LTC","ETH","XMR","ZEC","STRAX","stop");
$coin = current($coins);

c();
echo col('Script by ','h').col('iewil','p').$n2;

$user_agent=readline(col('Input user-agent : ','c'));
$cookie=readline(col('Input Cookie : ','c'));

c();
	echo col('Script by ','h').col('iewil','p').$n;

$ua = array();
$ua[] = "User-Agent: ".$user_agent;
$ua[] = "Cookie: ".$cookie;


while(true){
if($coin == "stop"){
echo str_repeat('~',66);
echo $n;
tmr(60,$r,'00');
$coin = reset($coins);
}
$r1=Run('https://starfaucet.net/Autofaucet/claim.php?coin='.$coin,$ua);
$suc = trim(explode('</span>',explode('<span>',$r1)[1])[0]);
if($suc=="Session is expired" or $suc=="starfaucet.net" or $suc=="We encountered an error: Time frame not expired"){
	}else{
	echo col($suc,"h").$n;
	}
	$coin = next($coins);
}
