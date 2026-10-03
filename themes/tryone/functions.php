<?php

function tryone_setup() {
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'tryone_setup');

function tryone_register_page_routes() {
	add_rewrite_rule('^projecten/?$', 'index.php?tryone_projects=1', 'top');
	add_rewrite_rule('^contact/?$', 'index.php?tryone_contact=1', 'top');
}
add_action('init', 'tryone_register_page_routes');

function tryone_register_page_query_vars($query_vars) {
	$query_vars[] = 'tryone_projects';
	$query_vars[] = 'tryone_contact';
	return $query_vars;
}
add_filter('query_vars', 'tryone_register_page_query_vars');

function tryone_load_custom_page_template($template) {
	if (get_query_var('tryone_contact')) {
		return get_theme_file_path('page-contact.php');
	}

	if (get_query_var('tryone_projects')) {
		return get_theme_file_path('page-projecten.php');
	}

	return $template;
}
add_filter('template_include', 'tryone_load_custom_page_template');

function tryone_flush_project_route() {
	if (!get_option('tryone_project_route_flushed') || !get_option('tryone_contact_route_flushed')) {
		flush_rewrite_rules();
		update_option('tryone_project_route_flushed', true);
		update_option('tryone_contact_route_flushed', true);
	}
}
add_action('init', 'tryone_flush_project_route', 99);

function tryone_enqueue_assets() {
	wp_enqueue_style(
		'tryone-style',
		get_theme_file_uri('dist/css/theme.css'),
		array(),
		filemtime(get_theme_file_path('dist/css/theme.css'))
	);

	$script_dependencies = array();
	if (is_front_page()) {
		wp_enqueue_script(
			'tryone-three',
			'https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js',
			array(),
			'r121',
			true
		);

		wp_enqueue_script(
			'tryone-vanta-birds',
			'https://cdn.jsdelivr.net/npm/vanta@0.5.24/dist/vanta.birds.min.js',
			array('tryone-three'),
			'0.5.24',
			true
		);

		$script_dependencies[] = 'tryone-vanta-birds';
	}

	wp_enqueue_script(
		'tryone-script',
		get_theme_file_uri('dist/js/theme.js'),
		$script_dependencies,
		filemtime(get_theme_file_path('dist/js/theme.js')),
		true
	);
}
add_action('wp_enqueue_scripts', 'tryone_enqueue_assets');

function tryone_redirect_contact_form($status) {
	wp_safe_redirect(add_query_arg('contact_status', $status, home_url('/contact/')));
	exit;
}

function tryone_contact_text_length($value) {
	$length = preg_match_all('/./us', $value);
	return false === $length ? PHP_INT_MAX : $length;
}

function tryone_configure_contact_mailer($mailer) {
	$mailer->isSMTP();
	$mailer->Host = 'smtp-mail.outlook.com';
	$mailer->Port = 587;
	$mailer->SMTPAuth = true;
	$mailer->SMTPSecure = 'tls';
	$mailer->SMTPAutoTLS = true;
	$mailer->Username = getenv('WORDPRESS_SMTP_USERNAME');
	$mailer->Password = getenv('WORDPRESS_SMTP_PASSWORD');
	$mailer->setFrom($mailer->Username, wp_specialchars_decode(get_bloginfo('name'), ENT_QUOTES), false);
}

function tryone_send_contact_form() {
	if (!isset($_SERVER['REQUEST_METHOD']) || 'POST' !== $_SERVER['REQUEST_METHOD']) {
		tryone_redirect_contact_form('error');
	}

	check_admin_referer('tryone_send_contact', 'tryone_contact_nonce');

	$name = isset($_POST['contact_name']) ? sanitize_text_field(wp_unslash($_POST['contact_name'])) : '';
	$email = isset($_POST['contact_email']) ? sanitize_email(wp_unslash($_POST['contact_email'])) : '';
	$subject = isset($_POST['contact_subject']) ? sanitize_text_field(wp_unslash($_POST['contact_subject'])) : '';
	$message = isset($_POST['contact_message']) ? sanitize_textarea_field(wp_unslash($_POST['contact_message'])) : '';

	if (
		'' === $name || tryone_contact_text_length($name) > 120 ||
		!is_email($email) || strlen($email) > 254 ||
		'' === $subject || tryone_contact_text_length($subject) > 150 ||
		'' === $message || tryone_contact_text_length($message) > 5000
	) {
		tryone_redirect_contact_form('error');
	}

	$smtp_username = getenv('WORDPRESS_SMTP_USERNAME');
	$smtp_password = getenv('WORDPRESS_SMTP_PASSWORD');
	if (!is_string($smtp_username) || !is_email($smtp_username) || !is_string($smtp_password) || '' === $smtp_password) {
		error_log('Portfolio contact email is not configured: Outlook SMTP credentials are missing or invalid.');
		tryone_redirect_contact_form('error');
	}

	$mail_message = sprintf(
		"Naam: %s\nE-mailadres: %s\n\nBericht:\n%s",
		$name,
		$email,
		$message
	);

	add_action('phpmailer_init', 'tryone_configure_contact_mailer');
	$sent = wp_mail(
		'tyronedoffei@outlook.com',
		'Portfolio contact: ' . $subject,
		$mail_message,
		array('Reply-To: ' . $email)
	);
	remove_action('phpmailer_init', 'tryone_configure_contact_mailer');

	if (!$sent) {
		error_log('Portfolio contact email could not be sent through Outlook SMTP.');
	}
	tryone_redirect_contact_form($sent ? 'sent' : 'error');
}
add_action('admin_post_tryone_send_contact', 'tryone_send_contact_form');
add_action('admin_post_nopriv_tryone_send_contact', 'tryone_send_contact_form');
