<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{ 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$reasonForContact=$_POST['reasonForContact']; 
$companyName=$_POST['companyName'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$to='marketing.team@rawcubes.com';   
$Message.="<style type='text/css'>.text {
font-family: Arial, Helvetica, sans-serif;
line-height: 16px;
color: #565556;
text-decoration: none;
}</style>";
$Message.="
<div style='font-size: 12px; font-family: Arial, Helvetica, sans-serif;'>
Hi Team,<br><br> 
Please find below the new lead or prospective customer for your further processing.
<br><br> 
<table width='450' cellpadding='10' cellspacing='0' bgcolor='#ffffff' style='border:#cccccc solid 3px; font-size: 12px; font-family: Arial, Helvetica, sans-serif;' > 
<tr align='left' valign='top' bgcolor='#efefef'>
<td><strong>Name:</strong></td>
<td>".$fname." ".$lname."</td>
 </tr>
 <tr>
 <td><strong>Company Name:</strong></td>
<td>".$companyName."</td>
 </tr> 
 <tr align='left' valign='top' bgcolor='#efefef'>
<td><strong>Phone No:</strong></td>
<td>".$phone."</td>
 </tr>
 <tr align='left' valign='top' bgcolor='#efefef'>
 <td><strong>Reason For Contacting:</strong></td>
 <td>".$reasonForContact."</td>
  </tr>
<tr align='left' valign='top'>
<td><strong>E-mail:</strong></td>
<td>".$email."</td>
 </tr> 
<tr align='left' valign='top' bgcolor='#efefef'>
<td><strong>Query:</strong></td>
<td>".$message."</td>
 </tr> 
</table>
<br><br>
Please coordinate with him on priority basis.
<br><br>
Thanks <br> 
".$fname." ".$lname."
<br> 
</div>
";  
$headers4sender  = "MIME-Version: 1.0\r\n";
$headers4sender .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers4sender .= "From: <".$_POST['email'].">\r\n";
$subject = "Booking a demo request";    
mail($to,$subject,$Message,$headers4sender);

// Mail for visitor 
$reply_subject = "Thanks for submitted Your Request";    
$Reply_Message.="<style type='text/css'>.text {
font-family: Arial, Helvetica, sans-serif;
line-height: 16px;
color: #565556;
text-decoration: none;
}</style>";
$Reply_Message.="
<div style='font-size: 12px; font-family: Arial, Helvetica, sans-serif;'>
Hi ".$fname." ".$lname."<br><br> 
Thank you for using our request service for Enquiry.  This is an automatic notification to let you know we have received your request.    Please do not reply to this email. 
<br><br> <b>If you need immediate Service please call or Tel:+1(800)7298176</b>
<br><br>
You sent us the following information: 
<table width='450' cellpadding='10' cellspacing='0' bgcolor='#ffffff' style='border:#cccccc solid 3px; font-size: 12px; font-family: Arial, Helvetica, sans-serif;' >
<tr align='left' valign='top' bgcolor='#efefef'>
<td><strong>Name:</strong></td>
<td>".$fname." ".$lname."</td>
 </tr>
 <tr>
 <td><strong>Company Name:</strong></td>
<td>".$companyName."</td>
 </tr> 
 <tr align='left' valign='top'  bgcolor='#efefef'>
<td><strong>Phone No:</strong></td>
<td>".$phone."</td>
 </tr>
 <tr align='left' valign='top' bgcolor='#efefef'>
 <td><strong>Reason For Contacting:</strong></td>
 <td>".$reasonForContact."</td>
  </tr>
<tr align='left' valign='top'>
<td><strong>E-mail:</strong></td>
<td>".$email."</td>
 </tr>
<tr align='left' valign='top' bgcolor='#efefef'>
<td><strong>Query:</strong></td>
<td>".$message."</td>
 </tr> 
</table>
<br><br>
We will contact you soon to discuss the opportunity.<br>   <br> 
Thanks & Regards <br> 
<b>Rawcubes</b> <br> 
One Pierce Place Suite 455E, Itasca, IL 60143 <br> 
info@rawcubes.com +1(8001 (800)7298176 <br> 
<br> 
</div>
";  
$headers4sender  = "MIME-Version: 1.0\r\n";
$headers4sender .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers4sender .= "From: <marketing.team@rawcubes.com>\r\n";
mail($email,$reply_subject,$Reply_Message,$headers4sender);

$_SESSION['Message']="Thanks for Contact Us.<br>Your Request Successfully Submitted.";
header("location:thanks.html");
exit();
}
?> 