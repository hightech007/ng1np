<form>
<input name="pretrazi" method="get" type="search"  class="" placeholder=" Search... " autofocus>
<input type="submit" value="ENTER" class="button">
</form>

<?php
$pretrazi = $_GET['pretrazi']; 
$sta_pretrazujemo = 'antistereotip apache c cherokee commandlinefu css3 debian fewona filmovionline fsf gaddafi gnu gwan hightech html5 irc kgb libre linog linux linuxzasve lisp ludus mongodb mysql nemysis neo4j ng1np nginx nginz oklop php popivoda postgresql profi python routefor sceko slackware-srbija sql unix videoteka webserveri wideip zaneupucene zdroid zdroidblog zpop'; 
$rezultat = eregi($pretrazi,$sta_pretrazujemo);
if ($rezultat){ echo 'True, <b style="color:green">'.$pretrazi.'</b> je pronadjen!'; } 
        else { echo 'False, <b style="color:red">'.$pretrazi.'</b> nije pronadjen!'; }
?>

