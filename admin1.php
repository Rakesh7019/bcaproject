<?php
// Connect to the MySQL database
$name = $_POST['name'];
$passw = $_POST['password'];
$maill = $_POST['email'];

$host = "localhost";
$username = "root";
$password = "";
$db = "areca";



$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into adminn (username,upassword,eemail) values('$name','$passw','$maill')";

if ($conn->query($sql) === TRUE) {
	$message = 'SIGN-UP SUCCESSFUL' ;

          echo "<SCRIPT> 
              alert('$message')
              window.location.replace('admin.html');
          </SCRIPT>";
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>
