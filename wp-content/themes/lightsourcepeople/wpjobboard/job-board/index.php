<?php

/**
 * Jobs list
 * 
 * This template file is responsible for displaying list of jobs on job board
 * home page, category page, job types page and search results page.
 * 
 * 
 * @author Greg Winiarski
 * @package Templates
 * @subpackage JobBoard
 * 
 * @var $param array List of job search params
 * @var $search_bar string Either enabled or disabled
 * @var $search_init array Array of initial search params (used only with live search)
 * @var $pagination bool Show or hide pagination
 * @var $page_id int Current page ID
 */

?>
<?php if(!is_front_page()): ?>
<!-- <div class="container-fluid page-title">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</div> -->
<?php endif; ?>
<div class="container-fluid vacancies">
<div class="container">
<?php $result = apply_filters("wpjb_filter_jobs", wpjb_find_jobs($param), $atts) ?>
<?php if ($result->count) : foreach($result->job as $job): ?>
<?php /* @var $job Wpjb_Model_Job */ ?>
<?php $this->job = $job; ?>
<?php $this->render("index-item.php") ?>
<?php endforeach; else :?>
<div class="wpjb-grid-row">
    <?php _e("No job listings found.", "wpjobboard"); ?>
</div>
<?php endif; ?>
</div>
</div>