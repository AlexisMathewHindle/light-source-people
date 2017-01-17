<?php 

/**
 * Job list item
 * 
 * This template is responsible for displaying job list item on job list page
 * (template index.php) it is alos used in live search
 * 
 * @author Greg Winiarski
 * @package Templates
 * @subpackage JobBoard
 */

 /* @var $job Wpjb_Model_Job */

?>
<div class="row">
    <div class="col-md-12">
        <div class="item">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <a href="<?php echo wpjb_link_to("job", $job); ?>">
                            <?php esc_html_e($job->job_title) ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="description">
                        <?php echo substr($job->job_description, 0, 400) ; ?>...
                    </div>
                    <div class="info">
                        <span><i class="fa fa-briefcase" aria-hidden="true"></i>
                                <?php echo $job->getTag()->type[0]->title; ?>
                                </span>
                        <span><i class="fa fa-calendar" aria-hidden="true"></i>
 <?php echo wpjb_date_display(get_option('date_format'), $job->job_created_at) ?></span>
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php esc_html_e($job->locationToString()) ?></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="subheading">
                        Contact for this role:
                    </div>
                    <div class="copy">
                        <p>0208 123 4567
                            <br />
                            <a href="#" class="mailto">
                                <?php echo $job->company_email; ?>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo wpjb_link_to("job", $job); ?>" class="see-more-btn">See Full Description <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>





