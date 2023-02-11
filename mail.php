<?php
$to="Receiver@gmail.com";
$from="Sender@gmail.com";
$subject="text mail via php";
$message="assalamo alaikum";
$header="from:$from";
// $mail = mail($to,$subject,$message,$header);
if(mail($to,$subject,$message,$header)){
    echo "<script>alert(email sent)</script>";
}else{
    echo "<script>alert(error)</script>";
}
?>