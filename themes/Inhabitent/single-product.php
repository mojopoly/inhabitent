<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package demoTheme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();?>


				<div class="product-image-wrapper">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="product-content-wrapper">
					<header class="entry-header"> <h1> <?php the_title(); ?></h1> </header>
					<div class="entry-content">

						<p class="price"> 
							<?php echo CFS()->get( 'price' );?>
						</p>
						<p>
							<?php the_content(); ?>
						</p>
						<div class="social-buttons">
							<button type="button" class="black-btn"><i class="fa fa-facebook"></i>Like</button>
							<button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
							<button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
						</div>
					</div>
				</div>

		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
