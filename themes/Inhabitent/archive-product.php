<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demoTheme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container">
		<header class="page-header">
				<h1 class="page-title">SHOP STUFF</h1>
			<ul class="product-type-list">
				<?php
				$terms = get_terms( array(
					'taxonomy' => 'product_type',
					'hide_empty' => false,
					'number' => '16',
				));

				foreach ($terms as $term) : 
					?>
						<li>
							<a href="<?php echo get_term_link( $term ); ?>" class="btn-prod"><?php echo $term->name; ?></a>
						</li>
				<?php endforeach; ?>
			</ul>
		</header>

			<div class="product-grid">
					<?php
					
					while ( have_posts() ) : the_post(); ?>
						<div class="product-grid-item">
							<div class="thumbnail-wrapper">
								<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail();?></a>
							</div>
							<div class="product-info">
								<h2 class="entry-title">
									<?php echo the_title();?>
								</h2>

								<span class="price"><?php echo CFS()->get( 'price' ); ?></span>
							</div>
						</div>
					<?php endwhile;

					// the_posts_navigation();

			?>
			</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
