                    <form method="post" action="FixAppointment.php" enctype="multipart/form-data" class="default-form">
                        <div class="row clearfix">
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <input type="text" name="Name" value="" placeholder="Your Name" required="">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <input type="email" name="Email" value="" placeholder="Your Email" required="">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <select name="Subject">
                                    <option>-Subject to Discuss-</option>
                                    <option>Personal Problems</option>
                                    <option>Child Problems</option>
                                    <option>Relationship Problems</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="Phone" value="" placeholder="Your Phone Number" required="">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="AvailableDate" id="datepicker" value="" placeholder="Available Date" required="">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="file" name="File" required="">
                            </div>
                            <div class="form-group padd-top-10 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-normal pull-right" name="AppointmentSubmit">Send Request</button>
                            </div>
                        </div>
                    </form>
