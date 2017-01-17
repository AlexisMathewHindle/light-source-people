<?php

/**
 * Add job form
 * 
 * Template displays add job form
 * 
 * 
 * @author Greg Winiarski
 * @package Templates
 * @subpackage JobBoard
 * 
 */

 /* @var $form Wpjb_Form_AddJob */
 /* @var $action string Form action URL */
 /* @var $submit string Text on the submit button */

?>

<div class="wpjb wpjb-page-default-form  <?php if(isset($page_class)) echo $page_class ?>">
    
    <?php wpjb_flash() ?>
    <?php if(isset($breadcrumbs)) wpjb_breadcrumbs($breadcrumbs) ?>
    
    <form class="wpjb-form" action="<?php esc_attr_e($action) ?>" method="post" enctype="multipart/form-data">

        <?php echo $form->renderHidden() ?>
        <?php foreach($form->getReordered() as $group): ?>
        
        <?php /* @var $group stdClass */ ?> 
        <fieldset class="wpjb-fieldset-<?php esc_attr_e($group->getName()) ?>">
            <?php if(!empty($group->title)): ?><legend><?php esc_html_e($group->title) ?></legend><?php endif; ?>
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
            <div class="wpjb-form-actions">
                <input type="submit" class="wpjb-submit" name="wpjb_submit" id="wpjb_submit" value="<?php esc_attr_e($submit) ?>" />
                
                <?php if(isset($buttons) && is_array($buttons)): ?>
                <?php foreach($buttons as $button): ?>
                <?php echo Daq_Helper_Html::build($button["tag"], array_replace($button, array("tag"=>null, "html"=>null)), $button["html"]) ?>
                <?php endforeach; ?>
                <?php endif; ?>
                
            </div>
        </fieldset>
        
    </form>

</div>
