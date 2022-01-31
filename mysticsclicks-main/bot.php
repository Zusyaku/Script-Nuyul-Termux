<?php
error_reporting(0);
$zone = json_decode(file_get_contents("http://ip-api.com/json"),1)["timezone"];if($zone){date_default_timezone_set($zone);}
$a = ["iewil","mysticsclicks","1.0"];
$reg = "https://bit.ly/3g6TJjw";
$yt = "https://youtu.be/xaG7vqgXJ_0";
$server = "https://pastebin.com/raw/JGzBgSKe";
$disable = col("Script mati karena web update / scam!","m")."\nSupport Channel saya dengan cara\nSubscribe ".col("https://www.youtube.com/c/iewil","k")."\nkarena subscribe itu gratis :D\nUntuk mendapatkan info Script terbaru\nJoin grub via telegram ~> ".col("https://t.me/Iewil_G","c")."\nðŸ‡®ðŸ‡© ".col("Family-Team-Function-INDO","b")."\n";Short();bn();

function head(){
	$user=Save('User_Agent');
	$cookie=Save('Cookie');
	return [
	"user-agent: ".$user,
	"cookie: ".$cookie
	];
}
function host(){
	return "http://mysticsclicks.info";
}
function dash(){
	$url=host()."/dashboard";
	$r = Run($url,head());
	$user=explode('</h5>',explode('<h5 class="font-size-15 text-truncate">',$r)[1])[0];
	$bal=explode('</h4>',explode('<h4 class="mb-0">',$r)[1])[0];
	return array($user,$bal);
}
function ptc(){
	$url=host()."/ptc";
	$r = Run($url,head());
	$id = explode("'",explode('/view/',$r)[1])[0];
	return $id;
}
function view($id){
	$url=host()."/ptc/view/".$id;
	return Run($url,head());
}
function verif($csrf,$token,$id){
	$url=host()."/ptc/verify/".$id;
	$data="captcha=recaptchav2&g-recaptcha-response=&csrf_token_name=".$csrf."&token=".$token;
	return Run($url,head(),$data);
}

cookie:
Save('Cookie');Save('User_Agent');
system("termux-open-url ".$yt);
bn();

$r1=dash();
echo col('Username ~> ','h').col($r1[0],"k")."\n";
echo col('Balance ~> ','h').col($r1[1],"k")." USD\n";
line();
menu:
echo col("1 >","m")." Ptc\n";
echo col("2 >","m")." Update Cookie\n";
$pil=readline(col("Input Number ","h").col("> ","m"));
line();
if($pil==1){goto ptc;
}elseif($pil==2){unlink($a[1]."/Cookie");goto cookie;
}else{echo col("Bad Number\n","m")."\n";line();goto menu;}

ptc:
while(true){
	$id=ptc();
	if($id){
		$r2=view($id);
		$tmr=explode(';',explode('var timer=',$r2)[1])[0];
		$csrf=explode('">',explode('name="csrf_token_name" value="',$r2)[1])[0];//488cc5a5697b4f7c86a63b3ecb39548e
	    $token=explode('">',explode('<input type="hidden" name="token" value="',$r2)[1])[0];//oYS9g1RptOM8xniX7adJmN5QAefTPk
	    tmr($tmr);

	    $r3=verif($csrf,$token,$id);
	    $ss=explode('has',explode("Swal.fire('Good job!','",$r3)[1])[0];
	    if($ss){
	    	echo col("Success ~> ","h").col($ss,"k")."\n";
	    	echo col("Balance ~> ","h").col(dash()[1],"k")."\n";
	    	line();
	    }else{
	    	echo "\r";
	    	echo col("Invalid Captcha","m");sleep(2);echo "\r";
	    }
	}else{
		echo col('Ptc habis','m')."\n";line();goto menu;
	}
}
function Run($url, $httpheader = 0, $post = 0, $proxy = 0){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);curl_setopt($ch, CURLOPT_COOKIE,TRUE);
	//curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
	if($post){curl_setopt($ch, CURLOPT_POST, true);curl_setopt($ch, CURLOPT_POSTFIELDS, $post);}if($httpheader){curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);}if($proxy){curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);curl_setopt($ch, CURLOPT_PROXY, $proxy);}curl_setopt($ch, CURLOPT_HEADER, true);$response = curl_exec($ch);$httpcode = curl_getinfo($ch);if(!$httpcode) return "Curl Error : ".curl_error($ch); else{$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));curl_close($ch);return array($header, $body)[1];}}
