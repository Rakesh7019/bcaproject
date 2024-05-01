<?php
// Connect to the MySQL database
$host = "localhost";
$username = "root";
$password = "";
$database = "areca";

$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$customer_name = $_POST['customer-name'];
$customer_email = $_POST['company-email'];
$contact_number = $_POST['contact-number'];
$query_details= $_POST['query-details'];
$query_form = $_POST['query-form'];

$sql = "INSERT INTO queryy (nname, eemail, nnumber, query, queryfrom, val)
VALUES ('$customer_name','$customer_email','$contact_number','$query_details','$query_form','0');";

$sql .= "INSERT INTO queryy1 (nname, eemail, nnumber, query, queryfrom, val)
VALUES ('$customer_name','$customer_email','$contact_number','$query_details','$query_form','1');";


if ($conn->multi_query($sql) === TRUE) {
  $message = 'DETAILS SUBMITTED SUCCESSFULLY' ;

          echo "<SCRIPT> 
              alert('$message')
              window.location.replace('query.html');
          </SCRIPT>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>






