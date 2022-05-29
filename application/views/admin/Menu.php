 <!-- /box_general -->
 <form method="post"  action="<?php echo base_url('Admin/Menu');?>" autocomplete = "off">
     <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-list"></i>Add item to Menu List</h2>
                </div>
    
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
                            <div class="col-xl-3">
                            </div>
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
                                <p><button type="submit" value="Save" class="btn_1 medium gray">Save</button></p>
                                <!-- <div class="form-group">
                                    <label>Short description</label>
                                    <input type="text" name="menu_item_description" class="form-control">
                                </div> -->
                                <!-- <div class="form-group">
                                    <label>Item options</label>
                                    <div class="item_opt_wrapper">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="+ $3.50">
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Ex. Medium">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group radio_c_group">
                                                    <label class="container_radio">Checkbox
                                                        <input type="radio" value="checkbox" name="option_item_settings_1" checked="checked">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container_radio">Radio
                                                        <input type="radio" value="checkbox" name="option_item_settings_1">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- /row--> 
                                    <!-- </div> --> 
                                     <!-- /item_opt_wrapper -->
                                    <!-- <div class="item_opt_wrapper" style="background-color: #fff;">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="+ $5.50">
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Ex. Large">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group radio_c_group">
                                                    <label class="container_radio">Checkbox
                                                        <input type="radio" value="checkbox" name="option_item_settings_2" checked="checked">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container_radio">Radio
                                                        <input type="radio" value="checkbox" name="option_item_settings_2">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div> --> 
                                        <!-- /row --> 
                                    <!-- </div> -->
                                    <!-- /item_opt_wrapper-->
                                 <!-- </div> --> 
                                <!-- End form-group -->
                                <!-- <div class="form-group"> -->
                                    <!-- <label>Item ingredients</label>
                                    <div class="item_opt_wrapper">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="+ $2.50">
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Ex. Extra tomato">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group radio_c_group">
                                                    <label class="container_radio">Checkbox
                                                        <input type="radio" value="checkbox" name="option_item_settings_3" checked="checked">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container_radio">Radio
                                                        <input type="radio" value="checkbox" name="option_item_settings_3">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div> -->
                                           <!-- /row-->
                                    <!-- </div> --> 
                                    <!-- /item_opt_wrapper-->
                                     <!-- <div class="item_opt_wrapper" style="background-color: #fff;">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="+ $6.50">
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Ex. Extra pepper">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group radio_c_group">
                                                    <label class="container_radio">Checkbox
                                                        <input type="radio" value="checkbox" name="option_item_settings_4" checked="checked">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container_radio">Radio
                                                        <input type="radio" value="checkbox" name="option_item_settings_4">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div> -->
                                        <!-- </div> --> 
                                        <!-- /row-->
                                    <!-- </div> --> 
                                    <!-- End form-group -->
                                <!-- </div> --> 
                            </div> 
                            <!-- End row -->
                        </div>
                        <!-- End strip_menu_items -->
                    </div> 
                    <!-- /box_general-->
                </div> 
                <!-- /.container-fluid-->
            </div>
            <!-- /.container-wrapper