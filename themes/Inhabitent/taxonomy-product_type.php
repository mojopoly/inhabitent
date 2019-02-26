<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demoTheme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
			<div class ="prod-type container">
				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->
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

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
			?>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
