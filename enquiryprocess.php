<?php
 
				
				$to ="rakesh.nuthimadugu@iictechnologies.com";
			 
				$subject = "Enquiry Details";
				
				$name=$_REQUEST["txtname"];		
				$txtemail=$_REQUEST["txtemail"]; 
			//	$wname=$_REQUEST["wname"];						
			//	$company=$_REQUEST["cname"];
			//	$phone=$_REQUEST["f_business"]; 
			//	$phone=$_REQUEST["f_phone"];
			//	$address=$_REQUEST["f_phone"];  				
			//	$feed=$_REQUEST["f_comment"]; 
				
				
				$message ="<table cellspacing=\"0\" width=\"650\" border=0>
				<tr><td  colspan=\"2\">Hi  Admin,</td></tr>
				<tr><td  colspan=\"2\">&nbsp;</td></tr>
				<tr><td width=\"150\">Name</td><td>".$name."</td></tr>
				<tr><td>E-mail</td><td>".$txtemail."</td></tr>	
				<tr><td  colspan=\"2\">&nbsp;</td></tr> 
				<tr><td  colspan=\"2\">Thanks & Regards,</td></tr>
                <tr><td  colspan=\"2\">".$name."</td></tr>
				</table>"; 


				$headers = "Content-type: text/html; charset=iso-8859-1" . "\r\n";
				
				$from = $txtemail;
				$headers .= "From: $from";


				mail($to,$subject,$message,$headers);
				
				print "<script>alert('Thank you for your details. We will get back to you soon.');";
				print "self.location='cntfrm.html'";
				print "</script>";
				exit();					
	
?>