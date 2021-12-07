#!/usr/bin/python3
##################################################
# Script Bot Peghasil BTC / BITCOIN              #
# Code open source in https://github.com/Musk-ID #
# Author : Kingtebe                              #
# Github : https://github.com/Musk-ID            #
##################################################
import os ,sys ,re ,json ,random ,logging ,subprocess
try:
	import requests
	from time import sleep
	from datetime import datetime
	from bs4 import BeautifulSoup as put
except ImportError:
	exit ("\n Module not installed !\n")

c ='\033[1;36m'
p ='\033[1;37m'
h ='\033[1;32m'
k ='\033[1;33m'
m ='\033[1;31m'
q ='\033[1;30m'
z ='\033[101m'
o ='\033[0m'

Browser =[
	"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/37.0.2062.94 Chrome/37.0.2062.94 Safari/537.36",
	"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36",
	"Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko",
	"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0",
	"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/600.8.9 (KHTML, like Gecko) Version/8.0.8 Safari/600.8.9",
	]
req =requests .Session ()
logging .basicConfig (format ="%(message)s",level =logging .INFO )
clear =(lambda :subprocess .call (["clear"]))

def waktu (OO0O0000O0OOO00OO ):
	while OO0O0000O0OOO00OO :
		O0OOO000O00OO00OO ,OO0OO000O0OO0O0OO =divmod (OO0O0000O0OOO00OO ,60 )
		OO0OO0OO0OOO0OO0O ="  \033[1;33m▶ \033[1;37mWaiting\033[1;37m \033[37m⟨\033[0;36m{:02d}:{:02d}\033[1;37m⟩".format (O0OOO000O00OO00OO ,OO0OO000O0OO0O0OO )
		print (OO0OO0OO0OOO0OO0O ,end ="\r")
		sleep (1 )
		OO0O0000O0OOO00OO -=1

def message (OO00OOO000O000O0O ):
	for O0O000OO00O00O0OO in OO00OOO000O000O0O +"\n":
		sys .stdout .write (O0O000OO00O00O0OO )
		sys .stdout .flush ()
		sleep (0.001 )

def _O00O000OOOO0OO000 (OOOOO0OOOO0O0OOOO ,O0OO000OO0O00O00O ):
	global time ,date ,find_ip
	time =datetime .now ().strftime ("%H.%M.%S")
	date =datetime .now ().strftime ("%d/%m/%Y")
	req .headers .update ({"User-Agent":random .choice (Browser )})
	find_ip =req .get ("https://api.myip.com").json ()
	O00OO0000OO00O0OO =put (req .get ("https://xauusd.biz/gold/dashboard").text ,"html.parser")
	O0O00O0O0O00000O0 =O00OO0000OO00O0OO .find ("input",{"type":"hidden","name":"_token"})
	OOOO0O00OOO00OO0O =req .post ("https://xauusd.biz/auth/login/post",data ={"_token":O0O00O0O0O00000O0 ["value"],"username":OOOOO0OOOO0O0OOOO ,"password":O0OO000OO0O00O00O ,"redirect":"https://xauusd.biz/gold/dashboard",})

