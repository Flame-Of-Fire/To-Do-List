<?php
$to = "padodarashyam@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: padodarashyam@gmail" . "\r\n";

mail($to,$subject,$txt,$headers);
?>