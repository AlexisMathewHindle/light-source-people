<?php
/**
 * The contact about template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */

get_header(); ?>
<div class="container-fluid dream-role">
    <div class="container">
        <div class="row visible-xs visible-sm">
            <form>
                <div class="col-md-12">
                    My dream role is...
                </div>
                <div class="col-md-4">
                    <input type="text" name="" autocomplete="off" placeholder="Job Role" id="role">
                </div>
                <div class="col-md-4">
                    <input type="text" name="" id="location" autocomplete="off" placeholder="Location">
                </div>
                <div class="col-md-4">
                    <button class="search-btn">Search</button>
                </div>
            </form>
        </div>
        <div class="row visible-lg">
            <div class="col-md-12">
                <form>
                    My dream role is...
                    <input type="text" name="" autocomplete="off" placeholder="Job Role" id="role"> in
                    <input type="text" name="" id="location" autocomplete="off" placeholder="Location">
                    <button class="search-btn">Search</button>
                </form>
            </div>
        </div>

    </div>
</div>
<!--/dream role-->

<div class="about">
    <div class="container-fluid introduction">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        Introduction to Light Source People …
                    </div>

                    <div class="subheading">
                        We are a small expeirenced team with over 40+ years experience.
                    </div>

                    <div class="content">
                        Lorem ipsum dolor sit amet, id nam nemore elaboraret, ius no epicuri splendide disputando, cetero facilis lucilius no pri. Error deseruisse id cum. Vide audiam sensibus eu vis. Ut pri prompta virtute pertinacia, eu quo idque inani neglegentur. Lorem ipsum dolor sit amet, id nam nemore elaboraret, ius no epicuri splendide disputando, cetero facilis lucilius no pri. Error deseruisse id cum. Vide audiam sensibus eu vis. Ut pri prompta virtute pertinacia, eu quo idque inani neglegentur.Lorem ipsum dolor sit amet, id nam nemore elaboraret, ius no epicuri splendide disputando, cetero facilis lucilius no pri. Error deseruisse id cum. Vide audiam sensibus eu vis. Ut pri prompta virtute pertinacia, eu quo idque inani neglegentur.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                    <img src="<?php echo get_template_directory_uri() ?>/images/director.png" class="img-responsive">
                </div>
                <div class="col-md-3">
                    <div class="name">
                        Adam Grainger
                    </div>
                    <div class="job-title">
                        Managing Director
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid testimonial-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        TESTIMONIAL
                    </div>
                    <div class="heading">
                        Geni Design Limited
                    </div>


                    <div class="left-quote">
                        <img src="<?php echo get_template_directory_uri() ?>/images/left-quote.png" alt="">
                    </div>


                    <div class="right-quote">
                        <img src="<?php echo get_template_directory_uri() ?>/images/right-quote.png" alt="">
                    </div>

                    <div class="quote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>


                    <div class="timestamp">
                        11 August 2016
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/testimonial about -->

    <div class="container-fluid clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial">
                        <div class="heading">
                            Joing the Team at Light Source People!
                        </div>
                        <div class="copy">
                            Send us a short email with a copy of your CV and we will be in touch!
                        </div>
                        <a href="#" class="testimonial-btn">Contact Us</a>
                    </div>
                    <div class="rss-feed">
                        <div class="heading">
                            CAREERS
                        </div>
                        <div class="title">
                            Ever considered a career in recruitment?
                        </div>
                        <div class="copy">
                            Australia’s government has preliminarily blocked Chinese and Hong Kong bidders from taking a controlling stake in the country’s largest electricity network, citing worries over national security.
                        </div>
                        <div class="timestamp">
                            <a href="#">Apply Now <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/clients-->
</div>
<!--/about-->
<?php get_footer(); ?>
