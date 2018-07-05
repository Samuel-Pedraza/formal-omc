<div class="container full-width">
	<div class="row footer-top">
		<div class="col-md-6 p-5">
			<h5 class="heading-font">Disclaimer</h5>
			<small>All materials contained on this website are made available by Miles & Gurney, LLC for informational purposes only and should not be construed as legal advice. The transmission and receipt of information contained on this website does not form or constitute an attorney-client relationship. Persons should not act upon information found on this website without first seeking professional legal counsel.</small>
		</div>
		<div class="col-md-6 p-5">
			<h3 class="heading-font">Newsletter</h3>
			<small>Keep up on our latest trial wins, and stay abreast of new law developments. Enter your email and subscribe to our newsletter.</small>
			<form class="form-inline pt-2" method="POST" action="<?php echo admin_url( 'admin-post.php' ); ?>">
				<input type="hidden" name="action" value="capture_email">
				<div class="form-group">
					<input type="email" name="email_information" placeholder="Email Address" class="form-control">
					<input type="submit" class="btn theme-primary-color ml-2" value="Sign Up">
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 footer-bottom">
			<p>© Copyright 2018 The OMC Group</p>
		</div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	function initialize() {

  var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

  // Resize stuff...
  google.maps.event.addDomListener(window, "resize", function() {
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center); 
  });

}
	initialize();
</script>