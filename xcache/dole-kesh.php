<?php
// Kešira sadžaj u datoteku
$keshirano = fopen($keshfajl, 'w');
fwrite($keshirano, ob_get_contents());
fclose($keshirano);
// Šalje output browser-u
if(extension_loaded('zlib')) {ob_end_flush();} 
?>
