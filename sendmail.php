<?php


$name=$_REQUEST['name'];

$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];

$message=$_REQUEST['message'];

$email_body='Name : '.$name.'\n';

$email_body .= 'Email : '.$email.'\n';

$email_body .= 'Phone : '.$phone.'\n';

$email_body .= 'Message : '.$message.'\n';

$email_body = nl2br($email_body);

$Name = $name; 
$recipient = "info@genowin.com"; 
$subject = "Contact Us Form Data"; 
$header = "From: ". $Name . " <" . $email . ">\r\n"; 

if(mail($recipient, $subject, $email_body, $header)) 
{ ?>

<script type="text/javascript">window.location.href='thanku.html'</script>

<?php 

}else 
{
		echo "Sorry Not Sent";
}

?>