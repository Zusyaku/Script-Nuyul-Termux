<?php
system('clear');
error_reporting(0);
$json=json_decode(file_get_contents(".spesifikasi-sc.json"),1);
$script=$json["sc"];
$version=$json["ver"];
$green = "\e[1;32m";
$blue = "\e[1;34m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
$purple = "\e[1;35m";
$gray = "\033[0;90m";  
function an($str){ 
    $arr = str_split($str); 
    foreach ($arr as $az){ 
    echo $az; 
    usleep(10000); 
    }
    }
function timer($tmr){
$hijaut = "\e[1;32m";
$meraht = "\e[1;31m";
$kuningt = "\e[1;33m";
$putiht = "\e[1;37m";
$birut = "\e[1;34m";
$ungut = "\e[1;35m";
$birumudat = "\e[1;36m";
$warna = [$ungut,$birumudat,$hijaut,$ungut,$birut];
  $timr=time()+$tmr;
  while(true):
  echo "\r                           \r";
  $res = $timr-time();
  if($res < 1){
  break;
 }
  echo $putiht."[".$warna[array_rand($warna)]."•••".$putiht."] ".gmdate("H:i:s", $res);
      sleep(1);
      endwhile;
  }
function curl(
$url,$httpheader=0,$post=0,$request=0,$proxy=0){ 
// url, httpheaders, postdata, request, proxy
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
      if($httpheader){
      curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
      }
      if($post){
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      }
      if($request){
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $request);
      }
      if($proxy){
      curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
      curl_setopt($ch, CURLOPT_PROXY, $proxy);
      curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);}
    curl_setopt($ch, CURLOPT_HEADER, true);
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch);
      if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
    $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    curl_close($ch);
return array($header, $body);}
}
function head(){
$ua=array();
$ua[]="Host: faucet.earnator.com";
$ua[]="Connection: keep-alive";
$ua[]="User-Agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3A.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/76.0.3809.111 Mobile Safari/537.36";
$ua[]="Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3";
$ua[]="Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
return $ua;}
function get(){
$url="https://faucet.earnator.com/";
return curl($url,head());}
function login(){
global $email,$token_login;
$mail=str_replace("@","%40",$email);
$url="https://faucet.earnator.com/auth/authenticate";
$data="_token={$token_login}&email={$mail}";
return curl($url,head(),$data);}
function db(){
$url="https://faucet.earnator.com/user/dashboard";
return curl($url,head());}
function faucet(){
$url="https://faucet.earnator.com/user/faucet";
return curl($url,head());}
function verify(){
global $token,$bot1,$bot2,$bot3;
$url="https://faucet.earnator.com/user/faucet";
$data="_token={$token}&antibotlink={$bot3}+{$bot2}+{$bot1}";
return curl($url,head(),$data);}
//LOGIN
$get=get()[1];
$token_login=explode('">',explode('<input type="hidden" name="_token" value="',$get)[1])[0];
if(file_exists("email")){
$email=file_get_contents("email");
}else{
$email=readline("Masukan Email FaucetPay : ");
file_put_contents("email",$email);
}
$login=login()[1];
//DASHBOARD 
$db=db()[1];
$bal=explode('</span>',explode('<span class="ml-1">',$db)[1])[0];
system('clear');
an("{$gray}══════════════════════════════════════════════════\n");
an("                 {$red}「{$purple}ジュンさん{$red}」\n");
an("{$gray}══════════════════════════════════════════════════\n");
an("{$white}TELEGRAM ⇒ {$cyan}@MrJinxxx\n");
an("{$red}PARTNER : {$purple}@ItsMeXan \n");
an("{$red}SCRIPT  : {$green}{$script}\n");
an("{$red}VERSI   : {$green}{$version} \n");
an("{$red}Donate  : {$green}TXz6TPeV5DPKNUoib1CVeK4KhwxHGtKLUL[TRX] \n");
an("{$red}Support : {$green}X-Jowo Friends\n");
an("{$gray}══════════════════════════════════════════════════\n");
an("{$white} Welcome Sir \n");
an(" {$red}~> ".$white.$bal." Coins\n");
echo "\n";
//FAUCET BYPASS ANTIBOTLINK
ulang:
$faucet=faucet()[1];
$token=explode('">',explode('<input type="hidden" name="_token" value="',$faucet)[1])[0];
$bot1=explode('">',explode('data-abl-solution="',$faucet)[1])[0];
$bot2=explode('">',explode('data-abl-solution="',$faucet)[2])[0];
$bot3=explode('">',explode('data-abl-solution="',$faucet)[3])[0];
$claim=verify()[1];
$if_claim=explode(' AntiBotLink verification.">',explode('<span class="flex items-center mt-1 text-xs tracking-wide text-red-500" message="',$claim)[1])[0];
if($if_claim=="Invalid"){
echo "\r {$red}Invalid \r";
timer(10);
goto ulang;
}else{
$db1=db()[1];
$bal1=explode('</span>',explode('<span class="ml-1">',$db1)[1])[0];
an(" {$white}Success Bypass Antibotlink\n");
an(" {$red}~> ".$cyan.$bal1." {$white}Coins\n");
timer(600);
goto ulang;
}