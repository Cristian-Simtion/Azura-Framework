<?php
	function get_filename() {
		$filename = $_SERVER['SCRIPT_NAME'];
		$info = pathinfo($filename);
		return $info;
	}

	function get_title() {
		$info = get_filename();
		$title = str_replace('-', ' ', $info['filename']);
		$title = ucfirst($title);
		return $title;
	}

	function the_template_path() {
		$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		echo pathinfo($url, PATHINFO_DIRNAME) . "/";
	}	
?>