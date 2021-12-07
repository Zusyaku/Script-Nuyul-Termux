<?
//error
error_reporting(0);
//timezone
date_default_timezone_set('UTC');
//warna
function col($str,$color){
$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";}
//etc
function c(){system('clear');}$n = "\n";$n2 = "\n\n";$t = "\t";$r="\r                                                              \r";
//curl
function Run($url, $ua, $data = null){
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
            return $run;
		}
	}
function tmr($tmr){ 
     $timr=time()+$tmr; 
      while(true): 
      echo "\r                       \r"; 
      $res=$timr-time(); 
      if($res < 1){break;} 
      echo col("Play Game ≽ ","p").col(date('i:s',$res),"a");
      sleep(1); 
      endwhile;
	}
function bn(){
	echo "\t".col("Script by ","h")."iewil"."\n\n";
	}
	c();
	bn();
	$cookie=readline(col('Input Cookie :',"h"));
	echo$n;
	$user_agent=readline(col('Input UserAgent :',"h"));
	
	$ua=array(
		"user-agent: ".$user_agent,
		"cookie: ".$cookie);
c();
bn();

$r1=Run('https://bitstar.my.id/backoffice/dashboard',$ua);
$user=trim(explode('</p>',explode('<img src="//bitstar.my.id/backoffice/theme/assets/img/app/user.svg" class="mr-1" style="width: 20px">',$r1)[1])[0]);
$bal=str_replace('<p>','',trim(explode('</p>',explode('<div class="card-body py-1">',$r1)[1])[0]));
if($user){
	echo col("Username",'h').col(' ~> ','m').col($user,"p").$n;
	echo col("Balance",'h').col(' ~> ','m').col($bal,"p").$n2;
	echo$n;
	}else{
		echo col('Failed Login','rr');
		
		}
	$tmr=trim(explode(';',explode('var earning_seconds =',$r1)[1])[0]);
	$arca=explode('";',explode('var url = "//bitstar.my.id/backoffice/api_arcade?key=',$r1)[1])[0];//n9Kie16h
	
	while(true){
		tmr($tmr);
		$r2=json_decode(Run('https://bitstar.my.id/backoffice/api_arcade?key='.$arca,$ua));
		$stat=$r2->status;
		
		if($stat == "success"){
			echo col('You earned 0.00000001 BTC','h').$n;
			
			$r3=Run('https://bitstar.my.id/backoffice/dashboard',$ua);
			$bal=str_replace('<p>','',trim(explode('</p>',explode('<div class="card-body py-1">',$r3)[1])[0]));
			echo col('New Balance','b').col(" ≽ ","m").col($bal,'k').$n;
			echo str_repeat('~',66).$n;
			
			}elseif($stat == "error"){
				echo col('No More Game Arcade','m');
				exit;
				}
		}
