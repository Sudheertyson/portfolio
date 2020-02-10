<?php
// $name = $_POST["name"];
// $email = $_POST["email"];
// $subject = $_POST["subject"];
// $message = $_POST["message"];


// $EmailTo = "hello@sudheerbabu.me";
// $Title = "New Message Received";

// // prepare email body text
// $Fields .= "Name: ";
// $Fields .= $name;
// $Fields .= "\n";

// $Fields.= "Email: ";
// $Fields .= $email;
// $Fields .= "\n";

// $Fields.= "Subject: ";
// $Fields .= $subject;
// $Fields .= "\n";

// $Fields .= "Message: ";
// $Fields .= $message;
// $Fields .= "\n";


// // send email
// $success = mail($EmailTo,  $Title,  $Fields, "From:".$email);

header('Content-Type: application/json');
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$postmessage = $_POST['message'];
$to = "hello@sudheerbabu.me";
$subjectdetail = "Contact Us";

$message = "<b>Name: </b>".$name."<br>";
$message .= "<b>subject: </b>".$message."<br>";
$message .= "<b>Email Address: </b>".$email."<br>";
$message .= "<b>Message: </b>".$postmessage."<br>">;

$header = "From:"+$email+" \r\n";
$header .= "MIME-version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
$retval = mail ($to,$subjectdetail,$message,$header);

if( $retval == true ) {
    echo json_encode(array(
        'success' => true,
        'message' => 'Message sent successfully'
    ));
} else {// data sent in header are in JSON format
    header('Content-Type: application/json');
    // takes the value from variables and Post the data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $postmessage = $_POST['message'];  
    $to = "example@email.com";
    $subject = "Contact Us";
    // Email Template
    $message = "<b>Name : </b>". $name ."<br>";
    $message .= "<b>Contact Number : </b>".$contact."<br>";
    $message .= "<b>Email Address : </b>".$email."<br>";
    $message .= "<b>Message : </b>".$postmessage."<br>";
 
    $header = "From:"+$email+" \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $retval = mail ($to,$subject,$message,$header);
    // message Notification
    if( $retval == true ) {
       echo json_encode(array(
          'success'=> true,
          'message' => 'Message sent successfully'
       ));
    }else {
       echo json_encode(array(
          'error'=> true,
          'message' => 'Error sending message'
       ));
    }
?>