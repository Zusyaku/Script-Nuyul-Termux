# -*- coding: utf-8 -*-
# Author : Kingtebe
# Follow my github, https://github.com/Musk-ID

import os
import re
import sys
import platform
try :
	import requests
	from time import sleep
	from hashlib import sha1
	from datetime import datetime
	from bs4 import BeautifulSoup
except :
	exit ("\nModule not installed\n")

m ='\033[1;31m'
p ='\033[1;37m'
h ='\033[1;32m'
k ='\033[1;33m'
b ='\033[1;35m'
c ='\033[1;36m'
x ='\033[1;36m'
q ='\033[1;30m'
z ='\033[101m'
l ='\033[0m'

time =datetime .now ().strftime ("%H.%M.%S")
date =datetime .now ().strftime ("%d/%m/%Y")
if platform .python_version ().split (".")[0 ]!="3":
	exit ("\nNot support for python2\nketik: python %s "%sys .argv [0 ]+"\n")

def message (OOO0O0OOO0OOO00OO ):
	for OO0O0OO0O0000O000 in OOO0O0OOO0OOO00OO +"\n":
		sys .stdout .write (OO0O0OO0O0000O000 )
		sys .stdout .flush ()
		sleep (0.001 )

def countdown (OO0O0O0O00O0O0O00 ):
	while OO0O0O0O00O0O0O00 :
		O000OO0O000O0O00O ,O0OOOOOO0OOO0O000 =divmod (OO0O0O0O00O0O0O00 ,60 )
		OOOO0OO0OO0OO00OO =' \033[37mWaiting ⟨\033[32m{:02d}:{:02d}\033[37m⟩ '.format (O000OO0O000O0O00O ,O0OOOOOO0OOO0O000 )
		print (OOOO0OO0OO0OO00OO ,end ="\r")
		sleep (1 )
		OO0O0O0O00O0O0O00 -=1 

