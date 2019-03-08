<?php
/*
  Template Name: Home Page
*/

// Advanced Custom Fields
$hero_title             = get_field('hero_title');
$hero_subtitle          = get_field('hero_subtitle');
$hero_primary_button    = get_field('hero_primary_button');
$hero_secondary_button  = get_field('hero_secondary_button');

$why_title              = get_field('why_title');
$why_description        = get_field('why_description');

$product_title          = get_field('product_title');
$product_description    = get_field('product_description');

$about_title            = get_field('about_title');
$about_description      = get_field('about_description', false, false);
$features               = get_field('about_title');
// Featured UL list items
$featured_list_item_1   = get_field('featured_list_item_1');
$featured_list_item_2   = get_field('featured_list_item_2');
$featured_list_item_3   = get_field('featured_list_item_3');


$testimonial_title      = get_field('testimonial_title');
$testimonials_1           = get_field('testimonials_1');
$testimonials_2           = get_field('testimonials_2');
$testimonials_3           = get_field('testimonials_3');


get_header();
?>

<!-- HERO
    ======================================================-->

    <section id="hero">
    <div class="container-fluid clearfix">
        <div class="row">
            <div class="col">
                    <div id="hero-content">
                        <h1><?php echo $hero_title; ?></h1>
                        <h2><span><?php echo $hero_subtitle; ?></span></h2>
                        <div class=button-holder>
                            <a href="#about-us" class="btn btn-outline-primary tnmf-btn"><?php echo $hero_secondary_button; ?></a>
                            <a href="#product" class="btn btn-primary tnmf-btn"><?php echo $hero_primary_button; ?></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </section> 
    

    <!-- WHY GO WITH
    ======================================================-->
    <section id="why-go">
        <div class="container-fluid clearfix">
            <div class="row no-gutters">
                <div class="col-sm-8 align-self-center">
                    <div class="this-content">
                        <h1><?php echo $why_title; ?></h1>
                        <p><?php echo $why_description; ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 mudflap">
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT
    ======================================================-->
    <section id="product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm">
                    <h1><?php echo $product_title; ?></h1>
                    <p><?php echo $product_description; ?></p>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col d-flex product">
                    <div class="product-box">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/black-mf.png" alt="">
                        <h2>TN Mud Flaps <strong>BLACK</strong></h2>
                        <h2 class="prod-price">$65.00</h2>
                        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YL5L5DYXX6XL8" class="btn prod-btn" role="button" aria-pressed="">Buy Now</a>
                    </div>
                </div>
                <div class="col d-flex product">
                    <div class="product-box">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/red-mf.png" alt="">
                        <h2>TN Mud Flaps <strong>RED</strong></h2>
                        <h2 class="prod-price">$65.00</h2>
                        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=JA2B6KE4Y699N" class="btn prod-btn" role="button" aria-pressed="">Buy Now</a>
                    </div>
                </div>
                <div class="col d-flex product">
                    <div class="product-box">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/blue-mf.png" alt="">
                        <h2>TN Mud Flaps <strong>BLUE</strong></h2>
                        <h2 class="prod-price">$65.00</h2>
                        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LZUFK2QEXY43Y" class="btn prod-btn" role="button" aria-pressed="">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- ABOUT
    ======================================================-->
    <div class="about-img">
    <section id="about-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-1">
                    <div id="about-content">
                        <h1><?php echo $about_title; ?></h1>
                        <p><?php echo $about_description; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-1">
                    <h1><?php echo $features_title; ?></h1>
                    <div id="features-list">
                        <ul class="features">
                            <li><?php echo $featured_list_item_1; ?></li>
                            <li><?php echo $featured_list_item_2; ?></li>
                            <li><?php echo $featured_list_item_3; ?></li>
                        </ul>
                        <ul class="features">
                            <li>Cost effective</li>
                            <li>Multiple color options<Test/li>
                            <li>Easy install</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <!-- TESTIMONIALS
    ======================================================-->
    <section id="testimonials">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    <h1><?php echo $testimonial_title; ?></h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4 d-flex justify-content-around">
                    <blockquote class="customer-quotes">
                        <?php echo $testimonials_1; ?>
                    </blockquote>
                </div>
                <div class="col-md-4 d-flex justify-content-around">
                    <blockquote class="customer-quotes">
                        <?php echo $testimonials_2; ?>
                    </blockquote>
                </div>
                <div class="col-md-4 d-flex justify-content-around">
                    <blockquote class="customer-quotes">
                        <?php echo $testimonials_3; ?>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
