
  <?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname='ims';
  $no = $_POST["sno"];
  $name = $_POST["name"];
  $descr = $_POST["descr"];
  $img = $_POST["img"];
  $conn=new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
  die("connection failed :" . $conn->connect_error);
  }
  $sql="INSERT INTO `product`(`sno`, `name`, `descr`, `image`) VALUES ($no,'$name','$descr','$img')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.Proceed to dashboard.php to verify the same !! ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  ?>
