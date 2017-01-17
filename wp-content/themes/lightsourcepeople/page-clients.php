<?php
/**
 * The clients page template file
 *
 * @package WordPress
 * @subpackage Light_Source_People
 * @since Light Source People 1.0
 */

get_header(); ?>
<div class="container-fluid dream-role">
    <div class="container">
        <div class="row visible-xs visible-sm">
            <form>
                <div class="col-md-12">
                    My dream role is...
                </div>
                <div class="col-md-4">
                    <input type="text" name="" autocomplete="off" placeholder="Job Role" id="role">
                </div>
                <div class="col-md-4">
                    <input type="text" name="" id="location" autocomplete="off" placeholder="Location">
                </div>
                <div class="col-md-4">
                    <button class="search-btn">Search</button>
                </div>
            </form>
        </div>
        <div class="row visible-lg">
            <div class="col-md-12">
                <form>
                    My dream role is...
                    <input type="text" name="" autocomplete="off" placeholder="Job Role" id="role"> in
                    <input type="text" name="" id="location" autocomplete="off" placeholder="Location">
                    <button class="search-btn">Search</button>
                </form>
            </div>
        </div>

    </div>
</div>
<!--/dream role-->





<div class="successful-candidates">


    <div class="container-fluid sc-top">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/images/cs_photo.png" class="img-responsive">
                </div>
                <div class="col-md-7">
                    <h1>Sourcing the right Candidates</h1>
                    <div class="summary">
                        Wind power farms generate between 17 and 39 times as much power as they consume, as compared to 16 times for nuclear plants and 11 times for coal plants, according to a study of Midwestern wind farms by the University of Wisconsin.
                    </div>
                    <div class="copy">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>


                    <div class="hr"></div>

                    <h2>CV Advice</h2>

                    <div class="copy">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>

                    <div class="hr"></div>

                </div>
            </div>
        </div>
    </div>

    <div class="container process">
        <div class="row">
            <div class="col-md-12">
                <h1>7 Stage Process</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo get_template_directory_uri() ?>/images/process.png" class="img-responsive process-img">
            </div>




        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="hr"></div>
            </div>
        </div>
    </div>
    <!--/reasons-->

</div>




<div class="container-fluid register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                Register your vacancy with us - <a href="#">mail@lighgtsourcepeople.com</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
