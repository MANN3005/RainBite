<footer>
        <div class="wave footer"></div>
        <div class="container margin_60_40 fix_mobile">

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_1">Quick Links</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_1">
                        <ul>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="<?php echo base_url('SubmitRestaurant');?>">Add your restaurant</a></li>
                            <li><a href="<?php echo base_url('Help');?>">Help</a></li>
                            <li><a href="<?php echo base_url('ComingSoon');?>">Coming Soon</a></li
                            ><li><a href="<?php echo base_url('Blog');?>">Blog</a></li>
                            <li><a href="<?php echo base_url('Contact');?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_2">Categories</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_2">
                        <ul>
                            <li><a href="<?php echo base_url('Order');?>">Top Categories</a></li>
                            <li><a href="<?php echo base_url('Order');?>">Best Rated</a></li>
                            <li><a href="<?php echo base_url('Order');?>">Best Price</a></li>
                            <li><a href="<?php echo base_url('Order');?>">Latest Submissions</a></li> <
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_3">Contacts</h3>
                    <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                        <ul>
                            <li><i class="icon_house_alt"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                            <li><i class="icon_mobile"></i>+94 423-23-221</li>
                            <li><i class="icon_mail_alt"></i><a href="#0">info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_4">Keep in touch</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_4">
                        <div id="newsletter">
                            <div id="message-newsletter"></div>
                            <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                    <button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="follow_us">
                            <h5>Follow Us</h5>
                            <ul>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php echo base_url('assets/img/twitter_icon.svg');?>" alt="" class="lazy"></a></li>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php echo base_url('assets/img/facebook_icon.svg');?>" alt="" class="lazy"></a></li>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php echo base_url('assets/img/instagram_icon.svg');?>" alt="" class="lazy"></a></li>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php echo base_url('assets/img/youtube_icon.svg');?>" alt="" class="lazy"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row-->
            <div class="row add_bottom_25">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    <ul class="additional_links">
                        <li><a href="#0">Terms and conditions</a></li>
                        <li><a href="#0">Privacy</a></li>
                        <li><span>© RainBite</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
    <!-- Sign In Modal -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="modal_header">
        <h3>Sign In</h3>
    </div>
    <form method="post"  action="<?php echo base_url('Login/validation');?>" autocomplete = "off">
        <div class="sign-in-wrapper">
            <?php
                if($this->session->flashdata('error'))
                    { ?>
                        <div   id="pass-info" class="weakpass">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
            <?php } ?> 
            <a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
            <label>Email</label>
                <input type="email" class="form-control" name="email" >
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password"  value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <label class="container_check">Remember me
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <div class="text-center">
                <input type="submit" value="LogIn"  name = "Login" class="btn_1 full-width mb_5">
                Don’t have an account? <a href="<?php echo base_url('Signup');?>"> Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Modal -->


    <div id="toTop"></div><!-- Back to top button -->
    


<!-- COMMON SCRIPTS -->
<script src="<?php echo base_url('assets/js/common_scripts.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/common_func.js');?>"></script>
<script src="<?php echo base_url('assets/validate.js');?>"></script>

<!-- Video header -->
<script src="<?php echo base_url('assets/js/modernizr.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/video_header.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/sticky_sidebar.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/specific_listing.js');?>"></script>
<script src="<?php echo base_url('assets/js/pw_strenght.js');?>"></script>
<script>
    HeaderVideo.init({
        container: $('.header-video'),
        header: $('.header-video--media'),
        videoTrigger: $("#video-trigger"),
        autoPlayVideo: true
    });
</script>
<script src="<?php echo base_url('assets/js/typed.min.js');?>"></script>
    <script>
        var typed = new Typed('.element', {
          strings: ["at the best price", "with unique food", "with nice location"],
          startDelay: 10,
          loop: true,
          backDelay: 2000,
          typeSpeed: 50
        });
    </script>
<!-- Autocomplete -->
<script>
function initMap() {
    var input = document.getElementById('autocomplete');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
        }

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }
    });
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap"></script>

</body>
</html>