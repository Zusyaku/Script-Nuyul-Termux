<?php 
error_reporting(0); 
session_start();
$xuong = "\n";
 $do="\033[1;91m";
 $maufulldo= "\e[1;47;31m"; 
$maunenhong= "\033[1;41;33m"; 
$white= "\033[1;37m";
$red="\033[1;31m";
$pink="\e[1;35m"; 
$green="\e[1;32m"; 
$yellow="\e[1;33m";
$white= "\033[0;37m"; 
$cyan= "\e[1;36m"; 
$blue="\e[1;34m"; 
$cam= "\e[38;5;208m";
$TIME='date "+%H:%M"';
$trang="\033[1;97m";


date_default_timezone_set('asia/ho_chi_minh');
$useragent="Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36";
$_SESSION['fck'] = file_exists("TTC.txt");
if ($_SESSION['fck'] == '1'){
  unlink("TTC.txt");
}
$_SESSION['check'] = file_exists("logttc.txt");
if ($_SESSION['check'] =='1'){
  luachon:
  echo "\n";
echo$white." Nhập$cam Enter$white để vào tool! $xuong Nhập$red No$white để đăng nhập lại TTC : ";
$_SESSION['nhap'] = trim(fgets(STDIN));
if ($_SESSION['nhap'] !='no' and $_SESSION['nhap'] != 'No' and $_SESSION['nhap'] !=''){
echo $red."Sai Định Dạng\n";
GOTO luachon;
}
if ($_SESSION['nhap'] =='no' or $_SESSION['nhap'] =='No'){
$my = fopen("logttc.txt", "w+");
echo $white." ⏩ ".$green."Nhập Cookies TTC: ";
$cc =trim(fgets(STDIN));
fwrite($my,$cc);
    $my = file("logttc.txt");
$cc = file_get_contents('logttc.txt');

}
if ($_SESSION['nhap'] == ''){
$cc = file_get_contents("logttc.txt");
}
} else {
  login:
$my = fopen("logttc.txt","w+");
echo "\n";
echo $white." ⏩ ".$green."Nhập Cookies TTC : ";
$cc = $_SESSION["cc"]=trim(fgets(STDIN));

fwrite($my,$_SESSION["cc"]);
}
$source = getcookiettc($cc,$useragent);

// $sou= strlen($source);
if ($source !==  false ){
  // echo $white." ✅ ".$green."Đăng nhập TTC thành công\n";
  // // get xu
  // $url = "https://tuongtaccheo.com/home.php";
  // $curl = curl_init();
  // curl_setopt_array($curl, array(
  // CURLOPT_PORT => "443",
  // CURLOPT_URL => "$url",
  // CURLOPT_RETURNTRANSFER => true,
  // CURLOPT_ENCODING => "",
  // CURLOPT_SSL_VERIFYPEER => true,
  // CURLOPT_CUSTOMREQUEST => "GET",
  // CURLOPT_COOKIEFILE => "TTC.txt"
  // ));
  // $data = curl_exec($curl);
  // curl_close($curl);
  //echo $red." ❌ ".$red.$source;
  // preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
  $xu = $source["coin"];
  $user = $_SESSION['username'] = $source["username"];
}else{
  echo $red." ❌ ".$red."Sai Cookie, vui lòng lấy lại\n";
   GOTO login;
}
if ($chedo == 5 or $chedo == 7){
  $luong =1;
}else {
  choose:
  echo "\n";
echo $white." ✏ ".$blue."Nhập số ních FB muốn chạy: ";
$luong=trim(fgets(STDIN));
if ($luong<1 || $luong >20){
  echo $red."\033[1;37m~\033[1;31m Ít nhất là 1 và nhiều nhất là 20 má ưiii !!!\n";
  GOTO choose;
  }
}
$c=1;$thu=1;
$mangcookie =[];
if ($chedo<7){
for($b=1;$b<=$luong;$b++){
    echo $white." + ".$green."Nhập Cookie Thứ ".$thu.":$white ";
    $cooki[$c]=trim(fgets(STDIN));
    $ch=curl_init();
    $cookie=$cooki[$c];
$access = cookie($cookie,$useragent);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0])
{
        array_push($mangcookie,$cookie);
               $c++;
              $thu++;
}else{echo $white." ⛔ ".$red."Cookie die rồi, thử lại đi \n";$b--;}
}
}else{
  for($b=1;$b<=$luong;$b++){
    echo $white." + ".$green."Nhập Token FB Thứ".$thu.":$green ";
    $cooki[$c]=trim(fgets(STDIN));
    $ch=curl_init();
    $cookie=$cooki[$c];
$access_token = $cookie;
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
array_push($mangcookie,$cookie);
               $c++;
              $thu++;
}else{
  echo $white." ⛔ ".$red."Token Die, Hãy Kiểm Tra Lại\n";$b--;}
} 
}

