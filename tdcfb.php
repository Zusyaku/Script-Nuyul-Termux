<?php
error_reporting(0);
$nau= "\e[38;5;94m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$header = ["Host:tuongtacdao.net","x-requested-with:XMLHttpRequest","user-agent:Mozilla/5.0 (Linux; Android 10; Redmi 7A) AppleWebKit/537.36 (KHTML, like Gecko) coc_coc_browser/95.0.158 Mobile Chrome/89.0.4389.158 Mobile Safari/537.36","content-type:application/x-www-form-urlencoded; charset=UTF-8"];
$useragent = 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) GSA/77.0.255294728 Mobile/15E148 Safari/605.1';
$thanh_xau= $trang."~".$do."[".$luc."●".$do."] ".$trang."=> ";
$thanh_dep= $trang."~".$do."[".$luc."✓".$do."] ".$trang."=> ";
system('clear');
 chay(35);
//login
echo $thanh_dep.$luc."Nhập Tài Khoản TTD: $vang";
$user = trim(fgets(STDIN));
echo $thanh_dep.$luc."Nhập Mật Khẩu TTD: $vang";
$pass = trim(fgets(STDIN));
$mr = curl_init();
$login = 'case=login&username='.$user.'&password='.$pass;
curl_setopt($mr, CURLOPT_URL, 'https://tuongtacdao.net/log/xuly.php');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_COOKIEJAR, 'TTD.txt');
curl_setopt($mr, CURLOPT_POSTFIELDS, $login);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
if ( $json["title"] == 'Đăng nhập thành công' ){
	echo $xnhac." Đăng Nhập Thành Công \n";
	} else { die($do." Đăng Nhập Thất Bại \n"); }
chay(35);
echo $thanh_dep."Nhập Cookie Facebook: $vang";
	$cookie = trim(fgets(STDIN));
sleep(2);
//$thongtin
$xuhientai = xu($header, $useragent);
@system('clear');
clear_now();
echo $thanh_xau.$hong."TOOL AUTO TTD COOKIE \n";
usleep(2000);
echo $thanh_xau.$vang."Bản Quyền:".$xduong." TTD\n";
usleep(2000);
echo $thanh_xau.$luc."Admin:$xnhac Lê Văn Bình\n";
usleep(2000);
 chay(35);
echo $thanh_dep.$luc."Thể Loại Tool Bạn Đang Chạy Là Tool: ".$vang."Cookie\n";
echo $thanh_dep.$luc."Số ".$vang."Luồng ".$luc."Là: ".$vang.$demcki."\n";
chay(35);
echo $thanh_dep.$luc."Tài Khoản TDS Của Bạn Là: ".$vang.$user."\n";
echo $thanh_dep.$luc."Số Xu Hiện Tại Của Bạn Là: ".$vang.$xuhientai."\n";
chay(35);
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Nhiệm Vụ Like\n";
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhiệm Vụ Follow\n";
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Nhiệm Vụ Comment\n";
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."4".$do."]".$luc." Nhiệm Vụ Cảm Xúc \n";
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."5".$do."]".$luc." Nhiệm Vụ Cảm Xúc Comment\n";
echo $thanh_dep.$nau."Có Thể Chọn Nhiều Nhiệm Vụ (Ví Dụ 2+4) "; sleep (1);
echo "\r                                                                       \r";
echo $thanh_dep.$luc."Nhập Số Để Chạy Nhiệm Vụ: $vang";
$nhiemvu = trim(fgets(STDIN));
chay(35);
//cấu hình
echo $thanh_dep.$luc."Nhập Thời Gian Làm Nhiệm Vụ ".$trang."min: $vang";
$delay1 = trim(fgets(STDIN));
echo $thanh_dep.$luc."Nhập Thời Gian Làm Nhiệm Vụ ".$trang."min: $vang";
$delay2 = trim(fgets(STDIN));
echo $thanh_dep.$luc."Sau ____ Nhiệm Vụ Thì Kích Hoạt Chống Block.     \r";
echo $thanh_dep.$luc."Sau $vang";
$xxxxx = trim(fgets(STDIN));
echo $thanh_dep.$luc."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Ngơi ____ Giây       \r";
echo $thanh_dep.$luc."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Ngơi $vang";
$delaybl = trim(fgets(STDIN));
chay(35);
echo $access_token = laytoken($cookie);
if (strpos($access_token, 'EAAAA') !== 0) {
    echo "Token lỗi!!?!                      \n";
}
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
//Cấu Hình
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'https://tuongtacdao.net/core/cauhinh');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($mr, CURLOPT_COOKIEFILE, 'TTD.txt');
curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); 
curl_close($mr);
if ( strpos($mr2,$idfb) != true ){
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'https://tuongtacdao.net/core/cau-hinh/xuly.php');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_COOKIEFILE, 'TTD.txt');
curl_setopt($mr, CURLOPT_POSTFIELDS, 'case=ADD&idfb='.$idfb);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); 
curl_close($mr);
//print_r($mr2);
$json = json_decode($mr2, true);
if ($json["title"] == "Chưa đạt yêu cầu (50 bạn bè)" ){ die($do."Acc Chưa Đủ 50 Bạn Bè Hoặc Chưa Đủ 18 Tuổi Hoặc Chưa Công Khai Danh Sách Bạn Bè , Vui Lòng Nuôi Thêm \n"); }
}
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'https://tuongtacdao.net/core/cau-hinh/xuly.php');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_COOKIEFILE, 'TTD.txt');
curl_setopt($mr, CURLOPT_POSTFIELDS, 'case=RUN&idfb='.$idfb);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); 
curl_close($mr);
$json = json_decode($mr2, true);
//print_r($json);
if ( $json["type"] == "success" ){
	echo $vang."Cấu Hình Thành Công ID: ".$luc.$idfb."\n"; }
