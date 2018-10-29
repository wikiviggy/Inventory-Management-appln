<!DOCTYPE HTML>
<html>
<head>
<title>Inventory Management System</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname='ims';
  $no= [];
  $name= [];
  $comm= [];
  $stats= [];
  $conn=new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
  die("connection failed :" . $conn->connect_error);
  }
  $sql="SELECT sno,name,comments,stats FROM results";
  $result=mysqli_query($conn,$sql);
  $i=0;
  if(mysqli_num_rows($result) > 0) {
  while($row=mysqli_fetch_assoc($result)){
  $no[$i]=$row['sno'];
  $name[$i]=$row['name'];
  $comm[$i]=$row['comments'];
  $stats[$i]=$row['stats'];
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
  <li><a href="tabular.php">Tabular Data</a></li>
  <li><a href="ash_index.php">Home</a></li>
  <li><a href="sales.php">Revenue</a></li>
  <li><a href="form.php">Feedback</a></li>
  </ul>
  </div>
  </nav>
  <br>

  <h4 class="header center blue-grey-text"><b>STATISTICS OF THE SALES<b></h4>
  <hr>

  <div class="container">
  <?php
  for($i=0;$i<count($no);$i++) {?>
    <div class="row">
    <div class="col s12 m6">
  <div class="card ">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?php echo $stats[$i]; ?>" width="200" height="200">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php echo $name[$i]; ?><i class="material-icons right">more_vert</i></span>
      <p><a href="#"></a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php echo $name[$i]; ?><i class="material-icons right">close</i></span>
      <p><?php echo $comm[$i]; ?></p>
    </div>
  </div>
  <hr>
</div>
</div>
<?php } ?>
</div>
</body>
</html>
