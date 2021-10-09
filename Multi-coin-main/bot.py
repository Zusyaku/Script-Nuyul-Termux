#!/data/data/com.termux/files/usr/bin/python
# Creator : Kingtebe
# Udah tinggal pake aja gan, kagak usah nge-rikod !
import os
import sys
import time
import json
import requests
from bs4 import BeautifulSoup

m = '\033[1;31m'
p = '\033[0;37m'
h = '\033[1;32m'
k = '\033[0;33m'
b = '\033[1;34m'
c = '\033[1;36m'
q = '\033[1;30m'

class bot:

	def asiap(self):
		os.system("cls" if os.name == "nt" else "clear"); print(f"{p}\n    __________  ____  ______\n   / ____/ __ )/ __ \/_  __/ | Date: 06-08-2021\n  / /   / __  / / / / / /    | Creator by Kingtebe\n / /___/ /_/ / /_/ / / /     | Github: github.com/Musk-ID\n \____/_____/\____/ /_/      | From the cryptoshi.club website\n\n  {p}Hello welcome to this bot 😘{p}\n\n  1). Edit config\n  2). Star Bot\n  3). Exit\n")
		global headers
		headers = {"user-agent":'',"cookie":''}
		self.chose = input("  ?) Choose: ")
		if self.chose == '1':
			self.uwa = input(f"\n  •) User-agent: {k}")
			self.cuki = input(f"  {p}•) Cookie: {k}")
			if self.uwa and self.cuki != '':
				with open("cfg.json","w") as file:
					file.write(json.dumps({"uwa":self.uwa,"cuki":self.cuki},sort_keys=True,indent=4)); time.sleep(1.3)
				print(f"{p}\n  !) Edit config sukses !!\n")
				time.sleep(1.3)
				self.asiap()
			else:exit(f"  {p}!) Isi dong nyet jangan kosong !!\n")

		elif self.chose == '2':
			if os.path.isfile("cfg.json"):
				self.get = json.loads(open("cfg.json").read())
				headers["user-agent"] = self.get["uwa"]
				headers["cookie"] = self.get["cuki"]
				self.start("https://cryptoshi.club/home?BTC=0&BCH=0&BCN=1&ADA=1&DASH=0&DGB=1&DOGE=1&ETH=0&ETC=1&LSK=1&LTC=0&XMR=0&NEO=1&PPC=1&POT=0&RDD=1&XRP=1&STRAT=0&XTZ=1&TRX=1&WAVES=1&ZEC=0&EXS=1&EXG=1&PIVX=1&VTC=1","https://api.myip.com")
			else: exit("  !) Edit config sebelum star bot !!\n")
		else:exit(f"\n  !) Yang bener dong {k}Guoblokk !!\n")

	def spiners(self,message):
		lis = list("-\|/-\|/-\|/-\|/-\|/-\|/-\|/-\|/-\|/-\|/-\|/")
		for ashiap in lis:
			print("\r  "+ashiap+") "+message+"... ",end="")
			time.sleep(0.15)

	def timer(self,seconds):
		for ashiapp in range(seconds,0,-1):
			sys.stdout.write("\r  \033[0;37m> Tunggu {0:2d} seconds ".format(ashiapp))
			sys.stdout.flush()
			time.sleep(1)
			print("",flush=True,end="\r")

	def start(self,linkna,linku):
		try:
			os.system('clear')
			self.get = requests.get(linku)
			self.js = json.loads(self.get.text)
			print(f"{p}\n    __________  ____  ______\n   / ____/ __ )/ __ \/_  __/ | Date: 06-08-2021\n  / /   / __  / / / / / /    | Creator by Kingtebe\n / /___/ /_/ / /_/ / / /     | Github: github.com/Musk-ID\n \____/_____/\____/ /_/      | From the cryptoshi.club website\n\n  {p}Hello welcome to this bot 😘{p}\n\n  Account: ExpressCrypto.io\n  Your IP: {k}"+self.js['ip']+f"{p}\n"); time.sleep(2.1); self.spiners("Starting bot ! "); print("\n")
			while True:
				self.page = requests.get(linkna,headers=headers)
				self.scrap = BeautifulSoup(self.page.text,"html.parser")
				self.ambil = self.scrap.find_all("span",attrs={"label label-success"})
				for self.tags in self.ambil:
					print("  \033[0;37m•) \033[0;33m{}".format(self.tags.text))
				print(f"{p}  ---------------------------------------------")
				self.timer(int(120))

		except requests.exceptions.ConnectionError:exit("\n\n  !) Status: 505\n  !) Message: periksa kembali jaringan internet anda !!\n")
		except Exception as e:print(e)


if __name__=='__main__':
    bot().asiap()

