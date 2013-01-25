<div class="dvanest kol">
<?php
$otvori_feed = @fopen("rss/januar2013/rss.rss", "r");
if ($otvori_feed) {
$podaci = "";
   while (!feof($otvori_feed)) {
   $podaci .= fread($otvori_feed, 8192);
   }
}
fclose($otvori_feed);
echo '<p>'.$podaci. '</p>';
?>
</div>
