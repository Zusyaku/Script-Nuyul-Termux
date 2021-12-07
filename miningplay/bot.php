<?php


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
  $h[]="Content-Type: application/x-www-form-urlencoded";
  $h[]="Host: visa-to-indi-ru.1gb.ru";
  $h[]="User-Agent: okhttp/3.14.9";
 return $h;
}

function get($url){
  return curl($url,'',head())[1];
}

function post($url,$data){
  return curl($url,$data,head())[1];
}

while("true"){
$url="http://visa-to-indi-ru.1gb.ru/scripts/green_miner/get_user_updated_v2.php?REF_CODE=10488234&ID=104882340426637936540&NAME=Aow%20Ipung";
$email=json_decode(get($url))->bitcoinmininglite[0]->EMAIL;
$balance=json_decode(get($url))->bitcoinmininglite[0]->VALUE;
echo " Email Account = $email \n";
echo " Balance BTC   = $balance Satoshi \n";

$claim = 100;
$c=$balance+$claim;

$url="http://visa-to-indi-ru.1gb.ru/scripts/green_miner/update_value.php";
$data="REF_CODE=10488234&VALUE=$c";
$result= json_decode(post($url,$data))->message;
echo " Claim Satoshi $result \n";
}
