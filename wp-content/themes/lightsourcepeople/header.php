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
            <li><a href="<?php echo get_permalink(38); ?>">About</a></li>
            <li><a href="<?php echo get_permalink(28); ?>">Clients</a></li>
            <li><a href="<?php echo get_permalink(30); ?>">Candidates <i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
            <li><a href="<?php echo get_permalink(32); ?>">Vacancies</a></li>
            <li><a href="<?php echo get_permalink(34); ?>">Careers</a></li>
            <li><a href="<?php echo get_permalink(36); ?>">Contact</a></li>
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
                            <li><a href="/"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" class="logo"></li>
                            <li><a href="<?php echo get_permalink(38); ?>">About</a></li>
                            <li><a href="<?php echo get_permalink(28); ?>">Clients</a></li>
                            <li>
                                <a href="<?php echo get_permalink(30); ?>">Candidates <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="<?php echo get_permalink(32); ?>">Vacancies</a></li>
                            <li><a href="<?php echo get_permalink(34); ?>">Careers</a></li>
                            <li><a href="<?php echo get_permalink(36); ?>">Contact</a></li>
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

<?php if(!is_front_page()): ?>
<div class="container-fluid vacancy-search">
    <form action="<?php echo get_permalink(56); ?>" method="get">    
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="query" placeholder="Keyword" autocomplete="off">
                </div>
                <div class="col-md-3">
                    <input type="text" name="location" placeholder="Location" autocomplete="off">
                </div>
                <div class="col-md-3">
                   <select class="form-control job-type-select" name="type">
                      <option value="3">Permanent</option>
                      <option value="5">Contract</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button>Update Results</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php endif; ?>


