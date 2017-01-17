<?php
/**
 * The front page template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */
get_header(); ?>
<div class="home">

    <div class="container-fluid hero">
        <div class="tagline">
            The Energy Recruitment Sepcialists
        </div>
        <div class="contact-tel-main">
            0208 123 4567
        </div>
        <div class="info">
            Call us and speak to our industry employement specialists
        </div>

        <div class="down-arrow">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </div>


    </div>
    <!--/hero-->

    <div class="container-fluid connecting-people">
        <span class="light">Connecting</span> People &AMP; Careers
        <span><a href="#">See Vancancies <i class="fa fa-chevron-right" aria-hidden="true"></i></a></span>
    </div>
    <!--/connecting people-->

    <div class="container-fluid signup">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form id="signup-form">
                        <div class="col-md-3 col-md-offset-1">
                            <input type="text" name="" autocomplete="off" placeholder="Email Address">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="" autocomplete="off" placeholder="Contact Number (Optional)">
                        </div>
                        <div class="col-md-2">
                            <span class="upload-cv"><i class="fa fa-upload" aria-hidden="true"></i> Upload CV</span>
                        </div>
                        <div class="col-md-2">
                            <button class="signup-btn">Sign Up</button>
                        </div>
                    </form>
                    <div class="copy">
                        *Sign up to our mailing list to get updates and alerts on new vacancies
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/signup-->


    <div class="container-fluid summary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        Welcome to <span>Light Source People</span>
                    </div>
                    <div class="subheading">
                        The Engery Recruitment Sepcialists
                    </div>
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/summary-->


    <div class="container-fluid clients">
        <div class="container">
            <div class="row visible-xs visible-sm">

                <div class="col-md-12">


                    <div class="testimonial">
                        <div class="heading">
                            See what our clients think!
                        </div>
                        <div class="copy">
                            View our client testimonials and see how we have helped our client succeed.
                        </div>
                        <a href="#" class="testimonial-btn">Testimonials</a>
                    </div>

                    <div class="rss-feed">
                        <div class="heading">
                            RSS FEED
                        </div>
                        <div class="title">
                            Australia blocks Chinese firm from stake in electricity grid
                        </div>
                        <div class="copy">
                            Australia’s government has preliminarily blocked Chinese and Hong Kong bidders from taking a controlling stake in the country’s largest electricity network, citing worries over national security.
                        </div>
                        <div class="timestamp">
                            December 10 2016
                        </div>
                    </div>


                </div>





            </div>

            <div class="row visible-lg">
                <div class="col-md-12">
                    <div class="testimonial">
                        <div class="heading">
                            See what our clients think!
                        </div>
                        <div class="copy">
                            View our client testimonials and see how we have helped our client succeed.
                        </div>
                        <a href="#" class="testimonial-btn">Testimonials</a>
                    </div>
                    <div class="rss-feed">
                        <div class="heading">
                            RSS FEED
                        </div>
                        <div class="title">
                            Australia blocks Chinese firm from stake in electricity grid
                        </div>
                        <div class="copy">
                            Australia’s government has preliminarily blocked Chinese and Hong Kong bidders from taking a controlling stake in the country’s largest electricity network, citing worries over national security.
                        </div>
                        <div class="timestamp">
                            December 10 2016
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/clients-->


    <div class="container-fluid current-vacancies">
        <div class="container">
            <div class="col-md-12">
                <div class="heading">
                    Current Vacancies
                </div>
                <span class="see-vacancies"><a href="#">See Vancancies <i class="fa fa-chevron-right" aria-hidden="true"></i></a></span>
            </div>
        </div>
    </div>
    <!--/current vacancies-->




    <?php echo do_shortcode("[wpjb_jobs_list]"); ?>



</div>
<!--/home-->







<?php get_footer(); ?>