import getpass,hashlib,base64

def hasher(text,length,key):
    if length > 64:
       raise ValueError("hash length should be lower than 64")
    result = hashlib.sha256(text.encode("utf-8")+key.encode("utf8")+text.encode("utf8")).hexdigest()[:length][::-1]
    return result

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
    exec (decrypt("bb12f80aa75c97fd7003fba1880536ab9c35af7dcd8bb4f1c0e22671dcd35c699e023fcbbe6c21d3198e01c14223a9434f84e0b5e45b706efc42a261|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|30|1098!-!f62e5031fef100c0871c2a10f01ad4afa11a7fc102dd47787cea23d3916fedbfa807958fa367fa5e2829320ba281d9783e655797c72d0006205d140c",key),globals())

if "__main__" == __name__:
   print("\n Download key ⟨ https://rotf.lol/GetKey ⟩ ")
   unlock(getpass.getpass(" Key : "))
