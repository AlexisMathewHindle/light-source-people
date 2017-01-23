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
        <!-- <div class="container lsp-divider">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/images/contract.png" class="contract-img">
                </div>
                <div class="col-md-7">
                    <h1>Seeking a <?php echo the_title() ?> Role</h1>
                    <div class="summary">
                        Wind power farms generate between 17 and 39 times as much 
power as they consume, as compared to 16 times for nuclear 
plants and 11 times for coal plants, according to a study of 
Midwestern wind farms by the University of Wisconsin.
                    </div>
                    <div class="copy">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container lsp-divider extra-padding-top">
            <div class="row">
                <div class="col-md-6">
                    <h1>Why work with Light Source People?</h1>
                    <ul>
                        <li>Weekly / bi weekly / monthly payment options to suit you or your business</li>
                        <li>Free advice on choosing the right set up for you when setting out in to the world of contracting</a></li>
                        <li>Complete mobilisation and demobilisation service – Taking the hassle out of getting to your project site.</li>
                        <li>We only work within the Energy sector, ensuring you have a specialist not generalist Consultant handling your placement and assignment.</li>
                        <li>Flexible approach, we want to work with you to help and support you in meeting your project deliverables</li>
                        <li>Discounts arranged with specialist Ltd company Insurance and Accountancy providers</li>
                        <li>Basic PPE provided for all Technicians</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri() ?>/images/contract.png" class="img-responsive">
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
                            Resources
                        </div>

                        <div class="subheading">
                            PDF &amp; Excel Spreadsheets
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <a href="<?php echo get_template_directory_uri() ?>/downloads/timesheet.xlsx" class="download-btn timesheets" download>Timesheets Excel</a>
                                <a href="<?php echo get_template_directory_uri() ?>/downloads/timesheet.pdf" class="download-btn expenses" download>Timesheets PDF</a>
                                <a href="<?php echo get_template_directory_uri() ?>/downloads/interview.docx" class="download-btn expenses" download>Interview Tips</a>
                                <a href="" class="download-btn expenses" download>CV Writing Advice</a>
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


<?php echo do_shortcode("[wpjb_jobs_list]"); ?>




</div>


<?php get_footer(); ?>
