<?php
/**
 * The template for displaying the about page
 Template Name: About
 
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

 /*Put this under get header to print wp query --> <div id="primary" class="home-page hero-content"> <-- ***/
get_header(); ?>

<div id="primary" class="home-page ab-hero-content">
	<div class="main-content" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="ab-wrapper">    
            <?php the_content(); ?>
        </div>       
        <?php endwhile; // end of the loop. ?>
    </div><!-- .main-content -->
</div><!-- #primary -->


    <?php query_posts('post_type=about_post'); ?>
    <?php while ( have_posts() ) : the_post();
            $size = 'full';
            $abtit1 = get_field('header1');
            $abtit2 = get_field('header_2');
            $abtit3 = get_field('header_3');
            $abtit4 = get_field('header_4');
            $abtit5 = get_field('header_5');
            $abtit6 = get_field('header_6');
            $ourservices = get_field('our_services');
            $csimg = get_field('content_strategy_image');
            $contstrat = get_field('content_strategy');
            $infmap = get_field('influencer_mapping');
            $infmapimg = get_field('influencer_mapping_image');
            $smsimg = get_field('social_media_strategy_image');
            $sms = get_field('social_media_strategy');
            $dnd = get_field('design_and_development');
            $dndimg = get_field('design_and_development_image');
            $abtcontact = get_field('contact_message');            
    ?>
<div id="about-post" class="site-content"> 
   <div id="ab-services" class="ab-header-field">
        <h5><?php echo $abtit1; ?></h5>
        <p><?php echo $ourservices; ?></p>
    </div>
    <div id="ab-conststrat" class="ab-field">
        <?php echo wp_get_attachment_image( $csimg, $size );?>
        <div class="ab-text-wrap">
            <h3><?php echo $abtit2; ?></h3>
            <p><?php echo $contstrat; ?></p>
        </div>
    </div>
    <div id="ab-infmap" class="ab-field">    
        <div class="ab-text-wrap">    
            <h3><?php echo $abtit3; ?></h3>
            <p><?php echo $infmap; ?></p>
        </div>
        <?php echo wp_get_attachment_image( $infmapimg, $size );?>
    </div>
    <div id="ab-sms" class="ab-field">
        <?php echo wp_get_attachment_image( $smsimg, $size );?>
        <div class="ab-text-wrap">
            <h3><?php echo $abtit4; ?></h3>
            <p><?php echo $sms; ?></p> 
        </div>
    </div>
    <div id="ab-dnd" class="ab-field">
        <div class="ab-text-wrap">    
            <h3><?php echo $abtit5; ?></h3>
            <p><?php echo $dnd; ?></p>
        </div>
        <?php echo wp_get_attachment_image( $dndimg, $size );?>
    </div>
    <hr>
    <div id="ab-contact" class="ab-field">
            <h2><?php echo $abtcontact; ?></h2>
            <a class="button" href="<?php echo site_url('/contact-us-2/') ?>">Contact Us</a>
    </div>
            
      <?php endwhile; // end of the loop. ?>
</div>
    
<?php get_footer(); ?>
