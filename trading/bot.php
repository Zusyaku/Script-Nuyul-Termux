<?php
include("cfg.php");
system("clear");
$private=filesize('/sdcard/trading/bot.php');
$putih="\033[1;37m";
$merah="\033[1;31m";
$hijau="\033[1;32m";
$kuning="\033[1;33m";
$header[]="Host: ezdoubler.io";
//$header[]="user-agent: Mozilla/5.0 (Linux; Android 11; M2004J19C Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/90.0.4430.210 Mobile Safari/537.36";
$header[]="x-requested-with: XMLHttpRequest";
$header[]="referer: https://ezdoubler.io/home.php";
$header[]="cookie: ".$cookie;

function post($link,$data){
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

function invest($amount,$predic){
  $oke=post("https://ezdoubler.io/home.php","investamount={$amount}&prediction={$predic}");
 return "\nsuccess buy ";
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
function get($url){
  global $header;

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  return curl_exec($ch);
}

function predic1(){
  return get("https://ezdoubler.io/home.php");
 }
function predic2(){
  return get("https://ezdoubler.io/a_btc_price_now.php");
 }
$headers[]="user-agent: Mozilla/5.0 (Linux; Android 11; M2004J19C Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/90.0.4430.210 Mobile Safari/537.36";
$headers[]="accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng;q=0.8,application/signed-exchange;v=b3;q=0.9";
$headers[]="Host: pastebin.com";
function gez($url){
  global $headers;

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  return curl_exec($ch);
 }

function ragenah(){
 return gez("https://pastebin.com/raw/9kXDyvGB");}
																				                                                                                                                                                                                                                                            if($private==ragenah()){																							                                                                                                                                                                                                                                  }else{																						                                                                                                                                                                                                                                       echo "\nfile modified | creator asli: mr.m4jor.exe";																																		                                                                                                                                                                                       exit;}
echo "\n{$putih}[[[[[[[[[[[[[[[{$hijau}AUTO TRADE{$putih}]]]]]]]]]]]]]]]\n";
echo "\n{$hijau}creator: {$putih}mrm4jor";
echo "\n{$hijau}youtube: {$putih}MR.M4JOR.EXE";
echo "\n{$hijau}note: {$merah}jgn dijual,dangan rekode\n";
echo "\n{$putih}[[[[[[[[[[[[[[[\\\\\\\\{$merah}EZ{$putih}////]]]]]]]]]]]]]]]\n\n";

while(true){
$rand=rand(1,16);
$carihoki=array("1","0","1","1","0","1","0","0","0","1","1","0","1","0","0","0","1",);
echo invest($koin,$carihoki[$rand]);
 $awa=explode('"mycash">',predic1());
 $awal=explode('</span>',$awa[1]);
 $hargaawal=$awal[0];
  if($carihoki[$rand]=="1"){
echo "{$hijau}up\n";
  }elseif($carihoki[$rand]=="0"){
echo "{$merah}down\n";
  }else{
echo "{$kuning}eror\n";
}
echo timer(60);
 $i=explode('endInvestmentId(',predic1());
 $id=explode(');',$i[1]);
 $a=get("https://ezdoubler.io/a_ended_investment_info.php?id={$id[0]}");
$toke=explode('"tokenbalance">',predic1());
$token=explode('</span></',$toke[1]);
 $akhi=explode('"mycash">',predic1());
 $akhir=explode('</span>',$akhi[1]);
 $hargaakhir=$akhir[0];
  if($hargaakhir>$hargaawal){
echo "{$putih}status: {$hijau}profit {$putih}| token=> {$hijau}".$token[0]."{$putih} balance: {$hijau}".$hargaakhir;
 }else{
echo "{$putih}status: {$merah}loss {$putih}| token=> {$hijau}".$token[0]."{$putih} balance: {$hijau}".$hargaakhir;
}
echo "\n{$putih}~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~";
}
