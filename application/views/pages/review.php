<link href="<?php echo base_url('assets/css/review.css');?>" rel="stylesheet">
<main class="bg_gray">
<form method="post"  action="<?php echo base_url('Review/validation');?>" autocomplete = "off">
		<div class="container margin_60_20">
		    <div class="row justify-content-center">
		
			<div class="col-lg-8">
		            <div class="box_general write_review">
		                <h1 class="add_bottom_15">Write a review for "Pizzeria Da Alfredo"</h1>
		                <label class="d-block add_bottom_15">Overall rating</label>
		                <div class="row">
		                    <div class="col-md-3 add_bottom_25">
		                        <div class="add_bottom_15">Food Quality <strong class="food_quality_val"></strong></div>
		                        <input type="range" min="0" max="10" step="1" value="0" data-orientation="horizontal" name="food_quality">
		                    </div>
		                    <div class="col-md-3 add_bottom_25">
		                        <div class="add_bottom_15">Service <strong class="service_val"></strong></div>
		                        <input type="range" min="0" max="10" step="1" value="0" data-orientation="horizontal"  name="service">
		                    </div>
		                    <div class="col-md-3 add_bottom_25">
		                        <div class="add_bottom_15">Punctuality <strong class="location_val"></strong></div>
		                        <input type="range" min="0" max="10" step="1" value="0" data-orientation="horizontal"  name="punctuality">
		                    </div>
		                    <div class="col-md-3 add_bottom_25">
		                        <div class="add_bottom_15">Price <strong class="price_val"></strong></div>
		                        <input type="range" min="0" max="10" step="1" value="0" data-orientation="horizontal"  name="price">
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label>Title of your review</label>
		                    <input class="form-control" type="text"  name="rev_title" placeholder="If you could say it in one sentence, what would you say?">
		                </div>
		                <div class="form-group">
		                    <label>Your review</label>
		                    <textarea class="form-control" style="height: 180px;"  name="rev_desc" placeholder="Write your review to help others learn about this online business"></textarea>
		                </div>
		                <button type="submit" value="Submit Review" class="btn_1">Submit review</a>
		            </div>
		        </div>
		    </div>
		    <!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
	<!-- /main -->