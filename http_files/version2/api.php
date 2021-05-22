
<?php 
	
	if(isset($_POST['pn'])&& isset($_POST['s'])){			
	
		$pn = $_POST['pn'];
		$s = $_POST['s'];
		
		update_pin($pn, $s);
		
	} 	

?>