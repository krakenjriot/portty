<?php 

	//if(isset($_POST['submit'])){
		
		$name = $_GET['name'];		
		$value = $_POST['value'];		
		
		$config = include 'config';
		
		$config[$name] = $value;
		
		file_put_contents('config', '<?php return ' . var_export($config, true) . ';');	
		
		header("location: ?p=2 ");
		exit();	
	//} 
?>

