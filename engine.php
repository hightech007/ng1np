<?php
$db = new mysqli('localhost', 'user', 'pass', 'base');
if ($db -> connect_errno) {
  die('Connect Error: '.$db -> connect_errno);
}
if (!mysqli_set_charset($db, "utf8")) {
  printf("Ne mogu postaviti karaktere na utf8: %s\n", mysqli_error($db));
}
else { 
  $up = (!empty($_GET['up'])?$_GET['up']:'default_upit');
  $rezultat = $db->query("SELECT * FROM info WHERE title = '$up'");
  if ($rezultat->num_rows>0) {
    while ($row = $rezultat -> fetch_object()) {
      require_once 'setup/tpl/_engine.php';
    }
  }
  else {
    echo 'Nema rezultata';
  }
}
