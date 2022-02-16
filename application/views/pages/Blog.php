<link href="<?php echo base_url('assets/css/blog.css');?>" rel="stylesheet">
<main>
		<div class="page_header blog element_to_stick">
		    <div class="container">
		    	<div class="row">
		    		<div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">
		    			<h1>Blog and Articles</h1>
		    		</div>
		    		<div class="col-xl-4 col-lg-5 col-md-5">
		    			<div class="search_bar_list">
						    <input type="text" class="form-control" placeholder="Dishes, restaurants or cuisines">
						    <button type="submit"><i class="icon_search"></i></button>
						</div>
		    		</div>
		    	</div>
		    	<!-- /row -->		       
		    </div>
		</div>
		<!-- /page_header -->

		<div class="container margin_60_20">			
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
					<?php if(isset($blog) && count($blog) > 0){
						$i = 0;
					foreach ($blog as $value) { $i++; $img = base_url().'assets/img/blog/'. $value['Blog_Image_URL'] ?>
						<div class="col-md-6">
							<article class="blog">
								<figure>
									<a href="blog-post.html"><img src="<?php echo $img;?>" alt="">
										<div class="preview"><span>Read more</span></div>
									</a>
								</figure>
								<div class="post_info">
									<small>Category - <?php echo substr($value['CreatedDate'],0,11); ?></small>
									<h2><a href="blog-post.html"><?php echo isset($value['Title']) && $value['Title'] != '' ? $value['Title'] : ''; ?></a></h2>
									<p><?php echo isset($value['Description']) && $value['Description'] != '' ? $value['Description'] : ''; ?></p>
									<ul>
										<li>
											<div class="thumb"><img src="<?php echo base_url('assets/img/avatar.jpg');?>" alt=""></div> <?php echo isset($value['AuthorName']) && $value['AuthorName'] != '' ? $value['AuthorName'] : ''; ?>
										</li>
										<li><i class="icon_comment_alt"></i>20</li>
									</ul>
								</div>
							</article>
							<!-- /article -->
						</div>
						<!-- /col -->
						<?php }}
							else{ ?>
								<div class="col-lg-12 blog-no-data-div">
									<p class="blog-data-message">Data not found.</p>
								</div>
							<?php } ?>						
						
					</div>
					<!-- /row -->

					
				</div>
				<!-- /col -->

				<aside class="col-lg-3">
				
					<div class="widget">
				
						<div class="widget-title first">
						<div class="form-group">
			                  <a href="<?php echo base_url('Blog/AddBlog');?>"> <input  class="btn_1 gradient type="submit" value="Contact Us  " placeholder = "Send us a Message"></a>
			                </div>	
						<h3>Latest Post</h3>

						</div>
						<ul class="comments-list">
							<li>
								<div class="alignleft">
									<a href="#0"><img src="<?php echo base_url('assets/img/blog-5.jpg');?>" alt=""></a>
								</div>
								<small>Category - 11.08.2016</small>
								<h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
							</li>
							<li>
								<div class="alignleft">
									<a href="#0"><img src="<?php echo base_url('assets/img/blog-6.jpg');?>" alt=""></a>
								</div>
								<small>Category - 11.08.2016</small>
								<h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
							</li>
							<li>
								<div class="alignleft">
									<a href="#0"><img src="<?php echo base_url('assets/img/blog-4.jpg');?>" alt=""></a>
								</div>
								<small>Category - 11.08.2016</small>
								<h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
							</li>
						</ul>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Categories</h4>
						</div>
						<ul class="cats">
							<li><a href="#">Food <span>(12)</span></a></li>
							<li><a href="#">Places to visit <span>(21)</span></a></li>
							<li><a href="#">New Places <span>(44)</span></a></li>
							<li><a href="#">Suggestions and guides <span>(31)</span></a></li>
						</ul>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Popular Tags</h4>
						</div>
						<div class="tags">
							<a href="#">Food</a>
							<a href="#">Bars</a>
							<a href="#">Cooktails</a>
							<a href="#">Shops</a>
							<a href="#">Best Offers</a>
							<a href="#">Transports</a>
							<a href="#">Restaurants</a>
						</div>
					</div>
					<!-- /widget -->
				</aside>
				<!-- /aside -->
			</div>
			<!-- /row -->	
		</div>
		<!-- /container -->
		
	</main>
	<!-- /main -->