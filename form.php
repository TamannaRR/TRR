<?php 
   /* $name         = $_POST['name'];
   $visitorEmail = $_POST['email'];
   $subject      = $_POST['subject'];
   $message      = $_POST['message'];

   $emailFrom    = 'rahmantmnn@gmail.com';
   $emailSubject = "New Form Submission";
   $emailBody    = "User Name: $name.\n". 
                   "User Email: $visitorEmail.\n".
                   "Mail Subjet: $subject.\n".
                   "User Message: $message.\n";
   $to = 'tamannareme@gmail.com';
   
   $headers = "From: $emailFrom \r\n";
   $headers = "Reply-To: $visitorEmail \r\n";

   mail($to,$emailSubject,$emailBody,$headers);

   header("Location: index.html"); */

   if(isset($_POST['submit'])) {

     $name         = $_POST['name'];
   $mailFrom = $_POST['email'];
   $subject      = $_POST['subject'];
   $message      = $_POST['message'];

   $mailTo = "tamannareme@gmail.com";
   $headers = "From: ".$mailFrom;
   $txt = "You have received an e-mail from ".$name.". \n\n".$message;

   mail($mailTo, $subject, $txt, $headers);
   header("Location: index.html?mailsend");

   }

?>