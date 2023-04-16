<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="../assets/css/stylee.css" rel="stylesheet" type="text/css">
</head>
<?php

$to_email = "mosakowskim20@students.ecu.edu";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = "New Message from Contact Form";
$body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";


$headers = "From: $email\r\nReply-To: $email\r\n";
if (mail($to_email, $subject, $body, $headers)) {

  echo "Thank you for your message! We will get back to you soon.";
} else {

  echo "Oops! Something went wrong. Please try again later.";
}
?>

<body>
	<ul>
 <li><a href="../index.html">Home</a></li>
		<li><a href="../Research Updates/researchupdates.html">Research Updates</a></li>
		<li><a href="../Resume/resume.html">Resume</a></li>
		<li><a href="../Goals/goals.html">Goals</a></li>
		   </ul>
</body>
</html>