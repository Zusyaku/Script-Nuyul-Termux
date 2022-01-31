<?php
error_reporting(0);
$a = ["iewil","winoearn","1.1"];
$reg = "https://bit.ly/3g9ERAR";
$server = "https://pastebin.com/raw/JGzBgSKe";
$yt = "https://youtu.be/1OxzsQoN28E";
$disable = col("Script mati karena web update / scam!","m")."\nSupport Channel saya dengan cara\nSubscribe ".col("https://www.youtube.com/c/iewil","k")."\nkarena subscribe itu gratis :D\nUntuk mendapatkan info Script terbaru\nJoin grub via telegram ~> ".col("https://t.me/Iewil_G","c")."\nðŸ‡®ðŸ‡© ".col("Family-Team-Function-INDO","b")."\n";
$zone = json_decode(file_get_contents("http://ip-api.com/json"),1)["timezone"];if($zone){date_default_timezone_set($zone);}

function Host(){
	return "https://winoearn.com";
}
function head(){
	$cookie = Save('Cookie');
	$user = Save('User_Agent');
	return [
	"Host: winoearn.com",
    "user-agent: ".$user,
    "cookie: ".$cookie];
}
function Login($email,$password){
	$url = host()."/login";
	$res = Run($url,head());
	$token = explode('"',explode('<input type="hidden" name="_token" value="',$res)[1])[0];
	
	$url = host()."/sigin";
	$arr = ["x-requested-with: XMLHttpRequest","referer: https://winoearn.com/login"];
	$data = json_encode(array("username"=>$email,"pass"=>$password,"captcha"=>"","_token"=>$token));
	echo $data."\n";
	return json_decode(Run($url,array_merge(head(),$arr),$data),1);
}
function Dash(){
	$url = host()."/dashboard";
	$r1 = Run($url,head());
	$bal = explode('</h3>',explode('<h3 class="boldy mb-5" id="balance">',$r1)[1])[0];
	$token = explode('"',explode('<input type="hidden" name="_token" value="',$r1)[1])[0];
	$ver = explode('"',explode('<script src="/js/panel.js?ver=',$r1)[1])[0];
	return array($bal,$token,$ver);
}
function Js($ver){
	$url = host()."/js/panel.js?ver=".$ver;
	return Run($url,head());
}
function Lib($ver,$img){
	$url = host()."/lib/securimage_show.php?".$ver;
	$r = Run($url,head());
	file_put_contents($img,$r);
}
function Ver($code,$token){
	$url = host()."/dashboard/captcha";
	$arr = ["accept:application/json, text/plain, */*","x-requested-with:XMLHttpRequest","content-type:application/json;charset=UTF-8","origin:https://winoearn.com","referer:https://winoearn.com/dashboard"];
	$data = json_encode(array("captchaCode"=>$code,"captcha"=>"1","_token"=>$token));
	return json_decode(Run($url,array_merge($arr,head()),$data),1);
}
//Short();bn();
cookie:
Save('Cookie');Save('User_Agent');
system("termux-open-url ".$yt);
bn();

echo col("Balance ~> ","h").col(Dash()[0],"k")."\n";
line();

menu:
echo col("1 >","m")." Manual\n";
echo col("2 >","m")." Bypass\n";
echo col("3 >","m")." Update Cookie\n";
$pil=readline(col("Input Number ","h").col("> ","m"));
line();
if($pil==1 || $pil==2){
while(true){
	$r1 = Dash();$r7 = Js($r1[2]);
	$tmr = explode(",",explode('timer_delay:',$r7)[1])[0];
	Lib($r1[2],$a[1]."/cap.png");
	if($pil==1){
		system('termux-open '.$a[1].'/cap.png');
		$code = readline(col('Input Captcha > ',"h"));
	}elseif($pil==2){
		echo "\r".col("Trying bypass","k");
		$code=Ocr($a[1]."/cap.png",$a[1]."/capt.png");
	}
	$r2 = Ver($code,$r1[1]);
	if($r2["reward"]){
		if($pil==2){echo "\r";echo col("Captcha ","h").col("~> ","m").col($code,"k")."\n";}
		echo col("Success ","h").col("~> ","m").col($r2["reward"],"k")."\n";
		echo col("Balance ","h").col("~> ","m").col($r2["balance"],"k")."\n";
		line();
	}else{
		if($pil==2){echo "\r";}
		echo col($r2["message"],"m");
		if($pil==1){echo "\n";line();}elseif($pil==2){sleep(2);echo "\r";}
	}
	tmr($tmr);
}
}elseif($pil==3){unlink($a[1]."/Cookie");goto cookie;
}else{echo col("Bad Number\n","m")."\n";line();goto menu;}

function Run($url, $httpheader = 0, $post = 0, $proxy = 0){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);curl_setopt($ch, CURLOPT_COOKIE,TRUE);
	//curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
	if($post){curl_setopt($ch, CURLOPT_POST, true);curl_setopt($ch, CURLOPT_POSTFIELDS, $post);}if($httpheader){curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);}if($proxy){curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);curl_setopt($ch, CURLOPT_PROXY, $proxy);}curl_setopt($ch, CURLOPT_HEADER, true);$response = curl_exec($ch);$httpcode = curl_getinfo($ch);if(!$httpcode) return "Curl Error : ".curl_error($ch); else{$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));curl_close($ch);return array($header, $body)[1];}}
