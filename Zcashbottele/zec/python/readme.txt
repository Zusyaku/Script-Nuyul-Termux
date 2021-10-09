extract this folder to your sdcard
open termux
Command to Downgrade Python 3.8

cd /sdcard/python
ls
pkg uninstall python -y 
apt install ./python_3.8.6_aarch64.deb 
apt install ./python-static_3.8.6_aarch64.deb 
python --version