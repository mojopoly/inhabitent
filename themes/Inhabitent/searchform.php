<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<a href="#" class="search-toggle" aria-hidden="true">
				<i class="fa fa-search"></i>
		</a>
		<label>
			<input type="search" class="search-field" placeholder="TYPE AND HIT ENTER..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="SEARCH RESULTS FOR:" />
		</label>
		<input type="submit" id="search-submit" class="screen-reader-text" value="Search">
		<!-- <button class="search-submit">
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button> -->
	</fieldset>
</form>
