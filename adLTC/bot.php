<?php

/*
Script Name : adLTC Bot
Author : Kingtebe
Date : 17-07-2021
Version : 1.1
Github : https://github.com/Kingtebe

Skakakakak Jangan Di rikod Jiancukk 😘 !!
*/

function Dashboard($url,$ua){ $ch = curl_init();  curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_HTTPHEADER, $ua); $result = curl_exec($ch); return $result;}
function Visit($url,$ua){ $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); curl_setopt($ch, CURLOPT_HTTPHEADER, $ua); $result = curl_exec($ch); curl_close($ch); return $result;}
function Post($url, $ua, $data){ $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_POST, 1); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); curl_setopt($ch, CURLOPT_HTTPHEADER, $ua); curl_setopt($ch, CURLOPT_POSTFIELDS, $data); $result = curl_exec($ch); curl_close($ch); return $result;} include("cfg.php");
$ua = ["user-agent: ".$browser,"cookie: __cfduid=dd7f170dc97ab1102b41d10292bda64271606529684","cookie: HstCfa4211943=1606529686287","cookie: HstCmu4211943=1606529686287","cookie: __dtsu=6D001606524693D25EE02E64988610ED","cookie: FreMe=ZmF0aGFuY2FoeWFkaQ%3D%3D","cookie: FreMeP=YTdmMTczYTkzNDBhMjE3YmM1ZTRkOTk2NWZkZGM0MzY%3D","cookie: SAreD=SAreDV","cookie: dom3ic8zudi28v8lr6fgphwffqoz0j6c=78ce498e-dc8b-49d9-a969-cb7b760026d5%3A3%3A1","cookie: 494668b4c0ef4d25bda4e75c27de2817=78ce498e-dc8b-49d9-a969-cb7b760026d5:3:1","cookie: _data_html=30-1_77-1","cookie: popcashpu=1","cookie: a=FSQoyQzH2QA7zbZGHMT68SiR17MSdpED","cookie: HstCnv4211943=13","cookie: HstCns4211943=16","cookie: SAsurf=SAsurfVal","cookie: HstCla4211943=1606715050951","cookie: HstPn4211943=8","cookie: HstPt4211943=96","cookie: MarketGidStorage=%7B%220%22%3A%7B%7D%2C%22C359710%22%3A%7B%22page%22%3A3%2C%22time%22%3A1606715053715%7D%7D","cookie: token_QpUJAAAAAAAAGu98Hdz1l_lcSZ2rY60Ajjk9U1c=BAYAX8SGrgFfxIaugAGBAsAAIEzPSVxIOwjPP-keZSW5IoQ226LJ1ZDoP9cSIUb9AzHjwQBHMEUCIA0SDjDxpQrkraK-WgF_Fxp-0cY89qBgwMYX5s8BZX2YAiEA5wfJBkCDtqN85I3C8VAaYf2d96gAhRrlansQs60TquY","cookie: _popprepop=1",
	"cookie: ".$cookie]; $api = file_get_contents("https://api.myip.com"); $js = json_decode($api); $myip = $js->ip; sleep(1.5); system("clear"); echo "\n\n  \e[34m██\e[37m╗     \e[34m██\e[37m╗\e[34m████████\e[37m╗\e[34m███████\e[37m╗ \e[34m██████\e[37m╗ \e[34m██████\e[37m╗ \e[34m██\e[37m╗\e[34m███\e[37m╗   \e[34m██\e[37m╗\n  \e[34m██\e[37m║     \e[34m██\e[37m║\e[37m╚══\e[34m██\e[37m╔══╝\e[34m██\e[37m╔════╝\e[34m██\e[37m╔════╝\e[34m██\e[37m╔═══\e[34m██\e[37m╗\e[34m██\e[37m║\e[34m████\e[37m╗  \e[34m██\e[37m║\n  \e[34m██\e[37m║     \e[34m██\e[37m║   \e[34m██\e[37m║   \e[34m█████\e[37m╗  \e[34m██\e[37m║     \e[34m██\e[37m║   \e[34m██\e[37m║\e[34m██\e[37m║\e[34m██\e[37m╔\e[34m██\e[37m╗ \e[34m██\e[37m║\n  \e[34m██\e[37m║     \e[34m██\e[37m║   \e[34m██\e[37m║   \e[34m██\e[37m╔══╝  \e[34m██\e[37m║     \e[34m██\e[37m║   \e[34m██\e[37m║\e[34m██\e[37m║\e[34m██\e[37m║\e[37m╚\e[34m██\e[37m╗\e[34m██\e[37m║\n  \e[34m███████\e[37m╗\e[34m██\e[37m║   \e[34m██\e[37m║   \e[34m███████\e[37m╗\e[37m╚\e[34m██████\e[37m╗\e[37m╚\e[34m██████\e[37m╔╝\e[34m██\e[37m║\e[34m██\e[37m║ \e[37m╚\e[34m████\e[37m║\n  \e[37m╚══════╝╚═╝   ╚═╝   ╚══════╝ ╚═════╝ ╚═════╝ ╚═╝╚═╝  ╚═══╝\n\e[31m+\e[34m~~~~~~~~~~~~~~~~~~~~~~~~~\e[37m[ \e[33madLTC \e[37m]\e[34m~~~~~~~~~~~~~~~~~~~~~~~~~~\e[31m+\n \e[37m[\e[34m•\e[37m] Creator \e[31m: \e[37mKingtebe\n \e[37m[\e[34m•\e[37m] Version \e[31m: \e[37m1.1                                \e[37m[ \e[32mONLINE \e[37m]\n \e[37m[\e[34m•\e[37m] Youtube \e[31m: \e[37mFaaL TV\n \e[37m[\e[34m•\e[37m] Github  \e[31m: \e[37mhttps://github.com/Kingtebe\n\e[31m+\e[34m~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\e[31m+\n\n"; sleep(2.1); echo " \e[37m[\e[34m•\e[37m] Script Name \e[31m: \e[37madLTC Bot "; sleep(2.1); echo "\n \e[37m[\e[34m•\e[37m] Your IP \e[31m: \e[32m".$myip; sleep(2.1); echo "\n\n \e[31m>>>> \e[37mStarting Bot \e[31m<<<<\n\n";

