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

//ban();
//echo "\n\n";
//if(!file_exists("wallet.json")){
//while("true"){
//system("clear");
//ban();
//  $r=readline("\033[1;97mInput Your Wallet LTC : \033[1;92m");
//if(!$r==""){
//break;
//}
//}
//$data=["Wal1"=>$r];
//  save("wallet.json",$data);
//$a=next($ran);
//}

//function head(){
//$cookie1=json_decode(file_get_contents("data.json"),true)["Cookie"];
  $ua[]="Host: ltcminergame.com";
  $ua[]="upgrade-insecure-requests: 1";
  $ua[]="user-agent: Mozilla/5.0 (Linux; Android 11; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.114 Mobile Safari/537.36";
//  $ua[]="cookie: $cookie1";
// return $h;
//}


function get($url,$ua){
  return curl($url,'',$ua)[1];
}

function post($url,$data,$ua){
  return curl($url,$data,$ua)[1];
}

function timer(){
     $timr=time()+604;
      while(true):
      echo "\r                                                           \r";
      $res=$timr-time();
      if($res < 1){break;}
//if($res==$res){
//  $str= str_repeat("\033[1;92m◼",$res)."              \r";
//}
      echo " \033[1;97mPlease Wait \033[1;91m".date('i:s',$res)."";
      sleep(1);
      endwhile;
}


function save($data,$data_post){
    if(!file_get_contents($data)){
      file_put_contents($data,"[]");}
    $json=json_decode(file_get_contents($data),1);
    $arr=array_merge($json,$data_post);
    file_put_contents($data,json_encode($arr,JSON_PRETTY_PRINT));
}

$MD=strtoupper(readline(" \033[1;97mMode Register Yes or No. Ketik (\033[1;92mY\033[1;97m/\033[1;91mN\033[1;97m) : \033[1;92m"));
//system("clear");

$ni=readline(" \033[1;97mKetik No User \033[1;90mex: \033[1;92m0\033[1;97m-\033[1;92m100 \033[1;90m: \033[1;92m");
system("clear");
$no=$ni;

while("true"){ //startwhile
//LOGIN
$url="https://ltcminergame.com/";
$res= get($url,$ua);
$id1=explode('"',explode('wire:id="',$res)[1])[0];
$cs=explode('&',explode('checksum&quot;:&quot;',$res)[1])[0];
$hhash=explode('&',explode('htmlHash&quot;:&quot;',$res)[1])[0];
$jdl=explode('<',explode('<title>',$res)[1])[0];
$crf=explode('"',explode('csrf-token" content="',$res)[1])[0];
//echo "\t\t \033[102m \033[1;94m$jdl \033[0m\n";
$no=$no+1;
if($no>50){
system("clear");
$no=1;
}
$wallet=json_decode(file_get_contents("wallet.json"),true)["Wal".$no.""];
echo " \033[1;90mLogin User \033[1;92m$wallet \r";
//sleep(2);
//exit;
if($no>50 or $wallet=="stop"){
echo "\n \033[1;91mSCRIPT STOP \n";
exit;
}

$url="https://ltcminergame.com/livewire/message/login";
$data='{"fingerprint":{"id":"'.$id1.'","name":"login","locale":"en","path":"/","method":"GET"},"serverMemo":{"children":[],"errors":[],"htmlHash":"'.$hhash.'","data":{"wallet":null,"response":null,"referral":null},"dataMeta":[],"checksum":"'.$cs.'"},"updates":[{"type":"syncInput","payload":{"id":null,"name":"wallet","value":"'.$wallet.'"}},{"type":"callMethod","payload":{"id":null,"method":"start","params":[]}}]}';
$ua[]="x-csrf-token: $crf";
$ua[]="x-livewire: true";
$ua[]="content-type: application/json";
$ua[]="origin: https://ltcminergame.com";
$ua[]="referer: https://ltcminergame.com/";
 post($url,$data,$ua);

//DASHBOARD
$url="https://ltcminergame.com/account";
$res= get($url,$ua);
$blnltc=explode(';',explode('balance_value = ',$res)[1])[0];
$user=explode('<',explode('font-weight-bold">',$res)[1])[0];
$blnusd=explode('<',explode('fiatBalance">',$res)[1])[0];
if($user==""){
echo " \033[101m \033[1;97mTERDETEKSI SURIKITY ...!!!                      \033[0m\n";
echo " \033[102m \033[1;94mLanjutkan No User dari Sebelumnya. \033[0m\n";
exit; //$no=$no-1;
}
if($blnltc>0.00000500){
$blnltc="\033[102m \033[1;94m$blnltc \033[0m";
$blnusd="\033[102m \033[1;94m$blnusd \033[0m";
}else{
$blnusd="\033[100m \033[1;92m$blnusd \033[0m";
$blnltc="\033[100m \033[1;92m$blnltc \033[0m";
}

//$hhash=explode('&',explode('htmlHash&quot;:&quot;',$res)[4])[0];
//$wdbln=number_format($blnltc,8);
//$maxwd=number_format($blnltc,15);
//$id=explode('"',explode('--><div wire:id="',$res)[1])[0];
//$cs=explode('&',explode('checksum&quot;:&quot;',$res)[4])[0];
echo " \033[1;97mUser \033[1;92m$no \033[1;96m[\033[1;92m$user\033[1;96m]        \n";
echo " \033[1;97mBalance \033[1;91m= $blnltc \033[1;96mLTC \033[1;93m-||- $blnusd \033[1;96mUSD \n";
//echo " $id \n $cs \n $hhash";


//WITHDRAW
if($wdbln>0.00000500){
echo "\033[102m \033[1;94mBalance Sudah Siap Di mWithdraw ...\n";
echo " \033[1;97mCopy Paste \033[1;94m$user \033[0m\n";
}

echo$str= str_repeat("\033[1;92m◼",69)."\n";

if($MD=="Y"){
$rrr =readline(" Silahkan On/Off Mode Pesawat dan Enter ");
//system("rm cookie.txt");
} //endwhile

}
