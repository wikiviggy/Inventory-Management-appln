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

  <h4 class="header center blue-grey-text"><b> Add Product to I.M.S. <b></h4>
  <hr>

  <div class="card">
<div class="card-content">
<form action ="insert.php" method="POST">
  Enter Product ID:<input type="number" name="sno">
  <br>
  <br>
  Enter product Name:<input type="text" name="name">
  <br>
  <br>
  Enter product description:<input type="text" name="descr">
  <br>
  <br>
  Enter image URL :<input type="text" name="img">
  <br>
  <br>
  <input type="submit" value="submit">
</form>
<button onclick="location.href = 'dashboard.php';" id="myButton" class="btn waves-effect waves-light" >Return to Dashboard
<i class="material-icons right"></i>
</button>
</div>
</div>
</body>
</html>
