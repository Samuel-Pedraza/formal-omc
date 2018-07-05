<?php

	function add_practice_area(){
		register_post_type('Practice Areas',
			array(
				'labels' => array(
					'name' => _('Practice Areas'),
					'singular_name' => ('Practice Area')
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'practice-area'),
			)
		);
	}

	function add_attorney(){
		register_post_type('Attorney',
			array(
				'labels' => array(
					'name' => _('Attorney'),
					'singular_name' => ('Attorney')
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'attorney'),
			)
		);
	}

function case_results(){
		register_post_type('Case Results',
			array(
				'labels' => array(
					'name' => _('Case Results'),
					'singular_name' => ('Case Result')
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'caseresults'),
			)
		);
	}	

function get_first_image() {
	global $post, $posts;
	
	$first_image = '';
	
	ob_start();
	ob_end_clean();
	
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_image = $matches [1] [0];
		
	if(empty($first_image)){ //Defines a default image
		// Set the default image if there are no image available inside post content
		$first_image = "/img/default.jpg";
	}
	
	return $first_image;
}

function lawyerinformation(){
	?>
	<h3 class="title">Set Lawyer Information</h3>
	<form method="post" action="options.php">
		<?php settings_fields('lawyerinfo-settings-group'); ?>
		<div>
			<input type="text" name="address" placeholder="Address" value="<?php echo esc_attr(get_option('address'))?>">
		</div>
		<div>
			<input type="text" name="phone" placeholder="Phone" value="<?php echo esc_attr(get_option('phone'))?>">
		</div>
		<div>
			<input type="text" name="email" placeholder="Email" value="<?php echo esc_attr(get_option('email'))?>">
		</div>
		<div>
			<?php submit_button(); ?>
		</div>
	</form>
	<?php
}

function add_lawyerinfo_options_page(){
	add_menu_page('Lawyer Info', 'Lawyer Info', 'manage_options', "manage-lawyerinfo-options", "lawyerinformation");
	add_action('admin_init', 'lawyer_custom_settings');
}

function lawyer_custom_settings(){
	register_setting('lawyerinfo-settings-group', 'address');
	register_setting('lawyerinfo-settings-group', 'phone');
	register_setting('lawyerinfo-settings-group', 'email');
}

add_action('admin_menu', 'add_lawyerinfo_options_page');

add_action('init', 'case_results');
add_action('init', 'add_practice_area');
add_action('init', 'add_attorney');

add_action( 'admin_post_nopriv_capture_email', 'insert_into_capture_email' );
add_action( 'admin_post_capture_email', 'insert_into_capture_email' );

add_action( 'admin_post_nopriv_capture_form', 'insert_into_contact_form' );
add_action( 'admin_post_capture_form', 'insert_into_contact_form' );

function insert_into_capture_email(){
	global $wpdb;
	$table = $wpdb->prefix . "emailcapture";
	$wpdb->insert($table, array(
		'email' => $_POST['email_information'],
		'created' => date("Y-m-d H:i:s"))
	);
	$redirect = add_query_arg('email-capture', 'success', "http://localhost:8000/");
	return wp_redirect($redirect);
}

function insert_into_contact_form(){
	global $wpdb;
	$table = $wpdb->prefix . "contactform";
	$wpdb->insert($table, array(
		'name' => $_POST['contact-form-name'],
		'emailaddress' => $_POST['contact-form-email'],
		'subject' => $_POST['contact-form-subject'],
		'message' => $_POST['contact-form-message'])
	);
	wp_mail("samdpedraza@gmail.com", "Contact Form Alert!", $_POST['contact-form-message']);
	$redirect = add_query_arg('contact-form', 'success', "http://localhost:8000/");
	return wp_redirect($redirect);
}