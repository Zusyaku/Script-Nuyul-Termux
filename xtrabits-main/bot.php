<?php
/*
*
*Creator	: iewil
*Github		: https://github.com/iewilmaestro
*Youtube	: https://www.youtube.com/c/iewil
*Telegram	: @iewil57
*Support	: Team-Function-INDO
*
*/
class Modul{
	public $host = "https://auto.xtrabits.click/session/autofaucet";
	public $reg = "https://bit.ly/32en9sH";
	public $a = ["iewil","xtrabits","1.4"];
	public $yt = "https://youtu.be/GXQQGHhoQB8";
	public $disable = "
	Script mati karena web update / scam!
	Support Channel saya dengan cara
	Subscribe https://www.youtube.com/c/iewil
	karena subscribe itu gratis :D
	Untuk mendapatkan info Script terbaru
	Join grub via telegram ~> https://t.me/Iewil_G
	ðŸ‡®ðŸ‡© Family-Team-Function-INDO
	\n";
	public function Run($url, $httpheader = 0, $post = 0, $proxy = 0){ // url, postdata, http headers, proxy, uagent
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		//curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_COOKIE,TRUE);
		//curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
		//curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
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
			//curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
		}
		curl_setopt($ch, CURLOPT_HEADER, true);
		$response = curl_exec($ch);
		$httpcode = curl_getinfo($ch);
		if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
			$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			curl_close($ch);
			return array($header, $body)[1];
		}
	}
	public function col($str,$color){
		if($color==5){$color=['h','k','b','u','m'][array_rand(['h','k','b','u','m'])];}
		$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";
	}
	public function Slow($msg){$slow = str_split($msg);
		foreach( $slow as $slowmo ){echo $slowmo; usleep(70000);}
	}
	public function Save($namadata){
		if(file_exists(trim($this->a[1])."/".$namadata)){
			$datauser=file_get_contents(trim($this->a[1])."/".$namadata);
		}else{
			$datauser=readline("Input ".$namadata." > ");echo "\n";
			file_put_contents(trim($this->a[1])."/".$namadata,$datauser);
		}
		return $datauser;
	}
	public function tmr($tmr){
		$timr=time()+$tmr;
		while(true){
			echo "\r                       \r";$res=$timr-time(); 
			if($res < 1){break;}
			echo $this->col(date('i:s',$res),"5");
			sleep(1);
		}
	}
	public function line(){
		$u="\033[1;35m";$h="\033[1;32m";$p="\033[1;37m";$m="\033[1;31m";$k="\033[1;33m";$b="\033[1;34m";$c="\033[1;36m";$len = 36;$var = $p.'─';
		echo str_repeat($var,$len)."\n";
	}
	public function bn(){
		system('clear');
		$u="\033[1;35m";$h="\033[1;32m";$p="\033[1;37m";$m="\033[1;31m";$k="\033[1;33m";$b="\033[1;34m";$c="\033[1;36m";
		$mp="\033[101m\033[1;37m";$cl="\033[0m";$mm="\033[101m\033[1;31m";$hp="\033[1;7m";
		$z=strtoupper(trim($this->a[1]));$x=18;$y=strlen($z);$line=str_repeat('_',$x-$y);
		echo "\n{$m}[{$p}Script{$m}]->{$k}[".$h.$z."{$k}]-[".$h.$this->a[2].$k."]".$p.$line.".\n";
		echo "{$u}.__              .__.__ 	    {$p}| \n";
		echo "{$u}|__| ______  _  _|__|  |	\n|  |/ __ \ \/ \/ /  |  |\n";
		echo "|  \  ___/\     /|  |  |__\n|__|\___  >\/\_/ |__|____/\n";
		echo "        \/\n";
		echo "{$mm}[{$mp}▶{$mm}]{$cl} {$k}https://www.youtube.com/c/iewil\n";
		echo "{$c}{$hp} >_{$cl}{$b} Team-Function-INDO\n";
		echo "{$p}────────────────────────────────────\n";
		echo "{$h}Link Register {$p}: ".$k.$this->reg."\n\n";
	}
	public function Short(){
		$d=date("D");
		if(file_exists($_SERVER["TMPDIR"]."/".trim($this->a[1]))){
			$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".trim($this->a[1])));
		}else{
			file_put_contents($_SERVER["TMPDIR"]."/".trim($this->a[1]),$d);
			$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".trim($this->a[1])));
		}
		if($d==$day){}else{
			unlink(trim($this->a[1])."/key.txt");
			unlink($_SERVER["TMPDIR"]."/".trim($this->a[1]));	
		}
		$script = file_get_contents('https://pastebin.com/raw/5mri6gAM');
		$status = explode('|',explode('#'.trim($this->a[1]).':',$script)[1])[0];
		if($status == "on"){RETRY:
			$rand = rand(0,14);
			$short = json_decode(file_get_contents('https://pastebin.com/raw/EiKBhp8U'),1);
			$link = file_get_contents($short[$rand]['url']);
			$pass = trim(explode(' ',explode('Password: ',$link)[1])[0]);
			$read = file_get_contents(trim($this->a[1])."/key.txt");
			if(file_exists(trim($this->a[1])."/key.txt")){
			}else{
				self::bn();echo $this->col(" Link Password : ","h").$this->col($short[$rand]['short'],'k')."\n";
				$p = readline($this->col(" Password : ","h"));
				if($pass == $p){
					file_put_contents(trim($this->a[1])."/key.txt",$p);
				}else{
					echo $this->col(" Password salah!","m")."\n";self::line();goto RETRY;
				}
			}
		}elseif($status == "off" or $status == null){
			$this->bn();
			echo $this->col("The script is disabled","m")."\n\n";
			echo self::Slow($this->disable);
			exit;
		}
	}
}
class Site extends Modul{
	public function H1(){
		$cookie=$this->Save('Cookie');
		$user_agent=$this->Save('User_Agent');
		$h[]="cookie: ".$cookie;
		$h[]="user-agent: ".$user_agent;
		return $h;
	}
}
class Bot extends Site{
	public function _run(){
		error_reporting(0);
		$api = json_decode(file_get_contents("http://ip-api.com/json"),1);
		$zone = $api["timezone"];
		if($zone){
			date_default_timezone_set($zone);
		}
		self::Short();
		self::bn();
		
		cookie:
		$this->Save('Cookie');
		$this->Save('User_Agent');
		system("termux-open-url ".$this->yt);
		self::bn();
		
		menu:
		echo $this->col("1 >","m")." AutoFaucet\n";
		echo $this->col("2 >","m")." Update Cookie\n";
		$pil=readline($this->col("Input Number ","h").$this->col("> ","m"));
		self::line();
		if($pil==1){goto faucet;
		}elseif($pil==2){unlink(trim($this->a[1])."/Cookie");goto cookie;
		}else{ echo $this->col("Bad Number\n","m");goto menu;}
		
		faucet:
		while(true){
			$r1=$this->Run($this->host,$this->H1(),$data=true);
			if(preg_match('/Cloudflare/',$r1)){
				echo $this->col("cloudflare detect\n","m");
				self::line();
				sleep(5);
				goto faucet;
			}
			$err=trim(explode('</div>',explode('<div class="AutoACell AAC-error">',$r1)[1])[0]);
          
			if(preg_match('/FaucetPay/',$r1)){
				$pay=$this->col('Faucetpay.io',"b");
			}elseif(preg_match('/ExpressCrypto/',$r1)){
				$pay=$this->col('ExpressCrypto',"m");
			}elseif(preg_match('/Balance/',$r1)){
				$pay=$this->col('Balance',"p");
			}elseif(preg_match('/Coinbase/',$r1)){
				$pay=$this->col('Coinbase',"b");
			}else{
				$pay=null;
			}
			$coin1=trim(explode('</div>',explode('<i class="fas fa-coins"></i>',$r1)[1])[0]);
			preg_match_all('#<div class="AutoACell AAC-success">(.*?)<a#is',$r1,$ss);
			if($coin1){
				echo $this->col($coin1,"k")."\n";
			}else{
				echo $this->col("Tokens Tidak Terdeteksi","m")."\n";self::line();sleep(10);goto faucet;}
			if($ss[1]){
				for($i=0;$i<count($ss[1]);$i++){
					$s=str_replace('Successfully','',$ss[1][$i]);
            		echo $this->col(trim($s),"h").' '.$pay."\n";
				}
			}
			if($err=='Insufficient balance to claim rewards.'){echo $this->col($err,"m")."\n";self::line();goto menu;}
            self::line();
			$this->tmr(60);
		}
	}
}
$play = new Bot();
$play -> _run();
