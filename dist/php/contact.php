<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $mailto="hmanthilaka25@gmail.com";
    $headers="From:".$visitor_email;
    $txt="You have received mail from ".$name.".\n\n".$message;
    $subject="Contact Form";

    mail($mailto,$subject,$txt,$headers);

    

    header("Location: index.html");
}
?>