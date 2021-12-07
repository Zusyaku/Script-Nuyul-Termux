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
function tmr($tmr){ 
     $timr=time()+$tmr; 
      while(true): 
      echo "\r                       \r"; 
      $res=$timr-time(); 
      if($res < 1){break;} 
      echo col("Next Claim in ","p").col(date('i:s',$res),"a").col(" seconds","p");
      sleep(1); 
      endwhile;
  }

$cookie=readline(col('Input Cookie :',"h"));
echo$n;
$user_agent=readline(col('Input UserAgent :',"h"));

$ua=array(
	"user-agent: ".$user_agent,
	"cookie: ".$cookie);
c();

echo col("Script by ","h")."iewil".$n2;

$r1=Run('https://cryptowin.io/account',$ua);
$user=explode('</b>!',explode('Hello <b>',$r1)[1])[0];
if($user){
	echo col("Username",'h').col(' ~> ','m').col($user,"p").$n;
	$bal=explode('</h2>',explode('<i class="fa fa-btc" style="font-size:30px;" aria-hidden="true"></i>',$r1)[1])[0];
	echo col("Balance",'h').col(' ~> ','m').col($bal,"p").$n2;
	}else{
		echo col("Failed Login","m").$n;
		exit;
		}

while(true){
	$r2=Run('https://cryptowin.io/faucet',$ua);
	$cap=explode('"',explode('class="form-group"><img src="',$r2)[1])[0];
	if($cap){
		$csrf=explode('">',explode('name="csrfToken" value="',$r2)[1])[0];
		$r3=Run('https://cryptowin.io'.$cap,$ua);
		$file=fopen("faucet.png","w");
		fwrite($file,$r3);
		fclose($file);
		
		shell_exec("termux-open faucet.png");
		
		$captcha=readline(col("Input Captcha ","m").col("~> ","p"));
		$data = "csrfToken=".$csrf."&captcha=".$captcha."&claim=";
		$r4=Run('https://cryptowin.io/faucet',$ua,$data);
		$tmr=explode(' * 1000)',explode('+ (',$r4)[1])[0];
		$notif=explode("',",explode("sendNotify('",$r4)[1])[0];
		if($notif=="success"){
			$suk=explode("');",explode("sendNotify('success', '",$r4)[1])[0];
			$sukses=str_replace("</b>","",str_replace("<b>","",$suk));
			echo col($sukses,'k').$n;
			$r5=Run('https://cryptowin.io/account',$ua);
			$bal=explode('</h2>',explode('<i class="fa fa-btc" style="font-size:30px;" aria-hidden="true"></i>',$r5)[1])[0];
			echo col("New Balance",'h').col(' ~> ','m').col($bal,"p").$n;
			echo str_repeat("~",66);
			echo$n;
			tmr($tmr);
			}elseif($notif=="danger"){
				$dang=explode("');",explode("sendNotify('danger', '",$r4)[1])[0];
				$danger=str_replace("</b>","",str_replace("<b>","",$dang));
				echo col($danger,"rr").$n;
				}
		}else{
			$tmr=explode(' * 1000)',explode('+ (',$r2)[1])[0];
			tmr($tmr);
			}
	}

