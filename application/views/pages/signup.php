<link href="<?php echo base_url('assets/css/bootstrap_customized.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/order-sign_up.css');?>" rel="stylesheet">
<body id="register_bg">
	
	<div id="register">
		<aside>
			<figure>
				<a href="index.html"><img src="<?php echo base_url('assets/img/logo_sticky.svg');?>" width="140" height="35" alt=""></a>
			</figure>
			<div class="access_social">
					<a href="#0" class="social_bt facebook">Register with Facebook</a>
					<a href="#0" class="social_bt google">Register with Google</a>
				</div>
            <div class="divider"><span>Or</span></div><?php echo validation_errors(); ?>
			<form method="post"  action="<?php echo base_url('SignUp/usersignup');?>" autocomplete = "off">
				<div class="form-group" >
					<input class="form-control" type="text" placeholder="Name"   name="name" maxlength=40 required value="<?php echo set_value('name');?>">
					<i class="icon_pencil-edit"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" placeholder="Last Name" name="lastname" maxlength=40 required value="<?php echo set_value('lastname');?>">
					<i class="icon_pencil-edit"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" placeholder="Email" name="email" maxlength=40 required value="<?php echo set_value('email');?>">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" placeholder="Phone Number" name="phone_number" maxlength=40 required value="<?php echo set_value('phone_number');?>">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="password" id="password1" placeholder="Password" name="password" maxlength=40 required value="<?php echo set_value('password');?>">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="password" id="password2" placeholder="Confirm Password" name="cpassword" maxlength=40 required value="<?php echo set_value('cpassword');?>">
					<i class="icon_lock_alt"></i>
				</div>
				<div id="pass-info" class="clearfix"></div>
				<input class="btn_1 gradient full-width" type="submit"  value="Submit">
				<div class="text-center mt-2"><small>Already have an acccount? <strong><li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></a></strong></small></div>
			</form>
			<div class="copy">© RainBite</div>
		</aside>
	</div>
	<!-- /login -->
<!-- </body> -->
 <script src="<?php echo base_url('assets/js/common_scripts.min.js');?>"></script>
 <script src="<?php echo base_url('assets/js/common_func.js');?>"></script>
<script src="<?php echo base_url('assets/js/pw_strenght.js');?>"></script>	

<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="modal_header">
        <h3>Sign In</h3>
    </div>
    <form method="post"  action="<?php echo base_url('Login/ValidationFromSignup');?>" autocomplete = "off">
        <div class="sign-in-wrapper">
        <?php
                if($this->session->flashdata('error'))
                    { ?>
                        <div  id="pass-info" class="weakpass">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
            <?php } ?> 
            <a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
            <label>Email</label>
                <input type="email" class="form-control" name="email" >
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password"  value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <label class="container_check">Remember me
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <div class="text-center">
                <input type="submit" value="LogIn"  name = "Login" class="btn_1 full-width mb_5">
                Don’t have an account? <a href="<?php echo base_url('Signup');?>"> Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>