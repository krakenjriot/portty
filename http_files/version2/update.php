<?php	$config = include 'config'; ?>

<?php 

	if(isset($_GET['name'])){
		$name = $_GET['name'];		
	} else {
		$name = "";
	}

?>



<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2><?php  echo strtoupper($name); ?></h2>

<form action="?p=8&name=<?php echo $name; ?>" method="POST">
  <!--<label for="value"><?php echo strtoupper($name); ?></label><br>-->
  <input type="text" id="value" name="value" value="<?php echo $config[$name]; ?>"></br></br>
  <input type="submit" name="submit" value="Update">
</form>


</body>
</html>