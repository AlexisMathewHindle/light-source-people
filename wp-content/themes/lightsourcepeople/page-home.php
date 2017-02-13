<?php
/**
 * The front page template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */
get_header(); ?>
<div class="home">
    <a href="#" class="click_number">Hello</a>

    <?php 
    // SCRIPT TO GENERATE RANDOM IMAGES  //
    $mypictures=array("hero_bg.jpg","hero_bg_2.jpg","hero_bg_3.jpg");

    $i = rand(0, count($mypictures)-1); 

    $selectedBg = "$mypictures[$i]";

    ?>

    <div class="container-fluid hero" style="padding-left: 0px; padding-right: 0px;">
        <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/homepage.png" alt="">
        
    </div>
    <!--/hero-->

    <div class="container-fluid connecting-people">
        <span class="light">Connecting</span> People &AMP; Careers
        <span><a href="<?php echo get_permalink(32) ?>">See Vacancies <i class="fa fa-chevron-right" aria-hidden="true"></i></a></span>
    </div>
    <!--/connecting people-->

    <div class="container-fluid signup">
        <div class="container">
            <div class="row">

                <?php echo do_shortcode('[contact-form-7 id="65" title="File Upload - Homepage"]');?>
            </div>
        </div>
    </div>
    <!--/signup-->


    <div class="container-fluid summary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        Welcome to <span>Light Source People</span>
                    </div>
                    <div class="subheading">
                        The Energy Recruitment Specialists
                    </div>
                    <div class="content">

                    <?php the_content(); ?> 
                                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/summary-->


    <div class="container-fluid clients">
        <div class="container">
            <div class="row visible-xs visible-sm">

                <div class="col-md-12">


                    <div class="testimonial">
                        <div class="heading">
                            See what our clients think!
                        </div>
                        <div class="copy">
                            View our client testimonials and see how we have helped our client succeed.
                        </div>
                        <a href="<?php echo get_permalink(38) ?>" class="testimonial-btn">Testimonials</a>
                    </div>

                    <div class="rss-feed">

                        <?php
                            $rss = new DOMDocument();
                            $rss_details = simplexml_load_file('http://feeds.feedburner.com/Renews-RenewableEnergyNews');
                            $rss->load('http://feeds.feedburner.com/Renews-RenewableEnergyNews');
                            $feed = array();
                            foreach ($rss->getElementsByTagName('item') as $node) {
                                $item = array ( 
                                    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                                    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                                    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                                    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                                    );
                                array_push($feed, $item);
                            }
                            $limit = 1;

                            for($x=0;$x<$limit;$x++) {
                                $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
                                $link = $feed[$x]['link'];
                                $description = $feed[$x]['desc'];
                                $date = date('l F d, Y', strtotime($feed[$x]['date']));

                                 echo '<div class="title"><a href="'. $link .'">' . $title . "</a></div>";
                                echo '<div class="copy">' . $description . '</div>';
                                echo '<div class="timestamp">' . $date . '</div>';

                            }
                        ?>
                    </div>


                </div>





            </div>

            <div class="row visible-lg">
                <div class="col-md-12">
                    <div class="testimonial">
                        <div class="heading">
                            See what our clients think!
                        </div>
                        <div class="copy">
                            View our client testimonials and see how we have helped our client succeed.
                        </div>
                        <a href="<?php echo get_permalink(38) ?>" class="testimonial-btn">Testimonials</a>
                    </div>
                    <div class="rss-feed">
                        <div class="heading">
                            RSS FEED
                        </div>

                            <?php
                            $rss = new DOMDocument();
                            $rss_details = simplexml_load_file('http://feeds.feedburner.com/Renews-RenewableEnergyNews');
                            $rss->load('http://feeds.feedburner.com/Renews-RenewableEnergyNews');
                            $feed = array();
                            foreach ($rss->getElementsByTagName('item') as $node) {
                                $item = array ( 
                                    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                                    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                                    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                                    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                                    );
                                array_push($feed, $item);
                            }
                            $limit = 1;

                            for($x=0;$x<$limit;$x++) {
                                $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
                                $link = $feed[$x]['link'];
                                $description = $feed[$x]['desc'];
                                $date = date('l F d, Y', strtotime($feed[$x]['date']));

                                 echo '<div class="title"><a href="'. $link .'">' . $title . "</a></div>";
                                echo '<div class="copy">' . $description . '</div>';
                                echo '<div class="timestamp">' . $date . '</div>';

                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/clients-->


    <div class="container-fluid current-vacancies">
        <div class="container">
            <div class="col-md-12">
                <div class="heading">
                    Current Vacancies
                </div>
                <span class="see-vacancies"><a href="<?php echo get_permalink(32) ?>">See Vancancies <i class="fa fa-chevron-right" aria-hidden="true"></i></a></span>
            </div>
        </div>
    </div>
    <!--/current vacancies-->




    <?php echo do_shortcode("[wpjb_jobs_list count=3]"); ?>



</div>
<!--/home-->







<?php get_footer(); ?>
