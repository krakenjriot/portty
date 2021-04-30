<?php 

	if(isset($_GET['set'])){
		
	
		$set = $_GET['set'];
		
		
		
		if($set == '1'){
			file_put_contents("C:\\tmp\conf\b1.conf","00000001000000000000");
			echo "the pin now is ON";
		}		
		
		if($set == '0'){
			file_put_contents("C:\\tmp\conf\b1.conf","00000000000000000000");
			echo "the pin now is OFF";
		}	
	
	} else {
		echo "set not set!";
	}
	
	echo "</br>";
	echo file_get_contents("C:\\tmp\conf\b1.conf");


?>