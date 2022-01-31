<?php
error_reporting(0);
$zone = json_decode(file_get_contents("http://ip-api.com/json"),1)["timezone"];if($zone){date_default_timezone_set($zone);}
$host="https://phoenixfaucets.xyz/";
$a = ["iewil","phoenixfaucet","1.4"];
$reg = "https://bit.ly/329mUPM";
$yt = "https://youtube.com/c/iewil";
$server = "https://pastebin.com/raw/5mri6gAM";
$disable = col("Script mati karena web update / scam!","m")."\nSupport Channel saya dengan cara\nSubscribe ".col("https://www.youtube.com/c/iewil","k")."\nkarena subscribe itu gratis :D\nUntuk mendapatkan info Script terbaru\nJoin grub via telegram ~> ".col("https://t.me/Iewil_G","c")."\nðŸ‡®ðŸ‡© ".col("Family-Team-Function-INDO","b")."\n";Short();bn();

cookie:
Save('Cookie');Save('User_Agent');
system("termux-open-url ".$yt);
bn();

menu:
echo col("1 >","m")." AutoFaucet\n";
echo col("2 >","m")." CheckBalance\n";
echo col("3 >","m")." Update Cookie\n";
$pil=readline(col("Input Number ","h").col("> ","m"));
line();
if($pil==1){goto faucet;
}elseif($pil==2){goto balance;
}elseif($pil==3){unlink($a[1]."/Cookie");goto cookie;
}else{echo col("Bad Number\n","m")."\n";line();goto menu;}

faucet:
while(true){
	$r=Run($host."/user/auto",head(),$data);
	if(preg_match('/Cloudflare/',$r)){
		echo col("cloudflare detect\n","m");
		line();sleep(10);goto faucet;
	}
	$tmr=explode('</span>',explode('<span id="seconds">',$r)[1])[0];
    $token=explode('">',explode('<input type="hidden" name="',$r)[1])[0];
    $data=str_replace('" value="','=',$token);
	preg_match_all('#<div class="alert alert-success" role="alert">(.*?)<a#is',$r,$has);
	if($has[1]){
		echo token();
		for($i=0;$i<count($has[1]);$i++){
			$ss=explode(",",$has[1][$i])[0];
			echo col($ss,'h')."\n";
		}
		line();
	}
    if($tmr){
    	tmr($tmr);
    }
}

balance:
$r=wall();
$coins = explode('<h5 class="card-title">',$r);
for($x=1;$x<count($coins);$x++){
	$coin = explode('</h5>',$coins[$x])[0];
	$bal = strip_tags(explode('</p>',explode('<p>Balance',$coins[$x])[1])[0]);
	echo col($coin,"h").col($bal,"k")."\n";
	line();
}
goto menu;

function head(){
	$user=Save("User_Agent");$cookie=Save("Cookie");
	$ua=["user-agent: ".$user,"cookie: ".$cookie];return $ua;}
function token(){global $host;
	$url=$host."/user/dashboard";
	$r=Run($url,head());
	$token=explode('</h2>',explode('<h2 class="mb-2 fw-normal mt-2">',$r)[1])[0];
	if($token){
		return col("Your Token ","k").col("~> ","m").col($token,"p")."\n";
	}else{
		return col("Token tidak terdeteksi","m")."\n";
	}
}
function wall(){global $host;
	$url=$host."/user/wallet";
	return Run($url,head());
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
function Vision($img){$content=base64_encode(file_get_contents($img));$head=["content-type: application/json"];$data=json_encode(["requests"=>[["image"=>["content"=>$content],"features"=>[["type"=>"TEXT_DETECTION"]]]]]);$result=Run("https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y",$head,$data);$respon=strpos($result,'Enter the following:\n');if($respon){$respon=substr($result,$respon);$respon=str_replace('Enter the following:\n','',$respon);$respon= preg_replace("/[^a-zA-Z]/", "",str_replace('\n','',substr($respon,strpos($respon,'"'))));}if(strlen($respon) > 25){}else{return $respon;}}
function Ocr($img,$img2){$apikey=Aocr();$respon=Vision($img);if($respon==null){system('convert '.$img.' -gravity North -chop x15 '.$img2.' 2>/dev/null');$hasil=json_decode(shell_exec('curl --silent -H "apikey:'.$apikey.'" --form "file=@'.$img2.'" --form "language=eng" --form "ocrengine=2" --form "isOverlayRequired=false" --form "iscreatesearchablepdf=false" https://api.ocr.space/Parse/Image'))->ParsedResults[0]->ParsedText;$respon = preg_replace("/[^a-zA-Z]/","", $hasil);}return $respon;}
function Aocr(){$a = "0123456789abcdef";$b = substr(str_shuffle($a), 0, 10);$c = $b."88957";return $c;}
function Head2(){$ua=Save('User_Agent');$h=["Host: api-secure.solvemedia.com","user-agent: ".$ua];return $h;}
function Gsolv($url,$ref){$arr=["accept: */*","referer: ".$ref,"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"];$r=Run($url,array_merge(Head2(),$arr));$ca=explode('"',$r)[5];return $ca;}
function Gmed($ca,$ref){$url="https://api-secure.solvemedia.com/papi/media?c=".$ca.";w=300;h=150;fg=000000;bg=f8f8f8";$arr=["accept: image/webp,image/apng,image/*,*/*;q=0.8","referer: ".$ref,"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"];$r=Run($url,array_merge(Head2(),$arr));return $r;}
function Build($a){return http_build_query($a);}
function RecaptchaV2($siteurl,$sitekey,$apikey){$ua=["Host: api.anycaptcha.com","Content-Type: application/json"];$data=json_encode(array("clientKey"=>$apikey,"task"=>array("type"=>"RecaptchaV2TaskProxyless","websiteURL"=>$siteurl,"websiteKey"=>$sitekey,"isInvisible"=>false)));$Create=json_decode(Run('https://api.anycaptcha.com/createTask',$ua,$data));if($Create->errorId == '1'){return 0;}else{$Task=$Create->taskId;while(true){$base=json_encode(array("clientKey"=>$apikey,"taskId"=>$Task));$Result=json_decode(Run('https://api.anycaptcha.com/getTaskResult',$ua,$base));if($Result->status=='processing'){sleep(5);continue;}return $Result->solution->gRecaptchaResponse;}}}
function Tmr($tmr){$timr=time()+$tmr;while(true){echo "\r                       \r";$res=$timr-time(); if($res < 1){break;}echo col(date('i:s',$res),"rand");sleep(1);}}
