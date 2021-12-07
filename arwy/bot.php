<?php
@error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}


error_reporting(0);
system("clear");

$SC = "1";

$res = url("https://controlc.com/b89a4505");
//echo $res."\n";
//exit;
$link1 = explode('Link: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('[tpcolor=#FF0000]',$res);
$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
//$pass="A";
$read = file_get_contents("key.txt");
system('clear');
if ($pass=="off"){
$o = "\033[1;32m[\033[1;31mOFFLINE\033[1;32m]";
}else{
$o = "\033[1;32m[ONLINE]";
}
if ($pass=="update"){
$o = "\033[1;32m[\033[1;91mUpdate\033[1;92m]";
}

$res = url("https://controlc.com/b27a1f06");
//echo $res."\n";
//exit;
$lg1 = explode('Login: ',$res);
$login = explode('/ajax_auth',$lg1[1]);
//echo $login[0]."\n";
//$pw1 = explode('[tpcolor=#FF0000]',$res);
//$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";
echo $baner = "
\033[1;31m ██████╗ ██████╗ ██╗   ██╗██╗██████╗       ██████╗  ██╗ \033[1;92m$o\033[1;91m
██╔════╝██╔═══██╗██║   ██║██║██╔══██╗      ╚════██╗███║
██║     ██║   ██║██║   ██║██║██║  ██║█████╗ █████╔╝╚██║\033[1;97m
██║     ██║   ██║╚██╗ ██╔╝██║██║  ██║╚════╝██╔═══╝  ██║
╚██████╗╚██████╔╝ ╚████╔╝ ██║██████╔╝      ███████╗ ██║
 ╚═════╝ ╚═════╝   ╚═══╝  ╚═╝╚═════╝       ╚══════╝ ╚═╝ SCRIPT V\033[1;92m$SC\n";
//echo $HJ2." ◼ SILAHKAN COPAS LINK. JANGAN LUPA KOPI DAN ROKOK DI SIAPKAN\n";
//echo $green2." •SILAHKAN AMBIL PASSWORD DI DALAM VIDEO YT KAKEK.\n";
//echo $red2." •(The password is in the video)\n";
//echo "\033[1;31m ◼$P2 Link Password :$HJ2 $link[0]\n";

if ($link[0]==""){
echo " \033[1;91mKONEKSI TERPUTUS, SILAHKAN CEK KONEKSIMU\n";
echo " \033[3;91mConnection Lost, Please Check Your Connection\n";
exit;
}
if ($pass == 'update'){
      echo "\033[1;92m ◼ \033[1;91mSCRIPT Anda Sudah Tidak Terhubung ke Server \033[1;92mSugiono Official \n";
      echo "\033[1;92m ◼ \033[1;97mSilahkan Copy Paste Link \n\n";
      echo "\033[1;92m ◼ \033[1;97mLink Script Versi Update \033[1;92m$link[0]\n\n";
      exit;
}

//if($pass=='update'){
//echo " \033[1;92mMohon Tunggu Proses Update Script...\r";
//sleep(3);
//system("git clone $link[0]");
//exit;
//}
if ($pass == 'off'){

      echo "\033[1;92m ◼ \033[1;91mSCRIPT SEDANG OFFLINE \033[1;97matau \033[1;91mMAINTENANCE \n";
      exit;
}else{
if($read == $pass){
      echo "\033[1;91m ▶ \033[1;92mUPLOAD Password \r";
      sleep(5);
      system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
      sleep(1);
}
elseif($read != $pass){
      //echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");
echo "\033[1;91m ◼\033[1;97m Link Password :\033[1;92m $link[0]\n";
echo "\033[1;91m ◼ \033[1;97mMASUKAN PASSWORD DI SINI : \033[1;92m";
$p = trim(fgets(STDIN));
if ($p==""){
exit;
}
echo "\n \033[1;96mLoading \033[1;31m▪\r";
sleep(1);
echo "\033[1;96m Loading \033[1;31m▪ \033[1;31m▪\r";
sleep(1);
echo "\033[1;96m Loading \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r";
sleep(1);
if($pass == $p){
        fwrite($save, $p);
        echo "\033[1;91m ◼ \033[1;92mOPEN SCRIPT SUCCESS            \r";
        system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        fclose($save);
        sleep(5);
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
        sleep(1);
        }else{
        echo "\033[1;92m ◼ \033[1;91mGAGAL...!!!, MASUKIN PASSWORD YG BENER DONG. SILAHKAN COBA LAGI\n";
        exit;
        }
        }
}
sleep(1);
echo "\033[1;97m   Silahkan Klik \033[1;32mENTER \033[1;37mUntuk Melanjutkan \033[1;92m";
$kkk = trim(fgets(STDIN));
system("clear");

date_default_timezone_set("Asia/Jakarta");
system("clear");
echo "\033[1;92m";
system("toilet -f wideterm -F border '            Arwy8877            '");
echo $baner1 = " \033[102m      \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m      \033[0m \033[102m  \033[0m \033[102m      \033[0m \033[102m      \033[0m \033[102m      \033[0m \033[101m \033[1;97mO.F.F.I.C.I.A.L \033[0m
 \033[102m  \033[0m     \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m     \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m
 \033[102m      \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m \033[102m   \033[0m \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m \033[1;94mSERVER \033[0m \033[102m \033[1;94mON \033[0m
     \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m  \033[0m  \033[102m  \033[0m
 \033[102m      \033[0m \033[102m      \033[0m \033[102m      \033[0m \033[102m  \033[0m \033[102m      \033[0m \033[102m  \033[0m  \033[102m  \033[0m \033[102m      \033[0m \033[102m \033[1;94mSCRIPT VERSION \033[0m \033[102m \033[1;94m$SC \033[0m
\033[1;32m ===============================\033[1;31m404\033[1;32m===============================
\033[1;37m •Creator        :\033[1;32m Kakek Sugiono
\033[1;37m •Support By     :\033[1;32m All Member
\033[1;37m •Group Tele     :\033[1;32m @SugionoSatoshi
\033[1;37m •Channel Tele   :\033[1;32m @SugionoOfficialChanel
\033[1;37m •Channel YT     :\033[1;32m Sugiono Official
\033[1;37m •Donation Doge  :\033[1;31m DFvVJc9pbty6Jrx94QuB7Da9LAsz7jnsso
\033[1;37m =================================================================
\033[1;31m •SCRIPT NOT FOR SALE •SCRIPT GRATIS GUNAKAN DENGAN BIJAK YA CUK
 •SEGALA RESIKO DI TANGGUNG CUCUK YA •KAKEK MAU KABUR DULU
 •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••\n\n";
include"cfg.php";

$ua[]="Host: www.arwy8877.com";
$ua[]="upgrade-insecure-requests: 1";
$ua[]="user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Mobile Safari/537.36";
$ua[]="accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$ua[]="accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
$ua[]="cookie: $cookie";

$no="0";
while("true"){
//$url="https://phoenixfaucets.xyz/home.php?BTC=0&BCH=0&BCN=1&ADA=1&DASH=1&DGB=1&DOGE=1&ETH=0&ETC=1&LSK=1&LTC=1&XMR=0&NEO=1&PPC=1&POT=0&RDD=1&XRP=1&STRAX=1&XTZ=1&TRX=1&WAVES=1&ZEC=1&EXS=1&EXG=1&PIVX=1&VTC=1&KMD=1&ZEN=1&RVN=1&USDT=1&BTT=1";
//$url="https://phoenixfaucets.xyz/home.php?BTC=0&BCH=0&BCN=1&ADA=1&DASH=1&DGB=1&DOGE=1&ETH=0&ETC=1&LSK=1&LTC=1&XMR=0&NEO=1&PPC=1&POT=0&RDD=1&XRP=1&STRAX=1&XTZ=1&TRX=1&WAVES=1&ZEC=1&EXS=1&EXG=1&PIVX=1&VTC=1&KMD=1&ZEN=1&RVN=1&USDT=1&BTT=1";
$url="https://www.arwy8877.com/home?BTC=0&BCH=0&BCN=1&DASH=0&DGB=1&DOGE=1&ETH=0&LSK=0&LTC=0&XMR=0&NEO=0&PPC=1&ETC=0&XRP=1&STRAX=0&TRX=1&WAVES=0&ZEC=0&PIVX=0&ADA=1&RDD=1&EXS=1&BTT=1&USDT=1&RVN=1";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
//echo $result."\n";
//exit;
$a=explode("14px;cursor:pointer;'> ",$result)[1];
$dodis=explode("<",$a)[0];
if($dodis=="RESTART THE FAUCET"){
echo "\033[101m \033[1;97mCOOKIE DATA ALREADY EXPIRED. PLEASE TAKE THE COOKIE DATA BACK \033[0m\n";
exit;
}
$a=explode('Command: toastr["success"]("',$result)[1];
$res=explode('"',$a)[0];
if($res==""){
}else{
$no = $no+"1";
echo " \033[101m \033[1;97m$no \033[0m \033[102m \033[1;94m".$res." \033[0m\n";

}
}

?>
