<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ims";
    $array=[];
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
            $name=$_POST['name'];
            $comment=$_POST['feedback'];
            $contact=$_POST['phone'];
             $sql= mysqli_query($conn,"INSERT INTO feedback VALUES('$name',$contact,'$comment')");
             $conn->close();
 ?>
