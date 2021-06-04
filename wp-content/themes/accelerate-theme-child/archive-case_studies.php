<?php
/**
 * The template for displaying case studies
 *
 * This is the template that displays case studies.
 * Please note that this is my construct of case study pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
        <?php query_posts('post_type=case_studies&order=ASC'); ?>
            <?php while ( have_posts() ) : the_post(); 
                $size = "full";
                $services = get_field('services');               
                $image_1 = get_field('image_1');    
            ?>
				
    <article class="case-study">
        <aside class="archive-case-study-sidebar">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <h5><?php echo $services; ?></h5>            
            <?php the_excerpt(); ?>
                <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project ›</a></p>
        </aside>
    </article>

    <div class="archive-case-study-images">
    <a href="<?php the_permalink(); ?>"><?php if($image_1) { 
        echo wp_get_attachment_image( $image_1, $size );
    } ?></a>


    </div>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

		

	</div><!-- #primary -->

<?php get_footer(); ?>
