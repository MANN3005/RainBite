<div class="container margin_60_20">
		    <h5 class="mb_5">Add Your Blog</h5>
		    <div class="row">
		        <div class="col-lg-4 col-md-6 add_bottom_25">
		            <div id="message-contact"><?php echo validation_errors(); ?></div>
			            <form method="post" action="<?php echo base_url('Blog/AddBlog');?>"   enctype="multipart/form-data" autocomplete="off">
			                <div class="form-group">
			                    <input class="form-control" type="text" placeholder="Title"   name="title" maxlength=40 required value="<?php echo set_value('title'); ?>">
			                </div>
			                <div class="form-group">
			                    <input class="form-control" type="text" placeholder="Description"   name="description" maxlength=40 required value="<?php echo set_value('description'); ?>">
			                </div>
							<div class="form-group">
                            <input name="blog_image" id="blog_image" type="file"/ required >
			                </div>
			                <div class="form-group">
			                    <textarea class="form-control"  type ="text"style="height: 150px;" placeholder="Message"  name="message" maxlength=255 required value="<?php echo set_value('message'); ?>"></textarea>
			                	<span><?php echo form_error('message'); ?></span>
							</div>
                            <select name="status">
                  <option value="Active" >Active</option>
                  <option value="Inactive"  >Inactive</option>
                </select>
                <label class="control-label" for="status">Status</label><i class="mtrl-select"></i>
                <div class="form-group">                    
                <input name="author_name" id="author_name" placeholder = "Author Name" type="text" maxlength="50" value="<?php echo isset($blogs[0]['author_name']) && $blogs[0]['Author_Name'] != '' ? $blogs[0]['Author_Name'] : ''; ?>" required />
			                	<span><?php echo form_error('author_name'); ?></span>
                </div>
                <div class="form-group">
                <input name="created_date" id="posted_date" type="date" value="<?php echo isset($blogs[0]['Created_Date']) && $blogs[0]['Created_Date'] != '' ? $blogs[0]['Created_Date'] : ''; ?>" required />
			                	<span><?php echo form_error('created_date'); ?></span>
                </div>         

			                <div class="form-group">
			                    <input class="btn_1 gradient full-width" type="submit" value="Add Blog">
			                </div>
			            </form>
		        	</div>
		           </div>
		    </div>
		    <!-- /row -->
		</div>