function Short(){global $a,$server,$disable;$d=date("D");if(file_exists($_SERVER["TMPDIR"]."/".$a[1])){$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".$a[1]));}else{file_put_contents($_SERVER["TMPDIR"]."/".$a[1],$d);$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".$a[1]));}if($d==$day){}else{unlink($a[1]."/key.txt");unlink($_SERVER["TMPDIR"]."/".$a[1]);}$script = file_get_contents($server);$status = explode('|',explode('#'.$a[1].':',$script)[1])[0];if($status == "on"){RETRY:$rand = rand(0,14);$short = json_decode(file_get_contents('https://pastebin.com/raw/EiKBhp8U'),1);$link = file_get_contents($short[$rand]['url']);$pass = trim(explode(' ',explode('Password: ',$link)[1])[0]);$read = file_get_contents($a[1]."/key.txt");if(file_exists($a[1]."/key.txt")){}else{bn();echo col(" Link Password : ","h").col($short[$rand]['short'],'k')."\n";$p = readline(col(" Password : ","h"));if($pass == $p){file_put_contents($a[1]."/key.txt",$p);}else{echo col(" Password salah!","m")."\n";line();goto RETRY;}}}elseif($status == "off" or $status == null){bn();echo col("The script is disabled","m")."\n\n";echo Slow($disable);exit;}}	
function Save($namadata){global $a;if(file_exists($a[1]."/".$namadata)){$datauser=file_get_contents($a[1]."/".$namadata);}else{$datauser=readline("Input ".$namadata." > ");echo "\n";file_put_contents($a[1]."/".$namadata,$datauser);}return $datauser;}
function Col($str,$color){if($color=="rand"){$color=['h','k','b','u','m'][array_rand(['h','k','b','u','m'])];}$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";}
function Slow($msg){$slow = str_split($msg);foreach( $slow as $slowmo ){echo $slowmo; usleep(70000);}}
function Line(){$len = 36;$var = '─';echo str_repeat($var,$len)."\n";}
function Bn(){global $a,$reg;system('clear');$m="\033[1;31m";$p="\033[1;37m";$k="\033[1;33m";$h="\033[1;32m";$u="\033[1;35m";$b="\033[1;34m";$c="\033[1;36m";$mp="\033[101m\033[1;37m";$cl="\033[0m";$mm="\033[101m\033[1;31m";$hp="\033[1;7m";$z=trim(strtoupper($a[1]));$x=18;$y=strlen($z);$line=str_repeat('_',$x-$y);echo "\n{$m}[{$p}Script{$m}]->{$k}[".$h.$z."{$k}]-[".$h.$a[2].$k."]".$p.$line.".\n{$u}.__              .__.__ 	    {$p}| \n{$u}|__| ______  _  _|__|  |	\n|  |/ __ \ \/ \/ /  |  |\n|  \  ___/\     /|  |  |__\n|__|\___  >\/\_/ |__|____/\n        \/\n{$mm}[{$mp}▶{$mm}]{$cl} {$k}https://www.youtube.com/c/iewil\n{$c}{$hp} >_{$cl}{$b} Team-Function-INDO\n{$p}────────────────────────────────────\nLink Reg : ".$reg."\n\n";}
function Tmr($tmr){$timr=time()+$tmr;while(true){echo "\r                       \r";$res=$timr-time(); if($res < 1){break;}echo col(date('i:s',$res),"rand");sleep(1);}}
