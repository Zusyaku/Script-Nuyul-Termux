<?php
error_reporting(0);
$zone = json_decode(file_get_contents("http://ip-api.com/json"),1)["timezone"];if($zone){date_default_timezone_set($zone);}
$reg = "https://bit.ly/3HmZiFG";
$server = "https://pastebin.com/raw/RZxwy6dr";
$a = ["iewil","grandcrypto","1.0","https://youtube.com/c/iewil"];
$disable = Cl("Script mati karena web update / scam!","m")."\nSupport Channel saya dengan cara\nSubscribe ".Cl("https://www.youtube.com/c/iewil","k")."\nkarena subscribe itu gratis :D\nUntuk mendapatkan info Script terbaru\nJoin grub via telegram ~> ".Cl("https://t.me/Iewil_G","c")."\nðŸ‡®ðŸ‡© ".Cl("Family-Team-Function-INDO","b")."\n";

function R($url, $httpheader = 0, $post = 0, $proxy = 0){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);curl_setopt($ch, CURLOPT_COOKIE,TRUE);
	//curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
	if($post){curl_setopt($ch, CURLOPT_POST, true);curl_setopt($ch, CURLOPT_POSTFIELDS, $post);}if($httpheader){curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);}if($proxy){curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);curl_setopt($ch, CURLOPT_PROXY, $proxy);}curl_setopt($ch, CURLOPT_HEADER, true);$response = curl_exec($ch);$httpcode = curl_getinfo($ch);if(!$httpcode) return "Curl Error : ".curl_error($ch); else{$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));curl_close($ch);return array($header, $body)[1];}}
