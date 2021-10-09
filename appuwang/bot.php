<?php
function fetch_value($str,$find_start,$find_end) {
$start = @strpos($str,$find_start);
if ($start === false) {
	return "";
}
$length = strlen($find_start);
$end = strpos(substr($str,$start +$length),$find_end);
return trim(substr($str,$start +$length,$end));
}
function post($link,$data){
global $header;
$ch = curl_init();  curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
return curl_exec($ch);
}
function nama()
        {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$ex = curl_exec($ch);
// $rand = json_decode($rnd_get, true);
preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
return $name[2][mt_rand(0, 14) ];
}
echo "\nnickname: ";
$nickname=trim(fgets(STDIN));
echo "\nnomor hp: ";
$nomorhp=trim(fgets(STDIN));
$header=array(
"Content-Type: application/x-www-form-urlencoded",
"Host: papamuda.xyz",
"Connection: Keep-Alive");
$log="http://papamuda.xyz/app-quiz-v3/Uwang/v2/LOGIN.php";
$dat="PASS=AyooKerja77&USERNAME=".$nickname."&NoHP=".$nomorhp;
$a=post($log,$dat);
echo "\n1 atau 2";
echo "\n=> ";
$menu=trim(fgets(STDIN));
if($menu=="1")
while(true){
$r=rand(0,99999999);
$rp=rand(1000000000,9999999999);
$poin=rand(100,200);
$random=rand(20,50);
$time=rand(5,15);
$gmail = str_replace(" ","",nama()).$r;
echo "\nmembuat akun...";
$log1="http://papamuda.xyz/app-quiz-v3/Uwang/v2/REFERAL.php";
$dat1="PASS=AyooKerja77&USERNAME=".$gmail."&NoHP=08".$rp."&EMAIL=".$gmail."@gmail.com&UPLINE=".$nickname;
$b=post($log1,$dat1);
echo "\nnomor= 08".$rp;
echo "\nmail= ".$gmail;
if($b=="Selamat Pendaftaran Anda Berhasil, Dapat +200 POIN GRATIS. Ingat, USERNAME = Kode Referal Anda, Anda Dapat Menghasilkan Banyak Uang Hanya Dengan Membagikannya! - Congratulations Your Registration is Successful, Get +200 FREE POINT. Remember, Your Name = Your Referral Code, You Can Make A Lot Of Money Just Share It!"){
echo "\nsucces ngereff gan";
}else{
echo "\ngagal gan";
}
echo "\nmengerjakan misi gan";
$ad="http://papamuda.xyz/app-quiz-v3/Uwang/v2/MonitorAds.php";
$add="PASS=AyooKerja77&NoHP=08".$rp."&NAMA=".$nickname."&KETERANGAN=EXIT - Interstitial";
$addd=post($ad,$add);
$log2="http://papamuda.xyz/app-quiz-v3/Uwang/v2/SCORING.php";
$dat2="PASS=AyooKerja77&USERNAME=".$gmail."&NoHP=08".$rp."&VersiApp=22&SKOR=".$poin."&UPLINE=".$nickname;
$ca=post($log2,$dat2);
echo "\n".$ca;
echo "\n------------------\n";
for($i=$time; $i>=0; $i--){
echo "wait: ".$i." second";
sleep(1);
echo "\r                  \r";
$ti++;
 if($ti >4){
  $ti=0;
}
}
echo "\r                    \r";
}else{
}
if($menu=="2"){
while(true){
$log="http://papamuda.xyz/app-quiz-v3/Uwang/v2/LOGIN.php";
$dat="PASS=AyooKerja77&USERNAME=".$nickname."&NoHP=".$nomorhp;
$ures=post($log,$dat);
$ad1="http://papamuda.xyz/app-quiz-v3/Uwang/v2/MonitorAds.php";
$dad1="PASS=AyooKerja77&NoHP=".$nomorhp."&NAMA=".$nickname."&KETERANGAN=Unity - Reward - FreePoint";
$rad=post($ad1,$dad1);
$login="http://papamuda.xyz/app-quiz-v3/Uwang/v2/FREE_POINT.php";
$dataa="PASS=AyooKerja77&NoHP=".$nomorhp."&NAMA=".$nickname;
$res=post($login,$dataa);
$ad2="http://papamuda.xyz/app-quiz-v3/Uwang/v2/MonitorAds.php";
$dad2="PASS=AyooKerja77&NoHP=".$nomorhp."&NAMA=".$nickname."&KETERANGAN=Unity - Reward - FreePoint";
$rad2=post($ad2,$dad2);
//dash
$dash="http://papamuda.xyz/app-quiz-v3/Uwang/v2/DataUserReferal.php";
$ddash="PASS=AyooKerja77&NoHP=081327753909";
$rdash=post($dash,$ddash);
$poin = fetch_value($rdash,'"POINT":"','"');
echo "\ntotal poin:".$poin;
echo "\n------------------\n";
for($i=60; $i>=0; $i--){
echo "wait: ".$i." second";
sleep(1);
echo "\r                  \r";
$ti++;
 if($ti >4){
  $ti=0;
}
}
echo "\r                    \r";
}
}else{
}

