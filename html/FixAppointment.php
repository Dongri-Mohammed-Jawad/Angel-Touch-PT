<?php
if(isset($_POST['AppointmentSubmit']))
{
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Subject = $_POST['Subject'];
	$Phone = $_POST['Phone'];
	$AvailableDate = $_POST['AvailableDate'];
	
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

//	$FileName = $_FILES['File']['name'];
//	$TmpName = $_FILES['File']['tmp_name'];
//	$Date = Date('dmyhis');
	
//	$Store = "Uploaded/$Date$FileName";
	
//	$Upload = move_uploaded_file($TmpName,$Store);
	
//	if($Upload)
//	{
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
	    
Last Name : $LastName 

First Name : $FirstName

Middle Initial : $MiddleInitial

Address : $Address

City : $City

State : $State

Zip Code : $ZipCode

Home Phone : $HomePhone

Date Of Birth : $DOB

Cell Phone : $CellPhone

Sex : $Sex

Marital Status : $MaritalStatus

Ethnicity : $Ethnicity

Preferred Language : $PreferredLanguage

Email Address : $EmailAddress

Emergency Contact Number : $EmergencyContactNumber

Relationship : $Relationship

Emergency Phone : $EmergencyPhone


Insurance Details : 
		
Primary Insurance Name : $PrimaryInsuranceName

Primary Insurance Id : $PrimaryInsuranceId

Secondary Insurance Name : $SecondaryInsuranceName

Secondary Insurance Id : $SecondaryInsuranceId
	
	";
	$write = fwrite($new_file,$text_in_file);
	$close_file = fclose($new_file);
	if($write && $close_file)
	{
			

			$To = "angeltouchphysicaltherapy@gmail.com";
			$Date = Date('d/m/y');
			$MailSubject = "Appointment Request ($Name $Date)";
	
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
			$headers .= "From: info@crammaze.com" . "\r\n" .
					"CC: info@crammaze.com"."\r\n". "Reply-To: $Email";
	
			$Message = "
					<html>
					<body>
					
					<table>
						<tr>
							<th>Name </th>
							<td>$Name</td>
						</tr>
						<tr>
							<th>Email </th>
							<td>$Email</td>
						</tr>
						<tr>
							<th>Subject </th>
							<td>$Subject</td>
						</tr>
						<tr>
							<th>Phone </th>
							<td>$Phone</td>
						</tr>
						<tr>
							<th>Date </th>
							<td>$AvailableDate</td>
						</tr>
						<tr>
							<td><a href='http://angeltouchpt.com/Uploaded/$FileName.doc'>Click to download document.</a></td>
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
//	}// End of the IF statement of uploaded.
	
}// This is the end of the Main IF Statement.
?>