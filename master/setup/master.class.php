<?php
// reference
// sintaksa promene baze - oop way:     $db->select_db($new_base);

class ng1np {
	
	//konekcija
	public $host = 'localhost'; 
	public $user = 'webserve_master'; 
	public $pass = 'master=true'; 
	public $base = 'webserve_master'; 
	

	//komande
	public function komande() {

		$db = new mysqli($this->host, $this->user, $this->pass, $this->base);
		if ($db -> connect_errno) { die('Connect Error: '.$db -> connect_errno); }
		if (!mysqli_set_charset($db, "utf8")) {
		printf("Ne mogu setovati karaktere na utf8: %s\n", mysqli_error($db));
		} else {
		$query = 'SELECT * FROM info ORDER BY title';
		$result = $db->query($query);
		$total_results = $result->num_rows;
		echo '<h3>K0m4nd3 $~></h3>';
		echo '<article class="komande"><p>Ukupno '.$total_results.' podatak (a) pronadjen (o) <br />';

		while ($row = $result->fetch_assoc()) 
			{
    			echo '<a href="?up='.$row['title'].'"> '.$row['title'].' </a>';
			}
		echo '</p>';
		}
		echo '</article>';
	} 

	public function engine_up() {

		$db = new mysqli($this->host, $this->user, $this->pass, $this->base);
		if ($db -> connect_errno) { die('Connect Error: '.$db -> connect_errno); }
		if (!mysqli_set_charset($db, "utf8")) {
		printf("Ne mogu setovati karaktere na utf8: %s\n", mysqli_error($db));
		} else {
		$up = (!empty($_GET['up'])?$_GET['up']:'webserveri');
		$query = "SELECT * FROM info WHERE title = '$up'";
		$result = $db->query($query);
		$total_results = $result->num_rows;
		echo '<article class="engine_up">';
		echo '<h3>ng1np $~></h3>';

		while ($row = $result->fetch_assoc()) 
			{
			
    			echo '<h2> '.$row['title'].' </h2>';
			echo '<p><img src="../'.$row['img'].'" width="100"></p>';
			echo '<p>'.$row['desc'].'</p>';
			echo '<p> '.$row['date'].' </p>';
			
			}
		
		echo '</article>';
		}
		
	} 

} //kraj klase --- end of class


?>
