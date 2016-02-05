<!-- login -->
<div class="login-page">
    <div class="container">
        <div class="account_grid">
            <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                <h3>NEW CLUB</h3>
                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                <a class="acount-btn" href="<?php echo base_url('club/register') ?>">Create an Account</a>
            </div>
            <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                <h3>REGISTERED CLUB</h3>

                <p>If you have an account with us, please log in.</p>
                <?php if(isset($error_msg)) echo "<p style='color: red'>{$error_msg}</p>" ?>
                <?php $attributes = array('id' => 'club_reg_from'); ?>
                <?php echo form_open('club/login',$attributes); ?>
                    <div>
                        <span>Email Address<label>*</label></span>
                        <input type="text" name="username">
                    </div>
                    <div>
                        <span>Password<label>*</label></span>
                        <input type="password" name="password">
                    </div>
                    <a class="forgot" href="#">Forgot Your Password?</a>
                    <input type="submit" value="Login">
               <?php echo form_close(); ?>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
