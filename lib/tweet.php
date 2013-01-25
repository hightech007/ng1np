<div class="dvanest kol">
<h2>Poslednjih pet twit-ova</h2>
<?php
$korisnicko_ime='webserveri';
$format='xml';
$tweet=simplexml_load_file("http://api.twitter.com/1/statuses/user_timeline/{$korisnicko_ime}.{$format}");
echo "<p>";
echo "<b>1. </b>" . $tweet->status[0]->text; echo "<br />";
echo "<b>2. </b>" . $tweet->status[1]->text; echo "<br />";
echo "<b>3. </b>" . $tweet->status[2]->text; echo "<br />";
echo "<b>4. </b>" . $tweet->status[3]->text; echo "<br />";
echo "<b>5. </b>" . $tweet->status[4]->text;
echo "</p>";
echo "<p>Detaljnije ... <a href='https://twitter.com/webserveri'>https://twitter.com/webserveri</a></p>";
?>
</div>
