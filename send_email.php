<?php 

$to = "tanveer.attari786@gmail.com";
$from = "no-reply@passquik.co.uk.com";
$subject = "Contact Email";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message_text = $_POST['message_text'];

$message = "Name: " . $name . "\n\n";
$message .= "Email: " . $email . "\n\n";
$message .= "Phone: " . $phone . "\n\n";
$message .= "Message: " . $message_text . "\n\n";

$headers  = "From: PassQuik <".$from.">\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "X-Priority: 1\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";

if(mail($to,$subject,$message,$headers)) {

    $finalResult = array('msg' => 'success', 'response'=>"Email successfully sent.");
    echo json_encode($finalResult);
} else {

    $finalResult = array('msg' => 'error', 'response'=>"Failed. Please try again.");
    echo json_encode($finalResult);
}

?>