def app (OO00OOO0OOOOO0O0O =requests .Session ()):
	if not os .path .exists ("meki.txt"):
		os .system ("cls"if os .name =="nt"else "clear")
		message (f"\n {p}Time : {time}          Date : {date}\n{m}╔{c}══════════════════════════════════════════{m}╗\n{c}║ {m}███████{c}╗{m}██{c}╗   {m}██{c}╗{m}██████{c}╗ {m}███████{c}╗{m}██{c}╗  {m}██{c}╗{c}║\n{c}║ {m}██{c}╔════╝{m}██{c}║   {m}██{c}║{m}██{c}╔══{m}██{c}╗{m}██{c}╔════╝╚{m}██{c}╗{m}██{c}╔╝{c}║\n{c}║ {m}███████{c}╗{m}██{c}║   {m}██{c}║{m}██████{c}╔╝{m}█████{c}╗   {c}╚{m}███{c}╔╝ {c}║\n{c}║ {c}╚════{m}██{c}║{m}██{c}║   {m}██{c}║{m}██{c}╔══{m}██{c}╗{m}██{c}╔══╝   {m}██{c}╔{m}██{c}╗ {c}║\n{c}║ {m}███████{c}║{c}╚{m}██████{c}╔╝{m}██{c}║  {m}██{c}║{m}██{c}║     {m}██{c}╔╝ {m}██{c}╗{c}║\n{c}║ {c}╚══════╝ ╚═════╝ ╚═╝  ╚═╝╚═╝     ╚═╝  ╚═╝{c}║\n{c}║{k}------------------------------------------{c}║\n{c}║ {k}▶ {p}Author {k}: {p}Kingtebe                      {c}║\n{c}║ {k}▶ {p}Github {k}: {p}github.com/Musk-ID   {m}[{p}ONLINE{m}] {c}║\n{m}╚{c}══════════════════════════════════════════{m}╝\n{q}<════════════[{k}{z}• FREE SCRIPT •{l}{q}]═════════════>\n {c}▶ {p}Version {k}: {p}1.1\n {c}▶ {p}Script  {k}: {p}surf-trx\n {c}▶ {p}Youtube {k}: {p}FaaL TV\n{q}<══════════════════════════════════════════>")
		open ("meki.txt","w").write (input (f" {p}Cookie {k}: {p}"))
	sleep (2.5 )
	OO00OOO0OOOOO0O0O .headers .update ({"cookie":open ("meki.txt").read ()})
	os .system ("cls"if os .name =="nt"else "clear")
	message (f"\n {p}Time : {time}          Date : {date}\n{m}╔{c}══════════════════════════════════════════{m}╗\n{c}║ {m}███████{c}╗{m}██{c}╗   {m}██{c}╗{m}██████{c}╗ {m}███████{c}╗{m}██{c}╗  {m}██{c}╗{c}║\n{c}║ {m}██{c}╔════╝{m}██{c}║   {m}██{c}║{m}██{c}╔══{m}██{c}╗{m}██{c}╔════╝╚{m}██{c}╗{m}██{c}╔╝{c}║\n{c}║ {m}███████{c}╗{m}██{c}║   {m}██{c}║{m}██████{c}╔╝{m}█████{c}╗   {c}╚{m}███{c}╔╝ {c}║\n{c}║ {c}╚════{m}██{c}║{m}██{c}║   {m}██{c}║{m}██{c}╔══{m}██{c}╗{m}██{c}╔══╝   {m}██{c}╔{m}██{c}╗ {c}║\n{c}║ {m}███████{c}║{c}╚{m}██████{c}╔╝{m}██{c}║  {m}██{c}║{m}██{c}║     {m}██{c}╔╝ {m}██{c}╗{c}║\n{c}║ {c}╚══════╝ ╚═════╝ ╚═╝  ╚═╝╚═╝     ╚═╝  ╚═╝{c}║\n{c}║{k}------------------------------------------{c}║\n{c}║ {k}▶ {p}Author {k}: {p}Kingtebe                      {c}║\n{c}║ {k}▶ {p}Github {k}: {p}github.com/Musk-ID   {m}[{p}ONLINE{m}] {c}║\n{m}╚{c}══════════════════════════════════════════{m}╝\n{q}<════════════[{k}{z}• FREE SCRIPT •{l}{q}]═════════════>\n {c}▶ {p}Version {k}: {p}1.1\n {c}▶ {p}Script  {k}: {p}surf-trx\n {c}▶ {p}Youtube {k}: {p}FaaL TV\n{q}<══════════════════════════════════════════>")
	O00OO0O0OOO0O0O0O =OO00OOO0OOOOO0O0O .get ("https://surf-trx.com/dashboard")
	if "LOGIN"in O00OO0O0OOO0O0O0O .text :
		exit (f" {p}~{m}> {p}Cookie has expired {m}!\n")
		os .remove ("meki.txt")
	OO0O00OO00O0O0O00 =[]
	for OO0O0OO0O0O000OO0 in re .findall ("<b>(.*?)</b>",O00OO0O0OOO0O0O0O .text ):
		OO0O00OO00O0O0O00 .append (OO0O0OO0O0O000OO0 )
	message (f" {p}Login as {c}"+str (OO0O00OO00O0O0O00 [3 ])+f" {p}balance {h}"+str (OO0O00OO00O0O0O00 [0 ]))
	message (f"{q}<══════════════════════════════════════════>")
	OO00OO0OOO000OO0O =1 
	while True :
		OO0000OOOO00000O0 =OO00OOO0OOOOO0O0O .get ("https://surf-trx.com/surf")
		O000000O00O0O00O0 =BeautifulSoup (OO0000OOOO00000O0 .text ,"html.parser")
		OO00O0000000OO00O =O000000O00O0O00O0 .find ("input",{"type":"hidden","id":"adsid"})
		O0O0O000000O0OO0O =re .search ("Duration\s:\s<b>(.*?)</b>",OO0000OOOO00000O0 .text ).group (1 )
		countdown (int (O0O0O000000O0OO0O ))
		O0OO0OOOO00OOO0O0 =OO00OOO0OOOOO0O0O .post ("https://surf-trx.com/earndata.php",data ={"adsids":OO00O0000000OO00O ["value"]})
		O00OOOO0OO0OO0O00 =OO00OOO0OOOOO0O0O .get ("https://surf-trx.com/surf")
		O00OO0000OOOO0O00 =re .search ("<b>(.*?)</b>",O00OOOO0OO0OO0O00 .text )
		print (f" {m}▶ {p}Get reward {m}({p}{OO00OO0OOO000OO0O}{m}) {p}now balance {h}%s "%O00OO0000OOOO0O00 .group (1 ))
		OO00OO0OOO000OO0O +=1 

