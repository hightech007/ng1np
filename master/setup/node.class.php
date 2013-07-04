<?php
// reference
// sintaksa promene baze - oop way:     $db->select_db($new_base);
// klasa n0d3 sadrzi elemente klase ng1np

class n0d3 extends ng1np {

	//node
	private $n1="('node1')";
	private $n2="('node2')";
	private $n3="('node3')";
	//node funkcija	
	public function node() {
		
		echo '<article class="n0d3">';
		echo '<form>Mapa sajta *LiveSearch <br /><input type="text" size="20" onkeyup="showResult(this.value)"><div id="livesearch"></div></form>';
		echo '<ul>';
  			echo '<li>';
    				echo '<a href="#" onclick="toggle'.$this->n1.'">ws1-node (1) komande</a>';
    				echo '<ul id="node1" style="display:none">';
				 

				$db = new mysqli($this->host, $this->user, $this->pass, $this->base);
      				$q = "SELECT title FROM info ORDER BY id";
				$r = $db->query($q); $tr = $r->num_rows;
				while ($row = $r->fetch_assoc()) 
					{
    					echo '<li><a href="'.$row['url'].'"> '.$row['title'].' </a></li>';
					}

      				echo '</ul><ul><li>
        			<a href="#" onclick="toggle'.$this->n2.'">ws1-node (2)</a>
        			<ul id="node2" style="display:none">
          				<li>ws1-node-sub-sub-item 1</li>
          				<li>ws1-node-sub-sub-item 2</li>
        			</ul>
      			</li>
      			<li>ws1-node-sub-item 3</li>
    			</ul>
  			</li>
  		<li>';
    		
 
		echo '<a href="#" onclick="toggle'.$this->n3.'">(node 3) $-> user</a>';
    		$dirs = array(); chdir('user'); $d= getcwd(); $x= scandir($d); 
		echo '<ul id="node3" style="display:none">'; 
		foreach ($x as $dir) {
			if (is_dir($dir) && $dir !='.' && $dir != '..' && $dir != 'setup' && $dir != 'holobox_serbia') {
				array_push($dirs,$dir);
				echo '<li><a href="user/'.$dir.'">'.$dir.'</a></li>'; } 
    			} 
		echo '</ul></li><li>ws1-node-item 3</li></ul></article>'; 
	} 


} //kraj klase --- end of class


?>
