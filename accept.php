<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "areca";
$conn = new mysqli($hostName, $userName, $password, $databaseName);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_REQUEST['id']))
 {
    $id = $_REQUEST['id'];

    $query = "UPDATE `queryy` SET `val`='1' WHERE id=$id";
    $result = $conn->query($query);

    if($result == true){ 
        header("Location:querydetails.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>




