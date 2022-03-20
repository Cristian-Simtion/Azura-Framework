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
	    
	    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){   
         $url = "https://";   
         $variabila = "https://";
	    }
    else  { 
         $url = "http://";   
         $variabila = "http://";
    }
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    $domain = parse_url($url);

echo $variabila . $domain['host'] . "/";
	}
?>