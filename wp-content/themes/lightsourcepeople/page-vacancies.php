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
                Contract Vacancies
            </div>
            <span class="call-us">Call us on: 0208 123 4556</span>
        </div>
    </div>
</div>
<!--/current vacancies-->




<div class="container-fluid vacancy-search">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="" placeholder="Keyword" autocomplete="off">
            </div>
            <div class="col-md-3">
                <input type="text" name="" placeholder="Location" autocomplete="off">
            </div>
            <div class="col-md-3">
                <button>Contract</button>
            </div>
            <div class="col-md-3">
                <button>Update Results</button>
            </div>
        </div>
    </div>
</div>


<?php echo do_shortcode("[wpjb_jobs_list]"); ?>


<?php get_footer(); ?>
