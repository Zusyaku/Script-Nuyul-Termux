#!/data/data/com.termux/files/usr/bin/python
# Creator : Kingtebe
# Date : 01-08-2021
import os
import json
import time
import requests
import sys as griv
from bs4 import BeautifulSoup as par

'''
A program for miner trons trx from the website Finance.btron.site
and dont forget to follow my github -^_^-
'''

# Only Color
m = '\033[1;31m'
p = '\033[1;37m'
h = '\033[1;32m'
k = '\033[1;33m'
b = '\033[1;34m'
c = '\033[1;36m'
q = '\033[1;30m'


def Config():
	os.system("cls" if os.name == "nt" else "clear"); print(f"\n   {c}__________  ____  _   __\n  {c}/_  __/ __ \/ __ \/ | / / {q}| {k}* {p}Date: 01-08-2021\n   {c}/ / / /_/ / / / /  |/ /  {q}| {k}* {p}Code by Kingtebe\n  {c}/ / / _, _/ /_/ / /|  /   {q}| {k}* {p}Github: github.com/Musk-ID\n {c}/_/ /_/ |_|\____/_/ |_/    {q}| {k}* {p}From the web Finance.btron.site{p}\n\n {p}1{m}){q}. {p}Edit config\n {p}2{m}){q}. {p}Start bot")
	global headers,data
	headers = {"user-agent": '',"cookie": ''}
	data = {"username": '',"password": '',"reference_user_id": '13812'}
	choose = input(f"\n {m}>> {p}Choose {q}: {p}")
	if choose == "1":
		user = input(f"\n {c}• {p}user-agent {q}: {k}")
		coki = input(f" {c}• {p}cookie {q}: {k}")
		addr = input(f" {c}• {p}address {q}: {k}")
		pasw = input(f" {c}• {p}password {q}: {k}")
		if user and coki and addr and pasw != '':
			with open('config.json','w') as save:
				save.write(json.dumps({"address":addr,"password":pasw,"user-agent":user,"cookie":coki},sort_keys=True,indent=4))
			print(f"\n {m}>> {p}Edit config success !!\n")
			time.sleep(1.3)
			Config()
		else:
			exit(f"\n {m}>> {p}Dont let anything be empty !!\n")

	elif choose == "2":
		if os.path.isfile('config.json'):
			exe = json.loads(open('config.json').read())
			headers["user-agent"] = exe["user-agent"]
			headers["cookie"] = exe["cookie"]
			data["username"] = exe["address"]
			data["password"] = exe["password"]
			Bot("https://finance.btron.site/ajax_auth","https://finance.btron.site/dashboard","https://api.myip.com")
		else:
			exit("\n {m}>> {p}Edit config before start bot !!\n")
	else:
		exit("\n {m}>> {p}Yang bener doang guoblok !!\n")


def timer(seconds):
	for j in range(seconds,0,-1):
		griv.stdout.write("\r \033[1;31m>> \033[1;37mTimedown \033[1;36m{:2d} \033[1;37mseconds ".format(j))
		griv.stdout.flush()
		time.sleep(1)
		print("",flush=True,end='\r')


def Bot(ajax,dash,linkna):
	os.system("cls" if os.name == "nt" else "clear"); print(f"\n   {c}__________  ____  _   __\n  {c}/_  __/ __ \/ __ \/ | / / {q}| {k}* {p}Date: 01-08-2021\n   {c}/ / / /_/ / / / /  |/ /  {q}| {k}* {p}Code by Kingtebe\n  {c}/ / / _, _/ /_/ / /|  /   {q}| {k}* {p}Github: github.com/Musk-ID\n {c}/_/ /_/ |_|\____/_/ |_/    {q}| {k}* {p}From the web Finance.btron.site{p}"); api = requests.get(linkna).json(); print(f"\n {p}Version {q}: {p}1.1 "); time.sleep(1.3); print(f" {p}IP {q}:{c} "+api["ip"]); time.sleep(1.6)
	print(f"\n {m}>> {p}Starting Bot {m}<<{p}\n")
	time.sleep(1)
	page = requests.get(ajax,headers=headers,timeout=60,data=data)
	while True:
		page_home = requests.get(dash,headers=headers,timeout=60)
		scrap = par(page_home.text, "html.parser")
		speed = scrap.find_all("td")[1].text
		balan = scrap.find("input", attrs={"id":"getBalance"})["value"]
		print(" \033[1;37mBalance \033[1;33m{} \033[1;37mTRX \033[1;30m| \033[1;37mSpeed \033[1;33m{} ".format(balan,speed))
		timer(int(60))


if __name__=='__main__':
      Config()
