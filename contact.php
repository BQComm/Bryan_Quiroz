<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
   
   
    $mailTo = "info@bryanquiroz.com";
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name.".\n\n".$message.".\n\n".$phone;
   
    mail($mailTo, $txt, $message);
    header("Location: thanks.html");
}
?>
    
