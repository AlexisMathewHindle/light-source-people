<?php 

/**
 * Job seeker registration page
 * 
 * @author Greg Winiarski
 * @package Templates
 * @subpackage Resumes
 */

 /* @var $form Wpjb_Form_Resumes_Register */

?>
<div class="wpjb wpjr-page-register">

    <?php wpjb_flash() ?>

    <form class="wpjb-form" action="" method="post">
        <?php echo $form->renderHidden() ?>
        <fieldset class="wpjb-fieldset-x">
        <?php foreach($form->getReordered() as $group): ?>
        <?php /* @var $group stdClass */ ?> 
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
        <?php endforeach; ?>


            <div>
                <input type="submit" name="wpjb_login" id="wpjb_submit" value="<?php _e("Register account", "wpjobboard") ?>" />
            </div>
        </fieldset>


    </form>


</div>
