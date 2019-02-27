<?php
/**
 * Template Name: front
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
		<section class="home-hero">
		<img src="http://localhost/project4-inhabitent-new/wordpress/wp-content/uploads/2019/02/inhabitent-logo-full.svg" 
		class="logo" alt="Inhabitent full logo">

        </section>
		<section class="product-info container">
				<h2>SHOP STUFF</h2>
			<div class="product-type-blocks">
				<?php
				$terms = get_terms( array(
					'taxonomy' => 'product_type',
					'hide_empty' => false,
				));

				foreach ($terms as $term) : 
					?>
					<div class="product-type-block-wrapper">
						<img src = <?php echo "http://localhost/project4-inhabitent-new/wordpress/wp-content/uploads/2019/02/" . $term->slug . ".svg"?> alt="Do">
	
							<?php echo term_description($term);?>

						<p>
							<a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a>
						</p>
					</div>
				<?php endforeach; ?>
			</div>
		</section>
		<section class="latest-entries">
				<div class="container">
					<?php 
						$args = array('post_type' => 'post', 'numberposts' => '3');
						$news_posts = get_posts($args);

						if (! empty($news_posts)) :
					?>
					<h2>INHABITANT JOURNAL</h2>
					<ul>
						<?php foreach($news_posts as $post) : setup_postdata($post); ?>
						<li>
							<div class="thumbnail-wrapper"><?php the_post_thumbnail();?></div>
							<div class= "post-info-wrapper">
								<span class= "entry-meta">
									<span class="posted-on">
										<time class="entry-date published" datetime="2016-04-14T18:40:34+00:00"><?php demotheme_posted_on();?></time>	
									</span>
									<?php comments_number();?>
								</span>
								<h3 class="entry-title">
									<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a>
								</h3>	
							</div>
							<a class="black-btn" href = "<?php the_permalink(); ?>">READ ENTRY</a>
						</li>

						<?php endforeach; wp_reset_postdata(); ?>
		
					</ul>
						<?php endif; ?>
				</div>

			</section>
			<section class="adventures container">
					<?php 
						$args = array('post_type' => 'adventure');
						$news_posts = get_posts($args);

						if (! empty($news_posts)) :
					?>
						<h2>LATEST ADVENTURES</h2>
						<ul>
						<?php foreach($news_posts as $post) : setup_postdata($post); ?>
						<li>
							<div class="story-wrapper">
								<?php the_post_thumbnail();?>
								<div class= "story-info">
									<h3 class="entry-title">
										<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a>
									</h3>	
								</div>
								<a class="white-btn" href = "<?php the_permalink(); ?>">READ MORE</a>
							</div>
						</li>
						<?php endforeach; wp_reset_postdata(); ?>
		
						</ul>
						<p class="see-more">
                  			<a href="http://localhost/project4-inhabitent-new/wordpress/adventure/" class="btn">MORE ADVENTURES</a>
               			</p>
						<?php endif; ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
?>
