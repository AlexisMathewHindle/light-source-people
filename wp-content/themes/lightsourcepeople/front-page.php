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

    <div class="container-fluid hero">
        <div class="tagline">
            Energy Talent Solutions
        </div>
        <div class="contact-tel-main">
            020 3905 6222
        </div>
        <div class="info">
            Call us and speak to our industry employment specialists
        </div>

        <div class="down-arrow">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </div>


    </div>
    <!--/hero-->

    <div class="container-fluid connecting-people">
        <span class="light">Connecting</span> People &AMP; Careers
        <span><a href="#">See Vancancies <i class="fa fa-chevron-right" aria-hidden="true"></i></a></span>
    </div>
    <!--/connecting people-->

    <div class="container-fluid signup">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form id="signup-form">
                        <div class="col-md-3 col-md-offset-1">
                            <input type="text" name="" autocomplete="off" placeholder="Email Address">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="" autocomplete="off" placeholder="Contact Number (Optional)">
                        </div>
                        <div class="col-md-2">
                            <span class="upload-cv"><i class="fa fa-upload" aria-hidden="true"></i> Upload CV</span>
                        </div>
                        <div class="col-md-2">
                            <button class="signup-btn">Sign Up</button>
                        </div>
                    </form>
                    <div class="copy">
                        *Sign up to our mailing list to get updates and alerts on new vacancies
                    </div>
                </div>
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
        The energy industry is a highly competitive one, and often requires innovative solutions to challenges that have never been faced before.  Light Source People aims to connect market leading talent with innovative market leading projects, so that together those challenges can be met.
        We adopt a partnership approach in connecting companies and talent.  Put simply, the emphasis is on listening, understanding and quality.  Only when we truly understand the challenge our customer faces can we deliver the right talent solution.  From single requirements to complete project teams, Light Source People has the industry knowledge, network and experience to deliver innovative market leading talent solutions.
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
                        <!-- <div class="heading">
                            RSS FEED
                        </div>
                        <div class="title">
                            Australia blocks Chinese firm from stake in electricity grid
                        </div>
                        <div class="copy">
                            Australia’s government has preliminarily blocked Chinese and Hong Kong bidders from taking a controlling stake in the country’s largest electricity network, citing worries over national security.
                        </div>
                        <div class="timestamp">
                            December 10 2016
                        </div> -->
                        <?php
                    $rss = simplexml_load_file('http://feeds.bbci.co.uk/news/technology/rss.xml');
    
                    echo '<h1>'. $rss->channel->title . '</h1>';
    
                    foreach ($rss->channel->item as $item) {
                        echo '<h2><a href="'. $item->link .'">' . $item->title . "</a></h2>";
                        echo "<p>" . $item->pubDate . "</p>";
                        echo "<p>" . $item->description . "</p>";
                        
                        
                        // we load the attributes into $thumbAttr
                        // you can either use the namespace prefix
                        $thumbAttr = $item->children('media', true)->thumbnail->attributes();
                    
                        // or preferably the namespace name, read note below for an explanation
                        $thumbAttr = $item->children('http://search.yahoo.com/mrss/')->thumbnail->attributes();
                        
                        echo "<img src=\"".$thumbAttr['url']."\" alt=\"error\">"; 
                        
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
                        <!--<div class="title">
                            Australia blocks Chinese firm from stake in electricity grid
                        </div>
                        <div class="copy">
                            Australia’s government has preliminarily blocked Chinese and Hong Kong bidders from taking a controlling stake in the country’s largest electricity network, citing worries over national security.
                        </div>
                        <div class="timestamp">
                            December 10 2016
                        </div> -->

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
