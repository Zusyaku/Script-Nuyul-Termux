<?php

error_reporting(0);
require_once("cfg.php");
date_default_timezone_set('Asia/Jakarta');

/*
 * Script Name : Bot Doge Auto Faucetpay.io
 * File : bot.php
 * Author : Kingtebe
 * Date : 27 July 2021, 18:51 AM
 * Version 1.1
 * Github : https://github.com/Kingtebe
 * Note : Mau Ngapain ? Recode ? Tolol Bet Lu  😀⛔
*/

$R="\e[31m";
$G="\e[32m";
$Y="\e[33m";
$B="\e[34m";
$P="\e[35m";
$C="\e[36m";
$W="\e[37m";

function verify($url,$headers) {

	$claim = curl_init();
	curl_setopt($claim, CURLOPT_URL, $url);
	curl_setopt($claim, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($claim, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($claim, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($claim, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($claim);
	return $result;} system("clear");
	$api_web = file_get_contents("https://api.myip.com"); $parsing = json_decode($api_web); $get = $parsing->ip; echo "\n\n  {$Y}██████{$W}╗  {$Y}██████{$W}╗  {$Y}██████{$W}╗ {$Y}███████{$W}╗ {$Y}██████{$W}╗ {$Y}██████{$W}╗ {$Y}██{$W}╗{$Y}███{$W}╗   {$Y}██{$W}╗\n  {$Y}██{$W}╔══{$Y}██{$W}╗{$Y}██{$W}╔═══{$Y}██{$W}╗{$Y}██{$W}╔════╝ {$Y}██{$W}╔════╝{$Y}██{$W}╔════╝{$Y}██{$W}╔═══{$Y}██{$W}╗{$Y}██{$W}║{$Y}████{$W}╗  {$Y}██{$W}║\n  {$Y}██{$W}║  {$Y}██{$W}║{$Y}██{$W}║   {$Y}██{$W}║{$Y}██{$W}║  {$Y}███{$W}╗{$Y}█████{$W}╗  {$Y}██{$W}║     {$Y}██{$W}║   {$Y}██{$W}║{$Y}██{$W}║{$Y}██{$W}╔{$Y}██{$W}╗ {$Y}██{$W}║\n  {$Y}██{$W}║  {$Y}██{$W}║{$Y}██{$W}║   {$Y}██{$W}║{$Y}██{$W}║   {$Y}██{$W}║{$Y}██{$W}╔══╝  {$Y}██{$W}║     {$Y}██{$W}║   {$Y}██{$W}║{$Y}██{$W}║{$Y}██{$W}║{$W}╚{$Y}██{$W}╗{$Y}██{$W}║\n  {$Y}██████{$W}╔╝{$W}╚{$Y}██████{$W}╔╝{$W}╚{$Y}██████{$W}╔╝{$Y}███████{$W}╗{$W}╚{$Y}██████{$W}╗{$W}╚{$Y}██████{$W}╔╝{$Y}██{$W}║{$Y}██{$W}║ {$W}╚{$Y}████{$W}║\n  {$W}╚═════╝  ╚═════╝  ╚═════╝ ╚══════╝ ╚═════╝ ╚═════╝ ╚═╝╚═╝  ╚═══╝\n {$W}+{$R}======================={$W}[ {$Y}Uptocoin.tk {$W}]{$R}=========================={$W}+\n  {$W}[{$Y}•{$W}] Author : Kingtebe\n  {$W}[{$Y}•{$W}] Date   : 27-07-2021                             {$W}[ {$G}ONLINE {$W}]\n  {$W}[{$Y}•{$W}] Github : https://github.com/Kingtebe\n {$W}+{$R}================================================================{$W}+\n  {$W}This is an illegal program all risks are borne by the user\n  and don't forget to subscribe to my channel -^_^-\n\n"; sleep(2.1); echo "  {$W}[{$Y}•{$W}] Account : FaucetPay.io "; sleep(1.9); echo "\n  {$W}[{$Y}•{$W}] Your IP : {$G}{$get} "; sleep(2.1); echo "\n\n  {$R}>>> {$W}Starting Bot {$R}<<<\n\n {$W}"; sleep(2.1);
		$headers = array("user-agent: ".$browser,"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8","referer: https://uptocoin.tk/fp/","cookie: __gads=ID=ce97c7690b023f5e-2263588d81ca00ce:T=1627099832:RT=1627099832:S=ALNI_MZqO6H23hzB1rpUusRE1gbxr4E5Ew;HstCfa4361570=1627099909767;HstCmu4361570=1627099909767;HstCnv4361570=1;HstCns4361570=1;__dtsu=51A016267378442D7EDF2D06B6CC0BD9;HstCla4361570=1627099946738;HstPn4361570=3;HstPt4361570=3");
		$verify = verify("https://uptocoin.tk/fp/verify.php",$headers);

function claim_get($url,$headers,$data) {

	$claim = curl_init();
        curl_setopt($claim, CURLOPT_URL, $url);
        curl_setopt($claim, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($claim, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($claim, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($claim, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($claim, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($claim);
	return $result;}
	while(true) { $claim_get = claim_get("http://uptocoin.tk/fp/faucet.php?address=".$address."&currency=DOGE&key=e16d7168996b75981b026f9069ec73a1",$headers,"address=".$address."&currency=DOGE");
		$scraping = explode('<div class="alert alert-success">', $claim_get);
		$balance = explode('<a target="_blank"', $scraping[1]);
		if ($balance[0] !== null) {
			echo "  {$W}[{$Y}".date('H:i:s')."{$W}]"; echo " {$W}".$balance['0']."your account at FaucetPay.io\n";

		} else { continue; }

	$second = 60+time();
	while(true):
		echo "\r				\r";
		$timer = $second-time();
		if ($timer < 1) { break; }
			echo "  {$R}>> {$W}Next Claim {$R}[ {$W}".date('00:i:s', $timer)." {$R}] {$W}Seconds ";
			sleep(1);
			endwhile;}
