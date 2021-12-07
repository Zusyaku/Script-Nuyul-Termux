<?php
error_reporting(0);
function col($str,$color){
	if($color==5){$color=['h','k','b','u','m'][array_rand(['h','k','b','u','m'])];}
	$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";}
function Run($url, $ua, $data = null) {
    while (True){
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => 1,));
        if($data){
            curl_setopt_array($ch, array(
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => $data,));
                }
        curl_setopt_array($ch, array(
            CURLOPT_HTTPHEADER => $ua,
            CURLOPT_SSL_VERIFYPEER => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_ENCODING => 'gzip',
            CURLOPT_COOKIEJAR => 'cookie.txt',
            CURLOPT_COOKIEFILE => 'cookie.txt',));
        $run = curl_exec($ch);
        curl_close($ch);
        if($run){
            return $run;
        }else{
            echo col("Check your connection!","rr")."\n";
            sleep(2);
            continue;
        }
    }
}
function tmr($tmr){
     $timr=time()+$tmr; 
      while(true): 
      echo "\r                       \r"; 
      $res=$timr-time(); 
      if($res < 1){break;} 
      echo col(date('H:i:s',$res),5);
      sleep(1); 
      endwhile;
      }

function RecaptchaV3($siteurl,$sitekey,$apikey){
	$ua=array();
	$ua[]="Host: api.anycaptcha.com";
	$ua[]="Content-Type: application/json";
	
	$data=json_encode(array("clientKey"=>$apikey,"task"=>array("type"=>"RecaptchaV3TaskProxyless","websiteURL"=>$siteurl,"websiteKey"=>$sitekey,"minScore"=>0.3,"pageAction"=>"verify","isEnterprise"=>false)));
	$Create=json_decode(Run('https://api.anycaptcha.com/createTask',$ua,$data));
	if($Create->errorId == '1'){
		return 0;
	}else{
		$Task=$Create->taskId;
		while(true){
			$base=json_encode(array("clientKey"=>$apikey,"taskId"=>$Task));
			$Result=json_decode(Run('https://api.anycaptcha.com/getTaskResult',$ua,$base));
			if($Result->status=='ready'){
				return $Result->solution->gRecaptchaResponse;
			}elseif($Result->status=='processing'){
				tmr(25);
			}else{
				return 0;
				break;
			}
		}
	}
}
