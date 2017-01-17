<?php
/**
 * The work with us page template file
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

<div class="container work-wu">
    <div class="row">
        <div class="col-md-6">
            <h1>Join the Team at Light Source!</h1>
            <div class="summary">
                Wind power farms generate between 17 and 39 times as much power as they consume, as compared to 16 times for nuclear plants and 11 times for coal plants, according to a study of Midwestern wind farms by the University of Wisconsin.
            </div>

            <div class="copy">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>

            <div class="hr"></div>

        </div>
        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri() ?>/images/wwu.png" class="img-responsive">
        </div>
    </div>
</div>

<div class="container-fluid register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="doit">
                    <img src="<?php echo get_template_directory_uri() ?>/images/doit.png" alt="">
                </div>
                Mail us your CV at - <a href="#">mail@lighgtsourcepeople.com</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
