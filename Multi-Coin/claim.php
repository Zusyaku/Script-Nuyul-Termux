<?php

/*
Script Name : Multi Claim Coin To ExpressCrypto.io
Author : Kingtebe
Date : 21-07-2021
Version 1.1
Note : Kagak usah rikod Anjim, tinggal pake aja ribet amat !!
Github : https://github.com/Kingtebe
*/

// Only Color
$x ="\e[30m";
$r ="\e[31m";
$g ="\e[32m";
$y ="\e[33m";
$c ="\e[36m";
$w ="\e[37m";

function dash($url,$headers) { $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); $result = curl_exec($ch); return $result;} system("clear"); echo "\e[33m   (               )      (                               )\n   )\       (   ( /(      )\ )     )    (          (   ( /(\n\e[33m((((_)(    ))\  )\()) (  (()/(  ( /(   ))\   (    ))\  )\())\n \e[33m)\ \e[33m_ \e[33m)\\  /((_)(_))/  )\  /(_)) )(_)) /((_)  )\  /((_)(_))/\n \e[33m(_)\e[33m_\\ \e[33m(_)(_))( | |_  ((_)(_) _|((_)_ (_))(  ((_)(_)) \e[37m| |_\n\e[37m  / _ \  | || ||  _|/ _ \ |  _|/ _` || || |/ _| / -_) |  _|\n /_/ \_\  \_,_| \__|\___/ |_|  \__,_| \_,_|\__| \___|  \__|\n\n \e[31m[\e[33m•\e[31m] \e[37mAuthor : Kingtebe\n \e[31m[\e[33m•\e[31m] \e[37mDate   : 21-07-2021\n \e[31m[\e[33m•\e[31m] \e[37mGithub : \e[32mgithub.com/Kingtebe\n\e[33m~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~\n\e[31m >> \e[37mWarning \e[37m!!\n\e[37mIni adalah program ilegal\nsegala resiko ditanggung pegguna\n\e[33m~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~\n"; include("cfg.php"); $headers = array( "user-agent".$user_agent, "cookie:  ".$cookie); $get = dash("https://autofaucet.org/dashboard", $headers); $url = file_get_contents("https://api.myip.com"); $js = json_decode($url); $myip = $js->ip; if (preg_match('#<p class="username">(.*?)</p>#', $get, $username)) { echo " {$w}Account login as {$c}".$username[1]; sleep(2.1); echo "\n         {$r}[{$y}•{$r}] {$w}Your IP : {$g}{$myip}"; sleep(2.1); echo "\n         {$r}[{$y}•{$r}] {$w}Version : {$w}1.1 "; sleep(1.5); echo "{$y}\n~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~\n"; sleep(1.8); echo " {$r}>>> {$w}Starting Bot {$r}<<<\n"; } else { echo "\n {$r}[{$y}!{$r}] {$w}Expired cookie {$y}please change the cookie !!\n\n"; exit(); }
while(true) { $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, "https://autofaucet.org/verify/cli-au"); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); curl_setopt($ch, CURLOPT_POSTFIELDS, "currencies%5B%5D=LTC&currencies%5B%5D=XMR&currencies%5B%5D=DOGE&currencies%5B%5D=DASH&currencies%5B%5D=TRX&currencies%5B%5D=XRP&currencies%5B%5D=BCN&currencies%5B%5D=ADA&currencies%5B%5D=RDD&currencies%5B%5D=USDT&payout=2&frequency=2&boost=1"); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); $result = curl_exec($ch); $ch = curl_init(); curl_setopt($ch, CURLOPT_URL,"https://autofaucet.org/dashboard/claim/auto/start"); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); $result = curl_exec($ch); if (preg_match_all('#<p class="message"><i class="fas fa-check green"></i>(.*?)</p>#is', $result, $balance)) { for ($i=0;$i<count($balance[1]);$i++){ echo "{$g}".$balance[1][$i]."\n";} } else { echo "\n {$r}[{$y}!{$r}] {$w}Sorry {$y}please try again later !!\n\n"; exit(); } $token = explode('<p class="amount">', $result)[1]; $token = explode('<span>', $token)[0]; if ($token == "0") { echo "{$y}~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~\n {$r}[{$y}!{$r}] {$w}Sorry the FCT TOKEN has run out {$y}please get the token back !!\n{$y}~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~\n"; exit(); } else { echo "{$y}~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~\n {$r}[{$y}•{$r}] {$w}FCT TOKEN : {$c}".$token."\n{$y}~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~\n";} $timer = 300+time(); while(true):
	echo "\r			\r";
	$res = $timer-time();
	if ($res < 1) { break; }
		echo "{$w}Next Claim {$r}[ {$w}".date('H:i:s', $res)."{$r} ] {$w}Seconds "; 
		sleep(1);
		endwhile;}
