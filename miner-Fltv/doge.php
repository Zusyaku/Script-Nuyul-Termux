<?php

/*
Script Name : Dogecoin Miner 1.1
Creator : Kingtebe
Date : 07-07-2021
Note : Cie Mau NgeRikode Hahah
Version : 1.1
Github : github.com/Kingtebe
*/

include "cfg.php";

function claim_gett($url,$ua){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($ch);
        return $result;}

	system("clear"); echo "\n	\e[33m*\e[37m_--=[[ \e[34mMINER DOGECOIN 1.1 \e[37m]]=--_\e[33m*\n\n\e[37m[\e[34m•\e[37m] Creator \e[33m: \e[37mKingtebe\n\e[37m[\e[34m•\e[37m] Youtube \e[33m: \e[37mFaaL TV\n\e[37m[\e[34m•\e[37m] Github  \e[33m: \e[32mhttps://github.com/Kingtebe\n\n";
	$ua = array("user-agent: ".$user,"cookie: ".$cookie);
	while(true) {
		$res = claim_gett("http://autofaucet1s.xyz/claim.php?coin=DOGE",$ua);
		$one = explode('<span>', $res)[1];
		$exec = explode('</span>', $one)[0];
		echo "\e[37m".$exec."\n";
	for($wait=60;$wait>-1;$wait--){
		echo "\r					      \r";
			echo "\e[37m[\e[33m*\e[37m] Next Reward In [\e[32m".$wait."\e[37m] ";sleep(1);
		echo "\r					      \r";}}

