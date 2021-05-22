<?php	$config = include 'config'; ?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Board Name: <?php echo $config['board_name']; ?></h2>

<table>
  <tr>
    <th>Item</th>
    <th>Descriptions</th>
  </tr>

  <tr>
	<td><a href="?p=2">SWITCHES</a></td>    
    <td>HTML Toggle Switches (Arduino Pins)</td>
  </tr>
  
  <tr>
	<td><a href="?p=6">SHOW LIMITS</a></td>
	<td>Show Min, Max values and Min.pin, Range.pin and Max.pin</td>
	</tr>

  <tr>
	<td><a href="?p=5">SHOW INPUT</a></td>
	<td>Data sent by sensors</td>
	</tr>	
	
  <tr>
	<td><a href="?p=4">SHOW OUTPUT</a></td>
	<td>Output Pin Values</td>
	</tr>		
 
  <tr>
	<td><a href="#">CHARTS</a></td>
	<td>Charted Sensor Data Statistics</td>
	</tr>	

  <tr>
	<td><a href="?p=3">SHOW CONFIG</a></td>
	<td>Configuration Values</td>
	</tr>


  
</table>


</body>
</html>