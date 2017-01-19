<?php 

/**
 * Job details
 * 
 * This template is responsible for displaying job details on job details page
 * (template single.php) and job preview page (template preview.php)
 * 
 * @author Greg Winiarski
 * @package Templates
 * @subpackage JobBoard
 */

 /* @var $job Wpjb_Model_Job */
 /* @var $company Wpjb_Model_Employer */

?>
<?php $job = wpjb_view("job") ?>
<?php $company = $job->getCompany(true); ?>
<div class="container-fluid ci-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-info">
          Contact <span><?php ?> <?php esc_html_e($job->company_name) ?></span> via email on <span><?php echo $job->company_email; ?></span>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container-fluid job-description">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <a href="#" class="apply-btn">Apply for this role</a>
        <div class="job-title">
          <?php esc_attr_e($job->job_title) ?>
        </div>
        <div class="job-info">        
          <p><i class="fa fa-briefcase" aria-hidden="true"></i> <?php echo $job->getTag()->type[0]->title; ?></p>
          <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php esc_html_e($job->locationToString()) ?></p>
          


        <?php if(isset($job->getTag()->category) && is_array($job->getTag()->category)): ?>
            <?php foreach($job->getTag()->category as $category): ?>
                <p><a href="<?php esc_attr_e(wpjb_link_to("category", $category)) ?>"><i class="fa fa-tags" aria-hidden="true"></i> <?php esc_html_e($category->title) ?></a></p>
            <?php endforeach; ?>
        <?php endif; ?>
          


          <p><i class="fa fa-calendar" aria-hidden="true"></i>  <?php echo wpjb_date_display(get_option('date_format'), $job->job_created_at) ?></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="content-box">
          <div class="heading">
            Description
          </div>
          <div class="copy">
            <?php if($job->doScheme("job_description")): else: ?>
            <?php wpjb_rich_text($job->job_description, $job->meta->job_description_format->value()) ?>
            <?php endif; ?>
          </div>
        </div>
        
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">

      <?php if($application_url): ?>
        <a href="<?php esc_attr_e($application_url) ?>" class="apply-btn-bottom wpjb-form-toggle" data-wpjb-form="wpjb-form-job-apply" rel="nofollow">Apply for this role</a>

      <?php else: ?>
        <a href="<?php esc_attr_e(wpjb_link_to("job", $job, array("form"=>"apply"))) ?>#wpjb-scroll" class="apply-btn-bottom wpjb-form-toggle" data-wpjb-form="wpjb-form-job-apply" rel="nofollow">Apply for this role</a>
      <?php endif; ?>


      </div>
    </div>
  </div>
</div>