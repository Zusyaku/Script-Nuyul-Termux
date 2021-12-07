<?php
error_reporting(0);
//warna
function col($str,$color){
$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";}
//etc
$n = "\n";$n2 = "\n\n";$t = "\t";$r="\r                                                              \r";
function c(){system('clear');}
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

c();

$url = readline('Input Url : ');
echo$n;
$cookie = readline('Input cookie : ');
echo$n;
$user_agent = readline('Input user-agent : ');

c();
echo col('Script by ','h').col('iewil','p').$n2;

$ua=array();
$ua[]="cookie: ".$cookie;
$ua[]="user-agent: ".$user_agent;

while(true){
    $r1=Run($url,$ua);
    $ti = explode(';',explode('var count = ', $r1)[1])[0];
    
    if($ti == ""){
        echo col("SESION END / UPDATE COOKIE",'rr').$n;
        exit;
        }
    
    preg_match_all('#<span class="label label-success">(.*?)</span>#is', $r1, $hasil);
    
    if($hasil[1]){
        for($i=0;$i<count($hasil[1]);$i++){
            echo col($hasil[1][$i],'h')."\n";
            }
        echo str_repeat('~',66).$n;
        
        for($x=60;$x>0;$x--){
            echo $r;
            echo col("Next Payout In ",'p').col($x,'a').col(" Second ",'p');
            sleep(1);
            }
     }else{
        for($x=60;$x>0;$x--){
            echo $r;
            echo col("Next Payout In ",'p').col($x,'a').col(" Second ",'p');
            sleep(1);
            }
     }
echo $r;
}

