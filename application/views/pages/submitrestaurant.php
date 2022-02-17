<link href="<?php echo base_url('assets/css/submit.css');?>" rel="stylesheet">
<main>
		<div class="hero_single inner_pages background-image" data-background="url(<?php echo base_url('assets/img/home_section_2.jpg');?>)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1>Attract New Customers</h1>
							<p>More bookings from diners around the corner</p>
							<a href="#submit" class="btn_1 gradient btn_scroll">Submit Now</a>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="wave hero"></div>
		</div>
		<!-- /hero_single -->

			<div class="container margin_30_20">			
			<div class="main_title center">
				<span><em></em></span>
				<h2>Why Submit to FooYes</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>

			<div class="row justify-content-center align-items-center add_bottom_15">
					<div class="col-lg-6">
						<div class="box_about">
							<h3>Boost your Bookings</h3>
							<p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
							<p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
							<img src="img/arrow_about.png" alt="" class="arrow_1">
						</div>
					</div>
					<div class="col-lg-6 text-center d-none d-lg-block">
							<img src="img/about_1.svg" alt="" class="img-fluid" width="250" height="250">
					</div>
				</div>
				<!-- /row -->
				<div class="row justify-content-center align-items-center add_bottom_15">
					<div class="col-lg-6 text-center d-none d-lg-block">
							<img src="img/about_2.svg" alt="" class="img-fluid" width="250" height="250">
					</div>
					<div class="col-lg-6">
						<div class="box_about">
							<h3>Manage Easly</h3>
							<p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
							<p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
							<img src="img/arrow_about.png" alt="" class="arrow_2">
						</div>
					</div>
				</div>
				<!-- /row -->
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-6">
						<div class="box_about">
							<h3>Reach New Customers</h3>
							<p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
							<p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
						</div>

					</div>
					<div class="col-lg-6 text-center d-none d-lg-block">
							<img src="img/about_3.svg" alt="" class="img-fluid" width="250" height="250">
					</div>
				</div>
				<!-- /row -->
				<hr>
			</div>
			<!-- /container -->

	

			<div class="container margin_60_20" id="submit">
				<div class="row justify-content-center">
					<div class="col-lg-5">
						<div class="text-center add_bottom_15">
							<h4>Please fill the form below</h4>
							<p>Id persius indoctum sed, audiam verear his in, te eum quot comprehensam. Sed impetus vocibus repudiare et.</p>
						</div>
						<div id="message-register"></div>
							<form method="post" action="<?php echo base_url('SubmitRestaurant/addrestaurant');?>">
								<h6>Personal data</h6>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name and Last Name" name="name" id="name_register">
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row add_bottom_15">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email Address" name="email" >
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row add_bottom_15">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="phonenumber" class="form-control" placeholder="Phone Number" name="phone_number" >
										</div>
									</div>
								</div>
								<h6>Restaurant data</h6>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Restaurant Name" name="restaurant_name">
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Address" name="address">
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row add_bottom_15">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="City" name="city" id="city_register">
										</div>
									</div>
									
								</div>
								<!-- /row -->
								
								<!-- /row -->
								<div class="form-group text-center"><input type="submit" class="btn_1 gradient" value="Submit" id="submit-register"></div>
							</form>
					</div>
				</div>
			</div>
			<!-- /container -->
		
	</main>
	<!-- /main -->