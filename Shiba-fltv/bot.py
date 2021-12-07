#!/usr/bin/python
# Creator : Kingtebe
# Code open source in https://github.com/Musk-ID
# Mau ngapain ? wkwk ngentot

import os ,re ,ini ,sys ,time ,json ,platform
try :
	import requests
	from datetime import datetime
	from bs4 import BeautifulSoup
except :
	exit ("\nModule belum di-install !\n")

if platform .python_version ().split (".")[0 ]!="3":
	exi ("\nProgram ini tidak support untuk python2\nKetik: python %s "%sys .argv [0 ]+"\n")

m ='\033[1;36m'
p ='\033[1;37m'
h ='\033[1;32m'
k ='\033[1;33m'
b ='\033[1;35m'
c ='\033[1;31m'
x ='\033[1;36m'
q ='\033[1;30m'
z ='\033[101m'
o ='\033[0m'

class BOT :

	def __init__ (OO00O000O00OOO000 ,O00O0OOO000OO000O ="https://api.myip.com"):
		OO00O000O00OOO000 .c =requests .session ()
		OO00O000O00OOO000 .find =OO00O000O00OOO000 .c .get (O00O0OOO000OO000O ).json 
		OO00O000O00OOO000 .config =ini .parse (open ("cfg.ini").read ())
		OO00O000O00OOO000 .headers ={"user-agent":OO00O000O00OOO000 .config ["data"]["user-agent"],"cookie":OO00O000O00OOO000 .config ["data"]["cookie"],"referer":"https://free.shiba.limited/",}
		OO00O000O00OOO000 .time =datetime .now ().strftime ("%H.%M.%S")
		OO00O000O00OOO000 .date =datetime .now ().strftime ("%d/%m/%Y")
		OO00O000O00OOO000 .logo =f"\n  {p}Time : {OO00O000O00OOO000.time}     Date : {OO00O000O00OOO000.date}\n {c}╔{m}═════════════════════════════════════{c}╗\n {m}║ {c}███████{m}╗{c}██{m}╗  {c}██{m}╗{c}██{m}╗{c}██████{m}╗  {c}█████{m}╗  {m}║\n {m}║ {c}██{m}╔════╝{c}██{m}║  {c}██{m}║{c}██{m}║{c}██{m}╔══{c}██{m}╗{c}██{m}╔══{c}██{m}╗ {m}║ \n {m}║ {c}███████{m}╗{c}███████{m}║{c}██{m}║{c}██████{m}╔╝{c}███████{m}║ {m}║ \n {m}║ {m}╚════{c}██{m}║{c}██{m}╔══{c}██{m}║{c}██{m}║{c}██{m}╔══{c}██{m}╗{c}██{m}╔══{c}██{m}║ {m}║ \n {m}║ {c}███████{m}║{c}██{m}║  {c}██{m}║{c}██{m}║{c}██████{m}╔╝{c}██{m}║  {c}██{m}║ {m}║ \n {m}║ {m}╚══════╝╚═╝  ╚═╝╚═╝╚═════╝ ╚═╝  ╚═╝ {m}║\n {m}║{k}-------------------------------------{m}║\n {m}║ {k}▶ {p}Author {k}: {p}Kingtebe                 {m}║\n {m}║ {k}▶ {p}Github {k}: {p}github.com/Musk-ID       {m}║\n {c}╚{m}═════════════════════════════════════{c}╝\n {q}<═════════[{k}{z}• FREE SCRIPT •{o}{q}]═══════════>\n  {m}▶ {p}Version {k}: {p}1.1\n  {m}▶ {p}IP Kamu {k}: {h}114.28.285.91\n  {m}▶ {p}Youtube {k}: {p}FaaL TV\n {q}<═════════════════════════════════════>"
		OO00O000O00OOO000 .count =1

	def Dice (O0O0O0O0OO0O00O00 ,OO0O0O0000O0000O0 ,OOOOOO00O0OO0000O ):
		while True :
			try :
				OO0OOO0OOOOOOOOOO =O0O0O0O0OO0O00O00 .c .get ("https://free.shiba.limited/dice",headers =O0O0O0O0OO0O00O00 .headers )
				OOO00O00O0OOO0000 ={"betAmount":OO0O0O0000O0000O0 ,"multiplier":OOOOOO00O0OO0000O ,"rollType":"rollLo",}
				OO00OOO0O0000O00O =O0O0O0O0OO0O00O00 .c .post ("https://free.shiba.limited/dice/roll",headers =O0O0O0O0OO0O00O00 .headers ,data =OOO00O00O0OOO0000 ).json ()
				if OO00OOO0O0000O00O ["status"]=="success":
					print (f"  {p}({h}{O0O0O0O0OO0O00O00.count}{p}) {q}[{p}{z} {OO00OOO0O0000O00O['type']} {o}{q}] {p}roll {m}{OO00OOO0O0000O00O['recent']['roll']} {q}| {h}{OO00OOO0O0000O00O['message']}")
					O0O0O0O0OO0O00O00 .count +=1

				elif OO00OOO0O0000O00O ["status"]=="false":
					exit (f"\n  {m}~> {p}%s "%OO00OOO0O0000O00O ["message"]+f"{c}!!{p}\n")

				else :
					print (f"  {p}({h}{O0O0O0O0OO0O00O00.count}{p}) {q}[{p}{z} {OO00OOO0O0000O00O['type']} {o}{q}] {p}roll {m}{OO00OOO0O0000O00O['recent']['roll']} {q}| {h}{OO00OOO0O0000O00O['message']}")
					O0O0O0O0OO0O00O00 .count +=1
			except json .decoder .JSONDecodeError :exit (f"\n  {m}~> {p}Kok bisa error ya ?\n")
			except requests .exceptions .ConnectionError :
				exit (f"\n  {m}~> {p}Check your connection internet {c}!{p}\n")

	def waktu (O0O0O0000O00000OO ,O0O00O000O000O00O ):
		while O0O00O000O000O00O :
			O0OOO00O0O00OO00O ,O0000O0O000O00O0O =divmod (O0O00O000O000O00O ,60 )
			OO00OOO000OOOOOOO ="  \033[1;33m▶ \033[1;37mWaiting\033[1;37m ⟨\033[1;32m{:02d}:{:02d}\033[1;37m⟩".format (O0OOO00O0O00OO00O ,O0000O0O000O00O0O )
			print (OO00OOO000OOOOOOO ,end ="\r")
			time .sleep (1 )
			O0O00O000O000O00O -=1

	def Claim (OO00OO0OO000OO0OO ):
		while True :
			try :
				OOOOO0O0OO000OO0O =OO00OO0OO000OO0OO .c .get ("https://free.shiba.limited/auto",headers =OO00OO0OO000OO0OO .headers )
				O0OOO0O000000000O =BeautifulSoup (OOOOO0O0OO000OO0O .text ,"html.parser")
				O000OO0OOO00O0000 =O0OOO0O000000000O .find ("input",{"type":"hidden","name":"token"})
				OO0000O0OOO00O00O =re .search ("let\stimer\s=\s(.*?),",OOOOO0O0OO000OO0O .text ).group (1 )
				OO00OO0OO000OO0OO .waktu (int (OO0000O0OOO00O00O ))
				OOOO000000O0O0OO0 =OO00OO0OO000OO0OO .c .post ("https://free.shiba.limited/auto/verify",headers =OO00OO0OO000OO0OO .headers ,data ={"token":O000OO0OOO00O0000 ["value"]})
				if OOOO000000O0O0OO0 .status_code !=200 :
					print (f"\n  {m}~> {p}Sorry bro, claim failed {c}!")
					continue 

				else :
					O000OOO00OOOO00O0 =OO00OO0OO000OO0OO .c .get ("https://free.shiba.limited/dashboard",headers =OO00OO0OO000OO0OO .headers )
					OO00OO00OOOO000O0 =BeautifulSoup (O000OOO00OOOO00O0 .text ,"html.parser")
					OO00OOOO00O00O0O0 =OO00OO00OOOO000O0 .find ("p",attrs ={"class":"text-muted mb-0"}).text 
					print (f"  {h}50 tokens has been added to your balance\n    {p}•••••{c}> {q}[ {m}{OO00OOOO00O00O0O0}{q} ] {c}<{p}•••••")
					print (f" {q}<═════════════════════════════════════>")

			except json .decoder .JSONDecodeError :exit (f"\n  {m}~> {p}Kok bisa error ya ?\n")
			except requests .exceptions .ConnectionError :
				exit (f"\n  {m}~> {p}Check your connection internet {c}!{p}\n")

	def Main (O000OOO000OO0OOO0 ):
		os .system ("cls"if os .name =="nt"else "clear")
		print (O000OOO000OO0OOO0 .logo )
		O00O0OOOO0OO0OO0O =O000OOO000OO0OOO0 .c .get ("https://free.shiba.limited/dashboard",headers =O000OOO000OO0OOO0 .headers )
		if "login"in O00O0OOOO0OO0OO0O .text :
			exit (f"  {p}~{c}> {p}Cookie has expired {c}\n")
		O0OO0OO0O000O00OO =BeautifulSoup (O00O0OOOO0OO0OO0O .text ,"html.parser")
		O00OO0OO0OOO0O0O0 =O0OO0OO0O000O00OO .find ("h5",attrs ={"class":"font-size-15 text-truncate"}).text 
		O0OO00OOOOOO0O000 =O0OO0OO0O000O00OO .find ("p",attrs ={"class":"text-muted mb-0"}).text ;print (f"  {p}Login as {m}{O00OO0OO0OOO0O0O0} {p}balance {h}{O0OO00OOOOOO0O000}");print (f" {q}<═════════════════════════════════════>");print (f"\t{c}[{p}1{c}] {p}Auto Claim");print (f"\t{c}[{p}2{c}] {p}Auto Dice");print (f"\t{c}[{p}3{c}] {p}Exit")
		O000OOO0O0OOO000O =O0OO00OOOOOO0O000 .replace ("tokens","")
		O00OO000OOO000OO0 =input (f"  >> ")
		print (f" {q}<═════════════════════════════════════>")
		if O00OO000OOO000OO0 in ("1","01"):
			O000OOO000OO0OOO0 .Claim ()
		elif O00OO000OOO000OO0 in ("2","02"):
			O0O00O00O0O0OOO00 =input (f"  {k}▶ {p}Amount {p}: {h}")
			if int (O0O00O00O0O0OOO00 )<500 :
				time .sleep (1.5 )
				exit (f"\n  {m}~> {p}Minimal 500 tokens blok {c}!!\n")
			OOOOOOOO0O00000OO =input (f"  {k}▶ {p}Multiplier {p}: {h}")
			print (f" {q}<═════════════════════════════════════>")
			O000OOO000OO0OOO0 .Dice (O0O00O00O0O0OOO00 ,OOOOOOOO0O00000OO )

try :
	App =BOT ()
	App .Main ()
except KeyboardInterrupt :
	exit ()
