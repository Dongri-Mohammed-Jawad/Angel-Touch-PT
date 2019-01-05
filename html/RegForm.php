<?php
if(isset($_POST['appoint_submit']))
{
	$LastName = $_POST['last_name'];
	$FirstName = $_POST['first_name'];
	$MiddleInitial = $_POST['middle_initial'];
	$Address = $_POST['address'];
	$City = $_POST['city'];
	$State = $_POST['state'];
	$ZipCode = $_POST['zip_code'];
	$HomePhone = $_POST['home_phone'];
	$DOB = $_POST['dob'];
	$CellPhone = $_POST['cell_phone'];
	$Sex = $_POST['sex'];
	$MaritalStatus = $_POST['marital_status'];
	$Ethnicity = $_POST['ethnicity'];
	$PreferredLanguage = $_POST['preferred_language'];
	$EmailAddress = $_POST['email_address'];
	$EmergencyContactNumber = $_POST['emergency_contact_number'];
	$Relationship = $_POST['relationship'];
	$EmergencyPhone = $_POST['emergency_phone'];
	
	$PrimaryInsuranceName = $_POST['primary_insurance_name'];
	$PrimaryInsuranceId = $_POST['primary_insurance_id'];
	$SecondaryInsuranceName = $_POST['secondary_insurance_name'];
	$SecondaryInsuranceId = $_POST['secondary_insurance_id'];
	
	echo $FileName = Date('dmyhis');
	$new_file = fopen("Uploaded/$FileName.doc","w");
	if($new_file)
	{
		echo "<h1>File Created</h1>";
	}
	else
	{
		echo "Error";
	}
	$text_in_file = "
			Angel Touch Physical Therapy
	341 N. CENTRAL AVE     VALLEY STREAM, NY 11580
   	    TEL: (516) 568-7619   FAX: (516) 568-7620
	    
Patient's Information :
	    
Last Name : $LastName  First Name : $FirstName Middle Initial :
 $MiddleInitial
 
Address : $Address

City : $City State : $State Zip Code :
 $ZipCode
 
Home Phone : $HomePhone Date Of Birth :
 $DOB
 
Cell Phone : $CellPhone Sex : $Sex Marital Status :
 $MaritalStatus
 
Ethnicity : $Ethnicity Preferred Language : $PreferredLanguage

Email Address : $EmailAddress

Emergency Contact Number : $EmergencyContactNumber Relationship : $Relationship

Emergency Phone : $EmergencyPhone

		Insurance Details
		
Primary Insurance Name : $PrimaryInsuranceName
Primary Insurance Id : $PrimaryInsuranceId
Secondary Insurance Name : $SecondaryInsuranceName
Secondary Insurance Id : $SecondaryInsuranceId
	
	";
	$write = fwrite($new_file,$text_in_file);
	$close_file = fclose($new_file);
	if($write && $close_file)
	{
					$To = "info@crammaze.com";
			$MailSubject = "Angel Touch Physical Therapy Appointment Request from $Name";
	
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
			$headers .= "From: info@crammaze.com" . "\r\n" .
					"CC: crammaze@angeltouchpt.com"."\r\n". "Reply-To: $Email";
	
			$Message = "
					<html>
					<body>
					<img src='http://angeltouchpt.com/assets/img/logo/ATPT logo.jpg' alt='Angel Touch Physical Therapy Logo' title='Angel Touch Physical Therapy Logo' />
					<h2 style='font-family:Arial;'>Angel Touch Physical Therapy <mark style='background:#E3E1E3;'>Appointment</mark> Details :</h2>
					<table style='font-family:Palatino Linotype;border-collapse:no-collapse;font-size:18px;color:#875A84;width:50%;'>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Last Name </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$LastName</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>First Name </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$FirstName</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Middle Initial </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$MiddleInitial</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Address </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Address</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>City </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$City</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>State </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$State</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Zip COde </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$ZipCode</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Home Phone </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$HomePhone</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Date Of Birth</th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$DOB</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Cell Phone </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$CellPhone</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Sex </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Sex</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Marital Status </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$MaritalStatus</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Ethnicity </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Ethnicity</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Preferred Language </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$PreferredLanguage</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Email Address </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$EmailAddress</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Emergency COntact Number</th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$EmergencyContactNumber</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Relationship </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$Relationship</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Emergency Phone  </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$EmergencyPhone</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'> Primary Insurance Name</th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$PrimaryInsuranceName</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Primary Insurance Id </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$PrimaryInsuranceId</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Secondary Insurance name </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$SecondaryInsuranceName</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Secondary Insurance Id </th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'>$SecondaryInsuranceId</td>
						</tr>
						<tr>
							<th style='border:1px solid #988096;font-family:Arial Regular;text-align:left;padding:5px;width:50%;color:#7C2BDF;'>Download PDF</th>
							<td style='border:1px solid #988096;font-family:Arial Regular;padding:5px;color:black;'><a href='http://angeltouchpt.com/Uploaded/$FileName.doc'>Click to Download</a></td>
						</tr>
					</table>
					<p><strong>Thanks & Regards,</strong></p>
					<p><strong><a href='http://crammaze.com/' style='text-decoration:none;color:#7C2BDF;'>Crammaze Inc.,</a></strong></p>
					</body>
				</html>
				";
		$Mail = mail($To, $MailSubject, $Message, $headers);
		if($Mail)
		{
			header("refresh:0.001;url=ThankYou.php");
		}
		else
		{
			header("refresh:0.001;url=SorryForAppointment.php");
		}

	}
}
?>