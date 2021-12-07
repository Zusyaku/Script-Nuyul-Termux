<?php
$putih="\033[1;37m";
$merah="\033[1;31m";
$hijau="\033[1;32m";
$kuning="\033[1;33m";
system("clear");
$header[]="Host: faucetsiteindonesia.web.id";
$header[]="Content-type: text/html; charset=utf-8";
$header[]="accept: application/json, text/javascript, */*; q=0.01";
$header[]="user-agent: Mozilla/5.0 (Linux; Android 11; M2004J19C Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/94.0.4606.71 Mobile Safari/537.36";
$header[]="x-requested-with: XMLHttpRequest";
$header[]="origin: https://faucetsiteindonesia.web.id";
$header[]="referer: https://faucetsiteindonesia.web.id/id/office/auto_claim?start=auto-claim";
$header[]="accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
include"cookie.php";
$header[]="cookie: {$cookie}";
function curl_get($url){
  global $header;

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  return curl_exec($ch);
}function curl_post($link,$data){
global $header;

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $link);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  return curl_exec($ch);
}
function timer($tmr){
  $timr=time()+$tmr;
  while(true):
  echo "\r                       \r";
  $res = $timr-time();
  if($res < 1){
  break;
 }
  echo date('H:i:s',$res);
      sleep(1);
      endwhile;
  }
   function start(){
  return curl_get("https://faucetsiteindonesia.web.id/id/office/auto_claim?start=auto-claim");
 }
   function claim($key){
  return curl_post($key,"");
 }
echo "\n{$putih}[[";usleep(25000); echo "[["; usleep(25000); echo "[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"{$kuning}faucet indo{$putih}";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"\n";
echo "\n{$hijau}cr";usleep(25000);echo"ea";usleep(25000);echo"to";usleep(25000);echo"r ";usleep(25000);echo"{$merah}[{$kuning}m";usleep(25000);echo"rm";usleep(25000);echo"4j";usleep(25000);echo"or";usleep(25000);echo"{$merah}]";
echo "\n{$hijau}yo";usleep(25000);echo"ut";usleep(25000);echo"ub";usleep(25000);echo"e ";usleep(25000);echo"{$merah}[{$kuning}M";usleep(25000);echo"R.";usleep(25000);echo"M4";usleep(25000);echo"JO";usleep(25000);echo"R.";usleep(25000);echo"EX";usleep(25000);echo"E{$merah}]";usleep(25000);echo"";
echo "\n{$hijau}wh";usleep(25000);echo"at";usleep(25000);echo"sa";usleep(25000);echo"p ";usleep(25000);echo"{$merah}[{$putih}+";usleep(25000);echo"62";usleep(25000);echo" {$kuning}8";usleep(25000);echo"13";usleep(25000);echo"27";usleep(25000);echo"75";usleep(25000);echo"39";usleep(25000);echo"09";usleep(25000);echo"{$merah}]\n";
echo "\n{$putih}[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"[[";usleep(25000);echo"{$merah}###";usleep(25000);echo"##";usleep(25000);echo"##";usleep(25000);echo"####{$putih}]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]]";usleep(25000);echo"]\n\n\n";
sleep(3);
system("xdg-open https://youtube.com/channel/UChTEcPlws4r7kmqWMTN7LbA");
sleep(5);
function dash(){
return curl_get("https://faucetsiteindonesia.web.id/id/office/dashboard");}
while(true){	$bt=explode('"text-white text-uppercase"><b>',dash());
	$btn=explode('</b>',$bt[1]);
 $start=start();
//reward msg
$ms=explode("success('",$start);
$msg=explode("')",$ms[1]);
//get key
$key=explode('"',start())[457];
//start claim
$asw=curl_post("https://faucetsiteindonesia.web.id/id/office/api_arcade?key=n9Kie16h","");
//sinonim
$msg=$msg[0];
//stat
$stat=explode('"',$asw)[3];

if($stat=='success'){
echo "\n{$merah}»{$hijau}{$msg} {$putih}saldo {$kuning}{$btn[0]}\n";
}else{
echo "\n{$putih}»{$merah}kesalahan {$putih} saldo {$kuning}{$btn[0]}\n";
}
echo timer(60);
}
