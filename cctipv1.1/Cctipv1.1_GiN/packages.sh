#!bash/sh
w='\e[97m'
g='\033[1;92m'
r='\033[1;91m'
a='\033[1;94m'
b='\e[1;4m'
cyan='\033[1;36m'
green='\033[1;32m'
red='\033[1;31m'
yellow='\033[1;33m'
blue='\033[1;34m'
purple='\033[1;35m'
p='\033[0m' #putih

echo "$green installing..........$p"
sleep 2
echo "$green update dan upgrade termux$p"
sleep 2
apt update && apt upgrade -y
echo "$green jika ada pop up allow tekan allow / ijinkan$p"
sleep 2
termux-setup-storage
echo "$green install python $p"
sleep 2
apt install openssh
sleep 2
apt install python -y
sleep 2
apt install python2 -y
sleep 2
apt install python3 -y
echo "$green install git$p"
sleep 2
apt install git -y
echo "$green install php$p"
sleep 2
apt install php -y
echo "$green install wget$p"
sleep 2
apt install wget -y
echo "$green install proot$p"
sleep 2
apt install proot -y
echo "$green install nano$p"
sleep 2
apt install nano -y
echo "$green install cowsay$p"
sleep 2
apt install cowsay -y
echo "$green install ruby$p"
sleep 2
apt install ruby -y
echo "$green install figlet$p"
sleep 2
apt install figlet -y
echo "$green install toilet$p"
sleep 2
apt install toilet -y
sleep 2
apt install gem -y
sleep 2
apt install lolcat -y
echo "$green upgrade pip$p"
sleep 2
apt install pip
sleep 2
apt install pip2
sleep 2
pip install --upgrade pip
sleep 2
pip2 install --upgrade pip2
sleep 2
pip2 install rsa
sleep 2
pip2 install pyaes
sleep 2
pip2 install colorama
sleep 2
pip2 install request
sleep 2
pip install -r requirements.txt
sleep 2
pip2 install pytz
sleep 2
pip2 install bs4
sleep 2
pip2 install telethon
sleep 2
pip install async_generator
sleep 2
pip2 install pyan1
sleep 2
pip2 install urllib3
sleep 2
pip2 install chardet
sleep 2
pip2 install idna
sleep 2
pip2 install certifi
sleep 2
pip2 install beautifulsoup4
sleep 2
pip2 install soupsieve
sleep 2
apt install termux-api
echo "$yellow sudah terinstall semua$p"
sleep 3

exit
