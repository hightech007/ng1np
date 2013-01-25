<?php if(extension_loaded('zlib')){ob_start('ob_gzhandler');} header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html lang="sr">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="ovde ide kratak opis sajta" />
	<meta name="keywords" content="ovde, idu, kljucne, reci " />
	<meta name="author" content="hightech" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="robots" content="index,follow"> 
	<meta name="robots" content="noodp, noydir"/> 
	<link rel="stylesheet" href="css/stil.css" />
	<link rel="stylesheet" href="css/grid.css" />
	<link rel="stylesheet" href="css/animacija.css" />
	<link rel="stylesheet" href="css/slajder.css" />
	<link rel="stylesheet" href="css/query.css" />
	<link rel="shortcut icon" href="media/favicon.ico" />
	<title>nginp</title>
	<!-- <script src="#" type="text/javascript"></script>  -- opciono -- -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

<section class="holder">

<header>

<!-- dugmici -->
              
	<a href="?q=nginp"><div class="dugme dugme-iko" id="dugme"><img src="media/png/engine_up.png" />
                  <div class="maska"><h2>ng1np<br />powered by<br />hightech</h2></div></a>
        </div>
         
	<a href="?q=kontakt"><div class="dugme dugme-iko" id="dugme"><img src="media/png/kontakt.png" />
                  <div class="maska"><h2>kontakt<br />feedback</h2></div></a>
        </div>

	<a href="?q=rss"><div class="dugme dugme-iko" id="dugme"><img src="media/png/rss.png" />
                  <div class="maska"><h2>RSS</div></a>
        </div>
       

</header>

<article class="grid">
	
<div class="cetiri kol">
		<nav>
		<ul>
		<li><a href="?q=home">Home[Ng1nP]</a></li>
		<li><a href="?q=tips">Tips</a></li>
		<li><a href="?q=kontakt">Kontakt</a></li>
		<li><a href="?q=tweet">Tweet</a></li>
		<li><a href="?q=rss">RSS</a></li>
		</ul>
		</nav>
</div>

	<?php
	$str = $_GET['q']; 
	# dozvoljene putanje
	switch ($str) {
 	   case 'tips':
	   case 'kontakt':
 	   case 'rss':
 	   case 'tweet':
 	       include 'lib/'.$str.'.php';
 	       break;
 	   default:
               include 'lib/home.php';
	}
	?>



</article>
	
<footer>	
	<figure> 
		
		<a href="?q=rss"><img src="media/rss.png" alt="rss"></a>
		<a href="https://twitter.com/webserveri"><img src="media/tw.png" alt="twitter"></a>
		<a href="http://www.youtube.com/user/antistereotip"><img src="media/yt.png" alt="youtube"></a>
		
	</figure>
		<p id="f">
		2013 @ antistereotip :: webserveri :: hostovao <br /> 
		engine <b><a href="?q=home">/ng1np &reg;</a></b> [ng1np &reg;] 
		by hightech
		</p>
		
		
</footer>
</section>
</body>
</html>
<?php if(extension_loaded('zlib')){ob_end_flush();}?>
