<?php
/**
 * The clients page template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */

get_header(); ?>

<?php 

    /* CUSTOM FIELDS */
    $step_one       =   "step_one";
    $step_two       =   "step_two";
    $step_three     =   "step_three";
    $step_four      =   "step_four";

    $copy           =   "copy";
    $ext_copy       =   "ext_copy";
;?>

<div class="successful-candidates">

    <div class="container reasons">
        <div class="row">
            <div class="col-md-12">
                <h1>How we engage with our Clients</h1>
            </div>
        </div>

        <div class="row">
            <div class="dotted-box">
                
                <div class="col-md-2"></div>

                <div class="col-md-8">
                    
                    <!-- <div class="dotted-box"> -->
                        <div class="dotted-text">Open Channel Of Communication</div>

                    <!-- </div> -->

                </div>
            
                <div class="col-md-3">
                    <div class="step-1">
                        <div class="heading">
                            STEP ONE
                        </div>
                        <div class="title">
                            Listen
                        </div>
                        <div class="content" style="margin-bottom: 51px;">
                           <?php echo get_post_meta($post->ID, $step_one, true); ;?>
                        </div>
                        <a href="<?php echo get_permalink(36);?>" class="apply">Contact Us <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="step-2">
                        <div class="heading">
                            STEP TWO
                        </div>
                        <div class="title">
                            Understand
                        </div>
                        <div class="content">
                            <?php echo get_post_meta($post->ID, $step_two, true); ;?>
                        </div>
                        <a href="<?php echo get_permalink(36);?>" class="apply">Contact Us <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="step-3">
                        <div class="heading">
                            STEP THREE
                        </div>
                        <div class="title">
                            Search
                        </div>
                        <div class="content">
                            <?php echo get_post_meta($post->ID, $step_three, true); ;?> 
                        </div>
                        <a href="<?php echo get_permalink(36);?>" class="apply">Contact Us <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="step-4">
                        <div class="heading">
                            STEP FOUR
                        </div>
                        <div class="title">
                            Deliver
                        </div>
                        <div class="content">
                            <?php echo get_post_meta($post->ID, $step_four, true); ;?>
                        </div>
                        <a href="<?php echo get_permalink(36);?>" class="apply">Contact Us <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/reasons-->



    <div class="container-fluid sc-top">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/images/clients.png" class="img-responsive">
                </div>
                <div class="col-md-7">

                    <h2>Permanent Recruitment</h2>

                    <div class="copy">
                        <?php echo get_post_meta($post->ID, $copy, true); ;?>
                    </div>

                    <div class="hr"></div>

                    <h2>Contract Solutions</h2>

                    <div class="copy">
                       
                        <?php echo get_post_meta($post->ID, $ext_copy, true); ;?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                Contact us - <a href="mailto:hello@lightsourcepeople.com">hello@lightsourcepeople.com</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
