<html>
<body>
<?php



require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
// $mail->Port = 587;
// $mail->SMTPSecure = 'tls';
//$email = $_POST['mailid'];
//$pwd = $_POST['password'];
$sub = $_POST['sub'];
$from=$_POST['from'];
$body=$_POST['body'];

$mail->Username = "abhishekmbhat1144k@gmail.com";
$mail->Password = "smabhiavi";

$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "abhishekmbhat1144k@gmail.com";
$mail->FromName = $from;

$mail->addAddress("abhishekmbhat@gmail.com","User 1");
//$mail->addAddress("ramadival@gmail.com","User 2");

//$mail->addCC("kirankorey133@gmail.com","User 3");
//$mail->addBCC("bonagerivenkatesh@gmail.com","User 4");

$mail->Subject = " $sub";
$mail->Body = "$body";

$mail->Send();


@require "button.html";
    
	
	

?>


</body>
</html>