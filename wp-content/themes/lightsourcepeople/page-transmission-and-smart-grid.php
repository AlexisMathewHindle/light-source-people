<?php 
/**
 * The Transmission and Distribution page template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */


get_header(); ?>

<?php 
	/* CUSTOM FIELDS */
	$summary		=	"summary"; 	
	$copy			=  	"copy";
	$vacancy_copy	=	"vacancy_copy";
	$role_copy		= 	"role_copy";
?>


<div class="sectors">
	
	<div class="container-fluid sector-top">
		<div class="container lsp-divider">
			<div class="row">
				<!-- <div class="col-md-5">
					<img src="<?php echo get_template_directory_uri() ;?>/images/nuclear.png" alt="" class="img-responsive">
				</div> -->
				<div class="col-md-12">

					<h1><?php the_title() ;?></h1>

					 <div class="summary">

					<?php echo get_post_meta($post->ID, $summary, true);  ;?>

                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					 <div class="copy">
					
					<?php echo get_post_meta($post->ID, $copy, true); ;?>

                    </div>
				</div>
			</div>
		</div>
	</div>


    <div class="container-fluid sector-bottom">
        <div class="container extra-padding">
            <div class="row">
                <div class="col-md-6">
                
                    <div class="content-wrapper">

                            <h1>List your vacancy with LSP</h1>
                            
                            <div class="copy">

    						<?php echo get_post_meta($post->ID, $vacancy_copy, true); ;?>

                            </div>  

                            <a href="<?php echo get_permalink(28);?>" class="more-btn">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

                    </div>              

                </div>
                <div class="col-md-6">
                
                    <div class="content-wrapper-second">
                        
                            <h1>Find your next role with us!</h1>

                            <div class="copy">
    						
    						<?php echo get_post_meta($post->ID, $role_copy, true); ;?>

                            </div>

                            <a style="margin-top: 45px; margin-right: 40px;" href="<?php echo get_permalink(55);?>" class="more-btn">Read More - Contract <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

                            <a style="margin-top: 45px;" href="<?php echo get_permalink(57);?>" class="more-btn">Read More - Permanent <i class="fa fa-chevron-right" aria-hidden="true"></i></a>


                    </div>

                </div>
            </div>
        </div>
    </div><!--/sector bottom-->
</div><!-- sectors -->
<?php get_footer(); ?>