<?
/*https://claimsatoshi.xyz/?r=12284*/

$url1="https://claimsatoshi.xyz/dashboard";
$url2="https://claimsatoshi.xyz/ptc";
$url3="https://claimsatoshi.xyz/ptc/view/";//409
$url4="https://claimsatoshi.xyz/ptc/verify/";//409
$url5="https://claimsatoshi.xyz/faucet";
$url6="https://claimsatoshi.xyz/faucet/verify";


$r1=Run($url1,$ua);
$user=explode('<vie level="0">',explode("siteUserFullName: '",$r1)[1])[0];//iewilmaestro
if($user){
	$bal=explode('</h2>',explode('<h2 class="card-title text-white">',$r1)[1])[0];//40 tokens
	ket('Username',$user);
	ket('Balance',$bal);
	echo $n;
	}else{
		echo col('Failed Login','rr').$n;
		}
	MENU:
	echo col("1","p").col(" ≽ ","m").col("Ptc ","b").$n;
	echo col("2","p").col(" ≽ ","m").col("Faucet ","b").$n;
	echo col("3","p").col(" ≽ ","m").col("Watch Videos ","b")$n;
	echo col("4","p").col(" ≽ ","m").col("EXIT ","k").$n;
	$pilih=readline(col("Input Number","h").col(" ≽ ","m"));
	
	if($pilih==1){
		c();
		bn();
		ket('Username',$user);
		ket('Balance',$bal);
		echo $n;
		while(true){
			$r2=Run($url2,$ua);
			$id=explode("'",explode("'https://claimsatoshi.xyz/ptc/view/",$r2)[1])[0];//409
			if($id){
				echo col('Visit Ptc','rp1');
				$r3=Run($url3.$id,$ua);
				$csrf=explode('">',explode('<input type="hidden" name="csrf_token_name" value="',$r3)[1])[0];
				$token=explode('">',explode('<input type="hidden" name="token" value="',$r3)[1])[0];
				$tmr=explode(';',explode('var timer = ',$r3)[1])[0];//10
				tmr($tmr);
				
				$solv;
				$media;
				
				$dtx="captcha=solvemedia&g-recaptcha-response=&adcopy_response=knuckledown&adcopy_challenge=2%40u8eDmRcqUPQIP85NDpMSgfHOqk50.daS%40ZbYxheM3xFkENU8bgrS69H9APTC4lJjoVf-lou5xhlfAxiPGaqKFlPBMuQ-Z3RT-y2JM3y777ay6X0uYak0sps1uZTmGG1MRxv2ZXVDYzFP9gTxhVTW3Dywg10iIInZgbIvyuGiYYyb3Yaa011wiYBjLiifi4JOZ1SoeT.6-JAqK5BIIsuTIdQ.xLY2rpGumwD53vSKB8E1h2Iz8VkiMf31zdW3HuVr3vQjYmbLLOzflx6cmI3vK218n-QzbpaLDR-yYhgE5xS8KL-JcH8BlHXRkhnpqCVJbJkhFXIK0uoA&csrf_token_name=".$csrf."&token=".$token;
				$r4=Run($url4.$id,$ua,$dtx);
				$stat=explode("', 'success')",explode("Swal.fire('",$r4)[1])[0];//Good job!', '35 tokens has been added to your balance
				if($stat){
					echo $r;
					echo col('success bypass','rg');
					sleep(1);
					echo $r;
					
					$ss=str_replace(",",'',$stat);
					echo col($ss,'h').$n;
					
					$r5=Run($url1,$ua);
					$bal=explode('</h2>',explode('<h2 class="card-title text-white">',$r1)[1])[0];//40 tokens
					echo col('New Balance','b').col(" ≽ ","m").col($bal,'k').$n;
					cetak('#','line');
					
					}else{
						echo $r;
						echo col('failed bypass','rr');
						sleep(1);
						echo $r;
						}
				}else{
					echo col('Ptc has finished','m').$n2;
					goto MENU;
					}
			}
		}elseif($pilih==2){
			c();
			bn();
			ket('Username',$user);
			ket('Balance',$bal);
			echo $n;
			$r6=Run($url5,$ua);
			$sisa=explode('</h2>',explode('<h2 class="card-title text-white">',$r6)[4])[0];//100/100
			if($sisa=='0/100' or $sisa ==null){
				echo col('Faucet has finished','m').$n2;
				goto MENU;
				}else{
					while(true){
					$r7=Run($url5,$ua);
					$bot1=explode('rel=\"',$r7)[1])[0];//8181\">
					$data="antibotlinks=+8181+8038+3834&csrf_token_name=a806784b5251c0b186e86fcf2c7a24d5&token=pK3WLwJqmMnXShkIz5eafrHOdVAvQg&captcha=solvemedia&g-recaptcha-response=&adcopy_response=freehat&adcopy_challenge=2%40u8eDmRcqUPQIP85NDpMSgfHOqk50.daS%40ZbbJ.OM3PCAENU8bgrS8KH9APTC4lJjo1f94DpvuUpbxRxLyP6jEoEYu79RZt-nI4k.fIgUkhb4TZlq8pKHqNSRyob6AK.ZtUm5iSCqQ07mtsBJRaEdOXE1N7OIakVcPBNbtFMnmpuNS-l8iznZzQf5cTb3I2a3FQ2jcNQSSz.PJBSyTGoSGbTPCZXMkIW-z2CVtwG1EDntYOzFZutgDAQzFLDGXwV0Mj-OEp-gxhOJ66tF251BsaQanWvEwY-W3KfxUHsi3Wf0ZT9h99JlwtOxGY2yj-yuSJkhFXIK0uoA";
					$r8=Run($url6,$ua,$data);
					
					$r9=Run($url7,$ua);
						}
					}
			}elseif($pilih==3){
				}elseif($pilih==4){
					die();
					}else{
						col('Bad Number Selected','rr').$n2;
						goto MENU;
						}
