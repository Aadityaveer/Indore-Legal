<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$Uemail = $_POST['email'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];


$email_from = 'info@IndoreLegal.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $first_name $last_name.\n".
                "User Email: $Uemail.\n".
                "Subject: $Subject.\n".
                "Message: $Message.\n";


$to = 'gamingwithaadi29@gmail.com';
$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $Uemail \r\n";


mail($to,$email_subject,$email_body,$headers)
header("Location: Contact.html")

?>