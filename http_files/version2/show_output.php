<a href="?p=1"><label>Back to Main Page</label></a>
</br>
</br>
<?php 
	$config = include 'config';		
	echo "<h2>".nl2br(file_get_contents($config['conf_dir']."\\".$config['board_name'].".output"))."</h2>";
?>
</br>
</br>
<a href="?p=1"><label>Back to Main Page</label></a>