def mulai ():
	OOO0O00000OO0O000 =sha1 ('utf-8'.encode ('utf-8')).hexdigest ()
	os .system ("cls"if os .name =="nt"else "clear")
	message (f"\n {p}Time : {time}          Date : {date}\n{m}╔{c}══════════════════════════════════════════{m}╗\n{c}║ {m}███████{c}╗{m}██{c}╗   {m}██{c}╗{m}██████{c}╗ {m}███████{c}╗{m}██{c}╗  {m}██{c}╗{c}║\n{c}║ {m}██{c}╔════╝{m}██{c}║   {m}██{c}║{m}██{c}╔══{m}██{c}╗{m}██{c}╔════╝╚{m}██{c}╗{m}██{c}╔╝{c}║\n{c}║ {m}███████{c}╗{m}██{c}║   {m}██{c}║{m}██████{c}╔╝{m}█████{c}╗   {c}╚{m}███{c}╔╝ {c}║\n{c}║ {c}╚════{m}██{c}║{m}██{c}║   {m}██{c}║{m}██{c}╔══{m}██{c}╗{m}██{c}╔══╝   {m}██{c}╔{m}██{c}╗ {c}║\n{c}║ {m}███████{c}║{c}╚{m}██████{c}╔╝{m}██{c}║  {m}██{c}║{m}██{c}║     {m}██{c}╔╝ {m}██{c}╗{c}║\n{c}║ {c}╚══════╝ ╚═════╝ ╚═╝  ╚═╝╚═╝     ╚═╝  ╚═╝{c}║\n{c}║{k}------------------------------------------{c}║\n{c}║ {k}▶ {p}Author {k}: {p}Kingtebe                      {c}║\n{c}║ {k}▶ {p}Github {k}: {p}github.com/Musk-ID   {m}[{p}ONLINE{m}] {c}║\n{m}╚{c}══════════════════════════════════════════{m}╝\n{q}<════════════[{k}{z}• FREE SCRIPT •{l}{q}]═════════════>\n {c}▶ {p}Version {k}: {p}1.1\n {c}▶ {p}Script  {k}: {p}surf-trx\n {c}▶ {p}Youtube {k}: {p}FaaL TV\n{q}<══════════════════════════════════════════>")
	message (f" {p}Free Key {m}⟨ {p}https://sakastau.com/Inkeys {m}⟩")
	OOO0OO00000OOOOO0 =input (f" {p}~{m}> {p}Key {k}: {c}")
	if OOO0OO00000OOOOO0 ==OOO0O00000OO0O000 :
		if not os .path .exists ("key.txt"):
			OO00O0O00O0O00O0O =open ("key.txt","w+")
			OO00O0O00O0O00O0O .write ("\n Your key: %s "%OOO0O00000OO0O000 )
			OO00O0O00O0O00O0O .close ()
		sleep (2.5 )
		print (f"    {p}Key true {h}✓ ")
		sleep (1.9 )
		app ()
	else :
		sleep (2.5 )
		exit (f"    {p}Key wrong blokk {m}!!\n")

try :
	mulai ()
except KeyboardInterrupt :
	exit ()
