<?php
date_default_timezone_set('Asia/Jakarta');

/*
Script Name : All-Coin ExpressCrypto
Author : Kingtebe
Data : 13-07-2021
Version : 1.1
Youtube : FaaL TV
Github : https://github.com/Kingtebe
Note : Jangan Direcode Jancok !!
*/

function curl($url,$ua) {

	$claim = curl_init();
	curl_setopt($claim, CURLOPT_URL, $url);
	curl_setopt($claim, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($claim, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($claim, CURLOPT_HTTPHEADER, $ua);
	curl_setopt($claim, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($claim);
	return $result;}
		$ua = array();
		include("cfg.php");
		$ua[] = "user-agent: ".$user;
		$ua[] = "cookie: ".$cookie;

	system("clear"); echo "\n\n   \e[33m█████\e[31m╗ \e[33m██\e[31m╗     \e[33m██\e[31m╗       \e[33m██████\e[31m╗ \e[33m██████\e[31m╗ \e[33m██\e[31m╗\e[33m███\e[31m╗   \e[33m██\e[31m╗\n  \e[33m██\e[31m╔══\e[33m██\e[31m╗\e[33m██\e[31m║     \e[33m██\e[31m║      \e[33m██\e[31m╔════╝\e[33m██\e[31m╔═══\e[33m██\e[31m╗\e[33m██\e[31m║\e[33m████\e[31m╗  \e[33m██\e[31m║\n  \e[33m███████\e[31m║\e[33m██\e[31m║     \e[33m██\e[31m║\e[33m█████\e[31m╗\e[33m██\e[31m║     \e[33m██\e[31m║   \e[33m██\e[31m║\e[33m██\e[31m║\e[33m██\e[31m╔\e[33m██\e[31m╗ \e[33m██\e[31m║\n  \e[33m██\e[31m╔══\e[33m██\e[31m║\e[33m██\e[31m║     \e[33m██\e[31m║╚════╝\e[33m██\e[31m║     \e[33m██\e[31m║   \e[33m██\e[31m║\e[33m██\e[31m║\e[33m██\e[31m║\e[31m╚\e[33m██\e[31m╗\e[33m██\e[31m║\n  \e[33m██\e[31m║  \e[33m██\e[31m║\e[33m███████\e[31m╗\e[33m███████\e[31m╗ \e[31m╚\e[33m██████\e[31m╗\e[31m╚\e[33m██████\e[31m╔╝\e[33m██\e[31m║\e[33m██\e[31m║ \e[31m╚\e[33m████\e[31m║\n  \e[31m╚═╝  ╚═╝╚══════╝╚══════╝  ╚═════╝ ╚═════╝ ╚═╝╚═╝  ╚═══╝\n\e[33m+\e[31m=========================================================\e[33m+\n  \e[31m[\e[36m*\e[31m] \e[37mMade By : Kingtebe\n  \e[31m[\e[36m*\e[31m] \e[37mYoutube : FaaL TV                       \e[31m[ \e[36mONLINE \e[31m]\n  \e[31m[\e[36m*\e[31m] \e[37mVersion : 1.1\n  \e[31m[\e[36m*\e[31m] \e[37mGithub  : https://github.com/Kingtebe\n\e[33m+\e[31m=========================================================\e[33m+\n\n";
	sleep(1.5); echo " \e[31m[\e[32m#\e[31m] \e[37mTanggal : \e[32m".date('d-m-Y')."\n"; sleep(2.1);
	echo " \e[31m[\e[32m#\e[31m] \e[37mJam : \e[32m".date('H:i:s')."\n\n";

	while(true) {
		$res = curl("https://cryptoshi.club/home?BTC=0&BCH=0&BCN=1&ADA=1&DASH=0&DGB=1&DOGE=1&ETH=0&ETC=1&LSK=1&LTC=0&XMR=0&NEO=1&PPC=1&POT=0&RDD=1&XRP=1&STRAT=0&XTZ=1&TRX=1&WAVES=1&ZEC=0&EXS=1&EXG=1&PIVX=1&VTC=1", $ua);
		if (preg_match_all('#<span class="label label-success">(.*?)</span>#is', $res, $balance)) {;
			for($i=0;$i<count($balance[1]);$i++){
				echo "\e[31m[\e[36m*\e[31m] \e[33m".$balance[1][$i]."\n";}
		} else {
			echo "\e[31m[\e[33m!\e[31m] \e[37mTerjadi Kesalahan Harap \e[33mCoba Lagi Nanti !!\n";}
	echo "\e[33m+\e[31m=========================================================\e[33m+\n";
	for($x=120;$x>-0;$x--){
		echo "\r					      \r";
			echo " \e[31m[\e[33m$\e[31m] \e[37mNext Payout In \e[31m[ \e[32m".$x." \e[31m] \e[37mSecconds ";sleep(1);
		echo "\r					      \r";}}

