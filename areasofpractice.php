<div class="container bg-dark text-light" id="areasofpractices">
	<div class="row">
		<div class="col-md-12 pt-5 pb-3">
				<h2 class="text-center heading-font">Areas of Practice</h2>
		</div>
	</div>
	<div class="row pt-3 pb-5">
	<?php $args = array( 'post_type' => 'Practice Areas', 'posts_per_page' => 6 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<div class="col-md-4 pt-4">
	  		<h4 class="heading-font text-center"><?php echo the_title(); ?></h4>
	  		<p><?php echo the_content(); ?></p>
			</div>
		<?php endwhile; ?>
	</div>
</div>