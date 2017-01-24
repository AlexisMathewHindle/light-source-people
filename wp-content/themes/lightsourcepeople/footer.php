<?php
/**
 * The template for displaying the footer
 *
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */
?>
<div class="container-fluid footer-top">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <ul>
                    <li class="heading">Quick Links</li>
                    <li><a href="<?php echo bloginfo('url') ?>/privacy-policy">Privacy Policy</a></li>
                    <li><a href="<?php echo bloginfo('url') ?>/copyright-trademark/">Terms & Conditions</a></li>
                    <li><a href="<?php echo bloginfo('url');?>/work-with-us">Work With Us</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul>
                    <li class="heading">Vacancies</li>
                    <li><a href="<?php echo bloginfo('url') ?>/vacancies">See all Vacancies</a></li>
                    <li><a href="<?php echo bloginfo('url') ?>/clients">List your Vacancy</a></li>
                    <li><a href="<?php echo bloginfo('url') ?>/contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul>
                    <li class="heading">Contact</a></li>
                    <li><a href="#">Adam Grainger</a></li>
                    <li><a href="#">020 3905 6222</a></li>
                    <li><a href="mailto:hello@lightsourcepeople.com">hello@lightsourcepeople.com</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <a href="<?php bloginfo('url');?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo_white.svg" class="logo-footer"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="author">
                    Website by <a href="http://www.tjarksandtjarks.com/" target="_blank">Tjarks and Tjarks</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="social-footer">
                    <span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                    <span><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                    <span><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
                    <!-- <span><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></span> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<?php wp_footer(); ?>
</body>
</html>