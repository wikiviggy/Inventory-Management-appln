<html>
<head>
<title>Inventory Management System</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname='ims';
$name= [];
$contact= [];
$comment= [];
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed :" . $conn->connect_error);
}
$sql="SELECT name,contact,comment FROM feedback";
$result=mysqli_query($conn,$sql);
$i=0;
if(mysqli_num_rows($result) > 0) {
while($row=mysqli_fetch_assoc($result)){
$name[$i]=$row['name'];
$contact[$i]=$row['contact'];
$comment[$i]=$row['comment'];
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
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROHik7uSpjIWCRk6sHsJ-LldFzOChBNrIfhznprSQW1adnVe4e"  >
</marquee>
<div class="card">
<div class="card content">
<table class="highlight">
<thead>
          <tr>
              <th>Name</th>
              <th>Contact</th>
              <th>Comments</th>
          </tr>
        </thead>
<?php
for($i=0;$i<count($name);$i++) {?>
        <tbody>
          <tr>
            <td><?php echo $name[$i] ;?></td>
            <td><?php echo $contact[$i] ;?></td>
            <td><?php echo $comment[$i] ;?></td>
          </tr>
        </tbody>
<?php } ?>
</table>
</div>
</div>
</div>
</body>
</html>
