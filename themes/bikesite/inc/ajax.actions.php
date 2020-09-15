<?php
add_action('init', 'action_init');
function action_init(){
	dependdrop_one();
}
function dependdrop_one(){
	wp_register_script('ajax-dependdrop-one-script', get_template_directory_uri() . '/assets/js/ajax.scripts.js', array('jquery') );
	wp_enqueue_script('ajax-dependdrop-one-script');

	wp_localize_script( 'ajax-dependdrop-one-script', 'ajax_user_dependdrop_one_object', array(
	    'ajaxurl' => admin_url( 'admin-ajax.php' )
	));
	// Enable the user with no privileges to run ajax_login() in AJAX
	add_action( 'wp_ajax_nopriv_dependdrop_one_bike_model', 'dependdrop_one_bike_model');
	add_action( 'wp_ajax_dependdrop_one_bike_model', 'dependdrop_one_bike_model');
}

function dependdrop_one_bike_model(){
	if (isset( $_POST["nonce"] ) && ($_POST['nonce'] == 'yes')) {
		if( isset($_POST["option"]) && !empty($_POST["option"]) ){
			$blargs = array(
			'posts_per_page' => -1,
			'post_type' => 'bike',
			'tax_query'     => array(
			  array(
			      'taxonomy'  => 'brand',
			      'field'     => 'slug', 
			      'terms'     => $_POST["option"]
			  )
			) 
			);
			$blquery = new WP_Query($blargs);
			echo '<option value="">Select Model</option>';
			if($blquery->have_posts()):
			while ( $blquery->have_posts() ) : $blquery->the_post();
				$spcf = get_field('full_specifications');
				$model = $spcf['model'];
				echo '<option value="'.$model.'">'.$model.'</option>';        
			endwhile;
			wp_reset_postdata(); endif;
		}
	}
}