<!DOCTYPE HTML>
<html>
<head>
<title>Inventory Management System</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>
<?php
$servername='localhost';
$username='root';
$password='mysql';
$dbname='ims';
$no= [];
$name= [];
$desc= [];
$image= [];
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed :" . $conn->connect_error);
}
$sql="SELECT sno,name,descr,image FROM product";
$result=mysqli_query($conn,$sql);
$i=0;
if(mysqli_num_rows($result) > 0) {
while($row=mysqli_fetch_assoc($result)){
$no[$i]=$row['sno'];
$name[$i]=$row['name'];
$desc[$i]=$row['descr'];
$image[$i]=$row['image'];
$i++;
}
}
else {
echo "0 results";
}
$conn->close();
?>





</head>
<body>
  <nav>
  <div class="nav-wrapper teal accent-4">
  <a href="https://www.facebook.com/bmsit/" class="brand-logo"><img src ="https://2.bp.blogspot.com/-aaSSumABwyk/VyCmn4CAIOI/AAAAAAAACM8/5KdHMr7VwLgzUNFPbZ0s_8NndM_uCi3pACLcB/s1600/BMSIT%2BLogo.png" width="60" height="60" ></a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
  <li><a href="ash_index.php">Home</a></li>
  <li><a href="tabular.php">Tabular Data</a></li>
  <li><a href="results.php">Results</a></li>
  <li><a href="sales.php">Revenue</a></li>
  <li><a href="form.php">Feedback</a></li>
  </ul>
  </div>
  </nav>
  <h4 class="header center blue-grey-text">Catalog of inventories</h4>
  <hr>

<div class="container">
<?php
for($i=0;$i<count($no);$i++) {?>
<div class="row">
<div class="col s12 m6">
<div class="card">
<div class="card-image">
<img src="<?php echo $image[$i]; ?>" width="200" height="250">
<span class="card-title" style="color:black;"><?php echo $name[$i]; ?></span>
</div>
<div class="card-content">
<p><?php echo $desc[$i]; ?></p>
</div>
</div>
<hr>
</div>

</div>
<?php } ?>

</div>
</body>

<script>

</script>
</html>
