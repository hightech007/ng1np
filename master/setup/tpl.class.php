<?php
class tpl {
	
	public function kompresija() {
		if (@ini_set('zlib.output_compression',TRUE) ||
    		@ini_set('zlib.output_compression_level',2)) 
		{
    			ob_start();
			} else {
    				ob_start('ob_gzhandler');
				}

	}

	
	public function stop_kompresija() {
		if(extension_loaded('zlib')) {ob_end_flush();} 
	}

	
	public function min_js() {
		echo '<script src="setup/js/min.js" type="text/javascript"></script> ';
	}



		
	public function head() {
		
		echo '<!doctype html>
		<html dir="ltr" lang="EN"> 
		<head> 
		<meta charset="UTF-8" /> 
		<meta name="description" content="Mi smo entuzijasti okupljeni oko ideje o transparentnosti kompjuterskih sistema, servera, 			programiranja ..." /> 
		<meta name="keywords" content="serveri, web, programiranje, ng1np, nginz, " /> 
		<meta name="title" content="WebServeri" /> 
		<title>Web Serveri 1nfo | ng1np</title> 	
		<link href="setup/css/stil.css" rel="stylesheet"  type="text/css" media="screen" />
		<link type="text/plain" rel="author" href="humans.txt" />
		<link href="../media/ws1/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">				
		</head>
		<body>';

	} 


	private $content="('content', this)";
	private $content2="('content2', this)";
	public function up_down() {
		
		echo '
		<!-- up -->
		<div id="content" class="content" style="display:none">
		Dobrodoshli u svet charobnjaka i drugih ninja ratnika ...
		</div><hr />
		<a href="#" onclick="toggle2'.$this->content.'" id="dw">dw</a>
		<!-- down -->';

	} 

	public function up_down2() {
		
		echo '
		<!-- up -->
		<div id="content2" class="content2" style="display:none">
		Dobrodoshli u svet charobnjaka i drugih ninja ratnika ...
		</div><hr />
		<a href="#" onclick="toggle2'.$this->content2.'" id="dw">dw</a>
		<!-- down -->';

	} 

	public function fusnota() {
		
		echo '
		<!-- up -->
		<footer class="fusnota">
		2013 :: ws1 :: ng1np
		</footer>
		</body>
		</html>';

	} 


}
?>
