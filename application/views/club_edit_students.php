<!--<div class="contact_top">-->
<div class="container">
    <div class="col-md-8 contact_left">
        <h4>Edit Student Details</h4>
        <!--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.</p>-->
        <?php $attributes = array('id' => 'club_reg_from'); ?>
        <?php echo form_open_multipart('club/student_edit/'.$student['id'],$attributes); ?>
        <div class="form_details">
            <!--                    <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">-->
            <!--                    <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">-->
            <!--                    <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">-->
            <!--                    <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>-->
            <!--                    <div class="clearfix"> </div>-->
            <!--                    <div class="sub-button">-->
            <!--                        <input type="submit" value="Send message">-->
            <!--                    </div>-->

            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" class="text" name="name" value="<?php echo $student['name'] ?>"> </td>
                </tr>
                <tr>
                    <td>REGISTRATION NUMBER</td>
                    <td><input type="text" class="text" name="reg_no" value="<?php echo $student['reg_no'] ?>"> </td>
                </tr>
                <tr>
                    <td>ADDRESS</td>
                    <td><input type="text" class="text" name="address" value="<?php echo $student['address'] ?>"> </td>
                </tr>
                <tr>
                    <td>DATE OF BIRTH</td>
                    <td><input type="text" class="text" name="dob" value="<?php echo $student['dob'] ?>"> </td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td><input type="text" class="text" name="email" value="<?php echo $student['email'] ?>"> </td>
                </tr>
                <tr>
                    <td>GENDER</td>
                    <td><input type="text" class="text" name="gender" value="<?php echo $student['gender'] ?>"> </td>
                </tr>
                <tr>
                    <td>BIRTH STAR</td>
                    <td><input type="text" class="text" name="birth_star" value="<?php echo $student['birth_star'] ?>"> </td>
                </tr>
                <tr>
                    <td>BLOOD GROUP</td>
                    <td><input type="text" class="text" name="blood" value="<?php echo $student['blood'] ?>"> </td>
                </tr>
                <tr>
                    <td>CONTACT NUMBER</td>
                    <td><input type="text" class="text" name="contact" value="<?php echo $student['contact'] ?>"> </td>
                </tr>
                <tr>
                    <td>UPLOAD IMAGES</td>
                    <td><input type="file" name="upload_images[]" id="upload_images"  maxlength="10000"  multiple ></td>
                </tr>


            </table>

            <div class="sub-button">
                <input type="submit" value="Update Student">
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>

</div>
<!--</div>-->