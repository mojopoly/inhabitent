<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demoTheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="secondary footer-blocks container">
				<div id="footer-sidebar1" class="footer-block-item">
					<?php
					if(is_active_sidebar('footer-sidebar-1')){
						dynamic_sidebar('footer-sidebar-1');
					}?>
				</div>
				<div id="footer-sidebar2" class="footer-block-item">
					<?php
						if(is_active_sidebar('footer-sidebar-2')){
						dynamic_sidebar('footer-sidebar-2');
						}
					?>
				</div>
				<div id="footer-sidebar3" class="footer-block-item">
					<?php
					if(is_active_sidebar('footer-sidebar-3')){
					dynamic_sidebar('footer-sidebar-3');
					}
					?>
				</div>
		</div>
				
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
