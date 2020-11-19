<?php 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $emailFrom = $_POST['email']; // this is the sender's Email address
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "S3876018@student.rmit.edu.au";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");

    ?> 