else {
    echo $do."Cấu Hình Thất Bại, Vui Lòng Thêm $idfb Vào Cấu Hình Tài Khoản $user \r"; die();
}
while (true) {
    //listlike
    if (strpos($nhiemvu, '1') !== false) {
            $listlike = getnv("like", $useragent);
    }
    //listfollow
    if (strpos($nhiemvu, '2') !== false) {
		$listsub = getnv("sub", $useragent);
	}
    //listcmt
    if (strpos($nhiemvu, '3') !== false) {
		$listcmt = getnv("comment", $useragent);
    }
    //list cảm xúc
    if (strpos($nhiemvu, '4') !== false) {
		$listcx = getnv("reaction", $useragent);
    }
    //list cảm xúc cmt
	if (strpos($nhiemvu, '5') !== false) {
		$listcxcmt = getnv("reaction-comment", $useragent);
    }
    for ($lap = 0; $lap < 20; $lap++) {
        // like
        if ($listlike !== NULL) {
            $idlike = $listlike[$lap]["id"];
            echo $id."\r";
            if ($idlike != '') {
                $g = like($access_token, $idlike, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "\033[1;91m Token Tài Khoản $tenfb Đã Bị Out                            \n";
                }
               if ($g -> {'error'} -> {'code'} == 368) {
                 echo "\033[1;91m Tài Khoản $tenfb Đã Bị Block Tính Năng Like \r";
                }
                if ($g -> {'error'} -> {'code'} == 405) {
                    echo "\033[1;91m"."Tài khoản $tenfb bị checkpoint.     \n";
                }
                $nhanlike = nhan("like", $idlike, $useragent);
                if ($nhanlike["type"] == "success") {
                    $xu = xu($header, $useragent);
                    $xujob = "+300";
                    $dem++;                   
                    hoanthanh($dem, ' LIKE ', $idlike, $xujob, $xu);
                    if($dem % $xxxxx == 0){
                      delaybl($delaybl);
                    } else {
                   $delay = rand($delay1,$delay2);  
                    delay($delay); }
                }
            }}
        //follow
        if ($listsub !== NULL) {
            $idsub = $listsub[$lap]["id"];
            echo $idsub."\r";
            if ($idsub != '') {
                $g = follow($access_token, $idsub, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "\033[1;91m Token Tài Khoản $tenfb Đã Bị Out                                  \n";
                    }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m Tài Khoản $tenfb Đã Bị Block Tính Năng Follow \r";
                    }
                if ($g -> {'error'} -> {'code'} == 405) {
                    echo "\033[1;91m"."Tài khoản $tenfb bị checkpoint.           \n";
                    }
                $nhansub = nhansub("sub", $idsub, $useragent);
                if ($nhansub["type"] == "success") {
                    $xu = xu($header, $useragent);
                    $xujob = "+600";
                    $dem++;
                    $te=json_decode(file_get_contents('https://graph.facebook.com/?ids='.$idsub.'&fields=id,name&access_token='.$access_token), true);
					$ten=$te[$idsub]["name"];
                    hoanthanh($dem, 'FOLLOW', $ten, $xujob, $xu);
                    if($dem % $xxxxx == 0){
                      delaybl($delaybl);           
			  		} else {
                    $delay = rand($delay1,$delay2); 
                    delay($delay); }
                }
            }}
        //cmt
        if ($listcmt !== NULL) {
            $idcmt = $listcmt[$lap]["id"];
            $msg = $listcmt[$lap]["noidung"];
            echo $idcmt."\r";
            if ($idcmt !== '') {
                cmt($access_token, $idcmt, $cookie, $msg);
                $nhancmt = nhancmt($idcmt, $msg, $useragent);
                if ($nhancmt["type"] == "success") {
                    $xu = xu($header, $useragent);
                    $xujob = "+600";
                    $dem++;
                    hoanthanhcmt($dem, ' CMT  ', $idcmt, $xujob, $xu,$msg);
                    if($dem % $xxxxx == 0){
                      delaybl($delaybl);
                    } else {
                    $delay = rand($delay1,$delay2); 
                    delay($delay); }
                }
            }}
//nv cảm xúc
        if ($listcx !== NULL) {
            $idcx = $listcx[$lap]["id"];
            $type = $listcx[$lap]["type"];
            echo $idcx."\r";
            if ($idcx != '') {
                camxuc($idcx, $type, $cookie);
                $nhancx = nhan("reaction", $idcx, $useragent);
                if ($nhancx["type"] == "success") {
                    $xu = xu($header, $useragent);
                    $xujob = "+400";
                    $dem++;
                    hoanthanh($dem, $type, $idcx, $xujob, $xu);
                    if($dem % $xxxxx == 0){
                      delaybl($delaybl);
                    } else {
                    $delay = rand($delay1,$delay2); 
                    delay($delay); }
                }
            }}
//nv cảm xúc cmt
        if ($listcxcmt !== NULL) {
            $idcxcmt = $listcxcmt[$lap]["id"];
            $type = $listcxcmt[$lap]["type"];
            if ($idcxcmt !== '') {
            	if ($type == 'LIKE'){
                    like($access_token, $idcxcmt, $cookie);
                }else{
                camxuc($idcxcmt, $type, $cookie);
                }
                $nhancxcmt = nhan("reaction-comment", $idcxcmt, $useragent);
                if ($nhancxcmt["type"] == "success") {
                    $xu = xu($header, $useragent);
                    $xujob = "+800";
                    $dem++;
                    hoanthanh($dem, $type.' CMT', $idcxcmt, $xujob, $xu);
                    if($dem % $xxxxx == 0){
                      delaybl($delaybl);
                    } else {
                    $delay = rand($delay1,$delay2); 
                    delay($delay); }
                }
            }}
             } //for
} //while
function clear_now(){ DIRECTORY_SEPARATOR === '\\' ? popen('cls', 'w') : exec('clear'); }
function xu($header, $useragent){
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'https://tuongtacdao.net/view/settings');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($mr, CURLOPT_COOKIEFILE, 'TTD.txt');
curl_setopt($mr, CURLOPT_HTTPHEADER, $header);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); 
curl_close($mr);
$sodu = explode('<label>Hiện có:</label>',$mr2)[1];
$sodu1 = explode('<input disabled class="form-control" value="',$sodu)[1];
$xu = explode(' ',$sodu1)[0];
return $xu;
}
function getnv($loai, $useragent){
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'https://tuongtacdao.net/core/kiem-xu/api/'.$loai.'.php');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_COOKIEFILE, 'TTD.txt');
curl_setopt($mr, CURLOPT_POSTFIELDS, 'kunloc=GET');
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); 
curl_close($mr);
$json = json_decode($mr2, true);
return $json;
}
function nhan($loai, $id, $useragent){
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'https://tuongtacdao.net/core/kiem-xu/api/'.$loai.'.php');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_COOKIEFILE, 'TTD.txt');
curl_setopt($mr, CURLOPT_POSTFIELDS, 'idpost='.$id);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); 
curl_close($mr);
$json = json_decode($mr2, true);
return $json;
}
function nhansub($loai, $id, $useragent){
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'https://tuongtacdao.net/core/kiem-xu/api/'.$loai.'.php');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_COOKIEFILE, 'TTD.txt');
curl_setopt($mr, CURLOPT_POSTFIELDS, 'idfb='.$id);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); 
curl_close($mr);
$json = json_decode($mr2, true);
return $json;
}
function nhancmt($id, $msg, $useragent){
$mr = curl_init();
curl_setopt($mr, CURLOPT_URL, 'https://tuongtacdao.net/core/kiem-xu/api/comment.php');
curl_setopt($mr, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($mr, CURLOPT_COOKIEFILE, 'TTD.txt');
curl_setopt($mr, CURLOPT_POSTFIELDS, 'idpost='.$id.'&noi_dung='.$msg);
curl_setopt($mr, CURLOPT_USERAGENT, $useragent);
$mr2 = curl_exec($mr); 
curl_close($mr);
$json = json_decode($mr2, true);
return $json;
}
function laytoken($cookie){
$ch=curl_init();
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
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
return $access_token; }
 else { return "2"; }
}
function follow($access_token, $idtest, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idtest.'/subscribers');
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
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function like($access_token, $id, $cookie) {
    $ch = curl_init();
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
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);

}
function cmt($access_token, $idcmt, $cookie, $msg) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idcmt.'/comments');
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
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function camxuc($idcx, $type, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$idcx);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
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
    $cx = curl_exec($ch);
    $haha = explode('<a href="', $cx);
    if ($type == 'LOVE') {
        $haha2 = explode('" style="display:block"', $haha[2])[0];
    } else if ($type == 'WOW') {
        $haha2 = explode('" style="display:block"', $haha[5])[0];
    } else if ($type == 'HAHA') {
        $haha2 = explode('" style="display:block"', $haha[4])[0];
    } else if ($type == 'SAD') {
        $haha2 = explode('" style="display:block"', $haha[6])[0];
    } else {
        $haha2 = explode('" style="display:block"', $haha[7])[0];
    }
    $link2 = html_entity_decode($haha2);
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
    curl_close($ch);
}
function hoanthanh($dem, $type, $id, $xujob, $xu) {
date_default_timezone_set("Asia/Ho_Chi_Minh");
$today = date('H:i:s');
$maul=rand(31,37);
$maui="\033[1;".$maul."m";
    $kl = " \033[1;35m😘\033[1;36m[\033[1;36m$dem\033[1;36m]\033[1;33m🌟\033[1;31m[\033[1;35m$today\033[1;31m]\033[1;35m🌸\033[1;31m[\033[1;32m$maui$type\033[1;31m]\033[1;33m🌟\033[1;31m[\033[1;32m$id\033[1;31m]\033[1;35m👉\033[1;31m[\033[1;32m$xujob\033[1;31m]\033[1;33m🌟\033[1;31m[\033[1;33m$xu\033[1;31m]\033[1;35m\n";
    for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(2500);}
}