def _OOOOO0O000OOOO0O0 ():
	if not os .path .exists ("usr.json"):
		clear ()
		O000000O00O00OOO0 =datetime .now ().strftime ("%H.%M.%S")
		OOOOOO0O00OOOO00O =datetime .now ().strftime ("%d/%m/%Y")
		message (f"\n  {p}Time : {O000000O00O00OOO0}           Date : {OOOOOO0O00OOOO00O}\n {m}╔{c}═════════════════════════════════════════════{m}╗\n {c}║ {m}██████{c}╗  {m}██████{c}╗  {m}██████{c}╗ {m}████████{c}╗{m}███████{c}╗ {c}║\n {c}║ {m}██{c}╔══{m}██{c}╗{m}██{c}╔═══{m}██{c}╗{m}██{c}╔═══{m}██{c}╗{c}╚══{m}██{c}╔══╝{m}██{c}╔════╝ {c}║\n {c}║ {m}██████{c}╔╝{m}██{c}║   {m}██{c}║{m}██{c}║   {m}██{c}║   {m}██{c}║   {m}███████{c}╗ {c}║\n {c}║ {m}██{c}╔══{m}██{c}╗{m}██{c}║   {m}██{c}║{m}██{c}║   {m}██{c}║   {m}██{c}║   {c}╚════{m}██{c}║ {c}║\n {c}║ {m}██████{c}╔╝{c}╚{m}██████{c}╔╝{c}╚{m}██████{c}╔╝   {m}██{c}║   {m}███████{c}║ {c}║\n {c}║ ╚═════╝  ╚═════╝  ╚═════╝    ╚═╝   ╚══════╝ {c}║\n {c}║{k}---------------------------------------------{c}║\n {c}║ {k}▶ {p}Author {k}: {p}Kingtebe                         {c}║\n {c}║ {k}▶ {p}Github {k}: {p}github.com/Musk-ID      {m}[{p}ONLINE{m}] {c}║\n {m}╚{c}═════════════════════════════════════════════{m}╝\n {q}<═════════════[{k}{z} • FREE SCRIPT • {o}{q}]═════════════>\n  {c}▶ {p}Version {k}: {p}1.1\n  {c}▶ {p}IP Kamu {k}: {h}114.285.98.91\n  {c}▶ {p}Youtube {k}: {p}FaaL TV\n {q}<═════════════════════════════════════════════>")
		logging .info (f"       {q}-{q}-{q}={q}[{p}{z} Login to web Xauusd.biz {o}{q}]{q}={q}-{q}-\n")
		O00O0O0O000OOO000 =input (f"  {m}▶ {p}Username/Email {m}: {k}")
		OOOOOOOOO00O000OO =input (f"  {m}▶ {p}Password {m}: {k}")
		with open ("usr.json","w")as OO000OO0O0O0000O0 :
			json .dump ({"username":O00O0O0O000OOO000 ,"password":OOOOOOOOO00O000OO },OO000OO0O0O0000O0 ,sort_keys =True ,indent =4 )
	OO000OO0O0O0000O0 =json .loads (open ("usr.json").read ())
	O0OOOO00OO000O0OO =OO000OO0O0O0000O0 ["username"]
	OOOOOOOOO00O000OO =OO000OO0O0O0000O0 ["password"]
	try :
		_O00O000OOOO0OO000 (O0OOOO00OO000O0OO ,OOOOOOOOO00O000OO );clear ()
		message (f"\n  {p}Time : {time}             Date : {date}\n {m}╔{c}═════════════════════════════════════════════{m}╗\n {c}║ {m}██████{c}╗  {m}██████{c}╗  {m}██████{c}╗ {m}████████{c}╗{m}███████{c}╗ {c}║\n {c}║ {m}██{c}╔══{m}██{c}╗{m}██{c}╔═══{m}██{c}╗{m}██{c}╔═══{m}██{c}╗{c}╚══{m}██{c}╔══╝{m}██{c}╔════╝ {c}║\n {c}║ {m}██████{c}╔╝{m}██{c}║   {m}██{c}║{m}██{c}║   {m}██{c}║   {m}██{c}║   {m}███████{c}╗ {c}║\n {c}║ {m}██{c}╔══{m}██{c}╗{m}██{c}║   {m}██{c}║{m}██{c}║   {m}██{c}║   {m}██{c}║   {c}╚════{m}██{c}║ {c}║\n {c}║ {m}██████{c}╔╝{c}╚{m}██████{c}╔╝{c}╚{m}██████{c}╔╝   {m}██{c}║   {m}███████{c}║ {c}║\n {c}║ ╚═════╝  ╚═════╝  ╚═════╝    ╚═╝   ╚══════╝ {c}║\n {c}║{k}---------------------------------------------{c}║\n {c}║ {k}▶ {p}Author {k}: {p}Kingtebe                         {c}║\n {c}║ {k}▶ {p}Github {k}: {p}github.com/Musk-ID      {m}[{p}ONLINE{m}] {c}║\n {m}╚{c}═════════════════════════════════════════════{m}╝\n {q}<═════════════[{k}{z} • FREE SCRIPT • {o}{q}]═════════════>\n  {c}▶ {p}Version {k}: {p}1.1\n  {c}▶ {p}IP Kamu {k}: {h}{find_ip['ip']}\n  {c}▶ {p}Youtube {k}: {p}FaaL TV\n {q}<═════════════════════════════════════════════>")
		O0O0000O000O0000O =put (req .get ("https://xauusd.biz/gold/dashboard").text ,"html.parser")
		OO0OOOOO0O0OO0OOO =O0O0000O000O0000O .findAll ("p")
		logging .info (f"    {p}Login as{c}{OO0OOOOO0O0OO0OOO[8].text} {p}balance {h}{OO0OOOOO0O0OO0OOO[7].text} ");logging .info (f" {q}<═════════════════════════════════════════════>")
		while True :
			O0O0000O000O0000O =put (req .get ("https://xauusd.biz/gold/dashboard").text ,"html.parser")
			OO0OOOOO0O0OO0OOO =O0O0000O000O0000O .findAll ("p")
			O00O00O00O000000O =put (req .get ("https://xauusd.biz/gold/faucet").text ,"html.parser")
			O0000OO000000OO00 =O00O00O00O000000O .find ("input",{"type":"hidden","name":"_token"})
			O0OO0O0OOO0O0O00O =req .post ("https://xauusd.biz/auth/faucet/claim",data ={"_token":O0000OO000000OO00 ["value"]})
			O000OO0O00000000O =put (req .get ("https://xauusd.biz/gold/faucet").text ,"html.parser")
			if O000OO0O00000000O .find ("div",attrs ={"class":"alert alert-success text-center"})is None :
				logging .info (f"  {m}▶ {p}Sorry bro, Failed claim {m}!\n")
				exit ()
			else :
				logging .info (f"  {m}▶ {h}Successful claim! {p}••{m}> {p}Now {q}[ {c}{OO0OOOOO0O0OO0OOO[7].text} {q}]");waktu (60 )
	except IndexError :
		sleep (1.6 )
		exit (f"\n  {c}~{c}> {p}Username/E-Mail or Password is incorrect {m}!\n")
		os .remove ("usr.json")

if __name__ =='__main__':
	_OOOOO0O000OOOO0O0 ()
