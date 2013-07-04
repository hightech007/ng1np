<?php
class DB {
  protected $db = 0;

  function konektuj($host, $user, $pass, $base) {
    $this->db = new mysqli($host, $user, $pass, $base);
  }

  function select($query) {
    return $this->db->query("SELECT ".$query);
  }

/*
* ostale metode ce se ovde implementirati
*/

  function kraj() {
    $this->db->close();
  }
} 




?>
