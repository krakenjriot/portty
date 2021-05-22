<?php	$config = include 'config'; ?>

<a href="?p=1"><label>Back to Main Page</label></a>
</br>
</br>


<?php 
	
	$output_file = file_get_contents($config['conf_dir']."\\".$config['board_name'].".input");
	
	echo "<h2>".nl2br($output_file )."</h2>";
	
	//"<pre>".$str."</pre>";


?>
</br>
</br>
<a href="?p=1"><label>Back to Main Page</label></a>