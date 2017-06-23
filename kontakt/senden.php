<?php
if($_POST['email'] and
   $_POST['betreff'] and 
   $_POST['name'] and 
   $_POST['sender_email'] and 
   $_POST['inhalt']){
	mail($_POST['email'], 
		 $_POST['betreff'], 
		 $_POST['inhalt'], 
		 "From: ".$_POST['name']."<".$_POST['sender_email'].">");
	echo "Vielen Dank für Ihre Anfrage. Ihre Anfrage ist versandt worden!";
}else{
	echo "error";
}