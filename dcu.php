<?php
error_reporting(0);
session_start();
$luc = "\033[0;37m";
$do="\033[1;91m";
$vang="\033[1;93m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;32m";
$luc = "\033[1;92m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$ngay = date("d");
$thang = date("m");
$nam = date("Y");
$daucau = "\n\033[1;31m [\033[1;37m✅\033[1;31m] \033[1;37m";
$daucau1 = "\n\033[1;31m [\033[1;37m✅\033[1;31m]\033[1;37m => \033[1;32m";
$dodai = strlen($keyfree);
if($dodai == 21){
	$khoangtrang = " ";
	}
if($dodai == 20){
	$khoangtrang = "  ";
	}
if($dodai == 19){
	$khoangtrang = "   ";
	}
if($dodai == 18){
	$khoangtrang = "    ";
	}
if($dodai == 17){
	$khoangtrang = "     ";
	}
if($dodai == 16){
	$khoangtrang = "      ";
	}
if($dodai == 15){
	$khoangtrang = "       ";
	}
if($dodai == 14){
	$khoangtrang = "        ";
	}
if($dodai == 13){
	$khoangtrang = "         ";
	}
if($dodai == 12){
	$khoangtrang = "          ";
	}
if($dodai == 0){
	$khoangtrang = "                      ";
	}
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$thanh_xau= $do."[".$luc."●".$do."] ".$trang."=> ";
$thanh_dep= $do."[".$luc."●".$do."] ".$trang."=> ";
$An_Orin= $do."[".$luc."●".$do."] ".$trang."=> ";
$thanh_xau= $trang."".$luc."[".$luc."●".$luc."] ".$trang."➩ ";
$thanh_dep= $trang."".$luc."[".$luc."✓".$luc."] ";
$thanh_dac_biet= $trang."➩ ";

