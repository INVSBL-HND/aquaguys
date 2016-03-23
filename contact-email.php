<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email address is required ";
} else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	$errorMSG .= "Please enter a valid email address ";
} else {
    $email = $_POST["email"];
}

// PHONE
if (empty($_POST["phone"])) {
    $errorMSG = "Phone number is required ";
} else {
    $name = $_POST["phone"];
}

// HUMAN
if (empty($_POST["human"])) {
    $errorMSG .= "Answer is required ";
} else if (intval($_POST["human"]) !== 5) {
    $errorMSG .= "Answer is incorrect ";
} else {
	$human = $_POST["human"];
}

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$human = $_POST["human"];
 
$EmailTo = "creative@ryanmaurodesign.com";
$Subject = "New message from ";
$Subject .= $name;
 
// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>