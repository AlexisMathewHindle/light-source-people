<?php
/**
 * The sectors page template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */

get_header(); ?>

<div class="sectors">
    
    <div class="container-fluid sector-top">
        <div class="container lsp-divider">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/images/sectors.png" class="img-responsive">
                </div>
                <div class="col-md-7">
                    <h1>Renewable Energy</h1>
                    <div class="summary">
Light Source People specialises in staffing all phases of renewable energy projects.  From Research and Development, Engineering Design, Construction and through to the ongoing Operation and Maintenance of renewable energy assets, Light Source People has the expertise necessary to be a valued partner in your job search or project.
                    </div>

                    <div class="copy">
                        
Whether it be wind, solar, hydro, wave, tidal, biomass, onshore or offshore. In Copenhagen or Shanghai, Light Source People truly understands the renewable sector and is excited to be a part of the future of energy generation.  For the past decade, our experienced team have been servicing this growing sector in various locations all over the world.  We understand the technicalities and difficulties employers and candidates face in delivering renewable energy projects and the importance of having the right team and recruitment partner in place to meet the challenges faced.
                    </div>

                </div>
            </div>
        </div>
    </div><!--/sector top-->



    <div class="container-fluid sector-middle">
        <div class="container lsp-divider">
            <div class="row">
                <div class="col-md-6">
                <h1>Leading Renewable Recruitment</h1>
                <!-- <div class="summary">
                    Statistics
                </div> -->
                
                <div class="copy">
                    The global shift to a clean energy economy keeps accelerating, creating millions of green jobs for workers around the world, and showing that decarbonisation and economic growth can go hand in hand.  There are currently over 8 million people worldwide working within the renewable energy sector, up from just 3 million in 2004.  As improvements in technology and lessons learned drive down the cost of renewable energy, this staggering rate of growth looks set to continue for decades to come.
                </div>

                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri() ?>/images/sectors-1.png" class="img-responsive chart">
                </div>
            </div>
        </div>
    </div><!--/sector middle-->




    <div class="container-fluid sector-bottom">
        <div class="container extra-padding">
            <div class="row">
                <div class="col-md-6">
                
                    <div class="content-wrapper">

                            <h1>List your vacancy with LSP</h1>
    <!--                        <div class="summary">
                                Clients
                            </div> -->
                            
                            <div class="copy">
    Here at Light Source People our consultants have access to all relevant networks, job boards, CV databases and social media relevant to the Energy sector.  However, so does the rest of the recruitment industry.  Where we differ is the level of dedication, determination and tenacity we put in to every search to ensure that no stone is left unturned, nor any potential candidate slips through the net.
                            </div>  

                            <a href="<?php echo get_permalink(28);?>" class="more-btn">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

                    </div>              

                </div>
                <div class="col-md-6">
                
                    <div class="content-wrapper-second">
                        
                            <h1>Find your next role with us!</h1>

                            <div class="copy">
    Our specialist renewable energy consultants want to be your valued partner in identifying your next contract position or career challenge.  Here at Light Source People the emphasis is on listening and understanding the needs of our customers to ensure that we only present you with the most relevant job opportunities to further you career in the renewable energy industry.
                            </div>

                            <a style="margin-top: 45px; margin-right: 40px;" href="<?php echo get_permalink(55);?>" class="more-btn">Read More - Contract <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

                            <a style="margin-top: 45px;" href="<?php echo get_permalink(57);?>" class="more-btn">Read More - Permanent <i class="fa fa-chevron-right" aria-hidden="true"></i></a>


                    </div>

                </div>
            </div>
        </div>
    </div><!--/sector bottom-->
</div><!--sectors-->
<?php get_footer(); ?>
