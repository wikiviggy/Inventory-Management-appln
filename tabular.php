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
$ship= [];
$conf= [];
$remain=[];
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed :" . $conn->connect_error);
}
$sql="SELECT sno,name,shipped,confirmed,remain FROM invinf";
$result=mysqli_query($conn,$sql);
$i=0;
if(mysqli_num_rows($result) > 0) {
while($row=mysqli_fetch_assoc($result)){
$no[$i]=$row['sno'];
$name[$i]=$row['name'];
$ship[$i]=$row['shipped'];
$conf[$i]=$row['confirmed'];
$remain[$i]=$row['remain'];
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
          <li><a href="dashboard.php">Catalog</a></li>
          <li><a href="ash_index.php">Home</a></li>
          <li><a href="results.php">Results</a></li>
          <li><a href="sales.php">Revenue</a></li>
          <li><a href="form.php">Feedback</a></li>
        </ul>
      </div>
    </nav>


<div class="container">
<marquee>
<img src="https://static.wixstatic.com/media/73cb83_28368266823a40b8a50aaa7662b5aaca~mv2.jpg"  >
</marquee>
<div class="card">
<div class="card content">
<table class="highlight">
<thead>
          <tr>
              <th>Product ID</th>
              <th>Product Name</th>
              <th>Shipped pcs</th>
              <th>Confirmed pcs</th>
              <th>Remaining pcs</th>
          </tr>
        </thead>
<?php
for($i=0;$i<count($no);$i++) {?>
        <tbody>
          <tr>
            <td><?php echo $no[$i] ;?></td>
            <td><?php echo $name[$i] ;?></td>
            <td><?php echo $ship[$i] ;?></td>
            <td><?php echo $conf[$i] ;?></td>
            <td><?php echo $remain[$i] ; ?></td>
          </tr>
        </tbody>
<?php } ?>
</table>
</div>
</div>
</div>
</body>
</html>
