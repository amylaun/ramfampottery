<?php 
$errors = '';
$myemail = 'info@ramfampottery.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['comment']))

$name = $_POST['name']; 
$name = $_POST['name']; 
$email = $_POST['email']; 
$comment = $_POST['comment']; 


if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Request from RamFamPottery.com";
	$email_body = "Request from: $name\n\n".
	"$comment" ; 
	
	$headers = "From: $email\n"; 
	$headers .= "Reply-To: $email\n"; 
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: thanks.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>