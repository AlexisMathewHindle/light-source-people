<?php
/**
 * The contact about template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */

get_header(); ?>
<div class="about">
    <div class="container-fluid introduction">
        <div class="container">
            <div class="row">
                <img src="<?php echo get_template_directory_uri();?>/images/about_us_illustration.png" class="img-responsive">
                <div class="col-md-12">
                    <div class="heading">
                        Introduction to Light Source People …
                    </div>

                    <!-- <div class="subheading">
                        We are a small expeirenced team with over 40+ years experience.
                    </div> -->

                    <div class="content">
‘Light Source People’ is a specialist recruiter dedicated to servicing the international energy industry.  We cover permanent and contract positions across the full spectrum of power generation sources.  With 20 years’ experience, gleaned servicing clients and candidates the world over we understand the value of identifying and sourcing market leading talent and providing them with the right opportunity in which to thrive.  Here at Light Source People the emphasis is on listening and truly understanding the needs of our customers.  Only then can we ensure we provide market leading service levels that make a real difference to our customers. For an informal confidential discussion to find out if we can help you, please call… 020 3905 6222
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
                        Commercial Director<br>
                        Renewable Energy Industry
                    </div>


                    <div class="left-quote">
                        <img src="<?php echo get_template_directory_uri() ?>/images/left-quote.png" alt="">
                    </div>


                    <div class="right-quote">
                        <img src="<?php echo get_template_directory_uri() ?>/images/right-quote.png" alt="">
                    </div>

                    <div class="quote">
                        <p>Light Source People are an excellent recruitment partner, with an approach which is not too pushy, but well-researched and thoughtful. They have a very good knowledge of the renewables sector, across a number of different fields and businesses, which means their placements are an excellent fit, both in the skill and culture match required – Commercial Director, Renewable Energy Industry</p>
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
                            Join the Team at Light Source People!
                        </div>
                        <div class="copy">
                            Send us a short email with a copy of your CV and we will be in touch!
                        </div>
                        <a href="<?php echo get_permalink(36); ?>" class="testimonial-btn">Contact Us</a>
                    </div>
                    <div class="rss-feed">
                        <div class="heading">
                            CAREERS
                        </div>
                        <div class="title">
                            Ever considered a career in recruitment?
                        </div>
                        <div class="copy">
                            If you want to be a part of our dynamic growing company and add value to its customers, we currently have vacancies from Researcher to Associate Director.  Call Adam Grainger on <span>020 3905 6222</span> or email
                        </div>
                        <div class="timestamp">
                            <a href="<?php echo get_permalink(50); ?>">Apply Now <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
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
