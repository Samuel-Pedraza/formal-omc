<div class="container pt-5">
	<div class="row">
		<div class="col-md-9">
			<h1 class="pb-3 heading-font" id="contact">Contact Us</h1>
			<form method="POST" action="<?php echo admin_url( 'admin-post.php' ); ?>">
				<input type="hidden" name="action" value="capture_form">
				<div class="form-group">
					<input type="text" placeholder="Name" name="contact-form-name" class="form-control" >
				</div>
				<div class="form-group">
					<input type="text" placeholder="Email Address" name="contact-form-email" class="form-control" >
				</div>
				<div class="form-group">
					<input type="text" placeholder="Subject" name="contact-form-subject" class="form-control" >
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="8" name="contact-form-message" placeholder="Message"></textarea>
				</div>
				<div class="form-group">
					<small><strong>DISCLAIMER:</strong> The use of the Internet for communications with the firm will not establish an attorney-client relationship and messages containing confidential or time-sensitive information should not be sent.</small>
					<br>
					<label><input type="checkbox"> I have read the disclaimer</label>
				</div>
				<div class="form-group">
					<button class="btn theme-primary-color">Submit</button>
				</div>
			</form>
		</div>
		<div class="col-md-3	">
			<h5 class="pt-5 heading-font">ADDRESS, PHONE & EMAIL</h5>
			<small>
				<?php echo bloginfo('title'); ?><br>
				<?php echo get_option('address'); ?><br>
				p. <?php echo get_option('phone'); ?><br>
				Email: <?php echo get_option('email'); ?><br>
			</small>
			<h5 class="pt-2 heading-font">OFFICE HOURS</h5>
			<small>
				Monday: 9am to 5pm<br>
				Tuesday: 9am to 5pm<br>
				Wednesday: 9am to 5pm<br>
				Thursday: 9am to 5pm<br>
				Friday: 9am to 5pm<br>
				Saturday: Closed<br>
				Sunday: Closed<br>
			</small>
		</div>
	</div>
</div>