<?php
/**
 * The template for displaying the header
 *
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */
?>
<!DOCTYPE html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">    
    <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <?php wp_head(); ?>
</head>
<body>
    <div class="container-fluid visible-sm visible-xs mobile-menu">
        <div class="row">
            <div class="col-md-12">
                <div class="hamburger">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" class="logo">
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid responsive-menu">
        <ul>
            <?php wp_nav_menu( array( 
                'theme_location' => 'header-menu',
                'container' => false,
                'items_wrap' => '%3$s',
            ) ); ?>
        </ul>
    </div>
    <!--/responsive menu-->
    
    <div class="container-fluid contact visible-lg visible-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact">
                        <span class="tel">020 3905 6222</span>
                        <a href="mailto:mail@lightsourcepeople.com"><span class="mail">mail@lightsourcepeople.com</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/contact-->

    <div class="container-fluid lsp-navbar visible-lg visible-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="social-links">
                        <ul>
                            <li><a href="#" title="facebook" alt="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" title="twitter" alt="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" title="linkedin" alt="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" title="instagram" alt="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="navigation">
                        <ul>   
                            <li>
                                <a href="/">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" class="logo">
                                </a>
                            </li>                                     
                            <?php wp_nav_menu( array( 
                                'theme_location' => 'header-menu',
                                'container' => false,
                                'items_wrap' => '%3$s',
                                'link_after' => ' <i class="fa fa-chevron-down" aria-hidden="true"></i>'
                            ) ); ?>
                        </ul>                                                
                    </div><!--/navigation-->
                </div>
            </div>
        </div>
    </div>
    <!--/navbar-->

    <div class="container-fluid stroke">
    </div>
    <!--/stroke-->