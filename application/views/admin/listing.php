<!DOCTYPE html>
<html lang="en">

    <!-- /Navigation-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add listing</li>
            </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Basic info</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Listing Title</label>
                            <input type="text" class="form-control" placeholder="Da Alfredo">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category</label>
                            <div class="styled-select">
                            <input type="text" class="form-control" placeholder="Category">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                   
                    <div class="col-md-6">
                        <div class="form-group radio_c_group no_label">
                            <label class="container_radio">Delivery
                                <input type="radio" value="checkbox" name="service" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio">Takeaway
                                <input type="radio" value="checkbox" name="service">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio">Both
                                <input type="radio" value="checkbox" name="service">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description</label>
                            <div class="editor"></div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone (Optional)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email (Optional)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- /row-->
                
                <!-- /row-->
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Photos</label>
                            <form action="/file-upload" class="dropzone"></form>
                        </div>
                    </div>
                </div> -->
                <!-- /row-->
            </div>
            <!-- /box_general-->
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-map-marker"></i>Location</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Select City</label>
                            <div class="styled-select">
                            <input type="text" class="form-control" placeholder="City">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="ex. 250, Fifth Avenue...">
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>PinCode</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- /row-->
            </div>
            <!-- /box_general-->
            <!-- <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-clock-o"></i>Opening</h2>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label class="fix_spacing">Monday</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="styled-select">
                                <select>
                                    <option>Opening Time</option>
                                    <option>Closed</option>
                                    <option>1 AM</option>
                                    <option>2 AM</option>
                                    <option>3 AM</option>
                                    <option>4 AM</option>
                                    <option>5 AM</option>
                                    <option>6 AM</option>
                                    <option>7 AM</option>
                                    <option>8 AM</option>
                                    <option>9 AM</option>
                                    <option>10 AM</option>
                                    <option>11 AM</option>
                                    <option>12 AM</option>
                                    <option>1 PM</option>
                                    <option>2 PM</option>
                                    <option>3 PM</option>
                                    <option>4 PM</option>
                                    <option>5 PM</option>
                                    <option>6 PM</option>
                                    <option>7 PM</option>
                                    <option>8 PM</option>
                                    <option>9 PM</option>
                                    <option>10 PM</option>
                                    <option>11 PM</option>
                                    <option>12 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="styled-select">
                                <select>
                                    <option>Closing Time</option>
                                    <option>Closed</option>
                                    <option>1 AM</option>
                                    <option>2 AM</option>
                                    <option>3 AM</option>
                                    <option>4 AM</option>
                                    <option>5 AM</option>
                                    <option>6 AM</option>
                                    <option>7 AM</option>
                                    <option>8 AM</option>
                                    <option>9 AM</option>
                                    <option>10 AM</option>
                                    <option>11 AM</option>
                                    <option>12 AM</option>
                                    <option>1 PM</option>
                                    <option>2 PM</option>
                                    <option>3 PM</option>
                                    <option>4 PM</option>
                                    <option>5 PM</option>
                                    <option>6 PM</option>
                                    <option>7 PM</option>
                                    <option>8 PM</option>
                                    <option>9 PM</option>
                                    <option>10 PM</option>
                                    <option>11 PM</option>
                                    <option>12 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!- /row-->
                <!-- <div class="row">
                    <div class="col-md-2">
                        <label class="fix_spacing">Tuesday</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="styled-select">
                                <select>
                                    <option>Opening Time</option>
                                    <option>Closed</option>
                                    <option>1 AM</option>
                                    <option>2 AM</option>
                                    <option>3 AM</option>
                                    <option>4 AM</option>
                                    <option>5 AM</option>
                                    <option>6 AM</option>
                                    <option>7 AM</option>
                                    <option>8 AM</option>
                                    <option>9 AM</option>
                                    <option>10 AM</option>
                                    <option>11 AM</option>
                                    <option>12 AM</option>
                                    <option>1 PM</option>
                                    <option>2 PM</option>
                                    <option>3 PM</option>
                                    <option>4 PM</option>
                                    <option>5 PM</option>
                                    <option>6 PM</option>
                                    <option>7 PM</option>
                                    <option>8 PM</option>
                                    <option>9 PM</option>
                                    <option>10 PM</option>
                                    <option>11 PM</option>
                                    <option>12 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="styled-select">
                                <select>
                                    <option>Closing Time</option>
                                    <option>Closed</option>
                                    <option>1 AM</option>
                                    <option>2 AM</option>
                                    <option>3 AM</option>
                                    <option>4 AM</option>
                                    <option>5 AM</option>
                                    <option>6 AM</option>
                                    <option>7 AM</option>
                                    <option>8 AM</option>
                                    <option>9 AM</option>
                                    <option>10 AM</option>
                                    <option>11 AM</option>
                                    <option>12 AM</option>
                                    <option>1 PM</option>
                                    <option>2 PM</option>
                                    <option>3 PM</option>
                                    <option>4 PM</option>
                                    <option>5 PM</option>
                                    <option>6 PM</option>
                                    <option>7 PM</option>
                                    <option>8 PM</option>
                                    <option>9 PM</option>
                                    <option>10 PM</option>
                                    <option>11 PM</option>
                                    <option>12 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!- /row-->
                <!-- <div class="row">
                    <div class="col-md-2">
                        <label class="fix_spacing">Wednesday</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="styled-select">
                                <select>
                                    <option>Opening Time</option>
                                    <option>Closed</option>
                                    <option>1 AM</option>
                                    <option>2 AM</option>
                                    <option>3 AM</option>
                                    <option>4 AM</option>
                                    <option>5 AM</option>
                                    <option>6 AM</option>
                                    <option>7 AM</option>
                                    <option>8 AM</option>
                                    <option>9 AM</option>
                                    <option>10 AM</option>
                                    <option>11 AM</option>
                                    <option>12 AM</option>
                                    <option>1 PM</option>
                                    <option>2 PM</option>
                                    <option>3 PM</option>
                                    <option>4 PM</option>
                                    <option>5 PM</option>
                                    <option>6 PM</option>
                                    <option>7 PM</option>
                                    <option>8 PM</option>
                                    <option>9 PM</option>
                                    <option>10 PM</option>
                                    <option>11 PM</option>
                                    <option>12 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="styled-select">
                                <select>
                                    <option>Closing Time</option>
                                    <option>Closed</option>
                                    <option>1 AM</option>
                                    <option>2 AM</option>
                                    <option>3 AM</option>
                                    <option>4 AM</option>
                                    <option>5 AM</option>
                                    <option>6 AM</option>
                                    <option>7 AM</option>
                                    <option>8 AM</option>
                                    <option>9 AM</option>
                                    <option>10 AM</option>
                                    <option>11 AM</option>
                                    <option>12 AM</option>
                                    <option>1 PM</option>
                                    <option>2 PM</option>
                                    <option>3 PM</option>
                                    <option>4 PM</option>
                                    <option>5 PM</option>
                                    <option>6 PM</option>
                                    <option>7 PM</option>
                                    <option>8 PM</option>
                                    <option>9 PM</option>
                                    <option>10 PM</option>
                                    <option>11 PM</option>
                                    <option>12 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- /row-->
                <!-- <div class="row">
                    <div class="col-md-2">
                        <label class="fix_spacing">Thursday</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="styled-select">
                                <select>
                                    <option>Opening Time</option>
                                    <option>Closed</option>
                                    <option>1 AM</option>
                                    <option>2 AM</option>
                                    <option>3 AM</option>
                                    <option>4 AM</option>
                                    <option>5 AM</option>
                                    <option>6 AM</option>
                                    <option>7 AM</option>
                                    <option>8 AM</option>
                                    <option>9 AM</option>
                                    <option>10 AM</option>
                                    <option>11 AM</option>
                                    <option>12 AM</option>
                                    <option>1 PM</option>
                                    <option>2 PM</option>
                                    <option>3 PM</option>
                                    <option>4 PM</option>
                                    <option>5 PM</option>
                                    <option>6 PM</option>
                                    <option>7 PM</option>
                                    <option>8 PM</option>
                                    <option>9 PM</option>
                                    <option>10 PM</option>
                                    <option>11 PM</option>
                                    <option>12 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="styled-select">
                                <select>
                                    <option>Closing Time</option>
                                    <option>Closed</option>
                                    <option>1 AM</option>
                                    <option>2 AM</option>
                                    <option>3 AM</option>
                                    <option>4 AM</option>
                                    <option>5 AM</option>
                                    <option>6 AM</option>
                                    <option>7 AM</option>
                                    <option>8 AM</option>
                                    <option>9 AM</option>
                                    <option>10 AM</option>
                                    <option>11 AM</option>
                                    <option>12 AM</option>
                                    <option>1 PM</option>
                                    <option>2 PM</option>
                                    <option>3 PM</option>
                                    <option>4 PM</option>
                                    <option>5 PM</option>
                                    <option>6 PM</option>
                                    <option>7 PM</option>
                                    <option>8 PM</option>
                                    <option>9 PM</option>
                                    <option>10 PM</option>
                                    <option>11 PM</option>
                                    <option>12 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- /row-->
            <!-- </div>  -->
            <!-- /box_general-->
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-list"></i>Add item to Menu List</h2>
                </div>
                <div class="wrapper_indent">
                    <div class="form-group">
                        <label>Menu Category</label>
                        <input type="text" name="menu_category" class="form-control" placeholder="EX. Starters">
                    </div>
                    <div class="menu-item-section clearfix">
                        <h4>Menu item #1</h4>
                        <div><a href="#0"><i class="fa fa-plus-circle"></i></a><a href="#0"><i class="fa fa-minus-circle"></i></a>
                        </div>
                    </div>
                    <div class="strip_menu_items">
                        <div class="row">
                            <div class="col-xl-3">
                                <form action="/file-upload" class="dropzone"></form>
                            </div>
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="menu_item_title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="menu_item_title_price" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Short description</label>
                                    <input type="text" name="menu_item_description" class="form-control">
                                </div>
                                <div class="form-group">
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
                                        </div>
                                        <!-- /row-->
                                    </div>
                                    <!-- /item_opt_wrapper-->
                                    <div class="item_opt_wrapper" style="background-color: #fff;">
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
                                        </div>
                                        <!-- /row-->
                                    </div>
                                    <!-- /item_opt_wrapper-->
                                </div><!-- End form-group -->
                                <div class="form-group">
                                    <label>Item ingredients</label>
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
                                        </div>
                                        <!-- /row-->
                                    </div>
                                    <!-- /item_opt_wrapper-->
                                    <div class="item_opt_wrapper" style="background-color: #fff;">
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
                                            </div>
                                        </div>
                                        <!-- /row-->
                                    </div><!-- End form-group -->
                                </div>
                            </div><!-- End row -->
                        </div><!-- End strip_menu_items -->
                    </div>
                    <!-- /box_general-->
                </div>
                <!-- /.container-fluid-->
            </div>
            <!-- /.container-wrapper-->
            <p><a href="#0" class="btn_1 medium">Save</a> <a href="#0" class="btn_1 medium gray">Add another item</a></p>
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © FOOYES 2021</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="#0">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

          
            
            <!-- WYSIWYG Editor -->
            
</body>

</html>