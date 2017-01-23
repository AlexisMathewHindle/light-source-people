<?php
/**
 * The contact page template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */

get_header(); ?>
<div class="contact-us">
     <div class="container-fluid contact-details">
         <div id="contact-details">
             <span>Contact Us: <a href="mailto: hello@lightsourcepeople.com">hello@lightsourcepeople.com</a> or call <span id="tel">020 3905 6222</span></span>
         </div>
     </div> 
    <div class="container-fluid" id="map">
    </div>
    <div class="container-fluid contact-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="field-box">
                        <label>Name</label>
                        <input type="text" name="">
                    </div>
                    <div class="field-box">
                        <label>Company</label>
                        <input type="text" name="">
                    </div>
                    <div class="field-box">
                        <label>Number</label>
                        <input type="text" name="">
                    </div>
                    <div class="field-box">
                        <label>Email</label>
                        <input type="text" name="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="field-box">
                        <label>Message</label>
                        <textarea></textarea>
                        <button>Submit</button>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
