<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">   
	<div class="input-group">
	  <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
	  <input type="text" class="form-control" placeholder="Szukaj ..." value="<?php echo get_search_query(); ?>" name="s" id="s" />
	  <span class="input-group-btn">
		<button class="btn btn-default" type="submit">Go !</button>
	  </span>
	</div><!-- /input-group -->
</form>


