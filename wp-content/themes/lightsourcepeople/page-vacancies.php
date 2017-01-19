<?php
/**
 * The vacancies page template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */

get_header(); ?>
<div class="container-fluid current-vacancies extra-padding">
    <div class="container">
        <div class="col-md-12">
            <div class="heading">
                Vacancies
            </div>
            <span class="call-us">Call us on: 020 3905 6222</span>
        </div>
    </div>
</div>
<!--/current vacancies-->

<?php echo do_shortcode("[wpjb_jobs_list]"); ?>


<?php get_footer(); ?>
