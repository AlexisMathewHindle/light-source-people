<?php
/**
 * The work with us page template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */

get_header(); ?>
<div class="container work-wu">
    <div class="row">
        <div class="col-md-6">
            <h1>Join the Team at Light Source!</h1>

            <?php the_content();?>

            <div class="hr"></div>

        </div>
        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri() ?>/images/wordcloud.png" class="img-responsive">
        </div>
    </div>
</div>

<div class="container-fluid register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="doit">
                    <img src="<?php echo get_template_directory_uri() ?>/images/doit.png" alt="">
                </div>
                Contact- <a href="mailto:hello@lightsourcepeople.com">hello@lightsourcepeople.com</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
