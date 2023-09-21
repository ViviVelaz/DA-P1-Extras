<html>
	<body>
		<?php 
			$server = "localhost";
			$user = "viviana"; 
			$password = "123"; 
			$database = "formularioDB"; 
			$conn = new mysqli("localhost", $username, $password, $database); 
			$query = "SELECT * FROM datospersonales";


			echo '<table border="0" cellspacing="2" cellpadding="2"> 
				  <tr> 
					  <td> <font face="Arial">Apellido Paterno</font> </td> 
					  <td> <font face="Arial">Apellido Materno</font> </td> 
					  <td> <font face="Arial">Nombres</font> </td> 
					  <td> <font face="Arial">Sexo</font> </td> 
					  <td> <font face="Arial">Email</font> </td> 
					  <td> <font face="Arial">Fecha Nacimiento</font> </td> 
					  <td> <font face="Arial">Domicilio</font> </td> 
				  </tr>';

			if ($result = $mysqli->query($query)) {
				while ($row = $result->fetch_assoc()) {
					$field1name = $row["col1"];
					$field2name = $row["col2"];
					$field3name = $row["col3"];
					$field4name = $row["col4"];
					$field5name = $row["col5"];
					$field6name = $row["col6"];
					$field7name = $row["col7"];
					

					echo '<tr> 
							  <td>'.$field1name.'</td> 
							  <td>'.$field2name.'</td> 
							  <td>'.$field3name.'</td> 
							  <td>'.$field4name.'</td> 
							  <td>'.$field5name.'</td> 
							  <td>'.$field6name.'</td> 
							  <td>'.$field7name.'</td> 
						  </tr>';
				}
				$result->free();
			} 
		?>
	</body>
</html>