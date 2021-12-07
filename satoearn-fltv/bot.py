#!/usr/bin/python
# Jangan lupa follow dan kasih stars :)
import os
import re
import sys
import time
import json
import requests
from datetime import datetime
from bs4 import BeautifulSoup

req = requests.Session()
limbad = lambda: print("\n\033[1;31m   (\n   )\ )          )\n  (()/(    )  ( /(        (     )  (\n   /(_))( /(  )\()) (    ))\ ( /(  )(    (\n  (_))  )(_))(_))/  )\  /((_))(_))(()\   )\ )\n  \033[1;36m/ __|\033[1;31m((_)_ \033[1;36m| |_  \033[1;31m((_)(_)) ((_)_  ((_) _(_/(\033[1;36m\n  \__ \/ _` ||  _|/ _ \/ -_)/ _` || '_|| ' \))\n  |___/\__,_| \__|\___/\___|\__,_||_|  |_||_|\033[0;37m\n\n  \033[1;37m[\033[1;31m•\033[1;37m] Creator: Kingtebe\n  \033[1;37m[\033[1;31m•\033[1;37m] Date: 21-08-2021\n  \033[1;37m[\033[1;31m•\033[1;37m] \033[1;37mGithub: \033[0;32mgithub.com/Musk-ID\n \033[1;30m~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~\033[1;37m\n     Warning \033[1;31m!!\033[1;37m\n Ini adalah program ilegal\n segala resiko ditanggung pengguna\n \033[1;30m~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~\033[1;37m")

class earn:

  def timer(self,second):
       for until in range(second,0,-1):
           sys.stdout.write("\r \033[1;31m~> \033[1;37mSleep until [\033[0;36m{:2d}\033[1;37m] seconds ".format(until))
           sys.stdout.flush()
           time.sleep(1)
           print("",flush=True,end="\r")

  def satoshi(self):
       try:
            if not os.path.exists('cuki.txt'):
                open("cuki.txt","w").write(input("\n !) Input cookies: "))
            req.headers.update({"cookie":open("cuki.txt").read()})
            self._site = req.get("https://satoearn.com/faucet/dashboard")
            self._par = BeautifulSoup(self._site.text,"html.parser")
            self._username = self._par.find("span").text
            if len(self._username) == 0:
                 os.remove("cuki.txt")
                 exit("\n !) Message: Cookies has expired !\n")
            os.system('clear');limbad();time.sleep(1.3);print(" Account login has\033[0;36m{} ".format(self._username));self.findip = req.get("https://api.myip.com");self.parsing = json.loads(self.findip.text);print("         \033[1;37m[\033[1;31m•\033[1;37m] Your IP: \033[0;32m{}".format(self.parsing["ip"]));time.sleep(1.3);print("\033[1;37m         \033[1;37m[\033[1;31m•\033[1;37m] Version: v.0.1");time.sleep(1.3);print("\033[1;30m ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~\n");time.sleep(1.3)
            while True:
                 self._arcade = req.get("https://satoearn.com/faucet/arcade?game=knife-hit")
                 self.balance = BeautifulSoup(self._arcade.text,"html.parser").findAll("p",attrs={"btn btn-outline-primary"})[1].text
                 self.key_aja = re.search(r"url\s+=\s+\"http[s]:\/\/satoearn\.com\/.*?\?key=([^>]+)\";",self._arcade.text).group(1)
                 self._claim  = req.get("https://satoearn.com/faucet/api_arcade?key={}".format(self.key_aja))
                 if self._claim.text == '{"status":"success"}':
                         print(f' \033[0;36m{datetime.now().strftime("%H:%M:%S")}'+ ' \033[1;31m| \033[1;37mBalance now \033[0;32m{}'.format(self.balance))
                         self.timer(int(60))
                 else:
                         print(f' \033[0;36m{datetime.now().strftime("%H:%M:%S")}'+ ' You have already won maximum !\n')

       except KeyboardInterrupt:exit()
       except requests.exceptions.ConnectionError:exit("\n !) Not Connection Internet !\n")


if __name__=='__main__':
  earn().satoshi()
