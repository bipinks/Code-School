<!--<div class="contact_top">-->
<div style="
background: #f3f3f3;">
    <div class="container">
        <div class="col-md-8 contact_left">
            <div class = "page-header">

                <h4>
                    Add Students to your club
                </h4>

            </div>
<!--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.</p>-->
            <?php $attributes = array('id' => 'club_reg_from'); ?>
            <?php echo form_open_multipart('club/add_students',$attributes); ?>
                <div class="form_details form form-horizontal" role="form">
<!--                    <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">-->
<!--                    <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">-->
<!--                    <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">-->
<!--                    <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>-->
<!--                    <div class="clearfix"> </div>-->
<!--                    <div class="sub-button">-->
<!--                        <input type="submit" value="Send message">-->
<!--                    </div>-->

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter student name">
                        </div>
                    </div>

<!--                    <table>-->
<!--                        <tr>-->
<!--                            <td>Name</td>-->
<!--                            <td><input type="text" class="text" name="name"> </td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td>REGISTRATION NUMBER</td>-->
<!--                            <td><input type="text" class="text" name="reg_no"> </td>-->
<!--                        </tr>-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="reg_no">Registration Number:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="reg_no" name="reg_no" placeholder="Enter student registration number">
                        </div>
                    </div>
<!--                        <tr>-->
<!--                            <td>ADDRESS</td>-->
<!--                            <td><input type="text" class="text" name="address"> </td>-->
<!--                        </tr>-->

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="address">Address:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="address" name="address" placeholder="Enter student address"></textarea>
                        </div>
                    </div>
<!--                        <tr>-->
<!--                            <td>DATE OF BIRTH</td>-->
<!--                            <td><input type="text" class="text" name="dob"> </td>-->
<!--                        </tr>-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dob" name="dob" placeholder="Enter date of birth">
                        </div>
                    </div>
<!--                        <tr>-->
<!--                            <td>EMAIL</td>-->
<!--                            <td><input type="text" class="text" name="email"> </td>-->
<!--                        </tr>-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                    </div>
<!--                        <tr>-->
<!--                            <td>GENDER</td>-->
<!--                            <td><input type="text" class="text" name="gender"> </td>-->
<!--                        </tr>-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="gender">Gender:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender">
                        </div>
                    </div>
<!--                        <tr>-->
<!--                            <td>BIRTH STAR</td>-->
<!--                            <td><input type="text" class="text" name="birth_star"> </td>-->
<!--                        </tr>-->

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="birth_star">Birth Star:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="birth_star" name="birth_star" placeholder="Enter Birth star">
                        </div>
                    </div>
<!--                        <tr>-->
<!--                            <td>BLOOD GROUP</td>-->
<!--                            <td><input type="text" class="text" name="blood"> </td>-->
<!--                        </tr>-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="blood">Blood Group:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="blood" name="blood" placeholder="Enter Blood group">
                        </div>
                    </div>
<!--                        <tr>-->
<!--                            <td>CONTACT NUMBER</td>-->
<!--                            <td><input type="text" class="text" name="contact"> </td>-->
<!--                        </tr>-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="contact">Contact Number:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact Number">
                        </div>
                    </div>
<!--                        <tr>-->
<!--                            <td>UPLOAD IMAGES</td>-->
<!--                            <td><input type="file" name="upload_images[]" id="upload_images"  maxlength="10000"  multiple ></td>-->
<!--                        </tr>-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="upload_images">Upload Images:</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="upload_images" name="upload_images[]" maxlength="10000"  multiple >
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Add Student</button>
                        </div>
                    </div>
<!---->
<!---->
<!--                    </table>-->

<!--                    <div class="sub-button">-->
<!--                        <input type="submit" value="Add Student">-->
<!--                    </div>-->
                </div>
            <?php echo form_close(); ?>
        </div>

    </div>
<!--</div>-->
</div>