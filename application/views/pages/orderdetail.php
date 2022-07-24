<?php if(isset($reviews) && count($reviews) > 0){ 
								$i = 0; 
								$total_price = 0;
								$total_service = 0;
								$total_fq= 0;
								$total_pun = 0;
								$total = 0;
							foreach ($reviews as $value) { $i++;
							 	if ($total_price == 0){
								$total_price = ($total_price+$value['Price']);
								}
								else{
									$total_price = ($total_price+$value['Price'])/2;
								}
								if ($total_service == 0){
									$total_service = ($total_service+$value['Service']);
									}
								else{
									$total_service = ($total_service+$value['Service'])/2;
								}
								if ($total_fq == 0){
									$total_fq = ($total_fq+$value['Food_Quality']);
								}
								else{
									$total_fq = ($total_fq+$value['Food_Quality'])/2;
								}
								if ($total_pun == 0){
									$total_pun = ($total_pun+$value['Punctuality']);
								}
								else{
									$total_pun = ($total_pun+$value['Punctuality'])/2;
								}		
								$total = ($total_fq+$total_price+$total_pun+$total_service)/4;					
							 }}
							else{ ?>
								<div class="col-lg-12 blog-no-data-div">
									<p class="blog-data-message">Data not found.</p>
								</div>
							<?php } ?>
<link href="<?php echo base_url('assets/css/detail-page.css');?>" rel="stylesheet">

