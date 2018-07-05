<div class="container">
	<div class="row">
		<div class="col-md-12 pt-5" id="attorney">
			<h3 class="heading-font"><?php echo bloginfo('sitetitle'); ?></h3>
			<hr>
		</div>		
	<?php $args = array( 'post_type' => 'Attorney', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<div class="col-md-3 pt-4">
	  		<img src="<?php echo get_first_image(); ?>" class="img-fluid">
			</div>
			<div class="col-md-9">
				<h4 class="heading-font"><?php echo the_title(); ?></h4>
				<small>Attorney</small>
				<p><?php echo wp_strip_all_tags( get_the_content() ); ?></p>
			</div>
		<?php endwhile; ?>		
	</div>
</div>