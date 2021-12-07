<?php
@error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

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
//        curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
//        curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
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

function head(){
  $cookie=json_decode(file_get_contents("data.json"),true)["Cookie"];
  $h[]="Host: litecoinmania.com";
  $h[]="User-Agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Mobile Safari/537.36";
  $h[]="cookie: $cookie";
 return $h;
}

function solve(){
  $h[]="Host: api-secure.solvemedia.com";
  $h[]="user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Mobile Safari/537.36";
  $h[]="accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
  $h[]="accept: image/avif,image/webp,image/apng,image/svg+xml,image/*,*/*;q=0.8";
  $h[]="sec-gpc: 1";
 return $h;
}

function get($url){
  return curl($url,'',head())[1];
}

function post($url,$data){
  return curl($url,$data,head())[1];
}

function getsolve($url){
  return curl($url,'',solve())[1];
}

function save($data,$data_post){
    if(!file_get_contents($data)){
      file_put_contents($data,"[]");}
    $json=json_decode(file_get_contents($data),1);
    $arr=array_merge($json,$data_post);
    file_put_contents($data,json_encode($arr,JSON_PRETTY_PRINT));
}

function timer(){
     $timr=time()+10;
      while(true):
      echo "\r                                                           \r";
      $res=$timr-time();
      if($res < 1){break;}
if($res==$res){
  $str= str_repeat("\033[1;92m◼",$res)."              \r";
}
      echo " \033[1;97mPlease Wait \033[1;91m".date('i:s',$res)." $str";
      sleep(1);
      endwhile;
}

if(!file_exists("data.json")){
while("true"){
system("clear");
//ban();
  $r=readline("\033[1;97mInput Your Cookie : \033[1;92m");
if(!$r==""){
break;
}
}
$data=["Cookie"=>$r];
  save("data.json",$data);
//$a=next($ran);
}
while("true"){
while("true"){
$url="https://litecoinmania.com/";
$res= get($url);
$balance=explode('<',explode('[LTC] Balance: ',$res)[1])[0];
$wallet=explode('"',explode('control" value="',$res)[1])[0];
$a=explode('"',explode('"text" name="',$res)[1])[0];
if($balance==""){
echo" Blank ... \r";
sleep(3);
break;
}
echo " \033[1;97mBalance System \033[1;90m= \033[1;91m$balance \n";
echo " \033[1;97mWallet LTC     \033[1;90m= \033[1;92m$wallet \n\n";
//echo $a;

$url="https://api-secure.solvemedia.com/papi/_challenge.js?k=o1fEJE5O-uXNuH3D186dKQ5zevCpIsUK;f=_ACPuzzleUtil.callbacks%5B0%5D;l=en;t=img;s=standard;c=js,h5c,h5ct,svg,h5v,v/h264,v/webm,h5a,a/mp3,a/ogg,ua/chrome,ua/chrome86,os/linux,fwv/BfaPmg.fhpl33,jslib/jquery,htmlplus;am=KYNaSZNfM84sddC9k18zzg;ca=script;ts=1636035583;ct=1636036241;th=white;r=0.5831422448086163";
$res= getsolve($url);
$challenge=explode('"',explode('"challenge":"',$res)[1])[0];

$url="https://api-secure.solvemedia.com/papi/media?c=$challenge;w=300;h=150;fg=000000;bg=f8f8f8";
$cap= getsolve($url);
$img="image.png";
$file=fopen($img,"w");
fwrite($file,$cap);
fclose($file);

system("xdg-open image.png");
$captcha=readline(" \033[1;97mEnter Captcha \033[1;90m: \033[1;91m");
$url="https://litecoinmania.com/";
$data="$a=$wallet&adcopy_response=$captcha&adcopy_challenge=$challenge";
$res= post($url,$data);
$success=explode('<',explode('<div class="alert alert-success">',$res)[1])[0];
if($success=="8 satoshi was sent to you "){
echo " \033[1;92m$success \033[1;96mFaucetpay.io \n\n";
timer();
}else{
echo " \033[1;91mCaptcha Invalid, Please Try again \r";
echo "\n";
sleep(3);
}
}
}
