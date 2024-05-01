<?php


$user = 'root';
$password = '';
$host = "localhost"; 
$database = 'areca';

$mysqli = new mysqli($host, $user,
				$password, $database);

				
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}


$sql = " SELECT * FROM queryy WHERE val='1'";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>QUERY DETAILS</title>
	
	<style>
		.button {
  background-color:rgb(28, 106, 174);
  padding: 15px 32px;
  border: 2px solid black;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 2px 1px;
  cursor: pointer;
  border-radius: 10px;
}
		table {
			margin: 0 auto;
			font-size: large;
			border: 2px solid black;
			margin-top: 60px;
		}

		h1 {
			text-align: center;
		
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}
		
    

		th,
		td {
			
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
	      
			
		}
		th{
			background-color:#cbf753;
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
	      
			
		}

		td {
			background-color:#f9fc59;
			border: 1px solid black;
			font-weight: lighter;
			color: #01416b;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
			
		}
	</style>
</head>

<body>

		<table>

			<tr>
            <th>Id</th>
            <th>Name</th>
				<th>Customer_email</th>
				<th>Contact_number</th>
				<th>Query</th>
				<th>Query From</th>
				
			</tr>
			
			
			<?php
				
				while($rows=$result->fetch_assoc())
				{
					
			?>
			
			
			<tr>
				
			<td><?php echo $rows['id'];?></td>
                    <td><?php echo $rows['nname'];?></td>
				<td><?php echo $rows['eemail'];?></td>
				<td><?php echo $rows['nnumber'];?></td>
				<td><?php echo $rows['query'];?></td>
				<td><?php echo $rows['queryfrom'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
