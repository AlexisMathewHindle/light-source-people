<?php
/**
 * The candidates contract page template file
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
                <div class="col-md-12">
                    <h1 class="text-center">Why work with Light Source People?</h1>
                </div>
                <div class="col-md-6">
                    
                    <?php the_content();?>
                </div>
                <div class="col-md-6">
                    <img id="contractors-img" src="<?php echo get_template_directory_uri() ?>/images/contractors.png" class="img-responsive">
                </div>
            </div>
        </div>

    </div><!--/seeking-->

    <div class="container-fluid downloads">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="title">
                        TIMESHEETS &AMP; EXPENSES FORMS
                    </div>
                        
                        <div class="heading">
                            Download Resources
                        </div>

                        <div class="subheading">
                            PDF &amp; Excel Spreadsheets
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <a href="<?php echo get_template_directory_uri() ?>/downloads/timesheet.xlsx" class="download-btn timesheets" download>Timesheets Excel</a>
                                <a href="<?php echo get_template_directory_uri() ?>/downloads/timesheet.pdf" class="download-btn expenses" download>Timesheets PDF</a>
                                <a href="<?php echo get_template_directory_uri() ?>/downloads/interview.pdf" class="download-btn expenses" download>Interview Tips</a>
                               <!--  <a href="" class="download-btn expenses" download>CV Writing Advice</a> -->
                                <a href="<?php echo get_template_directory_uri() ?>/downloads/expenses_form.pdf" class="download-btn expenses" download>Expenses PDF</a>
                                <a href="<?php echo get_template_directory_uri() ?>/downloads/expenses_form.xlsx" class="download-btn expenses" download>Expenses Excel</a>
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
                    <span class="see-vacancies"><a href="#">See Vancancies <i class="fa fa-chevron-right" aria-hidden="true"></i></a></span>                
                </div>
            </div>
        </div><!--/current vacancies-->


<?php echo do_shortcode("[wpjb_jobs_list type='5']"); ?>




</div>


<?php get_footer(); ?>
