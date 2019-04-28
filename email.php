<?php     
$to_email = 'abdouinnouva.com';
$name=$_POST["name"];
$mail =$_POST["mail"] ;
$message = $_post["message"];
$headers = 'From: noreply @ company . com';
mail($to_email,$name,$mail,$message,$headers);
?>