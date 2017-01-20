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
            020 3905 6222
        </div>
        <div class="info">
            Call us and speak to our industry employment specialists
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
                        The Energy Recruitment Sepcialists
                    </div>
                    <div class="content">
        Light Source People’ is a specialist recruiter dedicated to servicing the international energy industry.  We cover permanent and contract positions across the full spectrum of power generation sources.  With 20 years’ experience, gleaned servicing clients and candidates the world over we understand the value of identifying and sourcing market leading talent and providing them with the right opportunity in which to thrive.  Here at Light Source People the emphasis is on listening and truly understanding the needs of our customers.  Only then can we ensure we provide market leading service levels that make a real difference to our customers.
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
                        <a href="<?php echo get_permalink(62) ?>" class="testimonial-btn">Testimonials</a>
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
                        <a href="<?php echo get_permalink(62) ?>" class="testimonial-btn">Testimonials</a>
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
                <span class="see-vacancies"><a href="<?php echo get_permalink(56) ?>">See Vancancies <i class="fa fa-chevron-right" aria-hidden="true"></i></a></span>
            </div>
        </div>
    </div>
    <!--/current vacancies-->




    <?php echo do_shortcode("[wpjb_jobs_list count=3]"); ?>



</div>
<!--/home-->







<?php get_footer(); ?>