<main>
	    <div class="container margin_detail_2">
	        <div class="row">
	            <div class="col-lg-8">
	                <div class="detail_page_head clearfix">
	                    <div class="rating">
	                        <div class="score"><span>Superb<em>15 Reviews</em></span><strong><?php echo $total;?></strong></div>
	                    </div>
	                    <div class="title">
	                        <h1><?php echo $Order[0]['R_Name'];?></h1>
	                        27 Old Gloucester St, 4530 London - <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="blank">Get directions</a>
	                        <ul class="tags">
	                            <li><a href="#0">Pizza</a></li>
	                            <li><a href="#0">Italian Food</a></li>
	                            <li><a href="#0">Best Price</a></li>
	                        </ul>
	                    </div>
	                </div>
	                <!-- /detail_page_head -->
	                <h6>About "da Alfredo"</h6>
	                <p>Mei at intellegat reprehendunt, te facilisis definiebas dissentiunt usu. Choro delicata voluptatum cu vix.<br>Sea error splendide at. Te sed facilisi persequeris definitiones, ad per scriptorem instructior, vim latine adipiscing no. Cu tacimates salutandi his, mel te dicant quodsi aperiri. Unum timeam his eu.</p>
	            </div>
	            <div class="col-lg-4">
	                <div class="pictures magnific-gallery clearfix">
	                    <figure>
	                        <a href="<?php echo base_url('assets/img/detail_gallery/detail_1.jpg');?>" title="Photo title" data-effect="mfp-zoom-in">
	                            <img src="<?php echo base_url('assets/img/thumb_detail_1.jpg');?>" data-src="img/thumb_detail_1.jpg" class="lazy loaded" alt="" data-was-processed="true">
	                        </a>
	                    </figure>
	                    <figure><a href="<?php echo base_url('assets/img/detail_gallery/detail_2.jpg');?>" title="Photo title" data-effect="mfp-zoom-in"><img src="<?php echo base_url('assets/img/thumb_detail_2.jpg');?>" data-src="<?php echo base_url('assets/img/thumb_detail_2.jpg');?>" class="lazy loaded" alt="" data-was-processed="true"></a></figure>
	                    <figure><a href="<?php echo base_url('assets/img/detail_gallery/detail_3.jpg');?>" title="Photo title" data-effect="mfp-zoom-in"><img src="<?php echo base_url('assets/img/thumb_detail_3.jpg');?>" data-src="<?php echo base_url('assets/img/thumb_detail_3.jpg');?>" class="lazy loaded" alt="" data-was-processed="true"></a></figure>
	                    <figure><a href="<?php echo base_url('assets/img/detail_gallery/detail_4.jpg');?>" title="Photo title" data-effect="mfp-zoom-in"><img src="<?php echo base_url('assets/img/thumb_detail_4.jpg');?>" data-src="<?php echo base_url('assets/img/thumb_detail_4.jpg');?>" class="lazy loaded" alt="" data-was-processed="true"></a></figure>
	                    <figure><a href="<?php echo base_url('assets/img/detail_gallery/detail_4.jpg');?>" title="Photo title" data-effect="mfp-zoom-in"><img src="<?php echo base_url('assets/img/thumb_detail_6.jpg');?>" data-src="<?php echo base_url('assets/img/thumb_detail_6.jpg');?>" class="lazy loaded" alt="" data-was-processed="true"></a></figure>
	                    <figure><a href="<?php echo base_url('assets/img/detail_gallery/detail_5.jpg');?>" title="Photo title" data-effect="mfp-zoom-in"><span class="d-flex align-items-center justify-content-center">+10</span><img src="<?php echo base_url('assets/img/thumb_detail_5.jpg');?>?" data-src="<?php echo base_url('assets/img/thumb_detail_5.jpg');?>" class="lazy loaded" alt="" data-was-processed="true"></a></figure>
	                </div>
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->

	    <nav class="secondary_nav sticky_horizontal">
	        <div class="container">
	            <ul id="secondary_nav">
	                <li><a class="list-group-item list-group-item-action" href="#section-1">Starters</a></li>
	                <li><a class="list-group-item list-group-item-action" href="#section-2">Main Courses</a></li>
	                <li><a class="list-group-item list-group-item-action" href="#section-3">Desserts</a></li>
	                <li><a class="list-group-item list-group-item-action" href="#section-4">Drinks</a></li>
	                <li><a class="list-group-item list-group-item-action" href="#section-5"><i class="icon_chat_alt"></i>Reviews</a></li>
	            </ul>
	        </div>
	        <span></span>
	    </nav>
	    <!-- /secondary_nav -->

	    <div class="bg_gray">
	        <div class="container margin_detail">
	            <div class="row">
	                <div class="col-lg-8 list_menu">
	                    <section id="section-1">
	                        <h4>Starters</h4>
	                        <div class="table_wrapper">
							
	                            <table class="table cart-list menu-gallery">
	                                <thead>
	                                    <tr>
	                                        <th>
	                                            Item
	                                        </th>
	                                        <th>
	                                            Price
	                                        </th>
	                                        <th>
	                                            Order
	                                        </th>
	                                    </tr>
	                                </thead>
	                                <tbody>
									
									<?php if(isset($Menu) && count($Menu) > 0){ 
											$i = 0; 
											foreach ($Menu as $value) { $i++; 
											if($value['Menu_category'] =='Starters'){?>
											<tr>
	                                        <td class="d-md-flex align-items-center">
	                                            <figure>
	                                            	<a href="<?php echo base_url('assets/img/menu_item_large_1.jpg');?>" title="Photo title" data-effect="mfp-zoom-in"><img src="<?php echo base_url('assets/img/menu-thumb-placeholder.jpg');?>" data-src="<?php echo base_url('assets/img/menu-thumb-1.jpg');?>" alt="thumb" class="lazy"></a>
	                                            </figure>
	                                            <div class="flex-md-column">
	                                                <h4><?php echo isset($value['Item_Name']) && $value['Item_Name'] != '' ? $value['Item_Name'] : ''; ?></h4>
	                                                <p>
	                                                    Fuisset mentitum deleniti sit ea.
	                                                </p>
	                                            </div>
	                                        </td>
	                                        <td>
	                                            <strong><?php echo isset($value['Price']) && $value['Price'] != '' ? $value['Price'] : ''; ?></strong>
	                                        </td>
	                                        <td class="options">
	                                            <div class="dropdown dropdown-options">
	                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
	                                                <div class="dropdown-menu">
	                                                    <h5>Select an option</h5>
	                                                    <ul class="clearfix">
															<li>
	                                                            <!-- <label class="container_radio">Medium<small>+ $3.30</small> -->
	                                                                <input type="radio" value="option1" name="options_1">
	                                                                <span class="checkmark"></span>
	                                                            </label>
	                                                        </li>
	                                                        <li>
	                                                            <label class="container_radio">Large<small>+ $5.30</small>
	                                                                <input type="radio" value="option2" name="options_1">
	                                                                <span class="checkmark"></span>
	                                                            </label>
	                                                        </li>
	                                                        <li>
	                                                            <label class="container_radio">Extra Large<small>+ $8.30</small>
	                                                                <input type="radio" value="option3" name="options_1">
	                                                                <span class="checkmark"></span>
	                                                            </label>
	                                                        </li>
	                                                    </ul>
	                                                    <h5>Add ingredients</h5>
	                                                    <ul class="clearfix">
	                                                        <li>
	                                                            <label class="container_check">Extra Tomato<small>+ $4.30</small>
	                                                                <input type="checkbox">
	                                                                <span class="checkmark"></span>
	                                                            </label>
	                                                        </li>
	                                                        <li>
	                                                            <label class="container_check">Extra Peppers<small>+ $2.50</small>
	                                                                <input type="checkbox">
	                                                                <span class="checkmark"></span>
	                                                            </label>
	                                                        </li>
	                                                    </ul>
	                                                    <a href="<?php echo base_url('User/AddToCart/'.$value['Id']);?>" class="btn_1">Add to cart</a>
	                                                </div>
	                                            </div>
	                                        </td>
	                                    </tr>
										<?php }}}
							else{ ?>
								<div class="col-lg-12 blog-no-data-div">
									<p class="blog-data-message">Data not found.</p>
								</div>
							<?php } ?>		
	                
	                                </tbody>
	                            </table>
	                        </div>
	                    </section>
	                    <!-- /section -->

	                    <section id="section-2">
	                        <h4>Main Courses</h4>
	                        <div class="table_wrapper">
	                            <table class="table cart-list menu-gallery">
	                                <thead>
	                                    <tr>
	                                        <th>
	                                            Item
	                                        </th>
	                                        <th>
	                                            Price
	                                        </th>
	                                        <th>
	                                            Order
	                                        </th>
	                                    </tr>
	                                </thead>
	                                <tbody>
									<?php if(isset($Menu) && count($Menu) > 0){ 
											$i = 0; 
											foreach ($Menu as $value) { $i++; 
											if($value['Menu_category'] =='Main Course'){?>
	                                    <tr>
	                                        <td class="d-md-flex align-items-center">
	                                            <figure>
	                                            	<a href="img/menu_item_large_1.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-5.jpg" alt="thumb" class="lazy"></a>
	                                            </figure>
	                                            <div class="flex-md-column">
	                                                <h4><?php echo isset($value['Item_Name']) && $value['Item_Name'] != '' ? $value['Item_Name'] : ''; ?></h4>
	                                                <p>
	                                                    Fuisset mentitum deleniti sit ea.
	                                                </p>
	                                            </div>
	                                        </td>
	                                        <td>
	                                            <strong>$12.00</strong>
	                                        </td>
	                                        <td class="options">
											<a href="<?php echo base_url('User/AddToCart/'.$value['Id']);?>" > <i class="icon_plus_alt2"></i></a>
	                                        </td>
	                                    </tr>
										<?php }}}else{ ?>
								<div class="col-lg-12 blog-no-data-div">
									<p class="blog-data-message">Data not found.</p>
								</div>
							<?php } ?>	
	                                </tbody>
	                            </table>
	                        </div>
	                    </section>
	                    <!-- /section -->
					    <section id="section-3">
	                        <h4>Desserts</h4>
	                        <div class="table_wrapper">
	                            <table class="table table-striped cart-list menu-gallery">
	                                <thead>
	                                    <tr>
	                                        <th>
	                                            Item
	                                        </th>
	                                        <th>
	                                            Price
	                                        </th>
	                                        <th>
	                                            Order
	                                        </th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <tr>
	                                        <td class="d-md-flex align-items-center">
	                                           <figure>
	                                            	<a href="img/menu_item_large_1.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-17.jpg" alt="thumb" class="lazy"></a>
	                                            </figure>
	                                            <div class="flex-md-column">
	                                                <h4>11. Chocolate Fudge Cake</h4>
	                                                <p>
	                                                    Fuisset mentitum deleniti sit ea.
	                                                </p>
	                                            </div>
	                                        </td>
	                                        <td>
	                                            <strong>$24.71</strong>
	                                        </td>
	                                        <td class="options">
	                                            <a href="#0"><i class="icon_plus_alt2"></i></a>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td class="d-md-flex align-items-center">
	                                            <figure>
	                                            	<a href="img/menu_item_large_2.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-18.jpg" alt="thumb" class="lazy"></a>
	                                            </figure>
	                                            <div class="flex-md-column">
	                                                <h4>12. Cheesecake</h4>
	                                                <p>
	                                                    Fuisset mentitum deleniti sit ea.
	                                                </p>
	                                            </div>
	                                        </td>
	                                        <td>
	                                            <strong>$7.50</strong>
	                                        </td>
	                                        <td class="options">
	                                            <a href="#0"><i class="icon_plus_alt2"></i></a>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td class="d-md-flex align-items-center">
	                                            <figure>
	                                            	<a href="img/menu_item_large_3.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-19.jpg" alt="thumb" class="lazy"></a>
	                                            </figure>
	                                            <div class="flex-md-column">
	                                                <h4>19. Apple Pie & Custard</h4>
	                                                <p>
	                                                    Fuisset mentitum deleniti sit ea.
	                                                </p>
	                                            </div>
	                                        </td>
	                                        <td>
	                                            <strong>$9.70</strong>
	                                        </td>
	                                        <td class="options">
	                                            <a href="#0"><i class="icon_plus_alt2"></i></a>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td class="d-md-flex align-items-center">
	                                            <figure>
	                                            	<a href="img/menu_item_large_4.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-20.jpg" alt="thumb" class="lazy"></a>
	                                            </figure>
	                                            <div class="flex-md-column">
	                                                <h4>14. Profiteroles</h4>
	                                                <p>
	                                                    Fuisset mentitum deleniti sit ea.
	                                                </p>
	                                            </div>
	                                        </td>
	                                        <td>
	                                            <strong>$12.00</strong>
	                                        </td>
	                                        <td class="options">
	                                            <a href="#0"><i class="icon_plus_alt2"></i></a>
	                                        </td>
	                                    </tr>
	                                </tbody>
	                            </table>
	                        </div>
	                    </section>
	                    <!-- /section -->

	                    <section id="section-4">
	                        <h4>Drinks</h4>
	                        <div class="table_wrapper">
	                            <table class="table table-striped cart-list menu-gallery">
	                                <thead>
	                                    <tr>
	                                        <th>
	                                            Item
	                                        </th>
	                                        <th>
	                                            Price
	                                        </th>
	                                        <th>
	                                            Order
	                                        </th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <tr>
	                                        <td class="d-md-flex align-items-center">
	                                            <figure>
	                                            	<a href="img/menu_item_large_1.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-15.jpg" alt="thumb" class="lazy"></a>
	                                            </figure>
	                                            <div class="flex-md-column">
	                                                <h4>15. Coca Cola</h4>
	                                                <p>
	                                                    Fuisset mentitum deleniti sit ea.
	                                                </p>
	                                            </div>
	                                        </td>
	                                        <td>
	                                            <strong>$4.71</strong>
	                                        </td>
	                                        <td class="options">
	                                            <a href="#0"><i class="icon_plus_alt2"></i></a>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td class="d-md-flex align-items-center">
	                                            <figure>
	                                            	<a href="img/menu_item_large_2.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-16.jpg" alt="thumb" class="lazy"></a>
	                                            </figure>
	                                            <div class="flex-md-column">
	                                                <h4>16. Beer Corona</h4>
	                                                <p>
	                                                    Fuisset mentitum deleniti sit ea.
	                                                </p>
	                                            </div>
	                                        </td>
	                                        <td>
	                                            <strong>$7.50</strong>
	                                        </td>
	                                        <td class="options">
	                                            <a href="#0"><i class="icon_plus_alt2"></i></a>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td class="d-md-flex align-items-center">
	                                            <figure>
	                                            	<a href="img/menu_item_large_3.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-17.jpg" alt="thumb" class="lazy"></a>
	                                            </figure>
	                                            <div class="flex-md-column">
	                                                <h4>17. Red Wine</h4>
	                                                <p>
	                                                    Fuisset mentitum deleniti sit ea.
	                                                </p>
	                                            </div>
	                                        </td>
	                                        <td>
	                                            <strong>$9.70</strong>
	                                        </td>
	                                        <td class="options">
	                                            <a href="#0"><i class="icon_plus_alt2"></i></a>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td class="d-md-flex align-items-center">
	                                            <figure>
	                                            	<a href="img/menu_item_large_4.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-18.jpg" alt="thumb" class="lazy"></a>
	                                            </figure>
	                                            <div class="flex-md-column">
	                                                <h4>18. White Wine</h4>
	                                                <p>
	                                                    Fuisset mentitum deleniti sit ea.
	                                                </p>
	                                            </div>
	                                        </td>
	                                        <td>
	                                            <strong>$12.00</strong>
	                                        </td>
	                                        <td class="options">
	                                            <a href="#0"><i class="icon_plus_alt2"></i></a>
	                                        </td>
	                                    </tr>
	                                </tbody>
	                            </table>
	                        </div>
	                    </section>
	                    <!-- /section -->

	                </div>
	                <!-- /col -->

	                <div class="col-lg-4" id="sidebar_fixed">
	                    <div class="box_order mobile_fixed">
	                        <div class="head">
	                            <h3>Order Summary</h3>
	                            <a href="#0" class="close_panel_mobile"><i class="icon_close"></i></a>
	                        </div>
	                        <!-- /head -->
	                        <div class="main">
	                            <ul class="clearfix">
								<?php $total_amt = 0;
								$delivery_fee=0;
								?>
									<?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>
	                                <li><a href="<?php echo base_url('User/RemoveCart/'.$item['rowid']);?>"><?php echo $item['name'];?></a><span><?php echo $item['price'];?></span></li>
										
									<?php $total_amt+=$item['price']; 
									 
									if($total_amt==0){
										$delivery_fee=0;
									}
									else{
													$delivery_fee= 30;}
							 }}?>
	                            </ul>
	                            <ul class="clearfix">
	                                <li>Subtotal<span><?php echo $total_amt;?></span></li>
	                                <li>Delivery fee<span><?php echo $delivery_fee;?></span></li>
	                                <li class="total">Total<span><?php echo $total_amt + $delivery_fee; ?></span></li>
	                            </ul>
	                            
	                            <div class="btn_1_mobile">
	                                <a href="<?php echo base_url('Order/ordersummary');?>" class="btn_1 gradient full-width mb_5">Order Now</a>
	                                <div class="text-center"><small>No money charged on this steps</small></div>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- /box_order -->
	                    
	                    <div class="btn_reserve_fixed"><a href="#0" class="btn_1 gradient full-width">View Basket</a></div>
	                </div>
	            </div>
	            <!-- /row -->
	        </div>
	        <!-- /container -->
	    </div>
	    <!-- /bg_gray -->

	    <div class="container margin_30_20">
	        <div class="row">
	            <div class="col-lg-8 list_menu">
	                <section id="section-5">
	                    <h4>Reviews</h4>
	                    <div class="row add_bottom_30 d-flex align-items-center reviews">
	                        <div class="col-md-3">
	                            <div id="review_summary">
	                                <strong><?php echo $total;?></strong>
	                                <em>Superb</em>
	                                <small>Based on <?php echo count($reviews);?> reviews</small>
	                            </div>
	                        </div>
							
	                        <div class="col-md-9 reviews_sum_details">
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <h6>Food Quality</h6>
	                                    <div class="row">
	                                        <div class="col-xl-10 col-lg-9 col-9">
	                                            <div class="progress">
	                                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                        <div class="col-xl-2 col-lg-3 col-3"><strong><?php echo $total_fq;?></strong></div>
	                                    </div>
	                                    <!-- /row -->
	                                    <h6>Service</h6>
	                                    <div class="row">
	                                        <div class="col-xl-10 col-lg-9 col-9">
	                                            <div class="progress">
	                                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                        <div class="col-xl-2 col-lg-3 col-3"><strong><?php echo $total_service;?></strong></div>
	                                    </div>
	                                    <!-- /row -->
	                                </div>
	                                <div class="col-md-6">
	                                    <h6>Punctuality</h6>
	                                    <div class="row">
	                                        <div class="col-xl-10 col-lg-9 col-9">
	                                            <div class="progress">
	                                                <div class="progress-bar" role="progressbar"  aria-valuenow="<?php echo $total_pun;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $total_pun;?>"></div>
	                                            </div>
	                                        </div>
	                                        <div class="col-xl-2 col-lg-3 col-3"><strong><?php echo $total_pun;?></strong></div>
	                                    </div>
	                                    <!-- /row -->
	                                    <h6>Price</h6>
	                                    <div class="row">
	                                        <div class="col-xl-10 col-lg-9 col-9">
	                                            <div class="progress">
	                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                        <div class="col-xl-2 col-lg-3 col-3"><?php echo $total_price;?><strong></strong></div>
	                                    </div>
	                                    <!-- /row -->
	                                </div>
	                            </div>
	                            <!-- /row -->
	                        </div>
							
	                    </div>
						
	                    <!-- /row -->
	                    <div id="reviews">
						<?php if(isset($reviews) && count($reviews) > 0){ 
								$i = 0; 
                               
                        
							foreach ($reviews as $value) { $i++; ?> 
	                        <div class="review_card">
	                            <div class="row">
	                                <div class="col-md-2 user_info">
	                                    <figure><img src="img/avatar4.jpg" alt=""></figure>
	                                    <h5><?php echo isset($value['User_Name']) && $value['User_Name'] != '' ? $value['User_Name'] : ''; ?></h5>
	                                </div>
	                                <div class="col-md-10 review_content">
	                                    <div class="clearfix add_bottom_15">
	                                        <span class="rating"><?php echo ($value['Food_Quality']+$value['Punctuality']+$value['Price']+$value['Service'])/4 ;?><small>/10</small> <strong>Rating average</strong></span>
	                                        <em>Published on <?php echo isset($value['Time_added']) && $value['Time_added'] != '' ? $value['Time_added'] : ''; ?></em>
	                                    </div>
	                                    <h4><?php echo isset($value['Rev_Title']) && $value['Rev_Title'] != '' ? $value['Rev_Title'] : ''; ?></h4>
	                                    <p><?php echo isset($value['Rev_Desc']) && $value['Rev_Desc'] != '' ? $value['Rev_Desc'] : ''; ?></p>
	                                    <ul>
	                                        <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
	                                        <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
	                                        <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <!-- /row -->
	                        </div> 
	                        <!-- /review_card -->
							<?php }}
							else{ ?>
								<div class="col-lg-12 blog-no-data-div">
									<p class="blog-data-message">Data not found.</p>
								</div>
							<?php } ?>
	                    </div>
	                    <!-- /reviews -->
	                    <div class="text-right"><a href="<?php echo base_url().'Review/review/'.$Order[0]['Id'];?>" class="btn_1 gradient">Leave a Review</a></div>
	                </section>
	                <!-- /section -->
	            </div>
	        </div>
	    </div>
	    <!-- /container -->
	</main>
	<!-- /main -->
	<script>
function myFunction() {
  document.getElementById("myNumber").stepUp(5);
}

</script>
<script>	
	var baseURL = "<?php echo base_url();?>";
	
	window.onload = function sendData(){
    $.ajax({
      url: baseURL + 'Order/Reviewadd',
	  data: { 
			Restuarant_Id: <?php echo $Order[0]['Id'];?>,
            Rating: <?php echo $total;?>,
		
          },
        method: 'POST',
        dataType: 'json',
    });
  }
  </script>


</script>
