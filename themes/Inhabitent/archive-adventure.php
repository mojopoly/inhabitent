<?php
/**
 *  
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
		<div class="container">
		<header class="page-header">
				<h1 class="page-title">Latest Adventures</h1>
		</header>
				<div class="adventure-grid">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="adventure-grid-item">
							<div class="story-wrapper">
								<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail();?></a>
							</div>
							<div class="story-info">
								<h2 class="entry-title">
									<?php echo the_title();?>
								</h2>
							</div>
							<a class="white-btn" href = "<?php the_permalink(); ?>">READ MORE</a>
						</div>
					<?php endwhile; ?>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
