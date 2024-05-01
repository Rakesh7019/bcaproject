<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "areca";
$conn = new mysqli($hostName, $userName, $password, $databaseName);

if(isset($_REQUEST['id']))
 {
    $id = $_REQUEST['id'];
    $query = "UPDATE `queryy1` SET `val`='0' WHERE nnumber=(SELECT nnumber FROM `queryy` WHERE id=$id) AND eemail=(SELECT eemail FROM `queryy` WHERE id=$id) AND nname=(SELECT nname FROM `queryy` WHERE id=$id) AND submission_date=(SELECT submission_date FROM `queryy` WHERE id=$id);";    
    $result = $conn->query($query);

    if($result == true)
    {    
        echo "success";
       
    } else {
        echo "Error deleting row: " . mysqli_error($conn);
    }

    
}

if(isset($_REQUEST['id']))
 {
    $id = $_REQUEST['id'];
    $query = "DELETE FROM queryy WHERE id = $id";    
    $result = $conn->query($query);

    if($result == true)
    {    
        header("Location:querydetails.php");
        
       
    } else {
        echo "Error deleting row: " . mysqli_error($conn);
    }

    
}
?>
