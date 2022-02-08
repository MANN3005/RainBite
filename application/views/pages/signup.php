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
			<form method="post" action="<?php echo base_url('SignUp/usersignup');?>" autocomplete = "off">
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
					<input class="form-control" type="password" id="password1" placeholder="Password" name="password" maxlength=40 required value="<?php echo set_value('password');?>">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="password" id="password2" placeholder="Confirm Password" name="confirmpassword" maxlength=40 required value="<?php echo set_value('confirmpassword');?>">
					<i class="icon_lock_alt"></i>
				</div>
				<div id="pass-info" class="clearfix"></div>
				<div class="form-group">
				<input class="btn_1 gradient full-width" type="submit" value="SignUp" placeholder = "Send us a Message">
				</div>
				<div class="text-center mt-2"><small>Already have an acccount? <strong><a href="#0">Sign In</a></strong></small></div>
			</form>
			<div class="copy">© 2020 FooYes</div>
		</aside>
	</div>
	<!-- /login -->
	
	<!-- SPECIFIC SCRIPTS -->
		
  
<!-- </body> -->
<script src="<?php echo base_url('assets/js/common_scripts.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/common_func.js');?>"></script>
<script src="<?php echo base_url('assets/validate.js');?>"></script>