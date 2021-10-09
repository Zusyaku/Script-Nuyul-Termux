#!/usr/bin/python
# Author: Kingtebe
# Update-an dari yang sebelum nya !

from time import sleep
import os,sys,re,ini,requests,json,hashlib,logging

m = '\033[1;31m'
p = '\033[1;37m'
h = '\033[1;32m'
k = '\033[1;33m'
l = '\033[0;33m'
b = '\033[1;34m'
c = '\033[1;36m'
x = '\033[1;36m'
q = '\033[1;30m'

def message(teks):
        for i in teks + "\n":
           sys.stdout.write(i)
           sys.stdout.flush()
           sleep(0.003)

logging.basicConfig(format="%(message)s", level=logging.INFO)

class Nuyul:

  def waiting(sel,timer):
       for mantap in range(timer,0,-1):
           sys.stdout.write("\r  \033[37m~\033[31m> \033[37mWaiting \033[031m⟨\033[37m{:2d}\033[31m⟩ \033[37mseconds ".format(mantap))
           sys.stdout.flush()
           sleep(1)
           print("",flush=True,end="\r")

  def execute(self,ses=requests.Session()):
       config = ini.parse(open("cfg.ini").read())
       string = hashlib.md5("md5".encode("utf-8")).hexdigest()
       exec(open("lib/lol.py").read())
       logging.info(f"  {p}~{m}> {p}Get key {m}⟨ {p}https://tiny.one/Free-Key {m}⟩")
       weley = input(f"  {p}~{m}> {p}Key: {h}")
       if weley == string:
           sleep(2.5)
           logging.info(f"  {p}~{m}> {p}Key true {h}✓")
           sleep(2.5)
           exec(open("lib/lol.py").read())
           sleep(2.5)
           logging.info(f"  {p}~{m}> {p}Starting bot...\n")
           number = 1
           while True:
               respons = ses.post("https://faucet77.tk/claim.php",headers={"user-agent":config["data"]["user-agent"],"cookie":config["data"]["cookie"],"referer":config["data"]["referer"]},data={"address":config["data"]["address"],"key":config["data"]["key"],"currency":config["data"]["currency"]},timeout=3)
               if "Please Select your Favourite currency:" in respons.text:exit(f"  {p}~{m}> {p}Cookies has expired {m}!")
               if "Just leave this page open, and it should automatically send you more TRX every 4 minutes!" in respons.text:logging.info(f"  {p}~{m}> {p}Limit {h}4 {p}minutes {m}!");self.waiting(int(240))
               if (claim:= re.search('<div class="alert alert-success">(.*?)\ssatoshi\swas\ssent\sto',respons.text).group(1)):logging.info(f"  {p}[{h}{number}{p}] "+claim+f" sent to your account {b}Faucet{c}Pay.io");number += 1;self.waiting(int(240))
       else:
              sleep(2.5)
              logging.info(f"  {p}~{m}> {p}Key wrong {m}!\n")


if __name__=='__main__':
	try:
               os.system("xdg-open https://youtube.com/channel/UCkvRV5y6_EcVdBzfp05Kf1g")
               Nuyul().execute()
	except:
               requests.exceptions.ConnectionError:exit(f"  {p}~{m}> {p}Periksa kembali jaringan internet anda {m}!\n")
