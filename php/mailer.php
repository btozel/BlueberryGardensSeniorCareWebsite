<?php 
if(isset($_POST['submit'])){
    $to = "care@blueberryseniorcare.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = "Web Contact";
    
    $content = "Name: " . $name . "\nPhone: " . $phone . "\nMessage:" . $message;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$content,$headers);
    
    header("Location: ../thanks.html");
}
?>