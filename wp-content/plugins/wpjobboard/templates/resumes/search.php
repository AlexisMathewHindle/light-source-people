<?php 

/**
 * Job details
 * 
 * This template is responsible for displaying job details on job details page
 * (template single.php) and job preview page (template preview.php)
 * 
 * @author Greg Winiarski
 * @package Templates
 * @subpackage Resumes
 */

 /* @var $form Wpjb_Form_ResumesSearch */

?>
<div class="wpjb wpjr-page-resumes-search">

    <?php if($show_results): ?>
    <div class="wpjb-layer-inside wpjb-refine-search">
        <span class="wpjb-refine-query"><?php echo $readable ?></span>
        <span class="wpjb-refine-actions">
            <a href="#" class="wpjb-button wpjb-refine-button"><?php _e("Refine Search", "wpjobboard") ?><span class="wpjb-glyphs wpjb-icon-down-open"></span></a>
        </span>
    
    <?php endif; ?>
    
    <form action="<?php echo wpjr_link_to("search") ?>" method="get" class="wpjb-form wpjb-form-to-refine <?php if($show_results): ?>wpjb-none<?php endif; ?>">
        <?php echo $form->renderHidden() ?>
        <?php foreach($form->getReordered() as $group): ?>
        <?php /* @var $group stdClass */ ?> 
        <fieldset class="wpjb-fieldset-<?php esc_attr_e($group->getName()) ?>">
            <legend class="wpjb-empty"><?php esc_html_e($group->title) ?></legend>
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
        <fieldset>
            <legend class="wpjb-empty"></legend>
            <input type="submit" class="wpjb-submit" value="<?php _e("Search", "wpjobboard") ?>" />
        </fieldset>

    </form>
        
    <?php if($show_results): ?>
    </div>
    
    <div class="wpjb-grid">
        <?php $result = wpjb_find_resumes($param); ?>
        <?php if ($result->count > 0) : foreach($result->resume as $resume): ?>
            <?php /* @var $resume Wpjb_Model_Resume */ ?>
            <?php $this->resume = $resume; ?>
            <?php $this->render("index-item.php") ?>
            <?php endforeach; else :?>
            <div class="wpjb-grid-row">
                <?php _e("No resumes found.", "wpjobboard"); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="wpjb-paginate-links">
        <?php wpjb_paginate_links($url, $result->pages, $result->page, $query, $format) ?>
    </div>
    
    <?php endif; ?>

</div>
