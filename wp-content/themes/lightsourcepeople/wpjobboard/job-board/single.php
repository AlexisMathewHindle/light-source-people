<?php

/**
 * Job details container
 * 
 * Inside this template job details page is generated (using function 
 * wpjb_job_template)
 * 
 * @author Greg Winiarski
 * @package Templates
 * @subpackage JobBoard
 * 
 * @var $application_url string
 * @var $job Wpjb_Model_Job
 * @var $related array List of related jobs
 * @var $show_related boolean
 * @var $show stdClass
 */

?>


 <?php $this->render("job.php") ?>


<?php $relatedJobs = wpjb_find_jobs($related); ?>
<?php if($show_related && $relatedJobs->total > 0): ?>
<div class="container-fluid vacancies">
    <div class="container">
        <?php foreach($relatedJobs->job as $relatedJob): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="item">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <a href="<?php echo wpjb_link_to("job", $relatedJob); ?>">
                                    <?php esc_html_e($relatedJob->job_title) ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="description">
                            <?php echo substr($relatedJob->job_description, 0, 400) ; ?>...
                            </div>
                            <div class="info">
                                <span><i class="fa fa-briefcase" aria-hidden="true"></i>
                                <?php echo $relatedJob->getTag()->type[0]->title; ?>
                                </span>
                                <span><i class="fa fa-calendar" aria-hidden="true"></i>
 <?php echo wpjb_date_display(get_option('date_format'), $relatedJob->job_created_at) ?></span>
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php esc_html_e($relatedJob->locationToString()) ?></span>
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
                                        <?php echo $relatedJob->company_email; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a href="<?php echo wpjb_link_to("job", $relatedJob); ?>" class="see-more-btn">See Full Description <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>


