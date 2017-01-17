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
                    <li><a href="#" class="heading">Quick Links</a>
                    </li>
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'quick-links-menu',
                        'container' => false,
                        'items_wrap' => '%3$s',
                    ) ); ?>
                </ul>
            </div>
            <div class="col-md-2">
                <ul>
                    <li><a href="#" class="heading">Vacancies</a>
                    </li>
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'vacancies-links-menu',
                        'container' => false,
                        'items_wrap' => '%3$s',
                    ) ); ?>
                </ul>
            </div>
            <div class="col-md-2">
                <ul>
                    <li><a href="#" class="heading">Contact</a>
                    </li>
                    <li><a href="#">Adam Grainger</a>
                    </li>
                    <li><a href="#">020 3905 6222</a>
                    </li>
                    <li><a href="#">adam@lightsourcepeople.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo_white.svg" class="logo-footer">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="author">
                    Website by <a href="#">Tjarks and Tjarks</a>
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
                    <span><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<?php wp_footer(); ?>
</body>
</html>