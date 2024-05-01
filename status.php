<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "areca";
$conn = new mysqli($hostName, $userName, $password, $databaseName);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['orderType']))
{
            $mobileNo = $_POST['mobileNo'];
            $orderType = $_POST['orderType'];
            if ($orderType == "query") {
                $table = "queryy";
            } else {
                echo "Please select the type.";
                exit;
            }

            $sql1 = "SELECT * FROM $table WHERE nnumber='$mobileNo' and val='0'";
            $result1 = $conn->query($sql1);
            $sql = "SELECT * FROM $table WHERE nnumber='$mobileNo' and val='1'";
            $result = $conn->query($sql);
            if($result1->num_rows > 0)
            {
                header("Location: os.html");
            }
            elseif($result->num_rows > 0) {
                header("Location: oss.html");
            } else {
                header("Location: ous.html");
            }

            $conn->close();
        }
        else
        {echo "Please select the order type.";
            exit;}
?>
