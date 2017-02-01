<?php
/**
 * The candidates permanent page template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */

get_header(); ?>


<div class="contract">
    <div class="container-fluid seeking">

        <div class="container lsp-divider">
            <div class="row">
                <div class="col-md-6">
                <h1 style="margin-bottom: 50px;">Finding a permanent role</h1>

                    <?php the_content();?>
                    
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri() ?>/images/permanent.png" id="permanent" class="img-responsive">
                </div>
            </div>
        </div>

    </div><!--/seeking-->

    <div class="container-fluid downloads">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <!-- <div class="title">
                        TIMESHEETS &AMP; EXPENSES FORMS
                    </div> -->
                        
                        <div class="heading">
                            Download Resources
                        </div>

                        <div class="subheading">
                            PDF Document
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <!-- <a href="<?php echo get_template_directory_uri() ?>/downloads/timesheet.pdf" class="download-btn timesheets" download>Timesheets</a> -->
                                <a href="<?php echo get_template_directory_uri() ?>/downloads/interview.pdf" class="download-btn" download>Interview Tips</a>
                                <!-- remove expenses from above class -->
                            </div>                       
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid current-vacancies">
        <div class="container">
            <div class="col-md-12">
                <div class="heading">
                    <?php echo the_title() ?> Vacancies
                </div>
                <span class="see-vacancies"><a href="<?php echo get_permalink(32) ;?>">See Vancancies <i class="fa fa-chevron-right" aria-hidden="true"></i></a></span>                
            </div>
        </div>
    </div><!--/current vacancies-->


<?php echo do_shortcode("[wpjb_jobs_list type='3']"); ?>




</div>


<?php get_footer(); ?>
