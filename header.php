<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Playfair+Display+SC" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo bloginfo('title'); ?> | <?php echo bloginfo('tagline'); ?></title>
</head>
<body>

<nav>
	<?php if ( filter_input( INPUT_GET, 'email-capture' ) === 'success' ) : ?>
		<div class="container theme-primary-color">
			<div class="row">
				<div class="col-md-12">
					<p class="text-center p-3">Congrats! You have been signed up!</p>
				</div>
			</div>
		</div>			
	<?php endif ?>
	<?php if ( filter_input( INPUT_GET, 'contact-form' ) === 'success' ) : ?>
		<div class="container theme-primary-color">
			<div class="row">
				<div class="col-md-12">
					<p class="text-center p-3">Your message has been sent!</p>
				</div>
			</div>
		</div>			
	<?php endif ?>
	<div class="container">	
			<div class="row">
				<div class="col-md-12 nav-top-banner pt-2 pb-2"">
					<?php $args = array( 'post_type' => 'Practice Areas', 'posts_per_page' => 6 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
	  				<small><?php echo the_title(); ?>.</small>
					<?php endwhile; ?>
				</div>
				<div class="col-md-12">
					<p class="" style="text-align: right; font-size: 16px; padding-top: 5px;"><strong style="font-family: sans-serif;">
						<?php echo get_option('phone'); ?>
					</strong></p>
				</div>
			</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 pb-5"  style="text-align: center;">
					<img src="http://localhost:8000/wp-content/uploads/2018/07/Untitled-2.png" class="img-fluid" style="height: 75px;">
					<p><?php echo bloginfo('title'); ?></p>
				</div>
				<div class="col-md-9">
					<ul class="nav nav-pills float-right">
					  <li class="nav-item">
					    <a class="nav-link" href="/">Home</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#areasofpractices">Practice Areas</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#attorney">Attorney</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#results">Results</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#contact">Contact Us</a>
					  </li>
					</ul>					
				</div>
			</div>
		</div>
	</div>
</nav>