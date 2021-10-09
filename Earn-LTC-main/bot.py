#!/data/data/com.termux/files/usr/bin/python
# Creator : Kingtebe
# Kagak usah nge-rikod bangsat, udah pake aja !
# Sorry gak pake warna wk, males !

import os,sys,json,time,re,requests,hashlib
from datetime import datetime

class earn:

  def jeda(self,second):
        while second:
             mins, secs = divmod(second,60)
             timer = '   Waiting in ⟨{:02d}:{:02d}⟩ seconds'.format(mins,secs)
             print(timer,end="\r")
             time.sleep(1)
             second -= 1

  def jeda2(self,second):
        while second:
             mins, secs = divmod(second,60)
             timer = '   Waiting in ⟨{:02d}:{:02d}⟩ seconds'.format(mins,secs)
             print(timer,end="\r")
             time.sleep(1)
             second -= 1

  def run(self,message):
        for picollo in message + "\n":
             sys.stdout.write(picollo)
             sys.stdout.flush()
             time.sleep(0.01)

  def account(self,req=requests.Session()):
        if not os.path.exists("data.json"):
                email = input("\n +) email: ")
                user = input(" +) user_id: ")
                with open("data.json","w") as file:
                        json.dump({"your_email":email,"your_id":user},file,sort_keys=True,indent=4)
        save = json.loads(open("data.json").read())
        global gmail,userd
        gmail = save["your_email"]
        userd = save["your_id"]
        self.account = req.post("http://earnlitecoinapp.com/earnlitecoin/litecoin/api/get_user.php",headers={"Content-Type": "application/json","Content-Length": "76","Host": "earnlitecoinapp.com","Connection": "Keep-Alive","Accept-Encoding": "gzip","User-Agent": "okhttp/4.3.1"},data=json.dumps({"user_id":userd,"email_id":gmail}))
        if self.account.status_code == 200:
                os.system("cls" if os.name == "nt" else "clear")
                exec(open("lib/logo.py").read())
                self.dumps = json.loads(self.account.text)
                self.run("  +) Email: {} ".format(self.dumps["data"]["email"]).replace(f'{self.dumps["data"]["email"]}'[4:8],"****"))
                self.run("  +) Points: {} ".format(self.dumps["data"]["points"]))
                self.run("  +) Refer_code: {} ".format(self.dumps["data"]["refer_code"]))
                self.run("  +) Device: {} ".format(self.dumps["data"]["device_name"]))
                self.run("  +) Date: {} ".format(self.dumps["data"]["insert_date"]))
                self.run("  +) Transaction_id: {} ".format(self.dumps["data"]["transaction_id"]));time.sleep(2.5);print("  +) Bot starting...\n");time.sleep(2.5)
                self.getting()
        else:
                os.remove("data.json")
                exit("\n ~> Gagal login silahkan check kembali email / user_id anda\n")

  def getting(self,req=requests.Session()):
        while True:
                self.post = req.post("http://earnlitecoinapp.com/earnlitecoin/litecoin/api/spin_count.php",headers={"Content-Type": "application/json","Content-Length": "76","Host": "earnlitecoinapp.com","Connection": "Keep-Alive","Accept-Encoding": "gzip","User-Agent": "okhttp/4.3.1"},data=json.dumps({"user_id":userd,"email_id":gmail,"points":"75"}))
                if json.loads(self.post.text)["message"] in "Success":
                        self.get = json.loads(self.post.text)
                        print(f'  [{datetime.now().strftime("%H:%M:%S")}] {self.get["message"]} ~> get reward | {self.get["points"]} points')
                        print("  •> count_left: {} ".format(self.get["count_left"]))
                        self.jeda2(int(15))
                else:
                        self.scret = req.post("http://earnlitecoinapp.com/earnlitecoin/litecoin/api/scratch_count.php",headers={"Content-Type": "application/json","Content-Length": "76","Host": "earnlitecoinapp.com","Connection": "Keep-Alive","Accept-Encoding": "gzip","User-Agent": "okhttp/4.3.1"},data=json.dumps({"user_id":userd,"email_id":gmail,"points":"87"}))
                        if json.loads(self.scret.text)["message"] in "Success":
                                self.ambil = json.loads(self.scret.text)
                                print(f'  [{datetime.now().strftime("%H:%M:%S")}] {self.ambil["message"]} ~> get reward scratch | {self.ambil["points"]} points')
                                print("  •> count_left: {} ".format(self.ambil["count_left"]))
                        else:
                                print("  ~> Message: claim sudah max silahkan tunggu 1 jam")
                                self.jeda(int(3600))
                                self.account()
                                time.sleep(2.5)

try:
	maybe = hashlib.md5('utf-8'.encode('utf-8')).hexdigest()
	print("\n ~> Get key ⟨ https://rotf.lol/Free-Script ⟩ ")
	iori=input(" •) Key: ")
	if iori == maybe:
		time.sleep(2.5)
		print(" ~> Key true !")
		time.sleep(2.5)
		earn().account()
	else:
		time.sleep(2.5)
		exit(" ~> Key wrong !\n")
		time.sleep(2.5)

except KeyboardInterrupt:exit()
