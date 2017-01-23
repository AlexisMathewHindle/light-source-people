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


<div class="container">
    <div class="row">
        <div class="col-md-12">
            


<div class="wpjb wpjb-job wpjb-page-single">

    <?php wpjb_flash() ?>

    <?php if(!wpjb_conf("front_hide_apply_link")): ?>
    
    <?php if($members_only): ?>
    <div class="wpjb-job-apply" style="margin:24px 0px;">
        <div class="wpjb-flash-error wpjb-flash-small">
            <span class="wpjb-glyphs wpjb-icon-attention"><?php esc_html_e($form_error) ?></span>
        </div>
        
        <div>
            <a class="wpjb-button" href="<?php esc_attr_e(wpjr_link_to("login")) ?>"><?php _e("Login", "wpjobboard") ?></a>
            <a class="wpjb-button" href="<?php esc_attr_e(wpjr_link_to("register")) ?>"><?php _e("Register", "wpjobboard") ?></a>
            
            <?php do_action("wpjb_tpl_single_actions", $job) ?>
        </div>
    </div>
    <?php elseif($can_apply): ?>
    
    <div class="wpjb-job-apply" id="wpjb-scroll" style="margin:24px 0px;">
         <div>
<!--             <?php if($application_url): ?>
            <a class="wpjb-button" href="<?php esc_attr_e($application_url) ?>"><?php _e("Apply", "wpjobboard") ?></a>
            <?php else: ?>
            <a class="wpjb-button wpjb-form-toggle wpjb-form-job-apply" href="<?php esc_attr_e(wpjb_link_to("job", $job, array("form"=>"apply"))) ?>#wpjb-scroll" rel="nofollow" data-wpjb-form="wpjb-form-job-apply"><?php _e("Apply Online", "wpjobboard") ?> <span class="wpjb-glyphs wpjb-icon-down-open">&nbsp;</span></a>
            <?php endif; ?>
           
            
            <?php do_action("wpjb_tpl_single_actions", $job) ?> -->
        </div> 
        
        <div id="wpjb-form-job-apply" class="wpjb-form-slider wpjb-layer-inside <?php if(!$show->apply): ?>wpjb-none<?php endif;?>">
            
            <?php if($form_error): ?>
            <div class="wpjb-flash-error wpjb-flash-small">
                <span class="wpjb-glyphs wpjb-icon-attention"><?php esc_html_e($form_error) ?></span>
            </div>
            <?php endif; ?>
            
            <form id="wpjb-apply-form" action="<?php esc_attr_e(wpjb_link_to("job", $job, array("form"=>"apply"))) ?>#wpjb-scroll" method="post" enctype="multipart/form-data" class="wpjb-form wpjb-form-nolines">
                <?php echo $form->renderHidden() ?>
                <?php foreach($form->getReordered() as $group): ?>
                <?php /* @var $group stdClass */ ?> 
                
                <?php if($group->title): ?>
                <div class="wpjb-legend"><?php esc_html_e($group->title) ?></div>
                <?php endif; ?>
                
                <fieldset class="wpjb-fieldset-<?php esc_attr_e($group->getName()) ?>">

                    <?php foreach($group->getReordered() as $name => $field): ?>
                    <?php /* @var $field Daq_Form_Element */ ?>
                    <div class="<?php wpjb_form_input_features($field) ?>">

                        <label class="wpjb-label">
                            <?php esc_html_e($field->getLabel()) ?>
                            <?php if($field->isRequired()): ?><span class="wpjb-required">*</span><?php endif; ?>
                        </label>

                        <div class="wpjb-field">
                            <?php wpjb_form_render_input($form, $field) ?>
                            <?php wpjb_form_input_hint($field) ?>
                            <?php wpjb_form_input_errors($field) ?>
                        </div>

                    </div>
                    <?php endforeach; ?>
                </fieldset>
                <?php endforeach; ?>
                
                <!-- <div class="wpjb-legend"></div> -->
                
                <fieldset>
                    <input type="submit" class="wpjb-submit" id="wpjb_submit" value="<?php _e("Send Application", "wpjobboard") ?>" />
                </fieldset>
            </form>
        </div>
    </div>
    <?php endif; ?>
    

    
    <?php endif; ?>
</div>











        </div>
    </div>
</div>










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






