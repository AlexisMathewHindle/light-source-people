<?php
/**
 * The contact about template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */

get_header(); ?>

<?php 
    
    /* CUSTOM FIELDS */
    $testimonial_title_one      =   "testimonial_title_one";
    $testimonial_quote_one      =   "testimonial_quote_one";

    $testimonial_title_two      =   "testimonial_title_two";
    $testimonial_quote_two      =   "testimonial_quote_two";

    $testimonial_title_three    =   "testimonial_title_three";
    $testimonial_quote_three    =   "testimonial_quote_three";

    $testimonial_title_four     =   "testimonial_title_four";
    $testimonial_quote_four     =   "testimonial_quote_four";

    $testimonial_title_five     =   "testimonial_title_five";
    $testimonial_quote_five     =   "testimonial_quote_five";

    $testimonial_title_six      =   "testimonial_title_six";
    $testimonial_quote_six      =   "testimonial_quote_six";

?>
<div class="about">
    <div class="container-fluid introduction">
        <div class="container">
            <div class="row">
                <img src="<?php echo get_template_directory_uri();?>/images/about_us_illustration.png" class="img-responsive">
                <div class="col-md-12">
                    <div class="heading">
                        Introduction to Light Source People …
                    </div>

                    <div class="content">
                        <?php the_content() ;?>
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
                <div class="single-testimonial">
                    
                    <div>
                        <div class="title">
                            TESTIMONIAL
                        </div>
                        <div class="heading">
                            <?php echo get_post_meta($post->ID, $testimonial_title_one, true); ;?>
                        </div>

                        <div class="quote">
                            <?php echo get_post_meta($post->ID, $testimonial_quote_one, true); ;?>
                        </div>

                    </div>

                    <div>

                        <div class="title">
                            TESTIMONIAL
                        </div>
                        <div class="heading">
                            <?php echo get_post_meta($post->ID, $testimonial_title_two, true); ;?>
                        </div>

                        <div class="quote">
                             <?php echo get_post_meta($post->ID, $testimonial_quote_two, true); ;?>                   
                        </div>

                    </div>

                    <div>

                        <div class="title">
                            TESTIMONIAL
                        </div>
                        <div class="heading">
                             <?php echo get_post_meta($post->ID, $testimonial_title_three, true); ;?>
                        </div>
  
                        <div class="quote">
                            <?php echo get_post_meta($post->ID, $testimonial_quote_three, true); ;?>
                        </div>

                    </div>

                     <div>

                        <div class="title">
                            TESTIMONIAL
                        </div>
                        <div class="heading">
                            <?php echo get_post_meta($post->ID, $testimonial_title_four, true); ;?>
                        </div>

                        <div class="quote">
                           <?php echo get_post_meta($post->ID, $testimonial_quote_four, true); ;?>
                        </div>

                    </div>

                    <div>

                        <div class="title">
                            TESTIMONIAL  
                        </div>
                        <div class="heading">
                           <?php echo get_post_meta($post->ID, $testimonial_title_five, true); ;?>
                        </div>
                        <div class="quote">
                            <?php echo get_post_meta($post->ID, $testimonial_quote_five, true); ;?>
                        </div>

                    </div>

                     <div>

                        <div class="title">
                            TESTIMONIAL
                        </div>
                        <div class="heading">
                            <?php echo get_post_meta($post->ID, $testimonial_title_six, true); ;?>
                        </div>
                        <div class="quote">
                            <?php echo get_post_meta($post->ID, $testimonial_quote_six, true); ; ?>
                        </div>

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
                            If you want to be a part of our dynamic growing company and add value to its customers, we currently have vacancies from Researcher to Associate Director.  Call Adam Grainger on <span>020 3905 6222</span> or email <a href="mailto:hello@lightsourcepeople.com">hello@lightsourcepeople.com</a>
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