while(true) { $res = Dashboard("https://adltc.cc/dashboard",$ua);
	if (preg_match('#<h6>Username : <b>(.*?)</b></h6>#is',$res,$username)){ $cfg = Visit("https://adltc.cc/surf",$ua); $one = explode("Account Balance<br><b>", $cfg); $two = explode("</b>", $one[1]); $Bal = "$two[0]"; $one = explode('<input type="hidden" id="adsid" value="', $cfg);
		$two = explode('">', $one[1]);
		$id = "$two[0]"; $one = explode("Duration : <b>", $cfg); $two = explode("</b>", $one[1]); $time = "$two[0]"; $cfg = Post("https://adltc.cc/earndata.php",$ua,"adsids=$id"); echo " \e[37m[\e[34m•\e[37m] Username \e[31m: \e[37m".$username[1]."\n"; echo " \e[37m[\e[34m•\e[37m] Status \e[31m: \e[32mSuccess "."\n"; echo " \e[37m[\e[34m•\e[37m] Update Balance \e[31m: \e[33m".$Bal."\n"; } else { echo " \e[37m[\e[34m!\e[37m] An error occurred \e[33mplease try again later !\n\n"; exit();} echo "\e[31m+\e[34m~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\e[31m+\n";
	for ($x=0;$x<$time;$x++){ echo "\r                                             \r"; echo "  \e[37mPlease Wait [ \e[32m".$x." \e[37m] To Claim ";sleep(1); echo "\r                                             \r";}}
