<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject='GET IN TOUCH';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";        
$contactMessage ="<div style='color:#000'>
<p><strong>Stitchify </strong></p>
<p><strong>Dear $name </strong></p>
<p><strong>Thank you for Enquiry with Stitchify We Will revert back to you soon. Thank you For Visit Us.</strong></p>
<p>If you have any questions or need help with something regarding our services, please contact our customer support at hello@stitchify.in.</p>  
<p><strong>Best Regards,<br> Stitchify</strong></p>
</div>";
$response = (mail($email,$subject,$contactMessage,$headers) ) ? 
"success" : "failure" ;
$email1="hello@stitchify.in,";   
$subject='Partner Registration';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";        
$contactMessage ="<div style='color:#000'>
<p><strong>Stitchify</strong></p>
<p><strong>Dear Admin</strong></p>
<p><strong>Name:- </strong> $name</p>
<p><strong>Email Id:- </strong> $email</p>
<p><strong>Contact Number:- </strong> $phone</p>
<p><strong>Best Regards,<br> Stitchify</strong></p>
</div>";
$response = (mail($email1,$subject,$contactMessage,$headers) ) ? 
"success" : "failure" ;
$_SESSION['conmsg1']="<div class='alert alert-success alert-dismissible fade show' role='alert'>
We got your registration enquiry, we will get back to you shortly.
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
header("location:thankyou.html");
?>