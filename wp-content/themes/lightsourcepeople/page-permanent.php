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

        <div class="container lsp-divider">
            <div class="row">
                <div class="col-md-6">
                <h1 style="margin-bottom: 50px;">Finding a permanent role</h1>
                    
                   <!--  <ul>
                        <li>Weekly / bi weekly / monthly payment options to suit you or your business</li>
                        <li>Free advice on choosing the right set up for you when setting out in to the world of contracting</a></li>
                        <li>Complete mobilisation and demobilisation service – Taking the hassle out of getting to your project site.</li>
                        <li>We only work within the Energy sector, ensuring you have a specialist not generalist Consultant handling your placement and assignment.</li>
                        <li>Flexible approach, we want to work with you to help and support you in meeting your project deliverables</li>
                        <li>Discounts arranged with specialist Ltd company Insurance and Accountancy providers</li>
                        <li>Basic PPE provided for all Technicians</li>
                    </ul> -->
                    <div class="permanent-content">
                        <p>We all work for a significant chunk of our lives and our careers are a very important to us all.  Changing job can be both an exciting and nerve racking time.  Here at Light Source People we appreciate this.  Our consultants are specialists in the Energy sector, but above all are specialised listeners!  We want to present you with only the most relevant vacancies that you are actually interested in.  We will take the time to listen to what you require in your next role and offer advice (if needed or asked for!) on how likely you are to find this.<p>
                        <div class="break"></div>
                        <p>We want to be your valued partner in achieving your career goals, not just another recruitment company.  For specialist Energy industry career advice, to find out about our current vacancies or for an informal confidential chat about your next step please call one of our consultants on 020 3905 6222</p>
                    </div>
                    
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
                                <a href="<?php echo get_template_directory_uri() ?>/downloads/timesheet.pdf" class="download-btn timesheets" download>Timesheets</a>
                                <a href="<?php echo get_template_directory_uri() ?>/downloads/interview.docx" class="download-btn expenses" download>Interview Tips</a>
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
