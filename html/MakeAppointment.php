            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <img class="img-responsive" src="assets/img/blog/3.jpg" alt="Angel Touch Physical Therapy Image" title="Angel Touch Physical Therapy Image" />
                </div>
                <div class="col-xs-12 col-sm-6">

                    <form method="post" action="FixAppointment.php" enctype="multipart/form-data" class="default-form">
                        <div class="row clearfix">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <input type="text" id="name" class="appointment" name="Name" value="" placeholder="Your Name" required="" >
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <input type="email" id="email" class="appointment" name="Email" value="" placeholder="Your Email" required="">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <select name="Subject">
                                    <option>-Subject to Discuss-</option>
                                    <option>Acute & Chronic Pain</option>
                                    <option>Neck & Back Pain</option>
                                    <option>Frozen Shoulder (Adhesive Capsulitis)</option>
                                    <option>Rotator Cuff Tendonitis</option>
                                    <option>Impingement Syndrome</option>
                                    <option>Superior Labral Tears</option>
                                    <option>AC Joint Injuries</option>
                                    <option>Tennis or Golfers Elbow</option>
                                    <option>Post UCL Re-construction</option>
                                    <option>Post Total Elbow Arthroplasty</option>
                                    <option>Pronator Teres Syndrome</option>
                                    <option>Post Total Hip and Knee Replacements</option>
                                    <option>Patellofemoral Pain Syndrome</option>
                                    <option>Post Patellar Tendor & Quad Tendon Repair</option>
                                    <option>Patellar Tendonitis</option>
                                    <option>Post ACL Re-construction</option>
                                    <option>Hip Bursitis</option>
                                    <option>Herniated/Bulging Disk</option>
                                    <option>Sciatica</option>
                                    <option>Planter Fasciitis</option>
                                    <option>Achilles Tendonitis</option>
                                    <option>Peroneal Tendonitis</option>
                                    <option>Ankle Sprain</option>
                                    <option>Carpal Tunnel Syndrome</option>
                                    <option>Post-Surgical Rehab</option>
                                    <option>Weight Management</option>
                                    <option>Sports injury</option>
                                    <option>Spinal & Joint Dysfunction</option>
                                    <option>Balance Training</option>
                                    <option>Headaches & Dizziness</option>
                                    <option>General De-conditioning</option>
                                    <option>Other not mentioned</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="text" class="appointment" name="Phone" value="" placeholder="Your Phone Number" required="">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input onclick="validat()" type="text"  name="AvailableDate" id="datepicker" value="" placeholder="Available Date" required="">
                            </div>
<!--                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="file" name="File" required="">
                            </div>-->
                            <div class="form-group padd-top-10 col-md-12 col-sm-12 col-xs-12">
						  <button id="appointmentbutton" type="button" class="btn btn-info btn-lg appointment-submit" data-toggle="modal" data-target="#myModal" disabled>Make an Appointment</button>

                            </div>
                        </div>
				    <script>
						function validate()
						{
							var date = document.getElementById("datepicker");
							if(date == '')
							{
								document.getElementById("appointmentbutton").disabled = true;
							}
							else
							{
								document.getElementById("appointmentbutton").disabled = false;
							}
						}
				    </script>
				  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">Angel Touch Physical Therapy.<br>Patient's Registration Form</h2>
        </div>
        <div class="modal-body" style="font-size:17px;">
					<u><b>Patient Information :</b></u>
					<table>
						<tr>
							<td>Last Name :</td> <td><input type="text" name="last_name"  /></td>
						</tr>
						<tr>
							<td>First Name :</td> <td><input type="text" name="first_name"  /></td>
						</tr>
						<tr>
							<td>Middle Initial :</td> <td><input type="text" name="middle_initial"  /></td>
						</tr>
						<tr>
							<td>Address :</td> <td><textarea name="address"  ></textarea></td>
						</tr>
						<tr>
							<td>City :</td> <td><input type="text" name="city"  /></td>
						</tr>
						<tr>
							<td>State :</td> <td><input type="text" name="state"  /></td>
						</tr>
						<tr>
							<td>Zip Code :</td> <td><input type="text" name="zip_code"  /></td>
						</tr>
						<tr>
							<td>Home Phone :</td> <td><input type="number" name="home_phone"  /></td>
						</tr>
						<tr>
							<td>Date of Birth :</td> <td><input type="date" name="dob"  /></td>
						</tr>
						<tr>
							<td>Cell Phone :</td> <td><input type="number" name="cell_phone"  /></td>
						</tr>
						<tr>
							<td>Sex :</td> <td><select name="sex"><option>Male</option><option>Female</option></select></td>
						</tr>
						<tr>
							<td>Marital Status :</td> <td><select name="marital_status"><option>Married</option><option>Not Married</option></select></td>
						</tr>
						<tr>
							<td>Ethnicity :</td> <td><input type="text" name="ethnicity"  /></td>
						</tr>
						<tr>
							<td>Preferred Language :</td> <td><input type="text" name="preferred_language"  /></td>
						</tr>
						<tr>
							<td>Email Address :</td> <td><input type="text" name="email_address"  /></td>
						</tr>
						<tr>
							<td>Emergency Contact Number :</td> <td><input type="text" name="emergency_contact_number"  /></td>
						</tr>
						<tr>
							<td>Relationship :</td> <td><input type="text" name="relationship"  /></td>
						</tr>
						<tr>
							<td>Emergency Phone # :</td> <td><input type="text" name="emergency_phone"  /></td>
						</tr>
					</table>
					<u><b>Insurance Details : </b></u>
					<table>
						<tr>
							<td>Primary Insurance Name :</td> <td><input type="text" name="primary_insurance_name"  /></td>
						</tr>
						<tr>
							<td>Primary Insurance Id # :</td> <td><input type="number" name="primary_insurance_id"  /></td>
						</tr>
						<tr>
							<td>Secondary insurance name :</td> <td><input type="text" name="secondary_insurance_name"  /></td>
						</tr>
						<tr>
							<td>Secondary Insurance Id # :</td> <td><input type="number" name="secondary_insurance_id"  /></td>
						</tr>
					</table>
                                <button type="submit" class="btn btn-normal pull-right btn-lg" name="AppointmentSubmit">Send Request</button>
				</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Skip For Now</button>
        </div>
      </div>
      
    </div>
  </div>

                </div>
            </div>
