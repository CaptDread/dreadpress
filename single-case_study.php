<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DreadTheme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();


			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'dreaddev' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'dreaddev' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

            ?> 
            <div class="case-study-meta">
                <figure class="csm-img">
                    <img src="<?php the_field('icon_image') ?>" alt="">
                </figure>
                <h4 class="csm-name">
                    <span><?php the_field('service_name') ?></span>
                </h4>
                <p class="csm-desc">
                    <span><?php the_field('service_desc') ?></span>
                </p>
                <p class="csm-price">
                    <span><?php the_field('price') ?></span>
                </p>
            </div>
            <div class="case-study-members">
                <figure class="csm-img">
                    <img src="<?php the_field('icon_image') ?>" alt="">
                </figure>
                <h4 class="csm-name">
                    <span><?php the_field('service_name') ?></span>
                </h4>
                <p class="csm-desc">
                    <span><?php the_field('service_desc') ?></span>
                </p>
                <p class="csm-price">
                    <span><?php the_field('price') ?></span>
                </p>
            </div>
            <?php

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
