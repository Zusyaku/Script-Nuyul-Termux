<?php

function save($data,$data_post){
    if(!file_get_contents($data)){
      file_put_contents($data,"[]");}
    $json=json_decode(file_get_contents($data),1);
    $arr=array_merge($json,$data_post);
    file_put_contents($data,json_encode($arr,JSON_PRETTY_PRINT));
}

if(!file_exists("data.json")){
//INPUT
$nama=readline("SILAHKAN MASUKAN NAMA    : ");
$email=readline("SILAHKAN MASUKAN EMAIL   : ");
$pass=readline("SILAHKAN MASUKAN PASSWORD: ");

$data=["NAMA"=>$nama,"EMAIL"=>$email,"PASSWORD"=>$pass,];
save("data.json",$data);
}


$nama=json_decode(file_get_contents("data.json"),true)["NAMA"];
$email=json_decode(file_get_contents("data.json"),true)["EMAIL"];
$pass=json_decode(file_get_contents("data.json"),true)["PASSWORD"];


echo "\n NAMA    : $nama \n";
echo " Email   : $email \n";
echo " PASSWORD: $pass \n";
