<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];
    $number = $_POST['number'];
    
    $emailTo = "mongambac@gmail.com";
    $txt = "You recieved a mail from".$name."\n\n".$message;
    $headers = "From: ".$emailFrom;
    mail($emailTo, $txt, $headers);
    header("Location: ../index.php?mailsend");
}
?>