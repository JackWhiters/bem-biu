<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;



	include 'admin/conn.php';
$setting = mysqli_query($con,"SELECT * FROM settings where id='1'");
	$setting_f = mysqli_fetch_array($setting);
	
if (isset($_POST['submit'])) {
//$to = 'office@website.com';
$to = $setting_f['email'];
$subject 	= "PESAN BARU";
$name 		= $_POST["name"];
$email 		= $_POST["email"];
$phone		= $_POST["phone"];
$message2	= $_POST["message"];

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

 $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'pwdformatif@gmail.com';                     //SMTP username
        $mail->Password   = 'pwdformatif123';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;

		//Recipients
        $mail->setFrom($email, $name); //Add a recipient
        $mail->addAddress('pwdformatif@gmail.com');               //Name is optional
    
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = ("$email($subject)") ;
        $mail->Body    = '
		<table>
<tr>
<td>Name</td><td>: '.$name.'</td>
</tr>
<tr>
<td>Email Id</td><td>: '.$email.'</td>
</tr>
<tr>
<td>Phone</td><td>: '.$phone.'</td>
</tr>
<tr>
<td>Message</td><td>: '.$message2.'</td>
</tr>
</table>	';
      if($mail->send()){
	
	echo  header("Location: thanks.php");
   
		} else{
    		echo 'Gagal Untuk Mengirim Pesan Email.';
}
}

// $from 		= 'contact@globaldigitalsystemcorporation.com';
 
	
// // To send HTML mail, the Content-type header must be set
// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// // Create email headers
// $headers .= 'From: '.$from."\r\n".
//     'Reply-To: '.$from."\r\n" .
//     'X-Mailer: PHP/' . phpversion();
 
// // Compose a simple HTML email message
// $message = '<html><body>';
// $message .= '<h2 style="color:#f40;">'.$subject.'</h2>';
// $message .= '<table>
// <tr>
// <td>Name</td><td>: '.$name.'</td>
// </tr>
// <tr>
// <td>Email Id</td><td>: '.$email.'</td>
// </tr>
// <tr>
// <td>Phone</td><td>: '.$phone.'</td>
// </tr>
// <tr>
// <td>Message</td><td>: '.$message2.'</td>
// </tr>
// 			</table>	
// 				';
// $message .= '</body></html>';
 
// // Sending email
// if(mail($to, $subject, $message, $headers)){
	
// 	echo  header("Location: thanks.php");
   
// } else{
//     echo 'Unable to send email. Please try again.';
// }
?>