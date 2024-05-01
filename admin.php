<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "areca";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
   
    $Username = mysqli_real_escape_string($conn, $_POST['username']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);

    // Prepare a SQL query to select the user's information from the database based on the entered username
    $query = "SELECT * FROM adminn WHERE username='$Username' and upassword = '$Password'";
    $stmt = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($stmt, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($stmt);

    if ($stmt === false) {
        die("Error preparing query: " . mysqli_error($conn));
    }
    if($count == 1){
        echo "<SCRIPT> 
            
            window.location.replace('adminPage.html');
           
        </SCRIPT>";
         
    }
    else{
        $message = 'INVALID DETAILS' ;

        echo "<SCRIPT> 
            alert('$message');
            window.location.replace('admin.html');
           
        </SCRIPT>";
    }
}

// Close the database connection
mysqli_close($conn);
?>
