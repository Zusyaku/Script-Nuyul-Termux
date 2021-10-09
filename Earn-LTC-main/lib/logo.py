import os,sys,time,requests,re,json
from datetime import datetime

def baner(url,req=requests.Session()):
	req = req.get(url).text
	js = json.loads(req)
	function = requests.get("https://sfile.mobi/3nGU3FHMpWf",headers={"User-Agent":"Mozilla/5.0 (Linux; Android 8.1.0; CPH1853) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36"})
	baca = re.search(r"\s+Downloads\:\s+([\d+])<\/",function.text).group(1)
	print(f"""
     ______
    / ____/___ __________
   / __/ / __ `/ ___/ __ \ | Author: Kingtebe
  / /___/ /_/ / /  / / / / | Youtub: FaaL TV
 /_____/\__,_/_/  /_/ /_/  | Github: github.com/Musk-ID

  •) IP Kamu: {js["ip"]}
  •) Pengguna: {baca} Orang\n""")

	time.sleep(2.5)
	print("  +) Getting account info...")
	time.sleep(2.5)

if __name__=='__main__':
    site = "https://api.my-ip.io/ip.json"
    baner(site)
