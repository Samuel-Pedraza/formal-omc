<div class="container pt-5" id="results">
	<div class="row">
		<div class="col-md-12 bg-dark text-light heavy-padding">
			<h3 class="heading-font">Case Results</h3>
			<hr>
			<?php $args = array( 'post_type' => 'Case Results', 'posts_per_page' => 6 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<h4 class="heading-font"><?php echo the_title(); ?></h4>
				<p>
					<?php echo the_content(); ?>
				</p>
				<hr>
			<?php endwhile; ?>
		</div>
	</div>
</div>