if($luong==1){
  nhiemvu:
  echo $white." ⏩ ".$blue."Sau bao nhiêu nhiệm vụ thì mở tránh block : $white ";
} else{
$dl = 150;
echo $white." ⏩ ".$blue."Sau bao nhiêu nhiệm vụ thì đổi cấu hình : $white ";
}
$doi=trim(fgets(STDIN));
if ($doi<1){
  echo $red."\033[1;37m~\033[1;31m Lựa chọn không hợp lệ !\n";
  GOTO nhiemvu;
}
if($luong==1){
  echo $white." ⏩ ".$blue."Dừng Thời Gian : $white ";
  $dl=trim(fgets(STDIN));
}
$listnv = [];
  Job:
  echo $yellow." ⏩ ".$blue."Chế độ Follow$pink (on/off): $white";
  $chon1=trim(fgets(STDIN));
  if ($chon1 == 'on' or $chon1 == 'On' or $chon1 == 'ON'){
    array_push($listnv,'sub');
  }
  echo $yellow." ⏩ ".$blue."Chế độ Like$pink (on/off): $white";
  $chon2=trim(fgets(STDIN));
  if ($chon2 == 'on' or $chon2 == 'On' or $chon1 == 'ON'){
    array_push($listnv,'like');
  }
  echo $yellow." ⏩ ".$blue."Chế độ Comment$pink (on/off): $white";
  $chon3=trim(fgets(STDIN));
  if ($chon3 == 'on' or $chon3 == 'On' or $chon1 == 'ON'){
    array_push($listnv,'cmt');
  }
  if ($chedo <7){
  echo $yellow." ⏩ ".$blue."Chế độ Like Page$pink (on/off): $white";
  $chon4=trim(fgets(STDIN));
  if ($chon4 == 'on' or $chon4 == 'On' or $chon1 == 'ON' ){
    array_push($listnv,'page');
  }
  echo $yellow." ⏩ ".$blue."Chế độ Cảm Xúc$pink (on/off): $white";
  $chon5=trim(fgets(STDIN));
  if ($chon5 == 'on' or $chon5 == 'On' or $chon1 == 'ON'){
    array_push($listnv,'cx');
  }
}
  if (count($listnv) == 0){
    echo $red."Chọn tối thiểu 1 loại Job !\n";
    GOTO Job;
  }
  Time_nv:
  echo $yellow." ⏩ ".$blue."Delay Nhiệm Vụ: $white";
  $timedelay=trim(fgets(STDIN));
  if($timedelay < 1)
    {
      echo $red."\033[1;37m~\033[1;31m Delay không hợp lệ !\n";
      GOTO Time_nv;
    }
usleep(200000);