function hoanthanhcmt($dem, $type, $id, $xujob, $xu,$msg) {
date_default_timezone_set("Asia/Ho_Chi_Minh");
$today = date('H:i:s');
$maul=rand(31,37);
$maui="\033[1;".$maul."m";
    $kl =   " \033[1;35m😘\033[1;36m[\033[1;36m$dem\033[1;36m]\033[1;33m🌟\033[1;31m[\033[1;35m$today\033[1;31m]\033[1;35m🌸\033[1;31m[\033[1;32m$maui$type\033[1;31m]\033[1;33m🌟\033[1;31m[\033[1;32m$msg\033[1;31m]\033[1;35m👉\033[1;31m[\033[1;32m$xujob\033[1;31m]\033[1;33m🌟\033[1;31m[\033[1;33m$xu\033[1;31m]\033[1;35m\n";
    for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(2500);}
}

function delay ($delay){
	for($tt = $delay ;$tt> 0;$tt--){
        echo "\r\033[1;93m   TTD \033[1;91m ~>       \033[1;92m LO      \033[1;91m | $tt | ";
        usleep(150000);
        echo "\r\033[1;91m   TTD \033[0;33m   ~>     \033[0;37m LOA     \033[0;31m | $tt | ";
        usleep(150000);
        echo "\r\033[1;92m   TTD \033[0;33m     ~>   \033[0;37m LOAD    \033[0;31m | $tt | ";
        usleep(150000);
        echo "\r\033[1;94m   TTD \033[0;33m       ~> \033[0;37m LOADI   \033[0;31m | $tt | ";
        usleep(150000);
        echo "\r\033[1;95m   TTD \033[0;33m        ~>\033[0;37m LOADIN  \033[0;31m | $tt | ";
        usleep(150000);
        echo "\r\033[1;95m   TTD \033[0;33m        ~>\033[0;37m LOADING \033[0;31m | $tt | ";
        usleep(150000);
        echo "\r\033[1;95m   TTD \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";
        usleep(150000);}
        echo "\r\e[1;95m    ⚡TUONGTACDAO.NET⚡                       \r";
}
    function delaybl($delaybl) {
    for ($time = $delaybl; $time > -0; $time--) {
    	echo "\r"; 
echo "\r\033[1;97m Đang hoạt động chống block sẽ chạy lại sau\033[1;93m $time\033[1;32m giây";
sleep(1);
echo "\r"; 
}}
function chay($t) {
	$trang="\033[1;97m";
	for ($x = 0; $x <= $t; $x++) {
		echo $trang."= ";usleep(5000);
		}echo"\n";}

?>