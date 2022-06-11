<div class="content-wrapper">
            <!-- /box_general-->
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-list"></i>Add item to Menu List</h2>
                </div>
                <form method="post" action="<?php echo base_url('Admin/menu');?>">
                <div class="wrapper_indent">
                    <div class="form-group">
                        <label>Menu Category</label>
                        <input type="text" name="menu_category"  value="<?php echo set_value('menu_category');?>"class="form-control" placeholder="EX. Starters">
                    </div>
                    <div class="menu-item-section clearfix">
                        <h4>Menu item #1</h4>
                        <div><a href="#0"><i class="fa fa-plus-circle"></i></a><a href="#0"><i class="fa fa-minus-circle"></i></a>
                        </div>
                    </div>
                    <div class="strip_menu_items">
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="item_name"  value="<?php echo set_value('menu_category');?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price" value="<?php echo set_value('price');?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                        </div><!-- End strip_menu_items -->
                    </div>
                    <!-- /box_general-->
                </div>
                <!-- /.container-fluid-->
            </div>
            <!-- /.container-wrapper-->
            <p><button type="submit" value="Save" class="btn_1 medium gray">Save</button></p>
</form>