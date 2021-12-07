<?php
error_reporting(0);
function col($str,$color){
$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";}
function c(){system('clear');}$n = "\n";$n2 = "\n\n";$t = "\t";$r="\r                                                              \r";
function curl($url, $post = 0, $request = 0, $httpheader = 0, $proxy = 0){ // url, postdata, http headers, proxy, uagent
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        if($post){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if($httpheader){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        }
        if($request){
        	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $request);
        }
        if($proxy){
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
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
function ket($ket1,$ket2){
	$len=66;
	$gar= 16-strlen($ket1);
	$isi1 = strlen($ket1.str_repeat(" ",$gar)." ~> ".$ket2);$isi2 =($len-$isi1)-3;
	echo col($ket1,"u")." ".col(str_repeat("~",$gar),"k").col("~> ","c").col($ket2,"p")."\n";
}
//reading&fun&treasure
function head(){
	include('cfg.php');
    $ua = array(); 
    $ua[]="Host: api.cc.lerjin.com";
    $ua[]="userid: ".$userid;
    $ua[]="version: 42";
    $ua[]="uuid: ".$uuid;
    $ua[]="token: ".$token;
    $ua[]="content-type: application/json; charset=utf-8";
	return $ua;
}
function url($d){
	$url = "https://api.cc.lerjin.com/{$d}";
	return $url;}
function Login($userid, $token){
	$data = json_encode(array("userid"=>$userid,"token"=>$token));
	$url = url('user/self/info');
	return json_decode(curl($url, $data, "POST", head())[1]);}
function Read($userid, $token){
	$data = json_encode(array("userid"=>$userid,"token"=>$token));
	$url = url('reading/timer');
	return json_decode(curl($url, $data, "POST", head())[1]);}
function Reward_read($userid, $token, $day,$time,$rewardType,$versions,$activeDay,$articleTime){
	$data =json_encode(array("rewardTime"=>$time,"articleTime"=>$articleTime,"rewardType"=>$rewardType,"activeDay"=>$activeDay,"videoTime"=>$time,"specific"=>"false","userid"=>$userid,"version"=>$versions,"day"=>$day,"token"=>$token));
	$url = url('reading/obtainReward');
	return json_decode(curl($url, $data, "POST", head())[1]);}
function Refresh_read($userid, $token, $day,$time,$rewardType,$versions,$activeDay,$articleTime){
	$data =json_encode(array("rewardTime"=>$time,"articleTime"=>$articleTime,"rewardType"=>$rewardType,"activeDay"=>$activeDay,"videoTime"=>$time,"specific"=>"false","userid"=>$userid,"version"=>$versions,"day"=>$day,"token"=>$token));
	$url = url('reading/refreshTime');
	return json_decode(curl($url, $data, "POST", head())[1]);}
function Funny($userid, $token){
	$data = json_encode(array("userid"=>$userid,"token"=>$token));
	$url = url('funny/timer');
	return json_decode(curl($url, $data, "POST", head())[1]);}
function Reward_funny($userid, $token, $day,$time,$rewardType,$versions,$activeDay,$articleTime){
	$data =json_encode(array("rewardTime"=>$time,"articleTime"=>$articleTime,"rewardType"=>$rewardType,"activeDay"=>$activeDay,"videoTime"=>$time,"specific"=>"false","userid"=>$userid,"version"=>$versions,"day"=>$day,"token"=>$token));
	$url = url('funny/obtainReward');
	return json_decode(curl($url, $data, "POST", head())[1]);}
function Reward_List($userid, $token){
	$data = json_encode(array("userid"=>$userid,"token"=>$token));
	$url = url('reward/list');
	return json_decode(curl($url, $data, "POST", head())[1]);}
function Open_Chest($userid, $token, $treasure){
	$data =json_encode(array("type"=>$treasure,"userid"=>$userid,"token"=>$token));
	$url = url('reward/treasureChest/open');
	return json_decode(curl($url, $data, "POST", head())[1]);}
//Spin&notif
function had(){
	include('cfg.php');
    $ua = array(); 
    $ua[] = "Host: api.cc.lerjin.com";
    $ua[] = "token: ".$token;
    $ua[] = "uuid: ".$uuid;
    $ua[] = "content-type: application/json; charset=UTF-8";
    $ua[] = "version: 42";
	return $ua;}
function Receive_Gift($userid, $token){
	$data = json_encode(array("userid"=>$userid,"token"=>$token));
	$url = url('activity/spin/receiveGift');
	return json_decode(curl($url, $data, "POST", had())[1]);}
function Spin_Get_Content($userid, $token){
	$data = json_encode(array("token"=>$token,"userid"=>$userid,"_reqidx"=>0));
	$url = url('activity/spin/getContent');
	return json_decode(curl($url, $data, "POST", had())[1]);}
function Spin($userid, $token, $type, $reqidx){
	$data = json_encode(array("spinType"=>$type,"token"=>$token,"userid"=>$userid,"_reqidx"=>$reqidx));
	$url = url('activity/spin');
	return json_decode(curl($url, $data, "POST", had())[1]);}
function Notif($userid, $token){
	$data = json_encode(array("size"=>"10","page"=>"1","userid"=>$userid,"token"=>$token));
	$url = url('notification/page');
	return json_decode(curl($url, $data, "POST", had())[1]);}
function Notif_ClaimReward($userid, $token){
	$data = json_encode(array("size"=>"10","page"=>"1","userid"=>$userid,"token"=>$token));
	$url = url('notification/batchClaimReward');
	return json_decode(curl($url, $data, "POST", had())[1]);}
function Notif_exchangeClapcoins($userid, $token){
	$data = json_encode(array("size"=>"10","page"=>"1","userid"=>$userid,"token"=>$token));
	$url = url('bounty/exchangeClapcoins');
	return json_decode(curl($url, $data, "POST", had())[1]);}
function haqua(){
	include('cfg.php');
	$h = array();
	$h[] = "Host: game.cc.lerjin.com";
	$h[] = "lang: en";
	$h[] = "charset: UTF-8";
	$h[] = "apiver: 42";
	$h[] = "appver: 3.1.1";
	$h[] = "userid: ".$userid;
	$h[] = "cache-control: no-cache";
	$h[] = "content-type: application/json; charset=UTF-8";
	$h[] = "accept-encoding: gzip";
	$h[] = "uuid: ".$uuid;
	$h[] = "user-agent: okhttp/4.2.1";
	return $h;}
//gameaqua
function Urll($e){
	$url = "https://game.cc.lerjin.com/{$e}";
	return $url;}
function Login_game($userid, $token){
	$data = json_encode(array("ccToken"=>$token,"ccUserId"=>$userid));
	$url = Urll('user/login');
	return json_decode(curl($url, $data, "POST", haqua())[1]);}
function Token_game(){
	include('cfg.php');
	$r12 = Login_game($userid, $token);
	$code12 = $r12->code;
	if($code12 != "OK"){
		echo col("Connection Time out","rr").$n;
		exit;}
		$tokek = $r12->data->token;
		$ua= array();
		$ua[] = "Host: game.cc.lerjin.com";
		$ua[] = "lang: en";
		$ua[] = "origin: https://h5.cc.lerjin.com";
		$ua[] = "token: ".$tokek;
		$ua[] = "content-type: application/json";
		$ua[] = "referer: https://h5.cc.lerjin.com/aquarium/1.4.0/";
		$ua[] = "accept-encoding: gzip, deflate";
		$ua[] = "accept-language: en-ZA,en-US;q=0.9";
		$ua[] = "x-requested-with: com.sanhe.clipclaps";
		return $ua;}
function Enter_Game($tokek){
	$data = json_encode(array("game"=>"AQUARIUM","token"=>$tokek));
	$url = Urll('track/game/enterGame');
	return json_decode(curl($url, $data, "POST", Token_game())[1]);}
function Fish(){
	$data = json_encode(array("gameId"=>"10003","_reqidx"=>2));
	$url = Urll('aquarium/v1/fish/user');
	return json_decode(curl($url, $data, "POST", Token_game())[1]);}
function Feeding_fish(){
	$url = Urll('aquarium/v1/fish/feed');
	return json_decode(curl($url, '', "OPTIONS", Token_game())[1]);}
function Feed_fish(){
	$data = json_encode(array("gameId"=>"10003","_reqidx"=>9));
	$url = Urll('aquarium/v1/fish/feed');
	return json_decode(curl($url, $data, "POST", Token_game())[1]);}
function Bubles_pick($idx){
	$data = json_encode(array("id"=>$idx,"gameId"=>"10003","_reqidx"=>12));
	$url = Urll('aquarium/v1/bubbles/pick');
	return json_decode(curl($url, $data, "POST", Token_game())[1]);}
function Config_set(){
	$url = Urll('aquarium/v1/config/set');
	return json_decode(curl($url, '', "OPTIONS", Token_game())[1]);}
function Config_set2(){
	$data = json_encode(array("key"=>"isCollectPearl","value"=>true,"gameId"=>"10003","_reqidx"=>14));
	$url = Urll('aquarium/v1/config/set');
	return json_decode(curl($url, $data, "POST", Token_game())[1]);}
//opencard
function Token_Card(){
	include('cfg.php');
	$r12 = Login_game($userid, $token);
	$code12 = $r12->code;
	if($code12 != "OK"){
		echo col("Connection Time out","rr").$n;
		exit;}
		$tokek = $r12->data->token;
		$ua= array();
		$ua[] = "Host: game.cc.lerjin.com";
		$ua[] = "lang: en";
		$ua[] = "origin: https://h5.cc.lerjin.com";
		$ua[] = "token: ".$tokek;
		$ua[] = "content-type: application/json";
		$ua[] = "accept-encoding: gzip, deflate";
		$ua[] = "accept-language: en-ZA,en-US;q=0.9";
		$ua[] = "x-requested-with: com.sanhe.clipclaps";
		return $ua;}
function Game_card_key(){
	$data = json_encode(array("key"=>"REWARD"));
	$url = Urll('game/by/key');
	return json_decode(curl($url, $data, "POST", Token_Card())[1]);}
function Game_card_Meta($xing,$metax){
	$data = json_encode(array("metaId"=>$xing,"gameId"=>"10007","_reqidx"=>1));
	$url = Urll('reward/user/'.$metax);
	return json_decode(curl($url, $data, "POST", Token_Card())[1]);}
function Game_Open(){
	$url = Urll('reward/user/card/open');
	return json_decode(curl($url,  '', "OPTIONS", Token_Card())[1]);}
function Game_card_Open($xing){
	$data = json_encode(array("metaId"=>$xing,"index"=>0,"gameId"=>"10007","_reqidx"=>2));
	$url = Urll('reward/user/card/open');
	return json_decode(curl($url, $data, "POST", Token_Card())[1]);}
//Core
function Head_U(){
	include('cfg.php');
	$h = array();
	$h[] = "appver: 3.1.1";
	$h[] = "userid: ".$userid;
	$h[] = "uuid: ".$uuid;
	$h[] = "token: ".$token;
	$h[] = "content-type: application/json";
	return $h;}
function Url_Core($urlcore){
	$url = "https://core.cc.lerjin.com/{$urlcore}";
	return $url;}
function Medal_Info(){
	$url = Url_Core('achievement/video/medal/info');
	return json_decode(curl($url,'', "GET", Head_U())[1]);}
function Achievement(){
	$url = Url_Core('achievement/list');
	return json_decode(curl($url,'', "GET", Head_U())[1]);}
function Upgrade($upgrade){
	$data =json_encode(array("type"=>$upgrade));
	$url = Url_Core('achievement/upgrade');
	return json_decode(curl($url,$data, "POST", Head_U())[1]);}
function Feeds(){
	$url = "https://newfeeds.cc.lerjin.com/feeds/home-pull?form=home%20tab";
	return json_decode(curl($url,'', "GET", Head_U())[1]);}
function Behavior($source,$pull,$ngapain){
	$data  = json_encode(array("sourceId"=>$source,"pullFrom"=>$pull,"eventType"=>$ngapain));
	$url = "https://cpv.cc.lerjin.com/behavior/event";
	return json_decode(curl($url, $data, "POST", Head_U())[1]);}
function cetak($msg, $tipe){
	$len = 66;$var = col("/","a");
	if(strpos($msg, "|") == ""){
		$title = ((($len-strlen($msg))/2)-1);
		if($tipe=="line"){echo str_repeat($var,$len)."\n";
		}else if($tipe=="title"){
			echo $var.str_repeat(" ", $title).col(strtoupper($msg),"h").str_repeat(" ", $title).$var."\n".str_repeat($var,$len)."\n";
		}else if($tipe=="warn"){
			echo str_repeat($var,$len)."\n".$var.str_repeat(" ", $title).col(strtoupper($msg),"m").str_repeat(" ", $title).$var."\n";
			}
		}
	if(strpos($msg, "|") != ""){
		$msg1 = explode("|",$msg)[0];$msg2 = explode("|",$msg)[1];
		$gar= 10-strlen($msg1);
		$isi1 = strlen($msg1.str_repeat(" ",$gar)." ~> ".$msg2);$isi2 =($len-$isi1)-3;
		if ($tipe=="isi"){
			echo $var." ".col($msg1,"k").str_repeat(" ",$gar).col(" ~> ","p").col($msg2,"k").str_repeat(" ",$isi2).$var."\n";
			}else if($tipe=="request"){
				echo $var." ".col($msg1,"c").str_repeat(" ",$gar).col(" ~> ","p").col($msg2,"c").str_repeat(" ",$isi2).$var."\n";
				}
		}
}
function bn(){
cetak("#","line");
cetak("clip-claps", "title");
cetak("Author|iewil", "isi");
cetak("Youtube|youtube.com/c/iewil", "isi");
cetak("Support|all-team-function", "isi");
cetak("Request|Apapie", "request");
cetak("SCRIPT GRATIS - RESIKO DI TANGGUNG USER ", "warn");
cetak("#","line");
	}
function tmr($r,$y){ 
	for($x=60;$x>-0;$x--){
echo$r;
echo str_repeat(" ",17).col("$y:","p").col($x,"p");
if($x==60 or $x==55 or $x==50 or $x==45 or $x==40 or $x==35 or $x==30 or $x==25 or $x==20  or $x==15 or $x==10 or $x==5){echo col(" Seconds","m").col(" For","k").col(" The ","h").col("Next ","b").col("Claim","u");}
if($x==59 or $x==54 or $x==49 or $x==44 or $x==39 or $x==34 or $x==29 or $x==24 or $x==19 or $x==14 or $x==9 or $x==4){echo col(" Seconds ","u").col("For","m").col(" The","k").col(" Next ","h").col("Claim","b");}
if($x==58 or $x==53 or $x==48 or $x==43 or $x==38 or $x==33 or $x==28 or $x==23 or $x==18 or $x==13 or $x==8 or $x==3){echo col(" Seconds ","b").col("For ","u").col("The","m").col(" Next","k").col(" Claim","h");}
if($x==57 or $x==52 or $x==47 or $x==42 or $x==37 or $x==32 or $x==27 or $x==22 or $x==17 or $x==12 or $x==7 or $x==2){echo col(" Seconds ","h").col("For ","b").col("The ","u").col("Next","m").col(" Claim","k");}
if($x==56 or $x==51 or $x==46 or $x==41 or $x==36 or $x==31 or $x==26 or $x==21 or $x==16 or $x==11 or $x==6 or $x==1){echo col(" Seconds","k").col(" For ","h").col("The ","b").col("Next ","u").col("Claim","m");}
sleep(1);
}
echo$r;}
function control($control){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 8.1.0; Redmi 6A) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $control);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      return curl_exec($ch);
      }
      
$res = control("https://controlc.com/3e7c4a41");
$status = explode(' ',explode('Status: ',$res)[1])[0];
$link = explode('Link Password: ',$res);$link = explode(' ',$link[1]);
$pw1 = explode('Pass: ',$res);$pw = explode(' ',$pw1[1]);$pass = $pw[0];
$read = file_get_contents("key.txt");c();
if($status == "on"){
if($read == $pass){
	echo col("Checking password","k");
	sleep(2);
	echo $r.col("✓ ","h");
	echo col(" True Password","h");
	}
if($read != $pass){
	c();
echo $n.col(str_repeat(" ",29),"rr").col("WARNING!!","rr").col(str_repeat(" ",28),"rr").$n2;
echo col(" BOT CAN CAUSE YOUR ACCOUNT TO GET BANNED ","m").$n;
echo col(" ARE YOU SURE YOU WANT TO USE THIS BOT? ","m").$n;
echo col(str_repeat(" ",66),"rr");
echo $n2.col("PRESS ENTER TO CONTINUE","p");
fgets(STDIN);
c();
	$save = fopen("key.txt", "w");
	bn();
	echo$n2.col(" BUKA LINK DI BAWAH UNTUK MENDAPATKAN PASSWORD","h").$n2;
	echo col(" Link Password : ","h").col($link[0],"p").$n;
	echo col(" Password : ","h");
		$p = trim(fgets(STDIN));
	col($p,"p");
if($pass == $p){
        fwrite($save, $p);
        echo $n.col(" PASSWORD BENAR","h").$n;
        fclose($save);
        sleep(2);
        echo col(" PASSWORD AKAN DI RESET SETIAP HARI MINGGU","h").$n;
        sleep(3);
        }else{
        echo col(" LOGIN GAGAL, MASUKKAN PASSWORD YANG BENAR","rr").col("","hp").$n;
        exit;
        }
        }
sleep(2);
system("termux-open-url  https://youtube.com/channel/UCvBSqRaT6nsPvtl8m6GaQpg");
c();
	echo col("Date ","p").col(" ~> ","u");
	echo col(date('Y/m/d'),"b").$t;
	echo col("Time ","p").col(" ~> ","u");
	echo col(date('H:i:s'),"k").$t;
	echo col("Scipt","p").col(" ~> ","u").col("Online","h").$n;
	bn();
	echo $n2;}
if($status == "off"){
	echo col("DEAD SCRIPT","rr").$n;
	echo col("Sorry, the script can't be upgraded","rr").$n;
	exit;}
if($status == "scam"){
	echo col("Scam Site, Sorry","rr").$n;
	exit;}
include('cfg.php');

$r1 = Login($userid, $token);
$code_login = $r1->code;
if($code_login != 1){
	echo col("Failed Login","rr").$n;
	exit;}
	$login = $r1->data;
	$nickname = $login->nickname;
	$coins = $login->coins;
	$centBalance = $login->centBalance;
	$cash = $login->cash;
	$scratch_card_num = $login->scratch_card_num;
	$notificationNum=$login->notificationNum;
//INFO
ket("Username",$nickname);ket("Coins",$coins);ket("Cash",$cash);
ket("Cent Balance",$centBalance);ket("Scratch Card",$scratch_card_num);
ket("Notification",$notificationNum);
echo$n;
//READ
echo col("# Reading mission","a").$n;
	for($nom=0;$nom<37;$nom++){
		$nn = $nom+1;
		$r2 = Read($userid, $token);
		$code2 = $r2->code;
		if($code2 != 1){
			echo col("Connection Time out","rr").$n;
			exit;}
			$day=$r2->data->day;
			$activeDay=$r2->data->activeDay;
			$articleTime=$r2->data->articleTime;
			$versions = $r2->data->config->version;
			$timerReward = ($r2->data->config->timerReward)[$nom];
			$time=$timerReward->time;
			$rewardType=$timerReward->rewardType;
			$r3 = Reward_read($userid, $token, $day,$time,$rewardType,$versions,$activeDay,$articleTime);
			$code3=$r3->code;
			if($code3 == 1){
				echo col($nn,"c").col(" success claim ","h").col($rewardType,"k").col(" from reading mission","h").$n;
				Refresh_read($userid, $token, $day,$time,$rewardType,$versions,$activeDay,$articleTime);
				}else{
					echo col($nn,"c").col(" reading mission has been completed previously","m").$n;
					}
		sleep(3);
		}
		echo col("~> ","p").col("all reading mission complete","m").$n2;

//FUNNY
	echo col("# View funny vidio","a").$n;
	for($num=0;$num<18;$num++){
		$nn = $num+1;
		$r4 = Funny($userid, $token);
		$code4 = $r4->code;
		if($code4 != 1){
			echo col("Connection Time out","rr").$n;}
			$day = $r4->data->day;
			$activeDay = $r4->data->activeDay;
			$articleTime = $r4->data->articleTime;
			$versions = $r4->data->config->version;
			$time = ($r4->data->config->timerReward)[$num]->time;
			$rewardType = ($r4->data->config->timerReward)[$num]->rewardType;
			$r5 = Reward_funny($userid, $token, $day,$time,$rewardType,$versions,$activeDay,$articleTime);
			$code5 = $r5->code;
			if($code5 == 1){
				echo col($nn,"c").col(" success claim ","h").col($rewardType,"k").col(" from viewing funny vidio","h").$n;
				}else{
					echo col($nn,"c").col(" viewing funny vidio has been completed previously","m").$n;
					}
			sleep(3);
			}
			echo col("~> ","p").col("all viewing funny vidio mission complete","m").$n2;

//SPIN
echo col("# Spin well (Mega, Lucky, Advert)","a").$n;
$r6 = Receive_Gift($userid, $token);
$code6 = $r6->code;
if($code6 != 1){
	echo col("Connection Time out","rr").$n;}
	$r8 = Spin_Get_Content($userid, $token);
	$mega = $r8->data->spins->mega->freeAmount->value;
	$lucky = $r8->data->spins->lucky->freeAmount->value;
	$advert = $r8->data->spins->advert->freeAmount->value;
	
	echo col("# Spin well Mega ","a").$n;
	if($mega != 0){
	$mega = $mega+1;
	for($spin1 = 1;$spin1<$mega;$spin1++){
	$r9 = Spin($userid, $token, "mega", "1");
	$code9 = $r9->code;
	if($code9 == 1){
			$typo = $r9->data->reward->type;
			$quantity = $r9->data->reward->quantity;
			echo col("Success claim ","h").col($quantity,"p")." ".col($typo,"p").$n;
			}
			sleep(1);
			}
			}
			echo col("~> ","p").col("Mega spin chances charging,  please try again later.","m").$n2;
				sleep(1);
				echo col("# Spin well Lucky","a").$n;
	if($lucky != 0){
	$lucky = $lucky+1;
	for($spin2=1;$spin2<$lucky;$spin2++){
			$r10= Spin($userid, $token, "lucky", "2");
			$code10 = $r10->code;
			if($code10 != 1){
					$typo = $r10->data->reward->type;
					$quantity = $r10->data->reward->quantity;
					echo col("Success claim ","h").col($quantity,"p")." ".col($typo,"p").$n; 
					}
					sleep(1);
					}
			}
			echo col("~> ","p").col("Lucky spin chances charging,  please try again later.","m").$n2;
				sleep(1);
				echo col("# Spin well Advert","a").$n;
	if($advert != 0){
	$advert = $advert+1;
	for($spin3=1;$spin3<$lucky;$spin3++){
			$r11= Spin($userid, $token, "advert", "3");
			$code11 = $r11->code;
			if($code11 != 1){
					$typo = $r11->data->reward->type;
					$quantity = $r11->data->reward->quantity;
					echo col("Success claim ","h").col($quantity,"p")." ".col($typo,"p").$n; 
					}
					sleep(1);
					}
			}
			echo col("~> ","p").col("Advert spin chances charging,  please try again later.","m").$n2;
//Game Aquarium
echo col("# Game Aquarium","a").$n;
$r12 = Login_game($userid, $token);
$code12 = $r12->code;
	if($code12 != "OK"){
		echo col("Connection Time out","rr").$n;
		exit;}
		$tokek = $r12->data->token;
$r13 = Enter_Game($tokek);
$code13 = $r13->code;
	if($code13 != "OK"){
		echo col("Connection Time out","rr").$n;
		exit;}
		$r14 = Fish();
		$freeFood = $r14->data->freeFood;
		
		if($freeFood != 0){
			Feeding_fish();
			sleep(3);
			$r15 = Feed_fish();
			$code15 = $r15->code;
			if($code15 == "ALL_FISH_FULL"){
				echo col("All fish full","h").$n;
				}else{
					$id = ($r15->data->bubbles)[0]->id;
					$id1 = ($r15->data->bubbles)[1]->id;
					$id2 = ($r15->data->bubbles)[2]->id;
					$id3 = ($r15->data->bubbles)[3]->id;
					$id4 = ($r15->data->bubbles)[4]->id;
					$id5 = ($r15->data->bubbles)[5]->id;
					$id6 = ($r15->data->bubbles)[6]->id;
					$id7 = ($r15->data->bubbles)[7]->id;
					$id8 = ($r15->data->bubbles)[8]->id;
					$id9 = ($r15->data->bubbles)[9]->id;
					$id10 = ($r15->data->bubbles)[10]->id;
					$id11 = ($r15->data->bubbles)[11]->id;
					$id12 = ($r15->data->bubbles)[12]->id;
					if($id){
						$lipids = array("$id","$id1","$id2","$id3","$id4","$id5","$id6","$id7","$id8","$id9","$id10","$id11","$id12");
						foreach ($lipids as $rom){
						$r16 = Bubles_pick($rom);
						$code16 = $r16->code;
						if($code16=="ERROR"){
							echo col("No bubbles","m").$n;
							}else{
								$count = $r16->data->count;
								echo col("Collected bubbles ","h").col($count,"k").$n;
								}
						}//id
						Config_set();
						Config_set2();
						}//fishfull
		}//freefood
		}
		echo col("~> ","p").col("don't forget to feed the fish.","m").$n2;

//Open_chest
$r17 = Reward_List($userid, $token);
$treasureChest = $r17->data->treasureChest;

for($nom17=0;$nom17<5;$nom17++){
$type17 = ($treasureChest)[$nom17]->type;
$num17 = ($treasureChest)[$nom17]->num;
echo col("# Open $num17 $type17 treasure","a").$n;
if($num17 != 0){
	$num17 = $num17+1;
	for($num1 = 1;$num1<$num17;$num1++){
		$r18 = Open_Chest($userid, $token, $type17);
		$code18 = $r18->code;
		if($code18==1){
			$type18 = ($r18->data->rewards)[0]->type;
			$quantity18 = ($r18->data->rewards)[0]->quantity;
			echo col($num1,"c").col(" Success received ","h").col($quantity18,"k")." ".col($type18,"k").$n;
			}//code18
			sleep(3);
		}//for
		echo col("~> ","p").col("all $type17 treasure have been opened!","m").$n2;
		sleep(3);
		}else{//!=0
		echo col("~> ","p").col("You have not a $type17 treasure!","m").$n2;}
		sleep(3);
	}//nom17
//NOTIF
echo col("# Collect reward notification","a").$n;
if($notificationNum != 0){
Notif($userid, $token);
$r19 = Notif_ClaimReward($userid, $token)->code;
if($r19==1){
	echo col("Success collecting notif reward","h").$n;
	}
$r20 = Notif_exchangeClapcoins($userid, $token)->code;
if($r20==1){
	echo col("Success exchange Clapcoins","h").$n;
	}
}
echo col("~> ","p").col("No notification can be claim!","m").$n2;

echo col("# Open Card","a").$n;
$kart=array("C00002","G00004","G00005","C00001","G00003");
foreach($kart as $xing){
		Game_card_key();
		$r23 = Game_card_Meta($xing,"meta");
		$code23 = $r23->code;
		if($code23 == "OK"){
			$data23 = $r23->data->name;// 1$
			echo col("Card ","b").col("~> ","u").col($data23,"p");}
		$r24 = Game_card_Meta($xing,"ticket");
		$code24 = $r24->code;
		if($code24 == "OK"){
				$ticketNum = $r24->data->ticketNum;
				echo col(" | ","c").col("Ticket Number ","b").col("~> ","u").col($ticketNum,"p").$n;}
		Game_Open();
		$r25 = Game_card_Open($xing);
		$code25 = $r25->code;
		if($code25 == "LACK_OF_BALANCE"){
				echo col($code25,"m").$n;
				}
		if($code25 == "OK"){
			$openTime = ($r25->data)[0]->openTime;
			$rewardlevel = ($r25->data)[0]->rewardlevel;
			$rewardType = ($r25->data)[0]->rewardType;
			$rewardAmount = ($r25->data)[0]->rewardAmount;
			
			ket("Open Time",$ticketNum);
			ket("Reward Level",$ticketNum);
			ket("Reward Type",$ticketNum);
			ket("Reward Amount",$ticketNum);
			}
		sleep(10);
		}
		
echo $n.col("# Unlimited Event Claim","a").$n;
while(true){
echo col("# Stop to repeat bot after 24 hours => Ctrl+C","m").$n;
$r37 = Medal_Info()->level;
ket("Medal Level",$r37);
$r26 = Achievement();
$value1 = $r26[0]->achievementValue;
	$Total1 = $r26[0]->progressBar->nextGrandTotal;
	$Num1 = $r26[0]->progressBar->rewardNum;
	$Max1 = $r26[0]->ifMax;
	ket("View Value",$value1."/".$Total1);
	if($value1>=$Total1){if($Max1 != 1){Upgrade(1);
	echo col("Success Claim ","h").col($Num1,"k").col(" coins","k").$n;}else{echo col("~> ","b").col("Max claim View","m").$n;}}
	
	$value2 = $r26[1]->achievementValue;
	$Total2 = $r26[1]->progressBar->nextGrandTotal;
	$Num2 = $r26[1]->progressBar->rewardNum;
	$Max2 = $r26[1]->ifMax;
	ket("Claps Value",$value2."/".$Total2);
	if($value2>=$Total2){if($Max2 != 1){Upgrade(2);
	echo col("Success Claim ","h").col($Num2,"k").col(" coins","k").$n;}else{echo col("~> ","b").col("Max claim Claps","m").$n;}}
	
	$value3 = $r26[2]->achievementValue;
	$Total3 = $r26[2]->progressBar->nextGrandTotal;
	$Num3 = $r26[2]->progressBar->rewardNum;
	$Max3 = $r26[2]->ifMax;
	ket("Share Value",$value3."/".$Total3);
	if($value3>=$Total3){
		if($Max3 != 1){Upgrade(3);
	echo col("Success Claim ","h").col($Num3,"k").col(" coins","k").$n;}else{echo col("~> ","b").col("Max claim Share","m").$n;}}
	
$r30 = Feeds();
$source0 = $r30[0]->sourceId;
$source1 = $r30[1]->sourceId;
$source2 = $r30[2]->sourceId;
$source3 = $r30[3]->sourceId;
$source4 = $r30[4]->sourceId;
$source5 = $r30[5]->sourceId;
$source6 = $r30[6]->sourceId;
$source7 = $r30[7]->sourceId;
$source8 = $r30[8]->sourceId;
$totsource = "$source0,$source1,$source2,$source3,$source4,$source5,$source6,$source7,$source8";
$r31 = Behavior($totsource,'""',"SHOW");
$nimb = 1;
for($nim = 0;$nim<9;$nim++){
	$source = $r30[$nim]->sourceId;
$pullFrom = $r30[$nim]->pullFrom;

$r32 = Behavior($source,$pullFrom,"SHARE");
if($r32==1){
echo col("Vidio number ","c").col($nimb,"b").col(" success ","h").col("share","p");}
$r33 = Behavior($source,$pullFrom,"CLAP");
if($r33==1){
echo col(",","m").col("clap","k");}
$r34 = Behavior($source,$pullFrom,"VIEW");
//if($r33==1){
//echo col(",","m").col("view","c");}
$r35 = Behavior($source,$pullFrom,"FULL_VIEW");
if($r33==1){
echo col(",","m").col("view full vidio","u");}
echo$n;
sleep(5);
$nimb = $nimb+1;
}
cetak('#',"line");
sleep(5);
}


