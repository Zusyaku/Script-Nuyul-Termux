<?php
@error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
system('clear');


$ping1 = url("https://ipsaya.com/");
$a = explode('value="',$ping1);
$ip = explode('"',$a[1]);
//echo $ip[0];
$b = explode('ISP :</b><br>',$ping1);
$isp = explode('<',$b[1]);
$c = explode('Kota :</b><br>',$ping1);
$kota = explode('<',$c[1]);
$d = explode('title="',$ping1);
$ng = explode('"',$d[1]);

echo " \033[1;97m•Your Ip Address \033[1;91m".$ip[0]."\n";
echo " \033[1;97m•Your ISP        \033[1;92m".$isp[0]."\n";
echo " \033[1;97m•Your City       \033[1;92m".$kota[0]."\n";
echo " \033[1;97m•Your Country    \033[1;92m".$ng[0]."\n\n";
sleep(3);
echo " \033[1;91mAll your data is connected to the \033[1;92mSugiono Official \033[1;91mserver \n";
sleep(3);
//exit;
//system("rm cookie.txt");
date_default_timezone_set("Asia/Jakarta");

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

system("clear");

$SC = "1";

//$ui=url("https://semawur.com/st/?api=84fa500a17a33c041d620b2c53805886d5cd0fc3&url=destinationlink.com");
$res = url("https://controlc.com/06b5cf63");
//echo $res."\n";
//exit;
$link1 = explode('Link: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('[tpcolor=#FF0000]',$res);
$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
//$pass = "A";
$read = file_get_contents("key.txt");
system('clear');
if ($pass=="off"){
$o = "\033[1;32m[\033[1;31mOFFLINE\033[1;32m]";
}else{
$o = "\033[1;32m[ONLINE]";
}
if ($pass=="update"){
$o = "\033[1;32m[\033[1;91mUpdate\033[1;92m]";
}
echo $baner = "
\033[1;31m ██████╗ ██████╗ ██╗   ██╗██╗██████╗       ██████╗  ██╗ \033[1;92m$o\033[1;91m
██╔════╝██╔═══██╗██║   ██║██║██╔══██╗      ╚════██╗███║
██║     ██║   ██║██║   ██║██║██║  ██║█████╗ █████╔╝╚██║\033[1;97m
██║     ██║   ██║╚██╗ ██╔╝██║██║  ██║╚════╝██╔═══╝  ██║
╚██████╗╚██████╔╝ ╚████╔╝ ██║██████╔╝      ███████╗ ██║
 ╚═════╝ ╚═════╝   ╚═══╝  ╚═╝╚═════╝       ╚══════╝ ╚═╝ SCRIPT V\033[1;92m$SC\n";
//echo $HJ2." ◼ SILAHKAN COPAS LINK. JANGAN LUPA KOPI DAN ROKOK DI SIAPKAN\n";
//echo $green2." •SILAHKAN AMBIL PASSWORD DI DALAM VIDEO YT KAKEK.\n";
//echo $red2." •(The password is in the video)\n";
//echo "\033[1;31m ◼$P2 Link Password :$HJ2 $link[0]\n";

if ($pass == 'update'){
      echo "\033[1;92m ◼ \033[1;91mSCRIPT Anda Sudah Tidak Terhubung ke Server \033[1;92mSugiono Official \n";
      echo "\033[1;92m ◼ \033[1;97mSilahkan Copy Paste Link \n\n";
      echo "\033[1;92m ◼ \033[1;97mLink Script Versi Update \033[1;92m$link[0]\n\n";
      exit;
}

if ($link[0]==""){
echo " \033[1;91mCONNECTING LOST...!!!\n\n";
exit;
}
if ($pass == 'off'){

      echo "\033[1;92m ◼ \033[1;91mSCRIPT SEDANG OFFLINE \033[1;90matau \033[1;91mMAINTENANCE \n";
      exit;
}else{
if($read == $pass){
      echo "\033[1;90m ▶ \033[1;92mUPLOAD Password \r";
      sleep(5);
       system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
      sleep(1);
}
elseif($read != $pass){
      //echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");
echo "\033[1;91m ◼\033[1;97m Link Password :\033[1;92m $link[0]\n";
echo "\033[1;91m ◼ \033[1;37mMASUKAN PASSWORD DI SINI : \033[1;92m";
$p = trim(fgets(STDIN));

echo "\n \033[1;97mLoading \033[1;31m•\033[1;32m>\r";
sleep(1);
echo "\033[1;97m Loading \033[1;31m•\033[1;32m> \033[1;31m•\033[1;32m>\r";
sleep(1);
echo "\033[1;97m Loading \033[1;31m•\033[1;32m> \033[1;31m•\033[1;32m> \033[1;31m•\033[1;32m>\r";
sleep(1);
if($pass == $p){
        fwrite($save, $p);
        echo "\033[1;90m ◼ \033[1;92mOPEN SCRIPT SUCCESS            \r";
        fclose($save);
        sleep(5);
        system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
        sleep(1);
        }else{
        echo "\033[1;90m ◼ \033[1;91mGAGAL...!!!, MASUKIN PASSWORD YG BENER DONG. SILAHKAN COBA LAGI\n";
        exit;
        }
        }
}
sleep(1);
echo "\033[1;97m   Silahkan Klik \033[1;32mENTER \033[1;37mUntuk Melanjutkan ";
$kkk = trim(fgets(STDIN));
system("clear");

function curl($url, $post = 0, $httpheader = 0, $proxy = 0){ // url, postdata, http headers, proxy, uagent
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_COOKIE,TRUE);
        curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
        curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
        if($post){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if($httpheader){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        }
        if($proxy){
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        }
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch);
        if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            return array($header, $body);
        }
    }
function save($data,$data_post){
    if(!file_get_contents($data)){
      file_put_contents($data,"[]");}
    $json=json_decode(file_get_contents($data),1);
    $arr=array_merge($json,$data_post);
    file_put_contents($data,json_encode($arr,JSON_PRETTY_PRINT));
}

function head(){
  $h[]="content-type: application/x-www-form-urlencoded";
  $h[]="user-agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36";
  return $h;
}

function get(){
  $url="https://iqfaucet.com/";
  return curl($url,'',head())[1];
}

function login($wl,$token,$header){
  $url="https://iqfaucet.com/";
  $data=http_build_query(array("address"=>$wl,"token"=>$token));
  return curl($url,$data,$header)[1];
}

function verif($ve,$token,$header){
  $url="https://iqfaucet.com/verify.php";
  $data=http_build_query(array("verifykey"=>$ve,"token"=>$token));
  return curl($url,$data,$header)[1];
}

function captcha($api){
$green2="\e[1;32m";$yellow2="\e[1;33m";
$kirim= file_get_contents("http://2captcha.com/in.php?key=".$api."&method=userrecaptcha&googlekey=6LdGwpwaAAAAAMlDMXJobTE_AEjY7zB9vkea0Qi3&pageurl=https://iqfaucet.com/verify.php");
$first = array($kirim);
$result= explode('OK|',$first[0]);
$hello = $result[1];
$ambil="http://2captcha.com/res.php?key=".$api."&action=get&id=".$hello;
while(true){
timer(70);
$getting = file_get_contents($ambil);
$second = array($getting);
if($getting=="CAPCHA_NOT_READY"){
continue;
}elseif($getting=="ERROR_WRONG_CAPTCHA_ID"){
echo"\033[1;91m Saldo 2captcha habis ...\n";
exit;
}else{
$secondresult = explode('OK|',$second[0]);
$hasil=$secondresult[1];
echo " \033[1;92mSukses Verif ReCaptcha \n";
break;
 }
}
return $hasil;
}


function ban($msg=null)
{
$SC = "1";
echo "\033[1;92m";
system("toilet --width 65 -f pagga -F border  'BYPASS  ReCaptcha'");
echo $bn="\033[1;91m @@@@@@ @@@  @@@  @@@@@@@  @@@  @@@@@@  @@@  @@@  @@@@@@$green2 SERVER ON
\033[1;31m!@@     @@!  @@@ !@@       @@! @@!  @@@ @@!@!@@@ @@!  @@@
 !@@!!  @!@  !@! !@! @!@!@ !!@ @!@  !@! @!@@!!@! @!@  !@!
    !:! !!:  !!! :!!   !!: !!: !!:  !!! !!:  !!! !!:  !!!
 ::.: :   :.:: :   :: :: :  :    : :. :  ::    :   : :. :
\033[1;37m SCRIPT VERSION\033[1;92m $SC ";
echo "\033[1;97m                DATE \033[1;92m".date("d.m.Y ")."\033[1;97m   TIME \033[1;92m".date("H:i:s")."\n";
echo " ===============================\033[1;31m404\033[1;32m===============================";
echo $baner2 = "
\033[1;97m •Creator        :\033[1;92m Kakek Sugiono
\033[1;97m •Support By     :\033[1;92m All Member
\033[1;97m •Group Tele     :\033[1;92m @SugionoShatoshi
\033[1;97m •Channel YT     :\033[1;92m Sugiono Official
\033[1;97m •Donation Doge  :\033[1;91m DFvVJc9pbty6Jrx94QuB7Da9LAsz7jnsso
\033[1;97m =================================================================
\033[1;92m •SCRIPT FREE NOT FOR SALE\n";
//echo "\033[1;95m •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••\n\n";
  echo str_repeat("•",66)."\n";
}


function timer($tmr){ 
     $timr=time()+$tmr; 
      while(true): 
      echo "\r                            \r"; 
      $res=$timr-time(); 
      if($res < 1){break;} 
      echo "\033[1;97m Mohon Tunggu \033[1;92m".date('H:i:s',$res); 
      sleep(1); 
      endwhile;
}

function claim($re,$ve,$token,$header){
  $url="https://iqfaucet.com/index.php?c=1";
  $data=http_build_query(array("g-recaptcha-response"=>$re,"selectedCaptcha"=>1,"verifykey"=>$ve,"token"=>$token));
  return curl($url,$data,$header)[1];
}
function acu($header){
  $url="https://iqfaucet.com/account.php";
  return curl($url,'',$header)[1];
}
function fp($header){
  $url="https://iqfaucet.com/account.php?withdr=fp";
  return curl($url,'',$header)[1];
}
if(!file_exists("walet.json")){
  system('clear');
while("true"){
ban("sugiono");
  $a=readline("\033[1;97mWallet Doge : \033[1;92m");
if(!$a==""){
break;
}
system('clear');
}
while("true"){
system('clear');
ban("sugiono");
  $d=readline("\033[1;97mApiKey 2Captcha : \033[1;92m");
if(!$d==""){
break;
}
system('clear');
}
  $data=["wallet"=>$a,"api"=>$d];
  save("walet.json",$data);
//keys();
}

system('clear');
$wal=json_decode(file_get_contents('walet.json'),1);
ban('sugiono');
//keys();
while("true"){
//keys();
$get=get();
$t=explode("'/>",explode("<input type='hidden' name='token' value='",$get)[1])[0];
$log=login($wal['wallet'],$t,array_merge(head(),array("referer: https://iqfaucet.com?ref=231150")));
$ve=explode("'/>",explode("<input type='hidden' name='verifykey' value='",$log)[1])[0];
$to=explode("'/>",explode("<input type='hidden' name='token' value='",$log)[1])[0];
$veri=verif($ve,$to,array_merge(head(),array("referer: https://iqfaucet.com/index.php")));
$ve=explode("'/>",explode("<input type='hidden' name='verifykey' value='",$veri)[1])[0];
$to=explode("'/>",explode("<input type='hidden' name='token' value='",$veri)[1])[0];
$google=captcha($wal['api']);
$clm=claim($google,$ve,$to,array_merge(head(),array("referer: https://iqfaucet.com/verify.php")));
preg_match("#h3>Address</h3>(.*?)<h3>Balance</h3>
	<h2>(.*?)</h2>#i",$clm,$as);
preg_match_all("#<div class='alert alert-success' role='alert'>(.*?)<br />You can claim again Now!</div>#i",$clm,$succes);
$xc=explode("<div class='alert alert-success' role='alert'>",$succes[1][0])[1];
echo " \033[1;97mWallet: \033[1;92m$as[1] \n";

if($as[2] > '0.00000000 DOGE'){
echo " \033[1;97mBalance: \033[1;92m$as[2] \n";
}elseif($as[2]== '0.00000000 DOGE'){
echo " \033[1;97mBalance: \033[1;92m$as[2] \n";
}
if(!$xc==""){
echo " \033[1;97mStatus \033[1;92m$xc \n";
}

if($as[2] >= "0,00013757"){
  $ac=acu(array_merge(head(),array("referer: https://iqfaucet.com/index.php")));
  $fp=fp(array_merge(head(),array("referer: https://iqfaucet.com/account.php")));
  $cy=explode('</div>',explode('<div class="alert alert-success">',$fp)[1])[0];
  echo strtoupper($cy)."\n";
  echo str_repeat("◼",66)."\n";
}
}
