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
  $price= [];
  $conn=new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
  die("connection failed :" . $conn->connect_error);
  }
  $sql="SELECT sno,name,price FROM transaction";
  $result=mysqli_query($conn,$sql);
  $i=0;
  if(mysqli_num_rows($result) > 0) {
  while($row=mysqli_fetch_assoc($result)){
  $no[$i]=$row['sno'];
  $name[$i]=$row['name'];
  $price[$i]=$row['price'];
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

  <br>

  <h4 class="header center blue-grey-text"><b>Calculate revenue per inventory  <b></h4>
  <hr>

  <div class="card">
<div class="card-content">
<div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="enter number of hoodies sold" id="hoodie"type="number"class="validate">
          <label for="hoodie"></label>
        </div>
</div>
  <div class="row">
  <div class="input-field col s6">
          <input placeholder="enter number of watches sold" id="watch" type="number" class="validate">
          <label for="watch"></label>
        </div>
      </div>
</div>
<button class="btn waves-effect waves-light" type="submit" name="submit" onclick="submitfunc()">Submit to see sales
  <i class="material-icons right"></i>
  </button>
<button onclick="location.href = 'ash_index.php';" id="myButton" class="btn waves-effect waves-light" >Return home
<i class="material-icons right"></i>
</button>
</div>
</body>
<script>
function submitfunc()
{
   var hoodie = $("#hoodie").val();
   var watch = $("#watch").val();
   var res1 = hoodie*<?php echo $price[0]; ?>;
   var res2 = watch*<?php echo $price[1] ; ?>;
   alert("revenue from hoodies are Rs. "+res1+"/- "+" and revenue from watches are Rs. "+res2+"/-");

}
</script>
</html>