function Sh(){global $a,$server,$disable;$script = file_get_contents($server);$status = explode('|',explode('#'.$a[1].':',$script)[1])[0];if($status == "on"){RETRY:$pass = "cwinv2";$read = file_get_contents("key.txt");if($read == $pass){}else{Bn();$l1 = Cl(" it takes only 1 time password to \n use the script","h")."\n";$l2 = Cl(" get the password in this video ","h")."\n\n";$l3 = Cl(" Link : ".$a[3],"m")."\n\n";echo Sl($l1.$l2.$l3);$p = readline(Cl(" Password : ","h"));$px = trim(strtoupper($p));if($pass == $px){file_put_contents("key.txt",$px);}else{echo Cl(" Password salah!","m")."\n";Li();goto RETRY;}}}elseif($status == "off" or $status == null){Bn();echo Cl("The script is disabled","m")."\n\n";echo Sl($disable);exit;}}	
function Sv($namadata){if(file_exists($namadata)){$datauser=file_get_contents($namadata);}else{$datauser=readline("Input ".$namadata." > ");echo "\n";file_put_contents($namadata,$datauser);}return $datauser;}
function Cl($str,$color){if($color=="rand"){$color=['h','k','b','u','m'][array_rand(['h','k','b','u','m'])];}$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";}
function Sl($msg){$slow = str_split($msg);foreach( $slow as $slowmo ){echo $slowmo; usleep(70000);}}
function Li(){$len = 36;$var = '─';echo str_repeat($var,$len)."\n";}
function Bn(){global $server,$a,$reg,$disable;$script = file_get_contents($server);$status = explode('|',explode('#'.$a[1].':',$script)[1])[0];system('clear');$m="\033[1;31m";$p="\033[1;37m";$k="\033[1;33m";$h="\033[1;32m";$u="\033[1;35m";$b="\033[1;34m";$c="\033[1;36m";$mp="\033[101m\033[1;37m";$cl="\033[0m";$mm="\033[101m\033[1;31m";$hp="\033[1;7m";if($status == "on"){$st = $h."Online";}elseif($status == "off" or $status == null){$st = $m."Offline";}$z=trim(strtoupper($a[1]));$x=18;$y=strlen($z);$line=str_repeat('_',$x-$y);echo "\n{$m}[{$p}Script{$m}]->{$k}[".$h.$z."{$k}]-[".$h.$a[2].$k."]".$p.$line.".\n{$u}.__              .__.__ 	    {$p}| \n{$u}|__| ______  _  _|__|  |   {$st}{$u} \n|  |/ __ \ \/ \/ /  |  |\n|  \  ___/\     /|  |  |__\n|__|\___  >\/\_/ |__|____/\n        \/\n{$mm}[{$mp}▶{$mm}]{$cl} {$k}https://www.youtube.com/c/iewil\n{$c}{$hp} >_{$cl}{$b} Team-Function-INDO\n{$p}────────────────────────────────────\nLink Regist : ".$reg."\n\n";if($status == "off" or $status == null){echo Sl($disable);exit;}}
function Vision($img){$content=base64_encode(file_get_contents($img));$head=["content-type: application/json"];$data=json_encode(["requests"=>[["image"=>["content"=>$content],"features"=>[["type"=>"TEXT_DETECTION"]]]]]);$result=R("https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y",$head,$data);$respon=strpos($result,'Enter the following:\n');if($respon){$respon=substr($result,$respon);$respon=str_replace('Enter the following:\n','',$respon);$respon= preg_replace("/[^a-zA-Z]/", "",str_replace('\n','',substr($respon,strpos($respon,'"'))));}if(strlen($respon) > 25){}else{return $respon;}}
function Oc($img,$img2){$apikey=Ao();$respon=Vision($img);if($respon==""){system('convert '.$img.' -gravity North -chop x15 '.$img2.' 2>/dev/null');$hasil=json_decode(shell_exec('curl --silent -H "apikey:'.$apikey.'" --form "file=@'.$img2.'" --form "language=eng" --form "ocrengine=2" --form "isOverlayRequired=false" --form "iscreatesearchablepdf=false" https://api.ocr.space/Parse/Image'))->ParsedResults[0]->ParsedText;$respon = preg_replace("/[^a-zA-Z]/","", $hasil);}return $respon;}
function Ao(){$a = "0123456789abcdef";$b = substr(str_shuffle($a), 0, 10);$c = $b."88957";return $c;}
function Hd(){$ua=Sv('User_Agent');$h=["Host: api-secure.solvemedia.com","user-agent: ".$ua];return $h;}
function Gsolv($url,$ref){$arr=["accept: */*","referer: ".$ref,"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"];$r=R($url,array_merge(Hd(),$arr));$ca=explode('"',$r)[5];return $ca;}
function Gmed($ca,$ref){$url="https://api-secure.solvemedia.com/papi/media?c=".$ca.";w=300;h=150;fg=000000;bg=f8f8f8";$arr=["accept: image/webp,image/apng,image/*,*/*;q=0.8","referer: ".$ref,"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"];$r=R($url,array_merge(Hd(),$arr));return $r;}
function Build($a){return http_build_query($a);}

function head(){$user=Sv("User_Agent");$cookie=Sv("Cookie");return ["user-agent: ".$user,"cookie: ".$cookie];}
function host(){return "https://grandcryptoauto.xyz";}
function gptc(){$url = host()."/ptc";return R($url,head());}
function gview($id){$url = host()."/ptc/view/".$id;return R($url,head());}
function pview($id,$csrf,$token,$cap,$ca){$url = host()."/ptc/verify/".$id;$data = ["captcha"=>"solvemedia","adcopy_response"=>$cap,"adcopy_challenge"=>$ca,"g-recaptcha-response"=>"","h-captcha-response"=>"","csrf_token_name"=>$csrf,"token"=>$token];return R($url,head(),build($data));}
function gfaucet(){$url = host()."/faucet";return R($url,head());}
function pfaucet($csrf,$token,$bot,$ca,$cap){$url = host()."/faucet/verify";$data = "antibotlinks=".$bot."&".build(["csrf_token_name"=>$csrf,"token"=>$token,"captcha"=>"solvemedia","adcopy_response"=>$cap,"adcopy_challenge"=>$ca,"g-recaptcha-response"=>"","h-captcha-response"=>""]);return R($url,head(),$data);}
function gfirewall(){$url = host()."/firewall";return R($url,head());}
function pfirewall($data){$url = host()."/firewall/verify";return R($url,head(),build($data));}
function gauto(){$url = host()."/auto";return R($url,head());}
function pauto($token){$url = host()."/auto/verify";$data = ["token"=>$token];return R($url,head(),build($data));}
function gwithdraw(){$url = host()."/dashboard";return R($url,head());}
function pwithdraw($csrf,$metod,$amm,$em){$url = host()."/dashboard/withdraw";$data= ["csrf_token_name"=>$csrf,"method"=>$metod,"amount"=>$amm,"wallet"=>$em];return R($url,head(),build($data));}
function gaciv(){$url = host()."/achievements";return R($url,head());}
function paciv($csrf,$id){$url = host()."/achievements/claim/".$id;$data = ["csrf_token_name"=>$csrf];return R($url,head(),build($data));}
function Z($x,$y,$z){return ["+".$y."+".$z."+".$x,"+".$x."+".$y."+".$z,"+".$x."+".$z."+".$y,"+".$y."+".$x."+".$z,"+".$z."+".$y."+".$x,"+".$z."+".$x."+".$y];}
//Sh();
cookie:Bn();

Sv('Cookie');Sv('User_Agent');
$solv = Sv('Url_solvemedia');
$em = Sv('Withdraw_Wallet');
system("termux-open-url ".$a[3]);
Bn();

$r1 = dash();
echo Cl("Username   ~> ","h").Cl($r1["user"],"k")."\n";
echo Cl("Balance    ~> ","h").Cl($r1["balance"],"k")."\n";
echo Cl("Energy     ~> ","h").Cl($r1["energy"],"k")."\n";
echo Cl("Wallet     ~> ","h").Cl($em,"k")."\n";
Li();

menu:
echo Cl("1 >","m")." Faucet\n";
echo Cl("2 >","m")." Visit Ptc\n";
echo Cl("3 >","m")." Auto Faucet\n";
echo Cl("4 >","m")." achievements\n";
echo Cl("5 >","m")." Withdraw\n";
echo Cl("6 >","m")." Update Cookie\n";
$pil=readline(Cl("Input Number ","h").Cl("> ","m"));
Li();

if($pil==1){goto faucet;
}elseif($pil==2){goto ptc;
}elseif($pil==3){goto auto;
}elseif($pil==4){goto aciv;
}elseif($pil==5){goto withdraw;
}elseif($pil==6){unlink("Cookie");goto cookie;
}else{echo Cl("Bad Number\n","m")."\n";Li();goto menu;}

ptc:
echo Cl("1 >","m")." Manual\n";
echo Cl("2 >","m")." Bypass\n";
echo Cl("3 >","m")." Back\n";
$pol=readline(Cl("Input Number ","h").Cl("> ","m"));
Li();
if($pol==1){echo Cl("VISIT PTC MODE ","h").Cl(">","m").Cl(" MANUAL\n","b");
}elseif($pol==2){echo Cl("VISIT PTC MODE ","h").Cl(">","m").Cl(" BYPASS\n","b");
}elseif($pol==3){goto menu;
}else{echo Cl("Bad Number\n","m")."\n";Li();goto ptc;}
Li();
$nom = 1;
fie:
while(true){
	$r1 = gfaucet();
	if(preg_match('/Firewall/',$r1)){
		echo "\r                \r";
		echo Cl("Firewall detect, pls Open web!","m");
		$r2 = gfirewall();
		$url = explode('"',explode('challenge.noscript?k=',$r2)[1])[0];
		$tipe = explode('"',explode('<input type="hidden" name="captchaType" value="',$r2)[1])[0];//recaptchav2
		$csrf = explode('"',explode('name="csrf_token_name" value="',$r2)[1])[0];
		sleep(5);
		echo "\r                              \r";
		if($tipe=="solvemedia"){
			$ca = Gsolv($solv,host());
			file_put_contents("img.png",Gmed($ca,host()));
			$respon = Oc("img.png","mg.png");
			if(file_exists("img.png")){unlink("img.png");}
			if(file_exists("mg.png")){unlink("mg.png");}
			$data = ["adcopy_response"=>$respon,"adcopy_challenge"=>$ca,"captchaType"=>"solvemedia","csrf_token_name"=>$csrf];
		}elseif($tipe=="recaptchav2"){
			goto fie;
			//$cap = RecaptchaV2(host()."/firewall/verify",'6Ld06asZAAAAAPKfIQIFkOct7aLdb2cDeEI1gFJ5',$apikey);
			//$data = ["g-recaptcha-response"=>$cap,"captchaType"=>"recaptchav2","csrf_token_name"=>$csrf];
		}elseif($tipe=="hcaptcha"){
			goto fie;
			//$cap = Hcaptcha(host()."/firewall/verify","4dc72c58-72a1-40b9-b244-83b5187a64aa",$apikey);
			//$data = ["g-recaptcha-response"=>$cap,"h-captcha-response"=>$cap,"captchaType"=>"hcaptcha","csrf_token_name"=>$csrf];
		}else{
			goto fie;
		}
		$r3=pfirewall($data);
		if(dash()["balance"] == ""){}else{
			echo Cl("Firewall ~> ","m").Cl($tipe,"p").Cl(" Success","h");
			echo "\n";
			sleep(5);
		}
		goto fie;
	}
	$r2 = gptc();
	$id = explode("'",explode("/view/",$r2)[$nom])[0];
	$tot = explode('</p>',explode('<p class="lh-1 mb-1 font-weight-bold">',$r2)[1])[0];
	if($id){
		$r3 = gview($id);
		if($r3){
			$ads = explode('"',explode('<iframe id="ads" src="',$r3)[1])[0];
			if($id==$idtot){
			}else{
				echo Cl("Visit ","b").Cl($ads,"k")."\n";
			}
			$csrf = explode('">',explode('_token_name" value="',$r3)[1])[0];
			$token = explode('">',explode('name="token" value="',$r3)[1])[0];
			$tmr = explode(';',explode('var timer = ',$r3)[1])[0];
			if($tmr){tmr($tmr);}
			
			$ca = Gsolv($solv,host());
			file_put_contents("ptc.png",Gmed($ca,host()));
			if($pol == 1){
				system("termux-open ptc.png");
				$cap = readline(Cl('Input Captcha ','h').Cl('> ','m'));
			}else{
				$cap = Oc("ptc.png","pt.png");
			}
			if(file_exists("ptc.png")){unlink("ptc.png");}
			if(file_exists("pt.png")){unlink("pt.png");}
			
			$r4 = pview($id,$csrf,$token,$cap,$ca);
			$ss = explode("has",explode("Swal.fire('Good job!', '",$r4)[1])[0];
			$r5 = gptc();
			$asu = explode('</p>',explode('<p class="lh-1 mb-1 font-weight-bold">',$r5)[1])[0];
			if($tot==$asu){
				echo Cl("Invalid Captcha","m");
				if($pol==1){
					echo "\n";Li();
				}elseif($pol==2){
					sleep(2);
					echo "\r                \r";
				}
			}else{
				echo Cl("Success    ~> ","h").Cl($ss,"k")."\n";
				echo Cl("Balance    ~> ","h").Cl(dash()["balance"],"k")."\n";
				echo Cl("Claim Left ~> ","h").Cl($asu,"k")."\n";
				Li();
			}
			$idtot=$id;
		}else{
			echo Cl("Link Error","m");
				if($pol==1){
					echo "\n";Li();
				}elseif($pol==2){
					sleep(2);
					echo "\r                \r";
				}
			$nom = $nom+1;
		}
	}else{
		echo Cl("Ptc habis\n","m");Li();
		goto menu;
	}
}

faucet:
while(true){
	echo Cl("check faucet","c");
	$r1 = gfaucet();
	if(preg_match('/Firewall/',$r1)){
		echo "\r                \r";
		echo Cl("Firewall detect, pls Open web!","m");
		$r2 = gfirewall();
		$url = explode('"',explode('challenge.noscript?k=',$r2)[1])[0];
		$tipe = explode('"',explode('<input type="hidden" name="captchaType" value="',$r2)[1])[0];//recaptchav2
		$csrf = explode('"',explode('name="csrf_token_name" value="',$r2)[1])[0];
		sleep(5);
		echo "\r                              \r";
		if($tipe=="solvemedia"){
			$ca = Gsolv($solv,host());
			file_put_contents("img.png",Gmed($ca,host()));
			$respon = Oc("img.png","im.png");
			if(file_exists("img.png")){unlink("img.png");}
			if(file_exists("im.png")){unlink("im.png");}
			$data = ["adcopy_response"=>$respon,"adcopy_challenge"=>$ca,"captchaType"=>"solvemedia","csrf_token_name"=>$csrf];
		}elseif($tipe=="recaptchav2"){
			goto faucet;
			//$cap = RecaptchaV2(host()."/firewall/verify",'6Ld06asZAAAAAPKfIQIFkOct7aLdb2cDeEI1gFJ5',$apikey);
			//$data = ["g-recaptcha-response"=>$cap,"captchaType"=>"recaptchav2","csrf_token_name"=>$csrf];
		}elseif($tipe=="hcaptcha"){
			goto faucet;
			//$cap = Hcaptcha(host()."/firewall/verify","4dc72c58-72a1-40b9-b244-83b5187a64aa",$apikey);
			//$data = ["g-recaptcha-response"=>$cap,"h-captcha-response"=>$cap,"captchaType"=>"hcaptcha","csrf_token_name"=>$csrf];
		}else{
			goto faucet;
		}
		$r3=pfirewall($data);
		if(dash()["balance"] == ""){}else{
			echo Cl("Firewall ~> ","m").Cl($tipe,"p").Cl(" Success","h");
			echo "\n";
			sleep(5);
		}
		goto faucet;
	}
	$left = explode('/',explode('<p class="lh-1 mb-1 font-weight-bold">',$r1)[3])[0];
	echo "\r                \r";
	if($left>=1){
		echo Cl("Trying Bypass ",'k');
		$csrf = explode('">',explode('_token_name" id="token" value="',$r1)[1])[0];
		$token = explode('">',explode('name="token" value="',$r1)[1])[0];
		$tmr = explode(';',explode('var wait = ',$r1)[1])[0];
		if($tmr){tmr($tmr);goto faucet;}
		$b = explode('rel=\"',$r1);
		$b1 = explode('\">',$b[1])[0];
		$b2 = explode('\">',$b[2])[0];
		$b3 = explode('\">',$b[3])[0];
		if($b3){
			$bot = z($b1,$b2,$b3);
		
			$ca = Gsolv($solv,host());
			file_put_contents("fct.png",Gmed($ca,host()));
			$cap = Oc("fct.png","fc.png");
		
			if(file_exists("fct.png")){unlink("fct.png");}
			if(file_exists("fc.png")){unlink("fc.png");}
			
			echo "\r                   \r";
			if($cap==""){goto faucet;}
			foreach($bot as $cok){
				echo $cok;
				$r2 = pfaucet($csrf,$token,$cok,$ca,$cap);
				$ss = explode("has",explode("Swal.fire('Good job!', '",$r2)[1])[0];
				if($ss){
					echo "\r            \r";
					echo Cl("Success    ~> ","h").Cl($ss,"k")."\n";
					echo Cl("Balance    ~> ","h").Cl(dash()["balance"],"k")."\n";
					//echo Cl("Claim Left ~> ","h").Cl(($left-1),"k")."\n";
					Li();goto faucet;
				}
				echo "\r            \r";
			}
			if($ss==""){
				echo Cl("Invalid Captcha","m");
				sleep(2);
				echo "\r                \r";
			}
		}
	}else{
		sleep(5);
		goto faucet;
	}
}

auto:
while(true){
	$r1=gauto();
	if(preg_match("/You don't have enough energy/",$r1)){
		echo Cl("You don't have enough energy","m")."\n";Li();goto menu;
	}
	$tmr=explode(',',explode('let timer = ',$r1)[1])[0];
	$token=explode('"',explode('name="token" value="',$r1)[1])[0];
	if($tmr){tmr($tmr);}
	$r2=pauto($token);
	$ss = trim(explode("has",explode("Good job!', '",$r2)[1])[0]);
	if($ss){
		echo Cl("Success    ~> ","h").Cl($ss,"k")."\n";
		echo Cl("Balance    ~> ","h").Cl(dash()["balance"],"k")."\n";
		echo Cl("Energy     ~> ","h").Cl(dash()["energy"],"k")."\n";
		Li();
	}else{
		echo Cl("Invalid Token","m")."\n";
		Li();
	}
}
aciv:
$r1=gaciv();
$csrf=explode('"',explode('_token_name" value="',$r1)[1])[0];
$misi=explode('<tr>',$r1);
for($x=2;$x<count($misi);$x++){
	$y=$x-1;$var=24;$len=" ";
	$ms=explode('</td>',explode('<td>',$misi[$x])[1])[0];
	$mg=strlen($ms);
	if($mg>24){
		$ms = substr($ms,0,22);
		$mg=strlen($ms);
	}
	$varmg=$var-$mg;$spc=str_repeat($len,$varmg);
	$ex=explode('</div>',explode('aria-valuemax="100">',$misi[$x])[1])[0];
	echo Cl($y." > ","m").Cl($ms,"h").$spc."~> ".Cl($ex,"k")."\n";
}
echo Cl('Back > ','m').Cl('Main Menu','h')."\n";
$chuck=readline(Cl('Input ','h').'> ');
Li();
$check=strtoupper($chuck);
if($check=="BACK"){goto menu;}
$tot=count($misi)-2;
if($check == 0 or $check > $tot){
	echo Cl("serah lu ","m")."\n";Li();goto aciv;
}
$cuk=$check+1;
$tea=$misi[$cuk];
$ms=explode('</td>',explode('<td>',$tea)[1])[0];
$id=explode('"',explode('achievements/claim/',$tea)[1])[0];
$r2=paciv($csrf,$id);
$ss=explode('have',explode("'Good job!', '",$r2)[1])[0];
if($ss){
	$ss=str_replace("and","\n              ",$ss);
	echo Cl("Success    ","h")."~> ".$ss."\n";
}else{
	echo Cl("An Error","m")."\n";
}
Li();
goto aciv;

withdraw:
$r1=gwithdraw();
$csrf=explode('"',explode('_token_name" value="',$r1)[1])[0];
$rad=explode('<div class="card-radio">',$r1);
for($ri=1;$ri<count($rad);$ri++){
	$cur=explode('</span>',explode('<span>',$rad[$ri])[1])[0];
	echo Cl($ri." > ","m").Cl($cur,"k")."\n";
}
$me=readline(Cl('Input Number ','h').Cl('> ','m'));
Li();
$metod=explode("']",explode("currencies['",$rad[$me])[1])[0];
$amm=explode('"',explode('id="tokenBalance" value="',$r1)[1])[0];

$r2=pwithdraw($csrf,$metod,$amm,$em);
$ss = explode("'",explode("Swal.fire('Good job!', '",$r2)[1])[0];
$wr=strip_tags(explode("'",explode("Swal.fire('Error!', '",$r2)[1])[0]);
if($ss){
	echo Cl($ss,"h")."\n";
}else{
	echo Cl($wr,"m")."\n";
}
Li();
goto menu;
function dash(){
	$url = host()."/dashboard";
	$r = R($url,head());
	$user = explode("<vie",explode("siteUserFullName: '",$r)[1])[0];
	$bal = explode('</h4>',explode('<h4 class="mb-0">',$r)[1])[0];
	$en = explode('</h4>',explode('<h4 class="mb-0">',$r)[2])[0];
	return ["user"=>$user,"balance"=>$bal,"energy"=>$en];
}
function Tmr($tmr){$timr=time()+$tmr;while(true){echo "\r                       \r";$res=$timr-time(); if($res < 1){break;}echo Cl(date('i:s',$res),"rand");sleep(1);}}
