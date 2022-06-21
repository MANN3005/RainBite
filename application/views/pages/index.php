<link href="<?php echo base_url('assets/css/home.css');?>" rel="stylesheet">
<main>
        <div class="header-video">
            <div id="hero_video">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-7 col-lg-8 col-md-8">
                                <h1>Delivery or Takeaway Food</h1>
                            <p>All restaurants <span class="element" style="font-weight: 500"></span></p>
                                <form method="post" action="grid-listing-filterscol.html">
                                <div class="row no-gutters custom-search-input">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <input class="form-control no_border_r" type="text" id="autocomplete" placeholder="Address, neighborhood...">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="btn_1 gradient" type="submit">Search</button>
                                    </div>
                                </div>
                                <!-- /row -->
                                <div class="search_trends">
                                    <h5>Trending:</h5>
                                    <ul>
                                        <li><a href="#0">Sushi</a></li>
                                        <li><a href="#0">Burgher</a></li>
                                        <li><a href="#0">Chinese</a></li>
                                        <li><a href="#0">Pizza</a></li>
                                    </ul>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo base_url('img/video_fix.png');?>" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="960">
            <div class="wave hero"></div>
        </div>
        <!-- /header-video -->

        <div class="container margin_30_60">
            <div class="main_title center">
                <span><em></em></span>
                <h2>Popular Categories</h2> <br>
                <span><em></em></span>
                <!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> -->
            </div>
            <!-- /main_title -->

            <div class="owl-carousel owl-theme categories_carousel">
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>98</span>
                            <img src="<?php echo base_url('assets/img/home_cat_placeholder.jpg');?>" data-src="assets/img/home_cat_pizza.jpg" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Pizza</h3>
                                <small>Avg price $40</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>87</span>
                            <img src="<?php echo base_url('assets/img/home_cat_placeholder.jpg');?>" data-src="assets/img/home_cat_sushi.jpg" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Japanese</h3>
                                <small>Avg price $50</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>55</span>
                            <img src="<?php echo base_url('assets/img/home_cat_placeholder.jpg');?>" data-src="assets/img/home_cat_hamburgher.jpg" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Burghers</h3>
                                <small>Avg price $55</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>55</span>
                            <img src="<?php echo base_url('assets/img/home_cat_placeholder.jpg');?>" data-src="assets/img/home_cat_vegetarian.jpg" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Vegetarian</h3>
                                <small>Avg price $40</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>65</span>
                            <img src="<?php echo base_url('assets/img/home_cat_placeholder.jpg');?>" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Bakery</h3>
                                <small>Avg price $60</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>25</span>
                            <img src="<?php echo base_url('assets/img/home_cat_placeholder.jpg');?>" data-src="assets/img/home_cat_chinesse.jpg" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Chinese</h3>
                                <small>Avg price $40</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>35</span>
                            <img src="<?php echo base_url('assets/img/home_cat_placeholder.jpg');?>" data-src="assets/img/home_cat_mexican.jpg" alt="" class="owl-lazy" width="350" height="450">
                            <div class="info">
                                <h3>Mexican</h3>
                                <small>Avg price $35</small>
                            </div>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- /carousel -->
        </div>
        <!-- /container -->

        <div class="bg_gray">
            <div class="container margin_60_40">
                <div class="main_title">
                    <span><em></em></span>
                    <h2>Top Rated Restaurants</h2>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    <a href="<?php echo base_url('Order');?>">View All &rarr;</a>
                </div>
                <div class="row add_bottom_25">
                    <div class="col-lg-6">
                        <div class="list_home">
                            <ul>
                            <?php if(isset($order) && count($order) > 0){ 
								$i = 0; 
                               
                        
							foreach ($order as $value) { $i++; 
                             if ($i>3){ break;}?> 
                                <li>
                                    <a href="detail-restaurant.html">
                                        <figure>
                                            <img src="img/location_list_placeholder.png" data-src="img/location_list_1.jpg" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                        <div class="score"><strong>9.5</strong></div>
                                        <em></em>
                                        <h3><?php echo isset($value['R_Name']) && $value['R_Name'] != '' ? $value['R_Name'] : ''; ?></h3>
                                        <small><?php echo isset($value['Address']) && $value['Address'] != '' ? $value['Address'] : ''; ?></small>
                                        <ul>
                                            <li><span class="ribbon off">-30%</span></li>
                                            <li>Average price $35</li>
                                        </ul>
                                    </a>
                                </li>
                                <?php }}
							else{ ?>
								<div class="col-lg-12 blog-no-data-div">
									<p class="blog-data-message">Data not found.</p>
								</div>
							<?php } ?>
                           </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="list_home">
                            <ul>
                            <?php if(isset($order) && count($order) > 0){ 
								$j = 3; 
                               
                        
							foreach ($order as $value) { $j++; 
                             if ($j>6){ break;}?> 
                                <li>
                                    <a href="detail-restaurant.html">
                                        <figure>
                                            <img src="img/location_list_placeholder.png" data-src="img/location_list_4.jpg" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                        <div class="score"><strong>9.5</strong></div>
                                        <em>Vegetarian</em>
                                        <h3><?php echo isset($value['R_Name']) && $value['R_Name'] != '' ? $value['R_Name'] : ''; ?></h3>
                                        <small>27 Old Gloucester St, 4563</small>
                                        <ul>
                                            <li><span class="ribbon off">-30%</span></li>
                                            <li>Average price $20</li>
                                        </ul>
                                    </a>
                                </li>
                                <?php }}
							else{ ?>
								<div class="col-lg-12 blog-no-data-div">
									<p class="blog-data-message">Data not found.</p>
								</div>
							<?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="banner lazy" data-bg="url(img/banner_bg_desktop.jpg)">
                    <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                        <div>
                            <small>FooYes Delivery</small>
                            <h3>We Deliver to your Office</h3>
                            <p>Enjoy a tasty food in minutes!</p>
                            <a href="<?php echo base_url('SignUp');?>" class="btn_1 gradient">Start Now!</a>
                        </div>
                    </div>
                    <!-- /wrapper -->
                </div>
                <!-- /banner -->
            </div>
        </div>
        <!-- /bg_gray -->

        <div class="shape_element_2">
            <div class="container margin_60_0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box_how">
                                    <figure><img src="<?php echo base_url('assets/img/lazy-placeholder-100-100-white.png');?>" data-src="assets/img/how_1.svg" alt="" width="150" height="167" class="lazy"></figure>
                                    <h3>EasIly Order</h3>
                                    <p>Order easily with a single click on your phone and get it delivered at your home.</p>
                                </div>
                                <div class="box_how">
                                    <figure><img src="<?php echo base_url('assets/img/lazy-placeholder-100-100-white.png');?>" data-src="assets/img/how_2.svg" alt="" width="130" height="145" class="lazy"></figure>
                                    <h3>Quick Delivery</h3>
                                    <p>Enjoy a quick delivery. </p>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="box_how">
                                    <figure><img src="<?php echo base_url('assets/img/lazy-placeholder-100-100-white.png');?>" data-src="assets/img/how_3.svg" alt="" width="150" height="132" class="lazy"></figure>
                                    <h3>Enjoy Food</h3>
                                    <p>Enjoy home made food at the comfort of your house. </p>
                                </div>
                            </div>
                        </div>
                        <p class="text-center mt-3 d-block d-lg-none"><a href="" class="btn_1 medium gradient pulse_bt mt-2">Register Now!</a></p>
                    </div>
                    <div class="col-lg-5 offset-lg-1 align-self-center">
                        <div class="intro_txt">
                            <div class="main_title">
                                <span><em></em></span>
                                <h2>Start Ordering Now</h2>
                            </div>
                            <p class="lead">All your favourite food at one location</p>
                            <p>Register today and start ordering food right now. Exclusive offers especially curated for you.</p>
                            <p><a href="<?php echo base_url('signup');?>" class="btn_1 medium gradient pulse_bt mt-2">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /shape_element_2 -->

    </main>
    <!-- /main -->
