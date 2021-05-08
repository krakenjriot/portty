<?php include_once("functions.php"); ?>

<?php 
	
	if(isset($_POST['p'])&& isset($_POST['s'])){			
	
		$p = $_POST['p'];
		$s = $_POST['s'];
		
		update_pin($p, $s);		
	} 

?>