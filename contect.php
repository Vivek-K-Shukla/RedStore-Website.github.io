<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$massage=$_POST['massages'];

$email_form='vivekallahabadia541998mzp@gmail.com';

$email_subject="New Form submission";

$email_body="user name:$name.\n".
"User Email:$visitor_email.\n".
"User massage:$massage.\n";

$to=beinghuman541998mzp@gmail.com';

$headers="from: $email_form\r\n";

$headers.="Reply-To:$visitor_email\r\n";

mail($to,$email_subjrct,$email_body,$headers);
header("Location: contect.html");

?>