import requests,json,os,sys
from time import sleep

m = '\033[1;31m'
p = '\033[1;37m'
h = '\033[1;32m'
k = '\033[1;33m'
l = '\033[0;33m'
b = '\033[1;35m'
c = '\033[1;36m'
x = '\033[1;36m'
q = '\033[1;30m'

def message(teks):
        for i in teks + "\n":
            sys.stdout.write(i)
            sys.stdout.flush()
            sleep(0.003)

def logo(url):
        site = requests.get(url)
        funct = json.loads(site.text)
        os.system("cls" if os.name == "nt" else "clear")
        message(f"""
 {m}___________                   ___.           __
 {m}\__    ___/______  ____   ____\_ |__   _____/  |_
   {m}|    |  \_  __ \/  _ \ /    \| __ \ /  _ \   __)
   {p}|    |   |  | \(  <_> )   |  \ \_\ (  <_> )  |
   {p}|____|   |__|   \____/|___|  /___  /\____/|__|
                              \/    \/
  {p}~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  {p}[{h}•{p}] Author: Kingtebe
  {p}[{h}•{p}] Github: https://github.com/Musk-ID/Tronbot
  {p}~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  {p}[{h}•{p}] IP Kamu: {h}{funct["ip"]}
  {p}[{h}•{p}] Country: {funct["country"]}
        """)

if __name__=='__main__':
        try:
                 logo("https://api.myip.com")

        except KeyboardInterrupt:exit()