echo $white."             \n";
for($v=0;$v<= 12;$v++){
    echo "\033[1;37m- ";usleep(15000);
    echo "\033[1;33m- ";usleep(15000);
}
echo "\033[1;37m- ";usleep(15000);
echo "\033[1;33m-";usleep(15000);
echo"\n";
echo $cyan." ✅ ".$cam."Username: $white".$user."\n";
echo $cyan." ✅ ".$cam."Account number :$white $luong\n";
echo $cyan." ✅ ".$cam."Coin :$white $xu\n";
echo $cyan." ✅ ".$cam."ID tool :$white T001\n";
echo $cyan." ✅ ".$cam."Verison :$white V.4\n";
echo $cyan." (Nếu bị đứng thì bạn quên cấu hình ních rồi^^)\n";
for($v=0;$v<= 12;$v++){
    echo "\033[1;37m- ";usleep(15000);
    echo "\033[1;33m- ";usleep(15000);
}
echo "\033[1;37m- ";usleep(15000);
echo "\033[1;33m-";usleep(15000);
echo"\n";
$q=1;
while ($o <= $_SESSION['i']){
for($l=0;$l<count($mangcookie);$l++){
$cookie = $mangcookie[$l];
if ($chedo < 7){
$access = cookie($cookie,$useragent);
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
}else{
  $access_token = $cookie;
}
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
  $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};
  $tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};
}else{
  echo "                                     \r";
  echo $white." ⛔ ".$red."Cookie Die\n";
  array_splice($mangcookie,$l,1);
}
$h = datnick($cc,$idfb,$useragent);
if ($h == '1'){
echo "                                                    \r";
echo $white." Supports TTC - ".$green."Account: $cam".$tenfb." - ".$idfb."\n";
        $i=1;
        $max=0;
while($i<10){
  $rand = $listnv[array_rand($listnv,1)];
  if ($rand == 'like'){
    $loai = 'like';
    $list = getlike($cc,$useragent);
    $check = count($list);
    if($check==0){
      echo "                                                      \r";
     echo $white." ❌ ".$red."Hết Nhiệm Vụ Like\r";
    }
    foreach ($list  as $id) {
    $id = $id[("idpost")];
    $g = like($access_token,$id,$cookie);
    if ($g->{'error'}->{'code'} == 368){
          echo "                                                      \r";
          echo $white." ⛔ ".$red."Đã Bị Block\n";
          array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
    if ($g->{'error'}->{'code'} == 190){
              echo "                                                      \r";
            echo $white." ⛔ ".$red."Cookie Die\r";
            array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
    $ck = nhantienlike($cc,$id,$useragent);
  $s= strlen($ck[("mess")]);
  if ($s > 2){
    $t = random_int(31,37);
      $mau = "\e[1;$t"."m";
      $max=$max+1;
      $stt=$stt+1;
      $xu = getxu($cc);
      echo "\r";
      echo "                                              \r";
      echo $yellow."[$stt]".$red." ● ".$cyan;
      echo date("H:i");
      echo $red." ●$red LIKE$red ● $white";
      echo $pink.$id."$red ● ";
      echo $blue."+300"."$red ● $yellow";
      echo $xu."\n";
    loadtime($timedelay);
      if ($max==$doi){
           $max=0;
           break;
          }
    } 
    } 
    
    if($check!=0){
    if($max==0){
          if(count($mangcookie)==1){
          echo "                                                      \r";
           for($j = $dl;$j> 0;$j--){
             echo $green."Đang chờ delay tránh block$yellow $j Giây";
             sleep(1);
             echo "\r";
           }
          }else{
          break;}
        }
        if($m==1){
      $m=0;
      break; 
    }
    }
  }
  if ($rand == 'sub'){
    $loai = 'sub';
    $list = getnv($cc,$loai,$useragent);
    $check = count($list);
    if($check==0){
      echo "                                                      \r";
     echo $white." ❌ ".$red."Hết Nhiệm Vụ Follow\r";
    }
    foreach ($list  as $id) {
    $id = $id[("idpost")];
    $g = follow($access_token,$id,$cookie);
    if ($g->{'error'}->{'code'} == 368){
        echo "                                                      \r";
         echo $white." ⛔ ".$red."Đã Bị Block\n";
         array_splice($mangcookie,$l,1);
           $m = 1;
           break;
   }
    if ($g->{'error'}->{'code'} == 190){
              echo "                                                      \r";
            echo $white." ⛔ ".$red."Cookie Die\r";
            array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
    $ck = hoanthanhsub($cc,$id);
  $s= strlen($ck[("mess")]);
  if ($s > 29){
    $t = random_int(31,37);
      $mau = "\e[1;$t"."m";
      $max=$max+1;
      $stt=$stt+1;
      $xu = getxu($cc);
      echo "\r";
      echo "                                              \r";
      echo $yellow."[$stt]".$red." ● ".$cyan;
      echo date("H:i");
      echo $red." ●$red FOLLOW$red ● $white";
      echo $pink.$id."$red ● ";
      echo $blue."+600"."$red ● $yellow";
      echo $xu."\n";
      loadtime($timedelay);
      if ($max==$doi){
           $max=0;
           break;
          }
    } // nháº­n tiá»n
    } // foreach
  
    if($check!=0){
    if($max==0){
          if(count($mangcookie)==1){
          echo "                                                      \r";
           for($j = $dl;$j> 0;$j--){
             echo $green."Đang Chờ Delay Tránh Block$yellow $j Giây";
             sleep(1);
             echo "\r";
           }
          }else{
          break;}
        }  
    if($m==1){
      $m=0;
      break; 
    }
  
    }
  }
  if ($rand == 'cmt'){
    $loai = 'cmt';
    $list = getnv($cc,$loai,$useragent);
    $check = count($list);
    if($check==0){
      echo "                                                      \r";
     echo $white." ❌ ".$red."Hết Nhiệm Vụ Comment\r";
    }
    foreach ($list  as $id => $key) {
    $uid = $key[("idpost")];
    $ms = json_decode($key[("nd")]);
    $msg = $ms[1];
    $g = cmt($access_token,$uid,$cookie,$msg);
    if ($g->{'error'}->{'code'} == 368){
          echo "                                                      \r";
          echo $white." ⛔ ".$red."Đã Bị Block\n";
          array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
    if ($g->{'error'}->{'code'} == 190){
              echo "                                                      \r";
            echo $white." ⛔ ".$red."Cookie Die\r";
            array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
  $ck = hoanthanhcmt($cc,$uid);
  $s= strlen($ck[("mess")]);
  if ($s > 29){
    $t = random_int(31,37);
      $mau = "\e[1;$t"."m";
      $max=$max+1;
      $stt=$stt+1;
      $xu = getxu($cc);
      echo "\r";
      echo "                                              \r";
      echo $yellow."[$stt]".$red." ● ".$cyan;
      echo date("H:i");
      echo $red." ●$red CMT$red ● $white";
      echo $pink.$uid."$red ● ";
      echo $blue."+600"."$red ● $yellow";
      echo $xu."\n";
      loadtime($timedelay);
      if ($max==$doi){
           $max=0;
           break;
          }
    } // nháº­n tiá»n
    } // foreach
    
    if($check!=0){
    if($max==0){
          if(count($mangcookie)==1){
          echo "                                                    \r";
           for($j = $dl;$j> 0;$j--){
             echo $green."Đang Chờ Delay Tránh Block$yellow $j Giây";
             sleep(1);
             echo "\r";
           }
          }else{
          break;}
        } 
        if($m==1){
      $m=0;
      break; 
    }
    }
  }
  if ($rand == 'page'){
    $loai ='likepage';
  $list = getnv($cc,$loai,$useragent);
    $check = count($list);
    if($check==0){
      echo "                                                      \r";
     echo $white." ❌ ".$red."Hết Nhiệm Vụ Like Page\r";
    }
    foreach ($list  as $id) {
    $id = $id[("idpost")];
    $g = page($id,$cookie);
    if ($g->{'error'}->{'code'} == 190){
              echo "                                                      \r";
            echo $white." ⛔ ".$red."Cookie Die\r";
            array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
    $ck = nhantien($cc,$loai,$id,$useragent);
  $s= strlen($ck[("mess")]);
  if ($s > 2){
    $t = random_int(31,37);
      $mau = "\e[1;$t"."m";
      $max=$max+1;
      $stt=$stt+1;
      $xu = getxu($cc);
      echo "\r";
      echo "                                              \r";
      echo $yellow."[$stt]".$red." ● ".$cyan;
      echo date("H:i");
      echo $red." ●$red PAGE$red ● $white";
      echo $pink.$id."$red ● ";
      echo $blue."+600"."$red ● $yellow";
      echo $xu."\n";
      loadtime($timedelay);
      if ($max==$doi){
           $max=0;
           break;
          }
    } // nháº­n tiá»n
    } // foreach
    
    if($check!=0){
    if($max==0){
          if(count($mangcookie)==1){
          echo "                                                    \r";
           for($j = $dl;$j> 0;$j--){
             echo $green."Đang Chờ Delay Tránh Block$yellow $j Giây";
             sleep(1);
             echo "\r";
           }
          }else{
          break;}
        } 
        if($m==1){
      $m=0;
      break; 
    }
    }
  }
  if ($rand == 'cx'){
    $loai = 'camxuc';
    $list = getnv($cc,$loai,$useragent);
    $check = count($list);
    if($check==0){
      echo "                                                      \r";
     echo $white." ❌ ".$red."Hết Nhiệm Vụ Cảm Xúc\r";
    }
    foreach ($list  as $id => $key) {
    $id = $key[("idpost")];
    $type = $key[("loaicx")];
    $g = camxuc($id,$type,$cookie);
    if ($g->{'error'}->{'code'} == 368){
          echo "                                                      \r";
          echo $white." ⛔ ".$red."Đã Bị Block\n";
          array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
    if ($g->{'error'}->{'code'} == 190){
              echo "                                                      \r";
            echo $white." ⛔ ".$red."Cookie Die\r";
            array_splice($mangcookie,$l,1);
            $m = 1;
            break;
    }
   $ck = hoanthanh($cc,$type,$id);
   $xu2 = getxu($cc);
   
    if ($xu2 != $xu){
      $max=$max+1;
      $stt=$stt+1;
      $xu = $xu2;
      $t = random_int(31,37);
    $mau = "\e[1;$t"."m";
    echo "\r";
      echo "                                              \r";
      echo $yellow."[$stt]".$red." ● ".$cyan;
      echo date("H:i");
      echo $red." ●$red $type $red● $white";
      echo $pink.$id."$red ● ";
      echo $blue."+400"."$red ● $yellow";
      echo $xu."\n";
      loadtime($timedelay);
      if ($max==$doi){
           $max=0;
           break;
          }
    } // nháº­n tiá»n
    } // foreach
    
    if($check!=0){
    if($max==0){
          if(count($mangcookie)==1){
          echo "                                                    \r";
           for($j = $dl;$j> 0;$j--){
             echo $green."Đang Chờ Delay Tránh Block$yellow $j Giây";
             sleep(1);
             echo "\r";
           }
          }else{
          break;}
        }  
      if($m==1){
      $m=0;
      break; 
    }
    }
  }
  
}

}
}
if (count($mangcookie)==1 && empty($dl)){
  echo $pink." ⏩ ".$blue."Dừng Thời Gian: ";
  $dl=trim(fgets(STDIN));
}
if (count($mangcookie)==0){
echo $pink." ⛔ ".$red."Tất Cả Cookie Đều Die\n";
if ($chedo == 5 or $chedo == 7){
  $luong =1;
}else {
echo $pink." ⏩ ".$blue."Nhập Số Acc Facebook Cần Treo: ";
$luong=trim(fgets(STDIN));
if ($luong<1){exit($red."\033[1;37m~\033[1;31m Lựa Chọn Không Xác Định\n");}
}
$c=1;$thu=1;
if ($chedo<7){
for($b=1;$b<=$luong;$b++){
    echo $pink." + ".$yellow."Nhập Cookie Thứ ".$thu.":$white ";
    $cooki[$c]=trim(fgets(STDIN));
    $ch=curl_init();
    $cookie=$cooki[$c];
$access = cookie($cookie,$useragent);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0])
{
array_push($mangcookie,$cookie);
               $c++;
              $thu++;
}else{echo $white." ⛔ ".$red."Cookie Die, Hãy Kiểm Tra Lại\n";$b--;}
}
}else{
  for($b=1;$b<=$luong;$b++){
    echo $white." + ".$yellow."Nhập Token Thứ ".$thu.":$white ";
    $cooki[$c]=trim(fgets(STDIN));
    $ch=curl_init();
    $cookie=$cooki[$c];
$access_token = $cookie;
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
  array_push($mangcookie,$cookie);
               $c++;
              $thu++;
}else{
  echo $white." ⛔ ".$red."Token Die, Hãy Kiểm Tra Lại\n";$b--;
}
} 
}
if (count($mangcookie)==1 && empty($dl)){
  echo $white." ⏩ ".$blue."Sau Bao Nhiêu Nhiệm Vụ Bật Tránh Block ";
  $doi=trim(fgets(STDIN));
  echo $white." ⏩ ".$blue."Dừng Thời Gian: ";
  $dl=trim(fgets(STDIN));
}
}
}



function cookie($cookie,$useragent){
$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT,$useragent );
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
return $access;
}
function follow($access_token,$id,$cookie){
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/subscribers');
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "authority: m.facebook.com";
  $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
  $head[] = "cache-control: max-age=0";
  $head[] = "upgrade-insecure-requests: 1";
  $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $head[] = "sec-fetch-site: none";
  $head[] = "sec-fetch-mode: navigate";
  $head[] = "sec-fetch-user: ?1";
  $head[] = "sec-fetch-dest: document";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
  $data = array('access_token' => $access_token);
  curl_setopt($ch, CURLOPT_POST,count($data));
  curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
  $access = curl_exec($ch);
  curl_close($ch);
  return json_decode($access);
}
function like($access_token,$id,$cookie){
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "authority: m.facebook.com";
  $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
  $head[] = "cache-control: max-age=0";
  $head[] = "upgrade-insecure-requests: 1";
  $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $head[] = "sec-fetch-site: none";
  $head[] = "sec-fetch-mode: navigate";
  $head[] = "sec-fetch-user: ?1";
  $head[] = "sec-fetch-dest: document";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
  $data = array('access_token' => $access_token);
  curl_setopt($ch, CURLOPT_POST,count($data));
  curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
  $access = curl_exec($ch);
  curl_close($ch);
  return json_decode($access);
}
function cmt($access_token,$id,$cookie,$msg){
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "authority: m.facebook.com";
  $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
  $head[] = "cache-control: max-age=0";
  $head[] = "upgrade-insecure-requests: 1";
  $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $head[] = "sec-fetch-site:";
  $head[] = "sec-fetch-mode: navigate";
  $head[] = "sec-fetch-user: ?1";
  $head[] = "sec-fetch-dest: document";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
  $data = array('message' => $msg,'access_token' => $access_token);
  curl_setopt($ch, CURLOPT_POST,count($data));
  curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
  $access = curl_exec($ch);
  curl_close($ch);
  return json_decode($access);
}
function page($id,$cookie){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "Accept-Language: en-us,en;q=0.5";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
  :'));
  $page = curl_exec($ch);
  if (explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0]){
    $get = explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0];
    $link = 'https://mbasic.facebook.com/a/profile.php?fan&id='.$id.'&origin=page_profile&pageSuggestionsOnLiking=1&gfid='.$get.'&refid=17';
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
  } 
  curl_close($ch);

}
function camxuc($id,$type,$cookie){
  $ch = curl_init();
  if(strpos($id,'_')){
    $uid = explode('_',$id, 2);
    $id2 = 'story.php?story_fbid='.$uid[1].'&id='.$uid[0];
  }else{
    $id2 = $id;
  }
  curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id2);
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "Accept-Language: en-us,en;q=0.5";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
  :'));
  $page = curl_exec($ch);
  if ($id2 != $id && explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0]){
    $get = explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0];
  }else{
    $get = $id2;
  }
  $link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
  curl_setopt($ch, CURLOPT_URL, $link);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $cx = curl_exec($ch);
  $haha = explode('<a href="',$cx);
  if ($type == 'LOVE'){
    $haha2 = explode('" style="display:block"',$haha[2])[0];
  }else if ($type == 'WOW'){
    $haha2 = explode('" style="display:block"',$haha[5])[0];
  }else if ($type == 'CARE'){
    $haha2 = explode('" style="display:block"',$haha[3])[0];
  }else if ($type == 'HAHA'){
    $haha2 = explode('" style="display:block"',$haha[4])[0];
  }else if ($type == 'SAD'){
    $haha2 = explode('" style="display:block"',$haha[6])[0];
  }else{
    $haha2 = explode('" style="display:block"',$haha[7])[0];
  }
  $link2 = html_entity_decode($haha2);  

  curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_exec($ch);
  curl_close($ch);
}
function loadtime($time){
        for ( $x = $time; $x--; $x ) {
echo "                                                      \r";
echo " Vui Lòng Chờ \e[1;31m- \e[1;32m- \e[1;33m- \e[1;34m- \e[1;35m- \e[1;37m ".$x."\033[1;37m \e[1;33m Giây";
usleep(170000);
echo "\r";
echo "                                                      \r";
echo " Vui Lòng Chờ \e[1;33m- \e[1;34m- \e[1;35m- \e[1;36m- \e[1;31m- \e[1;37m ".$x."\033[1;37m \e[1;34m Giây";
       usleep(170000);
       echo "\r";
       echo "                                                      \r";
       echo " Vui Lòng Chờ \e[1;34m- \e[1;35m- \e[1;36m- \e[1;31m- \e[1;33m- \e[1;37m ".$x."\033[1;37m \e[1;31m Giây";
       usleep(170000);
       echo "\r";
       echo "                                                      \r";
       echo " Vui Lòng Chờ \e[1;35m- \e[1;36m- \e[1;31m- \e[1;33m- \e[1;34m- \e[1;37m ".$x."\033[1;37m \e[1;32m Giây";
       usleep(170000);
       echo "\r";
       echo "                                                      \r";
       echo " Vui Lòng Chờ \e[1;33m- \e[1;32m- \e[1;31m- \e[1;35m- \e[1;36m-\e[1;37m ".$x."\033[1;37m \e[1;36m Giây";
       usleep(170000);
       echo "\r";
}
}
function loadcmt($time){
for ( $x = $time; $x--; $x ) {
echo "                                                      \r";
echo "\e[1;32m🇻🇳 Vui Lòng Chờ \e[1;37m \e[1;31m- \e[1;32m- \e[1;33m- \e[1;34m- \e[1;35m- \e[1;37m ".$x."\033[1;37m \e[1;33mGiây";
usleep(170000);
echo "\r";
echo "                                                      \r";
echo "\e[1;36m🇻🇳 Vui Lòng Chờ \e[1;37m \e[1;33m- \e[1;34m- \e[1;35m- \e[1;36m- \e[1;31m- \e[1;37m ".$x."\033[1;37m \e[1;34m Giây";
       usleep(170000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;34m🇻🇳 Vui Lòng Chờ \e[1;37m \e[1;34m- \e[1;35m- \e[1;36m- \e[1;31m- \e[1;33m- \e[1;37m ".$x."\033[1;37m \e[1;31m Giây";
       usleep(170000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;33m🇻🇳 Vui Lòng Chờ \e[1;37m \e[1;35m- \e[1;36m- \e[1;31m- \e[1;33m- \e[1;34m- \e[1;37m ".$x."\033[1;37m \e[1;32m Giây";
       usleep(170000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;31m🇻🇳 Vui Lòng Chờ \e[1;37m \e[1;33m- \e[1;32m- \e[1;31m- \e[1;35m- \e[1;36m-\e[1;37m ".$x."\033[1;37m \e[1;36m Giây";
       usleep(170000);
       echo "\r";
      
}
}
function getcookiettc($cc,$useragent){
  $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/home.php');
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE, $cc);
curl_setopt($ch, CURLOPT_REFERER, 'https://tuongtaccheo.com');
$source=curl_exec($ch);
curl_close($ch);
if(preg_match('#id="soduchinh">(.+?)<#is', $source, $sd)){
  $xu = $sd["1"];
  preg_match('#Chào mừng <i>(.+?)<#is', $source, $sd2);
  $username = $sd2["1"];
  return array("username"=>$username,"coin"=>$xu);
}else{
return false;	
}
}
function datnick($cc,$idfb,$useragent){
$dat=http_build_query(array('iddat[]'=> $idfb, 'loai'=>'fb'));
$ch=curl_init();
  curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/cauhinh/datnick.php');
  $head[]='Host: tuongtaccheo.com';
  $head[]='content-length: '.strlen($dat);
  $head[]='accept: */*';
  $head[]='origin: https://tuongtaccheo.clm';
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='save-data: on';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='referer: https://tuongtaccheo.com/cauhinh/index.php';
  $head[]='accept-language: vi-VN, vi;q=0.9,fr-FR;q=0.8,fr;q=0.7, en-US;q=0.6,en;q=0.5,zh-CN;q=0.4.zh;q=0.3';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$dat);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch, CURLOPT_COOKIE, $cc);
  $h = curl_exec($ch);
  curl_close($ch);
  
  return $h;
}
function getlike($cc,$useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch, CURLOPT_COOKIE, $cc);
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}
function getnv($cc,$loai,$useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/'.$loai.'cheo/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J320G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/'.$loai.'cheo';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch, CURLOPT_COOKIE, $cc);
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}
function nhantienlike($cc,$id,$useragent){
  $ch= curl_init();
  $data= ('id=').$id;
  curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/nhantien.php');
  $head[]='Host: tuongtaccheo.com';
  $head[]='content-length: '.strlen($data);
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://tuongtaccheo.com';
  $head[]='referer: https://tuongtaccheo.com/kiemtien/';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch,CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch, CURLOPT_COOKIE, $cc);
  $xu= json_decode(curl_exec($ch), true);
  curl_close($ch);
  return $xu;
}
function nhantien($cc,$loai,$id,$useragent){
  $ch= curl_init();
  $data= ('id=').$id;
  curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/'.$loai.'cheo/nhantien.php');
  $head[]='Host: tuongtaccheo.com';
  $head[]='content-length: '.strlen($data);
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://tuongtaccheo.com';
  $head[]='referer: https://tuongtaccheo.com/kiemtien/'.$loai.'cheo/';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch, CURLOPT_COOKIE, $cc);
  $xu= json_decode(curl_exec($ch), true);
  curl_close($ch);
  return $xu;
}
function hoanthanh($cc,$type,$id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/camxuccheo/nhantien.php";
    $data= 'id='.$id.'&loaicx='.$type;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/camxuccheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_COOKIE => $cc,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}
function getxu($cc){
  $url = "https://tuongtaccheo.com/home.php";
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIE => $cc
  ));
  $data = curl_exec($curl);
  curl_close($curl);
  preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
  $xu = $sd["1"];
  return $xu; 
}
function hoanthanhcmt($cc,$id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/cmtcheo/nhantien.php";
    $data= ('id=').$id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/cmtcheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIE => $cc,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}
function hoanthanhsub($cc,$id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/subcheo/nhantien.php";
    $data= ('id=').$id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/cmtcheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIE => $cc,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}
?>