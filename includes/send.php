<?php


add_action('wp_ajax_nopriv_contact_form', 'contact_form');
add_action('wp_ajax_contact_form', 'contact_form');


if (!function_exists('contact_form')) {
	function contact_form() {
		
		$your_name = $_POST['username'];
		$your_email = $_POST['useremail'];
		$your_phone = $_POST['usertelephone'];

		$admin_email = get_bloginfo('admin_email');


		$to_admin = $admin_email;


		$headers_admin .= 'From: ' .$your_name.' <'.$your_email.'>';
		$subject_admin = 'Новое сообщение с сайта '.home_url();
		$message_admin = ' Новое сообщение с сайта '.home_url();
		$message_admin_info ='

	Имя: ' . $your_name.'
	Email: ' . $your_email.'
	Телефон: ' . $your_phone;


		$message_admin .= $message_admin_info;


		wp_mail($to_admin, $subject_admin, $message_admin, $headers_admin);



		wp_send_json_success(array( 
			'post_title' => $your_name,
		));
	}
}
//contact_form();




?>