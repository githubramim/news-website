<?php
// Getting data from the form 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Email information
$email_from = 'inam@inam.com';

$email_subject = 'New Form Submission';

$email_body = "User Name : $name . \n" .
              "User Email : $email. \n" .
              "Subject : $subject. \n" .
              "User Message : $message. \n";

$to = 'inamilyas@gmail.com';

$headers = "From : $email_from \r\n";
$headers .= "Reply to : $email \r\n";

//Sending email(from website)  to our email address
mail($to, $email_body, $email_body, $headers); //Send mail function

header("Location: contact.html"); //redirecting user
?>