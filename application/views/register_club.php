<!-- registration -->
<div class="main-1">
    <div class="container">
        <div class="register">
            <?php $attributes = array('id' => 'club_reg_from'); ?>
            <?php echo form_open('club/register',$attributes); ?>

                <div class="register-top-grid">
                    <h3>CLUB INFORMATION</h3>
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Club Name<label>*</label></span>
                        <input type="text" name="club_name"> <?php echo form_error('club_name') ?>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Email Address<label>*</label></span>
                        <input type="text" name="email"> <?php echo form_error('email') ?>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Register No.<label>*</label></span>
                        <input type="text" name="reg_no"> <?php echo form_error('reg_no') ?>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Location<label>*</label></span>
                        <input type="text" name="location"> <?php echo form_error('location') ?>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Address<label>*</label></span>
                        <textarea name="address"> </textarea> <?php echo form_error('address') ?>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Contact No.<label>*</label></span>
                        <input type="text" name="contact_no"> <?php echo form_error('contact_no') ?>
                    </div>

                    <div class="clearfix"> </div>

                </div>
                <div class="register-bottom-grid">
                    <h3>LOGIN INFORMATION</h3>
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Password<label>*</label></span>
                        <input type="password" name="password"> <?php echo form_error('password') ?>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Confirm Password<label>*</label></span>
                        <input type="password" name="conf_password"> <?php echo form_error('conf_password') ?>
                    </div>
                </div>
            <div class="clearfix"> </div>
            <div class="register-but">
<!--                <form>-->
                    <input type="submit" value="submit" name="submit">
                    <div class="clearfix"> </div>
<!--                </form>-->
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- registration -->