@system('clear');
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;92mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;92mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;92mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;92mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;92mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;92mThứ \033[1;36m7"; break; default: $weekday = "\033[1;92mCN"; break; }
	if(!$sock = @fsockopen('www.google.com', 80))
{
    echo 'Vui lòng bật kết nối mạng';
    exit();
}
	back:
system('clear');
echo $banner;
$weekday = date("l");
$ngay = date("d");
$thang = date("m");
$nam = date("Y");
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;92mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;92mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;92mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;92mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;92mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;92mThứ \033[1;36m7"; break; default: $weekday = "\033[1;92mCN"; break; }
$cuongdz = $luc."[".$luc."●".$luc."] ".$trang."=> ";
$cuongvip = $luc."[".$luc."●".$luc."]";
$n_truoc = date("d");
$ngay = date("d"); $thang = date("m"); $nam = date("Y"); $a=date('d');  $b=date("m"); $thoigian=date('d/m'); $day = []; $day= date('d-m-y'); $today = date("d-m-y"); $d = date("d-m");$ip = file_get_contents('http://kiemtraip.com/raw.php');
$a=date('d'); 
        $b=date("m");
        $thoigian=date('d/m');
$day = [];
$day= date('d-m-y');
$today = date("d-m-y");
$d = date("d-m");
$sr = "\033[1;92m➻❥\033[1;92m ";
@system("clear");
echo"\033[1;33m     
│        ████████╗██████╗  █████╗ ███╗   ██╗██████╗  ██████╗  █████╗ ███╗   ██╗       │
│        ╚══██╔══╝██╔══██╗██╔══██╗████╗  ██║██╔══██╗██╔═══██╗██╔══██╗████╗  ██║       │
│           ██║   ██████╔╝███████║██╔██╗ ██║██║  ██║██║   ██║███████║██╔██╗ ██║       │
│           ██║   ██╔══██╗██╔══██║██║╚██╗██║██║  ██║██║   ██║██╔══██║██║╚██╗██║       │
│           ██║   ██║  ██║██║  ██║██║ ╚████║██████╔╝╚██████╔╝██║  ██║██║ ╚████║       │
│           ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═══╝╚═════╝  ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═══╝      \n";

echo"\033[1;33m ══════════════════════════════════════════════\n";
echo"\033[1;36m                    TOOL Machine-Liker VIP \n";
echo"\033[1;33m ══════════════════════════════════════════════\n";
$string = strlen($banner);
for($i=0; $i<=$string; $i++){
echo $banner[$i];usleep(1500);
}
print "\033[1;32mNhập Cookie Machine-Liker: \033[1;33m";
$cookie_mach = trim(fgets(STDIN));
$ch_true_0 = Cong_Cx($cookie_mach, "hc2004", "hc2004", $usag);if ($ch_true_0["status"] == "fail" && $ch_true_0["error"]["type"] == "unauthorized") {die("\033[1;97m~\033[1;93m[\033[1;91mFALSE\033[1;93m]\033[1;91m Cookie Machine-Liker Không Tồn Tại!\n");}
print "\033[1;32mLink Lấy Useragent: \033[1;37mhttp://whatsmyuseragent.org\n";
print "\033[1;32mNhập My useragent: \033[1;33m";
$usag = trim(fgets(STDIN));
print "\033[1;32mNhập Link bài viết : \033[1;33m";
$Link = trim(fgets(STDIN));
$ch0 = GetLink($Link, $usag);if ($ch0["success"] == "200") {$id_p = $ch0["id"];
    $URL_ID = "post_id=" . $id_p;} else {if ($ch0['error'] == "Link không tồn tại hoặc chưa để chế độ công khai!") {$text_false = "Link Không Tồn Tại Hoặc Không Được Để Chế Độ Công Khai.";} else if ($ch0['error'] == "Vui lòng nhập đúng link facebook") {$text_false = "Vui Lòng Nhập Đúng Link Bài Viết.";} else if ($ch0['error'] == "Thiếu dữ liệu đầu vào!") {$text_false = "Vui Lòng Không Được Bỏ Trống.";} else if ($ch0['error'] == "Vui lòng thử lại!") {$text_false = "Vui Lòng Kiểm Tra Lại Link Bài Viết.";}
    die("\033[1;97m~\033[1;93m[\033[1;91mFALSE\033[1;93m]\033[1;91m " . $text_false . "\n");}
@system('clear');
$string = strlen($banner);
for($i=0; $i<=$string; $i++){
echo $banner[$i];usleep(1500);
}
echo $thuong."\033[1;32mID Bài Viết:$vang $id_p\n";
echo $thanhngang;
$type = 1;
$type = '';
echo $thuong."\033[1;32mTăng Cảm Xúc \033[1;91m[\033[1;93mLike\033[1;91m] \033[1;92m(y/n)\033[1;97m: \033[1;93m";
$c = trim(fgets(STDIN));if ($c == "y" || $c == "Y") {$type = $type . "1";}
echo $thuong."\033[1;32mTăng Cảm Xúc \033[1;91m[\033[1;93mLove\033[1;91m] \033[1;92m(y/n)\033[1;97m: \033[1;93m";
$c = trim(fgets(STDIN));if ($c == "y" || $c == "Y") {if ($type == "") {$type = $type . "2";} else { $type = $type . ",2";}}
echo $thuong."\033[1;32mTăng Cảm Xúc \033[1;91m[\033[1;93mCare\033[1;91m] \033[1;92m(y/n)\033[1;97m: \033[1;93m";
$c = trim(fgets(STDIN));if ($c == "y" || $c == "Y") {if ($type == "") {$type = $type . "16";} else { $type = $type . ",16";}}
echo $thuong."\033[1;32mTăng Cảm Xúc \033[1;91m[\033[1;93mHaha\033[1;91m] \033[1;92m(y/n)\033[1;97m: \033[1;93m";
$c = trim(fgets(STDIN));if ($c == "y" || $c == "Y") {if ($type == "") {$type = $type . "4";} else { $type = $type . ",4";}}
echo $thuong."\033[1;32mTăng Cảm Xúc \033[1;91m[\033[1;93mWow \033[1;91m] \033[1;92m(y/n)\033[1;97m: \033[1;93m";
$c = trim(fgets(STDIN));if ($c == "y" || $c == "Y") {if ($type == "") {$type = $type . "3";} else { $type = $type . ",3";}}
echo $thuong."\033[1;32mTăng Cảm Xúc \033[1;91m[\033[1;93mSad \033[1;91m] \033[1;92m(y/n)\033[1;97m: \033[1;93m";
$c = trim(fgets(STDIN));if ($c == "y" || $c == "Y") {if ($type == "") {$type = $type . "7";} else { $type = $type . ",7";}}
echo $thuong."\033[1;32mTăng Cảm Xúc \033[1;91m[\033[1;93mAngry\033[1;91m]\033[1;92m(y/n)\033[1;97m: \033[1;93m";
$c = trim(fgets(STDIN));if ($c == "y" || $c == "Y") {if ($type == "") {$type = $type . "8";} else { $type = $type . ",8";}}
$pi = $type;
echo $thanhngang;
 while (true) {$send_ = Send_Ra($cookie_mach, $URL_ID, $usag);
    $acs = explode('name="object_id" value=', $send_)[1];
    $token = explode('"', $acs)[1];
    $ch_true = Cong_Cx($cookie_mach, $token, $type, $usag);if ($ch_true["status"] == "ok" && $ch_true["info"]["type"] == "reactions_sent") {$me1 = $ch_true["info"]["message"];
        $message = explode(" reactions", $me1)[0];
        $total_reactions = $ch_true["info"]["total_reactions"];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $t = date('H:i:s');
        echo "\033[1;96m" . $t . "\033[1;97m ● \033[1;95mTăng Cảm Xúc Thành Công\033[1;97m ● \033[1;93m+" . $message . "\033[1;97m ● \033[1;92mTổng ".$vang.$total_reactions."\033[1;92m Cảm Xúc\n";
      
    } else { $ch_true_1 = Check($cookie_mach, $token, $type, $usag);
        $check = explode("|", $ch_true_1)[0];
        $check = explode("<title", $check)[1];if ($ch_true["status"] == "fail" && $ch_true["error"]["type"] == "unauthorized") {echo "\033[1;97m~\033[1;92m Cookie Machine-Liker Die Nhập Cookie Mới\033[1;97m:\033[1;93m ";
            $cookie_mach = trim(fgets(STDIN));} else if ($check == ">Please Wait... ") {echo "\033[1;97m~\033[1;92m Cookie Machine-Liker Die Nhập Cookie Mới\033[1;97m:\033[1;93m ";
            $cookie_mach = trim(fgets(STDIN));
            print "$hctool2 \033[1;32mLink Lấy Useragent :\033[1;37m http://whatsmyuseragent.org\n";
            print "$hctool2 \033[1;32mNhập My useragent  : \033[1;33m";
            $usag = trim(fgets(STDIN));
            }else {
              echo "Vẫn Còn Delay Đợi Tí Nữa\r";
            $h1 = explode('data-countdown="', $send_)[1];
            $sec = explode('"', $h1)[0];
            Delay_Liker($sec);}}}
function GetLink($Link, $usag)
{$ch = curl_init('https://id.traodoisub.com/api.php');
    $data = ('link=') . $Link;
    $head[] = "Host:id.traodoisub.com";
    $head[] = "user-agent:$usag";
    $head[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8";
    curl_setopt($ch, CURLOPT_PORT, "443");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    $cha = curl_exec($ch);
    curl_close($ch);
    $ch0 = json_decode($cha, true);return $ch0;}function Send_Ra($cookie_mach, $URL_ID, $usag)
{$head = array("Host:www.machine-liker.com", "upgrade-insecure-requests:1", "user-agent:$usag", "Cookie:" . $cookie_mach);
    $mr = curl_init();
    curl_setopt_array($mr, array(CURLOPT_URL => "https://www.machine-liker.com/send-reactions/?$URL_ID", CURLOPT_ENCODING => "", CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_TIMEOUT => 30, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $head));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $json = json_decode($mr2, true);return $mr2;}function Cong_Cx($cookie_mach, $token, $type, $usag)
{$ch = curl_init();
    $head[] = "Host:www.machine-liker.com";
    $head[] = "user-agent:$usag";
    $head[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8";
    $head[] = "Cookie: " . $cookie_mach;
    $url = "https://www.machine-liker.com/api/send-reactions/";
    $data = "object_id=$token&reactions=$type&limit=100";
    curl_setopt($ch, CURLOPT_PORT, "443");
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    $mr2 = curl_exec($ch);
    curl_close($ch);
    $ch_true = json_decode($mr2, true);return $ch_true;}
    function Delay_Liker($delay)
    {$icon = 59000;for ($x = $delay; $x > 0; $x--) {
      echo "\r                                                      \r";
       echo "\r\033[1;35m(◔‿◔) \033[1;92mTăng Cảm Xúc Sau\033[1;93m $x\033[1;91m Giây Nữa ";
usleep(133333);
echo $do."Loading";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ● ";
usleep(133333);
echo "$res  \r";
}}
    
    function Check($cookie_mach, $token, $type, $usag){
    $ch = curl_init();
    $head[] = "Host:www.machine-liker.com";
    $head[] = "user-agent:$usag";
    $head[] = "sec-ch-ua-platform:Android";
    $head[] = "upgrade-insecure-requests:1";
    $head[] = "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8";
    $head[] = "referer:https://www.machine-liker.com/dashboard/";
    $head[] = "Cookie: " . $cookie_mach;
    $url = "https://www.machine-liker.com/api/send-reactions/";
    $data = "object_id=$token&reactions=$type&limit=100";
    curl_setopt($ch, CURLOPT_PORT, "443");
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    $mr2 = curl_exec($ch);
    curl_close($ch);return $mr2;}