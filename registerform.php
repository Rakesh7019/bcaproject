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
$customer_email = $_POST['customer-email'];
$contact_number = $_POST['contact-number'];
$order_date = $_POST['order-date'];
$customer_address= $_POST['customer-address'];
$list_of_product = $_POST['list-of-product'];
$place_of_order = $_POST['place-of-order'];




$sql = "INSERT INTO pod (nname, eemail, nnumber, pickup_date, productlist, orderadd, placeorder)
VALUES ('$customer_name','$customer_email','$contact_number','$order_date','$customer_address','$list_of_product','$place_of_order');";


if ($conn->query($sql)) {
  $message = 'DETAILS SUBMITTED SUCCESSFULLY' ;

  echo "<SCRIPT> 
      alert('$message')
      window.location.replace('register.html');
  </SCRIPT>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>
