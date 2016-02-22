<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nintai_s
 */

?>

	</div><!-- #content, .row (bootstrap) -->
</div><!-- conatiner (bootstrap) -->

	<div class="container" role="contentinfo">
		<div class="col-sm-12 text-center">
			<p>© COPYRIGHT 2016</p>
		</div><!-- .site-info -->
	</div><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</body>
</html>