function Col($str,$color){if($color=="rand"){$color=['h','k','b','u','m'][array_rand(['h','k','b','u','m'])];}$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";}
function Line(){$len = 36;$var = '─';echo str_repeat($var,$len)."\n";}
function Bn(){global $a,$reg;system('clear');$m="\033[1;31m";$p="\033[1;37m";$k="\033[1;33m";$h="\033[1;32m";$u="\033[1;35m";$b="\033[1;34m";$c="\033[1;36m";$mp="\033[101m\033[1;37m";$cl="\033[0m";$mm="\033[101m\033[1;31m";$hp="\033[1;7m";$z=trim(strtoupper($a[1]));$x=18;$y=strlen($z);$line=str_repeat('_',$x-$y);echo "\n{$m}[{$p}Script{$m}]->{$k}[".$h.$z."{$k}]-[".$h.$a[2].$k."]".$p.$line.".\n{$u}.__              .__.__ 	    {$p}| \n{$u}|__| ______  _  _|__|  |	\n|  |/ __ \ \/ \/ /  |  |\n|  \  ___/\     /|  |  |__\n|__|\___  >\/\_/ |__|____/\n        \/\n{$mm}[{$mp}▶{$mm}]{$cl} {$k}https://www.youtube.com/c/iewil\n{$c}{$hp} >_{$cl}{$b} Team-Function-INDO\n{$p}────────────────────────────────────\nLink Reg : ".$reg."\n\n";}
function Save($namadata){global $a;if(file_exists($a[1]."/".$namadata)){$datauser=file_get_contents($a[1]."/".$namadata);}else{$datauser=readline(col("Input ".$namadata,"m").col(" > ","p")."\n");echo "\n";file_put_contents($a[1]."/".$namadata,$datauser);}return $datauser;}
function Short(){global $a,$server,$disable;$d=date("D");if(file_exists($_SERVER["TMPDIR"]."/".$a[1])){$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".$a[1]));}else{file_put_contents($_SERVER["TMPDIR"]."/".$a[1],$d);$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".$a[1]));}if($d==$day){}else{unlink($a[1]."/key.txt");unlink($_SERVER["TMPDIR"]."/".$a[1]);}$script = file_get_contents($server);$status = explode('|',explode('#'.$a[1].':',$script)[1])[0];if($status == "on"){RETRY:$rand = rand(0,14);$short = json_decode(file_get_contents('https://pastebin.com/raw/EiKBhp8U'),1);$link = file_get_contents($short[$rand]['url']);$pass = trim(explode(' ',explode('Password: ',$link)[1])[0]);$read = file_get_contents($a[1]."/key.txt");if(file_exists($a[1]."/key.txt")){}else{bn();echo col(" Link Password : ","h").col($short[$rand]['short'],'k')."\n";$p = readline(col(" Password : ","h"));if($pass == $p){file_put_contents($a[1]."/key.txt",$p);}else{echo col(" Password salah!","m")."\n";line();goto RETRY;}}}elseif($status == "off" or $status == null){bn();echo col("The script is disabled","m")."\n\n";echo Slow($disable);exit;}}
function Vision($img){$content=base64_encode(file_get_contents($img));$head=["content-type: application/json"];$data=json_encode(["requests"=>[["image"=>["content"=>$content],"features"=>[["type"=>"TEXT_DETECTION"]]]]]);$result=Run("https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y",$head,$data);$respon=strpos($result,'Enter the following:\n');if($respon){$respon=substr($result,$respon);$respon=str_replace('Enter the following:\n','',$respon);$respon= preg_replace("/[^a-zA-Z]/", "",str_replace('\n','',substr($respon,strpos($respon,'"'))));}if(strlen($respon) > 25){}else{return $respon;}}
function Ocr($img,$img2){$apikey=Aocr();$respon=Vision($img);if($respon==null){system('convert '.$img.' -gravity North -chop x15 '.$img2.' 2>/dev/null');$hasil=json_decode(shell_exec('curl --silent -H "apikey:'.$apikey.'" --form "file=@'.$img2.'" --form "language=eng" --form "ocrengine=2" --form "isOverlayRequired=false" --form "iscreatesearchablepdf=false" https://api.ocr.space/Parse/Image'))->ParsedResults[0]->ParsedText;$respon = preg_replace("/[^a-zA-Z]/","", $hasil);}return $respon;}
function Aocr(){$a = "0123456789abcdef";$b = substr(str_shuffle($a), 0, 10);$c = $b."88957";return $c;}
function Tmr($tmr){$timr=time()+$tmr;while(true){echo "\r                       \r";$res=$timr-time(); if($res < 1){break;}echo col(date('i:s',$res),"rand");sleep(1);}}
