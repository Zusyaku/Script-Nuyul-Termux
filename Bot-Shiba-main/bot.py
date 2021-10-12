#!/usr/bin/python
# Creator : Kingtebe
# Follow my github https://github.com/Musk-ID
# Mau ngapain ? Wkwkwkw ngentot

import os,re,ini,sys,time,json,platform
try:
	import requests
	from datetime import datetime
	from bs4 import BeautifulSoup
except:
	exit("\nModule belum di-install !\n")

if platform.python_version().split(".")[0] != "3":
	exi("\nProgram ini tidak support untuk python2\nKetik: python %s "%sys.argv[0]+"\n")

m = '\033[1;36m'
p = '\033[1;37m'
h = '\033[1;32m'
k = '\033[1;33m'
b = '\033[1;35m'
c = '\033[1;31m'
x = '\033[1;36m'
q = '\033[1;30m'
z = '\033[101m'
o = '\033[0m'

class BOT:

	def __init__(self,url="https://api.myip.com"):
		self.c = requests.session()
		self.find = self.c.get(url).json
		self.config = ini.parse(open("cfg.ini").read())
		self.headers = {
			"user-agent":self.config["data"]["user-agent"],
			"cookie":self.config["data"]["cookie"],
			"referer":"https://free.shiba.limited/",
			}
		self.time = datetime.now().strftime("%H.%M.%S")
		self.date = datetime.now().strftime("%d/%m/%Y")
		self.logo = f"\n  {p}Time : {self.time}     Date : {self.date}\n {c}╔{m}═════════════════════════════════════{c}╗\n {m}║ {c}███████{m}╗{c}██{m}╗  {c}██{m}╗{c}██{m}╗{c}██████{m}╗  {c}█████{m}╗  {m}║\n {m}║ {c}██{m}╔════╝{c}██{m}║  {c}██{m}║{c}██{m}║{c}██{m}╔══{c}██{m}╗{c}██{m}╔══{c}██{m}╗ {m}║ \n {m}║ {c}███████{m}╗{c}███████{m}║{c}██{m}║{c}██████{m}╔╝{c}███████{m}║ {m}║ \n {m}║ {m}╚════{c}██{m}║{c}██{m}╔══{c}██{m}║{c}██{m}║{c}██{m}╔══{c}██{m}╗{c}██{m}╔══{c}██{m}║ {m}║ \n {m}║ {c}███████{m}║{c}██{m}║  {c}██{m}║{c}██{m}║{c}██████{m}╔╝{c}██{m}║  {c}██{m}║ {m}║ \n {m}║ {m}╚══════╝╚═╝  ╚═╝╚═╝╚═════╝ ╚═╝  ╚═╝ {m}║\n {m}║{k}-------------------------------------{m}║\n {m}║ {k}▶ {p}Author {k}: {p}Kingtebe                 {m}║\n {m}║ {k}▶ {p}Github {k}: {p}github.com/Musk-ID       {m}║\n {c}╚{m}═════════════════════════════════════{c}╝\n {q}<═════════[{k}{z}• FREE SCRIPT •{o}{q}]═══════════>\n  {m}▶ {p}Version {k}: {p}1.1\n  {m}▶ {p}IP Kamu {k}: {h}114.28.285.91\n  {m}▶ {p}Youtube {k}: {p}FaaL TV\n {q}<═════════════════════════════════════>"
		self.count = 1

	def Dice(self,amount,chance):
		while True:
			try:
				dice = self.c.get("https://free.shiba.limited/dice",headers=self.headers)
				data = {
					"betAmount":amount,
					"multiplier":chance,
					"rollType":"rollLo",
					}
				verify = self.c.post("https://free.shiba.limited/dice/roll",headers=self.headers,data=data).json()
				if verify["status"] == "success":
					print(f"  {p}({h}{self.count}{p}) {q}[{p}{z} {verify['type']} {o}{q}] {p}roll {m}{verify['recent']['roll']} {q}| {h}{verify['message']}")
					self.count += 1

				elif verify["status"] == "false":
					exit(f"\n  {m}~> {p}%s "%verify["message"]+f"{c}!!{p}\n")

				else:
					print(f"  {p}({h}{self.count}{p}) {q}[{p}{z} {verify['type']} {o}{q}] {p}roll {m}{verify['recent']['roll']} {q}| {h}{verify['message']}")
					self.count += 1

			except json.decoder.JSONDecodeError:exit(f"\n  {m}~> {p}Kok bisa error ya ?\n")
			except requests.exceptions.ConnectionError:
				exit(f"\n  {m}~> {p}Check your connection internet {c}!{p}\n")

	def waktu(self,second):
		while second:
			mins,secs = divmod(second,60)
			timer = "  \033[1;33m▶ \033[1;37mWaiting\033[1;37m ⟨\033[1;32m{:02d}:{:02d}\033[1;37m⟩".format(mins,secs)
			print(timer,end="\r")
			time.sleep(1)
			second -= 1

	def Claim(self):
		while True:
			try:
				auto = self.c.get("https://free.shiba.limited/auto",headers=self.headers)
				par = BeautifulSoup(auto.text,"html.parser")
				token = par.find("input",{"type":"hidden","name":"token"})
				timer = re.search("let\stimer\s=\s(.*?),",auto.text).group(1)
				self.waktu(int(timer))
				verify = self.c.post("https://free.shiba.limited/auto/verify",headers=self.headers,data={"token":token["value"]})
				if verify.status_code != 200:
					print(f"\n  {m}~> {p}Sorry bro, claim failed {c}!")
					continue

				else:
					#get_balance = self.c.get("https://free.shiba.limited/auto",headers=self.headers)
					#now_balance = re.search("('(.*?)',\s'(.*?)',\s'(.*?)')",get_balance.text)
					#print(now_balance.group(1).replace("success","").replace("'",""))
					dash = self.c.get("https://free.shiba.limited/dashboard",headers=self.headers)
					soup = BeautifulSoup(dash.text,"html.parser")
					balance = soup.find("p",attrs={"class":"text-muted mb-0"}).text
					print(f"  {h}50 tokens has been added to your balance\n    {p}•••••{c}> {q}[ {m}{balance}{q} ] {c}<{p}•••••")
				print(f" {q}<═════════════════════════════════════>")

			except json.decoder.JSONDecodeError:exit(f"\n  {m}~> {p}Kok bisa error ya ?\n")
			except requests.exceptions.ConnectionError:
				exit(f"\n  {m}~> {p}Check your connection internet {c}!{p}\n")

	def Main(self):
		os.system("cls" if os.name == "nt" else "clear")
		print(self.logo)
		site = self.c.get("https://free.shiba.limited/dashboard",headers=self.headers)
		if "login" in site.text:
			exit(f"  {p}~{c}> {p}Cookie has expired {c}\n")
		soup = BeautifulSoup(site.text,"html.parser")
		username = soup.find("h5",attrs={"class":"font-size-15 text-truncate"}).text
		balance = soup.find("p",attrs={"class":"text-muted mb-0"}).text; print(f"  {p}Login as {m}{username} {p}balance {h}{balance}"); print(f" {q}<═════════════════════════════════════>"); print(f"\t{c}[{p}1{c}] {p}Auto Claim"); print(f"\t{c}[{p}2{c}] {p}Auto Dice"); print(f"\t{c}[{p}3{c}] {p}Exit")
		repleks = balance.replace("tokens","")
		chose = input(f"  >> ")
		print(f" {q}<═════════════════════════════════════>")
		if chose in ("1","01"):
			self.Claim()
		elif chose in ("2","02"):
			bet = input(f"  {k}▶ {p}Amount {p}: {h}")
			if int(bet) < 500:
				time.sleep(1.5)
				exit(f"\n  {m}~> {p}Minimal 500 tokens blok {c}!!\n")
			chance = input(f"  {k}▶ {p}Multiplier {p}: {h}")
			print(f" {q}<═════════════════════════════════════>")
			self.Dice(bet,chance)

try:
	App = BOT()
	App.Main()

except KeyboardInterrupt:
	exit()
