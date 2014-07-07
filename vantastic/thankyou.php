<?php

echo ('thank you for your query. We will contact you shortly...');


$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$query = $_POST["query"];


$to = 'vintagevantastic@gmail.com';


$mail = "From : ".$name. "\r\n" ."email : ".$email. "\r\n" ."phone : ".$phone. "\r\n \r\n" .$query;

mail ( $to , 'enquiry' , $mail); 

