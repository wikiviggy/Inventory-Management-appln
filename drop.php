<?php
    //------insert.php------
     $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "ims";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
            $name=$_POST['name'];
       $sql= " DELETE from  product where name = '$name' ";
       if ($conn->query($sql) === TRUE) {
         echo "Record deleted successfully. Proceed to dashboard.php to verify the same !! ";
     } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
       $conn->close();
?>
