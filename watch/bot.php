<?php

date_default_timezone_set("Asia/Jakarta");
system("clear");
/* START COLOR */
$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

login($uwuu);
function login($uwuu){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://pastebin.com/raw/rD5BkRyG");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$headers = array(
"user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J120G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.92 Mobile Safari/537.36"
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result7 = curl_exec($ch);
$uwuu = file_get_contents('https://pastebin.com/raw/GF0i1Wa7');
echo "\n\n\033[1;32mDownload Password : \033[1;31m[ \033[1;33m".$result7." \033[1;31m]";
echo "\n\033[1;32mPassword : \033[0;30m";
$memek = trim(fgets(STDIN));
if($uwuu == $memek){
sleep(1);
echo "\033[1;32m[\033[1;37m-\033[1;32m] \033[1;37m Password True\n";
sleep(2);
system('clear');

} else {
sleep(1);
echo "\033[1;31m[ \033[1;37m!\033[1;31m] \033[1;37m Wrong Password\n";
exit;
}
}



echo"$lblue=====================================================================\n";
$yellow.system("toilet --width 70 -f pagga -F border  'WATCH HOURS'");
echo"$putih2=====================================================================\n";
system("toilet --width 50 -f pagga -F border --metal E.Scripter");
echo"\n\n\n";
sleep(1);
echo$red2."========================>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<==================\n";
echo$yellow2."  [+] CREATOR      ===>   ".$green2."@FChyd         \n";
echo$yellow2."  [+] SUPPORT      ===>   ".$green2."@himakkyy     \n";
echo$red2."======================".$putih2."{ JOIN CHANNEL / GROUP TELEGRAM }".$red2."======================\n";
echo$yellow2."  [+] {  Group  } Elite Official     ".$green2."https://t.me/Esc_official\n";
echo$yellow2."  [+] { Channel } Elite News         ".$green2."https://t.me/Esc_OfficialNews\n";
echo$yellow2."  [+] {  Group  } Xatoshi Lanzz    ".$green2."https://t.me/xatoshilanzz\n";
echo$yellow2."  [+] { Channel } Xatoshi Lanzz    ".$green2."https://t.me/cxatoshi\n";
echo$red2."========================".$putih2."{ SUBSCRIBE YOUTUBE CHANNEL }".$red2."=========================\n";
echo$yellow2."  [+] E. SCRIPTER   ↓↓  \n";
echo$green2. "  [-] https://www.youtube.com/channel/UCqqggxQ0reauZyimtBB1F9g\n";
echo$yellow2."  [+] Xatoshi Lanzz ↓↓ \n ";
echo$green2. " [-] https://www.youtube.com/channel/UC-ChEWWAb6-gDS-JDp9KDyw\n";
echo$red2."=======================".$putih2."{ WARING WARNING WARING !!! }".$red2."==========================\n";
echo$yellow2."  [+] ILEGAL TO USE MULTIPLE SEASON\n";
echo$yellow2."  [+] USE AT YOUR OWN RISK\n";
echo$yellow2."  [+] NOT PROMOSE ANY ILEGAL CONTENT\n";
echo$red2."××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××××\n\n";
echo "\n";
system("xdg-open https://t.me/xatoshilanzz");
sleep(4);
system("xdg-open https://youtu.be/skpSP0GLe_0");
sleep (9);
system("xdg-open https://t.me/Esc_official");
sleep (9);
system("xdg-open https://youtu.be/Eq6-U4K_H44");
sleep (9);

include("Elite_data.php");
while(true){
$ua = array(
"User-Agent: ".$useragent,
"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"cookie: AccExist=".$username."PHPSESSID=".$ssid
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://watchhours.com/");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
$l = curl_exec($ch);
$to = explode('<input type="hidden" name="token" value="', $l)[1];
$to = explode('"', $t)[0];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://watchhours.com/");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
$data = "token=".$to."&user=".$username."&password=".$pass."&remember=on&connect=";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$lo = curl_exec($ch);


$uas = array(
"User-Agent: ".$useragent,
"cookie: AccExist=".$username."; AutoLogin=".$autologin."; PHPSESSID=".$ssid
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://watchhours.com/index.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, $uas);
$in = curl_exec($ch);
$ba = explode('<span>Coins: <b id="c_coins" class="text-warning">', $in)[1];
$ba = explode('</b>', $ba)[0];
$dollar = explode('<small class="text-success">= ', $in)[1];
$dollar = explode('</small></span>', $dollar)[0];
$views = explode('<span>Total Views: ', $in)[1];
$views = explode('</span>', $views)[0];
echo$green2."=======================================================\n";
echo$blue2." [".$green."+".$blue2."] ".$yellow2."BALANCE       ==>  ".$putih2.$ba."\n";
echo$blue2." [".$green."+".$blue2."] ".$yellow2."DOLLAR        ==>  ".$putih2.$dollar."\n";
echo$blue2." [".$green."+".$blue2."] ".$yellow2."TOTAL VIEWS   ==>  ".$putih2.$views."\n";
echo$green2."=======================================================\n\n";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://watchhours.com/index.php?page=videos");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, $uas);
$v = curl_exec($ch);
$id = explode('<div class="website_block" id="', $v)[1];
$id = explode('">', $id)[0];


$ch = curl_init();                                                                      
curl_setopt($ch, CURLOPT_URL, "https://watchhours.com/?page=videos&vid=".$id);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, $uas);
$vi = curl_exec($ch);
$tok = explode('<script type="text/javascript">', $vi);
$tok2 = explode("var token = '", $tok[1]);
$tokk = explode("';", $tok2[1]);
$time = explode("var length = ", $tok[1]);
$time2 = explode(";", $time[1]);

for($x=$time2[0]; $x>-1; $x--){
        echo "\r                                             \r";
                      echo $lblue2."Wait ".$x." Seconds";
			sleep(1);
        echo "\r                                             \r";

}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://watchhours.com/system/gateways/video.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $uas);
$data = "data=".$id."&token=".$tokk[0];
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$suc = curl_exec($ch);

}
