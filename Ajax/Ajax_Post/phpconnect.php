<html>

<body>
	<?php
		
		$conn = mysqli_connect('localhost','i95dev','i95dev','Mysql_test');
		
		$q = intval($_POST['q']);
		
		$query = 'SELECT * FROM Mysql_practice where id='.$q;
		
		if(!$conn){
			echo "Something went wrong";
			return;
		}
		
		
		$result = mysqli_query($conn,$query);
		
		echo "<table>
		<tr>
			<th>Firstname</th>
			<th>Country</th>
			<th>Age</th>

		</tr>";
		while($row = mysqli_fetch_array($result)) {
		  echo "<tr>";
		  echo "<td>" . $row['Name'] . "</td>";
		  echo "<td>" . $row['Country'] . "</td>";
		  echo "<td>" . $row['Age'] . "</td>";
		  echo "</tr>";
		}
		echo "</table>";
		mysqli_close($con);
	?>
	
	
</body>

</html>