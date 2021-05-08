<?php 
	if(isset($_POST['p'])&& isset($_POST['s'])){			
	
		$p = $_POST['p'];
		$s = $_POST['s'];
		
		if($p == 8){
			if($s == 'true') file_put_contents("C:\\tmp\conf\b1.output","00000000100000000000");
			if($s == 'false') file_put_contents("C:\\tmp\conf\b1.output","00000000000000000000");
		}			
	} 
	
	//file_put_contents("C:\\tmp\conf\b1.output",$s);

?>