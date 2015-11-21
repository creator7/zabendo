<?php
$to = "itaddiction334@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$senderEmail = $_POST['emailAddress'];
$headers = "From: $senderEmail" . "\r\n" .
"CC: $to";

mail($to,$subject,$txt,$headers);

header("Location: login.php");
?>